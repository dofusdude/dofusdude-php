# OpenAPI\Client\ConsumablesApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllItemsConsumablesList()**](ConsumablesApi.md#getAllItemsConsumablesList) | **GET** /{game}/v1/{language}/items/consumables/all | List All Consumables |
| [**getItemsConsumablesList()**](ConsumablesApi.md#getItemsConsumablesList) | **GET** /{game}/v1/{language}/items/consumables | List Consumables |
| [**getItemsConsumablesSearch()**](ConsumablesApi.md#getItemsConsumablesSearch) | **GET** /{game}/v1/{language}/items/consumables/search | Search Consumables |
| [**getItemsConsumablesSingle()**](ConsumablesApi.md#getItemsConsumablesSingle) | **GET** /{game}/v1/{language}/items/consumables/{ankama_id} | Single Consumables |


## `getAllItemsConsumablesList()`

```php
getAllItemsConsumablesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_name_id): \OpenAPI\Client\Model\ListItems
```

List All Consumables

Retrieve all consumable items with one request. This endpoint is just an alias for the a list with disabled pagination (page[size]=-1) and all fields[type] set.  If you want everything unfiltered, delete the other query parameters.  Be careful with testing or (god forbid) using /all in your browser, the returned json is huge and will slow down the browser!  Tip: set the HTTP Header 'Accept-Encoding: gzip' for saving bandwidth. You will need to uncompress it on your end. Example with cURL: ``` curl -sH 'Accept-Encoding: gzip' <api-endpoint> | gunzip - ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConsumablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = asc; // string | sort the resulting list by level, default unsorted
$filter_min_level = 150; // int | only results which level is equal or above this value
$filter_max_level = 180; // int | only results which level is equal or below this value
$accept_encoding = 'accept_encoding_example'; // string | optional compression for saving bandwidth
$filter_type_name_id = ["boots"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getAllItemsConsumablesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumablesApi->getAllItemsConsumablesList: ', $e->getMessage(), PHP_EOL;
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

## `getItemsConsumablesList()`

```php
getItemsConsumablesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_name_id): \OpenAPI\Client\Model\ListItems
```

List Consumables

Retrieve a list of consumable items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConsumablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = asc; // string | sort the resulting list by level, default unsorted
$filter_min_level = 150; // int | only results which level is equal or above this value
$filter_max_level = 180; // int | only results which level is equal or below this value
$page_size = 2; // int | size of the results from the list. -1 disables pagination and gets all in one response.
$page_number = 1; // int | page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16.
$fields_item = ["recipe"]; // string[] | adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed.
$filter_type_name_id = ["chest"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsConsumablesList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumablesApi->getItemsConsumablesList: ', $e->getMessage(), PHP_EOL;
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

## `getItemsConsumablesSearch()`

```php
getItemsConsumablesSearch($language, $game, $query, $filter_min_level, $filter_max_level, $limit, $filter_type_name_id): \OpenAPI\Client\Model\ListItem[]
```

Search Consumables

Search in all names and descriptions of consumable items with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConsumablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$query = Wholewrite; // string | case sensitive search query
$filter_min_level = 1; // int | only results which level is equal or above this value
$filter_max_level = 200; // int | only results which level is equal or below this value
$limit = 8; // int | maximum number of returned results
$filter_type_name_id = ["bread"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsConsumablesSearch($language, $game, $query, $filter_min_level, $filter_max_level, $limit, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumablesApi->getItemsConsumablesSearch: ', $e->getMessage(), PHP_EOL;
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

## `getItemsConsumablesSingle()`

```php
getItemsConsumablesSingle($language, $ankama_id, $game): \OpenAPI\Client\Model\Resource
```

Single Consumables

Retrieve a specific consumable item with id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConsumablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$ankama_id = 17206; // int | identifier
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'

try {
    $result = $apiInstance->getItemsConsumablesSingle($language, $ankama_id, $game);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumablesApi->getItemsConsumablesSingle: ', $e->getMessage(), PHP_EOL;
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
