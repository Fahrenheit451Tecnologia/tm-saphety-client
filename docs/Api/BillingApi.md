# Swagger\Client\BillingApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingInboundAttachmentsSizeCount**](BillingApi.md#billingInboundAttachmentsSizeCount) | **GET** /api/billing/inbound/attachments | Get Inbound Attachments count and size by date and issuer
[**billingInboundDocumentsCount**](BillingApi.md#billingInboundDocumentsCount) | **GET** /api/billing/inbound/documents | Get Inbound Document count by date and issuer
[**billingOutboundAttachmentsSizeCount**](BillingApi.md#billingOutboundAttachmentsSizeCount) | **GET** /api/billing/outbound/attachments | Get Outbound Attachments count and size by date and issuer
[**billingOutboundDocumentsCount**](BillingApi.md#billingOutboundDocumentsCount) | **GET** /api/billing/outbound/documents | Get Outbound Document count by date and issuer


# **billingInboundAttachmentsSizeCount**
> \Swagger\Client\Model\InboundDocumentsBillingOutputDto[] billingInboundAttachmentsSizeCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field)

Get Inbound Attachments count and size by date and issuer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_criteria_creation_date_time_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_creation_date_time_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_offset = 56; // int | 
$billing_criteria_number_of_records = 56; // int | 
$billing_criteria_sort_field = "billing_criteria_sort_field_example"; // string | 

try {
    $result = $apiInstance->billingInboundAttachmentsSizeCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInboundAttachmentsSizeCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_criteria_creation_date_time_start** | **\DateTime**|  | [optional]
 **billing_criteria_creation_date_time_end** | **\DateTime**|  | [optional]
 **billing_criteria_offset** | **int**|  | [optional]
 **billing_criteria_number_of_records** | **int**|  | [optional]
 **billing_criteria_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InboundDocumentsBillingOutputDto[]**](../Model/InboundDocumentsBillingOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingInboundDocumentsCount**
> \Swagger\Client\Model\InboundDocumentsBillingOutputDto[] billingInboundDocumentsCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field)

Get Inbound Document count by date and issuer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_criteria_creation_date_time_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_creation_date_time_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_offset = 56; // int | 
$billing_criteria_number_of_records = 56; // int | 
$billing_criteria_sort_field = "billing_criteria_sort_field_example"; // string | 

try {
    $result = $apiInstance->billingInboundDocumentsCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingInboundDocumentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_criteria_creation_date_time_start** | **\DateTime**|  | [optional]
 **billing_criteria_creation_date_time_end** | **\DateTime**|  | [optional]
 **billing_criteria_offset** | **int**|  | [optional]
 **billing_criteria_number_of_records** | **int**|  | [optional]
 **billing_criteria_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InboundDocumentsBillingOutputDto[]**](../Model/InboundDocumentsBillingOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingOutboundAttachmentsSizeCount**
> \Swagger\Client\Model\OutboundDocumentsBillingOutputDto[] billingOutboundAttachmentsSizeCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field)

Get Outbound Attachments count and size by date and issuer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_criteria_creation_date_time_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_creation_date_time_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_offset = 56; // int | 
$billing_criteria_number_of_records = 56; // int | 
$billing_criteria_sort_field = "billing_criteria_sort_field_example"; // string | 

try {
    $result = $apiInstance->billingOutboundAttachmentsSizeCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingOutboundAttachmentsSizeCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_criteria_creation_date_time_start** | **\DateTime**|  | [optional]
 **billing_criteria_creation_date_time_end** | **\DateTime**|  | [optional]
 **billing_criteria_offset** | **int**|  | [optional]
 **billing_criteria_number_of_records** | **int**|  | [optional]
 **billing_criteria_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\OutboundDocumentsBillingOutputDto[]**](../Model/OutboundDocumentsBillingOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingOutboundDocumentsCount**
> \Swagger\Client\Model\OutboundDocumentsBillingOutputDto[] billingOutboundDocumentsCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field)

Get Outbound Document count by date and issuer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_criteria_creation_date_time_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_creation_date_time_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$billing_criteria_offset = 56; // int | 
$billing_criteria_number_of_records = 56; // int | 
$billing_criteria_sort_field = "billing_criteria_sort_field_example"; // string | 

try {
    $result = $apiInstance->billingOutboundDocumentsCount($billing_criteria_creation_date_time_start, $billing_criteria_creation_date_time_end, $billing_criteria_offset, $billing_criteria_number_of_records, $billing_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingOutboundDocumentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_criteria_creation_date_time_start** | **\DateTime**|  | [optional]
 **billing_criteria_creation_date_time_end** | **\DateTime**|  | [optional]
 **billing_criteria_offset** | **int**|  | [optional]
 **billing_criteria_number_of_records** | **int**|  | [optional]
 **billing_criteria_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\OutboundDocumentsBillingOutputDto[]**](../Model/OutboundDocumentsBillingOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

