# Swagger\Client\PublicOutboundDocumentApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publicOutboundDocumentAccepted**](PublicOutboundDocumentApi.md#publicOutboundDocumentAccepted) | **POST** /api/{virtualOperator}/public/outbounddocuments/{id}/accepted | Accepts a outboundDocument
[**publicOutboundDocumentFileDownload**](PublicOutboundDocumentApi.md#publicOutboundDocumentFileDownload) | **GET** /api/{virtualOperator}/public/outbounddocuments/{id}/files/{fileId}/download | Downloads the selected file
[**publicOutboundDocumentGet**](PublicOutboundDocumentApi.md#publicOutboundDocumentGet) | **GET** /api/{virtualOperator}/public/outbounddocuments/{id} | Gets a public outboundDocument
[**publicOutboundDocumentGetPublicDocumentAttachmentContent**](PublicOutboundDocumentApi.md#publicOutboundDocumentGetPublicDocumentAttachmentContent) | **GET** /api/{virtualOperator}/public/outbounddocuments/{id}/attachment/{attachmentId} | Gets the content of a outboundDocument attachment
[**publicOutboundDocumentGetPublicDocumentAttachments**](PublicOutboundDocumentApi.md#publicOutboundDocumentGetPublicDocumentAttachments) | **GET** /api/{virtualOperator}/public/outbounddocuments/{id}/attachments | Gets the public outboundDocument attachments
[**publicOutboundDocumentPublicDocumentShowPDF**](PublicOutboundDocumentApi.md#publicOutboundDocumentPublicDocumentShowPDF) | **GET** /api/{virtualOperator}/public/outbounddocuments/{id}/files/{fileId}/getpdf | Gets the pdf for the public outboundDocument presentation
[**publicOutboundDocumentRejected**](PublicOutboundDocumentApi.md#publicOutboundDocumentRejected) | **POST** /api/{virtualOperator}/public/outbounddocuments/{id}/rejected | Rejects a outboundDocument


# **publicOutboundDocumentAccepted**
> object publicOutboundDocumentAccepted($id, $virtual_operator)

Accepts a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicOutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->publicOutboundDocumentAccepted($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOutboundDocumentApi->publicOutboundDocumentAccepted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicOutboundDocumentFileDownload**
> object publicOutboundDocumentFileDownload($id, $file_id, $virtual_operator)

Downloads the selected file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicOutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$file_id = "file_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->publicOutboundDocumentFileDownload($id, $file_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOutboundDocumentApi->publicOutboundDocumentFileDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicOutboundDocumentGet**
> \Swagger\Client\Model\PublicDocumentSummaryOutputDto publicOutboundDocumentGet($id, $virtual_operator)

Gets a public outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicOutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | 

try {
    $result = $apiInstance->publicOutboundDocumentGet($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOutboundDocumentApi->publicOutboundDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **virtual_operator** | **string**|  |

### Return type

[**\Swagger\Client\Model\PublicDocumentSummaryOutputDto**](../Model/PublicDocumentSummaryOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicOutboundDocumentGetPublicDocumentAttachmentContent**
> object publicOutboundDocumentGetPublicDocumentAttachmentContent($id, $attachment_id, $virtual_operator)

Gets the content of a outboundDocument attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicOutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->publicOutboundDocumentGetPublicDocumentAttachmentContent($id, $attachment_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOutboundDocumentApi->publicOutboundDocumentGetPublicDocumentAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **attachment_id** | **string**|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicOutboundDocumentGetPublicDocumentAttachments**
> \Swagger\Client\Model\DocumentAttachmentOutputDto publicOutboundDocumentGetPublicDocumentAttachments($id, $virtual_operator)

Gets the public outboundDocument attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicOutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->publicOutboundDocumentGetPublicDocumentAttachments($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOutboundDocumentApi->publicOutboundDocumentGetPublicDocumentAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

[**\Swagger\Client\Model\DocumentAttachmentOutputDto**](../Model/DocumentAttachmentOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicOutboundDocumentPublicDocumentShowPDF**
> object publicOutboundDocumentPublicDocumentShowPDF($id, $file_id, $virtual_operator)

Gets the pdf for the public outboundDocument presentation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicOutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$file_id = "file_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->publicOutboundDocumentPublicDocumentShowPDF($id, $file_id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOutboundDocumentApi->publicOutboundDocumentPublicDocumentShowPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicOutboundDocumentRejected**
> object publicOutboundDocumentRejected($id, $virtual_operator, $data)

Rejects a outboundDocument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PublicOutboundDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$data = new \Swagger\Client\Model\BusinessStatusDTO(); // \Swagger\Client\Model\BusinessStatusDTO | 

try {
    $result = $apiInstance->publicOutboundDocumentRejected($id, $virtual_operator, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOutboundDocumentApi->publicOutboundDocumentRejected: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **virtual_operator** | **string**| MaxLength: 60 |
 **data** | [**\Swagger\Client\Model\BusinessStatusDTO**](../Model/BusinessStatusDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

