# Swagger\Client\TemplateApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateActivate**](TemplateApi.md#templateActivate) | **PUT** /api/{virtualOperator}/companies/{companyId}/templates/{id}/activate | Activates a template
[**templateCreate**](TemplateApi.md#templateCreate) | **POST** /api/{virtualOperator}/companies/{companyId}/templates/create | Creates a new Template.
[**templateGetAllTemplates**](TemplateApi.md#templateGetAllTemplates) | **POST** /api/{virtualOperator}/companies/{companyId}/templates | Get all templates for company
[**templateGetTemplate**](TemplateApi.md#templateGetTemplate) | **GET** /api/{virtualOperator}/companies/{companyId}/templates/{id} | Return the template with specified id
[**templateInactivate**](TemplateApi.md#templateInactivate) | **PUT** /api/{virtualOperator}/companies/{companyId}/templates/{id}/inactivate | Inactivates a template
[**templateTestTemplate**](TemplateApi.md#templateTestTemplate) | **POST** /api/templates/test | Tests document templates


# **templateActivate**
> bool templateActivate($virtual_operator, $company_id, $id)

Activates a template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->templateActivate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateActivate: ', $e->getMessage(), PHP_EOL;
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

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateCreate**
> string templateCreate($virtual_operator, $company_id, $template_dto)

Creates a new Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$template_dto = new \Swagger\Client\Model\TemplateDto(); // \Swagger\Client\Model\TemplateDto | 

try {
    $result = $apiInstance->templateCreate($virtual_operator, $company_id, $template_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **template_dto** | [**\Swagger\Client\Model\TemplateDto**](../Model/TemplateDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateGetAllTemplates**
> templateGetAllTemplates($virtual_operator, $company_id, $search_criteria)

Get all templates for company

Get a list of all templates for the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$search_criteria = new \Swagger\Client\Model\SearchTemplateCriteria(); // \Swagger\Client\Model\SearchTemplateCriteria | 

try {
    $apiInstance->templateGetAllTemplates($virtual_operator, $company_id, $search_criteria);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateGetAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **search_criteria** | [**\Swagger\Client\Model\SearchTemplateCriteria**](../Model/SearchTemplateCriteria.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateGetTemplate**
> \Swagger\Client\Model\TemplateDto[] templateGetTemplate($virtual_operator, $company_id, $id)

Return the template with specified id

The user must have a membership on the company wich is the owner of template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->templateGetTemplate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateGetTemplate: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\TemplateDto[]**](../Model/TemplateDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateInactivate**
> bool templateInactivate($virtual_operator, $company_id, $id)

Inactivates a template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->templateInactivate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateInactivate: ', $e->getMessage(), PHP_EOL;
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

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTestTemplate**
> \Swagger\Client\Model\OutboundDocumentFile[] templateTestTemplate($dto)

Tests document templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dto = new \Swagger\Client\Model\TemplateTestDto(); // \Swagger\Client\Model\TemplateTestDto | 

try {
    $result = $apiInstance->templateTestTemplate($dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateTestTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\Swagger\Client\Model\TemplateTestDto**](../Model/TemplateTestDto.md)|  |

### Return type

[**\Swagger\Client\Model\OutboundDocumentFile[]**](../Model/OutboundDocumentFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

