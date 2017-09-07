# Swagger\Client\SerieApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serieActivate**](SerieApi.md#serieActivate) | **PUT** /api/{virtualOperator}/companies/{companyId}/series/{id}/activate | Activate serie
[**serieCreate**](SerieApi.md#serieCreate) | **POST** /api/{virtualOperator}/companies/{companyId}/series | Create a new serie
[**serieDetails**](SerieApi.md#serieDetails) | **GET** /api/{virtualOperator}/companies/{companyId}/series/{id} | Get specific serie by companyId and serieId
[**serieGetAll**](SerieApi.md#serieGetAll) | **GET** /api/{virtualOperator}/companies/{companyId}/series | Get a list of all series for the especified companyId
[**serieGetAllForCreditNote**](SerieApi.md#serieGetAllForCreditNote) | **GET** /api/{virtualOperator}/companies/{companyId}/series/creditnote | Get a list of all credit note series for the especified companyId
[**serieGetAllForDebitNote**](SerieApi.md#serieGetAllForDebitNote) | **GET** /api/{virtualOperator}/companies/{companyId}/series/debitnote | Get a list of all debit note series for the especified companyId
[**serieGetAllForSalesInvoice**](SerieApi.md#serieGetAllForSalesInvoice) | **GET** /api/{virtualOperator}/companies/{companyId}/series/salesinvoice | Get a list of all sales invoice series for the especified companyId
[**serieInactivate**](SerieApi.md#serieInactivate) | **PUT** /api/{virtualOperator}/companies/{companyId}/series/{id}/inactivate | Disable serie
[**serieUpdate**](SerieApi.md#serieUpdate) | **PUT** /api/{virtualOperator}/companies/{companyId}/series/{id} | Update serie


# **serieActivate**
> object serieActivate($virtual_operator, $company_id, $id)

Activate serie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->serieActivate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieActivate: ', $e->getMessage(), PHP_EOL;
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

# **serieCreate**
> object serieCreate($virtual_operator, $company_id, $serie_dto)

Create a new serie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$serie_dto = new \Swagger\Client\Model\SerieDTO(); // \Swagger\Client\Model\SerieDTO | 

try {
    $result = $api_instance->serieCreate($virtual_operator, $company_id, $serie_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **serie_dto** | [**\Swagger\Client\Model\SerieDTO**](../Model/SerieDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serieDetails**
> object serieDetails($virtual_operator, $company_id, $id)

Get specific serie by companyId and serieId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->serieDetails($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieDetails: ', $e->getMessage(), PHP_EOL;
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

# **serieGetAll**
> object serieGetAll($virtual_operator, $company_id)

Get a list of all series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->serieGetAll($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieGetAll: ', $e->getMessage(), PHP_EOL;
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

# **serieGetAllForCreditNote**
> object serieGetAllForCreditNote($virtual_operator, $company_id)

Get a list of all credit note series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->serieGetAllForCreditNote($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieGetAllForCreditNote: ', $e->getMessage(), PHP_EOL;
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

# **serieGetAllForDebitNote**
> object serieGetAllForDebitNote($virtual_operator, $company_id)

Get a list of all debit note series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->serieGetAllForDebitNote($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieGetAllForDebitNote: ', $e->getMessage(), PHP_EOL;
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

# **serieGetAllForSalesInvoice**
> object serieGetAllForSalesInvoice($virtual_operator, $company_id)

Get a list of all sales invoice series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->serieGetAllForSalesInvoice($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieGetAllForSalesInvoice: ', $e->getMessage(), PHP_EOL;
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

# **serieInactivate**
> object serieInactivate($virtual_operator, $company_id, $id)

Disable serie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->serieInactivate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieInactivate: ', $e->getMessage(), PHP_EOL;
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

# **serieUpdate**
> object serieUpdate($virtual_operator, $id, $serie_dto, $company_id)

Update serie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SerieApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | 
$serie_dto = new \Swagger\Client\Model\SerieDTO(); // \Swagger\Client\Model\SerieDTO | 
$company_id = "company_id_example"; // string | 

try {
    $result = $api_instance->serieUpdate($virtual_operator, $id, $serie_dto, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**|  |
 **serie_dto** | [**\Swagger\Client\Model\SerieDTO**](../Model/SerieDTO.md)|  |
 **company_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

