# CBSi\Kubernetes\CustomObjectsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClusterCustomObject**](CustomObjectsApi.md#createClusterCustomObject) | **POST** /apis/{group}/{version}/{plural} | 
[**createNamespacedCustomObject**](CustomObjectsApi.md#createNamespacedCustomObject) | **POST** /apis/{group}/{version}/namespaces/{namespace}/{plural} | 
[**deleteClusterCustomObject**](CustomObjectsApi.md#deleteClusterCustomObject) | **DELETE** /apis/{group}/{version}/{plural}/{name} | 
[**deleteNamespacedCustomObject**](CustomObjectsApi.md#deleteNamespacedCustomObject) | **DELETE** /apis/{group}/{version}/namespaces/{namespace}/{plural}/{name} | 
[**getClusterCustomObject**](CustomObjectsApi.md#getClusterCustomObject) | **GET** /apis/{group}/{version}/{plural}/{name} | 
[**getNamespacedCustomObject**](CustomObjectsApi.md#getNamespacedCustomObject) | **GET** /apis/{group}/{version}/namespaces/{namespace}/{plural}/{name} | 
[**listClusterCustomObject**](CustomObjectsApi.md#listClusterCustomObject) | **GET** /apis/{group}/{version}/{plural} | 
[**listNamespacedCustomObject**](CustomObjectsApi.md#listNamespacedCustomObject) | **GET** /apis/{group}/{version}/namespaces/{namespace}/{plural} | 
[**replaceClusterCustomObject**](CustomObjectsApi.md#replaceClusterCustomObject) | **PUT** /apis/{group}/{version}/{plural}/{name} | 
[**replaceNamespacedCustomObject**](CustomObjectsApi.md#replaceNamespacedCustomObject) | **PUT** /apis/{group}/{version}/namespaces/{namespace}/{plural}/{name} | 


# **createClusterCustomObject**
> object createClusterCustomObject($group, $version, $plural, $body, $pretty)



Creates a cluster scoped Custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | The custom resource's group name
$version = "version_example"; // string | The custom resource's version
$plural = "plural_example"; // string | The custom resource's plural name. For TPRs this would be lowercase plural kind.
$body = NULL; // object | The JSON schema of the Resource to create.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createClusterCustomObject($group, $version, $plural, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->createClusterCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The custom resource&#39;s group name |
 **version** | **string**| The custom resource&#39;s version |
 **plural** | **string**| The custom resource&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **body** | **object**| The JSON schema of the Resource to create. |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNamespacedCustomObject**
> object createNamespacedCustomObject($group, $version, $namespace, $plural, $body, $pretty)



Creates a namespace scoped Custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | The custom resource's group name
$version = "version_example"; // string | The custom resource's version
$namespace = "namespace_example"; // string | The custom resource's namespace
$plural = "plural_example"; // string | The custom resource's plural name. For TPRs this would be lowercase plural kind.
$body = NULL; // object | The JSON schema of the Resource to create.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createNamespacedCustomObject($group, $version, $namespace, $plural, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->createNamespacedCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The custom resource&#39;s group name |
 **version** | **string**| The custom resource&#39;s version |
 **namespace** | **string**| The custom resource&#39;s namespace |
 **plural** | **string**| The custom resource&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **body** | **object**| The JSON schema of the Resource to create. |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClusterCustomObject**
> object deleteClusterCustomObject($group, $version, $plural, $name, $body, $grace_period_seconds, $orphan_dependents, $propagation_policy)



Deletes the specified cluster scoped custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | the custom resource's group
$version = "version_example"; // string | the custom resource's version
$plural = "plural_example"; // string | the custom object's plural name. For TPRs this would be lowercase plural kind.
$name = "name_example"; // string | the custom object's name
$body = new \CBSi\Kubernetes\Model\V1DeleteOptions(); // \CBSi\Kubernetes\Model\V1DeleteOptions | 
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteClusterCustomObject($group, $version, $plural, $name, $body, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->deleteClusterCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| the custom resource&#39;s group |
 **version** | **string**| the custom resource&#39;s version |
 **plural** | **string**| the custom object&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **name** | **string**| the custom object&#39;s name |
 **body** | [**\CBSi\Kubernetes\Model\V1DeleteOptions**](../Model/V1DeleteOptions.md)|  |
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamespacedCustomObject**
> object deleteNamespacedCustomObject($group, $version, $namespace, $plural, $name, $body, $grace_period_seconds, $orphan_dependents, $propagation_policy)



Deletes the specified namespace scoped custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | the custom resource's group
$version = "version_example"; // string | the custom resource's version
$namespace = "namespace_example"; // string | The custom resource's namespace
$plural = "plural_example"; // string | the custom resource's plural name. For TPRs this would be lowercase plural kind.
$name = "name_example"; // string | the custom object's name
$body = new \CBSi\Kubernetes\Model\V1DeleteOptions(); // \CBSi\Kubernetes\Model\V1DeleteOptions | 
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteNamespacedCustomObject($group, $version, $namespace, $plural, $name, $body, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->deleteNamespacedCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| the custom resource&#39;s group |
 **version** | **string**| the custom resource&#39;s version |
 **namespace** | **string**| The custom resource&#39;s namespace |
 **plural** | **string**| the custom resource&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **name** | **string**| the custom object&#39;s name |
 **body** | [**\CBSi\Kubernetes\Model\V1DeleteOptions**](../Model/V1DeleteOptions.md)|  |
 **grace_period_seconds** | **int**| The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately. | [optional]
 **orphan_dependents** | **bool**| Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \&quot;orphan\&quot; finalizer will be added to/removed from the object&#39;s finalizers list. Either this field or PropagationPolicy may be set, but not both. | [optional]
 **propagation_policy** | **string**| Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy. | [optional]

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClusterCustomObject**
> object getClusterCustomObject($group, $version, $plural, $name)



Returns a cluster scoped custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | the custom resource's group
$version = "version_example"; // string | the custom resource's version
$plural = "plural_example"; // string | the custom object's plural name. For TPRs this would be lowercase plural kind.
$name = "name_example"; // string | the custom object's name

try {
    $result = $api_instance->getClusterCustomObject($group, $version, $plural, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->getClusterCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| the custom resource&#39;s group |
 **version** | **string**| the custom resource&#39;s version |
 **plural** | **string**| the custom object&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **name** | **string**| the custom object&#39;s name |

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNamespacedCustomObject**
> object getNamespacedCustomObject($group, $version, $namespace, $plural, $name)



Returns a namespace scoped custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | the custom resource's group
$version = "version_example"; // string | the custom resource's version
$namespace = "namespace_example"; // string | The custom resource's namespace
$plural = "plural_example"; // string | the custom resource's plural name. For TPRs this would be lowercase plural kind.
$name = "name_example"; // string | the custom object's name

try {
    $result = $api_instance->getNamespacedCustomObject($group, $version, $namespace, $plural, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->getNamespacedCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| the custom resource&#39;s group |
 **version** | **string**| the custom resource&#39;s version |
 **namespace** | **string**| The custom resource&#39;s namespace |
 **plural** | **string**| the custom resource&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **name** | **string**| the custom object&#39;s name |

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusterCustomObject**
> object listClusterCustomObject($group, $version, $plural, $pretty, $label_selector, $resource_version, $watch)



list or watch cluster scoped custom objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | The custom resource's group name
$version = "version_example"; // string | The custom resource's version
$plural = "plural_example"; // string | The custom resource's plural name. For TPRs this would be lowercase plural kind.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications.

try {
    $result = $api_instance->listClusterCustomObject($group, $version, $plural, $pretty, $label_selector, $resource_version, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->listClusterCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The custom resource&#39;s group name |
 **version** | **string**| The custom resource&#39;s version |
 **plural** | **string**| The custom resource&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. | [optional]

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/json;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNamespacedCustomObject**
> object listNamespacedCustomObject($group, $version, $namespace, $plural, $pretty, $label_selector, $resource_version, $watch)



list or watch namespace scoped custom objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | The custom resource's group name
$version = "version_example"; // string | The custom resource's version
$namespace = "namespace_example"; // string | The custom resource's namespace
$plural = "plural_example"; // string | The custom resource's plural name. For TPRs this would be lowercase plural kind.
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications.

try {
    $result = $api_instance->listNamespacedCustomObject($group, $version, $namespace, $plural, $pretty, $label_selector, $resource_version, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->listNamespacedCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The custom resource&#39;s group name |
 **version** | **string**| The custom resource&#39;s version |
 **namespace** | **string**| The custom resource&#39;s namespace |
 **plural** | **string**| The custom resource&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. | [optional]

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/json;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceClusterCustomObject**
> object replaceClusterCustomObject($group, $version, $plural, $name, $body)



replace the specified cluster scoped custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | the custom resource's group
$version = "version_example"; // string | the custom resource's version
$plural = "plural_example"; // string | the custom object's plural name. For TPRs this would be lowercase plural kind.
$name = "name_example"; // string | the custom object's name
$body = NULL; // object | The JSON schema of the Resource to replace.

try {
    $result = $api_instance->replaceClusterCustomObject($group, $version, $plural, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->replaceClusterCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| the custom resource&#39;s group |
 **version** | **string**| the custom resource&#39;s version |
 **plural** | **string**| the custom object&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **name** | **string**| the custom object&#39;s name |
 **body** | **object**| The JSON schema of the Resource to replace. |

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceNamespacedCustomObject**
> object replaceNamespacedCustomObject($group, $version, $namespace, $plural, $name, $body)



replace the specified namespace scoped custom object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CustomObjectsApi(new \Http\Adapter\Guzzle6\Client());
$group = "group_example"; // string | the custom resource's group
$version = "version_example"; // string | the custom resource's version
$namespace = "namespace_example"; // string | The custom resource's namespace
$plural = "plural_example"; // string | the custom resource's plural name. For TPRs this would be lowercase plural kind.
$name = "name_example"; // string | the custom object's name
$body = NULL; // object | The JSON schema of the Resource to replace.

try {
    $result = $api_instance->replaceNamespacedCustomObject($group, $version, $namespace, $plural, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->replaceNamespacedCustomObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| the custom resource&#39;s group |
 **version** | **string**| the custom resource&#39;s version |
 **namespace** | **string**| The custom resource&#39;s namespace |
 **plural** | **string**| the custom resource&#39;s plural name. For TPRs this would be lowercase plural kind. |
 **name** | **string**| the custom object&#39;s name |
 **body** | **object**| The JSON schema of the Resource to replace. |

### Return type

**object**

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

