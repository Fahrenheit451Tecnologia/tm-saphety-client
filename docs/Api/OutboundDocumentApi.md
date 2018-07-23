# Swagger\Client\OutboundDocumentApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**outboundDocumentAddAttachment**](OutboundDocumentApi.md#outboundDocumentAddAttachment) | **POST** /api/{virtualOperator}/outbounddocuments/{id}/attachments/add | Adds an attachment to a outboundDocument
[**outboundDocumentCount**](OutboundDocumentApi.md#outboundDocumentCount) | **GET** /api/{virtualOperator}/outbounddocuments/count | Counts the requested search result elements
[**outboundDocumentCreateContingencyInvoice**](OutboundDocumentApi.md#outboundDocumentCreateContingencyInvoice) | **POST** /api/{virtualOperator}/outbounddocuments/contingencyinvoice | Creates a Contingency Invoice
[**outboundDocumentCreateCreditNote**](OutboundDocumentApi.md#outboundDocumentCreateCreditNote) | **POST** /api/{virtualOperator}/outbounddocuments/creditnote | Creates a Credit Note
[**outboundDocumentCreateDebitNote**](OutboundDocumentApi.md#outboundDocumentCreateDebitNote) | **POST** /api/{virtualOperator}/outbounddocuments/debitnote | Creates a Debit Note
[**outboundDocumentCreateSalesInvoice**](OutboundDocumentApi.md#outboundDocumentCreateSalesInvoice) | **POST** /api/{virtualOperator}/outbounddocuments/salesinvoice | Creates a Invoice
[**outboundDocumentGet**](OutboundDocumentApi.md#outboundDocumentGet) | **GET** /api/{virtualOperator}/outbounddocuments/{id} | Get single document document summary by Id.  To get a document with more information, use the seach method passing Id as criteria.
[**outboundDocumentGetAttachments**](OutboundDocumentApi.md#outboundDocumentGetAttachments) | **GET** /api/{virtualOperator}/outbounddocuments/{id}/attachments | Gets the attachment from the identified document.  The attachment content is not returned.
[**outboundDocumentGetCufe**](OutboundDocumentApi.md#outboundDocumentGetCufe) | **GET** /api/outbounddocuments/cufe | Generate the cufe using the requesting data
[**outboundDocumentGetDocumentAttachmentContent**](OutboundDocumentApi.md#outboundDocumentGetDocumentAttachmentContent) | **GET** /api/{virtualOperator}/outbounddocuments/{id}/attachment/{attachmentId} | Gets a outboundDocument attachment content
[**outboundDocumentGetFileContent**](OutboundDocumentApi.md#outboundDocumentGetFileContent) | **GET** /api/{virtualOperator}/outbounddocuments/{id}/files/{fileId}/content | Gets a file content
[**outboundDocumentGetPDF**](OutboundDocumentApi.md#outboundDocumentGetPDF) | **GET** /api/{virtualOperator}/outbounddocuments/files/{fileId}/getpdf | Gets a pdf content
[**outboundDocumentRetryDianCommunication**](OutboundDocumentApi.md#outboundDocumentRetryDianCommunication) | **POST** /api/{virtualOperator}/outbounddocuments/dianstatus/retry | Set a document with retry status, to send again to DIAN.
[**outboundDocumentSearch**](OutboundDocumentApi.md#outboundDocumentSearch) | **GET** /api/{virtualOperator}/outbounddocuments | Search documents using search criterias  Default NumberOfRecords&#x3D;25
[**outboundDocumentSendEmailNotificationForDocument**](OutboundDocumentApi.md#outboundDocumentSendEmailNotificationForDocument) | **POST** /api/{virtualOperator}/outbounddocuments/sendemail | Send email notification for outboundDocument


# **outboundDocumentAddAttachment**
> string outboundDocumentAddAttachment($virtual_operator, $document_attachment, $id)

Adds an attachment to a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_attachment = new \Swagger\Client\Model\DocumentAttachmentInputDto(); // \Swagger\Client\Model\DocumentAttachmentInputDto | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentAddAttachment($virtual_operator, $document_attachment, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentAddAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_attachment** | [**\Swagger\Client\Model\DocumentAttachmentInputDto**](../Model/DocumentAttachmentInputDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCount**
> int outboundDocumentCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts the requested search result elements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | Get by Id
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | Get by document number; MaxLength: 20
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | Get by currency; MaxLength: 50
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | Get by Issuer
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | Get by Issuer
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | Get by Customer
$search_criteria_dto_include_files = true; // bool | Include Pdf and UBL
$search_criteria_dto_include_attachments = true; // bool | Include attachments
$search_criteria_dto_document_types = array("search_criteria_dto_document_types_example"); // string[] | List of document types to search
$search_criteria_dto_document_sub_types = array("search_criteria_dto_document_sub_types_example"); // string[] | List of document sub types to search
$search_criteria_dto_business_status = array("search_criteria_dto_business_status_example"); // string[] | List of business status to search
$search_criteria_dto_communication_status = array("search_criteria_dto_communication_status_example"); // string[] | List of communication status to search
$search_criteria_dto_main_notification_email_status = "search_criteria_dto_main_notification_email_status_example"; // string | Status of mais email
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document Creation from
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document creation to
$search_criteria_dto_document_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document issue date from
$search_criteria_dto_document_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document issue date to
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)| Get by Id | [optional]
 **search_criteria_dto_document_number** | **string**| Get by document number; MaxLength: 20 | [optional]
 **search_criteria_dto_currency** | **string**| Get by currency; MaxLength: 50 | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)| Get by Issuer | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)| Get by Issuer | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)| Get by Customer | [optional]
 **search_criteria_dto_include_files** | **bool**| Include Pdf and UBL | [optional]
 **search_criteria_dto_include_attachments** | **bool**| Include attachments | [optional]
 **search_criteria_dto_document_types** | [**string[]**](../Model/string.md)| List of document types to search | [optional]
 **search_criteria_dto_document_sub_types** | [**string[]**](../Model/string.md)| List of document sub types to search | [optional]
 **search_criteria_dto_business_status** | [**string[]**](../Model/string.md)| List of business status to search | [optional]
 **search_criteria_dto_communication_status** | [**string[]**](../Model/string.md)| List of communication status to search | [optional]
 **search_criteria_dto_main_notification_email_status** | **string**| Status of mais email | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**| Document Creation from | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**| Document creation to | [optional]
 **search_criteria_dto_document_date_start** | **\DateTime**| Document issue date from | [optional]
 **search_criteria_dto_document_date_end** | **\DateTime**| Document issue date to | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateContingencyInvoice**
> \Swagger\Client\Model\ResultMessageDocumentResultDto outboundDocumentCreateContingencyInvoice($virtual_operator, $contingency_invoice, $in_transport_document_id)

Creates a Contingency Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$contingency_invoice = new \Swagger\Client\Model\ContingencyInvoiceInputDto(); // \Swagger\Client\Model\ContingencyInvoiceInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentCreateContingencyInvoice($virtual_operator, $contingency_invoice, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateContingencyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **contingency_invoice** | [**\Swagger\Client\Model\ContingencyInvoiceInputDto**](../Model/ContingencyInvoiceInputDto.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResultDto**](../Model/ResultMessageDocumentResultDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateCreditNote**
> \Swagger\Client\Model\ResultMessageDocumentResultDto outboundDocumentCreateCreditNote($virtual_operator, $credit_note, $in_transport_document_id)

Creates a Credit Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$credit_note = new \Swagger\Client\Model\CreditNoteInputDto(); // \Swagger\Client\Model\CreditNoteInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentCreateCreditNote($virtual_operator, $credit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **credit_note** | [**\Swagger\Client\Model\CreditNoteInputDto**](../Model/CreditNoteInputDto.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResultDto**](../Model/ResultMessageDocumentResultDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateDebitNote**
> \Swagger\Client\Model\ResultMessageDocumentResultDto outboundDocumentCreateDebitNote($virtual_operator, $debit_note, $in_transport_document_id)

Creates a Debit Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$debit_note = new \Swagger\Client\Model\DebitNoteInputDto(); // \Swagger\Client\Model\DebitNoteInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentCreateDebitNote($virtual_operator, $debit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateDebitNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **debit_note** | [**\Swagger\Client\Model\DebitNoteInputDto**](../Model/DebitNoteInputDto.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResultDto**](../Model/ResultMessageDocumentResultDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateSalesInvoice**
> \Swagger\Client\Model\ResultMessageDocumentResultDto outboundDocumentCreateSalesInvoice($virtual_operator, $sales_invoice, $in_transport_document_id)

Creates a Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$sales_invoice = new \Swagger\Client\Model\SalesInvoiceInputDto(); // \Swagger\Client\Model\SalesInvoiceInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentCreateSalesInvoice($virtual_operator, $sales_invoice, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **sales_invoice** | [**\Swagger\Client\Model\SalesInvoiceInputDto**](../Model/SalesInvoiceInputDto.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResultDto**](../Model/ResultMessageDocumentResultDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGet**
> \Swagger\Client\Model\OutboundDocumentSummaryOutputDto outboundDocumentGet($virtual_operator, $id)

Get single document document summary by Id.  To get a document with more information, use the seach method passing Id as criteria.

Return the detail of a specific document based on specific Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | The unique identifier of document

try {
    $result = $apiInstance->outboundDocumentGet($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)| The unique identifier of document |

### Return type

[**\Swagger\Client\Model\OutboundDocumentSummaryOutputDto**](../Model/OutboundDocumentSummaryOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGetAttachments**
> \Swagger\Client\Model\DocumentAttachmentDto[] outboundDocumentGetAttachments($virtual_operator, $id)

Gets the attachment from the identified document.  The attachment content is not returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentGetAttachments($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentAttachmentDto[]**](../Model/DocumentAttachmentDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGetCufe**
> \Swagger\Client\Model\ResultMessageString outboundDocumentGetCufe($cufe_issue_date, $cufe_customer_document_type, $cufe_customer_document_number, $cufe_issuer_nit_number, $cufe_serie_technical_key, $cufe_document_number, $cufe_total_iva, $cufe_total_ipo, $cufe_total_ica, $cufe_total_gross_amount, $cufe_total_payable_amount)

Generate the cufe using the requesting data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cufe_issue_date = "cufe_issue_date_example"; // string | Document issue date
$cufe_customer_document_type = "cufe_customer_document_type_example"; // string | Customer document type according the DIAN documentation
$cufe_customer_document_number = "cufe_customer_document_number_example"; // string | Customer document number
$cufe_issuer_nit_number = "cufe_issuer_nit_number_example"; // string | Issuer Nit number
$cufe_serie_technical_key = "cufe_serie_technical_key_example"; // string | Serie technical key
$cufe_document_number = "cufe_document_number_example"; // string | Document number
$cufe_total_iva = "cufe_total_iva_example"; // string | Sum of IVAs tax amount
$cufe_total_ipo = "cufe_total_ipo_example"; // string | Sum of IPOs tax amount
$cufe_total_ica = "cufe_total_ica_example"; // string | Sum of ICAs tax amount
$cufe_total_gross_amount = "cufe_total_gross_amount_example"; // string | Total document gross amount
$cufe_total_payable_amount = "cufe_total_payable_amount_example"; // string | Total document payable amount

try {
    $result = $apiInstance->outboundDocumentGetCufe($cufe_issue_date, $cufe_customer_document_type, $cufe_customer_document_number, $cufe_issuer_nit_number, $cufe_serie_technical_key, $cufe_document_number, $cufe_total_iva, $cufe_total_ipo, $cufe_total_ica, $cufe_total_gross_amount, $cufe_total_payable_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetCufe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cufe_issue_date** | **string**| Document issue date |
 **cufe_customer_document_type** | **string**| Customer document type according the DIAN documentation |
 **cufe_customer_document_number** | **string**| Customer document number |
 **cufe_issuer_nit_number** | **string**| Issuer Nit number |
 **cufe_serie_technical_key** | **string**| Serie technical key |
 **cufe_document_number** | **string**| Document number |
 **cufe_total_iva** | **string**| Sum of IVAs tax amount |
 **cufe_total_ipo** | **string**| Sum of IPOs tax amount |
 **cufe_total_ica** | **string**| Sum of ICAs tax amount |
 **cufe_total_gross_amount** | **string**| Total document gross amount |
 **cufe_total_payable_amount** | **string**| Total document payable amount |

### Return type

[**\Swagger\Client\Model\ResultMessageString**](../Model/ResultMessageString.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGetDocumentAttachmentContent**
> object outboundDocumentGetDocumentAttachmentContent($virtual_operator, $id, $attachment_id)

Gets a outboundDocument attachment content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentGetDocumentAttachmentContent($virtual_operator, $id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetDocumentAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGetFileContent**
> object outboundDocumentGetFileContent($virtual_operator, $id, $file_id)

Gets a file content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 
$file_id = "file_id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentGetFileContent($virtual_operator, $id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetFileContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |
 **file_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGetPDF**
> object outboundDocumentGetPDF($virtual_operator, $file_id)

Gets a pdf content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$file_id = "file_id_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentGetPDF($virtual_operator, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **file_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentRetryDianCommunication**
> map[string,string] outboundDocumentRetryDianCommunication($virtual_operator, $ids)

Set a document with retry status, to send again to DIAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$ids = array(new \Swagger\Client\Model\string[]()); // string[] | 

try {
    $result = $apiInstance->outboundDocumentRetryDianCommunication($virtual_operator, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentRetryDianCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **ids** | **string[]**|  |

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentSearch**
> \Swagger\Client\Model\OutboundDocumentOutputDto[] outboundDocumentSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search documents using search criterias  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | Get by Id
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | Get by document number; MaxLength: 20
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | Get by currency; MaxLength: 50
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | Get by Issuer
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | Get by Issuer
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | Get by Customer
$search_criteria_dto_include_files = true; // bool | Include Pdf and UBL
$search_criteria_dto_include_attachments = true; // bool | Include attachments
$search_criteria_dto_document_types = array("search_criteria_dto_document_types_example"); // string[] | List of document types to search
$search_criteria_dto_document_sub_types = array("search_criteria_dto_document_sub_types_example"); // string[] | List of document sub types to search
$search_criteria_dto_business_status = array("search_criteria_dto_business_status_example"); // string[] | List of business status to search
$search_criteria_dto_communication_status = array("search_criteria_dto_communication_status_example"); // string[] | List of communication status to search
$search_criteria_dto_main_notification_email_status = "search_criteria_dto_main_notification_email_status_example"; // string | Status of mais email
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document Creation from
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document creation to
$search_criteria_dto_document_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document issue date from
$search_criteria_dto_document_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Document issue date to
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->outboundDocumentSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)| Get by Id | [optional]
 **search_criteria_dto_document_number** | **string**| Get by document number; MaxLength: 20 | [optional]
 **search_criteria_dto_currency** | **string**| Get by currency; MaxLength: 50 | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)| Get by Issuer | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)| Get by Issuer | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)| Get by Customer | [optional]
 **search_criteria_dto_include_files** | **bool**| Include Pdf and UBL | [optional]
 **search_criteria_dto_include_attachments** | **bool**| Include attachments | [optional]
 **search_criteria_dto_document_types** | [**string[]**](../Model/string.md)| List of document types to search | [optional]
 **search_criteria_dto_document_sub_types** | [**string[]**](../Model/string.md)| List of document sub types to search | [optional]
 **search_criteria_dto_business_status** | [**string[]**](../Model/string.md)| List of business status to search | [optional]
 **search_criteria_dto_communication_status** | [**string[]**](../Model/string.md)| List of communication status to search | [optional]
 **search_criteria_dto_main_notification_email_status** | **string**| Status of mais email | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**| Document Creation from | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**| Document creation to | [optional]
 **search_criteria_dto_document_date_start** | **\DateTime**| Document issue date from | [optional]
 **search_criteria_dto_document_date_end** | **\DateTime**| Document issue date to | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\OutboundDocumentOutputDto[]**](../Model/OutboundDocumentOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentSendEmailNotificationForDocument**
> \Swagger\Client\Model\ResultMessageDTODocumentResult outboundDocumentSendEmailNotificationForDocument($virtual_operator, $data)

Send email notification for outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$data = new \Swagger\Client\Model\SendEmailNotificationDTO(); // \Swagger\Client\Model\SendEmailNotificationDTO | the email data agreed in the SendEmailNotificationDTO object specification

try {
    $result = $apiInstance->outboundDocumentSendEmailNotificationForDocument($virtual_operator, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentSendEmailNotificationForDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **data** | [**\Swagger\Client\Model\SendEmailNotificationDTO**](../Model/SendEmailNotificationDTO.md)| the email data agreed in the SendEmailNotificationDTO object specification |

### Return type

[**\Swagger\Client\Model\ResultMessageDTODocumentResult**](../Model/ResultMessageDTODocumentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

