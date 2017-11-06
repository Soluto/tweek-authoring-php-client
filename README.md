# tweek-authoring-php-client
API used to query and manipulate Tweek data in git

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.2.2
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/tweek-authoring-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://tweek-authoring/api/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppsApi* | [**appsCreateApp**](docs/Api/AppsApi.md#appscreateapp) | **POST** /apps | 
*BulkkeysuploadApi* | [**bulkKeysUploadBulkKeysUpload**](docs/Api/BulkkeysuploadApi.md#bulkkeysuploadbulkkeysupload) | **PUT** /bulk-keys-upload | 
*KeysApi* | [**keysDeleteKey**](docs/Api/KeysApi.md#keysdeletekey) | **DELETE** /key | 
*KeysApi* | [**keysGetAllKeys**](docs/Api/KeysApi.md#keysgetallkeys) | **GET** /keys | 
*KeysApi* | [**keysGetAllManifests**](docs/Api/KeysApi.md#keysgetallmanifests) | **GET** /manifests | 
*KeysApi* | [**keysGetDependents**](docs/Api/KeysApi.md#keysgetdependents) | **GET** /dependent | 
*KeysApi* | [**keysGetKey**](docs/Api/KeysApi.md#keysgetkey) | **GET** /key | 
*KeysApi* | [**keysGetKeyRevisionHistory**](docs/Api/KeysApi.md#keysgetkeyrevisionhistory) | **GET** /revision-history | 
*KeysApi* | [**keysGetManifest**](docs/Api/KeysApi.md#keysgetmanifest) | **GET** /manifest | 
*KeysApi* | [**keysGetRevision**](docs/Api/KeysApi.md#keysgetrevision) | **GET** /revision | 
*KeysApi* | [**keysUpdateKey**](docs/Api/KeysApi.md#keysupdatekey) | **PUT** /key | 
*SchemaApi* | [**schemaAddIdentity**](docs/Api/SchemaApi.md#schemaaddidentity) | **POST** /schemas/{identityType} | 
*SchemaApi* | [**schemaDeleteIdentity**](docs/Api/SchemaApi.md#schemadeleteidentity) | **DELETE** /schemas/{identityType} | 
*SchemaApi* | [**schemaGetSchemas**](docs/Api/SchemaApi.md#schemagetschemas) | **GET** /schemas | 
*SchemaApi* | [**schemaPatchIdentity**](docs/Api/SchemaApi.md#schemapatchidentity) | **PATCH** /schemas/{identityType} | 
*SearchApi* | [**searchGetSearchIndex**](docs/Api/SearchApi.md#searchgetsearchindex) | **GET** /search-index | 
*SearchApi* | [**searchSearch**](docs/Api/SearchApi.md#searchsearch) | **GET** /search | 
*SearchApi* | [**searchSuggestions**](docs/Api/SearchApi.md#searchsuggestions) | **GET** /suggestions | 
*TagsApi* | [**tagsGetTags**](docs/Api/TagsApi.md#tagsgettags) | **GET** /tags | 
*TagsApi* | [**tagsSaveTags**](docs/Api/TagsApi.md#tagssavetags) | **PUT** /tags | 


## Documentation For Models

 - [AppCreationRequestModel](docs/Model/AppCreationRequestModel.md)
 - [AppCreationResponseModel](docs/Model/AppCreationResponseModel.md)
 - [JsonValue](docs/Model/JsonValue.md)
 - [KeyUpdateModel](docs/Model/KeyUpdateModel.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




