# OpenAPI\Client\GameApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGameSearch()**](GameApi.md#getGameSearch) | **GET** /{game}/v1/{language}/search | Game Search |
| [**getItemsAllSearch()**](GameApi.md#getItemsAllSearch) | **GET** /{game}/v1/{language}/items/search | Search All Items |


## `getGameSearch()`

```php
getGameSearch($language, $game, $query, $filter_search_index, $limit, $fields_item, $filter_type_name_id): \OpenAPI\Client\Model\GameSearch[]
```

Game Search

Search in all names and descriptions of all supported types in the game. For the list of supported types see the endpoint /dofus3/meta/search/types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3beta; // string | game main 'dofus3' or beta channel 'dofus3beta'
$query = paztek; // string | search query
$filter_search_index = ["items-equipment"]; // string[] | only results with all specific type
$limit = 8; // int | maximum number of returned results
$fields_item = ["level"]; // string[] | adds fields from the item search to the list entries if the hit is a item. Multiple comma separated values allowed.
$filter_type_name_id = ["boots"]; // string[] | multi-filter results with the english item type name, including \"mount\" and \"set\" from filter[type]. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getGameSearch($language, $game, $query, $filter_search_index, $limit, $fields_item, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameApi->getGameSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **query** | **string**| search query | |
| **filter_search_index** | [**string[]**](../Model/string.md)| only results with all specific type | [optional] |
| **limit** | **int**| maximum number of returned results | [optional] [default to 8] |
| **fields_item** | [**string[]**](../Model/string.md)| adds fields from the item search to the list entries if the hit is a item. Multiple comma separated values allowed. | [optional] |
| **filter_type_name_id** | [**string[]**](../Model/string.md)| multi-filter results with the english item type name, including \&quot;mount\&quot; and \&quot;set\&quot; from filter[type]. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GameSearch[]**](../Model/GameSearch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsAllSearch()`

```php
getItemsAllSearch($language, $game, $query, $filter_min_level, $filter_max_level, $limit, $filter_type_name_id): \OpenAPI\Client\Model\ListItemGeneral[]
```

Search All Items

Search in all names and descriptions of Dofus items (including all subtypes) with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | a valid language code
$game = dofus3beta; // string | game main 'dofus3' or beta channel 'dofus3beta'
$query = atcham; // string | case sensitive search query
$filter_min_level = 190; // int | only results which level is equal or above this value
$filter_max_level = 200; // int | only results which level is equal or below this value
$limit = 8; // int | maximum number of returned results
$filter_type_name_id = ["boots"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsAllSearch($language, $game, $query, $filter_min_level, $filter_max_level, $limit, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameApi->getItemsAllSearch: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ListItemGeneral[]**](../Model/ListItemGeneral.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
