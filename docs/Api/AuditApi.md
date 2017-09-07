# Swagger\Client\AuditApi

All URIs are relative to *https://api-einvoicing-co-qa.saphety.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditCount**](AuditApi.md#auditCount) | **GET** /api/audit/count | Counts all the results matching the search criteria
[**auditDetails**](AuditApi.md#auditDetails) | **GET** /api/audit/{id} | Gets a specific Audit entry by id
[**auditSearch**](AuditApi.md#auditSearch) | **GET** /api/audit | Get all audit entries that match the search criteria


# **auditCount**
> object auditCount($search_criteria_dto_id, $search_criteria_dto_virtual_operator, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_event_type, $search_criteria_dto_result_status, $search_criteria_dto_username, $search_criteria_dto_property_value, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Counts all the results matching the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuditApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_virtual_operator = "search_criteria_dto_virtual_operator_example"; // string | 
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_event_type = "search_criteria_dto_event_type_example"; // string | 
$search_criteria_dto_result_status = "search_criteria_dto_result_status_example"; // string | 
$search_criteria_dto_username = "search_criteria_dto_username_example"; // string | 
$search_criteria_dto_property_value = "search_criteria_dto_property_value_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->auditCount($search_criteria_dto_id, $search_criteria_dto_virtual_operator, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_event_type, $search_criteria_dto_result_status, $search_criteria_dto_username, $search_criteria_dto_property_value, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->auditCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_virtual_operator** | **string**|  | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_event_type** | **string**|  | [optional]
 **search_criteria_dto_result_status** | **string**|  | [optional]
 **search_criteria_dto_username** | **string**|  | [optional]
 **search_criteria_dto_property_value** | **string**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditDetails**
> \Swagger\Client\Model\AuditEntryDTO auditDetails($id)

Gets a specific Audit entry by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuditApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 

try {
    $result = $api_instance->auditDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->auditDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AuditEntryDTO**](../Model/AuditEntryDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditSearch**
> object auditSearch($search_criteria_dto_id, $search_criteria_dto_virtual_operator, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_event_type, $search_criteria_dto_result_status, $search_criteria_dto_username, $search_criteria_dto_property_value, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field)

Get all audit entries that match the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuditApi(new \Http\Adapter\Guzzle6\Client());
$search_criteria_dto_id = "search_criteria_dto_id_example"; // string | 
$search_criteria_dto_virtual_operator = "search_criteria_dto_virtual_operator_example"; // string | 
$search_criteria_dto_creation_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_creation_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_criteria_dto_event_type = "search_criteria_dto_event_type_example"; // string | 
$search_criteria_dto_result_status = "search_criteria_dto_result_status_example"; // string | 
$search_criteria_dto_username = "search_criteria_dto_username_example"; // string | 
$search_criteria_dto_property_value = "search_criteria_dto_property_value_example"; // string | 
$search_criteria_dto_offset = 56; // int | 
$search_criteria_dto_number_of_records = 56; // int | 
$search_criteria_dto_sort_field = "search_criteria_dto_sort_field_example"; // string | 

try {
    $result = $api_instance->auditSearch($search_criteria_dto_id, $search_criteria_dto_virtual_operator, $search_criteria_dto_creation_date_start, $search_criteria_dto_creation_date_end, $search_criteria_dto_event_type, $search_criteria_dto_result_status, $search_criteria_dto_username, $search_criteria_dto_property_value, $search_criteria_dto_offset, $search_criteria_dto_number_of_records, $search_criteria_dto_sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->auditSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_dto_id** | **string**|  | [optional]
 **search_criteria_dto_virtual_operator** | **string**|  | [optional]
 **search_criteria_dto_creation_date_start** | **\DateTime**|  | [optional]
 **search_criteria_dto_creation_date_end** | **\DateTime**|  | [optional]
 **search_criteria_dto_event_type** | **string**|  | [optional]
 **search_criteria_dto_result_status** | **string**|  | [optional]
 **search_criteria_dto_username** | **string**|  | [optional]
 **search_criteria_dto_property_value** | **string**|  | [optional]
 **search_criteria_dto_offset** | **int**|  | [optional]
 **search_criteria_dto_number_of_records** | **int**|  | [optional]
 **search_criteria_dto_sort_field** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

