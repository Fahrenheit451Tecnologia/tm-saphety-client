# Swagger\Client\DataElementsApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataElementsGetAuditEventTypes**](DataElementsApi.md#dataElementsGetAuditEventTypes) | **GET** /api/dataelements/AuditEventTypes | Gets all audit event types.
[**dataElementsGetAuditResultTypes**](DataElementsApi.md#dataElementsGetAuditResultTypes) | **GET** /api/dataelements/AuditResultTypes | Gets all audit result types.
[**dataElementsGetBusinessStatus**](DataElementsApi.md#dataElementsGetBusinessStatus) | **GET** /api/dataelements/BusinessStatus | Gets all business status types.
[**dataElementsGetCommunicationStatus**](DataElementsApi.md#dataElementsGetCommunicationStatus) | **GET** /api/dataelements/CommunicationStatus | Gets all communication status types.
[**dataElementsGetCountryCodes**](DataElementsApi.md#dataElementsGetCountryCodes) | **GET** /api/dataelements/CountryCodes | Gets all country codes types.
[**dataElementsGetCreditNoteReasons**](DataElementsApi.md#dataElementsGetCreditNoteReasons) | **GET** /api/dataelements/CreditNoteReasons | Gets all Credit Note Reasons.
[**dataElementsGetCurrencies**](DataElementsApi.md#dataElementsGetCurrencies) | **GET** /api/dataelements/Currencies | Gets all currencies.
[**dataElementsGetCustomerIntegrationTypes**](DataElementsApi.md#dataElementsGetCustomerIntegrationTypes) | **GET** /api/dataelements/CustomerIntegrationTypes | Gets all Customer Integration Types.
[**dataElementsGetDAllowanceChargeCodeTypes**](DataElementsApi.md#dataElementsGetDAllowanceChargeCodeTypes) | **GET** /api/dataelements/AllowanceChargeCodeTypes | Gets all Allowance/Charge Code Types.
[**dataElementsGetDebitNoteReasons**](DataElementsApi.md#dataElementsGetDebitNoteReasons) | **GET** /api/dataelements/DebitNoteReasons | Gets all Debit Note Reasons.
[**dataElementsGetDocReferenceType**](DataElementsApi.md#dataElementsGetDocReferenceType) | **GET** /api/dataelements/DocReferenceType | Gets all OutboundDocument Reference Types.
[**dataElementsGetDocumentSubTypes**](DataElementsApi.md#dataElementsGetDocumentSubTypes) | **GET** /api/dataelements/DocumentSubTypes | Gets all outboundDocument subtypes.
[**dataElementsGetDocumentTypes**](DataElementsApi.md#dataElementsGetDocumentTypes) | **GET** /api/dataelements/DocumentTypes | Gets all outboundDocument types.
[**dataElementsGetFiscalCategories**](DataElementsApi.md#dataElementsGetFiscalCategories) | **GET** /api/dataelements/FiscalCategories | Gets all Fiscal Categories.
[**dataElementsGetFiscalRegimes**](DataElementsApi.md#dataElementsGetFiscalRegimes) | **GET** /api/dataelements/FiscalRegimes | Gets all Fiscal Regimes.
[**dataElementsGetIdentificationDocumentTypes**](DataElementsApi.md#dataElementsGetIdentificationDocumentTypes) | **GET** /api/dataelements/IdentificationDocumentTypes | Gets all outboundDocument types for organization identification.
[**dataElementsGetIncoterms**](DataElementsApi.md#dataElementsGetIncoterms) | **GET** /api/dataelements/Incoterms | Gets all incoterms.
[**dataElementsGetIssueModes**](DataElementsApi.md#dataElementsGetIssueModes) | **GET** /api/dataelements/IssueModes | Gets all Issue Mode types.
[**dataElementsGetLanguageCodes**](DataElementsApi.md#dataElementsGetLanguageCodes) | **GET** /api/dataelements/LanguageCodes | Gets all Language Codes.
[**dataElementsGetLegalTypes**](DataElementsApi.md#dataElementsGetLegalTypes) | **GET** /api/dataelements/LegalTypes | Gets all Legal Type.
[**dataElementsGetPaymentChannelTypes**](DataElementsApi.md#dataElementsGetPaymentChannelTypes) | **GET** /api/dataelements/PaymentChannelTypes | Gets all Payment Channel Types.
[**dataElementsGetPaymentDaysTypes**](DataElementsApi.md#dataElementsGetPaymentDaysTypes) | **GET** /api/dataelements/PaymentDaysTypes | Gets all Payment Days Types.
[**dataElementsGetPaymentInstructionType**](DataElementsApi.md#dataElementsGetPaymentInstructionType) | **GET** /api/dataelements/PaymentInstructionTypes | Gets all Payment instructions.
[**dataElementsGetPaymentMethods**](DataElementsApi.md#dataElementsGetPaymentMethods) | **GET** /api/dataelements/PaymentMethods | Gets all Payment Methods.
[**dataElementsGetPaymentOrderTimeTypes**](DataElementsApi.md#dataElementsGetPaymentOrderTimeTypes) | **GET** /api/dataelements/PaymentOrderTimeTypes | Gets all Payment Order Time Types
[**dataElementsGetPaymentTermsTypes**](DataElementsApi.md#dataElementsGetPaymentTermsTypes) | **GET** /api/dataelements/PaymentTermsTypes | Gets all Payment Terms Types.
[**dataElementsGetProductTypes**](DataElementsApi.md#dataElementsGetProductTypes) | **GET** /api/dataelements/ProductTypes | Gets all Product Types.
[**dataElementsGetSerieStatus**](DataElementsApi.md#dataElementsGetSerieStatus) | **GET** /api/dataelements/SerieStatus | Gets all Serie Status.
[**dataElementsGetSerieTypes**](DataElementsApi.md#dataElementsGetSerieTypes) | **GET** /api/dataelements/SerieTypes | Gets all outboundDocument types.
[**dataElementsGetTaxCategories**](DataElementsApi.md#dataElementsGetTaxCategories) | **GET** /api/dataelements/TaxCategories | Gets all Tax Categories.
[**dataElementsGetTemplateType**](DataElementsApi.md#dataElementsGetTemplateType) | **GET** /api/dataelements/TemplateTypes | Gets all template types.
[**dataElementsGetTimezones**](DataElementsApi.md#dataElementsGetTimezones) | **GET** /api/dataelements/Timezones | Gets all Timezones.  The returned list is a subset of tz database time zones
[**dataElementsGetUnitsOfMeasure**](DataElementsApi.md#dataElementsGetUnitsOfMeasure) | **GET** /api/dataelements/UnitsOfMeasure | Gets all units of measure.
[**dataElementsGetUnitsOfMeasureSimplified**](DataElementsApi.md#dataElementsGetUnitsOfMeasureSimplified) | **GET** /api/dataelements/UnitsOfMeasureSimplified | Gets units of measure simplified list.
[**dataElementsGetWitholdingTaxes**](DataElementsApi.md#dataElementsGetWitholdingTaxes) | **GET** /api/dataelements/WitholdingTaxes | Gets all Witholding Taxes.


# **dataElementsGetAuditEventTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetAuditEventTypes()

Gets all audit event types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetAuditEventTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetAuditEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetAuditResultTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetAuditResultTypes()

Gets all audit result types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetAuditResultTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetAuditResultTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetBusinessStatus**
> \Swagger\Client\Model\DataElement[] dataElementsGetBusinessStatus()

Gets all business status types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetBusinessStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetBusinessStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetCommunicationStatus**
> \Swagger\Client\Model\DataElement[] dataElementsGetCommunicationStatus()

Gets all communication status types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetCommunicationStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetCommunicationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetCountryCodes**
> \Swagger\Client\Model\DataElement[] dataElementsGetCountryCodes()

Gets all country codes types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetCountryCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetCountryCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetCreditNoteReasons**
> \Swagger\Client\Model\DataElement[] dataElementsGetCreditNoteReasons()

Gets all Credit Note Reasons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetCreditNoteReasons();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetCreditNoteReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetCurrencies**
> object dataElementsGetCurrencies()

Gets all currencies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetCustomerIntegrationTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetCustomerIntegrationTypes()

Gets all Customer Integration Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetCustomerIntegrationTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetCustomerIntegrationTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetDAllowanceChargeCodeTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetDAllowanceChargeCodeTypes()

Gets all Allowance/Charge Code Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetDAllowanceChargeCodeTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetDAllowanceChargeCodeTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetDebitNoteReasons**
> \Swagger\Client\Model\DataElement[] dataElementsGetDebitNoteReasons()

Gets all Debit Note Reasons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetDebitNoteReasons();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetDebitNoteReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetDocReferenceType**
> \Swagger\Client\Model\DataElement[] dataElementsGetDocReferenceType()

Gets all OutboundDocument Reference Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetDocReferenceType();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetDocReferenceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetDocumentSubTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetDocumentSubTypes()

Gets all outboundDocument subtypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetDocumentSubTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetDocumentSubTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetDocumentTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetDocumentTypes()

Gets all outboundDocument types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetDocumentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetDocumentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetFiscalCategories**
> \Swagger\Client\Model\DataElement[] dataElementsGetFiscalCategories()

Gets all Fiscal Categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetFiscalCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetFiscalCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetFiscalRegimes**
> \Swagger\Client\Model\DataElement[] dataElementsGetFiscalRegimes()

Gets all Fiscal Regimes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetFiscalRegimes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetFiscalRegimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetIdentificationDocumentTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetIdentificationDocumentTypes()

Gets all outboundDocument types for organization identification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetIdentificationDocumentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetIdentificationDocumentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetIncoterms**
> object dataElementsGetIncoterms()

Gets all incoterms.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetIncoterms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetIncoterms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetIssueModes**
> \Swagger\Client\Model\DataElement[] dataElementsGetIssueModes()

Gets all Issue Mode types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetIssueModes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetIssueModes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetLanguageCodes**
> \Swagger\Client\Model\DataElement[] dataElementsGetLanguageCodes()

Gets all Language Codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetLanguageCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetLanguageCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetLegalTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetLegalTypes()

Gets all Legal Type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetLegalTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetLegalTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetPaymentChannelTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetPaymentChannelTypes()

Gets all Payment Channel Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetPaymentChannelTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetPaymentChannelTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetPaymentDaysTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetPaymentDaysTypes()

Gets all Payment Days Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetPaymentDaysTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetPaymentDaysTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetPaymentInstructionType**
> \Swagger\Client\Model\DataElement[] dataElementsGetPaymentInstructionType()

Gets all Payment instructions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetPaymentInstructionType();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetPaymentInstructionType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetPaymentMethods**
> \Swagger\Client\Model\DataElement[] dataElementsGetPaymentMethods()

Gets all Payment Methods.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetPaymentMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetPaymentOrderTimeTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetPaymentOrderTimeTypes()

Gets all Payment Order Time Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetPaymentOrderTimeTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetPaymentOrderTimeTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetPaymentTermsTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetPaymentTermsTypes()

Gets all Payment Terms Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetPaymentTermsTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetPaymentTermsTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetProductTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetProductTypes()

Gets all Product Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetProductTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetProductTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetSerieStatus**
> \Swagger\Client\Model\DataElement[] dataElementsGetSerieStatus()

Gets all Serie Status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetSerieStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetSerieStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetSerieTypes**
> \Swagger\Client\Model\DataElement[] dataElementsGetSerieTypes()

Gets all outboundDocument types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetSerieTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetSerieTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetTaxCategories**
> \Swagger\Client\Model\DataElement[] dataElementsGetTaxCategories()

Gets all Tax Categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetTaxCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetTaxCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetTemplateType**
> \Swagger\Client\Model\DataElement[] dataElementsGetTemplateType()

Gets all template types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetTemplateType();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetTemplateType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetTimezones**
> \Swagger\Client\Model\DataElement[] dataElementsGetTimezones()

Gets all Timezones.  The returned list is a subset of tz database time zones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetTimezones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetTimezones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetUnitsOfMeasure**
> object dataElementsGetUnitsOfMeasure()

Gets all units of measure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetUnitsOfMeasure();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetUnitsOfMeasure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetUnitsOfMeasureSimplified**
> object dataElementsGetUnitsOfMeasureSimplified()

Gets units of measure simplified list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetUnitsOfMeasureSimplified();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetUnitsOfMeasureSimplified: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataElementsGetWitholdingTaxes**
> \Swagger\Client\Model\DataElement[] dataElementsGetWitholdingTaxes()

Gets all Witholding Taxes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataElementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->dataElementsGetWitholdingTaxes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataElementsApi->dataElementsGetWitholdingTaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DataElement[]**](../Model/DataElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

