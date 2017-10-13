# Client Builder

Usage: `build/build.sh KUBERNETES_RELEASE CLIENT_RELEASE`

The client builder uses the [Swagger Code Generator](https://github.com/swagger-api/swagger-codegen) to build a PHP
client from the Kubernetes OpenAPI spec. Currently we are building from swagger-codegen's master at
[this commit](https://github.com/swagger-api/swagger-codegen/tree/d2b91073e1fc499fea67141ff4c17740d25f8e83/modules/swagger-codegen/src/main/resources/php)
(which is slightly ahead of tag v2.3.2 at this time). This is controlled
[here in php.sh](https://github.com/cbsi/kubernetes-php-client/build/src/php.sh).