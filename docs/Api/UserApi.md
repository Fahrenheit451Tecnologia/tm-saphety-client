# Swagger\Client\UserApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCount**](UserApi.md#userCount) | **GET** /api/{virtualOperator}/users/count | Counts the number of results given for a specific search criteria
[**userCount_0**](UserApi.md#userCount_0) | **GET** /api/users/count | Counts the number of results given for a specific search criteria
[**userCreate**](UserApi.md#userCreate) | **POST** /api/users | Creates a user.
[**userDetails**](UserApi.md#userDetails) | **GET** /api/{virtualOperator}/users/{id} | Get a user details.
[**userDetails_0**](UserApi.md#userDetails_0) | **GET** /api/users/{id} | Get a user details.
[**userRemove**](UserApi.md#userRemove) | **DELETE** /api/users/{userId} | Removes a user from the system.
[**userRoles**](UserApi.md#userRoles) | **GET** /api/{virtualOperator}/users/{userId}/roles | Get a user roles.
[**userRoles_0**](UserApi.md#userRoles_0) | **GET** /api/users/{userId}/roles | Get a user roles.
[**userSearch**](UserApi.md#userSearch) | **GET** /api/{virtualOperator}/users | Search users using a search criterias
[**userSearch_0**](UserApi.md#userSearch_0) | **GET** /api/users | Search users using a search criterias
[**userSendUserActivationToken**](UserApi.md#userSendUserActivationToken) | **POST** /api/users/{userId}/sendactivationtoken | Send user activation token
[**userUpdate**](UserApi.md#userUpdate) | **PUT** /api/users/{userId} | Update user info
[**userUpdateRoles**](UserApi.md#userUpdateRoles) | **PUT** /api/users/{userId}/roles | update a user roles.


# **userCount**
> int userCount($virtual_operator, $user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field)

Counts the number of results given for a specific search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$user_search_criteria_input_dto_id = "user_search_criteria_input_dto_id_example"; // string | 
$user_search_criteria_input_dto_user_name = "user_search_criteria_input_dto_user_name_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_email = "user_search_criteria_input_dto_email_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_virtual_operator = "user_search_criteria_input_dto_virtual_operator_example"; // string | MaxLength: 60
$user_search_criteria_input_dto_company_id = "user_search_criteria_input_dto_company_id_example"; // string | 
$user_search_criteria_input_dto_offset = 56; // int | 
$user_search_criteria_input_dto_number_of_records = 56; // int | 
$user_search_criteria_input_dto_sort_field = "user_search_criteria_input_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->userCount($virtual_operator, $user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **user_search_criteria_input_dto_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_user_name** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_email** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_virtual_operator** | **string**| MaxLength: 60 | [optional]
 **user_search_criteria_input_dto_company_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_offset** | **int**|  | [optional]
 **user_search_criteria_input_dto_number_of_records** | **int**|  | [optional]
 **user_search_criteria_input_dto_sort_field** | **string**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCount_0**
> int userCount_0($user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field)

Counts the number of results given for a specific search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_search_criteria_input_dto_id = "user_search_criteria_input_dto_id_example"; // string | 
$user_search_criteria_input_dto_user_name = "user_search_criteria_input_dto_user_name_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_email = "user_search_criteria_input_dto_email_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_virtual_operator = "user_search_criteria_input_dto_virtual_operator_example"; // string | MaxLength: 60
$user_search_criteria_input_dto_company_id = "user_search_criteria_input_dto_company_id_example"; // string | 
$user_search_criteria_input_dto_offset = 56; // int | 
$user_search_criteria_input_dto_number_of_records = 56; // int | 
$user_search_criteria_input_dto_sort_field = "user_search_criteria_input_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->userCount_0($user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCount_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_search_criteria_input_dto_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_user_name** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_email** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_virtual_operator** | **string**| MaxLength: 60 | [optional]
 **user_search_criteria_input_dto_company_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_offset** | **int**|  | [optional]
 **user_search_criteria_input_dto_number_of_records** | **int**|  | [optional]
 **user_search_criteria_input_dto_sort_field** | **string**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCreate**
> string userCreate($user)

Creates a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = new \Swagger\Client\Model\UserInputDto(); // \Swagger\Client\Model\UserInputDto | 

try {
    $result = $apiInstance->userCreate($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\Swagger\Client\Model\UserInputDto**](../Model/UserInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDetails**
> \Swagger\Client\Model\UserOutputDto userDetails($id, $virtual_operator)

Get a user details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->userDetails($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

[**\Swagger\Client\Model\UserOutputDto**](../Model/UserOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDetails_0**
> \Swagger\Client\Model\UserOutputDto userDetails_0($id)

Get a user details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->userDetails_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDetails_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\UserOutputDto**](../Model/UserOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRemove**
> string userRemove($user_id)

Removes a user from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->userRemove($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRoles**
> \Swagger\Client\Model\UserRolesOutputDto userRoles($user_id, $virtual_operator)

Get a user roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $apiInstance->userRoles($user_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**|  |

### Return type

[**\Swagger\Client\Model\UserRolesOutputDto**](../Model/UserRolesOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRoles_0**
> \Swagger\Client\Model\UserRolesOutputDto userRoles_0($user_id)

Get a user roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->userRoles_0($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRoles_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\UserRolesOutputDto**](../Model/UserRolesOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSearch**
> \Swagger\Client\Model\UserOutputDto[] userSearch($virtual_operator, $user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field)

Search users using a search criterias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | Virtual operato alias; MaxLength: 60
$user_search_criteria_input_dto_id = "user_search_criteria_input_dto_id_example"; // string | 
$user_search_criteria_input_dto_user_name = "user_search_criteria_input_dto_user_name_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_email = "user_search_criteria_input_dto_email_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_virtual_operator = "user_search_criteria_input_dto_virtual_operator_example"; // string | MaxLength: 60
$user_search_criteria_input_dto_company_id = "user_search_criteria_input_dto_company_id_example"; // string | 
$user_search_criteria_input_dto_offset = 56; // int | 
$user_search_criteria_input_dto_number_of_records = 56; // int | 
$user_search_criteria_input_dto_sort_field = "user_search_criteria_input_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->userSearch($virtual_operator, $user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| Virtual operato alias; MaxLength: 60 |
 **user_search_criteria_input_dto_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_user_name** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_email** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_virtual_operator** | **string**| MaxLength: 60 | [optional]
 **user_search_criteria_input_dto_company_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_offset** | **int**|  | [optional]
 **user_search_criteria_input_dto_number_of_records** | **int**|  | [optional]
 **user_search_criteria_input_dto_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UserOutputDto[]**](../Model/UserOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSearch_0**
> \Swagger\Client\Model\UserOutputDto[] userSearch_0($user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field)

Search users using a search criterias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_search_criteria_input_dto_id = "user_search_criteria_input_dto_id_example"; // string | 
$user_search_criteria_input_dto_user_name = "user_search_criteria_input_dto_user_name_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_email = "user_search_criteria_input_dto_email_example"; // string | MaxLength: 100
$user_search_criteria_input_dto_virtual_operator = "user_search_criteria_input_dto_virtual_operator_example"; // string | MaxLength: 60
$user_search_criteria_input_dto_company_id = "user_search_criteria_input_dto_company_id_example"; // string | 
$user_search_criteria_input_dto_offset = 56; // int | 
$user_search_criteria_input_dto_number_of_records = 56; // int | 
$user_search_criteria_input_dto_sort_field = "user_search_criteria_input_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->userSearch_0($user_search_criteria_input_dto_id, $user_search_criteria_input_dto_user_name, $user_search_criteria_input_dto_email, $user_search_criteria_input_dto_virtual_operator, $user_search_criteria_input_dto_company_id, $user_search_criteria_input_dto_offset, $user_search_criteria_input_dto_number_of_records, $user_search_criteria_input_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSearch_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_search_criteria_input_dto_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_user_name** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_email** | **string**| MaxLength: 100 | [optional]
 **user_search_criteria_input_dto_virtual_operator** | **string**| MaxLength: 60 | [optional]
 **user_search_criteria_input_dto_company_id** | [**string**](../Model/.md)|  | [optional]
 **user_search_criteria_input_dto_offset** | **int**|  | [optional]
 **user_search_criteria_input_dto_number_of_records** | **int**|  | [optional]
 **user_search_criteria_input_dto_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UserOutputDto[]**](../Model/UserOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSendUserActivationToken**
> string userSendUserActivationToken($user_id)

Send user activation token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->userSendUserActivationToken($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSendUserActivationToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdate**
> string userUpdate($user_id, $user)

Update user info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 
$user = new \Swagger\Client\Model\UserUpdateInputDto(); // \Swagger\Client\Model\UserUpdateInputDto | 

try {
    $result = $apiInstance->userUpdate($user_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |
 **user** | [**\Swagger\Client\Model\UserUpdateInputDto**](../Model/UserUpdateInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdateRoles**
> string userUpdateRoles($user_id, $roles)

update a user roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 
$roles = new \Swagger\Client\Model\UserRolesUpdateInputDto(); // \Swagger\Client\Model\UserRolesUpdateInputDto | 

try {
    $result = $apiInstance->userUpdateRoles($user_id, $roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdateRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |
 **roles** | [**\Swagger\Client\Model\UserRolesUpdateInputDto**](../Model/UserRolesUpdateInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

