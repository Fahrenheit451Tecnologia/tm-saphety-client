# Swagger\Client\OutboundDocumentStatisticsApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**outboundDocumentStatisticsGet**](OutboundDocumentStatisticsApi.md#outboundDocumentStatisticsGet) | **GET** /api/outbounddocumentstatistics | Get the documents statistics for a given date
[**outboundDocumentStatisticsGet_0**](OutboundDocumentStatisticsApi.md#outboundDocumentStatisticsGet_0) | **GET** /api/{virtualOperator}/outbounddocumentstatistics | Get the documents statistics for a given date


# **outboundDocumentStatisticsGet**
> \Swagger\Client\Model\DocumentStatisticsOutputDto outboundDocumentStatisticsGet($doc_statistics_criteria_search_interval)

Get the documents statistics for a given date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$doc_statistics_criteria_search_interval = "doc_statistics_criteria_search_interval_example"; // string | \"24HOURS,5DAYS,30DAYS

try {
    $result = $apiInstance->outboundDocumentStatisticsGet($doc_statistics_criteria_search_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentStatisticsApi->outboundDocumentStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_statistics_criteria_search_interval** | **string**| \&quot;24HOURS,5DAYS,30DAYS |

### Return type

[**\Swagger\Client\Model\DocumentStatisticsOutputDto**](../Model/DocumentStatisticsOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentStatisticsGet_0**
> \Swagger\Client\Model\DocumentStatisticsOutputDto outboundDocumentStatisticsGet_0($virtual_operator, $doc_statistics_criteria_search_interval)

Get the documents statistics for a given date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OutboundDocumentStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$doc_statistics_criteria_search_interval = "doc_statistics_criteria_search_interval_example"; // string | \"24HOURS,5DAYS,30DAYS

try {
    $result = $apiInstance->outboundDocumentStatisticsGet_0($virtual_operator, $doc_statistics_criteria_search_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentStatisticsApi->outboundDocumentStatisticsGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **doc_statistics_criteria_search_interval** | **string**| \&quot;24HOURS,5DAYS,30DAYS |

### Return type

[**\Swagger\Client\Model\DocumentStatisticsOutputDto**](../Model/DocumentStatisticsOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

