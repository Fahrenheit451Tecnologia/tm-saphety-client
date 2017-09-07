# Swagger\Client\HolidayApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**holidayCount**](HolidayApi.md#holidayCount) | **POST** /api/holiday/count | Gets the number of records that match the search criteria
[**holidayCreate**](HolidayApi.md#holidayCreate) | **POST** /api/holiday | Create new holiday.  The time from datetime value will be discarded
[**holidayDelete**](HolidayApi.md#holidayDelete) | **DELETE** /api/holiday/{date} | Delete holiday. The time from datetime value will be discarded
[**holidayGetAll**](HolidayApi.md#holidayGetAll) | **GET** /api/holiday/getAll | Get all holidays
[**holidayGetAll_0**](HolidayApi.md#holidayGetAll_0) | **GET** /api/holiday | Get all holidays
[**holidaySearch**](HolidayApi.md#holidaySearch) | **POST** /api/holiday/search | Search holidays using search criterias


# **holidayCount**
> object holidayCount($search_criteria)

Gets the number of records that match the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HolidayApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria = new \Swagger\Client\Model\SearchHolidayCriteriaDTO(); // \Swagger\Client\Model\SearchHolidayCriteriaDTO | 

try {
    $result = $api_instance->holidayCount($search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria** | [**\Swagger\Client\Model\SearchHolidayCriteriaDTO**](../Model/SearchHolidayCriteriaDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayCreate**
> \Swagger\Client\Model\ResultMessageGuid holidayCreate($holiday_dto)

Create new holiday.  The time from datetime value will be discarded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HolidayApi(new \Http\Adapter\Guzzle6\Client());
$holiday_dto = new \Swagger\Client\Model\HolidayDTO(); // \Swagger\Client\Model\HolidayDTO | 

try {
    $result = $api_instance->holidayCreate($holiday_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_dto** | [**\Swagger\Client\Model\HolidayDTO**](../Model/HolidayDTO.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayDelete**
> object holidayDelete($date)

Delete holiday. The time from datetime value will be discarded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HolidayApi(new \Http\Adapter\Guzzle6\Client());
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->holidayDelete($date);
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

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayGetAll**
> holidayGetAll()

Get all holidays

Get a list of all templates for the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HolidayApi(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->holidayGetAll();
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayGetAll_0**
> holidayGetAll_0()

Get all holidays

Get a list of all templates for the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HolidayApi(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->holidayGetAll_0();
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayGetAll_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidaySearch**
> object holidaySearch($search_criteria)

Search holidays using search criterias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HolidayApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria = new \Swagger\Client\Model\SearchHolidayCriteriaDTO(); // \Swagger\Client\Model\SearchHolidayCriteriaDTO | 

try {
    $result = $api_instance->holidaySearch($search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidaySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria** | [**\Swagger\Client\Model\SearchHolidayCriteriaDTO**](../Model/SearchHolidayCriteriaDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

