# V1alpha1ExternalAdmissionHook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_config** | [**\CBSi\Kubernetes\Model\V1alpha1AdmissionHookClientConfig**](V1alpha1AdmissionHookClientConfig.md) | ClientConfig defines how to communicate with the hook. Required | 
**failure_policy** | **string** | FailurePolicy defines how unrecognized errors from the admission endpoint are handled - allowed values are Ignore or Fail. Defaults to Ignore. | [optional] 
**name** | **string** | The name of the external admission webhook. Name should be fully qualified, e.g., imagepolicy.kubernetes.io, where \&quot;imagepolicy\&quot; is the name of the webhook, and kubernetes.io is the name of the organization. Required. | 
**rules** | [**\CBSi\Kubernetes\Model\V1alpha1RuleWithOperations[]**](V1alpha1RuleWithOperations.md) | Rules describes what operations on what resources/subresources the webhook cares about. The webhook cares about an operation if it matches _any_ Rule. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


