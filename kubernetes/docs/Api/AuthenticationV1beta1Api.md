# CBSi\Kubernetes\AuthenticationV1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTokenReview**](AuthenticationV1beta1Api.md#createTokenReview) | **POST** /apis/authentication.k8s.io/v1beta1/tokenreviews | 
[**getAPIResources**](AuthenticationV1beta1Api.md#getAPIResources) | **GET** /apis/authentication.k8s.io/v1beta1/ | 


# **createTokenReview**
> \CBSi\Kubernetes\Model\V1beta1TokenReview createTokenReview($body, $pretty)



create a TokenReview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AuthenticationV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \CBSi\Kubernetes\Model\V1beta1TokenReview(); // \CBSi\Kubernetes\Model\V1beta1TokenReview | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createTokenReview($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationV1beta1Api->createTokenReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CBSi\Kubernetes\Model\V1beta1TokenReview**](../Model/V1beta1TokenReview.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1TokenReview**](../Model/V1beta1TokenReview.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPIResources**
> \CBSi\Kubernetes\Model\V1APIResourceList getAPIResources()



get available resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AuthenticationV1beta1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAPIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationV1beta1Api->getAPIResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CBSi\Kubernetes\Model\V1APIResourceList**](../Model/V1APIResourceList.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

