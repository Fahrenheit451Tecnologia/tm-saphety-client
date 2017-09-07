# Swagger\Client\InteroperabilityV1_0Api

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**interoperabilityV10ChangePassword**](InteroperabilityV1_0Api.md#interoperabilityV10ChangePassword) | **PUT** /api/interoperabilidad/api/v1_0/cambioContrasena | Change the password of a technological provider
[**interoperabilityV10Consult**](InteroperabilityV1_0Api.md#interoperabilityV10Consult) | **GET** /api/interoperabilidad/api/v1_0/consultar/{UUID} | consult the process state of a document
[**interoperabilityV10Register**](InteroperabilityV1_0Api.md#interoperabilityV10Register) | **POST** /api/interoperabilidad/api/v1_0/registrar | Register new documents from the sftp


# **interoperabilityV10ChangePassword**
> object interoperabilityV10ChangePassword()

Change the password of a technological provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InteroperabilityV1_0Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->interoperabilityV10ChangePassword();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteroperabilityV1_0Api->interoperabilityV10ChangePassword: ', $e->getMessage(), PHP_EOL;
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

# **interoperabilityV10Consult**
> object interoperabilityV10Consult($uuid)

consult the process state of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InteroperabilityV1_0Api(new \Http\Adapter\Guzzle6\Client());
$uuid = "uuid_example"; // string | 

try {
    $result = $api_instance->interoperabilityV10Consult($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteroperabilityV1_0Api->interoperabilityV10Consult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **interoperabilityV10Register**
> object interoperabilityV10Register($register_request)

Register new documents from the sftp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InteroperabilityV1_0Api(new \Http\Adapter\Guzzle6\Client());
$register_request = new \Swagger\Client\Model\InteroperabilityDocumentRegisterInputDto(); // \Swagger\Client\Model\InteroperabilityDocumentRegisterInputDto | 

try {
    $result = $api_instance->interoperabilityV10Register($register_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteroperabilityV1_0Api->interoperabilityV10Register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_request** | [**\Swagger\Client\Model\InteroperabilityDocumentRegisterInputDto**](../Model/InteroperabilityDocumentRegisterInputDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

