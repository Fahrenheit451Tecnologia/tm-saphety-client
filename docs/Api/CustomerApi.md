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
> int customerCount($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Gets company's Customers results count.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_owner_company_id = "search_criteria_dto_owner_company_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_vat_number = "search_criteria_dto_vat_number_example"; // string | MaxLength: 50
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | MaxLength: 450
$search_criteria_dto_identification_document_number = "search_criteria_dto_identification_document_number_example"; // string | MaxLength: 50
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->customerCount($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_owner_company_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_vat_number** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**| MaxLength: 450 | [optional]
 **search_criteria_dto_identification_document_number** | **string**| MaxLength: 50 | [optional]
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

# **customerCreate**
> object customerCreate($virtual_operator, $company_id, $customer_dto)

Creates a Customer for a Company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$customer_dto = new \Swagger\Client\Model\CustomerDTO(); // \Swagger\Client\Model\CustomerDTO | 

try {
    $result = $apiInstance->customerCreate($virtual_operator, $company_id, $customer_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
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
> \Swagger\Client\Model\CustomerDTO customerDetails($virtual_operator, $company_id, $id)

Gets the selected Company's Customer details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->customerDetails($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerDTO**](../Model/CustomerDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerRemove**
> object customerRemove($virtual_operator, $company_id, $customer_id)

Removes a Customer from a Company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$customer_id = "customer_id_example"; // string | 

try {
    $result = $apiInstance->customerRemove($virtual_operator, $company_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **customer_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSearch**
> \Swagger\Client\Model\CustomerSummaryDTO[] customerSearch($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Gets selected company's Customer.  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_owner_company_id = "search_criteria_dto_owner_company_id_example"; // string | 
$search_criteria_dto_country_code = "search_criteria_dto_country_code_example"; // string | 
$search_criteria_dto_vat_number = "search_criteria_dto_vat_number_example"; // string | MaxLength: 50
$search_criteria_dto_code = "search_criteria_dto_code_example"; // string | 
$search_criteria_dto_name = "search_criteria_dto_name_example"; // string | MaxLength: 450
$search_criteria_dto_identification_document_number = "search_criteria_dto_identification_document_number_example"; // string | MaxLength: 50
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->customerSearch($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_country_code, $search_criteria_dto_vat_number, $search_criteria_dto_code, $search_criteria_dto_name, $search_criteria_dto_identification_document_number, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **search_criteria_dto_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_owner_company_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_dto_country_code** | **string**|  | [optional]
 **search_criteria_dto_vat_number** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_code** | **string**|  | [optional]
 **search_criteria_dto_name** | **string**| MaxLength: 450 | [optional]
 **search_criteria_dto_identification_document_number** | **string**| MaxLength: 50 | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerSummaryDTO[]**](../Model/CustomerSummaryDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpdate**
> object customerUpdate($virtual_operator, $company_id, $id, $customer_dto)

Updates a Company's Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 
$customer_dto = new \Swagger\Client\Model\CustomerDTO(); // \Swagger\Client\Model\CustomerDTO | 

try {
    $result = $apiInstance->customerUpdate($virtual_operator, $company_id, $id, $customer_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **customer_dto** | [**\Swagger\Client\Model\CustomerDTO**](../Model/CustomerDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

