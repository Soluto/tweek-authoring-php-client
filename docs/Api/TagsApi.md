# Swagger\Client\TagsApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagsGetTags**](TagsApi.md#tagsGetTags) | **GET** /tags | 
[**tagsSaveTags**](TagsApi.md#tagsSaveTags) | **PUT** /tags | 


# **tagsGetTags**
> string[] tagsGetTags()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagsApi();

try {
    $result = $api_instance->tagsGetTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsGetTags: ', $e->getMessage(), PHP_EOL;
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

# **tagsSaveTags**
> tagsSaveTags($author_name, $author_email, $tags_to_save)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagsApi();
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$tags_to_save = new \Swagger\Client\Model\JsonValue(); // \Swagger\Client\Model\JsonValue | 

try {
    $api_instance->tagsSaveTags($author_name, $author_email, $tags_to_save);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsSaveTags: ', $e->getMessage(), PHP_EOL;
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

