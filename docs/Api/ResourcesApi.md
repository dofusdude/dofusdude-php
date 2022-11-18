# OpenAPI\Client\ResourcesApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllItemsResourcesList()**](ResourcesApi.md#getAllItemsResourcesList) | **GET** /{game}/{language}/items/resources/all | List All Resources |
| [**getItemsResourceSearch()**](ResourcesApi.md#getItemsResourceSearch) | **GET** /{game}/{language}/items/resources/search | Search Resources |
| [**getItemsResourcesList()**](ResourcesApi.md#getItemsResourcesList) | **GET** /{game}/{language}/items/resources | List Resources |
| [**getItemsResourcesSingle()**](ResourcesApi.md#getItemsResourcesSingle) | **GET** /{game}/{language}/items/resources/{ankama_id} | Single Resources |


## `getAllItemsResourcesList()`

```php
getAllItemsResourcesList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $accept_encoding): \OpenAPI\Client\Model\ItemsListPaged
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
$game = dofus2; // string
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_type_name = miscellaneous resources; // string | only results with the translated type name
$filter_min_level = 160; // int | only results which level is equal or above this value
$filter_max_level = 190; // int | only results which level is equal or below this value
$accept_encoding = 'accept_encoding_example'; // string | optional compression for saving bandwidth

try {
    $result = $apiInstance->getAllItemsResourcesList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getAllItemsResourcesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**|  | |
| **sort_level** | **string**| sort the resulting list by level, default unsorted | [optional] |
| **filter_type_name** | **string**| only results with the translated type name | [optional] |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |
| **accept_encoding** | **string**| optional compression for saving bandwidth | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemsListPaged**](../Model/ItemsListPaged.md)

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
getItemsResourceSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level): \OpenAPI\Client\Model\ItemListEntry[]
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
$game = dofus2; // string
$query = snowdew; // string | case sensitive search query
$filter_type_name = plant; // string | only results with the translated type name
$filter_min_level = 150; // int | only results which level is equal or above this value
$filter_max_level = 200; // int | only results which level is equal or below this value

try {
    $result = $apiInstance->getItemsResourceSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getItemsResourceSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**|  | |
| **query** | **string**| case sensitive search query | |
| **filter_type_name** | **string**| only results with the translated type name | [optional] |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemListEntry[]**](../Model/ItemListEntry.md)

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
getItemsResourcesList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item): \OpenAPI\Client\Model\ItemsListPaged
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
$game = dofus2; // string
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_type_name = miscellaneous resources; // string | only results with the translated type name
$filter_min_level = 160; // int | only results which level is equal or above this value
$filter_max_level = 190; // int | only results which level is equal or below this value
$page_size = 10; // int | size of the results from the list. -1 disables pagination and gets all in one response.
$page_number = 1; // int | page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16.
$fields_item = ["recipe"]; // string[] | adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed.

try {
    $result = $apiInstance->getItemsResourcesList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getItemsResourcesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**|  | |
| **sort_level** | **string**| sort the resulting list by level, default unsorted | [optional] |
| **filter_type_name** | **string**| only results with the translated type name | [optional] |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |
| **page_size** | **int**| size of the results from the list. -1 disables pagination and gets all in one response. | [optional] |
| **page_number** | **int**| page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16. | [optional] |
| **fields_item** | [**string[]**](../Model/string.md)| adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemsListPaged**](../Model/ItemsListPaged.md)

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
$game = dofus2; // string

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
| **game** | **string**|  | |

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
