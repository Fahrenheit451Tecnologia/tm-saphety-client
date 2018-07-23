# Swagger\Client\RoleApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**roleDetails**](RoleApi.md#roleDetails) | **GET** /api/roles/{roleId} | Gets a specific role
[**roleGetCompanyMembershipRoles**](RoleApi.md#roleGetCompanyMembershipRoles) | **GET** /api/roles/companyMembership | Gets the membership level roles
[**roleGetGlobalRoles**](RoleApi.md#roleGetGlobalRoles) | **GET** /api/roles/global | Gets the global level roles
[**roleGetVirtualOperatorMembershipRoles**](RoleApi.md#roleGetVirtualOperatorMembershipRoles) | **GET** /api/roles/virtualOperatorMembership | Gets the virtual operator level roles


# **roleDetails**
> \Swagger\Client\Model\RoleDto roleDetails($role_id)

Gets a specific role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = "role_id_example"; // string | 

try {
    $result = $apiInstance->roleDetails($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\RoleDto**](../Model/RoleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleGetCompanyMembershipRoles**
> \Swagger\Client\Model\RoleDto[] roleGetCompanyMembershipRoles()

Gets the membership level roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->roleGetCompanyMembershipRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleGetCompanyMembershipRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RoleDto[]**](../Model/RoleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleGetGlobalRoles**
> \Swagger\Client\Model\RoleDto[] roleGetGlobalRoles()

Gets the global level roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->roleGetGlobalRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleGetGlobalRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RoleDto[]**](../Model/RoleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleGetVirtualOperatorMembershipRoles**
> \Swagger\Client\Model\RoleDto[] roleGetVirtualOperatorMembershipRoles()

Gets the virtual operator level roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->roleGetVirtualOperatorMembershipRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleGetVirtualOperatorMembershipRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RoleDto[]**](../Model/RoleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

