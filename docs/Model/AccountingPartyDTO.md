# AccountingPartyDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_assigned_account_id** | **string** | Id assigned by the Customer | [optional] 
**tele_fax** | **string** | TeleFax | [optional] 
**document_contacts** | [**\Swagger\Client\Model\DocumentContactDTO[]**](DocumentContactDTO.md) | Party contacts related to  current document | [optional] 
**gln** | **string** | Party GLN | [optional] 
**legal_type** | **string** | Document type identification. The value must be one of this: [&#39;Natural&#39;, &#39;Legal&#39;] | 
**identification** | [**\Swagger\Client\Model\IdentificationDTO**](IdentificationDTO.md) | Identification | 
**name** | **string** | Name of commercial establishment | 
**website_url** | **string** | Website url | [optional] 
**email** | **string** | Email address | 
**address** | [**\Swagger\Client\Model\AddressDTO**](AddressDTO.md) | Data required to detail address | 
**tax_scheme** | **string** | Describe the regime. The value must be one of this: [1, 2, 3] whom 1&#x3D; General, 2&#x3D;Simplex, 3&#x3D;NotApplicable | [optional] 
**person** | [**\Swagger\Client\Model\PersonDTO**](PersonDTO.md) | Person. It is necessary when LegalType&#x3D;Natural | [optional] 
**fiscal_category** | **string** | Fiscal Category | 
**industry** | **string** | Industry | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


