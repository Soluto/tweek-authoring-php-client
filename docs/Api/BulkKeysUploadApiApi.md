# Swagger\Client\BulkKeysUploadApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkKeysUpload**](BulkKeysUploadApi.md#bulkKeysUpload) | **PUT** /bulk-keys-upload | 


# **bulkKeysUpload**
> bulkKeysUpload($author_name, $author_email, $bulk)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BulkKeysUploadApi();
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$bulk = "/path/to/file.txt"; // \SplFileObject | 

try {
    $api_instance->bulkKeysUpload($author_name, $author_email, $bulk);
} catch (Exception $e) {
    echo 'Exception when calling BulkKeysUploadApi->bulkKeysUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **bulk** | **\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

