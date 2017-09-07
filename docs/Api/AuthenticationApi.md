# Swagger\Client\AuthenticationApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationGetToken**](AuthenticationApi.md#authenticationGetToken) | **POST** /api/auth/gettoken | Gets a authentication token given the requested data
[**authenticationGetTokenEmailUser**](AuthenticationApi.md#authenticationGetTokenEmailUser) | **POST** /api/auth/gettoken/emailuser | Gets a token for an email user
[**authenticationGetTokenTechnologicalProvider**](AuthenticationApi.md#authenticationGetTokenTechnologicalProvider) | **POST** /api/interoperabilidad/api/v1_0/login | Gets a token for an email user


# **authenticationGetToken**
> object authenticationGetToken($token_request)

Gets a authentication token given the requested data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthenticationApi(new \Http\Adapter\Guzzle6\Client());
$token_request = new \Swagger\Client\Model\UserTokenRequestInputDto(); // \Swagger\Client\Model\UserTokenRequestInputDto | 

try {
    $result = $api_instance->authenticationGetToken($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\Swagger\Client\Model\UserTokenRequestInputDto**](../Model/UserTokenRequestInputDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetTokenEmailUser**
> object authenticationGetTokenEmailUser($token_request)

Gets a token for an email user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthenticationApi(new \Http\Adapter\Guzzle6\Client());
$token_request = new \Swagger\Client\Model\EmailUserRequestTokenInputDto(); // \Swagger\Client\Model\EmailUserRequestTokenInputDto | 

try {
    $result = $api_instance->authenticationGetTokenEmailUser($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetTokenEmailUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\Swagger\Client\Model\EmailUserRequestTokenInputDto**](../Model/EmailUserRequestTokenInputDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetTokenTechnologicalProvider**
> object authenticationGetTokenTechnologicalProvider($token_request)

Gets a token for an email user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthenticationApi(new \Http\Adapter\Guzzle6\Client());
$token_request = new \Swagger\Client\Model\TechnologicalProviderAuthenticateInputDto(); // \Swagger\Client\Model\TechnologicalProviderAuthenticateInputDto | 

try {
    $result = $api_instance->authenticationGetTokenTechnologicalProvider($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetTokenTechnologicalProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\Swagger\Client\Model\TechnologicalProviderAuthenticateInputDto**](../Model/TechnologicalProviderAuthenticateInputDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

