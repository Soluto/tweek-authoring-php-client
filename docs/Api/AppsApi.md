# Swagger\Client\AppsApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsCreateApp**](AppsApi.md#appsCreateApp) | **POST** /apps | 


# **appsCreateApp**
> \Swagger\Client\Model\AppCreationResponseModel appsCreateApp($author_name, $author_email, $new_app_model)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$new_app_model = new \Swagger\Client\Model\AppCreationRequestModel(); // \Swagger\Client\Model\AppCreationRequestModel | 

try {
    $result = $api_instance->appsCreateApp($author_name, $author_email, $new_app_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsCreateApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **new_app_model** | [**\Swagger\Client\Model\AppCreationRequestModel**](../Model/AppCreationRequestModel.md)|  |

### Return type

[**\Swagger\Client\Model\AppCreationResponseModel**](../Model/AppCreationResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

