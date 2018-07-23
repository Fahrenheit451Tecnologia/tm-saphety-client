# Swagger\Client\EmailUserApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailUserAccept**](EmailUserApi.md#emailUserAccept) | **POST** /api/{virtualOperator}/emailuser/outbounddocuments/{id}/accept | Accepts a outboundDocument
[**emailUserAcceptEmailUserRegisterToken**](EmailUserApi.md#emailUserAcceptEmailUserRegisterToken) | **GET** /api/{virtualOperator}/emailuser/accepttoken/{token} | Accepts a previously invitation sent to a email user
[**emailUserConfirmRecoveryPassword**](EmailUserApi.md#emailUserConfirmRecoveryPassword) | **POST** /api/{virtualOperator}/emailuser/newpassword/{token} | Change an email user password
[**emailUserCountDocuments**](EmailUserApi.md#emailUserCountDocuments) | **GET** /api/{virtualOperator}/emailuser/outbounddocuments/count | 
[**emailUserGet**](EmailUserApi.md#emailUserGet) | **GET** /api/{virtualOperator}/emailuser | Gets an email user by email
[**emailUserGetDocumentWithAllDetails**](EmailUserApi.md#emailUserGetDocumentWithAllDetails) | **GET** /api/{virtualOperator}/emailuser/outbounddocuments/{id}/files | Gets a outboundDocument with all associated details
[**emailUserGetEmailUserDocumentAttachmentContent**](EmailUserApi.md#emailUserGetEmailUserDocumentAttachmentContent) | **GET** /api/{virtualOperator}/emailuser/outbounddocuments/{id}/attachment/{attachmentId} | Gets an email user outboundDocument attachment content
[**emailUserGetEmailUserDocumentAttachments**](EmailUserApi.md#emailUserGetEmailUserDocumentAttachments) | **GET** /api/{virtualOperator}/emailuser/outbounddocuments/{id}/attachments | Gets a outboundDocument attachment for an email user
[**emailUserGetEmailUserFileContent**](EmailUserApi.md#emailUserGetEmailUserFileContent) | **GET** /api/{virtualOperator}/emailuser/outbounddocuments/{id}/files/{fileId}/content | Gets a file content for an email user
[**emailUserReject**](EmailUserApi.md#emailUserReject) | **POST** /api/{virtualOperator}/emailuser/outbounddocuments/{id}/reject | Rejects a outboundDocument
[**emailUserRequestEmailUser**](EmailUserApi.md#emailUserRequestEmailUser) | **POST** /api/{virtualOperator}/emailuser/request | Gets an email user
[**emailUserRequestRecoveryPassword**](EmailUserApi.md#emailUserRequestRecoveryPassword) | **POST** /api/{virtualOperator}/emailuser/resetpassword | Resets an email user password
[**emailUserSearchCompanies**](EmailUserApi.md#emailUserSearchCompanies) | **GET** /api/{virtualOperator}/emailuser/companies | Search companies using search criterias  Default NumberOfRecords&#x3D;25
[**emailUserSearchCustomers**](EmailUserApi.md#emailUserSearchCustomers) | **GET** /api/{virtualOperator}/emailuser/companies/{companyId}/customers | Gets selected company&#39;s Customers.  Default NumberOfRecords&#x3D;25
[**emailUserSearchDocuments**](EmailUserApi.md#emailUserSearchDocuments) | **GET** /api/{virtualOperator}/emailuser/outbounddocuments | Search documents
[**emailUserUpdate**](EmailUserApi.md#emailUserUpdate) | **PUT** /api/{virtualOperator}/emailuser | Updates the email user info
[**emailUserUpdatePassword**](EmailUserApi.md#emailUserUpdatePassword) | **PUT** /api/{virtualOperator}/emailuser/password | Updates the email user info


# **emailUserAccept**
> object emailUserAccept($virtual_operator, $id)

Accepts a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 

try {
    $result = $apiInstance->emailUserAccept($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserAcceptEmailUserRegisterToken**
> \Swagger\Client\Model\ResultMessageBoolean emailUserAcceptEmailUserRegisterToken($virtual_operator, $token)

Accepts a previously invitation sent to a email user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$token = "token_example"; // string | 

try {
    $result = $apiInstance->emailUserAcceptEmailUserRegisterToken($virtual_operator, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserAcceptEmailUserRegisterToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **token** | **string**|  |

### Return type

[**\Swagger\Client\Model\ResultMessageBoolean**](../Model/ResultMessageBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserConfirmRecoveryPassword**
> bool emailUserConfirmRecoveryPassword($token, $virtual_operator, $user)

Change an email user password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$user = new \Swagger\Client\Model\EmailUserDTO(); // \Swagger\Client\Model\EmailUserDTO | 

try {
    $result = $apiInstance->emailUserConfirmRecoveryPassword($token, $virtual_operator, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserConfirmRecoveryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **virtual_operator** | **string**| MaxLength: 60 |
 **user** | [**\Swagger\Client\Model\EmailUserDTO**](../Model/EmailUserDTO.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserCountDocuments**
> int emailUserCountDocuments($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | MaxLength: 20
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | MaxLength: 50
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | 
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | 
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | 
$search_criteria_dto_include_files = true; // bool | 
$search_criteria_dto_include_attachments = true; // bool | 
$search_criteria_dto_document_types = array("search_criteria_dto_document_types_example"); // string[] | 
$search_criteria_dto_document_sub_types = array("search_criteria_dto_document_sub_types_example"); // string[] | 
$search_criteria_dto_business_status = array("search_criteria_dto_business_status_example"); // string[] | 
$search_criteria_dto_communication_status = array("search_criteria_dto_communication_status_example"); // string[] | 
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->emailUserCountDocuments($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserCountDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_document_number** | **string**| MaxLength: 20 | [optional]
 **search_criteria_dto_currency** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_include_files** | **bool**|  | [optional]
 **search_criteria_dto_include_attachments** | **bool**|  | [optional]
 **search_criteria_dto_document_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_document_sub_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_business_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_communication_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserGet**
> \Swagger\Client\Model\EmailUserSummary emailUserGet($virtual_operator)

Gets an email user by email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->emailUserGet($virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

[**\Swagger\Client\Model\EmailUserSummary**](../Model/EmailUserSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserGetDocumentWithAllDetails**
> \Swagger\Client\Model\DocumentDTO emailUserGetDocumentWithAllDetails($virtual_operator, $id, $data_get_pdf, $data_get_ubl)

Gets a outboundDocument with all associated details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 
$data_get_pdf = true; // bool | Get Pdf?
$data_get_ubl = true; // bool | Get UBL?

try {
    $result = $apiInstance->emailUserGetDocumentWithAllDetails($virtual_operator, $id, $data_get_pdf, $data_get_ubl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserGetDocumentWithAllDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | **string**|  |
 **data_get_pdf** | **bool**| Get Pdf? |
 **data_get_ubl** | **bool**| Get UBL? |

### Return type

[**\Swagger\Client\Model\DocumentDTO**](../Model/DocumentDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserGetEmailUserDocumentAttachmentContent**
> object emailUserGetEmailUserDocumentAttachmentContent($id, $attachment_id, $virtual_operator)

Gets an email user outboundDocument attachment content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $apiInstance->emailUserGetEmailUserDocumentAttachmentContent($id, $attachment_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserGetEmailUserDocumentAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **attachment_id** | **string**|  |
 **virtual_operator** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserGetEmailUserDocumentAttachments**
> \Swagger\Client\Model\DocumentAttachmentDto emailUserGetEmailUserDocumentAttachments($virtual_operator, $id)

Gets a outboundDocument attachment for an email user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 

try {
    $result = $apiInstance->emailUserGetEmailUserDocumentAttachments($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserGetEmailUserDocumentAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DocumentAttachmentDto**](../Model/DocumentAttachmentDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserGetEmailUserFileContent**
> object emailUserGetEmailUserFileContent($id, $file_id, $virtual_operator)

Gets a file content for an email user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$file_id = "file_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->emailUserGetEmailUserFileContent($id, $file_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserGetEmailUserFileContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **file_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserReject**
> object emailUserReject($virtual_operator, $id, $data)

Rejects a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 
$data = new \Swagger\Client\Model\BusinessStatusDTO(); // \Swagger\Client\Model\BusinessStatusDTO | 

try {
    $result = $apiInstance->emailUserReject($virtual_operator, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserReject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |
 **data** | [**\Swagger\Client\Model\BusinessStatusDTO**](../Model/BusinessStatusDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserRequestEmailUser**
> \Swagger\Client\Model\ResultMessageBoolean emailUserRequestEmailUser($virtual_operator, $email_user)

Gets an email user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$email_user = new \Swagger\Client\Model\EmailUserInputDto(); // \Swagger\Client\Model\EmailUserInputDto | 

try {
    $result = $apiInstance->emailUserRequestEmailUser($virtual_operator, $email_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserRequestEmailUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **email_user** | [**\Swagger\Client\Model\EmailUserInputDto**](../Model/EmailUserInputDto.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageBoolean**](../Model/ResultMessageBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserRequestRecoveryPassword**
> bool emailUserRequestRecoveryPassword($virtual_operator, $user)

Resets an email user password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$user = new \Swagger\Client\Model\EmailUserDTO(); // \Swagger\Client\Model\EmailUserDTO | 

try {
    $result = $apiInstance->emailUserRequestRecoveryPassword($virtual_operator, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserRequestRecoveryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **user** | [**\Swagger\Client\Model\EmailUserDTO**](../Model/EmailUserDTO.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserSearchCompanies**
> \Swagger\Client\Model\CompanyDTO[] emailUserSearchCompanies($virtual_operator)

Search companies using search criterias  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->emailUserSearchCompanies($virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserSearchCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

[**\Swagger\Client\Model\CompanyDTO[]**](../Model/CompanyDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserSearchCustomers**
> \Swagger\Client\Model\CustomerSummaryDTO[] emailUserSearchCustomers($virtual_operator, $company_id)

Gets selected company's Customers.  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->emailUserSearchCustomers($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserSearchCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerSummaryDTO[]**](../Model/CustomerSummaryDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserSearchDocuments**
> \Swagger\Client\Model\OutboundDocument[] emailUserSearchDocuments($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | MaxLength: 20
$search_criteria_dto_currency = "search_criteria_dto_currency_example"; // string | MaxLength: 50
$search_criteria_dto_company_ids = array("search_criteria_dto_company_ids_example"); // string[] | 
$search_criteria_dto_issuers = array("search_criteria_dto_issuers_example"); // string[] | 
$search_criteria_dto_customers = array("search_criteria_dto_customers_example"); // string[] | 
$search_criteria_dto_include_files = true; // bool | 
$search_criteria_dto_include_attachments = true; // bool | 
$search_criteria_dto_document_types = array("search_criteria_dto_document_types_example"); // string[] | 
$search_criteria_dto_document_sub_types = array("search_criteria_dto_document_sub_types_example"); // string[] | 
$search_criteria_dto_business_status = array("search_criteria_dto_business_status_example"); // string[] | 
$search_criteria_dto_communication_status = array("search_criteria_dto_communication_status_example"); // string[] | 
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_document_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->emailUserSearchDocuments($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_document_number, $search_criteria_dto_currency, $search_criteria_dto_company_ids, $search_criteria_dto_issuers, $search_criteria_dto_customers, $search_criteria_dto_include_files, $search_criteria_dto_include_attachments, $search_criteria_dto_document_types, $search_criteria_dto_document_sub_types, $search_criteria_dto_business_status, $search_criteria_dto_communication_status, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_document_date_start, $search_criteria_dto_document_date_end, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserSearchDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_document_number** | **string**| MaxLength: 20 | [optional]
 **search_criteria_dto_currency** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_company_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_issuers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_customers** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_include_files** | **bool**|  | [optional]
 **search_criteria_dto_include_attachments** | **bool**|  | [optional]
 **search_criteria_dto_document_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_document_sub_types** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_business_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_communication_status** | [**string[]**](../Model/string.md)|  | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_document_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\OutboundDocument[]**](../Model/OutboundDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserUpdate**
> string emailUserUpdate($user_id, $virtual_operator, $user)

Updates the email user info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$user = new \Swagger\Client\Model\EmailUserUpdateInputDto(); // \Swagger\Client\Model\EmailUserUpdateInputDto | 

try {
    $result = $apiInstance->emailUserUpdate($user_id, $virtual_operator, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |
 **user** | [**\Swagger\Client\Model\EmailUserUpdateInputDto**](../Model/EmailUserUpdateInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailUserUpdatePassword**
> string emailUserUpdatePassword($user_id, $virtual_operator, $account_update_password)

Updates the email user info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$account_update_password = new \Swagger\Client\Model\EmailUserAccountUpdatePasswordInputDto(); // \Swagger\Client\Model\EmailUserAccountUpdatePasswordInputDto | 

try {
    $result = $apiInstance->emailUserUpdatePassword($user_id, $virtual_operator, $account_update_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailUserApi->emailUserUpdatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |
 **account_update_password** | [**\Swagger\Client\Model\EmailUserAccountUpdatePasswordInputDto**](../Model/EmailUserAccountUpdatePasswordInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

