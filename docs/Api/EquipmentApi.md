# OpenAPI\Client\EquipmentApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllItemsEquipmentList()**](EquipmentApi.md#getAllItemsEquipmentList) | **GET** /{game}/{language}/items/equipment/all | List All Equipment |
| [**getItemsEquipmentList()**](EquipmentApi.md#getItemsEquipmentList) | **GET** /{game}/{language}/items/equipment | List Equipment |
| [**getItemsEquipmentSearch()**](EquipmentApi.md#getItemsEquipmentSearch) | **GET** /{game}/{language}/items/equipment/search | Search Equipment |
| [**getItemsEquipmentSingle()**](EquipmentApi.md#getItemsEquipmentSingle) | **GET** /{game}/{language}/items/equipment/{ankama_id} | Single Equipment |


## `getAllItemsEquipmentList()`

```php
getAllItemsEquipmentList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_enum): \OpenAPI\Client\Model\ItemsListPaged
```

List All Equipment

Retrieve all equipment items with one request. This endpoint is just an alias for the a list with disabled pagination (page[size]=-1) and all fields[type] set.  If you want everything unfiltered, delete the other query parameters.  Be careful with testing or (god forbid) using /all in your browser, the returned json is huge and will slow down the browser!  Tip: set the HTTP Header 'Accept-Encoding: gzip' for saving bandwidth. You will need to uncompress it on your end. Example with cURL: ``` curl -sH 'Accept-Encoding: gzip' <api-endpoint> | gunzip - ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = en; // string | a valid language code
$game = dofus2; // string
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_type_name = Sword; // string | only results with the translated type name
$filter_min_level = 10; // int | only results which level is equal or above this value
$filter_max_level = 60; // int | only results which level is equal or below this value
$accept_encoding = 'accept_encoding_example'; // string | optional compression for saving bandwidth
$filter_type_enum = ["boots"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getAllItemsEquipmentList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $accept_encoding, $filter_type_enum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->getAllItemsEquipmentList: ', $e->getMessage(), PHP_EOL;
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
| **filter_type_enum** | [**string[]**](../Model/string.md)| multi-filter results with the english type name. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

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

## `getItemsEquipmentList()`

```php
getItemsEquipmentList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_enum): \OpenAPI\Client\Model\ItemsListPaged
```

List Equipment

Retrieve a list of equipment items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = en; // string | a valid language code
$game = dofus2; // string
$sort_level = desc; // string | sort the resulting list by level, default unsorted
$filter_type_name = Sword; // string | only results with the translated type name
$filter_min_level = 10; // int | only results which level is equal or above this value
$filter_max_level = 60; // int | only results which level is equal or below this value
$page_size = 5; // int | size of the results from the list. -1 disables pagination and gets all in one response.
$page_number = 1; // int | page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16.
$fields_item = ["is_weapon"]; // string[] | adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed.
$filter_type_enum = ["sword"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsEquipmentList($language, $game, $sort_level, $filter_type_name, $filter_min_level, $filter_max_level, $page_size, $page_number, $fields_item, $filter_type_enum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->getItemsEquipmentList: ', $e->getMessage(), PHP_EOL;
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
| **filter_type_enum** | [**string[]**](../Model/string.md)| multi-filter results with the english type name. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

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

## `getItemsEquipmentSearch()`

```php
getItemsEquipmentSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $filter_type_enum): \OpenAPI\Client\Model\ItemListEntry[]
```

Search Equipment

Search in all names and descriptions of equipment items with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus2; // string
$query = nidas; // string | case sensitive search query
$filter_type_name = boots; // string | only results with the translated type name
$filter_min_level = 150; // int | only results which level is equal or above this value
$filter_max_level = 200; // int | only results which level is equal or below this value
$limit = 8; // int | maximum number of returned results
$filter_type_enum = ["boots"]; // string[] | multi-filter results with the english type name. Add with \"wood\" or \"+wood\" and exclude with \"-wood\".

try {
    $result = $apiInstance->getItemsEquipmentSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level, $limit, $filter_type_enum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->getItemsEquipmentSearch: ', $e->getMessage(), PHP_EOL;
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
| **limit** | **int**| maximum number of returned results | [optional] [default to 8] |
| **filter_type_enum** | [**string[]**](../Model/string.md)| multi-filter results with the english type name. Add with \&quot;wood\&quot; or \&quot;+wood\&quot; and exclude with \&quot;-wood\&quot;. | [optional] |

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

## `getItemsEquipmentSingle()`

```php
getItemsEquipmentSingle($language, $ankama_id, $game): \OpenAPI\Client\Model\Weapon
```

Single Equipment

Retrieve a specific equipment item with id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EquipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$ankama_id = 26009; // int | identifier
$game = dofus2; // string

try {
    $result = $apiInstance->getItemsEquipmentSingle($language, $ankama_id, $game);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->getItemsEquipmentSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **ankama_id** | **int**| identifier | |
| **game** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Weapon**](../Model/Weapon.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
