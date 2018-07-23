# Swagger\Client\CompanyUserApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyUserInvite**](CompanyUserApi.md#companyUserInvite) | **POST** /api/{virtualOperator}/companies/{companyId}/invite | Invite a new user and associates it with the specified company
[**companyUserRemoveMembership**](CompanyUserApi.md#companyUserRemoveMembership) | **DELETE** /api/{virtualOperator}/companies/{companyId}/users/{userId}/membership | Removes a user from a company.


# **companyUserInvite**
> string companyUserInvite($virtual_operator, $company_id, $user_invitation_dto)

Invite a new user and associates it with the specified company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$user_invitation_dto = new \Swagger\Client\Model\UserInvitationRequestDto(); // \Swagger\Client\Model\UserInvitationRequestDto | 

try {
    $result = $apiInstance->companyUserInvite($virtual_operator, $company_id, $user_invitation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyUserApi->companyUserInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **user_invitation_dto** | [**\Swagger\Client\Model\UserInvitationRequestDto**](../Model/UserInvitationRequestDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyUserRemoveMembership**
> object companyUserRemoveMembership($user_id, $company_id, $virtual_operator)

Removes a user from a company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $apiInstance->companyUserRemoveMembership($user_id, $company_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyUserApi->companyUserRemoveMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |
 **company_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

