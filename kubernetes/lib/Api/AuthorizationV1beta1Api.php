<?php
/**
 * AuthorizationV1beta1Api
 * PHP version 5
 *
 * @category Class
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kubernetes
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.7.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CBSi\Kubernetes\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use CBSi\Kubernetes\ApiException;
use CBSi\Kubernetes\Configuration;
use CBSi\Kubernetes\HeaderSelector;
use CBSi\Kubernetes\ObjectSerializer;

/**
 * AuthorizationV1beta1Api Class Doc Comment
 *
 * @category Class
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorizationV1beta1Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createNamespacedLocalSubjectAccessReview
     *
     * @param  string $namespace object name and auth scope, such as for teams and projects (required)
     * @param  \CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview $body body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview
     */
    public function createNamespacedLocalSubjectAccessReview($namespace, $body, $pretty = null)
    {
        list($response) = $this->createNamespacedLocalSubjectAccessReviewWithHttpInfo($namespace, $body, $pretty);
        return $response;
    }

    /**
     * Operation createNamespacedLocalSubjectAccessReviewWithHttpInfo
     *
     * @param  string $namespace object name and auth scope, such as for teams and projects (required)
     * @param  \CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNamespacedLocalSubjectAccessReviewWithHttpInfo($namespace, $body, $pretty = null)
    {
        $returnType = '\CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview';
        $request = $this->createNamespacedLocalSubjectAccessReviewRequest($namespace, $body, $pretty);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createNamespacedLocalSubjectAccessReviewAsync
     *
     * 
     *
     * @param  string $namespace object name and auth scope, such as for teams and projects (required)
     * @param  \CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createNamespacedLocalSubjectAccessReviewAsync($namespace, $body, $pretty = null)
    {
        return $this->createNamespacedLocalSubjectAccessReviewAsyncWithHttpInfo($namespace, $body, $pretty)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createNamespacedLocalSubjectAccessReviewAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $namespace object name and auth scope, such as for teams and projects (required)
     * @param  \CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createNamespacedLocalSubjectAccessReviewAsyncWithHttpInfo($namespace, $body, $pretty = null)
    {
        $returnType = '\CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview';
        $request = $this->createNamespacedLocalSubjectAccessReviewRequest($namespace, $body, $pretty);

        return $this->client
            ->sendAsync($request)
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createNamespacedLocalSubjectAccessReview'
     *
     * @param  string $namespace object name and auth scope, such as for teams and projects (required)
     * @param  \CBSi\Kubernetes\Model\V1beta1LocalSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createNamespacedLocalSubjectAccessReviewRequest($namespace, $body, $pretty = null)
    {
        // verify the required parameter 'namespace' is set
        if ($namespace === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $namespace when calling createNamespacedLocalSubjectAccessReview'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createNamespacedLocalSubjectAccessReview'
            );
        }

        $resourcePath = '/apis/authorization.k8s.io/v1beta1/namespaces/{namespace}/localsubjectaccessreviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($pretty !== null) {
            $queryParams['pretty'] = ObjectSerializer::toQueryValue($pretty);
        }

        // path params
        if ($namespace !== null) {
            $resourcePath = str_replace(
                '{' . 'namespace' . '}',
                ObjectSerializer::toPathValue($namespace),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf'],
                ['*/*']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('authorization');
        if ($apiKey !== null) {
            $headers['authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createSelfSubjectAccessReview
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview $body body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview
     */
    public function createSelfSubjectAccessReview($body, $pretty = null)
    {
        list($response) = $this->createSelfSubjectAccessReviewWithHttpInfo($body, $pretty);
        return $response;
    }

    /**
     * Operation createSelfSubjectAccessReviewWithHttpInfo
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSelfSubjectAccessReviewWithHttpInfo($body, $pretty = null)
    {
        $returnType = '\CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview';
        $request = $this->createSelfSubjectAccessReviewRequest($body, $pretty);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createSelfSubjectAccessReviewAsync
     *
     * 
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSelfSubjectAccessReviewAsync($body, $pretty = null)
    {
        return $this->createSelfSubjectAccessReviewAsyncWithHttpInfo($body, $pretty)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createSelfSubjectAccessReviewAsyncWithHttpInfo
     *
     * 
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSelfSubjectAccessReviewAsyncWithHttpInfo($body, $pretty = null)
    {
        $returnType = '\CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview';
        $request = $this->createSelfSubjectAccessReviewRequest($body, $pretty);

        return $this->client
            ->sendAsync($request)
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createSelfSubjectAccessReview'
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SelfSubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createSelfSubjectAccessReviewRequest($body, $pretty = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createSelfSubjectAccessReview'
            );
        }

        $resourcePath = '/apis/authorization.k8s.io/v1beta1/selfsubjectaccessreviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($pretty !== null) {
            $queryParams['pretty'] = ObjectSerializer::toQueryValue($pretty);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf'],
                ['*/*']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('authorization');
        if ($apiKey !== null) {
            $headers['authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createSubjectAccessReview
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SubjectAccessReview $body body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CBSi\Kubernetes\Model\V1beta1SubjectAccessReview
     */
    public function createSubjectAccessReview($body, $pretty = null)
    {
        list($response) = $this->createSubjectAccessReviewWithHttpInfo($body, $pretty);
        return $response;
    }

    /**
     * Operation createSubjectAccessReviewWithHttpInfo
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CBSi\Kubernetes\Model\V1beta1SubjectAccessReview, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSubjectAccessReviewWithHttpInfo($body, $pretty = null)
    {
        $returnType = '\CBSi\Kubernetes\Model\V1beta1SubjectAccessReview';
        $request = $this->createSubjectAccessReviewRequest($body, $pretty);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CBSi\Kubernetes\Model\V1beta1SubjectAccessReview',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createSubjectAccessReviewAsync
     *
     * 
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSubjectAccessReviewAsync($body, $pretty = null)
    {
        return $this->createSubjectAccessReviewAsyncWithHttpInfo($body, $pretty)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createSubjectAccessReviewAsyncWithHttpInfo
     *
     * 
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSubjectAccessReviewAsyncWithHttpInfo($body, $pretty = null)
    {
        $returnType = '\CBSi\Kubernetes\Model\V1beta1SubjectAccessReview';
        $request = $this->createSubjectAccessReviewRequest($body, $pretty);

        return $this->client
            ->sendAsync($request)
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createSubjectAccessReview'
     *
     * @param  \CBSi\Kubernetes\Model\V1beta1SubjectAccessReview $body (required)
     * @param  string $pretty If &#39;true&#39;, then the output is pretty printed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createSubjectAccessReviewRequest($body, $pretty = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createSubjectAccessReview'
            );
        }

        $resourcePath = '/apis/authorization.k8s.io/v1beta1/subjectaccessreviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($pretty !== null) {
            $queryParams['pretty'] = ObjectSerializer::toQueryValue($pretty);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf'],
                ['*/*']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('authorization');
        if ($apiKey !== null) {
            $headers['authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAPIResources
     *
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CBSi\Kubernetes\Model\V1APIResourceList
     */
    public function getAPIResources()
    {
        list($response) = $this->getAPIResourcesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAPIResourcesWithHttpInfo
     *
     *
     * @throws \CBSi\Kubernetes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CBSi\Kubernetes\Model\V1APIResourceList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAPIResourcesWithHttpInfo()
    {
        $returnType = '\CBSi\Kubernetes\Model\V1APIResourceList';
        $request = $this->getAPIResourcesRequest();

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CBSi\Kubernetes\Model\V1APIResourceList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAPIResourcesAsync
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPIResourcesAsync()
    {
        return $this->getAPIResourcesAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAPIResourcesAsyncWithHttpInfo
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPIResourcesAsyncWithHttpInfo()
    {
        $returnType = '\CBSi\Kubernetes\Model\V1APIResourceList';
        $request = $this->getAPIResourcesRequest();

        return $this->client
            ->sendAsync($request)
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAPIResources'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAPIResourcesRequest()
    {

        $resourcePath = '/apis/authorization.k8s.io/v1beta1/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf'],
                ['application/json', 'application/yaml', 'application/vnd.kubernetes.protobuf']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('authorization');
        if ($apiKey !== null) {
            $headers['authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

}
