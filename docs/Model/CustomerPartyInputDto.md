# CustomerPartyInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tele_fax** | **string** | TeleFax | [optional] 
**document_contacts** | [**\Swagger\Client\Model\DocumentContactInputDto[]**](DocumentContactInputDto.md) | Party contacts related to  current document | [optional] 
**gln** | **string** | Party GLN; MaxLength: 13 | [optional] 
**legal_type** | **string** | Document type identification. The value must be one of this: [&#39;Natural&#39;, &#39;Legal&#39;] | 
**identification** | [**\Swagger\Client\Model\IdentificationInputDto**](IdentificationInputDto.md) | Identification | 
**name** | **string** | Name of commercial establishment.   Required if LegalType &#x3D; Legal; MaxLength: 450 | [optional] 
**website_url** | **string** | Website url; MaxLength: 250 | [optional] 
**email** | **string** | Email address; MaxLength: 200 | 
**address** | [**\Swagger\Client\Model\AddressInputDto**](AddressInputDto.md) | Data required to detail address | 
**tax_scheme** | **string** | Describe the regime. | 
**person** | [**\Swagger\Client\Model\PersonInputDto**](PersonInputDto.md) | Person. Required if LegalType &#x3D; Natural | [optional] 
**industry** | **string** | Industry; MaxLength: 100 | [optional] 
**representation_type** | **string** |  | [optional] 
**obligation_type** | **string** |  | [optional] 
**customs_type** | **string** |  | [optional] 
**location_type** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


