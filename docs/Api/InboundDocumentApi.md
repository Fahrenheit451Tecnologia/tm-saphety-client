# Swagger\Client\InboundDocumentApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundDocumentAccept**](InboundDocumentApi.md#inboundDocumentAccept) | **POST** /api/{virtualOperator}/inbounddocuments/{id}/accept | Accepts a outboundDocument
[**inboundDocumentAddAttachment**](InboundDocumentApi.md#inboundDocumentAddAttachment) | **POST** /api/{virtualOperator}/inbounddocuments/{id}/addAttachment | Adds a manual attachment to the inbound document
[**inboundDocumentAttachment**](InboundDocumentApi.md#inboundDocumentAttachment) | **GET** /api/{virtualOperator}/inbounddocuments/attachments/{fileId} | Gets an attachment
[**inboundDocumentAttachmentContent**](InboundDocumentApi.md#inboundDocumentAttachmentContent) | **GET** /api/{virtualOperator}/inbounddocuments/attachments/{fileId}/content | Get an attachment content
[**inboundDocumentCount**](InboundDocumentApi.md#inboundDocumentCount) | **GET** /api/{virtualOperator}/inbounddocuments/count | Counts documents using search criteria
[**inboundDocumentCreateDocument**](InboundDocumentApi.md#inboundDocumentCreateDocument) | **POST** /api/{virtualOperator}/inbounddocuments/upload | Upload a received document.
[**inboundDocumentDocumentFile**](InboundDocumentApi.md#inboundDocumentDocumentFile) | **GET** /api/{virtualOperator}/inbounddocuments/files/{fileId} | Gets a file
[**inboundDocumentFileContent**](InboundDocumentApi.md#inboundDocumentFileContent) | **GET** /api/{virtualOperator}/inbounddocuments/files/{fileId}/content | Get a file content
[**inboundDocumentGet**](InboundDocumentApi.md#inboundDocumentGet) | **GET** /api/{virtualOperator}/inbounddocuments/{id} | Get the detail of a specific document based on specific Id
[**inboundDocumentReject**](InboundDocumentApi.md#inboundDocumentReject) | **POST** /api/{virtualOperator}/inbounddocuments/{id}/reject | Rejects a outboundDocument
[**inboundDocumentRemoveAttachment**](InboundDocumentApi.md#inboundDocumentRemoveAttachment) | **DELETE** /api/{virtualOperator}/inbounddocuments/{id}/deleteAttachment/{attachmentId} | Deletes a manual attachment of an inbound document
[**inboundDocumentSearch**](InboundDocumentApi.md#inboundDocumentSearch) | **GET** /api/{virtualOperator}/inbounddocuments | Search documents using search criteria  Default NumberOfRecords&#x3D;25
[**inboundDocumentUploadFilePdf**](InboundDocumentApi.md#inboundDocumentUploadFilePdf) | **POST** /api/{virtualOperator}/inbounddocuments/{id}/uploadFilePdf | Uploads the Pdf file to the inbound document


# **inboundDocumentAccept**
> \Swagger\Client\Model\ResultMessageBoolean inboundDocumentAccept($id, $virtual_operator)

Accepts a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->inboundDocumentAccept($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

[**\Swagger\Client\Model\ResultMessageBoolean**](../Model/ResultMessageBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentAddAttachment**
> \Swagger\Client\Model\DocumentAttachmentOutputDto inboundDocumentAddAttachment($virtual_operator, $id, $attachment)

Adds a manual attachment to the inbound document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 
$attachment = new \Swagger\Client\Model\FileUploadInputDto(); // \Swagger\Client\Model\FileUploadInputDto | 

try {
    $result = $apiInstance->inboundDocumentAddAttachment($virtual_operator, $id, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentAddAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |
 **attachment** | [**\Swagger\Client\Model\FileUploadInputDto**](../Model/FileUploadInputDto.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentAttachmentOutputDto**](../Model/DocumentAttachmentOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentAttachment**
> \Swagger\Client\Model\DocumentAttachmentOutputDto inboundDocumentAttachment($virtual_operator, $file_id)

Gets an attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$file_id = "file_id_example"; // string | 

try {
    $result = $apiInstance->inboundDocumentAttachment($virtual_operator, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **file_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentAttachmentOutputDto**](../Model/DocumentAttachmentOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentAttachmentContent**
> object inboundDocumentAttachmentContent($virtual_operator, $file_id, $disposition_inline)

Get an attachment content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$file_id = "file_id_example"; // string | 
$disposition_inline = true; // bool | Default=false; Is true, the response content-disposition will be inline.

try {
    $result = $apiInstance->inboundDocumentAttachmentContent($virtual_operator, $file_id, $disposition_inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **file_id** | [**string**](../Model/.md)|  |
 **disposition_inline** | **bool**| Default&#x3D;false; Is true, the response content-disposition will be inline. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentCount**
> int inboundDocumentCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_pdf, $search_criteria_dto_include_xml, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts documents using search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | MaxLength: 20
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | MaxLength: 50
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | 
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | 
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | 
$search_criteria_dto_include_pdf = true; // bool | 
$search_criteria_dto_include_xml = true; // bool | 
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
    $result = $apiInstance->inboundDocumentCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_pdf, $search_criteria_dto_include_xml, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_document_number** | **string**| MaxLength: 20 | [optional]
 **search_criteria_dto_currency** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_include_pdf** | **bool**|  | [optional]
 **search_criteria_dto_include_xml** | **bool**|  | [optional]
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

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentCreateDocument**
> \Swagger\Client\Model\ResultMessageGuid inboundDocumentCreateDocument($virtual_operator, $xml_document)

Upload a received document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | The virtual operator where the receiving company lives.; MaxLength: 60
$xml_document = new \Swagger\Client\Model\FileUploadInputDto(); // \Swagger\Client\Model\FileUploadInputDto | The XML/UBL document to upload.

try {
    $result = $apiInstance->inboundDocumentCreateDocument($virtual_operator, $xml_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentCreateDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| The virtual operator where the receiving company lives.; MaxLength: 60 |
 **xml_document** | [**\Swagger\Client\Model\FileUploadInputDto**](../Model/FileUploadInputDto.md)| The XML/UBL document to upload. |

### Return type

[**\Swagger\Client\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentDocumentFile**
> \Swagger\Client\Model\DocumentFileOutputDto inboundDocumentDocumentFile($virtual_operator, $file_id)

Gets a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$file_id = "file_id_example"; // string | 

try {
    $result = $apiInstance->inboundDocumentDocumentFile($virtual_operator, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentDocumentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **file_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentFileOutputDto**](../Model/DocumentFileOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentFileContent**
> object inboundDocumentFileContent($virtual_operator, $file_id, $disposition_inline)

Get a file content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$file_id = "file_id_example"; // string | 
$disposition_inline = true; // bool | Default=false; Is true, the response content-disposition will be inline.

try {
    $result = $apiInstance->inboundDocumentFileContent($virtual_operator, $file_id, $disposition_inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentFileContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **file_id** | [**string**](../Model/.md)|  |
 **disposition_inline** | **bool**| Default&#x3D;false; Is true, the response content-disposition will be inline. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentGet**
> \Swagger\Client\Model\InboundDocumentOutputDto inboundDocumentGet($virtual_operator, $id, $include_pdf, $include_xml, $include_attachments)

Get the detail of a specific document based on specific Id

Return the detail of a specific document based on specific Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | The unique identifier of document
$include_pdf = true; // bool | True if result should return Pdf content
$include_xml = true; // bool | True if result should return XML content
$include_attachments = true; // bool | True if result should return Document Attachments content

try {
    $result = $apiInstance->inboundDocumentGet($virtual_operator, $id, $include_pdf, $include_xml, $include_attachments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)| The unique identifier of document |
 **include_pdf** | **bool**| True if result should return Pdf content | [optional]
 **include_xml** | **bool**| True if result should return XML content | [optional]
 **include_attachments** | **bool**| True if result should return Document Attachments content | [optional]

### Return type

[**\Swagger\Client\Model\InboundDocumentOutputDto**](../Model/InboundDocumentOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentReject**
> \Swagger\Client\Model\ResultMessageBoolean inboundDocumentReject($id, $virtual_operator, $data)

Rejects a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$data = new \Swagger\Client\Model\BusinessStatusDTO(); // \Swagger\Client\Model\BusinessStatusDTO | 

try {
    $result = $apiInstance->inboundDocumentReject($id, $virtual_operator, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentReject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |
 **data** | [**\Swagger\Client\Model\BusinessStatusDTO**](../Model/BusinessStatusDTO.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageBoolean**](../Model/ResultMessageBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentRemoveAttachment**
> bool inboundDocumentRemoveAttachment($virtual_operator, $id, $attachment_id)

Deletes a manual attachment of an inbound document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->inboundDocumentRemoveAttachment($virtual_operator, $id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentRemoveAttachment: ', $e->getMessage(), PHP_EOL;
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

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentSearch**
> \Swagger\Client\Model\InboundDocumentOutputDto[] inboundDocumentSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_pdf, $search_criteria_dto_include_xml, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search documents using search criteria  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | MaxLength: 20
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | MaxLength: 50
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | 
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | 
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | 
$search_criteria_dto_include_pdf = true; // bool | 
$search_criteria_dto_include_xml = true; // bool | 
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
    $result = $apiInstance->inboundDocumentSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_pdf, $search_criteria_dto_include_xml, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_document_number** | **string**| MaxLength: 20 | [optional]
 **search_criteria_dto_currency** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_include_pdf** | **bool**|  | [optional]
 **search_criteria_dto_include_xml** | **bool**|  | [optional]
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

[**\Swagger\Client\Model\InboundDocumentOutputDto[]**](../Model/InboundDocumentOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundDocumentUploadFilePdf**
> \Swagger\Client\Model\DocumentFileOutputDto inboundDocumentUploadFilePdf($virtual_operator, $id, $pdf_document)

Uploads the Pdf file to the inbound document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 
$pdf_document = new \Swagger\Client\Model\FileUploadInputDto(); // \Swagger\Client\Model\FileUploadInputDto | 

try {
    $result = $apiInstance->inboundDocumentUploadFilePdf($virtual_operator, $id, $pdf_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDocumentApi->inboundDocumentUploadFilePdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |
 **pdf_document** | [**\Swagger\Client\Model\FileUploadInputDto**](../Model/FileUploadInputDto.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentFileOutputDto**](../Model/DocumentFileOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

