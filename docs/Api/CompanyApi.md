# Swagger\Client\CompanyApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCount**](CompanyApi.md#companyCount) | **GET** /api/{virtualOperator}/companies/count | Counts the number of results that match the search criteria
[**companyCreate**](CompanyApi.md#companyCreate) | **POST** /api/{virtualOperator}/companies | Create a new company
[**companyDelete**](CompanyApi.md#companyDelete) | **DELETE** /api/{virtualOperator}/companies/{companyId} | Deletes a Company from the system
[**companyDetails**](CompanyApi.md#companyDetails) | **GET** /api/{virtualOperator}/companies/{companyId} | Gets the detail of a company
[**companySearch**](CompanyApi.md#companySearch) | **GET** /api/{virtualOperator}/companies | Search companies using search criterias  Default NumberOfRecords&#x3D;25
[**companyUpdate**](CompanyApi.md#companyUpdate) | **PUT** /api/{virtualOperator}/companies | Updates a company


# **companyCount**
> object companyCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts the number of results that match the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CompanyApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_vat_number = "search_criteria_dto_vat_number_example"; // string | 
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | 
$search_criteria_dto_inlcude_medias = true; // bool | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->companyCount($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_vat_number** | **string**|  | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**|  | [optional]
 **search_criteria_dto_inlcude_medias** | **bool**|  | [optional]
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

# **companyCreate**
> \Swagger\Client\Model\ResultMessageGuid companyCreate($virtual_operator, $company_dto)

Create a new company

Add new issuer company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CompanyApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_dto = new \Swagger\Client\Model\CompanyDTO(); // \Swagger\Client\Model\CompanyDTO | Company Model to create company

try {
    $result = $api_instance->companyCreate($virtual_operator, $company_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_dto** | [**\Swagger\Client\Model\CompanyDTO**](../Model/CompanyDTO.md)| Company Model to create company |

### Return type

[**\Swagger\Client\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDelete**
> object companyDelete($virtual_operator, $company_id)

Deletes a Company from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CompanyApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->companyDelete($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDetails**
> object companyDetails($virtual_operator, $company_id)

Gets the detail of a company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CompanyApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->companyDetails($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySearch**
> object companySearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Search companies using search criterias  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CompanyApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_vat_number = "search_criteria_dto_vat_number_example"; // string | 
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | 
$search_criteria_dto_inlcude_medias = true; // bool | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->companySearch($virtual_operator, $search_criteria_dto_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_inlcude_medias, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_vat_number** | **string**|  | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**|  | [optional]
 **search_criteria_dto_inlcude_medias** | **bool**|  | [optional]
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

# **companyUpdate**
> \Swagger\Client\Model\ResultMessageGuid companyUpdate($virtual_operator, $company_dto)

Updates a company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CompanyApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_dto = new \Swagger\Client\Model\CompanyDTO(); // \Swagger\Client\Model\CompanyDTO | 

try {
    $result = $api_instance->companyUpdate($virtual_operator, $company_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_dto** | [**\Swagger\Client\Model\CompanyDTO**](../Model/CompanyDTO.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

