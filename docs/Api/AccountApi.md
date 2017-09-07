# Swagger\Client\AccountApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAcceptInvitation**](AccountApi.md#accountAcceptInvitation) | **POST** /api/{virtualOperator}/account/acceptinvitation/{userInvitationTokenId} | Accept company invitation from url
[**accountConfirmRecoveryPassword**](AccountApi.md#accountConfirmRecoveryPassword) | **POST** /api/account/confirmrecoverypassword/{userRequestRecoveryPasswordId} | Second step on request recovery password
[**accountGet**](AccountApi.md#accountGet) | **GET** /api/account | Gets the account information of the currently authenticated user
[**accountGetMembershipRoles**](AccountApi.md#accountGetMembershipRoles) | **GET** /api/{virtualOperator}/account/membership/{companyId}/roles | For the authenticated user, gets the roles from a specific company
[**accountRequestRecoveryPassword**](AccountApi.md#accountRequestRecoveryPassword) | **POST** /api/account/requestrecoverypassword | Requests a password recovery for an existing user
[**accountUpdate**](AccountApi.md#accountUpdate) | **PUT** /api/account | Update the authenticated user&#39;s profile
[**accountUpdatePassword**](AccountApi.md#accountUpdatePassword) | **PUT** /api/account/password | Updates the authenticated user&#39;s password


# **accountAcceptInvitation**
> object accountAcceptInvitation($virtual_operator, $user_invitation_token_id, $accept_user_invitation)

Accept company invitation from url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$user_invitation_token_id = "user_invitation_token_id_example"; // string | 
$accept_user_invitation = new \Swagger\Client\Model\AcceptUserInvitationDTO(); // \Swagger\Client\Model\AcceptUserInvitationDTO | 

try {
    $result = $api_instance->accountAcceptInvitation($virtual_operator, $user_invitation_token_id, $accept_user_invitation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountAcceptInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **user_invitation_token_id** | **string**|  |
 **accept_user_invitation** | [**\Swagger\Client\Model\AcceptUserInvitationDTO**](../Model/AcceptUserInvitationDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountConfirmRecoveryPassword**
> object accountConfirmRecoveryPassword($user_request_recovery_password_id, $user_confirm_recovery_password)

Second step on request recovery password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountApi(new \Http\Adapter\Guzzle6\Client());
$user_request_recovery_password_id = "user_request_recovery_password_id_example"; // string | 
$user_confirm_recovery_password = new \Swagger\Client\Model\UserConfirmRecoveryPasswordDTO(); // \Swagger\Client\Model\UserConfirmRecoveryPasswordDTO | 

try {
    $result = $api_instance->accountConfirmRecoveryPassword($user_request_recovery_password_id, $user_confirm_recovery_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountConfirmRecoveryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_request_recovery_password_id** | **string**|  |
 **user_confirm_recovery_password** | [**\Swagger\Client\Model\UserConfirmRecoveryPasswordDTO**](../Model/UserConfirmRecoveryPasswordDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGet**
> object accountGet($user_id)

Gets the account information of the currently authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGetMembershipRoles**
> \Swagger\Client\Model\ResultMessageRoleDTO accountGetMembershipRoles($virtual_operator, $company_id)

For the authenticated user, gets the roles from a specific company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->accountGetMembershipRoles($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetMembershipRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ResultMessageRoleDTO**](../Model/ResultMessageRoleDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountRequestRecoveryPassword**
> object accountRequestRecoveryPassword($user_request_recovery_password)

Requests a password recovery for an existing user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountApi(new \Http\Adapter\Guzzle6\Client());
$user_request_recovery_password = new \Swagger\Client\Model\UserRequestRecoveryPasswordDTO(); // \Swagger\Client\Model\UserRequestRecoveryPasswordDTO | 

try {
    $result = $api_instance->accountRequestRecoveryPassword($user_request_recovery_password);
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

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUpdate**
> object accountUpdate($account_update)

Update the authenticated user's profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountApi(new \Http\Adapter\Guzzle6\Client());
$account_update = new \Swagger\Client\Model\AccountUpdateDTO(); // \Swagger\Client\Model\AccountUpdateDTO | 

try {
    $result = $api_instance->accountUpdate($account_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_update** | [**\Swagger\Client\Model\AccountUpdateDTO**](../Model/AccountUpdateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUpdatePassword**
> object accountUpdatePassword($account_update_password)

Updates the authenticated user's password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountApi(new \Http\Adapter\Guzzle6\Client());
$account_update_password = new \Swagger\Client\Model\AccountUpdatePasswordDTO(); // \Swagger\Client\Model\AccountUpdatePasswordDTO | 

try {
    $result = $api_instance->accountUpdatePassword($account_update_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountUpdatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_update_password** | [**\Swagger\Client\Model\AccountUpdatePasswordDTO**](../Model/AccountUpdatePasswordDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

