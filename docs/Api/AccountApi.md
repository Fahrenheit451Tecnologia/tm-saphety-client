# Swagger\Client\AccountApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAcceptInvitation**](AccountApi.md#accountAcceptInvitation) | **POST** /api/{virtualOperator}/account/acceptinvitation/{userInvitationTokenId} | Accept company invitation from url
[**accountActivateUser**](AccountApi.md#accountActivateUser) | **POST** /api/account/activateuser | Activate the user account
[**accountConfirmRecoveryPassword**](AccountApi.md#accountConfirmRecoveryPassword) | **POST** /api/account/confirmrecoverypassword/{token} | Second step on request recovery password
[**accountGet**](AccountApi.md#accountGet) | **GET** /api/account | Gets the account information of the currently authenticated user
[**accountGetActivateUserInfo**](AccountApi.md#accountGetActivateUserInfo) | **GET** /api/account/activateuser | Get data from user to activate
[**accountGetMembershipRoles**](AccountApi.md#accountGetMembershipRoles) | **GET** /api/{virtualOperator}/account/membership/{companyId}/roles | For the authenticated user, gets the roles from a specific company
[**accountRequestRecoveryPassword**](AccountApi.md#accountRequestRecoveryPassword) | **POST** /api/account/requestrecoverypassword/{virtualOperator} | Requests a password recovery for an existing user
[**accountUpdate**](AccountApi.md#accountUpdate) | **PUT** /api/account | Update the authenticated user&#39;s profile
[**accountUpdatePassword**](AccountApi.md#accountUpdatePassword) | **PUT** /api/account/password | Updates the authenticated user&#39;s password


# **accountAcceptInvitation**
> bool accountAcceptInvitation($virtual_operator, $user_invitation_token_id, $invitation_input_dto)

Accept company invitation from url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$user_invitation_token_id = "user_invitation_token_id_example"; // string | 
$invitation_input_dto = new \Swagger\Client\Model\AcceptUserInvitationInputDto(); // \Swagger\Client\Model\AcceptUserInvitationInputDto | 

try {
    $result = $apiInstance->accountAcceptInvitation($virtual_operator, $user_invitation_token_id, $invitation_input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountAcceptInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **user_invitation_token_id** | **string**|  |
 **invitation_input_dto** | [**\Swagger\Client\Model\AcceptUserInvitationInputDto**](../Model/AcceptUserInvitationInputDto.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountActivateUser**
> bool accountActivateUser($user_activation_token)

Activate the user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_activation_token = new \Swagger\Client\Model\UserActivationInputDto(); // \Swagger\Client\Model\UserActivationInputDto | 

try {
    $result = $apiInstance->accountActivateUser($user_activation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountActivateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_activation_token** | [**\Swagger\Client\Model\UserActivationInputDto**](../Model/UserActivationInputDto.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountConfirmRecoveryPassword**
> bool accountConfirmRecoveryPassword($token, $user_confirm_recovery_password)

Second step on request recovery password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | 
$user_confirm_recovery_password = new \Swagger\Client\Model\UserConfirmRecoveryPasswordDTO(); // \Swagger\Client\Model\UserConfirmRecoveryPasswordDTO | 

try {
    $result = $apiInstance->accountConfirmRecoveryPassword($token, $user_confirm_recovery_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountConfirmRecoveryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **user_confirm_recovery_password** | [**\Swagger\Client\Model\UserConfirmRecoveryPasswordDTO**](../Model/UserConfirmRecoveryPasswordDTO.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGet**
> \Swagger\Client\Model\UserAccount accountGet($user_id)

Gets the account information of the currently authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->accountGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\UserAccount**](../Model/UserAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGetActivateUserInfo**
> \Swagger\Client\Model\ActivateUserInfoOutputDto accountGetActivateUserInfo($user_activation_token)

Get data from user to activate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_activation_token = "user_activation_token_example"; // string | 

try {
    $result = $apiInstance->accountGetActivateUserInfo($user_activation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetActivateUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_activation_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\ActivateUserInfoOutputDto**](../Model/ActivateUserInfoOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGetMembershipRoles**
> \Swagger\Client\Model\ResultMessageDTORoleDto accountGetMembershipRoles($virtual_operator, $company_id)

For the authenticated user, gets the roles from a specific company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->accountGetMembershipRoles($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetMembershipRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDTORoleDto**](../Model/ResultMessageDTORoleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountRequestRecoveryPassword**
> bool accountRequestRecoveryPassword($user_request_recovery_password, $virtual_operator)

Requests a password recovery for an existing user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_request_recovery_password = new \Swagger\Client\Model\UserRequestRecoveryPasswordDTO(); // \Swagger\Client\Model\UserRequestRecoveryPasswordDTO | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->accountRequestRecoveryPassword($user_request_recovery_password, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountRequestRecoveryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_request_recovery_password** | [**\Swagger\Client\Model\UserRequestRecoveryPasswordDTO**](../Model/UserRequestRecoveryPasswordDTO.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUpdate**
> string accountUpdate($account_update)

Update the authenticated user's profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_update = new \Swagger\Client\Model\AccountUpdateInputDto(); // \Swagger\Client\Model\AccountUpdateInputDto | 

try {
    $result = $apiInstance->accountUpdate($account_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_update** | [**\Swagger\Client\Model\AccountUpdateInputDto**](../Model/AccountUpdateInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUpdatePassword**
> string accountUpdatePassword($account_update_password)

Updates the authenticated user's password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_update_password = new \Swagger\Client\Model\AccountUpdatePasswordInputDto(); // \Swagger\Client\Model\AccountUpdatePasswordInputDto | 

try {
    $result = $apiInstance->accountUpdatePassword($account_update_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountUpdatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_update_password** | [**\Swagger\Client\Model\AccountUpdatePasswordInputDto**](../Model/AccountUpdatePasswordInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

