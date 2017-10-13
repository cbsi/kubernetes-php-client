# CBSi\Kubernetes\AutoscalingApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAPIGroup**](AutoscalingApi.md#getAPIGroup) | **GET** /apis/autoscaling/ | 


# **getAPIGroup**
> \CBSi\Kubernetes\Model\V1APIGroup getAPIGroup()



get information of a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAPIGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingApi->getAPIGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CBSi\Kubernetes\Model\V1APIGroup**](../Model/V1APIGroup.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/vnd.kubernetes.protobuf
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

