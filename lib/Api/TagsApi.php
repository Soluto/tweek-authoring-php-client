<?php
/**
 * TagsApi
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
 * TagsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TagsApi
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
     * @return TagsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation listTags
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string[]
     */
    public function listTags()
    {
        list($response) = $this->listTagsWithHttpInfo();
        return $response;
    }

    /**
     * Operation listTagsWithHttpInfo
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listTagsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/tags";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string[]',
                '/tags'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation saveTags
     *
     * @param string $author_name  (required)
     * @param string $author_email  (required)
     * @param \Swagger\Client\Model\JsonValue $tags_to_save  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function saveTags($author_name, $author_email, $tags_to_save)
    {
        list($response) = $this->saveTagsWithHttpInfo($author_name, $author_email, $tags_to_save);
        return $response;
    }

    /**
     * Operation saveTagsWithHttpInfo
     *
     * @param string $author_name  (required)
     * @param string $author_email  (required)
     * @param \Swagger\Client\Model\JsonValue $tags_to_save  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveTagsWithHttpInfo($author_name, $author_email, $tags_to_save)
    {
        // verify the required parameter 'author_name' is set
        if ($author_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $author_name when calling saveTags');
        }
        // verify the required parameter 'author_email' is set
        if ($author_email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $author_email when calling saveTags');
        }
        // verify the required parameter 'tags_to_save' is set
        if ($tags_to_save === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tags_to_save when calling saveTags');
        }
        // parse inputs
        $resourcePath = "/tags";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/html']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($author_name !== null) {
            $queryParams['author.name'] = $this->apiClient->getSerializer()->toQueryValue($author_name);
        }
        // query params
        if ($author_email !== null) {
            $queryParams['author.email'] = $this->apiClient->getSerializer()->toQueryValue($author_email);
        }
        // body params
        $_tempBody = null;
        if (isset($tags_to_save)) {
            $_tempBody = $tags_to_save;
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
                '/tags'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
