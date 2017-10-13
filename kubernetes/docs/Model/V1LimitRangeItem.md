# V1LimitRangeItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default** | **map[string,string]** | Default resource requirement limit value by resource name if resource limit is omitted. | [optional] 
**default_request** | **map[string,string]** | DefaultRequest is the default resource requirement request value by resource name if resource request is omitted. | [optional] 
**max** | **map[string,string]** | Max usage constraints on this kind by resource name. | [optional] 
**max_limit_request_ratio** | **map[string,string]** | MaxLimitRequestRatio if specified, the named resource must have a request and limit that are both non-zero where limit divided by request is less than or equal to the enumerated value; this represents the max burst for the named resource. | [optional] 
**min** | **map[string,string]** | Min usage constraints on this kind by resource name. | [optional] 
**type** | **string** | Type of resource that this limit applies to. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


