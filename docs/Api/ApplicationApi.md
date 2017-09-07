# Swagger\Client\ApplicationApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationGetApiVersion**](ApplicationApi.md#applicationGetApiVersion) | **GET** /api/apiversion | Get api version
[**applicationGetDigitalCertificate**](ApplicationApi.md#applicationGetDigitalCertificate) | **GET** /api/digitalcertificate | Gets Digital certificate


# **applicationGetApiVersion**
> string applicationGetApiVersion()

Get api version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApplicationApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->applicationGetApiVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationGetApiVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationGetDigitalCertificate**
> string applicationGetDigitalCertificate()

Gets Digital certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ApplicationApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->applicationGetDigitalCertificate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationGetDigitalCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

