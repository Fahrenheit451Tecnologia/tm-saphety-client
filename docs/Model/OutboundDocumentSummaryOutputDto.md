# OutboundDocumentSummaryOutputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id | [optional] 
**number** | **string** | Document number | [optional] 
**document_type** | **string** | Type of document | [optional] 
**document_sub_type** | **string** | Document subtype if any | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | Document creation date | [optional] 
**issue_date** | [**\DateTime**](\DateTime.md) | Document issue date | [optional] 
**currency** | **string** | Document currency | [optional] 
**issuer** | **string** | Issuer name | [optional] 
**issuer_vat** | **string** | Issuer NIT | [optional] 
**customer** | **string** | Customer name | [optional] 
**customer_vat** | **string** | Customer NIT | [optional] 
**total_amount** | **double** | Total amout | [optional] 
**business_status_list** | [**\Swagger\Client\Model\BusinessStatusOutputDto[]**](BusinessStatusOutputDto.md) | Business status list | [optional] 
**business_status_reason** | **string** | Reason for rejection if business status is Rejected | [optional] 
**communication_status_list** | [**\Swagger\Client\Model\CommunicationStatusOutputDto[]**](CommunicationStatusOutputDto.md) | Communication status list | [optional] 
**main_notification_email_status** | **string** | Last email status of email notification.  Usually the main email is the email set for customer. | [optional] 
**main_notification_email_status_date** | [**\DateTime**](\DateTime.md) | Last email status date of email notification.  Usually the main email is the email set for customer. | [optional] 
**main_notification_email_status_reason** | **string** | Last email status reason of email notification.  Usually the main email is the email set for customer. | [optional] 
**customer_party_email** | **string** | Customer email | [optional] 
**document_files** | [**\Swagger\Client\Model\DocumentFileOutputDto[]**](DocumentFileOutputDto.md) | PDF and XML associated with document | [optional] 
**pdf_of_document** | [**\Swagger\Client\Model\DocumentContentFileOutputDto**](DocumentContentFileOutputDto.md) | The pdf of document. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


