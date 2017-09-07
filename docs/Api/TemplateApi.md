# Swagger\Client\TemplateApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateActivate**](TemplateApi.md#templateActivate) | **PUT** /api/{virtualOperator}/companies/{companyId}/templates/{id}/activate | Activates a template
[**templateCreate**](TemplateApi.md#templateCreate) | **POST** /api/{virtualOperator}/companies/{companyId}/templates/create | Creates a new Template.
[**templateGetAllTemplates**](TemplateApi.md#templateGetAllTemplates) | **POST** /api/{virtualOperator}/companies/{companyId}/templates | Get all templates for company
[**templateGetTemplate**](TemplateApi.md#templateGetTemplate) | **GET** /api/{virtualOperator}/companies/{companyId}/templates/{id} | Return the template with specified id
[**templateInactivate**](TemplateApi.md#templateInactivate) | **PUT** /api/{virtualOperator}/companies/{companyId}/templates/{id}/inactivate | Inactivates a template
[**templateTestTemplate**](TemplateApi.md#templateTestTemplate) | **POST** /api/templates/test | 


# **templateActivate**
> object templateActivate($virtual_operator, $company_id, $id)

Activates a template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TemplateApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->templateActivate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateActivate: ', $e->getMessage(), PHP_EOL;
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

# **templateCreate**
> object templateCreate($virtual_operator, $company_id, $template_dto)

Creates a new Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TemplateApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$template_dto = new \Swagger\Client\Model\TemplateDTO(); // \Swagger\Client\Model\TemplateDTO | 

try {
    $result = $api_instance->templateCreate($virtual_operator, $company_id, $template_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **template_dto** | [**\Swagger\Client\Model\TemplateDTO**](../Model/TemplateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateGetAllTemplates**
> templateGetAllTemplates($virtual_operator, $company_id, $search_criteria)

Get all templates for company

Get a list of all templates for the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TemplateApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$search_criteria = new \Swagger\Client\Model\SearchTemplateCriteria(); // \Swagger\Client\Model\SearchTemplateCriteria | 

try {
    $api_instance->templateGetAllTemplates($virtual_operator, $company_id, $search_criteria);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateGetAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **company_id** | **string**|  |
 **search_criteria** | [**\Swagger\Client\Model\SearchTemplateCriteria**](../Model/SearchTemplateCriteria.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateGetTemplate**
> object templateGetTemplate($virtual_operator, $company_id, $id)

Return the template with specified id

The user must have a membership on the company wich is the owner of template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TemplateApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->templateGetTemplate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateGetTemplate: ', $e->getMessage(), PHP_EOL;
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

# **templateInactivate**
> object templateInactivate($virtual_operator, $company_id, $id)

Inactivates a template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TemplateApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->templateInactivate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateInactivate: ', $e->getMessage(), PHP_EOL;
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

# **templateTestTemplate**
> object templateTestTemplate($dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TemplateApi(new \Http\Adapter\Guzzle6\Client());
$dto = new \Swagger\Client\Model\TemplateTestDTO(); // \Swagger\Client\Model\TemplateTestDTO | 

try {
    $result = $api_instance->templateTestTemplate($dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateTestTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\Swagger\Client\Model\TemplateTestDTO**](../Model/TemplateTestDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

