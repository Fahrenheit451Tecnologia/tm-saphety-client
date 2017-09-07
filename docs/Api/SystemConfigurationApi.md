# Swagger\Client\SystemConfigurationApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemConfigurationGetAll**](SystemConfigurationApi.md#systemConfigurationGetAll) | **GET** /api/systemconfigurations | Search System configurations by value
[**systemConfigurationGetAllCount**](SystemConfigurationApi.md#systemConfigurationGetAllCount) | **GET** /api/systemconfigurations/count | Count all system configurations
[**systemConfigurationGetByKey**](SystemConfigurationApi.md#systemConfigurationGetByKey) | **GET** /api/systemconfigurations/{key} | Get system configuration by key
[**systemConfigurationGetDocumentsPdfKeys**](SystemConfigurationApi.md#systemConfigurationGetDocumentsPdfKeys) | **GET** /api/systemconfigurations/getDocumentsPdfKeys | Get system configuration key for actions on outboundDocument pdf
[**systemConfigurationPutUpdate**](SystemConfigurationApi.md#systemConfigurationPutUpdate) | **PUT** /api/systemconfigurations | Update system configuration value


# **systemConfigurationGetAll**
> object systemConfigurationGetAll($dto_value_size, $dto_offset, $dto_number_of_records, $dto_sort_field)

Search System configurations by value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemConfigurationApi(new \Http\Adapter\Guzzle6\Client());
$dto_value_size = 56; // int | 
$dto_offset = 56; // int | 
$dto_number_of_records = 56; // int | 
$dto_sort_field = "dto_sort_field_example"; // string | 

try {
    $result = $api_instance->systemConfigurationGetAll($dto_value_size, $dto_offset, $dto_number_of_records, $dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto_value_size** | **int**|  | [optional]
 **dto_offset** | **int**|  | [optional]
 **dto_number_of_records** | **int**|  | [optional]
 **dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemConfigurationGetAllCount**
> object systemConfigurationGetAllCount()

Count all system configurations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemConfigurationApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->systemConfigurationGetAllCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationGetAllCount: ', $e->getMessage(), PHP_EOL;
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

# **systemConfigurationGetByKey**
> object systemConfigurationGetByKey($key)

Get system configuration by key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemConfigurationApi(new \Http\Adapter\Guzzle6\Client());
$key = "key_example"; // string | 

try {
    $result = $api_instance->systemConfigurationGetByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationGetByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemConfigurationGetDocumentsPdfKeys**
> object systemConfigurationGetDocumentsPdfKeys()

Get system configuration key for actions on outboundDocument pdf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemConfigurationApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->systemConfigurationGetDocumentsPdfKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationGetDocumentsPdfKeys: ', $e->getMessage(), PHP_EOL;
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

# **systemConfigurationPutUpdate**
> object systemConfigurationPutUpdate($dto)

Update system configuration value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemConfigurationApi(new \Http\Adapter\Guzzle6\Client());
$dto = new \Swagger\Client\Model\SystemConfigurationDTO(); // \Swagger\Client\Model\SystemConfigurationDTO | 

try {
    $result = $api_instance->systemConfigurationPutUpdate($dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationPutUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\Swagger\Client\Model\SystemConfigurationDTO**](../Model/SystemConfigurationDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

