<?php
/**
 * AlmanaxApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * dofusdude
 *
 * # Open Ankama Developer Community The all-in-one toolbelt for your next Ankama related project.  ## Versions - [Dofus 2](https://docs.dofusdu.de/dofus2/) - [Dofus 3](https://docs.dofusdu.de/dofus3/)   - v1 [latest] (you are here)   ## Client SDKs - [Javascript](https://github.com/dofusdude/dofusdude-js) `npm i dofusdude-js --save` - [Typescript](https://github.com/dofusdude/dofusdude-ts) `npm i dofusdude-ts --save` - [Go](https://github.com/dofusdude/dodugo) `go get -u github.com/dofusdude/dodugo` - [Python](https://github.com/dofusdude/dofusdude-py) `pip install dofusdude` - [Java](https://github.com/dofusdude/dofusdude-java) Maven with GitHub packages setup  Everything, including this site, is generated out of the [Docs Repo](https://github.com/dofusdude/api-docs). Consider it the Single Source of Truth. If there is a problem with the SDKs, create an issue there.  Your favorite language is missing? Please let me know!  # Main Features - 🥷 **Seamless Auto-Update** load data in the background when a new Dofus version is released and serving it within 10 minutes with atomic data source switching. No downtime and no effects for the user, just always up-to-date.  - ⚡ **Blazingly Fast** all data in-memory, aggressive caching over short time spans, HTTP/2 multiplexing, written in Go, optimized for low latency, hosted on bare metal in 🇩🇪.  - 📨 **Almanax Discord Integration** Use the endpoints as a dev or the official [Web Client](https://discord.dofusdude.com) as a user.  - 🩸 **Dofus 3 Beta** from stable to bleeding edge by replacing /dofus3 with /dofus3beta.  - 🗣️ **Multilingual** supporting _en_, _fr_, _es_, _pt_, _de_.  - 🧠 **Search by Relevance** allowing typos in name and description, handled by language specific text analysis and indexing.  - 🕵️ **Official Sources** generated from actual data from the game.  ... and much more on the Roadmap on my [Discord](https://discord.gg/3EtHskZD8h).
 *
 * The version of the OpenAPI document: 1.0.0-rc.4
 * Contact: stelzo@steado.de
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * AlmanaxApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AlmanaxApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getAlmanaxDate' => [
            'application/json',
        ],
        'getAlmanaxRange' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAlmanaxDate
     *
     * Single Almanax Date
     *
     * @param  string $language code (required)
     * @param  \DateTime $date yyyy-mm-dd (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Almanax
     */
    public function getAlmanaxDate($language, $date, string $contentType = self::contentTypes['getAlmanaxDate'][0])
    {
        list($response) = $this->getAlmanaxDateWithHttpInfo($language, $date, $contentType);
        return $response;
    }

    /**
     * Operation getAlmanaxDateWithHttpInfo
     *
     * Single Almanax Date
     *
     * @param  string $language code (required)
     * @param  \DateTime $date yyyy-mm-dd (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Almanax, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAlmanaxDateWithHttpInfo($language, $date, string $contentType = self::contentTypes['getAlmanaxDate'][0])
    {
        $request = $this->getAlmanaxDateRequest($language, $date, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\Almanax' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\Almanax' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Almanax', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\OpenAPI\Client\Model\Almanax';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\OpenAPI\Client\Model\Almanax',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAlmanaxDateAsync
     *
     * Single Almanax Date
     *
     * @param  string $language code (required)
     * @param  \DateTime $date yyyy-mm-dd (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAlmanaxDateAsync($language, $date, string $contentType = self::contentTypes['getAlmanaxDate'][0])
    {
        return $this->getAlmanaxDateAsyncWithHttpInfo($language, $date, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAlmanaxDateAsyncWithHttpInfo
     *
     * Single Almanax Date
     *
     * @param  string $language code (required)
     * @param  \DateTime $date yyyy-mm-dd (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAlmanaxDateAsyncWithHttpInfo($language, $date, string $contentType = self::contentTypes['getAlmanaxDate'][0])
    {
        $returnType = '\OpenAPI\Client\Model\Almanax';
        $request = $this->getAlmanaxDateRequest($language, $date, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAlmanaxDate'
     *
     * @param  string $language code (required)
     * @param  \DateTime $date yyyy-mm-dd (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAlmanaxDateRequest($language, $date, string $contentType = self::contentTypes['getAlmanaxDate'][0])
    {

        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling getAlmanaxDate'
            );
        }

        // verify the required parameter 'date' is set
        if ($date === null || (is_array($date) && count($date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date when calling getAlmanaxDate'
            );
        }


        $resourcePath = '/dofus2/{language}/almanax/{date}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($language !== null) {
            $resourcePath = str_replace(
                '{' . 'language' . '}',
                ObjectSerializer::toPathValue($language),
                $resourcePath
            );
        }
        // path params
        if ($date !== null) {
            $resourcePath = str_replace(
                '{' . 'date' . '}',
                ObjectSerializer::toPathValue($date),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAlmanaxRange
     *
     * Almanax Range
     *
     * @param  string $language code (required)
     * @param  string $filter_bonus_type ids from meta/{language}/almanax/bonuses (optional)
     * @param  \DateTime $range_from yyyy-mm-dd (optional)
     * @param  \DateTime $range_to yyyy-mm-dd (optional)
     * @param  int $range_size size of the returned range (optional)
     * @param  string $timezone determine what the current time is. If you live in Brazil, \&quot;today\&quot; will be hours apart from Paris. Use your timezone to get results relative to your location. (optional, default to 'Europe/Paris')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxRange'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Almanax[]
     */
    public function getAlmanaxRange($language, $filter_bonus_type = null, $range_from = null, $range_to = null, $range_size = null, $timezone = 'Europe/Paris', string $contentType = self::contentTypes['getAlmanaxRange'][0])
    {
        list($response) = $this->getAlmanaxRangeWithHttpInfo($language, $filter_bonus_type, $range_from, $range_to, $range_size, $timezone, $contentType);
        return $response;
    }

    /**
     * Operation getAlmanaxRangeWithHttpInfo
     *
     * Almanax Range
     *
     * @param  string $language code (required)
     * @param  string $filter_bonus_type ids from meta/{language}/almanax/bonuses (optional)
     * @param  \DateTime $range_from yyyy-mm-dd (optional)
     * @param  \DateTime $range_to yyyy-mm-dd (optional)
     * @param  int $range_size size of the returned range (optional)
     * @param  string $timezone determine what the current time is. If you live in Brazil, \&quot;today\&quot; will be hours apart from Paris. Use your timezone to get results relative to your location. (optional, default to 'Europe/Paris')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxRange'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Almanax[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAlmanaxRangeWithHttpInfo($language, $filter_bonus_type = null, $range_from = null, $range_to = null, $range_size = null, $timezone = 'Europe/Paris', string $contentType = self::contentTypes['getAlmanaxRange'][0])
    {
        $request = $this->getAlmanaxRangeRequest($language, $filter_bonus_type, $range_from, $range_to, $range_size, $timezone, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\Almanax[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\Almanax[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Almanax[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\OpenAPI\Client\Model\Almanax[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\OpenAPI\Client\Model\Almanax[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAlmanaxRangeAsync
     *
     * Almanax Range
     *
     * @param  string $language code (required)
     * @param  string $filter_bonus_type ids from meta/{language}/almanax/bonuses (optional)
     * @param  \DateTime $range_from yyyy-mm-dd (optional)
     * @param  \DateTime $range_to yyyy-mm-dd (optional)
     * @param  int $range_size size of the returned range (optional)
     * @param  string $timezone determine what the current time is. If you live in Brazil, \&quot;today\&quot; will be hours apart from Paris. Use your timezone to get results relative to your location. (optional, default to 'Europe/Paris')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAlmanaxRangeAsync($language, $filter_bonus_type = null, $range_from = null, $range_to = null, $range_size = null, $timezone = 'Europe/Paris', string $contentType = self::contentTypes['getAlmanaxRange'][0])
    {
        return $this->getAlmanaxRangeAsyncWithHttpInfo($language, $filter_bonus_type, $range_from, $range_to, $range_size, $timezone, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAlmanaxRangeAsyncWithHttpInfo
     *
     * Almanax Range
     *
     * @param  string $language code (required)
     * @param  string $filter_bonus_type ids from meta/{language}/almanax/bonuses (optional)
     * @param  \DateTime $range_from yyyy-mm-dd (optional)
     * @param  \DateTime $range_to yyyy-mm-dd (optional)
     * @param  int $range_size size of the returned range (optional)
     * @param  string $timezone determine what the current time is. If you live in Brazil, \&quot;today\&quot; will be hours apart from Paris. Use your timezone to get results relative to your location. (optional, default to 'Europe/Paris')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAlmanaxRangeAsyncWithHttpInfo($language, $filter_bonus_type = null, $range_from = null, $range_to = null, $range_size = null, $timezone = 'Europe/Paris', string $contentType = self::contentTypes['getAlmanaxRange'][0])
    {
        $returnType = '\OpenAPI\Client\Model\Almanax[]';
        $request = $this->getAlmanaxRangeRequest($language, $filter_bonus_type, $range_from, $range_to, $range_size, $timezone, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAlmanaxRange'
     *
     * @param  string $language code (required)
     * @param  string $filter_bonus_type ids from meta/{language}/almanax/bonuses (optional)
     * @param  \DateTime $range_from yyyy-mm-dd (optional)
     * @param  \DateTime $range_to yyyy-mm-dd (optional)
     * @param  int $range_size size of the returned range (optional)
     * @param  string $timezone determine what the current time is. If you live in Brazil, \&quot;today\&quot; will be hours apart from Paris. Use your timezone to get results relative to your location. (optional, default to 'Europe/Paris')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAlmanaxRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAlmanaxRangeRequest($language, $filter_bonus_type = null, $range_from = null, $range_to = null, $range_size = null, $timezone = 'Europe/Paris', string $contentType = self::contentTypes['getAlmanaxRange'][0])
    {

        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling getAlmanaxRange'
            );
        }




        if ($range_size !== null && $range_size > 370) {
            throw new \InvalidArgumentException('invalid value for "$range_size" when calling AlmanaxApi.getAlmanaxRange, must be smaller than or equal to 370.');
        }
        if ($range_size !== null && $range_size < -1) {
            throw new \InvalidArgumentException('invalid value for "$range_size" when calling AlmanaxApi.getAlmanaxRange, must be bigger than or equal to -1.');
        }
        


        $resourcePath = '/dofus2/{language}/almanax';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_bonus_type,
            'filter[bonus_type]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $range_from,
            'range[from]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $range_to,
            'range[to]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $range_size,
            'range[size]', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timezone,
            'timezone', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($language !== null) {
            $resourcePath = str_replace(
                '{' . 'language' . '}',
                ObjectSerializer::toPathValue($language),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
