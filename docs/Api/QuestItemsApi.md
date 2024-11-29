# OpenAPI\Client\QuestItemsApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllItemsQuestList()**](QuestItemsApi.md#getAllItemsQuestList) | **GET** /{game}/v1/{language}/items/quest/all | List All Quest Items |
| [**getItemQuestSingle()**](QuestItemsApi.md#getItemQuestSingle) | **GET** /{game}/v1/{language}/items/quest/{ankama_id} | Single Quest Items |
| [**getItemsQuestList()**](QuestItemsApi.md#getItemsQuestList) | **GET** /{game}/v1/{language}/items/quest | List Quest Items |
| [**getItemsQuestSearch()**](QuestItemsApi.md#getItemsQuestSearch) | **GET** /{game}/v1/{language}/items/quest/search | Search Quest Items |


## `getAllItemsQuestList()`

```php
getAllItemsQuestList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_name_id): \OpenAPI\Client\Model\ListItems
```

List All Quest Items

Retrieve all quest items with one request. This endpoint is just an alias for the a list with disabled pagination (page[size]=-1) and all fields[type] set.  If you want everything unfiltered, delete the other query parameters.  Be careful with testing or (god forbid) using /all in your browser, the returned json is huge and will slow down the browser!  Tip: set the HTTP Header 'Accept-Encoding: gzip' for saving bandwidth. You will need to uncompress it on your end. Example with cURL: ``` curl -sH 'Accept-Encoding: gzip' <api-endpoint> | gunzip - ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuestItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_min_level = 1; // int | only results which level is equal or above this value
$filter_max_level = 50; // int | only results which level is equal or below this value
$accept_encoding = 'accept_encoding_example'; // string | optional compression for saving bandwidth
$filter_type_name_id = ["boots"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getAllItemsQuestList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestItemsApi->getAllItemsQuestList: ', $e->getMessage(), PHP_EOL;
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

## `getItemQuestSingle()`

```php
getItemQuestSingle($language, $ankama_id, $game): \OpenAPI\Client\Model\Resource
```

Single Quest Items

Retrieve a specific quest item with id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuestItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$ankama_id = 25256; // int | identifier
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'

try {
    $result = $apiInstance->getItemQuestSingle($language, $ankama_id, $game);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestItemsApi->getItemQuestSingle: ', $e->getMessage(), PHP_EOL;
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

## `getItemsQuestList()`

```php
getItemsQuestList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_name_id): \OpenAPI\Client\Model\ListItems
```

List Quest Items

Retrieve a list of quest items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuestItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_min_level = 1; // int | only results which level is equal or above this value
$filter_max_level = 50; // int | only results which level is equal or below this value
$page_size = 5; // int | size of the results from the list. -1 disables pagination and gets all in one response.
$page_number = 1; // int | page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16.
$fields_item = ["recipe"]; // string[] | adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed.
$filter_type_name_id = ["sufokia"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsQuestList($language, $game, $sort_level, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestItemsApi->getItemsQuestList: ', $e->getMessage(), PHP_EOL;
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

## `getItemsQuestSearch()`

```php
getItemsQuestSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $filter_type_enum): \OpenAPI\Client\Model\ListItem[]
```

Search Quest Items

Search in all names and descriptions of quest items with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuestItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = es; // string | a valid language code
$game = dofus3; // string | game main 'dofus3' or beta channel 'dofus3beta'
$query = Ficha; // string | case sensitive search query
$filter_type_name = Justicieros; // string | only results with the translated type name
$filter_min_level = 60; // int | only results which level is equal or above this value
$filter_max_level = 70; // int | only results which level is equal or below this value
$limit = 8; // int | maximum number of returned results
$filter_type_enum = ["vigilantes"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsQuestSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $filter_type_enum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestItemsApi->getItemsQuestSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **query** | **string**| case sensitive search query | |
| **filter_type_name** | **string**| only results with the translated type name | [optional] |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |
| **limit** | **int**| maximum number of returned results | [optional] [default to 8] |
| **filter_type_enum** | [**string[]**](../Model/string.md)| multi-filter results with the english type name. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

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
