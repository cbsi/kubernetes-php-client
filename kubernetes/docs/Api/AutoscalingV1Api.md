# CBSi\Kubernetes\AutoscalingV1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNamespacedHorizontalPodAutoscaler**](AutoscalingV1Api.md#createNamespacedHorizontalPodAutoscaler) | **POST** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers | 
[**deleteCollectionNamespacedHorizontalPodAutoscaler**](AutoscalingV1Api.md#deleteCollectionNamespacedHorizontalPodAutoscaler) | **DELETE** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers | 
[**deleteNamespacedHorizontalPodAutoscaler**](AutoscalingV1Api.md#deleteNamespacedHorizontalPodAutoscaler) | **DELETE** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**getAPIResources**](AutoscalingV1Api.md#getAPIResources) | **GET** /apis/autoscaling/v1/ | 
[**listHorizontalPodAutoscalerForAllNamespaces**](AutoscalingV1Api.md#listHorizontalPodAutoscalerForAllNamespaces) | **GET** /apis/autoscaling/v1/horizontalpodautoscalers | 
[**listNamespacedHorizontalPodAutoscaler**](AutoscalingV1Api.md#listNamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers | 
[**patchNamespacedHorizontalPodAutoscaler**](AutoscalingV1Api.md#patchNamespacedHorizontalPodAutoscaler) | **PATCH** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**patchNamespacedHorizontalPodAutoscalerStatus**](AutoscalingV1Api.md#patchNamespacedHorizontalPodAutoscalerStatus) | **PATCH** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**readNamespacedHorizontalPodAutoscaler**](AutoscalingV1Api.md#readNamespacedHorizontalPodAutoscaler) | **GET** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**readNamespacedHorizontalPodAutoscalerStatus**](AutoscalingV1Api.md#readNamespacedHorizontalPodAutoscalerStatus) | **GET** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 
[**replaceNamespacedHorizontalPodAutoscaler**](AutoscalingV1Api.md#replaceNamespacedHorizontalPodAutoscaler) | **PUT** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name} | 
[**replaceNamespacedHorizontalPodAutoscalerStatus**](AutoscalingV1Api.md#replaceNamespacedHorizontalPodAutoscalerStatus) | **PUT** /apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status | 


# **createNamespacedHorizontalPodAutoscaler**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler createNamespacedHorizontalPodAutoscaler($namespace, $body, $pretty)



create a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler(); // \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedHorizontalPodAutoscaler($namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->createNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectionNamespacedHorizontalPodAutoscaler**
> \CBSi\Kubernetes\Model\V1Status deleteCollectionNamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$include_uninitialized = true; // bool | If true, partially initialized resources are included in the response.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionNamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->deleteCollectionNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **include_uninitialized** | **bool**| If true, partially initialized resources are included in the response. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1Status**](../Model/V1Status.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedHorizontalPodAutoscaler**
> \CBSi\Kubernetes\Model\V1Status deleteNamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \CBSi\Kubernetes\Model\V1DeleteOptions(); // \CBSi\Kubernetes\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->deleteNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\CBSi\Kubernetes\Model\V1DeleteOptions**](../Model/V1DeleteOptions.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1Status**](../Model/V1Status.md)

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

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAPIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->getAPIResources: ', $e->getMessage(), PHP_EOL;
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

# **listHorizontalPodAutoscalerForAllNamespaces**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscalerList listHorizontalPodAutoscalerForAllNamespaces($field_selector, $include_uninitialized, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$include_uninitialized = true; // bool | If true, partially initialized resources are included in the response.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listHorizontalPodAutoscalerForAllNamespaces($field_selector, $include_uninitialized, $label_selector, $pretty, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->listHorizontalPodAutoscalerForAllNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **include_uninitialized** | **bool**| If true, partially initialized resources are included in the response. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscalerList**](../Model/V1HorizontalPodAutoscalerList.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedHorizontalPodAutoscaler**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscalerList listNamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$include_uninitialized = true; // bool | If true, partially initialized resources are included in the response.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listNamespacedHorizontalPodAutoscaler($namespace, $pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->listNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **include_uninitialized** | **bool**| If true, partially initialized resources are included in the response. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscalerList**](../Model/V1HorizontalPodAutoscalerList.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedHorizontalPodAutoscaler**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler patchNamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty)



partially update the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = NULL; // object | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->patchNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | **object**|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchNamespacedHorizontalPodAutoscalerStatus**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler patchNamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty)



partially update status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = NULL; // object | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchNamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->patchNamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | **object**|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedHorizontalPodAutoscaler**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler readNamespacedHorizontalPodAutoscaler($name, $namespace, $pretty, $exact, $export)



read the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readNamespacedHorizontalPodAutoscaler($name, $namespace, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->readNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readNamespacedHorizontalPodAutoscalerStatus**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler readNamespacedHorizontalPodAutoscalerStatus($name, $namespace, $pretty)



read status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->readNamespacedHorizontalPodAutoscalerStatus($name, $namespace, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->readNamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedHorizontalPodAutoscaler**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler replaceNamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty)



replace the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler(); // \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedHorizontalPodAutoscaler($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->replaceNamespacedHorizontalPodAutoscaler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedHorizontalPodAutoscalerStatus**
> \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler replaceNamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty)



replace status of the specified HorizontalPodAutoscaler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\AutoscalingV1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the HorizontalPodAutoscaler
$namespace = "namespace_example"; // string | object name and auth scope, such as for teams and projects
$body = new \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler(); // \CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceNamespacedHorizontalPodAutoscalerStatus($name, $namespace, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoscalingV1Api->replaceNamespacedHorizontalPodAutoscalerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the HorizontalPodAutoscaler |
 **namespace** | **string**| object name and auth scope, such as for teams and projects |
 **body** | [**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1HorizontalPodAutoscaler**](../Model/V1HorizontalPodAutoscaler.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

