# Swagger\Client\KeysApi

All URIs are relative to *https://tweek-authoring/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteKey**](KeysApi.md#deleteKey) | **DELETE** /key | 
[**listKeys**](KeysApi.md#listKeys) | **GET** /keys | 
[**listManifests**](KeysApi.md#listManifests) | **GET** /manifests | 
[**getDependents**](KeysApi.md#getDependents) | **GET** /dependent | 
[**getKey**](KeysApi.md#getKey) | **GET** /key | 
[**getKeyRevisionHistory**](KeysApi.md#getKeyRevisionHistory) | **GET** /revision-history | 
[**getManifest**](KeysApi.md#getManifest) | **GET** /manifest | 
[**getRevision**](KeysApi.md#getRevision) | **GET** /revision | 
[**updateKey**](KeysApi.md#updateKey) | **PUT** /key | 


# **deleteKey**
> string deleteKey($key_path, $author_name, $author_email)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 

try {
    $result = $api_instance->deleteKey($key_path, $author_name, $author_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->deleteKey: ', $e->getMessage(), PHP_EOL;
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

# **listKeys**
> string[] listKeys()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();

try {
    $result = $api_instance->listKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->listKeys: ', $e->getMessage(), PHP_EOL;
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

# **listManifests**
> object[] listManifests()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();

try {
    $result = $api_instance->listManifests();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->listManifests: ', $e->getMessage(), PHP_EOL;
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

# **getDependents**
> object getDependents($key_path)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 

try {
    $result = $api_instance->getDependents($key_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->getDependents: ', $e->getMessage(), PHP_EOL;
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

# **getKey**
> object getKey($key_path, $revision)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$revision = "revision_example"; // string | 

try {
    $result = $api_instance->getKey($key_path, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->getKey: ', $e->getMessage(), PHP_EOL;
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

# **getKeyRevisionHistory**
> object[] getKeyRevisionHistory($key_path, $since)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$since = "since_example"; // string | 

try {
    $result = $api_instance->getKeyRevisionHistory($key_path, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->getKeyRevisionHistory: ', $e->getMessage(), PHP_EOL;
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

# **getManifest**
> object getManifest($key_path, $revision)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$revision = "revision_example"; // string | 

try {
    $result = $api_instance->getManifest($key_path, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->getManifest: ', $e->getMessage(), PHP_EOL;
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

# **getRevision**
> string getRevision()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();

try {
    $result = $api_instance->getRevision();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->getRevision: ', $e->getMessage(), PHP_EOL;
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

# **updateKey**
> string updateKey($key_path, $author_name, $author_email, $new_key_model)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\KeysApi();
$key_path = "key_path_example"; // string | 
$author_name = "author_name_example"; // string | 
$author_email = "author_email_example"; // string | 
$new_key_model = new \Swagger\Client\Model\KeyUpdateModel(); // \Swagger\Client\Model\KeyUpdateModel | 

try {
    $result = $api_instance->updateKey($key_path, $author_name, $author_email, $new_key_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->updateKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_path** | **string**|  |
 **author_name** | **string**|  |
 **author_email** | **string**|  |
 **new_key_model** | [**\Swagger\Client\Model\KeyUpdateModel**](../Model/KeyUpdateModel.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

