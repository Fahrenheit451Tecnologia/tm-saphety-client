# Swagger\Client\OutboundDocumentV2Api

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**outboundDocumentV2Count**](OutboundDocumentV2Api.md#outboundDocumentV2Count) | **GET** /api/v2/{virtualOperator}/outbounddocuments/count | 
[**outboundDocumentV2Search**](OutboundDocumentV2Api.md#outboundDocumentV2Search) | **GET** /api/v2/{virtualOperator}/outbounddocuments | 


# **outboundDocumentV2Count**
> int outboundDocumentV2Count($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentV2Api(
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
    $result = $apiInstance->outboundDocumentV2Count($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentV2Api->outboundDocumentV2Count: ', $e->getMessage(), PHP_EOL;
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

# **outboundDocumentV2Search**
> \Swagger\Client\Model\OutboundDocumentSearchOutputDto[] outboundDocumentV2Search($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentV2Api(
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
    $result = $apiInstance->outboundDocumentV2Search($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_main_notification_email_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentV2Api->outboundDocumentV2Search: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\OutboundDocumentSearchOutputDto[]**](../Model/OutboundDocumentSearchOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

