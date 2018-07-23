# Swagger\Client\TechnologicalProviderApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**technologicalProviderCount**](TechnologicalProviderApi.md#technologicalProviderCount) | **GET** /api/technologicalproviders/count | Counts the number of results given for a specific search criteria
[**technologicalProviderCreate**](TechnologicalProviderApi.md#technologicalProviderCreate) | **POST** /api/technologicalproviders | creates a Technological Provider
[**technologicalProviderDelete**](TechnologicalProviderApi.md#technologicalProviderDelete) | **DELETE** /api/technologicalproviders/{id} | deletes a Technological Provider from the system.
[**technologicalProviderDetails**](TechnologicalProviderApi.md#technologicalProviderDetails) | **GET** /api/technologicalproviders/{id} | Gets the details of a Technological Provider
[**technologicalProviderSearch**](TechnologicalProviderApi.md#technologicalProviderSearch) | **GET** /api/technologicalproviders | Search Technological Providers using a search criterias
[**technologicalProviderUpdate**](TechnologicalProviderApi.md#technologicalProviderUpdate) | **PUT** /api/technologicalproviders/{id} | Updates a Technological Provider


# **technologicalProviderCount**
> int technologicalProviderCount($technological_provider_search_criteria_input_dto_id, $technological_provider_search_criteria_input_dto_name, $technological_provider_search_criteria_input_dto_nit)

Counts the number of results given for a specific search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TechnologicalProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$technological_provider_search_criteria_input_dto_id = "technological_provider_search_criteria_input_dto_id_example"; // string | 
$technological_provider_search_criteria_input_dto_name = "technological_provider_search_criteria_input_dto_name_example"; // string | 
$technological_provider_search_criteria_input_dto_nit = "technological_provider_search_criteria_input_dto_nit_example"; // string | 

try {
    $result = $apiInstance->technologicalProviderCount($technological_provider_search_criteria_input_dto_id, $technological_provider_search_criteria_input_dto_name, $technological_provider_search_criteria_input_dto_nit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologicalProviderApi->technologicalProviderCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **technological_provider_search_criteria_input_dto_id** | [**string**](../Model/.md)|  | [optional]
 **technological_provider_search_criteria_input_dto_name** | **string**|  | [optional]
 **technological_provider_search_criteria_input_dto_nit** | **string**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **technologicalProviderCreate**
> string technologicalProviderCreate($technological_provider)

creates a Technological Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TechnologicalProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$technological_provider = new \Swagger\Client\Model\TechnologicalProviderInputDto(); // \Swagger\Client\Model\TechnologicalProviderInputDto | 

try {
    $result = $apiInstance->technologicalProviderCreate($technological_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologicalProviderApi->technologicalProviderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **technological_provider** | [**\Swagger\Client\Model\TechnologicalProviderInputDto**](../Model/TechnologicalProviderInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **technologicalProviderDelete**
> string technologicalProviderDelete($id)

deletes a Technological Provider from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TechnologicalProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->technologicalProviderDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologicalProviderApi->technologicalProviderDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **technologicalProviderDetails**
> \Swagger\Client\Model\TechnologicalProviderOutputDto technologicalProviderDetails($id)

Gets the details of a Technological Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TechnologicalProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->technologicalProviderDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologicalProviderApi->technologicalProviderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\TechnologicalProviderOutputDto**](../Model/TechnologicalProviderOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **technologicalProviderSearch**
> \Swagger\Client\Model\TechnologicalProviderOutputDto[] technologicalProviderSearch($technological_provider_search_criteria_input_dto_id, $technological_provider_search_criteria_input_dto_name, $technological_provider_search_criteria_input_dto_nit)

Search Technological Providers using a search criterias

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TechnologicalProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$technological_provider_search_criteria_input_dto_id = "technological_provider_search_criteria_input_dto_id_example"; // string | 
$technological_provider_search_criteria_input_dto_name = "technological_provider_search_criteria_input_dto_name_example"; // string | 
$technological_provider_search_criteria_input_dto_nit = "technological_provider_search_criteria_input_dto_nit_example"; // string | 

try {
    $result = $apiInstance->technologicalProviderSearch($technological_provider_search_criteria_input_dto_id, $technological_provider_search_criteria_input_dto_name, $technological_provider_search_criteria_input_dto_nit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologicalProviderApi->technologicalProviderSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **technological_provider_search_criteria_input_dto_id** | [**string**](../Model/.md)|  | [optional]
 **technological_provider_search_criteria_input_dto_name** | **string**|  | [optional]
 **technological_provider_search_criteria_input_dto_nit** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TechnologicalProviderOutputDto[]**](../Model/TechnologicalProviderOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **technologicalProviderUpdate**
> string technologicalProviderUpdate($id, $technological_provider)

Updates a Technological Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TechnologicalProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$technological_provider = new \Swagger\Client\Model\TechnologicalProviderUpdateInputDto(); // \Swagger\Client\Model\TechnologicalProviderUpdateInputDto | 

try {
    $result = $apiInstance->technologicalProviderUpdate($id, $technological_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TechnologicalProviderApi->technologicalProviderUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **technological_provider** | [**\Swagger\Client\Model\TechnologicalProviderUpdateInputDto**](../Model/TechnologicalProviderUpdateInputDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

