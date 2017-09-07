# Swagger\Client\OutboundDocumentStatisticsApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**outboundDocumentStatisticsGet**](OutboundDocumentStatisticsApi.md#outboundDocumentStatisticsGet) | **GET** /api/outbounddocumentstatistics | Get the documents statistics for a given date
[**outboundDocumentStatisticsGet_0**](OutboundDocumentStatisticsApi.md#outboundDocumentStatisticsGet_0) | **GET** /api/{virtualOperator}/outbounddocumentstatistics | Get the documents statistics for a given date


# **outboundDocumentStatisticsGet**
> \Swagger\Client\Model\DocumentStatisticsDTO outboundDocumentStatisticsGet($doc_statistics_criteria_search_interval)

Get the documents statistics for a given date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentStatisticsApi(new \Http\Adapter\Guzzle6\Client());
$doc_statistics_criteria_search_interval = "doc_statistics_criteria_search_interval_example"; // string | 

try {
    $result = $api_instance->outboundDocumentStatisticsGet($doc_statistics_criteria_search_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentStatisticsApi->outboundDocumentStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_statistics_criteria_search_interval** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DocumentStatisticsDTO**](../Model/DocumentStatisticsDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentStatisticsGet_0**
> \Swagger\Client\Model\DocumentStatisticsDTO outboundDocumentStatisticsGet_0($virtual_operator, $doc_statistics_criteria_search_interval)

Get the documents statistics for a given date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentStatisticsApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$doc_statistics_criteria_search_interval = "doc_statistics_criteria_search_interval_example"; // string | 

try {
    $result = $api_instance->outboundDocumentStatisticsGet_0($virtual_operator, $doc_statistics_criteria_search_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentStatisticsApi->outboundDocumentStatisticsGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **doc_statistics_criteria_search_interval** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DocumentStatisticsDTO**](../Model/DocumentStatisticsDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

