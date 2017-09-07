# Swagger\Client\CustomerApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCount**](CustomerApi.md#customerCount) | **GET** /api/{virtualOperator}/companies/{companyId}/customers/count | Gets company&#39;s Customers results count.
[**customerCreate**](CustomerApi.md#customerCreate) | **POST** /api/{virtualOperator}/companies/{companyId}/customers | Creates a Customer for a Company.
[**customerDetails**](CustomerApi.md#customerDetails) | **GET** /api/{virtualOperator}/companies/{companyId}/customers/{id} | Gets the selected Company&#39;s Customer details.
[**customerRemove**](CustomerApi.md#customerRemove) | **DELETE** /api/{virtualOperator}/companies/{companyId}/customers/{customerId} | Removes a Customer from a Company.
[**customerSearch**](CustomerApi.md#customerSearch) | **GET** /api/{virtualOperator}/companies/{companyId}/customers | Gets selected company&#39;s Customer.  Default NumberOfRecords&#x3D;25
[**customerUpdate**](CustomerApi.md#customerUpdate) | **PUT** /api/{virtualOperator}/companies/{companyId}/customers/{id} | Updates a Company&#39;s Customer


# **customerCount**
> object customerCount($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Gets company's Customers results count.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_owner_company_id = "search_criteria_dto_owner_company_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_vat_number = "search_criteria_dto_vat_number_example"; // string | 
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | 
$search_criteria_dto_identification_document_number = "search_criteria_dto_identification_document_number_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->customerCount($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_owner_company_id** | **string**|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_vat_number** | **string**|  | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**|  | [optional]
 **search_criteria_dto_identification_document_number** | **string**|  | [optional]
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

# **customerCreate**
> object customerCreate($virtual_operator, $company_id, $customer_dto)

Creates a Customer for a Company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$customer_dto = new \Swagger\Client\Model\CustomerDTO(); // \Swagger\Client\Model\CustomerDTO | 

try {
    $result = $api_instance->customerCreate($virtual_operator, $company_id, $customer_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **customer_dto** | [**\Swagger\Client\Model\CustomerDTO**](../Model/CustomerDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerDetails**
> object customerDetails($virtual_operator, $company_id, $id)

Gets the selected Company's Customer details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->customerDetails($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerRemove**
> object customerRemove($virtual_operator, $company_id, $customer_id)

Removes a Customer from a Company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->customerRemove($virtual_operator, $company_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **customer_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSearch**
> object customerSearch($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Gets selected company's Customer.  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_owner_company_id = "search_criteria_dto_owner_company_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_vat_number = "search_criteria_dto_vat_number_example"; // string | 
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | 
$search_criteria_dto_identification_document_number = "search_criteria_dto_identification_document_number_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->customerSearch($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_owner_company_id** | **string**|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_vat_number** | **string**|  | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**|  | [optional]
 **search_criteria_dto_identification_document_number** | **string**|  | [optional]
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

# **customerUpdate**
> object customerUpdate($virtual_operator, $company_id, $id, $customer_dto)

Updates a Company's Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 
$customer_dto = new \Swagger\Client\Model\CustomerDTO(); // \Swagger\Client\Model\CustomerDTO | 

try {
    $result = $api_instance->customerUpdate($virtual_operator, $company_id, $id, $customer_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **id** | **string**|  |
 **customer_dto** | [**\Swagger\Client\Model\CustomerDTO**](../Model/CustomerDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

