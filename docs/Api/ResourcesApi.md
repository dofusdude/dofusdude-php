# OpenAPI\Client\ResourcesApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllItemsResourcesList()**](ResourcesApi.md#getAllItemsResourcesList) | **GET** /{game}/v1/{language}/items/resources/all | List All Resources |
| [**getItemsResourceSearch()**](ResourcesApi.md#getItemsResourceSearch) | **GET** /{game}/v1/{language}/items/resources/search | Search Resources |
| [**getItemsResourcesList()**](ResourcesApi.md#getItemsResourcesList) | **GET** /{game}/v1/{language}/items/resources | List Resources |
| [**getItemsResourcesSingle()**](ResourcesApi.md#getItemsResourcesSingle) | **GET** /{game}/v1/{language}/items/resources/{ankama_id} | Single Resources |


## `getAllItemsResourcesList()`

```php
getAllItemsResourcesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_name_id): \OpenAPI\Client\Model\ListItems
```

List All Resources

Retrieve all resource items with one request. This endpoint is just an alias for the a list with disabled pagination (page[size]=-1) and all fields[type] set.  If you want everything unfiltered, delete the other query parameters.  Be careful with testing or (god forbid) using /all in your browser, the returned json is huge and will slow down the browser!  Tip: set the HTTP Header 'Accept-Encoding: gzip' for saving bandwidth. You will need to uncompress it on your end. Example with cURL: ``` curl -sH 'Accept-Encoding: gzip' <api-endpoint> | gunzip - ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_min_level = 160; // int | only results which level is equal or above this value
$filter_max_level = 190; // int | only results which level is equal or below this value
$accept_encoding = 'accept_encoding_example'; // string | optional compression for saving bandwidth
$filter_type_name_id = ["boots"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getAllItemsResourcesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getAllItemsResourcesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **sort_level** | **string**| sort the resulting list by level, default unsorted | [optional] |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |
| **accept_encoding** | **string**| optional compression for saving bandwidth | [optional] |
| **filter_type_name_id** | [**string[]**](../Model/string.md)| multi-filter results with the english type name. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListItems**](../Model/ListItems.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsResourceSearch()`

```php
getItemsResourceSearch($language, $game, $query, $filter_min_level, $filter_max_level, $limit, $filter_type_name_id): \OpenAPI\Client\Model\ListItem[]
```

Search Resources

Search in all names and descriptions of resource items with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$query = snowdew; // string | case sensitive search query
$filter_min_level = 150; // int | only results which level is equal or above this value
$filter_max_level = 200; // int | only results which level is equal or below this value
$limit = 8; // int | maximum number of returned results
$filter_type_name_id = ["plant"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsResourceSearch($language, $game, $query, $filter_min_level, $filter_max_level, $limit, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getItemsResourceSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **query** | **string**| case sensitive search query | |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |
| **limit** | **int**| maximum number of returned results | [optional] [default to 8] |
| **filter_type_name_id** | [**string[]**](../Model/string.md)| multi-filter results with the english type name. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListItem[]**](../Model/ListItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsResourcesList()`

```php
getItemsResourcesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_name_id): \OpenAPI\Client\Model\ListItems
```

List Resources

Retrieve a list of resource items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_min_level = 160; // int | only results which level is equal or above this value
$filter_max_level = 190; // int | only results which level is equal or below this value
$page_size = 10; // int | size of the results from the list. -1 disables pagination and gets all in one response.
$page_number = 1; // int | page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16.
$fields_item = ["recipe"]; // string[] | adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed.
$filter_type_name_id = ["wood"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsResourcesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getItemsResourcesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **sort_level** | **string**| sort the resulting list by level, default unsorted | [optional] |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |
| **page_size** | **int**| size of the results from the list. -1 disables pagination and gets all in one response. | [optional] |
| **page_number** | **int**| page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16. | [optional] |
| **fields_item** | [**string[]**](../Model/string.md)| adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed. | [optional] |
| **filter_type_name_id** | [**string[]**](../Model/string.md)| multi-filter results with the english type name. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListItems**](../Model/ListItems.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsResourcesSingle()`

```php
getItemsResourcesSingle($language, $ankama_id, $game): \OpenAPI\Client\Model\Resource
```

Single Resources

Retrieve a specific resource item with id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$ankama_id = 7295; // int | identifier
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'

try {
    $result = $apiInstance->getItemsResourcesSingle($language, $ankama_id, $game);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getItemsResourcesSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **ankama_id** | **int**| identifier | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |

### Return type

[**\OpenAPI\Client\Model\Resource**](../Model/Resource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
