# Swagger\Client\SystemConfigurationApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemConfigurationAddCertificate**](SystemConfigurationApi.md#systemConfigurationAddCertificate) | **POST** /api/systemconfigurations/certificate | Adds a new certificate to be used by the instance
[**systemConfigurationCount**](SystemConfigurationApi.md#systemConfigurationCount) | **GET** /api/systemconfigurations/count | Count all system configurations
[**systemConfigurationGetActiveCertificate**](SystemConfigurationApi.md#systemConfigurationGetActiveCertificate) | **GET** /api/systemconfigurations/certificate | Adds a new certificate to be used by the instance
[**systemConfigurationGetAll**](SystemConfigurationApi.md#systemConfigurationGetAll) | **GET** /api/systemconfigurations | Get all system configurations  Values are truncated to the size especified on critera
[**systemConfigurationGetByKey**](SystemConfigurationApi.md#systemConfigurationGetByKey) | **GET** /api/systemconfigurations/{key} | Get system configuration by key
[**systemConfigurationUpdate**](SystemConfigurationApi.md#systemConfigurationUpdate) | **PUT** /api/systemconfigurations | Update system configuration value


# **systemConfigurationAddCertificate**
> string systemConfigurationAddCertificate($certificate_dto)

Adds a new certificate to be used by the instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$certificate_dto = new \Swagger\Client\Model\CertificateInputDto(); // \Swagger\Client\Model\CertificateInputDto | 

try {
    $result = $apiInstance->systemConfigurationAddCertificate($certificate_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationAddCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_dto** | [**\Swagger\Client\Model\CertificateInputDto**](../Model/CertificateInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemConfigurationCount**
> int systemConfigurationCount()

Count all system configurations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemConfigurationCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemConfigurationGetActiveCertificate**
> \Swagger\Client\Model\CertificateOutputDto systemConfigurationGetActiveCertificate()

Adds a new certificate to be used by the instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemConfigurationGetActiveCertificate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationGetActiveCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CertificateOutputDto**](../Model/CertificateOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemConfigurationGetAll**
> \Swagger\Client\Model\SystemConfigurationOutputDto[] systemConfigurationGetAll($criteria_value_size, $criteria_offset, $criteria_number_of_records, $criteria_sort_field)

Get all system configurations  Values are truncated to the size especified on critera

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$criteria_value_size = 56; // int | Truncate Value to this size
$criteria_offset = 56; // int | 
$criteria_number_of_records = 56; // int | 
$criteria_sort_field = "criteria_sort_field_example"; // string | 

try {
    $result = $apiInstance->systemConfigurationGetAll($criteria_value_size, $criteria_offset, $criteria_number_of_records, $criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria_value_size** | **int**| Truncate Value to this size | [optional]
 **criteria_offset** | **int**|  | [optional]
 **criteria_number_of_records** | **int**|  | [optional]
 **criteria_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SystemConfigurationOutputDto[]**](../Model/SystemConfigurationOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemConfigurationGetByKey**
> string systemConfigurationGetByKey($key)

Get system configuration by key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | 

try {
    $result = $apiInstance->systemConfigurationGetByKey($key);
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemConfigurationUpdate**
> bool systemConfigurationUpdate($system_configuration)

Update system configuration value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$system_configuration = new \Swagger\Client\Model\SystemConfigurationUpdateInputDto(); // \Swagger\Client\Model\SystemConfigurationUpdateInputDto | 

try {
    $result = $apiInstance->systemConfigurationUpdate($system_configuration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemConfigurationApi->systemConfigurationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_configuration** | [**\Swagger\Client\Model\SystemConfigurationUpdateInputDto**](../Model/SystemConfigurationUpdateInputDto.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

