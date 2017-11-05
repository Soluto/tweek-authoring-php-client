# Swagger\Client\KeysApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keysDeleteKey**](KeysApi.md#keysDeleteKey) | **DELETE** /key | 
[**keysGetAllKeys**](KeysApi.md#keysGetAllKeys) | **GET** /keys | 
[**keysGetAllManifests**](KeysApi.md#keysGetAllManifests) | **GET** /manifests | 
[**keysGetDependents**](KeysApi.md#keysGetDependents) | **GET** /dependent | 
[**keysGetKey**](KeysApi.md#keysGetKey) | **GET** /key | 
[**keysGetKeyRevisionHistory**](KeysApi.md#keysGetKeyRevisionHistory) | **GET** /revision-history | 
[**keysGetManifest**](KeysApi.md#keysGetManifest) | **GET** /manifest | 
[**keysGetRevision**](KeysApi.md#keysGetRevision) | **GET** /revision | 
[**keysUpdateKey**](KeysApi.md#keysUpdateKey) | **PUT** /key | 


# **keysDeleteKey**
> string keysDeleteKey($key_path, $author_name, $author_email)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 

try {
    $result = $api_instance->keysDeleteKey($key_path, $author_name, $author_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysDeleteKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_path** | **string**|  |
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

# **keysGetAllKeys**
> string[] keysGetAllKeys()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();

try {
    $result = $api_instance->keysGetAllKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGetAllKeys: ', $e->getMessage(), PHP_EOL;
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

# **keysGetAllManifests**
> object[] keysGetAllManifests()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();

try {
    $result = $api_instance->keysGetAllManifests();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGetAllManifests: ', $e->getMessage(), PHP_EOL;
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

# **keysGetDependents**
> object keysGetDependents($key_path)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 

try {
    $result = $api_instance->keysGetDependents($key_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGetDependents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_path** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysGetKey**
> object keysGetKey($key_path, $revision)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$revision = "revision_example"; // string | 

try {
    $result = $api_instance->keysGetKey($key_path, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_path** | **string**|  |
 **revision** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysGetKeyRevisionHistory**
> object[] keysGetKeyRevisionHistory($key_path, $since)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$since = "since_example"; // string | 

try {
    $result = $api_instance->keysGetKeyRevisionHistory($key_path, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGetKeyRevisionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_path** | **string**|  |
 **since** | **string**|  |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysGetManifest**
> object keysGetManifest($key_path, $revision)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$revision = "revision_example"; // string | 

try {
    $result = $api_instance->keysGetManifest($key_path, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGetManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_path** | **string**|  |
 **revision** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysGetRevision**
> string keysGetRevision()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();

try {
    $result = $api_instance->keysGetRevision();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGetRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysUpdateKey**
> string keysUpdateKey($key_path, $author_name, $author_email, $value)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$value = new \Swagger\Client\Model\KeyUpdateModel(); // \Swagger\Client\Model\KeyUpdateModel | 

try {
    $result = $api_instance->keysUpdateKey($key_path, $author_name, $author_email, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysUpdateKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_path** | **string**|  |
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **value** | [**\Swagger\Client\Model\KeyUpdateModel**](../Model/KeyUpdateModel.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

