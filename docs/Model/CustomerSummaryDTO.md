# CustomerSummaryDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | represents the internal id | [optional] 
**identification** | [**\Swagger\Client\Model\IdentificationDto**](IdentificationDto.md) | Unique identification of a customer compoesd by CountryCode, DocumentType and DocumentNumber | [optional] 
**name** | **string** | Customer&#39;s name | [optional] 
**city** | **string** | The Customer&#39;s city | [optional] 
**email** | **string** | The Customer&#39;s email; MaxLength: 200 | [optional] 
**legal_type** | **string** | The Customer&#39;s legal type (e.g. Legal, Natural) | [optional] 
**person** | [**\Swagger\Client\Model\PersonDTO**](PersonDTO.md) | Natural person name if LegalType &#x3D; Natural | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


