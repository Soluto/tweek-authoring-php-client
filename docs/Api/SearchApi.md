# Swagger\Client\SearchApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSearchIndex**](SearchApi.md#getsearchindex) | **GET** /search-index | 
[**search**](SearchApi.md#search) | **GET** /search | 
[**getSuggestions**](SearchApi.md#getsuggestions) | **GET** /suggestions | 


# **getSearchIndex**
> object getSearchIndex()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();

try {
    $result = $api_instance->getSearchIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearchIndex: ', $e->getMessage(), PHP_EOL;
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

# **search**
> string[] search($q, $count)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
$q = "q_example"; // string | 
$count = 1.2; // double | 

try {
    $result = $api_instance->search($q, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
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

# **getSuggestions**
> string[] getSuggestions($q, $count)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SearchApi();
$q = "q_example"; // string | 
$count = 1.2; // double | 

try {
    $result = $api_instance->getSuggestions($q, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSuggestions: ', $e->getMessage(), PHP_EOL;
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

