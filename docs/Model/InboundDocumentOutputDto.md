# InboundDocumentOutputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Document Id | [optional] 
**document_number** | **string** | Document number with prefix | [optional] 
**document_type** | **string** | Document type | [optional] 
**document_sub_type** | **string** | Document sub type if exists | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | Record creation date on eInvoice | [optional] 
**document_date** | [**\DateTime**](\DateTime.md) | Issue date | [optional] 
**currency** | **string** | Document currency | [optional] 
**issuer_name** | **string** | Name of the issuer | [optional] 
**customer_name** | **string** | Name of the client | [optional] 
**business_status** | **string** | Current status of the document | [optional] 
**total_amount** | **double** | Total amount | [optional] 
**business_status_reason** | **string** | If status is Rejected, the reason for rejection. Otherwise, null or empty. | [optional] 
**possibly_tacitly_accepted** | **bool** | Possibly tacitly accepted (merely indicative, not binding) | [optional] 
**pdf** | [**\Swagger\Client\Model\DocumentContentFileOutputDto**](DocumentContentFileOutputDto.md) | The pdf. | [optional] 
**xml** | [**\Swagger\Client\Model\DocumentContentFileOutputDto**](DocumentContentFileOutputDto.md) | The legal XML document | [optional] 
**document_attachments** | [**\Swagger\Client\Model\DocumentAttachmentOutputDto[]**](DocumentAttachmentOutputDto.md) | Document attachments | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


