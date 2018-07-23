# OutboundDocumentOutputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**document_number** | **string** |  | [optional] 
**document_type** | **string** |  | [optional] 
**document_sub_type** | **string** |  | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**document_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**currency** | **string** |  | [optional] 
**origin_name** | **string** |  | [optional] 
**origin_code** | **string** |  | [optional] 
**destination_name** | **string** |  | [optional] 
**destination_code** | **string** |  | [optional] 
**business_status** | **string** |  | [optional] 
**business_status_date** | **string** |  | [optional] 
**business_status_reason** | **string** |  | [optional] 
**communication_status** | **string** |  | [optional] 
**communication_status_comments** | **string** |  | [optional] 
**main_notification_email_status** | **string** |  | [optional] 
**main_notification_email_status_reason** | **string** |  | [optional] 
**main_notification_email** | **string** |  | [optional] 
**total_amount** | **double** |  | [optional] 
**gross_amount** | **double** |  | [optional] 
**tax_amount** | **double** |  | [optional] 
**issuer_identification_document_number** | **string** |  | [optional] 
**issuer_identification_document_type** | **string** |  | [optional] 
**issuer_identification_country_code** | **string** |  | [optional] 
**correlation_document_id** | **string** |  | [optional] 
**lines** | [**\Swagger\Client\Model\LineOutputDto[]**](LineOutputDto.md) |  | [optional] 
**pdf** | [**\Swagger\Client\Model\DocumentContentFileOutputDto**](DocumentContentFileOutputDto.md) |  | [optional] 
**ubl** | [**\Swagger\Client\Model\DocumentContentFileOutputDto**](DocumentContentFileOutputDto.md) |  | [optional] 
**client_fields** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


