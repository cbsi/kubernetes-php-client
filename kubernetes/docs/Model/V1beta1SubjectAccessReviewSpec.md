# V1beta1SubjectAccessReviewSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extra** | [**map[string,string[]]**](array.md) | Extra corresponds to the user.Info.GetExtra() method from the authenticator.  Since that is input to the authorizer it needs a reflection here. | [optional] 
**group** | **string[]** | Groups is the groups you&#39;re testing for. | [optional] 
**non_resource_attributes** | [**\CBSi\Kubernetes\Model\V1beta1NonResourceAttributes**](V1beta1NonResourceAttributes.md) | NonResourceAttributes describes information for a non-resource access request | [optional] 
**resource_attributes** | [**\CBSi\Kubernetes\Model\V1beta1ResourceAttributes**](V1beta1ResourceAttributes.md) | ResourceAuthorizationAttributes describes information for a resource access request | [optional] 
**user** | **string** | User is the user you&#39;re testing for. If you specify \&quot;User\&quot; but not \&quot;Group\&quot;, then is it interpreted as \&quot;What if User were not a member of any groups | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


