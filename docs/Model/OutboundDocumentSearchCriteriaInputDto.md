# OutboundDocumentSearchCriteriaInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Get by Id | [optional] 
**document_number** | **string** | Get by document number; MaxLength: 20 | [optional] 
**currency** | **string** | Get by currency; MaxLength: 50 | [optional] 
**company_ids** | **string[]** | Get by Issuer | [optional] 
**issuers** | **string[]** | Get by Issuer | [optional] 
**customers** | **string[]** | Get by Customer | [optional] 
**include_files** | **bool** | Include Pdf and UBL | [optional] 
**include_attachments** | **bool** | Include attachments | [optional] 
**document_types** | **string[]** | List of document types to search | [optional] 
**document_sub_types** | **string[]** | List of document sub types to search | [optional] 
**business_status** | **string[]** | List of business status to search | [optional] 
**communication_status** | **string[]** | List of communication status to search | [optional] 
**main_notification_email_status** | **string** | Status of mais email | [optional] 
**creation_date_start** | [**\DateTime**](\DateTime.md) | Document Creation from | [optional] 
**creation_date_end** | [**\DateTime**](\DateTime.md) | Document creation to | [optional] 
**document_date_start** | [**\DateTime**](\DateTime.md) | Document issue date from | [optional] 
**document_date_end** | [**\DateTime**](\DateTime.md) | Document issue date to | [optional] 
**offset** | **int** |  | [optional] 
**number_of_records** | **int** |  | [optional] 
**sort_field** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


