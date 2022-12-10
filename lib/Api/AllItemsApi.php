<?php
/**
 * AllItemsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Dofusdude
 *
 * # A project for you - the developer. The free, always-up-to-date, low-latency, insert-buzzword-here Ankama API for your next cool project!  ## Client SDKs Don't write types or functions yourself - I already (kinda) did! 😉 - [Javascript](https://github.com/dofusdude/dofusdude-js) npm i dofusdude-js --save - [Typescript](https://github.com/dofusdude/dofusdude-ts) npm i dofusdude-ts --save - [Go](https://github.com/dofusdude/dodugo) go get -u github.com/dofusdude/dodugo - [Python](https://github.com/dofusdude/dofusdude-py) pip install dofusdude - [PHP](https://github.com/dofusdude/dofusdude-php)  Everything, including this site, is generated out of the [Docs Repo](https://github.com/dofusdude/api-docs). Consider it the Single Source of Truth. If there is a problem with the SDKs, create an issue there.  Your favorite language is missing? Please let me know!  # Main Features - 🥷 **Seamless Auto-Update** load data in the background when a new Dofus version is released and serving it within 2 minutes with atomic data source switching. No downtime and no effects for the user, just always up-to-date.  - ⚡ **Blazingly Fast** all data in-memory, aggressive caching over short time spans, HTTP/2 multiplexing, written in Go, optimized for low latency, hosted on bare metal in 🇩🇪.  - 📨 **Discord Integration** Ankama related Twitter, RSS and Almanax feeds to post to Discord servers with advanced features like filters or mentions. Use the endpoints as a dev or the official [Web Client](https://discord.dofusdude.com) as a user.  - 🩸 **Dofus 2 Beta** from stable to bleeding edge by replacing /dofus2 with /dofus2beta.  - 🗣️ **Multilingual** supporting _en_, _fr_, _es_, _pt_ including the dropped languages from the Dofus website _de_ and _it_.  - 🧠 **Search by Relevance** allowing typos in name and description, handled by language specific text analysis and indexing by the powerful [Meilisearch](https://www.meilisearch.com) written in Rust.  - 🕵️ **Complete** actual data from the game including items invisible to the encyclopedia like quest items.  - 🖼️ **HD Images** rendering vector graphics into PNGs up to 800x800 px in the background.   ## Current state - Weapons ✅ - Equipment ✅ - Sets ✅ - Resources ✅ - Consumables ✅ - Pets ✅ - Mounts ✅ - Cosmetics/Ceremonial Items ✅ - Harnesses ✅ - Quest Items ✅ - Almanax ✅ - Monsters ❌ - Spells ❌  ... and much more on the Roadmap on my Discord.   ## Deploy now. Use forever. Everything you see here on this site, you can use now and forever. Updates could introduce new fields, new paths or parameter but never break backwards compatibility, so no field or parameter will be deleted.  There is one exception! **The API will _always_ choose being up-to-date over everything else**. So if Ankama decides to drop languages from the game like they did with their website, the API will loose support for them, too.  ## Only the beginning... 🤯 I want this project to be useful and not just add plain GET-categories no one needs.  There is a long list of features I want to add (see the Roadmap on my [Discord](https://discord.gg/3EtHskZD8h)). But they are all focussed on you, the developers. So please let me know what you need. I will change the list based on demand.  # Get started! 🥳 Scroll down and try it for yourself!  Or see how these other awesome projects use it: - [KaellyBot](https://github.com/Kaysoro/KaellyBot) by Kaysoro - [Dofus Craftlist](https://dofuscraftlist-dev.netlify.app) by Lystina - [AlmanaxApp](https://almanaxapp.netlify.app) by Lystina  I highly recommend using the SDKs for quick results. I use them myself for microservices for the API.  ## Thank you! I highly welcome everyone on my [Discord](https://discord.gg/3EtHskZD8h) to just talk about projects and use cases or give feedback of any kind.  The servers have a fixed monthly cost to provide very fast responses. If you want to help me keeping them running or simply  donate, consider becoming a [GitHub Sponsor](https://github.com/sponsors/dofusdude).
 *
 * The version of the OpenAPI document: 0.7.1
 * Contact: stelzo@steado.de
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * AllItemsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AllItemsApi
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
        'getItemsAllSearch' => [
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
        $this->config = $config ?: new Configuration();
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
     * Operation getItemsAllSearch
     *
     * Search All Items
     *
     * @param  string $language a valid language code (required)
     * @param  string $game game (required)
     * @param  string $query case sensitive search query (required)
     * @param  string $filter_type_name only results with the translated type name across all item_subtypes (optional)
     * @param  int $filter_min_level only results which level is equal or above this value (optional)
     * @param  int $filter_max_level only results which level is equal or below this value (optional)
     * @param  int $limit maximum number of returned results (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getItemsAllSearch'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ItemsListEntryTyped[]
     */
    public function getItemsAllSearch($language, $game, $query, $filter_type_name = null, $filter_min_level = null, $filter_max_level = null, $limit = 8, string $contentType = self::contentTypes['getItemsAllSearch'][0])
    {
        list($response) = $this->getItemsAllSearchWithHttpInfo($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $contentType);
        return $response;
    }

    /**
     * Operation getItemsAllSearchWithHttpInfo
     *
     * Search All Items
     *
     * @param  string $language a valid language code (required)
     * @param  string $game (required)
     * @param  string $query case sensitive search query (required)
     * @param  string $filter_type_name only results with the translated type name across all item_subtypes (optional)
     * @param  int $filter_min_level only results which level is equal or above this value (optional)
     * @param  int $filter_max_level only results which level is equal or below this value (optional)
     * @param  int $limit maximum number of returned results (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getItemsAllSearch'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ItemsListEntryTyped[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemsAllSearchWithHttpInfo($language, $game, $query, $filter_type_name = null, $filter_min_level = null, $filter_max_level = null, $limit = 8, string $contentType = self::contentTypes['getItemsAllSearch'][0])
    {
        $request = $this->getItemsAllSearchRequest($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $contentType);

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

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\ItemsListEntryTyped[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ItemsListEntryTyped[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ItemsListEntryTyped[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ItemsListEntryTyped[]';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ItemsListEntryTyped[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getItemsAllSearchAsync
     *
     * Search All Items
     *
     * @param  string $language a valid language code (required)
     * @param  string $game (required)
     * @param  string $query case sensitive search query (required)
     * @param  string $filter_type_name only results with the translated type name across all item_subtypes (optional)
     * @param  int $filter_min_level only results which level is equal or above this value (optional)
     * @param  int $filter_max_level only results which level is equal or below this value (optional)
     * @param  int $limit maximum number of returned results (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getItemsAllSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemsAllSearchAsync($language, $game, $query, $filter_type_name = null, $filter_min_level = null, $filter_max_level = null, $limit = 8, string $contentType = self::contentTypes['getItemsAllSearch'][0])
    {
        return $this->getItemsAllSearchAsyncWithHttpInfo($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemsAllSearchAsyncWithHttpInfo
     *
     * Search All Items
     *
     * @param  string $language a valid language code (required)
     * @param  string $game (required)
     * @param  string $query case sensitive search query (required)
     * @param  string $filter_type_name only results with the translated type name across all item_subtypes (optional)
     * @param  int $filter_min_level only results which level is equal or above this value (optional)
     * @param  int $filter_max_level only results which level is equal or below this value (optional)
     * @param  int $limit maximum number of returned results (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getItemsAllSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemsAllSearchAsyncWithHttpInfo($language, $game, $query, $filter_type_name = null, $filter_min_level = null, $filter_max_level = null, $limit = 8, string $contentType = self::contentTypes['getItemsAllSearch'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ItemsListEntryTyped[]';
        $request = $this->getItemsAllSearchRequest($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $contentType);

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
     * Create request for operation 'getItemsAllSearch'
     *
     * @param  string $language a valid language code (required)
     * @param  string $game (required)
     * @param  string $query case sensitive search query (required)
     * @param  string $filter_type_name only results with the translated type name across all item_subtypes (optional)
     * @param  int $filter_min_level only results which level is equal or above this value (optional)
     * @param  int $filter_max_level only results which level is equal or below this value (optional)
     * @param  int $limit maximum number of returned results (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getItemsAllSearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getItemsAllSearchRequest($language, $game, $query, $filter_type_name = null, $filter_min_level = null, $filter_max_level = null, $limit = 8, string $contentType = self::contentTypes['getItemsAllSearch'][0])
    {

        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling getItemsAllSearch'
            );
        }
        if (strlen($language) > 2) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling AllItemsApi.getItemsAllSearch, must be smaller than or equal to 2.');
        }
        if (strlen($language) < 2) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling AllItemsApi.getItemsAllSearch, must be bigger than or equal to 2.');
        }
        
        // verify the required parameter 'game' is set
        if ($game === null || (is_array($game) && count($game) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $game when calling getItemsAllSearch'
            );
        }

        // verify the required parameter 'query' is set
        if ($query === null || (is_array($query) && count($query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $query when calling getItemsAllSearch'
            );
        }


        if ($filter_min_level !== null && $filter_min_level > 200) {
            throw new \InvalidArgumentException('invalid value for "$filter_min_level" when calling AllItemsApi.getItemsAllSearch, must be smaller than or equal to 200.');
        }
        if ($filter_min_level !== null && $filter_min_level < 0) {
            throw new \InvalidArgumentException('invalid value for "$filter_min_level" when calling AllItemsApi.getItemsAllSearch, must be bigger than or equal to 0.');
        }
        
        if ($filter_max_level !== null && $filter_max_level > 200) {
            throw new \InvalidArgumentException('invalid value for "$filter_max_level" when calling AllItemsApi.getItemsAllSearch, must be smaller than or equal to 200.');
        }
        if ($filter_max_level !== null && $filter_max_level < 0) {
            throw new \InvalidArgumentException('invalid value for "$filter_max_level" when calling AllItemsApi.getItemsAllSearch, must be bigger than or equal to 0.');
        }
        
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AllItemsApi.getItemsAllSearch, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AllItemsApi.getItemsAllSearch, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/{game}/{language}/items/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $query,
            'query', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_type_name,
            'filter[type_name]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_min_level,
            'filter[min_level]', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter_max_level,
            'filter[max_level]', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
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
        // path params
        if ($game !== null) {
            $resourcePath = str_replace(
                '{' . 'game' . '}',
                ObjectSerializer::toPathValue($game),
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
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
