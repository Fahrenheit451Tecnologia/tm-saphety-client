# Swagger\Client\IssuerApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**issuerCount**](IssuerApi.md#issuerCount) | **GET** /api/{virtualOperator}/companies/{companyId}/issuers/count | Gets company&#39;s Issuers results count.
[**issuerCreate**](IssuerApi.md#issuerCreate) | **POST** /api/{virtualOperator}/companies/{companyId}/issuers | Creates a Issuers for a Company.
[**issuerDetails**](IssuerApi.md#issuerDetails) | **GET** /api/{virtualOperator}/companies/{companyId}/issuers/{id} | Gets the selected Company&#39;s Issuers details.
[**issuerRemove**](IssuerApi.md#issuerRemove) | **DELETE** /api/{virtualOperator}/companies/{companyId}/issuers/{issuerId} | Removes a Issuer from a Company.
[**issuerSearch**](IssuerApi.md#issuerSearch) | **GET** /api/{virtualOperator}/companies/{companyId}/issuers | Gets selected company&#39;s Issuers.  Default NumberOfRecords&#x3D;25
[**issuerUpdate**](IssuerApi.md#issuerUpdate) | **PUT** /api/{virtualOperator}/companies/{companyId}/issuers/{id} | Updates a Company&#39;s Customer


# **issuerCount**
> int issuerCount($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Gets company's Issuers results count.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | Issuer Id
$search_criteria_dto_owner_company_id = "search_criteria_dto_owner_company_id_example"; // string | OwnerCompanyId
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->issuerCount($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->issuerCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | [**string**](../Model/.md)|  |
 **search_criteria_dto_id** | [**string**](../Model/.md)| Issuer Id | [optional]
 **search_criteria_dto_owner_company_id** | [**string**](../Model/.md)| OwnerCompanyId | [optional]
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

# **issuerCreate**
> object issuerCreate($virtual_operator, $company_id, $issuer_dto)

Creates a Issuers for a Company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$issuer_dto = new \Swagger\Client\Model\IssuerDetailInputDto(); // \Swagger\Client\Model\IssuerDetailInputDto | 

try {
    $result = $apiInstance->issuerCreate($virtual_operator, $company_id, $issuer_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->issuerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | [**string**](../Model/.md)|  |
 **issuer_dto** | [**\Swagger\Client\Model\IssuerDetailInputDto**](../Model/IssuerDetailInputDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issuerDetails**
> \Swagger\Client\Model\IssuerDetailOutputDto issuerDetails($virtual_operator, $company_id, $id)

Gets the selected Company's Issuers details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->issuerDetails($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->issuerDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\IssuerDetailOutputDto**](../Model/IssuerDetailOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issuerRemove**
> object issuerRemove($virtual_operator, $company_id, $issuer_id)

Removes a Issuer from a Company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$issuer_id = "issuer_id_example"; // string | 

try {
    $result = $apiInstance->issuerRemove($virtual_operator, $company_id, $issuer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->issuerRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | [**string**](../Model/.md)|  |
 **issuer_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issuerSearch**
> \Swagger\Client\Model\IssuerOutputDto[] issuerSearch($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Gets selected company's Issuers.  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | Issuer Id
$search_criteria_dto_owner_company_id = "search_criteria_dto_owner_company_id_example"; // string | OwnerCompanyId
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $apiInstance->issuerSearch($virtual_operator, $company_id, $search_criteria_dto_id, $search_criteria_dto_owner_company_id, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->issuerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | [**string**](../Model/.md)|  |
 **search_criteria_dto_id** | [**string**](../Model/.md)| Issuer Id | [optional]
 **search_criteria_dto_owner_company_id** | [**string**](../Model/.md)| OwnerCompanyId | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\IssuerOutputDto[]**](../Model/IssuerOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issuerUpdate**
> object issuerUpdate($virtual_operator, $company_id, $id, $issuer_dto)

Updates a Company's Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 
$issuer_dto = new \Swagger\Client\Model\IssuerDetailInputDto(); // \Swagger\Client\Model\IssuerDetailInputDto | 

try {
    $result = $apiInstance->issuerUpdate($virtual_operator, $company_id, $id, $issuer_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->issuerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **issuer_dto** | [**\Swagger\Client\Model\IssuerDetailInputDto**](../Model/IssuerDetailInputDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

