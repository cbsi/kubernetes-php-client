#!/usr/bin/env bash

#  Copyright (c) 2017 CBS Interactive Inc
#
#  Permission is hereby granted, free of charge, to any person obtaining a copy
#  of this software and associated documentation files (the "Software"), to deal
#  in the Software without restriction, including without limitation the rights
#  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
#  copies of the Software, and to permit persons to whom the Software is
#  furnished to do so, subject to the following conditions:
#
#  The above copyright notice and this permission notice shall be included in all
#  copies or substantial portions of the Software.
#
#  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
#  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
#  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
#  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
#  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
#  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
#  SOFTWARE.

set -o errexit
set -o nounset
set -o pipefail

if [ $# -ne 2 ]; then
    echo "Usage: generate.sh KUBERNETES_BRANCH CLIENT_VERSION"
    exit 1
fi

KUBERNETES_BRANCH=$1
CLIENT_VERSION=$2

SCRIPT_DIR=$(dirname "${BASH_SOURCE}")
pushd "${SCRIPT_DIR}" > /dev/null
SCRIPT_DIR=$(pwd)
REPO_ROOT=$(dirname $(pwd))
popd > /dev/null

rm -rf ${SCRIPT_DIR}/work && mkdir -p ${SCRIPT_DIR}/work
pushd "${SCRIPT_DIR}/work" > /dev/null
WORK_DIR=$(pwd)
popd > /dev/null

if [[ ! -d "${WORK_DIR}/gen" ]]; then
	git clone https://github.com/kubernetes-client/gen.git $WORK_DIR/gen
fi

cp ${SCRIPT_DIR}/src/php.* ${WORK_DIR}/gen/openapi/
cp -r ${SCRIPT_DIR}/src/templates ${WORK_DIR}

echo "export KUBERNETES_BRANCH=${KUBERNETES_BRANCH}" > ${WORK_DIR}/settings.sh
echo "export CLIENT_VERSION=${CLIENT_VERSION}" >> ${WORK_DIR}/settings.sh
echo "export PACKAGE_NAME=kubernetes" >> ${WORK_DIR}/settings.sh

${WORK_DIR}/gen/openapi/php.sh ${WORK_DIR} ${WORK_DIR}/settings.sh

rm -rf ${REPO_ROOT}/kubernetes
mv -f ${WORK_DIR}/swagger.json ${REPO_ROOT}
mv -f ${WORK_DIR}/kubernetes/composer.json ${REPO_ROOT}
mv -f ${WORK_DIR}/kubernetes/README.md ${REPO_ROOT}
mv -f ${WORK_DIR}/kubernetes ${REPO_ROOT}
rm -rf ${WORK_DIR}

docker container prune -f > /dev/null
docker rmi -f $(docker images -qf "dangling=true") 2>/dev/null 1>/dev/null

