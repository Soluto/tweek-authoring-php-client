# Swagger\Client\SchemaApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addIdentity**](SchemaApi.md#addidentity) | **POST** /schemas/{identityType} | 
[**deleteIdentity**](SchemaApi.md#deleteidentity) | **DELETE** /schemas/{identityType} | 
[**listSchemas**](SchemaApi.md#listschemas) | **GET** /schemas | 
[**patchIdentity**](SchemaApi.md#patchidentity) | **PATCH** /schemas/{identityType} | 


# **addIdentity**
> string addIdentity($identity_type, $author_name, $author_email, $value)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();
$identity_type = "identity_type_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$value = new \Swagger\Client\Model\JsonValue(); // \Swagger\Client\Model\JsonValue | 

try {
    $result = $api_instance->addIdentity($identity_type, $author_name, $author_email, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->addIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_type** | **string**|  |
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **value** | [**\Swagger\Client\Model\JsonValue**](../Model/JsonValue.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentity**
> string deleteIdentity($identity_type, $author_name, $author_email)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();
$identity_type = "identity_type_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 

try {
    $result = $api_instance->deleteIdentity($identity_type, $author_name, $author_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->deleteIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_type** | **string**|  |
 **author_name** | **string**|  |
 **author_email** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSchemas**
> object[] listSchemas()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();

try {
    $result = $api_instance->listSchemas();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->listSchemas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchIdentity**
> string patchIdentity($identity_type, $author_name, $author_email, $patch)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();
$identity_type = "identity_type_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$patch = new \Swagger\Client\Model\JsonValue(); // \Swagger\Client\Model\JsonValue | 

try {
    $result = $api_instance->patchIdentity($identity_type, $author_name, $author_email, $patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->patchIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_type** | **string**|  |
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **patch** | [**\Swagger\Client\Model\JsonValue**](../Model/JsonValue.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

