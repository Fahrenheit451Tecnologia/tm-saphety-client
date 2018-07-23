# Swagger\Client\CompanyApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyAddCertificate**](CompanyApi.md#companyAddCertificate) | **POST** /api/{virtualOperator}/companies/{companyId}/certificate | Adds a new company certificate
[**companyCount**](CompanyApi.md#companyCount) | **GET** /api/{virtualOperator}/companies/count | Counts the number of results that match the search criteria
[**companyCreate**](CompanyApi.md#companyCreate) | **POST** /api/{virtualOperator}/companies | Create a new company
[**companyDelete**](CompanyApi.md#companyDelete) | **DELETE** /api/{virtualOperator}/companies/{companyId} | Deletes a Company from the system
[**companyDetails**](CompanyApi.md#companyDetails) | **GET** /api/{virtualOperator}/companies/{companyId} | Gets the detail of a company
[**companyGetCertificate**](CompanyApi.md#companyGetCertificate) | **GET** /api/{virtualOperator}/companies/{companyId}/certificate | Gets the company certificate
[**companyGetSettingsByKey**](CompanyApi.md#companyGetSettingsByKey) | **GET** /api/{virtualOperator}/companies/{companyId}/settings/{key} | Gets setting for a company
[**companyRemoveCertificate**](CompanyApi.md#companyRemoveCertificate) | **DELETE** /api/{virtualOperator}/companies/{companyId}/certificate | Removes the company certificate
[**companySearch**](CompanyApi.md#companySearch) | **GET** /api/{virtualOperator}/companies | Search companies using search criterias  Default NumberOfRecords&#x3D;25
[**companyUpdate**](CompanyApi.md#companyUpdate) | **PUT** /api/{virtualOperator}/companies | Updates a company
[**companyUpdateSettingsValue**](CompanyApi.md#companyUpdateSettingsValue) | **PUT** /api/{virtualOperator}/companies/{companyId}/settings | Updates setting for a company


# **companyAddCertificate**
> \Swagger\Client\Model\ResultMessageGuid companyAddCertificate($virtual_operator, $company_id, $certificate)

Adds a new company certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$certificate = new \Swagger\Client\Model\CertificateInputDto(); // \Swagger\Client\Model\CertificateInputDto | 

try {
    $result = $apiInstance->companyAddCertificate($virtual_operator, $company_id, $certificate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyAddCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **certificate** | [**\Swagger\Client\Model\CertificateInputDto**](../Model/CertificateInputDto.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCount**
> int companyCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_document_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_include_settings, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts the number of results that match the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | MaxLength: 50
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | MaxLength: 450
$search_criteria_dto_inlcude_medias = true; // bool | 
$search_criteria_dto_include_settings = true; // bool | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->companyCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_document_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_include_settings, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_document_number** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**| MaxLength: 450 | [optional]
 **search_criteria_dto_inlcude_medias** | **bool**|  | [optional]
 **search_criteria_dto_include_settings** | **bool**|  | [optional]
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

# **companyCreate**
> string companyCreate($virtual_operator, $company_dto)

Create a new company

Add new issuer company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_dto = new \Swagger\Client\Model\CompanyInputDto(); // \Swagger\Client\Model\CompanyInputDto | Company Model to create company

try {
    $result = $apiInstance->companyCreate($virtual_operator, $company_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_dto** | [**\Swagger\Client\Model\CompanyInputDto**](../Model/CompanyInputDto.md)| Company Model to create company |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDelete**
> object companyDelete($virtual_operator, $company_id)

Deletes a Company from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->companyDelete($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDetails**
> \Swagger\Client\Model\CompanyOutputDto companyDetails($virtual_operator, $company_id)

Gets the detail of a company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->companyDetails($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyOutputDto**](../Model/CompanyOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyGetCertificate**
> \Swagger\Client\Model\ResultMessageCertificateOutputDto companyGetCertificate($virtual_operator, $company_id)

Gets the company certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->companyGetCertificate($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageCertificateOutputDto**](../Model/ResultMessageCertificateOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyGetSettingsByKey**
> string companyGetSettingsByKey($company_id, $key, $virtual_operator)

Gets setting for a company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = "company_id_example"; // string | 
$key = "key_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $apiInstance->companyGetSettingsByKey($company_id, $key, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetSettingsByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | [**string**](../Model/.md)|  |
 **key** | **string**|  |
 **virtual_operator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRemoveCertificate**
> \Swagger\Client\Model\ResultMessageBoolean companyRemoveCertificate($virtual_operator, $company_id)

Removes the company certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->companyRemoveCertificate($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyRemoveCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageBoolean**](../Model/ResultMessageBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySearch**
> \Swagger\Client\Model\CompanyOutputDto[] companySearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_document_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_include_settings, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search companies using search criterias  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_document_number = "search_criteria_dto_document_number_example"; // string | MaxLength: 50
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | MaxLength: 450
$search_criteria_dto_inlcude_medias = true; // bool | 
$search_criteria_dto_include_settings = true; // bool | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->companySearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_document_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_include_settings, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_document_number** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**| MaxLength: 450 | [optional]
 **search_criteria_dto_inlcude_medias** | **bool**|  | [optional]
 **search_criteria_dto_include_settings** | **bool**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CompanyOutputDto[]**](../Model/CompanyOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyUpdate**
> object companyUpdate($virtual_operator, $company_dto)

Updates a company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_dto = new \Swagger\Client\Model\CompanyUpdateInputDto(); // \Swagger\Client\Model\CompanyUpdateInputDto | 

try {
    $result = $apiInstance->companyUpdate($virtual_operator, $company_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_dto** | [**\Swagger\Client\Model\CompanyUpdateInputDto**](../Model/CompanyUpdateInputDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyUpdateSettingsValue**
> bool companyUpdateSettingsValue($company_id, $settings_dto, $virtual_operator)

Updates setting for a company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = "company_id_example"; // string | 
$settings_dto = new \Swagger\Client\Model\CompanySettingInputDto(); // \Swagger\Client\Model\CompanySettingInputDto | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $apiInstance->companyUpdateSettingsValue($company_id, $settings_dto, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyUpdateSettingsValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | [**string**](../Model/.md)|  |
 **settings_dto** | [**\Swagger\Client\Model\CompanySettingInputDto**](../Model/CompanySettingInputDto.md)|  |
 **virtual_operator** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

