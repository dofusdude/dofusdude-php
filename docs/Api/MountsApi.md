# OpenAPI\Client\MountsApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllMountsList()**](MountsApi.md#getAllMountsList) | **GET** /{game}/{language}/mounts/all | List All Mounts |
| [**getMountsList()**](MountsApi.md#getMountsList) | **GET** /{game}/{language}/mounts | List Mounts |
| [**getMountsSearch()**](MountsApi.md#getMountsSearch) | **GET** /{game}/{language}/mounts/search | Search Mounts |
| [**getMountsSingle()**](MountsApi.md#getMountsSingle) | **GET** /{game}/{language}/mounts/{ankama_id} | Single Mounts |


## `getAllMountsList()`

```php
getAllMountsList($language, $game, $filter_family_name, $accept_encoding): \OpenAPI\Client\Model\MountsListPaged
```

List All Mounts

Retrieve all mounts with one request. This endpoint is just an alias for the a list with disabled pagination (page[size]=-1) and all fields[type] set.  If you want everything unfiltered, delete the other query parameters.  Be careful with testing or (god forbid) using /all in your browser, the returned json is huge and will slow down the browser!  Tip: set the HTTP Header 'Accept-Encoding: gzip' for saving bandwidth. You will need to uncompress it on your end. Example with cURL: ``` curl -sH 'Accept-Encoding: gzip' <api-endpoint> | gunzip - ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus2; // string
$filter_family_name = Dragoturkey; // string | only results with the translated family name
$accept_encoding = 'accept_encoding_example'; // string | optional compression for saving bandwidth

try {
    $result = $apiInstance->getAllMountsList($language, $game, $filter_family_name, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountsApi->getAllMountsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**|  | |
| **filter_family_name** | **string**| only results with the translated family name | [optional] |
| **accept_encoding** | **string**| optional compression for saving bandwidth | [optional] |

### Return type

[**\OpenAPI\Client\Model\MountsListPaged**](../Model/MountsListPaged.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMountsList()`

```php
getMountsList($language, $game, $filter_family_name, $page_size, $page_number, $fields_mount): \OpenAPI\Client\Model\MountsListPaged
```

List Mounts

Retrieve a list of mounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus2; // string
$filter_family_name = Dragoturkey; // string | only results with the translated family name
$page_size = 10; // int | size of the results from the list. -1 disables pagination and gets all in one response.
$page_number = 1; // int | page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16.
$fields_mount = ["effects"]; // string[] | adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed.

try {
    $result = $apiInstance->getMountsList($language, $game, $filter_family_name, $page_size, $page_number, $fields_mount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountsApi->getMountsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**|  | |
| **filter_family_name** | **string**| only results with the translated family name | [optional] |
| **page_size** | **int**| size of the results from the list. -1 disables pagination and gets all in one response. | [optional] |
| **page_number** | **int**| page number based on the current page[size]. So you could get page 1 with 8 entrys and page 2 would have entries 8 to 16. | [optional] |
| **fields_mount** | [**string[]**](../Model/string.md)| adds fields from their detail endpoint to the item list entries. Multiple comma separated values allowed. | [optional] |

### Return type

[**\OpenAPI\Client\Model\MountsListPaged**](../Model/MountsListPaged.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMountsSearch()`

```php
getMountsSearch($language, $game, $query, $filter_family_name, $limit): \OpenAPI\Client\Model\MountListEntry[]
```

Search Mounts

Search in all names and descriptions of mounts with a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | a valid language code
$game = dofus2; // string
$query = Dorée; // string | case sensitive search query
$filter_family_name = Dragodinde; // string | only results with the translated family name
$limit = 8; // int | maximum number of returned results

try {
    $result = $apiInstance->getMountsSearch($language, $game, $query, $filter_family_name, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountsApi->getMountsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **game** | **string**|  | |
| **query** | **string**| case sensitive search query | |
| **filter_family_name** | **string**| only results with the translated family name | [optional] |
| **limit** | **int**| maximum number of returned results | [optional] [default to 8] |

### Return type

[**\OpenAPI\Client\Model\MountListEntry[]**](../Model/MountListEntry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMountsSingle()`

```php
getMountsSingle($language, $ankama_id, $game): \OpenAPI\Client\Model\Mount
```

Single Mounts

Retrieve a specific mount with id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$ankama_id = 180; // int | identifier
$game = dofus2; // string

try {
    $result = $apiInstance->getMountsSingle($language, $ankama_id, $game);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountsApi->getMountsSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **ankama_id** | **int**| identifier | |
| **game** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Mount**](../Model/Mount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
