# OpenAPI\Client\AllItemsApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getItemsAllSearch()**](AllItemsApi.md#getItemsAllSearch) | **GET** /{game}/{language}/items/search | Search All Items |


## `getItemsAllSearch()`

```php
getItemsAllSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit): \OpenAPI\Client\Model\ItemsListEntryTyped[]
```

Search All Items

Search in all names and descriptions of Dofus items (including all subtypes) with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AllItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | a valid language code
$game = dofus2; // string
$query = atcham; // string | case sensitive search query
$filter_type_name = Bottes; // string | only results with the translated type name across all item_subtypes
$filter_min_level = 190; // int | only results which level is equal or above this value
$filter_max_level = 200; // int | only results which level is equal or below this value
$limit = 8; // int | maximum number of returned results

try {
    $result = $apiInstance->getItemsAllSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllItemsApi->getItemsAllSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**|  | |
| **query** | **string**| case sensitive search query | |
| **filter_type_name** | **string**| only results with the translated type name across all item_subtypes | [optional] |
| **filter_min_level** | **int**| only results which level is equal or above this value | [optional] |
| **filter_max_level** | **int**| only results which level is equal or below this value | [optional] |
| **limit** | **int**| maximum number of returned results | [optional] [default to 8] |

### Return type

[**\OpenAPI\Client\Model\ItemsListEntryTyped[]**](../Model/ItemsListEntryTyped.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
