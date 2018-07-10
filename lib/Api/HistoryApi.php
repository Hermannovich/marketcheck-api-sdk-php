<?php
/**
 * HistoryApi
 * PHP version 5
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketcheck Cars API
 *
 * <b>Access the New, Used and Certified cars inventories for all Car Dealers in US.</b> <br/>The data is sourced from online listings by over 44,000 Car dealers in US. At any time, there are about 6.2M searchable listings (about 1.9M unique VINs) for Used & Certified cars and about 6.6M (about 3.9M unique VINs) New Car listings from all over US. We use this API at the back for our website <a href='https://www.marketcheck.com' target='_blank'>www.marketcheck.com</a> and our Android and iOS mobile apps too.<br/><h5> Few useful links : </h5><ul><li>A quick view of the API and the use cases is depicated <a href='https://portals.marketcheck.com/mcapi/' target='_blank'>here</a></li><li>The Postman collection with various usages of the API is shared here https://www.getpostman.com/collections/2752684ff636cdd7bac2</li></ul>
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace marketcheck\api\sdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use marketcheck\api\sdk\ApiException;
use marketcheck\api\sdk\Configuration;
use marketcheck\api\sdk\HeaderSelector;
use marketcheck\api\sdk\ObjectSerializer;

/**
 * HistoryApi Class Doc Comment
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HistoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation history
     *
     * Get a cars online listing history
     *
     * @param  string $vin The VIN to identify the car to fetch the listing history. Must be a valid 17 char VIN (required)
     * @param  string $api_key The API Authentication Key. Mandatory with all API calls. (optional)
     * @param  string $fields List of fields to fetch, in case the default fields list in the response is to be trimmed down (optional)
     * @param  float $page Page number to fetch the results for the given criteria. Default is 1. (optional)
     *
     * @throws \marketcheck\api\sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \marketcheck\api\sdk\Model\HistoricalListing[]
     */
    public function history($vin, $api_key = null, $fields = null, $page = null)
    {
        list($response) = $this->historyWithHttpInfo($vin, $api_key, $fields, $page);
        return $response;
    }

    /**
     * Operation historyWithHttpInfo
     *
     * Get a cars online listing history
     *
     * @param  string $vin The VIN to identify the car to fetch the listing history. Must be a valid 17 char VIN (required)
     * @param  string $api_key The API Authentication Key. Mandatory with all API calls. (optional)
     * @param  string $fields List of fields to fetch, in case the default fields list in the response is to be trimmed down (optional)
     * @param  float $page Page number to fetch the results for the given criteria. Default is 1. (optional)
     *
     * @throws \marketcheck\api\sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \marketcheck\api\sdk\Model\HistoricalListing[], HTTP status code, HTTP response headers (array of strings)
     */
    public function historyWithHttpInfo($vin, $api_key = null, $fields = null, $page = null)
    {
        $returnType = '\marketcheck\api\sdk\Model\HistoricalListing[]';
        $request = $this->historyRequest($vin, $api_key, $fields, $page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\marketcheck\api\sdk\Model\HistoricalListing[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\marketcheck\api\sdk\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation historyAsync
     *
     * Get a cars online listing history
     *
     * @param  string $vin The VIN to identify the car to fetch the listing history. Must be a valid 17 char VIN (required)
     * @param  string $api_key The API Authentication Key. Mandatory with all API calls. (optional)
     * @param  string $fields List of fields to fetch, in case the default fields list in the response is to be trimmed down (optional)
     * @param  float $page Page number to fetch the results for the given criteria. Default is 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function historyAsync($vin, $api_key = null, $fields = null, $page = null)
    {
        return $this->historyAsyncWithHttpInfo($vin, $api_key, $fields, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation historyAsyncWithHttpInfo
     *
     * Get a cars online listing history
     *
     * @param  string $vin The VIN to identify the car to fetch the listing history. Must be a valid 17 char VIN (required)
     * @param  string $api_key The API Authentication Key. Mandatory with all API calls. (optional)
     * @param  string $fields List of fields to fetch, in case the default fields list in the response is to be trimmed down (optional)
     * @param  float $page Page number to fetch the results for the given criteria. Default is 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function historyAsyncWithHttpInfo($vin, $api_key = null, $fields = null, $page = null)
    {
        $returnType = '\marketcheck\api\sdk\Model\HistoricalListing[]';
        $request = $this->historyRequest($vin, $api_key, $fields, $page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'history'
     *
     * @param  string $vin The VIN to identify the car to fetch the listing history. Must be a valid 17 char VIN (required)
     * @param  string $api_key The API Authentication Key. Mandatory with all API calls. (optional)
     * @param  string $fields List of fields to fetch, in case the default fields list in the response is to be trimmed down (optional)
     * @param  float $page Page number to fetch the results for the given criteria. Default is 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function historyRequest($vin, $api_key = null, $fields = null, $page = null)
    {
        // verify the required parameter 'vin' is set
        if ($vin === null || (is_array($vin) && count($vin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $vin when calling history'
            );
        }

        $resourcePath = '/history/{vin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($api_key !== null) {
            $queryParams['api_key'] = ObjectSerializer::toQueryValue($api_key);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }

        // path params
        if ($vin !== null) {
            $resourcePath = str_replace(
                '{' . 'vin' . '}',
                ObjectSerializer::toPathValue($vin),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
