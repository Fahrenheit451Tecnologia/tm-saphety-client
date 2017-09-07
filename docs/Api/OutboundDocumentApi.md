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
[**outboundDocumentGet**](OutboundDocumentApi.md#outboundDocumentGet) | **GET** /api/{virtualOperator}/outbounddocuments/{id} | Get single sales invoice by specific company
[**outboundDocumentGetAttachments**](OutboundDocumentApi.md#outboundDocumentGetAttachments) | **GET** /api/{virtualOperator}/outbounddocuments/{id}/attachments | Gets a outboundDocument Attatchment
[**outboundDocumentGetDocumentAttachmentContent**](OutboundDocumentApi.md#outboundDocumentGetDocumentAttachmentContent) | **GET** /api/{virtualOperator}/outbounddocuments/{id}/attachment/{attachmentId} | Gets a outboundDocument attachment content
[**outboundDocumentGetFileContent**](OutboundDocumentApi.md#outboundDocumentGetFileContent) | **GET** /api/{virtualOperator}/outbounddocuments/{id}/files/{fileId}/content | Gets a file content
[**outboundDocumentGetPDF**](OutboundDocumentApi.md#outboundDocumentGetPDF) | **GET** /api/{virtualOperator}/outbounddocuments/files/{fileId}/getpdf | Gets a pdf content
[**outboundDocumentRetryDianSubmitDocuments**](OutboundDocumentApi.md#outboundDocumentRetryDianSubmitDocuments) | **GET** /api/documents/retryDianSubmitDocuments | Trigger tacit acceptance validations
[**outboundDocumentSearch**](OutboundDocumentApi.md#outboundDocumentSearch) | **GET** /api/{virtualOperator}/outbounddocuments | Search documents using search criterias  Default NumberOfRecords&#x3D;25
[**outboundDocumentSendEmailNotificationForDocument**](OutboundDocumentApi.md#outboundDocumentSendEmailNotificationForDocument) | **POST** /api/{virtualOperator}/outbounddocuments/sendemail | Send email notification for outboundDocument


# **outboundDocumentAddAttachment**
> object outboundDocumentAddAttachment($virtual_operator, $document_attachment, $id)

Adds an attachment to a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$document_attachment = new \Swagger\Client\Model\DocumentAttachmentDTO(); // \Swagger\Client\Model\DocumentAttachmentDTO | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentAddAttachment($virtual_operator, $document_attachment, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentAddAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **document_attachment** | [**\Swagger\Client\Model\DocumentAttachmentDTO**](../Model/DocumentAttachmentDTO.md)|  |
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCount**
> object outboundDocumentCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts the requested search result elements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | 
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | 
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | 
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | 
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | 
$search_criteria_dto_include_files = true; // bool | 
$search_criteria_dto_include_attachments = true; // bool | 
$search_criteria_dto_document_types = array("search_criteria_dto_document_types_example"); // string[] | 
$search_criteria_dto_document_sub_types = array("search_criteria_dto_document_sub_types_example"); // string[] | 
$search_criteria_dto_business_status = array("search_criteria_dto_business_status_example"); // string[] | 
$search_criteria_dto_communication_status = array("search_criteria_dto_communication_status_example"); // string[] | 
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->outboundDocumentCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_document_number** | **string**|  | [optional]
 **search_criteria_dto_currency** | **string**|  | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_include_files** | **bool**|  | [optional]
 **search_criteria_dto_include_attachments** | **bool**|  | [optional]
 **search_criteria_dto_document_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_document_sub_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_business_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_communication_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateContingencyInvoice**
> \Swagger\Client\Model\ResultMessageDocumentResult outboundDocumentCreateContingencyInvoice($virtual_operator, $contingency_invoice, $in_transport_document_id)

Creates a Contingency Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$contingency_invoice = new \Swagger\Client\Model\ContingencyInvoiceDTO(); // \Swagger\Client\Model\ContingencyInvoiceDTO | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentCreateContingencyInvoice($virtual_operator, $contingency_invoice, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateContingencyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **contingency_invoice** | [**\Swagger\Client\Model\ContingencyInvoiceDTO**](../Model/ContingencyInvoiceDTO.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResult**](../Model/ResultMessageDocumentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateCreditNote**
> \Swagger\Client\Model\ResultMessageDocumentResult outboundDocumentCreateCreditNote($virtual_operator, $credit_note, $in_transport_document_id)

Creates a Credit Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$credit_note = new \Swagger\Client\Model\CreditNoteDTO(); // \Swagger\Client\Model\CreditNoteDTO | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentCreateCreditNote($virtual_operator, $credit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **credit_note** | [**\Swagger\Client\Model\CreditNoteDTO**](../Model/CreditNoteDTO.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResult**](../Model/ResultMessageDocumentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateDebitNote**
> \Swagger\Client\Model\ResultMessageDocumentResult outboundDocumentCreateDebitNote($virtual_operator, $debit_note, $in_transport_document_id)

Creates a Debit Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$debit_note = new \Swagger\Client\Model\DebitNoteDTO(); // \Swagger\Client\Model\DebitNoteDTO | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentCreateDebitNote($virtual_operator, $debit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateDebitNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **debit_note** | [**\Swagger\Client\Model\DebitNoteDTO**](../Model/DebitNoteDTO.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResult**](../Model/ResultMessageDocumentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentCreateSalesInvoice**
> \Swagger\Client\Model\ResultMessageDocumentResult outboundDocumentCreateSalesInvoice($virtual_operator, $sales_invoice, $in_transport_document_id)

Creates a Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$sales_invoice = new \Swagger\Client\Model\SalesInvoiceDTO(); // \Swagger\Client\Model\SalesInvoiceDTO | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentCreateSalesInvoice($virtual_operator, $sales_invoice, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentCreateSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **sales_invoice** | [**\Swagger\Client\Model\SalesInvoiceDTO**](../Model/SalesInvoiceDTO.md)|  |
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResult**](../Model/ResultMessageDocumentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGet**
> \Swagger\Client\Model\DocumentSummaryDTO outboundDocumentGet($virtual_operator, $id)

Get single sales invoice by specific company

Return the detail of a specific sales invoice based on specific company. Its necessary to have read permissions on the documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | The unique identifier of sales invoice

try {
    $result = $api_instance->outboundDocumentGet($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**| The unique identifier of sales invoice |

### Return type

[**\Swagger\Client\Model\DocumentSummaryDTO**](../Model/DocumentSummaryDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGetAttachments**
> \Swagger\Client\Model\DocumentSummaryDTO outboundDocumentGetAttachments($virtual_operator, $id)

Gets a outboundDocument Attatchment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentGetAttachments($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DocumentSummaryDTO**](../Model/DocumentSummaryDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentGetDocumentAttachmentContent**
> \Swagger\Client\Model\DocumentSummaryDTO outboundDocumentGetDocumentAttachmentContent($virtual_operator, $id, $attachment_id)

Gets a outboundDocument attachment content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentGetDocumentAttachmentContent($virtual_operator, $id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetDocumentAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**|  |
 **attachment_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DocumentSummaryDTO**](../Model/DocumentSummaryDTO.md)

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

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | 
$file_id = "file_id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentGetFileContent($virtual_operator, $id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetFileContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**|  |
 **file_id** | **string**|  |

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

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$file_id = "file_id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentGetPDF($virtual_operator, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentGetPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **file_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentRetryDianSubmitDocuments**
> object outboundDocumentRetryDianSubmitDocuments()

Trigger tacit acceptance validations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->outboundDocumentRetryDianSubmitDocuments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentRetryDianSubmitDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentSearch**
> object outboundDocumentSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search documents using search criterias  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | 
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | 
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | 
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | 
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | 
$search_criteria_dto_include_files = true; // bool | 
$search_criteria_dto_include_attachments = true; // bool | 
$search_criteria_dto_document_types = array("search_criteria_dto_document_types_example"); // string[] | 
$search_criteria_dto_document_sub_types = array("search_criteria_dto_document_sub_types_example"); // string[] | 
$search_criteria_dto_business_status = array("search_criteria_dto_business_status_example"); // string[] | 
$search_criteria_dto_communication_status = array("search_criteria_dto_communication_status_example"); // string[] | 
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->outboundDocumentSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_document_number** | **string**|  | [optional]
 **search_criteria_dto_currency** | **string**|  | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_include_files** | **bool**|  | [optional]
 **search_criteria_dto_include_attachments** | **bool**|  | [optional]
 **search_criteria_dto_document_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_document_sub_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_business_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_communication_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentSendEmailNotificationForDocument**
> \Swagger\Client\Model\ResultMessageDocumentResult outboundDocumentSendEmailNotificationForDocument($virtual_operator, $data)

Send email notification for outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$data = new \Swagger\Client\Model\SendEmailNotificationDTO(); // \Swagger\Client\Model\SendEmailNotificationDTO | the email data agreed in the SendEmailNotificationDTO object specification

try {
    $result = $api_instance->outboundDocumentSendEmailNotificationForDocument($virtual_operator, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentApi->outboundDocumentSendEmailNotificationForDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **data** | [**\Swagger\Client\Model\SendEmailNotificationDTO**](../Model/SendEmailNotificationDTO.md)| the email data agreed in the SendEmailNotificationDTO object specification |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentResult**](../Model/ResultMessageDocumentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

