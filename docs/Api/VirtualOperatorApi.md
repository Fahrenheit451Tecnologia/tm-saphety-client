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
[**virtualOperatorGetSettingsByKey**](VirtualOperatorApi.md#virtualOperatorGetSettingsByKey) | **GET** /api/virtualOperators/{virtualOperatorId}/settings/{key} | Gets settings for a especific virtual operator
[**virtualOperatorRemove**](VirtualOperatorApi.md#virtualOperatorRemove) | **DELETE** /api/virtualOperators/{id} | Removes a virtual Operator
[**virtualOperatorRemoveCertificate**](VirtualOperatorApi.md#virtualOperatorRemoveCertificate) | **DELETE** /api/virtualOperators/{virtualOperatorId}/certificate | Adds a new virtual operator outboundDocument certificate
[**virtualOperatorSearch**](VirtualOperatorApi.md#virtualOperatorSearch) | **GET** /api/virtualOperators | Gets the Virtual Operators that match a given criteria  Default NumberOfRecords&#x3D;25
[**virtualOperatorUpdate**](VirtualOperatorApi.md#virtualOperatorUpdate) | **PUT** /api/virtualOperators/{id} | Updates a virtual operator
[**virtualOperatorUpdateSettingsValue**](VirtualOperatorApi.md#virtualOperatorUpdateSettingsValue) | **PUT** /api/virtualOperators/{virtualOperatorId}/settings | Updates settings for a especific virtual operator


# **virtualOperatorAddCertificate**
> object virtualOperatorAddCertificate($virtual_operator_id, $certificate)

Adds a new virtual operator outboundDocument certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator_id = "virtual_operator_id_example"; // string | 
$certificate = new \Swagger\Client\Model\VirtualOperatorCertificateCreateDTO(); // \Swagger\Client\Model\VirtualOperatorCertificateCreateDTO | 

try {
    $result = $api_instance->virtualOperatorAddCertificate($virtual_operator_id, $certificate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorAddCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | **string**|  |
 **certificate** | [**\Swagger\Client\Model\VirtualOperatorCertificateCreateDTO**](../Model/VirtualOperatorCertificateCreateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorCount**
> object virtualOperatorCount($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field)

Counts the number of results that match the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria_id = "search_criteria_id_example"; // string | 
$search_criteria_email = "search_criteria_email_example"; // string | 
$search_criteria_alias = "search_criteria_alias_example"; // string | 
$search_criteria_name = "search_criteria_name_example"; // string | 
$search_criteria_include_settings = true; // bool | 
$search_criteria_include_medias = true; // bool | 
$search_criteria_offset = 56; // int | 
$search_criteria_number_of_records = 56; // int | 
$search_criteria_sort_field = "search_criteria_sort_field_example"; // string | 

try {
    $result = $api_instance->virtualOperatorCount($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_id** | **string**|  | [optional]
 **search_criteria_email** | **string**|  | [optional]
 **search_criteria_alias** | **string**|  | [optional]
 **search_criteria_name** | **string**|  | [optional]
 **search_criteria_include_settings** | **bool**|  | [optional]
 **search_criteria_include_medias** | **bool**|  | [optional]
 **search_criteria_offset** | **int**|  | [optional]
 **search_criteria_number_of_records** | **int**|  | [optional]
 **search_criteria_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorCreate**
> object virtualOperatorCreate($virtual_operator)

Creates a new Virtual Operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator = new \Swagger\Client\Model\VirtualOperatorCreateDTO(); // \Swagger\Client\Model\VirtualOperatorCreateDTO | 

try {
    $result = $api_instance->virtualOperatorCreate($virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | [**\Swagger\Client\Model\VirtualOperatorCreateDTO**](../Model/VirtualOperatorCreateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorDetails**
> object virtualOperatorDetails($id)

Gets a specific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 

try {
    $result = $api_instance->virtualOperatorDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetByCompanyIdentification**
> object virtualOperatorGetByCompanyIdentification($identification_dto_document_number, $identification_dto_document_type, $identification_dto_country_code, $include_medias, $include_settings, $identification_dto_code)

Gets the Virtual Operators by Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$identification_dto_document_number = "identification_dto_document_number_example"; // string | Tax identification number
$identification_dto_document_type = "identification_dto_document_type_example"; // string | Tax identification type (In Colombia NIT).   The value must be one of this ['CivilRegistry', 'IdentityCard', 'CitizenshipCard', 'ForeignerCard', 'ForeignerIdentification', 'NIT', 'Passport', 'ForeignIdentificationDocument' ]
$identification_dto_country_code = "identification_dto_country_code_example"; // string | Country Code: In Colombia 'CO'
$include_medias = true; // bool | 
$include_settings = true; // bool | 
$identification_dto_code = "identification_dto_code_example"; // string | Read only field.

try {
    $result = $api_instance->virtualOperatorGetByCompanyIdentification($identification_dto_document_number, $identification_dto_document_type, $identification_dto_country_code, $include_medias, $include_settings, $identification_dto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetByCompanyIdentification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identification_dto_document_number** | **string**| Tax identification number |
 **identification_dto_document_type** | **string**| Tax identification type (In Colombia NIT).   The value must be one of this [&#39;CivilRegistry&#39;, &#39;IdentityCard&#39;, &#39;CitizenshipCard&#39;, &#39;ForeignerCard&#39;, &#39;ForeignerIdentification&#39;, &#39;NIT&#39;, &#39;Passport&#39;, &#39;ForeignIdentificationDocument&#39; ] |
 **identification_dto_country_code** | **string**| Country Code: In Colombia &#39;CO&#39; |
 **include_medias** | **bool**|  | [optional]
 **include_settings** | **bool**|  | [optional]
 **identification_dto_code** | **string**| Read only field. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetCertificate**
> object virtualOperatorGetCertificate($virtual_operator_id)

Gets the virtual operator outboundDocument certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator_id = "virtual_operator_id_example"; // string | 

try {
    $result = $api_instance->virtualOperatorGetCertificate($virtual_operator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetLogo**
> object virtualOperatorGetLogo($alias)

Gets Logo from virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$alias = "alias_example"; // string | 

try {
    $result = $api_instance->virtualOperatorGetLogo($alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetSettings**
> object virtualOperatorGetSettings($virtual_operator_id)

Gets settings for a especific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator_id = "virtual_operator_id_example"; // string | 

try {
    $result = $api_instance->virtualOperatorGetSettings($virtual_operator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorGetSettingsByKey**
> object virtualOperatorGetSettingsByKey($virtual_operator_id, $key)

Gets settings for a especific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator_id = "virtual_operator_id_example"; // string | 
$key = "key_example"; // string | 

try {
    $result = $api_instance->virtualOperatorGetSettingsByKey($virtual_operator_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorGetSettingsByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | **string**|  |
 **key** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorRemove**
> object virtualOperatorRemove($id)

Removes a virtual Operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 

try {
    $result = $api_instance->virtualOperatorRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorRemoveCertificate**
> object virtualOperatorRemoveCertificate($virtual_operator_id)

Adds a new virtual operator outboundDocument certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator_id = "virtual_operator_id_example"; // string | 

try {
    $result = $api_instance->virtualOperatorRemoveCertificate($virtual_operator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorRemoveCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorSearch**
> object virtualOperatorSearch($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field)

Gets the Virtual Operators that match a given criteria  Default NumberOfRecords=25

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria_id = "search_criteria_id_example"; // string | 
$search_criteria_email = "search_criteria_email_example"; // string | 
$search_criteria_alias = "search_criteria_alias_example"; // string | 
$search_criteria_name = "search_criteria_name_example"; // string | 
$search_criteria_include_settings = true; // bool | 
$search_criteria_include_medias = true; // bool | 
$search_criteria_offset = 56; // int | 
$search_criteria_number_of_records = 56; // int | 
$search_criteria_sort_field = "search_criteria_sort_field_example"; // string | 

try {
    $result = $api_instance->virtualOperatorSearch($search_criteria_id, $search_criteria_email, $search_criteria_alias, $search_criteria_name, $search_criteria_include_settings, $search_criteria_include_medias, $search_criteria_offset, $search_criteria_number_of_records, $search_criteria_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_id** | **string**|  | [optional]
 **search_criteria_email** | **string**|  | [optional]
 **search_criteria_alias** | **string**|  | [optional]
 **search_criteria_name** | **string**|  | [optional]
 **search_criteria_include_settings** | **bool**|  | [optional]
 **search_criteria_include_medias** | **bool**|  | [optional]
 **search_criteria_offset** | **int**|  | [optional]
 **search_criteria_number_of_records** | **int**|  | [optional]
 **search_criteria_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorUpdate**
> object virtualOperatorUpdate($id, $virtual_operator)

Updates a virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 
$virtual_operator = new \Swagger\Client\Model\VirtualOperatorUpdateDTO(); // \Swagger\Client\Model\VirtualOperatorUpdateDTO | 

try {
    $result = $api_instance->virtualOperatorUpdate($id, $virtual_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **virtual_operator** | [**\Swagger\Client\Model\VirtualOperatorUpdateDTO**](../Model/VirtualOperatorUpdateDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualOperatorUpdateSettingsValue**
> object virtualOperatorUpdateSettingsValue($virtual_operator_id, $settings_dto)

Updates settings for a especific virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VirtualOperatorApi(new \Http\Adapter\Guzzle6\Client());
$virtual_operator_id = "virtual_operator_id_example"; // string | 
$settings_dto = new \Swagger\Client\Model\VirtualOperatorSettingsDTO(); // \Swagger\Client\Model\VirtualOperatorSettingsDTO | 

try {
    $result = $api_instance->virtualOperatorUpdateSettingsValue($virtual_operator_id, $settings_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualOperatorApi->virtualOperatorUpdateSettingsValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator_id** | **string**|  |
 **settings_dto** | [**\Swagger\Client\Model\VirtualOperatorSettingsDTO**](../Model/VirtualOperatorSettingsDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

