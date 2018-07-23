# Swagger\Client\HolidayApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**holidayCount**](HolidayApi.md#holidayCount) | **POST** /api/holiday/count | Gets the number of records that match the search criteria
[**holidayCreate**](HolidayApi.md#holidayCreate) | **POST** /api/holiday | Create new holiday. The time from datetime value will be discarded
[**holidayDelete**](HolidayApi.md#holidayDelete) | **DELETE** /api/holiday/{date} | Delete holiday. The time from datetime value will be discarded
[**holidayGetAll**](HolidayApi.md#holidayGetAll) | **GET** /api/holiday/getAll | Get all holidays
[**holidayGetAll_0**](HolidayApi.md#holidayGetAll_0) | **GET** /api/holiday | Get all holidays
[**holidaySearch**](HolidayApi.md#holidaySearch) | **POST** /api/holiday/search | Search holidays using search criterias


# **holidayCount**
> int holidayCount($search_criteria)

Gets the number of records that match the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_criteria = new \Swagger\Client\Model\SearchHolidayCriteriaDto(); // \Swagger\Client\Model\SearchHolidayCriteriaDto | 

try {
    $result = $apiInstance->holidayCount($search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria** | [**\Swagger\Client\Model\SearchHolidayCriteriaDto**](../Model/SearchHolidayCriteriaDto.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayCreate**
> string holidayCreate($holiday_dto)

Create new holiday. The time from datetime value will be discarded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$holiday_dto = new \Swagger\Client\Model\HolidayDto(); // \Swagger\Client\Model\HolidayDto | 

try {
    $result = $apiInstance->holidayCreate($holiday_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_dto** | [**\Swagger\Client\Model\HolidayDto**](../Model/HolidayDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayDelete**
> bool holidayDelete($date)

Delete holiday. The time from datetime value will be discarded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->holidayDelete($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayGetAll**
> \Swagger\Client\Model\Holiday[] holidayGetAll()

Get all holidays

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->holidayGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Holiday[]**](../Model/Holiday.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayGetAll_0**
> \Swagger\Client\Model\Holiday[] holidayGetAll_0()

Get all holidays

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->holidayGetAll_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayGetAll_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Holiday[]**](../Model/Holiday.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidaySearch**
> \Swagger\Client\Model\Holiday[] holidaySearch($search_criteria)

Search holidays using search criterias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_criteria = new \Swagger\Client\Model\SearchHolidayCriteriaDto(); // \Swagger\Client\Model\SearchHolidayCriteriaDto | 

try {
    $result = $apiInstance->holidaySearch($search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidaySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria** | [**\Swagger\Client\Model\SearchHolidayCriteriaDto**](../Model/SearchHolidayCriteriaDto.md)|  |

### Return type

[**\Swagger\Client\Model\Holiday[]**](../Model/Holiday.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

