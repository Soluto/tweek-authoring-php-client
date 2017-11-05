# Swagger\Client\SchemaApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**schemaAddIdentity**](SchemaApi.md#schemaAddIdentity) | **POST** /schemas/{identityType} | 
[**schemaDeleteIdentity**](SchemaApi.md#schemaDeleteIdentity) | **DELETE** /schemas/{identityType} | 
[**schemaGetSchemas**](SchemaApi.md#schemaGetSchemas) | **GET** /schemas | 
[**schemaPatchIdentity**](SchemaApi.md#schemaPatchIdentity) | **PATCH** /schemas/{identityType} | 


# **schemaAddIdentity**
> string schemaAddIdentity($identity_type, $author_name, $author_email, $value)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();
$identity_type = "identity_type_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$value = NULL; // object | 

try {
    $result = $api_instance->schemaAddIdentity($identity_type, $author_name, $author_email, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaAddIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_type** | **string**|  |
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **value** | **object**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schemaDeleteIdentity**
> string schemaDeleteIdentity($identity_type, $author_name, $author_email)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();
$identity_type = "identity_type_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 

try {
    $result = $api_instance->schemaDeleteIdentity($identity_type, $author_name, $author_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaDeleteIdentity: ', $e->getMessage(), PHP_EOL;
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

# **schemaGetSchemas**
> object[] schemaGetSchemas()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();

try {
    $result = $api_instance->schemaGetSchemas();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaGetSchemas: ', $e->getMessage(), PHP_EOL;
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

# **schemaPatchIdentity**
> string schemaPatchIdentity($identity_type, $author_name, $author_email, $patch)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SchemaApi();
$identity_type = "identity_type_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$patch = NULL; // object | 

try {
    $result = $api_instance->schemaPatchIdentity($identity_type, $author_name, $author_email, $patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaPatchIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_type** | **string**|  |
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **patch** | **object**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

