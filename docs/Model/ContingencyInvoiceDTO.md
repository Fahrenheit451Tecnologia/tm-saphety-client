# ContingencyInvoiceDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_period** | [**\Swagger\Client\Model\PeriodDTO**](PeriodDTO.md) | Billing Period | 
**issuer_party** | [**\Swagger\Client\Model\AccountingPartyDTO**](AccountingPartyDTO.md) | Data required of issuer to bill | 
**customer_party** | [**\Swagger\Client\Model\AccountingPartyDTO**](AccountingPartyDTO.md) | Data required of customer to bill | 
**notes** | **string[]** | Additional information: Free text on the document | [optional] 
**notes_pdf** | [**\Swagger\Client\Model\NoteDTO[]**](NoteDTO.md) |  | [optional] 
**currency** | **string** | Currency code. Colombia is &#39;COP&#39; | 
**lines** | [**\Swagger\Client\Model\LineDTO[]**](LineDTO.md) | Sales Invoice lines | 
**tax_summary** | [**\Swagger\Client\Model\TaxSummaryDTO[]**](TaxSummaryDTO.md) | Information used to report a tax withheld | 
**document_attachments** | [**\Swagger\Client\Model\DocumentAttachmentDTO[]**](DocumentAttachmentDTO.md) | Document downloadable attachments | [optional] 
**total** | [**\Swagger\Client\Model\LegalMonetaryTotalDTO**](LegalMonetaryTotalDTO.md) | Relating to the total amounts applicable to the bill | 
**issue_mode** | **string** | Issue Mode. The value must be one of this [&#39;Electronic&#39;, &#39;ByComputer&#39;] | 
**issue_date** | [**\DateTime**](\DateTime.md) | Date issue of the invoice for tax purposes. Format {yyyy-mm-dd} | 
**due_date** | [**\DateTime**](\DateTime.md) | Bill Due Date. Format {yyyy-mm-dd} | 
**delivery_date** | [**\DateTime**](\DateTime.md) | Bill Delivery Date. Format {yyyy-mm-dd} | 
**external_reference** | **string** | External Reference | [optional] 
**payment_method** | **string** | Bill payment method.  The value must be one of this [&#39;Cash&#39;, &#39;Cheque&#39;, &#39;Bank&#39;, &#39;Transfer&#39;, &#39;BankDeposit&#39;] | [optional] 
**serie_prefix** | **string** | Serie number is managed by the client | 
**serie_number** | **string** | the serie number | 
**correlation_document_id** | **string** | Unique identifier for the document. This Id is used to prevent document duplication. | 
**additional_notification_emails** | **string[]** | List of adicional emails to be notified | [optional] 
**custom_fields** | [**\Swagger\Client\Model\CustomFieldDTO[]**](CustomFieldDTO.md) | Document Custom Fields | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


