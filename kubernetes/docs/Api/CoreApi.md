# CBSi\Kubernetes\CoreApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAPIVersions**](CoreApi.md#getAPIVersions) | **GET** /api/ | 


# **getAPIVersions**
> \CBSi\Kubernetes\Model\V1APIVersions getAPIVersions()



get available API versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CoreApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAPIVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->getAPIVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CBSi\Kubernetes\Model\V1APIVersions**](../Model/V1APIVersions.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

