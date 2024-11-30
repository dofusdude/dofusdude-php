# OpenAPI\Client\SetsApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllSetsList()**](SetsApi.md#getAllSetsList) | **GET** /{game}/v1/{language}/sets/all | List All Sets |
| [**getSetsList()**](SetsApi.md#getSetsList) | **GET** /{game}/v1/{language}/sets | List Sets |
| [**getSetsSearch()**](SetsApi.md#getSetsSearch) | **GET** /{game}/v1/{language}/sets/search | Search Sets |
| [**getSetsSingle()**](SetsApi.md#getSetsSingle) | **GET** /{game}/v1/{language}/sets/{ankama_id} | Single Sets |


## `getAllSetsList()`

```php
getAllSetsList($language, $game, $sort_level, $filter_min_highest_equipment_level, $filter_max_highest_equipment_level, $accept_encoding, $filter_contains_cosmetics_only, $filter_contains_cosmetics): \OpenAPI\Client\Model\ListEquipmentSets
```

List All Sets

Retrieve all sets with one request. This endpoint is just an alias for the a list with disabled pagination (page[size]=-1) and all fields[type] set.  If you want everything unfiltered, delete the other query parameters.  Be careful with testing or (god forbid) using /all in your browser, the returned json is huge and will slow down the browser!  Tip: set the HTTP Header 'Accept-Encoding: gzip' for saving bandwidth. You will need to uncompress it on your end. Example with cURL: ``` curl -sH 'Accept-Encoding: gzip' <api-endpoint> | gunzip - ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3beta; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = asc; // string | sort the resulting list by level, default unsorted
$filter_min_highest_equipment_level = 190; // int | only results where the equipment with the highest level is above or equal to this value
$filter_max_highest_equipment_level = 200; // int | only results where the equipment with the highest level is below or equal to this value
$accept_encoding = 'accept_encoding_example'; // string | optional compression for saving bandwidth
$filter_contains_cosmetics_only = True; // bool | filter sets based on if they only got cosmetic items in it. If true, the item ids are for the cosmetic endpoints instead of equipment.
$filter_contains_cosmetics = True; // bool | filter sets based on if they got cosmetic items in it.

try {
    $result = $apiInstance->getAllSetsList($language, $game, $sort_level, $filter_min_highest_equipment_level, $filter_max_highest_equipment_level, $accept_encoding, $filter_contains_cosmetics_only, $filter_contains_cosmetics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetsApi->getAllSetsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **sort_level** | **string**| sort the resulting list by level, default unsorted | [optional] |
| **filter_min_highest_equipment_level** | **int**| only results where the equipment with the highest level is above or equal to this value | [optional] |
| **filter_max_highest_equipment_level** | **int**| only results where the equipment with the highest level is below or equal to this value | [optional] |
| **accept_encoding** | **string**| optional compression for saving bandwidth | [optional] |
| **filter_contains_cosmetics_only** | **bool**| filter sets based on if they only got cosmetic items in it. If true, the item ids are for the cosmetic endpoints instead of equipment. | [optional] |
| **filter_contains_cosmetics** | **bool**| filter sets based on if they got cosmetic items in it. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListEquipmentSets**](../Model/ListEquipmentSets.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSetsList()`

```php
getSetsList($language, $game, $sort_level, $filter_min_highest_equipment_level, $filter_max_highest_equipment_level, $page_size, $page_number, $fields_set, $filter_contains_cosmetics_only, $filter_contains_cosmetics): \OpenAPI\Client\Model\ListEquipmentSets
```

List Sets

Retrieve a list of sets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3beta; // string | game main 'dofus3' or beta channel 'dofus3beta'
$sort_level = asc; // string | sort the resulting list by level, default unsorted
$filter_min_highest_equipment_level = 190; // int | only results where the equipment with the highest level is above or equal to this value
$filter_max_highest_equipment_level = 200; // int | only results where the equipment with the highest level is below or equal to this value
$page_size = 20; // int | size of the results from the list. -1 disables pagination and gets all in one response.
$page_number = 1; // int | page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16.
$fields_set = ["equipment_ids"]; // string[] | adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed.
$filter_contains_cosmetics_only = True; // bool | filter sets based on if they only got cosmetic items in it. If true, the item ids are for the cosmetic endpoints instead of equipment.
$filter_contains_cosmetics = True; // bool | filter sets based on if they got cosmetic items in it.

try {
    $result = $apiInstance->getSetsList($language, $game, $sort_level, $filter_min_highest_equipment_level, $filter_max_highest_equipment_level, $page_size, $page_number, $fields_set, $filter_contains_cosmetics_only, $filter_contains_cosmetics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetsApi->getSetsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **sort_level** | **string**| sort the resulting list by level, default unsorted | [optional] |
| **filter_min_highest_equipment_level** | **int**| only results where the equipment with the highest level is above or equal to this value | [optional] |
| **filter_max_highest_equipment_level** | **int**| only results where the equipment with the highest level is below or equal to this value | [optional] |
| **page_size** | **int**| size of the results from the list. -1 disables pagination and gets all in one response. | [optional] |
| **page_number** | **int**| page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16. | [optional] |
| **fields_set** | [**string[]**](../Model/string.md)| adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed. | [optional] |
| **filter_contains_cosmetics_only** | **bool**| filter sets based on if they only got cosmetic items in it. If true, the item ids are for the cosmetic endpoints instead of equipment. | [optional] |
| **filter_contains_cosmetics** | **bool**| filter sets based on if they got cosmetic items in it. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListEquipmentSets**](../Model/ListEquipmentSets.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSetsSearch()`

```php
getSetsSearch($language, $game, $query, $filter_min_highest_equipment_level, $filter_max_highest_equipment_level, $limit, $filter_contains_cosmetics_only, $filter_contains_cosmetics): \OpenAPI\Client\Model\ListEquipmentSet[]
```

Search Sets

Search in all names and descriptions of sets with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus3beta; // string | game main 'dofus3' or beta channel 'dofus3beta'
$query = Des; // string | case sensitive search query
$filter_min_highest_equipment_level = 195; // int | only results where the equipment with the highest level is above or equal to this value
$filter_max_highest_equipment_level = 200; // int | only results where the equipment with the highest level is below or equal to this value
$limit = 8; // int | maximum number of returned results
$filter_contains_cosmetics_only = True; // bool | filter sets based on if they only got cosmetic items in it. If true, the item ids are for the cosmetic endpoints instead of equipment.
$filter_contains_cosmetics = True; // bool | filter sets based on if they got any cosmetic items in it

try {
    $result = $apiInstance->getSetsSearch($language, $game, $query, $filter_min_highest_equipment_level, $filter_max_highest_equipment_level, $limit, $filter_contains_cosmetics_only, $filter_contains_cosmetics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetsApi->getSetsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |
| **query** | **string**| case sensitive search query | |
| **filter_min_highest_equipment_level** | **int**| only results where the equipment with the highest level is above or equal to this value | [optional] |
| **filter_max_highest_equipment_level** | **int**| only results where the equipment with the highest level is below or equal to this value | [optional] |
| **limit** | **int**| maximum number of returned results | [optional] [default to 8] |
| **filter_contains_cosmetics_only** | **bool**| filter sets based on if they only got cosmetic items in it. If true, the item ids are for the cosmetic endpoints instead of equipment. | [optional] |
| **filter_contains_cosmetics** | **bool**| filter sets based on if they got any cosmetic items in it | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListEquipmentSet[]**](../Model/ListEquipmentSet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSetsSingle()`

```php
getSetsSingle($language, $ankama_id, $game): \OpenAPI\Client\Model\EquipmentSet
```

Single Sets

Retrieve a specific set with id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$ankama_id = 499; // int | identifier
$game = dofus3beta; // string | game main 'dofus3' or beta channel 'dofus3beta'

try {
    $result = $apiInstance->getSetsSingle($language, $ankama_id, $game);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetsApi->getSetsSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **ankama_id** | **int**| identifier | |
| **game** | **string**| game main &#39;dofus3&#39; or beta channel &#39;dofus3beta&#39; | |

### Return type

[**\OpenAPI\Client\Model\EquipmentSet**](../Model/EquipmentSet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
