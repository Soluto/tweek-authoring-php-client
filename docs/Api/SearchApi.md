# Swagger\Client\SearchApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchGetSearchIndex**](SearchApi.md#searchGetSearchIndex) | **GET** /search-index | 
[**searchSearch**](SearchApi.md#searchSearch) | **GET** /search | 
[**searchSuggestions**](SearchApi.md#searchSuggestions) | **GET** /suggestions | 


# **searchGetSearchIndex**
> object searchGetSearchIndex()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();

try {
    $result = $api_instance->searchGetSearchIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchGetSearchIndex: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSearch**
> string[] searchSearch($q, $count)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
$q = "q_example"; // string | 
$count = 1.2; // double | 

try {
    $result = $api_instance->searchSearch($q, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  |
 **count** | **double**|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSuggestions**
> string[] searchSuggestions($q, $count)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
$q = "q_example"; // string | 
$count = 1.2; // double | 

try {
    $result = $api_instance->searchSuggestions($q, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchSuggestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  |
 **count** | **double**|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

