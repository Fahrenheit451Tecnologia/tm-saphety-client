# Swagger\Client\VirtualOperatorApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualOperatorAddCertificate**](VirtualOperatorApi.md#virtualOperatorAddCertificate) | **POST** /api/virtualOperators/{virtualOperatorId}/certificate | Adds a new virtual operator outboundDocument certificate
[**virtualOperatorCount**](VirtualOperatorApi.md#virtualOperatorCount) | **GET** /api/virtualOperators/count | Counts the number of results that match the search criteria
[**virtualOperatorCreate**](VirtualOperatorApi.md#virtualOperatorCreate) | **POST** /api/virtualOperators | Creates a new Virtual Operator
[**virtualOperatorDetails**](VirtualOperatorApi.md#virtualOperatorDetails) | **GET** /api/virtualOperators/{id} | Gets a specific virtual operator
[**virtualOperatorGetByCompanyIdentification**](VirtualOperatorApi.md#virtualOperatorGetByCompanyIdentification) | **GET** /api/virtualOperators/getbycompany | Gets the Virtual Operators by Company
[**virtualOperatorGetCertificate**](VirtualOperatorApi.md#virtualOperatorGetCertificate) | **GET** /api/virtualOperators/{virtualOperatorId}/certificate | Gets the virtual operator outboundDocument certificate
[**virtualOperatorGetLogo**](VirtualOperatorApi.md#virtualOperatorGetLogo) | **GET** /api/virtualOperators/{alias}/getlogo | Gets Logo from virtual operator
[**virtualOperatorGetSettings**](VirtualOperatorApi.md#virtualOperatorGetSettings) | **GET** /api/virtualOperators/{virtualOperatorId}/settings | Gets settings for a especific virtual operator
[**virtualOperatorGetSettingsByKey**](VirtualOperatorApi.md#virtualOperatorGetSettingsByKey) | **GET** /api/virtualOperators/{virtualOperatorId}/settings/{key} | Gets settings for a specific virtual operator
[**virtualOperatorRemove**](VirtualOperatorApi.md#virtualOperatorRemove) | **DELETE** /api/virtualOperators/{id} | Removes a virtual Operator
[**virtualOperatorRemoveCertificate**](VirtualOperatorApi.md#virtualOperatorRemoveCertificate) | **DELETE** /api/virtualOperators/{virtualOperatorId}/certificate | Adds a new virtual operator outboundDocument certificate
[**virtualOperatorSearch**](VirtualOperatorApi.md#virtualOperatorSearch) | **GET** /api/virtualOperators | Gets the Virtual Operators that match a given criteria  Default NumberOfRecords&#x3D;25
[**virtualOperatorUpdate**](VirtualOperatorApi.md#virtualOperatorUpdate) | **PUT** /api/virtualOperators/{id} | Updates a virtual operator
[**virtualOperatorUpdateSettingsValue**](VirtualOperatorApi.md#virtualOperatorUpdateSettingsValue) | **PUT** /api/virtualOperators/{virtualOperatorId}/settings | Updates settings for a especific virtual operator


# **virtualOperatorAddCertificate**
> string virtualOperatorAddCertificate($virtual_operator_id, $certificate)

Adds a new virtual operator outboundDocument certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator_id = "virtual_operator_id_example"; // string | 
$certificate = new \Swagger\Client\Model\VirtualOperatorCertificateCreateDto(); // \Swagger\Client\Model\VirtualOperatorCertificateCreateDto | 

try {
    $result = $apiInstance->virtualOperatorAddCertificate($virtual_operator_id, $certificate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorAddCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | [**string**](../Model/.md)|  |
 **certificate** | [**\Swagger\Client\Model\VirtualOperatorCertificateCreateDto**](../Model/VirtualOperatorCertificateCreateDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorCount**
> int virtualOperatorCount($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field)

Counts the number of results that match the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_criteria_id = "search_criteria_id_example"; // string | 
$search_criteria_email = "search_criteria_email_example"; // string | 
$search_criteria_alias = "search_criteria_alias_example"; // string | MaxLength: 60
$search_criteria_name = "search_criteria_name_example"; // string | 
$search_criteria_include_settings = true; // bool | 
$search_criteria_include_medias = true; // bool | 
$search_criteria_offset = 56; // int | 
$search_criteria_number_of_records = 56; // int | 
$search_criteria_sort_field = "search_criteria_sort_field_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorCount($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_email** | **string**|  | [optional]
 **search_criteria_alias** | **string**| MaxLength: 60 | [optional]
 **search_criteria_name** | **string**|  | [optional]
 **search_criteria_include_settings** | **bool**|  | [optional]
 **search_criteria_include_medias** | **bool**|  | [optional]
 **search_criteria_offset** | **int**|  | [optional]
 **search_criteria_number_of_records** | **int**|  | [optional]
 **search_criteria_sort_field** | **string**|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorCreate**
> string virtualOperatorCreate($virtual_operator)

Creates a new Virtual Operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator = new \Swagger\Client\Model\VirtualOperatorCreateDto(); // \Swagger\Client\Model\VirtualOperatorCreateDto | 

try {
    $result = $apiInstance->virtualOperatorCreate($virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | [**\Swagger\Client\Model\VirtualOperatorCreateDto**](../Model/VirtualOperatorCreateDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorDetails**
> \Swagger\Client\Model\VirtualOperatorDetailsDto virtualOperatorDetails($id)

Gets a specific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualOperatorDetailsDto**](../Model/VirtualOperatorDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetByCompanyIdentification**
> \Swagger\Client\Model\VirtualOperatorDetailsDto[] virtualOperatorGetByCompanyIdentification($include_medias, $include_settings, $identification_dto_document_number, $identification_dto_document_type, $identification_dto_country_code, $identification_dto_code)

Gets the Virtual Operators by Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_medias = true; // bool | 
$include_settings = true; // bool | 
$identification_dto_document_number = "identification_dto_document_number_example"; // string | Tax identification number; MaxLength: 50
$identification_dto_document_type = "identification_dto_document_type_example"; // string | Tax identification type (In Colombia NIT).   The value must be one of this ['CivilRegistry', 'IdentityCard', 'CitizenshipCard', 'ForeignerCard', 'ForeignerIdentification', 'NIT', 'Passport', 'ForeignIdentificationDocument' ]
$identification_dto_country_code = "identification_dto_country_code_example"; // string | Country Code: In Colombia 'CO'
$identification_dto_code = "identification_dto_code_example"; // string | Read only field.

try {
    $result = $apiInstance->virtualOperatorGetByCompanyIdentification($include_medias, $include_settings, $identification_dto_document_number, $identification_dto_document_type, $identification_dto_country_code, $identification_dto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetByCompanyIdentification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_medias** | **bool**|  | [optional]
 **include_settings** | **bool**|  | [optional]
 **identification_dto_document_number** | **string**| Tax identification number; MaxLength: 50 | [optional]
 **identification_dto_document_type** | **string**| Tax identification type (In Colombia NIT).   The value must be one of this [&#39;CivilRegistry&#39;, &#39;IdentityCard&#39;, &#39;CitizenshipCard&#39;, &#39;ForeignerCard&#39;, &#39;ForeignerIdentification&#39;, &#39;NIT&#39;, &#39;Passport&#39;, &#39;ForeignIdentificationDocument&#39; ] | [optional]
 **identification_dto_country_code** | **string**| Country Code: In Colombia &#39;CO&#39; | [optional]
 **identification_dto_code** | **string**| Read only field. | [optional]

### Return type

[**\Swagger\Client\Model\VirtualOperatorDetailsDto[]**](../Model/VirtualOperatorDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetCertificate**
> \Swagger\Client\Model\VirtualOperatorCertificateSummaryDto virtualOperatorGetCertificate($virtual_operator_id)

Gets the virtual operator outboundDocument certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator_id = "virtual_operator_id_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorGetCertificate($virtual_operator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualOperatorCertificateSummaryDto**](../Model/VirtualOperatorCertificateSummaryDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetLogo**
> \Swagger\Client\Model\VirtualOperatorMediaDto virtualOperatorGetLogo($alias)

Gets Logo from virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alias = "alias_example"; // string | MaxLength: 60

try {
    $result = $apiInstance->virtualOperatorGetLogo($alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias** | **string**| MaxLength: 60 |

### Return type

[**\Swagger\Client\Model\VirtualOperatorMediaDto**](../Model/VirtualOperatorMediaDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetSettings**
> \Swagger\Client\Model\VirtualOperatorSettingsDto[] virtualOperatorGetSettings($virtual_operator_id)

Gets settings for a especific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator_id = "virtual_operator_id_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorGetSettings($virtual_operator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\VirtualOperatorSettingsDto[]**](../Model/VirtualOperatorSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetSettingsByKey**
> string virtualOperatorGetSettingsByKey($virtual_operator_id, $key)

Gets settings for a specific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator_id = "virtual_operator_id_example"; // string | 
$key = "key_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorGetSettingsByKey($virtual_operator_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetSettingsByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | [**string**](../Model/.md)|  |
 **key** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorRemove**
> bool virtualOperatorRemove($id)

Removes a virtual Operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorRemoveCertificate**
> bool virtualOperatorRemoveCertificate($virtual_operator_id)

Adds a new virtual operator outboundDocument certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator_id = "virtual_operator_id_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorRemoveCertificate($virtual_operator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorRemoveCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | [**string**](../Model/.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorSearch**
> \Swagger\Client\Model\VirtualOperatorDetailsDto[] virtualOperatorSearch($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field)

Gets the Virtual Operators that match a given criteria  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_criteria_id = "search_criteria_id_example"; // string | 
$search_criteria_email = "search_criteria_email_example"; // string | 
$search_criteria_alias = "search_criteria_alias_example"; // string | MaxLength: 60
$search_criteria_name = "search_criteria_name_example"; // string | 
$search_criteria_include_settings = true; // bool | 
$search_criteria_include_medias = true; // bool | 
$search_criteria_offset = 56; // int | 
$search_criteria_number_of_records = 56; // int | 
$search_criteria_sort_field = "search_criteria_sort_field_example"; // string | 

try {
    $result = $apiInstance->virtualOperatorSearch($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_id** | [**string**](../Model/.md)|  | [optional]
 **search_criteria_email** | **string**|  | [optional]
 **search_criteria_alias** | **string**| MaxLength: 60 | [optional]
 **search_criteria_name** | **string**|  | [optional]
 **search_criteria_include_settings** | **bool**|  | [optional]
 **search_criteria_include_medias** | **bool**|  | [optional]
 **search_criteria_offset** | **int**|  | [optional]
 **search_criteria_number_of_records** | **int**|  | [optional]
 **search_criteria_sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VirtualOperatorDetailsDto[]**](../Model/VirtualOperatorDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorUpdate**
> string virtualOperatorUpdate($id, $virtual_operator)

Updates a virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$virtual_operator = new \Swagger\Client\Model\VirtualOperatorUpdateDto(); // \Swagger\Client\Model\VirtualOperatorUpdateDto | 

try {
    $result = $apiInstance->virtualOperatorUpdate($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **virtual_operator** | [**\Swagger\Client\Model\VirtualOperatorUpdateDto**](../Model/VirtualOperatorUpdateDto.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorUpdateSettingsValue**
> bool virtualOperatorUpdateSettingsValue($virtual_operator_id, $settings_dto)

Updates settings for a especific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$virtual_operator_id = "virtual_operator_id_example"; // string | 
$settings_dto = new \Swagger\Client\Model\VirtualOperatorSettingsDto(); // \Swagger\Client\Model\VirtualOperatorSettingsDto | 

try {
    $result = $apiInstance->virtualOperatorUpdateSettingsValue($virtual_operator_id, $settings_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorUpdateSettingsValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | [**string**](../Model/.md)|  |
 **settings_dto** | [**\Swagger\Client\Model\VirtualOperatorSettingsDto**](../Model/VirtualOperatorSettingsDto.md)|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

