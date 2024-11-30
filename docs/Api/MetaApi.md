# OpenAPI\Client\MetaApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGameSearchTypes()**](MetaApi.md#getGameSearchTypes) | **GET** /dofus3beta/v1/meta/search/types | Available Game Search Types |
| [**getItemTypes()**](MetaApi.md#getItemTypes) | **GET** /dofus3beta/v1/meta/items/types | Available Item Types |
| [**getMetaAlmanaxBonuses()**](MetaApi.md#getMetaAlmanaxBonuses) | **GET** /dofus2/meta/{language}/almanax/bonuses | Available Almanax Bonuses |
| [**getMetaAlmanaxBonusesSearch()**](MetaApi.md#getMetaAlmanaxBonusesSearch) | **GET** /dofus2/meta/{language}/almanax/bonuses/search | Search Available Almanax Bonuses |
| [**getMetaElements()**](MetaApi.md#getMetaElements) | **GET** /dofus3beta/v1/meta/elements | Effects and Condition Elements |
| [**getMetaVersion()**](MetaApi.md#getMetaVersion) | **GET** /dofus3beta/v1/meta/version | Game Version |


## `getGameSearchTypes()`

```php
getGameSearchTypes(): string[]
```

Available Game Search Types

Get all types for /{game}/v1/{lang}/search available for filtering. All names are english for comparing them inside applications. Order is fixed so you can compare indices instead of strings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getGameSearchTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getGameSearchTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemTypes()`

```php
getItemTypes(): string[]
```

Available Item Types

Get all types of all items. Primarily used for filtering more detailed types in listings or search endpoints. All names are english for comparing them inside applications. Ordering is not guaranteed to persist with game updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getItemTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getItemTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaAlmanaxBonuses()`

```php
getMetaAlmanaxBonuses($language): \OpenAPI\Client\Model\GetMetaAlmanaxBonuses200ResponseInner[]
```

Available Almanax Bonuses

Get all the available bonuses and their id for filtering them in the range endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | a valid language code

try {
    $result = $apiInstance->getMetaAlmanaxBonuses($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetaAlmanaxBonuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |

### Return type

[**\OpenAPI\Client\Model\GetMetaAlmanaxBonuses200ResponseInner[]**](../Model/GetMetaAlmanaxBonuses200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaAlmanaxBonusesSearch()`

```php
getMetaAlmanaxBonusesSearch($language, $query, $limit): \OpenAPI\Client\Model\GetMetaAlmanaxBonuses200ResponseInner[]
```

Search Available Almanax Bonuses

Search all the available bonuses and their id for filtering them in the range endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | a valid language code
$query = abond; // string | case sensitive search query
$limit = 56; // int | maximum number of returned results

try {
    $result = $apiInstance->getMetaAlmanaxBonusesSearch($language, $query, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetaAlmanaxBonusesSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| a valid language code | |
| **query** | **string**| case sensitive search query | |
| **limit** | **int**| maximum number of returned results | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetMetaAlmanaxBonuses200ResponseInner[]**](../Model/GetMetaAlmanaxBonuses200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaElements()`

```php
getMetaElements(): string[]
```

Effects and Condition Elements

Get the mappings for all specific elements that are linked in the dataset. All names are english. Translations are not needed because of a global unique id which is the index inside the array. Future elements will get a higher id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMetaElements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetaElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaVersion()`

```php
getMetaVersion(): \OpenAPI\Client\Model\Version
```

Game Version

The current game version of the hosted data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMetaVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetaVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Version**](../Model/Version.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
