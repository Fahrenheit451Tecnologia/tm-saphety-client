# Swagger\Client\BillingApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingAttachmentsSizeCount**](BillingApi.md#billingAttachmentsSizeCount) | **POST** /api/billing/attachments | Get attachments count and size by date and issuer
[**billingDocumentsCount**](BillingApi.md#billingDocumentsCount) | **POST** /api/billing/documents | Get outboundDocument count by date and issuer


# **billingAttachmentsSizeCount**
> object billingAttachmentsSizeCount($billing_criteria)

Get attachments count and size by date and issuer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BillingApi(new \Http\Adapter\Guzzle6\Client());
$billing_criteria = new \Swagger\Client\Model\GetBillingCriteriaDTO(); // \Swagger\Client\Model\GetBillingCriteriaDTO | 

try {
    $result = $api_instance->billingAttachmentsSizeCount($billing_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingAttachmentsSizeCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_criteria** | [**\Swagger\Client\Model\GetBillingCriteriaDTO**](../Model/GetBillingCriteriaDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingDocumentsCount**
> object billingDocumentsCount($billing_criteria)

Get outboundDocument count by date and issuer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BillingApi(new \Http\Adapter\Guzzle6\Client());
$billing_criteria = new \Swagger\Client\Model\GetBillingCriteriaDTO(); // \Swagger\Client\Model\GetBillingCriteriaDTO | 

try {
    $result = $api_instance->billingDocumentsCount($billing_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingDocumentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_criteria** | [**\Swagger\Client\Model\GetBillingCriteriaDTO**](../Model/GetBillingCriteriaDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

