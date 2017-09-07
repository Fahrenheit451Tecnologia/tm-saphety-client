# Swagger\Client\OutboundDocumentDraftApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**outboundDocumentDraftDelete**](OutboundDocumentDraftApi.md#outboundDocumentDraftDelete) | **DELETE** /api/{virtualOperator}/outbounddocumentdrafts/{id} | Get a specific outboundDocument draft
[**outboundDocumentDraftGetAll**](OutboundDocumentDraftApi.md#outboundDocumentDraftGetAll) | **GET** /api/{virtualOperator}/outbounddocumentdrafts | Get the outboundDocument drafts for a given company
[**outboundDocumentDraftLoad**](OutboundDocumentDraftApi.md#outboundDocumentDraftLoad) | **GET** /api/{virtualOperator}/outbounddocumentdrafts/{id} | Get a specific outboundDocument draft
[**outboundDocumentDraftSave**](OutboundDocumentDraftApi.md#outboundDocumentDraftSave) | **POST** /api/{virtualOperator}/outbounddocumentdrafts | Get a specific outboundDocument draft
[**outboundDocumentDraftUpdate**](OutboundDocumentDraftApi.md#outboundDocumentDraftUpdate) | **PUT** /api/{virtualOperator}/outbounddocumentdrafts/{id} | Get a specific outboundDocument draft


# **outboundDocumentDraftDelete**
> object outboundDocumentDraftDelete($virtual_operator, $id)

Get a specific outboundDocument draft

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentDraftApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentDraftDelete($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentDraftApi->outboundDocumentDraftDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentDraftGetAll**
> object outboundDocumentDraftGetAll($virtual_operator)

Get the outboundDocument drafts for a given company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentDraftApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $api_instance->outboundDocumentDraftGetAll($virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentDraftApi->outboundDocumentDraftGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentDraftLoad**
> object outboundDocumentDraftLoad($virtual_operator, $id)

Get a specific outboundDocument draft

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentDraftApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $api_instance->outboundDocumentDraftLoad($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentDraftApi->outboundDocumentDraftLoad: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentDraftSave**
> object outboundDocumentDraftSave($virtual_operator, $draft)

Get a specific outboundDocument draft

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentDraftApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$draft = new \Swagger\Client\Model\DocumentDraftCreateDTO(); // \Swagger\Client\Model\DocumentDraftCreateDTO | 

try {
    $result = $api_instance->outboundDocumentDraftSave($virtual_operator, $draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentDraftApi->outboundDocumentDraftSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **draft** | [**\Swagger\Client\Model\DocumentDraftCreateDTO**](../Model/DocumentDraftCreateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDocumentDraftUpdate**
> object outboundDocumentDraftUpdate($virtual_operator, $id, $document_draft)

Get a specific outboundDocument draft

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OutboundDocumentDraftApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = "virtual_operator_example"; // string | 
$id = "id_example"; // string | 
$document_draft = new \Swagger\Client\Model\DocumentDraftUpdateDTO(); // \Swagger\Client\Model\DocumentDraftUpdateDTO | 

try {
    $result = $api_instance->outboundDocumentDraftUpdate($virtual_operator, $id, $document_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDocumentDraftApi->outboundDocumentDraftUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**|  |
 **id** | **string**|  |
 **document_draft** | [**\Swagger\Client\Model\DocumentDraftUpdateDTO**](../Model/DocumentDraftUpdateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

