# Swagger\Client\TagsApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTags**](TagsApi.md#listtags) | **GET** /tags | 
[**saveTags**](TagsApi.md#savetags) | **PUT** /tags | 


# **listTags**
> string[] listTags()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagsApi();

try {
    $result = $api_instance->listTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveTags**
> saveTags($author_name, $author_email, $tags_to_save)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagsApi();
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$tags_to_save = new \Swagger\Client\Model\JsonValue(); // \Swagger\Client\Model\JsonValue | 

try {
    $api_instance->saveTags($author_name, $author_email, $tags_to_save);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->saveTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **tags_to_save** | [**\Swagger\Client\Model\JsonValue**](../Model/JsonValue.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

