<?php
/**
 * BulkkeysuploadApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Authoring API
 *
 * API used to query and manipulate Tweek data in git
 *
 * OpenAPI spec version: 0.2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * BulkkeysuploadApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkkeysuploadApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return BulkkeysuploadApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation bulkKeysUploadBulkKeysUpload
     *
     * @param string $author_name  (required)
     * @param string $author_email  (required)
     * @param \SplFileObject $bulk  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function bulkKeysUploadBulkKeysUpload($author_name, $author_email, $bulk)
    {
        list($response) = $this->bulkKeysUploadBulkKeysUploadWithHttpInfo($author_name, $author_email, $bulk);
        return $response;
    }

    /**
     * Operation bulkKeysUploadBulkKeysUploadWithHttpInfo
     *
     * @param string $author_name  (required)
     * @param string $author_email  (required)
     * @param \SplFileObject $bulk  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkKeysUploadBulkKeysUploadWithHttpInfo($author_name, $author_email, $bulk)
    {
        // verify the required parameter 'author_name' is set
        if ($author_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $author_name when calling bulkKeysUploadBulkKeysUpload');
        }
        // verify the required parameter 'author_email' is set
        if ($author_email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $author_email when calling bulkKeysUploadBulkKeysUpload');
        }
        // verify the required parameter 'bulk' is set
        if ($bulk === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bulk when calling bulkKeysUploadBulkKeysUpload');
        }
        // parse inputs
        $resourcePath = "/bulk-keys-upload";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/html']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // query params
        if ($author_name !== null) {
            $queryParams['author.name'] = $this->apiClient->getSerializer()->toQueryValue($author_name);
        }
        // query params
        if ($author_email !== null) {
            $queryParams['author.email'] = $this->apiClient->getSerializer()->toQueryValue($author_email);
        }
        // form params
        if ($bulk !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['bulk'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($bulk));
            } else {
                $formParams['bulk'] = '@' . $this->apiClient->getSerializer()->toFormValue($bulk);
            }
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/bulk-keys-upload'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
