# UserInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The use name; MaxLength: 450 | 
**email** | **string** | The user email; MaxLength: 100 | 
**telephone** | **string** | The user contact; MaxLength: 20 | [optional] 
**timezone** | **string** | The user timezone; MaxLength: 50 | 
**language_code** | **string** | The user language; MaxLength: 50 | 
**roles** | [**\Swagger\Client\Model\RoleInputDto[]**](RoleInputDto.md) | The Global roles, if is a instance user | [optional] 
**company_memberships** | [**\Swagger\Client\Model\UserCompanyMembershipInputDto[]**](UserCompanyMembershipInputDto.md) | The user companies membership | [optional] 
**virtual_operator_memberships** | [**\Swagger\Client\Model\UserVirtualOperatorMembershipInputDto[]**](UserVirtualOperatorMembershipInputDto.md) | The user virtual operator membership | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


