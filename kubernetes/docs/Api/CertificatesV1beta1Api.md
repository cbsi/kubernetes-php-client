# CBSi\Kubernetes\CertificatesV1beta1Api

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCertificateSigningRequest**](CertificatesV1beta1Api.md#createCertificateSigningRequest) | **POST** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests | 
[**deleteCertificateSigningRequest**](CertificatesV1beta1Api.md#deleteCertificateSigningRequest) | **DELETE** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**deleteCollectionCertificateSigningRequest**](CertificatesV1beta1Api.md#deleteCollectionCertificateSigningRequest) | **DELETE** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests | 
[**getAPIResources**](CertificatesV1beta1Api.md#getAPIResources) | **GET** /apis/certificates.k8s.io/v1beta1/ | 
[**listCertificateSigningRequest**](CertificatesV1beta1Api.md#listCertificateSigningRequest) | **GET** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests | 
[**patchCertificateSigningRequest**](CertificatesV1beta1Api.md#patchCertificateSigningRequest) | **PATCH** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**readCertificateSigningRequest**](CertificatesV1beta1Api.md#readCertificateSigningRequest) | **GET** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**replaceCertificateSigningRequest**](CertificatesV1beta1Api.md#replaceCertificateSigningRequest) | **PUT** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name} | 
[**replaceCertificateSigningRequestApproval**](CertificatesV1beta1Api.md#replaceCertificateSigningRequestApproval) | **PUT** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/approval | 
[**replaceCertificateSigningRequestStatus**](CertificatesV1beta1Api.md#replaceCertificateSigningRequestStatus) | **PUT** /apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/status | 


# **createCertificateSigningRequest**
> \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest createCertificateSigningRequest($body, $pretty)



create a CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$body = new \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest(); // \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->createCertificateSigningRequest($body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->createCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCertificateSigningRequest**
> \CBSi\Kubernetes\Model\V1Status deleteCertificateSigningRequest($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy)



delete a CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \CBSi\Kubernetes\Model\V1DeleteOptions(); // \CBSi\Kubernetes\Model\V1DeleteOptions | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$grace_period_seconds = 56; // int | The duration in seconds before the object should be deleted. Value must be non-negative integer. The value zero indicates delete immediately. If this value is nil, the default grace period for the specified type will be used. Defaults to a per object value if not specified. zero means delete immediately.
$orphan_dependents = true; // bool | Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7. Should the dependent objects be orphaned. If true/false, the \"orphan\" finalizer will be added to/removed from the object's finalizers list. Either this field or PropagationPolicy may be set, but not both.
$propagation_policy = "propagation_policy_example"; // string | Whether and how garbage collection will be performed. Either this field or OrphanDependents may be set, but not both. The default policy is decided by the existing finalizer set in the metadata.finalizers and the resource-specific default policy.

try {
    $result = $api_instance->deleteCertificateSigningRequest($name, $body, $pretty, $grace_period_seconds, $orphan_dependents, $propagation_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->deleteCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
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

# **deleteCollectionCertificateSigningRequest**
> \CBSi\Kubernetes\Model\V1Status deleteCollectionCertificateSigningRequest($pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch)



delete collection of CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$include_uninitialized = true; // bool | If true, partially initialized resources are included in the response.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->deleteCollectionCertificateSigningRequest($pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->deleteCollectionCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAPIResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->getAPIResources: ', $e->getMessage(), PHP_EOL;
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

# **listCertificateSigningRequest**
> \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequestList listCertificateSigningRequest($pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch)



list or watch objects of kind CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$field_selector = "field_selector_example"; // string | A selector to restrict the list of returned objects by their fields. Defaults to everything.
$include_uninitialized = true; // bool | If true, partially initialized resources are included in the response.
$label_selector = "label_selector_example"; // string | A selector to restrict the list of returned objects by their labels. Defaults to everything.
$resource_version = "resource_version_example"; // string | When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it's 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv.
$timeout_seconds = 56; // int | Timeout for the list/watch call.
$watch = true; // bool | Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion.

try {
    $result = $api_instance->listCertificateSigningRequest($pretty, $field_selector, $include_uninitialized, $label_selector, $resource_version, $timeout_seconds, $watch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->listCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **field_selector** | **string**| A selector to restrict the list of returned objects by their fields. Defaults to everything. | [optional]
 **include_uninitialized** | **bool**| If true, partially initialized resources are included in the response. | [optional]
 **label_selector** | **string**| A selector to restrict the list of returned objects by their labels. Defaults to everything. | [optional]
 **resource_version** | **string**| When specified with a watch call, shows changes that occur after that particular version of a resource. Defaults to changes from the beginning of history. When specified for list: - if unset, then the result is returned from remote storage based on quorum-read flag; - if it&#39;s 0, then we simply return what we currently have in cache, no guarantee; - if set to non zero, then the result is at least as fresh as given rv. | [optional]
 **timeout_seconds** | **int**| Timeout for the list/watch call. | [optional]
 **watch** | **bool**| Watch for changes to the described resources and return them as a stream of add, update, and remove notifications. Specify resourceVersion. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequestList**](../Model/V1beta1CertificateSigningRequestList.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf, application/json;stream=watch, application/vnd.kubernetes.protobuf;stream=watch

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCertificateSigningRequest**
> \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest patchCertificateSigningRequest($name, $body, $pretty)



partially update the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = NULL; // object | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->patchCertificateSigningRequest($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->patchCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | **object**|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/merge-patch+json, application/strategic-merge-patch+json
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCertificateSigningRequest**
> \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest readCertificateSigningRequest($name, $pretty, $exact, $export)



read the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the CertificateSigningRequest
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.
$exact = true; // bool | Should the export be exact.  Exact export maintains cluster-specific fields like 'Namespace'.
$export = true; // bool | Should this value be exported.  Export strips fields that a user can not specify.

try {
    $result = $api_instance->readCertificateSigningRequest($name, $pretty, $exact, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->readCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]
 **exact** | **bool**| Should the export be exact.  Exact export maintains cluster-specific fields like &#39;Namespace&#39;. | [optional]
 **export** | **bool**| Should this value be exported.  Export strips fields that a user can not specify. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCertificateSigningRequest**
> \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest replaceCertificateSigningRequest($name, $body, $pretty)



replace the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest(); // \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceCertificateSigningRequest($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->replaceCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | [**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCertificateSigningRequestApproval**
> \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest replaceCertificateSigningRequestApproval($name, $body, $pretty)



replace approval of the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest(); // \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceCertificateSigningRequestApproval($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->replaceCertificateSigningRequestApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | [**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCertificateSigningRequestStatus**
> \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest replaceCertificateSigningRequestStatus($name, $body, $pretty)



replace status of the specified CertificateSigningRequest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// CBSi\Kubernetes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new CBSi\Kubernetes\Api\CertificatesV1beta1Api(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | name of the CertificateSigningRequest
$body = new \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest(); // \CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest | 
$pretty = "pretty_example"; // string | If 'true', then the output is pretty printed.

try {
    $result = $api_instance->replaceCertificateSigningRequestStatus($name, $body, $pretty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesV1beta1Api->replaceCertificateSigningRequestStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name of the CertificateSigningRequest |
 **body** | [**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)|  |
 **pretty** | **string**| If &#39;true&#39;, then the output is pretty printed. | [optional]

### Return type

[**\CBSi\Kubernetes\Model\V1beta1CertificateSigningRequest**](../Model/V1beta1CertificateSigningRequest.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json, application/yaml, application/vnd.kubernetes.protobuf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

