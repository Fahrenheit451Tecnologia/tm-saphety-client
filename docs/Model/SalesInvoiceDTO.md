# SalesInvoiceDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serie_prefix** | **string** | If the serie selected by SerieExternalKey is Autoincrement, this field must bem empty.  The document number will be assigned by the system.  Id the serie selected by SerieExternalKey is not Autoincrement, the prefix must be present.  Serie validations will be applied. | [optional] 
**serie_number** | **string** | If the serie selected by SerieExternalKey is Autoincrement, this field must bem empty.  The document number will be assigned by the system.  Id the serie selected by SerieExternalKey is not Autoincrement, the SerieNumber must be present.  Serie validations will be applied. | [optional] 
**billing_period** | [**\Swagger\Client\Model\PeriodDTO**](PeriodDTO.md) | Billing Period | 
**issuer_party** | [**\Swagger\Client\Model\AccountingPartyDTO**](AccountingPartyDTO.md) | Data required of issuer to bill | 
**customer_party** | [**\Swagger\Client\Model\AccountingPartyDTO**](AccountingPartyDTO.md) | Data required of customer to bill | 
**notes** | **string[]** | Additional information: Free text on the document | [optional] 
**notes_pdf** | [**\Swagger\Client\Model\NoteDTO[]**](NoteDTO.md) | Adicional information for the pdf | [optional] 
**currency** | **string** | Currency code. Colombia is &#39;COP&#39; | 
**lines** | [**\Swagger\Client\Model\LineDTO[]**](LineDTO.md) | Sales Invoice lines | 
**tax_summary** | [**\Swagger\Client\Model\TaxSummaryDTO[]**](TaxSummaryDTO.md) | Information used to report a tax withheld | 
**prepaid_payments** | [**\Swagger\Client\Model\PrepaidPaymentDTO[]**](PrepaidPaymentDTO.md) | Information on the prepaid amount and date | [optional] 
**total** | [**\Swagger\Client\Model\LegalMonetaryTotalDTO**](LegalMonetaryTotalDTO.md) | Relating to the total amounts applicable to the bill | 
**issue_mode** | **string** | Issue Mode. The value must be one of this [&#39;Electronic&#39;, &#39;ByComputer&#39;] | 
**issue_date** | [**\DateTime**](\DateTime.md) | Date issue of the invoice for tax purposes. Format {yyyy-mm-dd} | 
**due_date** | [**\DateTime**](\DateTime.md) | Bill Due Date. Format {yyyy-mm-dd} | 
**delivery_date** | [**\DateTime**](\DateTime.md) | Bill Delivery Date. Format {yyyy-mm-dd} | 
**external_reference** | **string** | External Reference | [optional] 
**payment_method** | **string** | Bill payment method.  The value must be one of this [&#39;Cash&#39;, &#39;Cheque&#39;, &#39;Bank&#39;, &#39;Transfer&#39;, &#39;BankDeposit&#39;] | [optional] 
**document_attachments** | [**\Swagger\Client\Model\DocumentAttachmentDTO[]**](DocumentAttachmentDTO.md) | Document downloadable attachments | [optional] 
**authorization_number** | **string** | Authorization number of series range provided by DIAN | 
**correlation_document_id** | **string** | Unique identifier for the document. This Id is used to prevent document duplication. | 
**serie_external_key** | **string** | Unique identifier for the serie. This identifier is generated by the system when the serie is created  and must be sent back on document creation to select wich serie will be used | 
**payment_exchange_rate** | [**\Swagger\Client\Model\PaymentExchangeRateDTO**](PaymentExchangeRateDTO.md) | Payment Exchange Rate | [optional] 
**delivery_terms** | [**\Swagger\Client\Model\DeliveryTermDTO**](DeliveryTermDTO.md) | Document delivery terms | [optional] 
**additional_notification_emails** | **string[]** | List of adicional emails to be notified | [optional] 
**payment_means** | [**\Swagger\Client\Model\PaymentMeanDTO[]**](PaymentMeanDTO.md) | Document payment means | [optional] 
**payment_terms** | [**\Swagger\Client\Model\PaymentTermDTO[]**](PaymentTermDTO.md) | Document payment terms | [optional] 
**allowance_charges** | [**\Swagger\Client\Model\AllowanceChargeDTO[]**](AllowanceChargeDTO.md) | Document allowances and charges | [optional] 
**document_references** | [**\Swagger\Client\Model\DocumentReferenceDTO[]**](DocumentReferenceDTO.md) | Document references | [optional] 
**custom_fields** | [**\Swagger\Client\Model\CustomFieldDTO[]**](CustomFieldDTO.md) | Document Custom Fields | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


