# Swagger\Client\UserApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCount**](UserApi.md#userCount) | **GET** /api/{virtualOperator}/users/count | Counts the number of results given for a specific search criteria
[**userCount_0**](UserApi.md#userCount_0) | **GET** /api/users/count | Counts the number of results given for a specific search criteria
[**userCreate**](UserApi.md#userCreate) | **POST** /api/users | Creates or Updates a user.
[**userDetails**](UserApi.md#userDetails) | **GET** /api/{virtualOperator}/users/{id} | Get a user details.
[**userDetails_0**](UserApi.md#userDetails_0) | **GET** /api/users/{id} | Get a user details.
[**userRemove**](UserApi.md#userRemove) | **DELETE** /api/users/{userId} | Removes a user from the system.
[**userRoles**](UserApi.md#userRoles) | **GET** /api/{virtualOperator}/users/{userId}/roles | Get a user details.
[**userRoles_0**](UserApi.md#userRoles_0) | **GET** /api/users/{userId}/roles | Get a user details.
[**userSearch**](UserApi.md#userSearch) | **GET** /api/{virtualOperator}/users | Search users using a search criterias  Default NumberOfRecords is 25
[**userSearch_0**](UserApi.md#userSearch_0) | **GET** /api/users | Search users using a search criterias  Default NumberOfRecords is 25
[**userUpdate**](UserApi.md#userUpdate) | **PUT** /api/users/{userId} | Update user info
[**userUpdateRoles**](UserApi.md#userUpdateRoles) | **PUT** /api/users/{userId}/roles | Get a user details.


# **userCount**
> object userCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts the number of results given for a specific search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_user_name = "search_criteria_dto_user_name_example"; // string | 
$search_criteria_dto_email = "search_criteria_dto_email_example"; // string | 
$search_criteria_dto_virtual_operator = "search_criteria_dto_virtual_operator_example"; // string | 
$search_criteria_dto_company_id = "search_criteria_dto_company_id_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->userCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_user_name** | **string**|  | [optional]
 **search_criteria_dto_email** | **string**|  | [optional]
 **search_criteria_dto_virtual_operator** | **string**|  | [optional]
 **search_criteria_dto_company_id** | **string**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCount_0**
> object userCount_0($search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts the number of results given for a specific search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_user_name = "search_criteria_dto_user_name_example"; // string | 
$search_criteria_dto_email = "search_criteria_dto_email_example"; // string | 
$search_criteria_dto_virtual_operator = "search_criteria_dto_virtual_operator_example"; // string | 
$search_criteria_dto_company_id = "search_criteria_dto_company_id_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->userCount_0($search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCount_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_user_name** | **string**|  | [optional]
 **search_criteria_dto_email** | **string**|  | [optional]
 **search_criteria_dto_virtual_operator** | **string**|  | [optional]
 **search_criteria_dto_company_id** | **string**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCreate**
> string userCreate($user)

Creates or Updates a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$user = new \Swagger\Client\Model\UserInputDto(); // \Swagger\Client\Model\UserInputDto | 

try {
    $result = $api_instance->userCreate($user);
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
> object userDetails($id, $virtual_operator)

Get a user details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $api_instance->userDetails($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **virtual_operator** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDetails_0**
> object userDetails_0($id)

Get a user details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 

try {
    $result = $api_instance->userDetails_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDetails_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRemove**
> object userRemove($user_id)

Removes a user from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->userRemove($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRemove: ', $e->getMessage(), PHP_EOL;
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

# **userRoles**
> object userRoles($user_id, $virtual_operator)

Get a user details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $api_instance->userRoles($user_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **virtual_operator** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRoles_0**
> object userRoles_0($user_id)

Get a user details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->userRoles_0($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRoles_0: ', $e->getMessage(), PHP_EOL;
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

# **userSearch**
> object userSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search users using a search criterias  Default NumberOfRecords is 25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | Virtual operato alias
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_user_name = "search_criteria_dto_user_name_example"; // string | 
$search_criteria_dto_email = "search_criteria_dto_email_example"; // string | 
$search_criteria_dto_virtual_operator = "search_criteria_dto_virtual_operator_example"; // string | 
$search_criteria_dto_company_id = "search_criteria_dto_company_id_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->userSearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| Virtual operato alias |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_user_name** | **string**|  | [optional]
 **search_criteria_dto_email** | **string**|  | [optional]
 **search_criteria_dto_virtual_operator** | **string**|  | [optional]
 **search_criteria_dto_company_id** | **string**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSearch_0**
> object userSearch_0($search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search users using a search criterias  Default NumberOfRecords is 25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_user_name = "search_criteria_dto_user_name_example"; // string | 
$search_criteria_dto_email = "search_criteria_dto_email_example"; // string | 
$search_criteria_dto_virtual_operator = "search_criteria_dto_virtual_operator_example"; // string | 
$search_criteria_dto_company_id = "search_criteria_dto_company_id_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->userSearch_0($search_criteria_dto_id, $search_criteria_dto_user_name, $search_criteria_dto_email, $search_criteria_dto_virtual_operator, $search_criteria_dto_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSearch_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_user_name** | **string**|  | [optional]
 **search_criteria_dto_email** | **string**|  | [optional]
 **search_criteria_dto_virtual_operator** | **string**|  | [optional]
 **search_criteria_dto_company_id** | **string**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdate**
> object userUpdate($user_id, $user)

Update user info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | 
$user = new \Swagger\Client\Model\UserUpdateDTO(); // \Swagger\Client\Model\UserUpdateDTO | 

try {
    $result = $api_instance->userUpdate($user_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **user** | [**\Swagger\Client\Model\UserUpdateDTO**](../Model/UserUpdateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdateRoles**
> object userUpdateRoles($user_id, $roles)

Get a user details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | 
$roles = new \Swagger\Client\Model\UserRolesSummaryDTO(); // \Swagger\Client\Model\UserRolesSummaryDTO | 

try {
    $result = $api_instance->userUpdateRoles($user_id, $roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdateRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **roles** | [**\Swagger\Client\Model\UserRolesSummaryDTO**](../Model/UserRolesSummaryDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

