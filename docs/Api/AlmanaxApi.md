# OpenAPI\Client\AlmanaxApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAlmanaxDate()**](AlmanaxApi.md#getAlmanaxDate) | **GET** /dofus3/{language}/almanax/{date} | Single Almanax Date |
| [**getAlmanaxRange()**](AlmanaxApi.md#getAlmanaxRange) | **GET** /dofus3/{language}/almanax | Almanax Range |


## `getAlmanaxDate()`

```php
getAlmanaxDate($language, $date): \OpenAPI\Client\Model\Almanax
```

Single Almanax Date

Get a single date. There are not more details in the returned object than the normal range endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AlmanaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | code
$date = Tue Jul 14 00:00:00 UTC 2020; // \DateTime | yyyy-mm-dd

try {
    $result = $apiInstance->getAlmanaxDate($language, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlmanaxApi->getAlmanaxDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| code | |
| **date** | **\DateTime**| yyyy-mm-dd | |

### Return type

[**\OpenAPI\Client\Model\Almanax**](../Model/Almanax.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlmanaxRange()`

```php
getAlmanaxRange($language, $filter_bonus_type, $range_from, $range_to, $range_size, $timezone): \OpenAPI\Client\Model\Almanax[]
```

Almanax Range

Get a range of dates, defaults to today + 6 following days but can specified by the query parameters.   filter[bonus_type] can be used seperately and does not have an effect on the other parameters.  range[from] changes the start date, everything else defaults to 6 following dates from this start date.  range[to] when used without anything else, it will use today as start date and this parameter as end. All ranges are inclusive.  range[from] + range[to] = inclusive range over the specified dates, should never be farther apart than 35 days.  range[from|to] + range[size] no need to specify the date, just following days with [from] (0 is today) or go backwards in time with only [to] and [size].  Not all combinations are listed but this should give you an idea how to they could work.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AlmanaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = fr; // string | code
$filter_bonus_type = experience-points; // string | ids from meta/{language}/almanax/bonuses
$range_from = Thu Sep 15 00:00:00 UTC 2016; // \DateTime | yyyy-mm-dd
$range_to = Wed Sep 28 00:00:00 UTC 2016; // \DateTime | yyyy-mm-dd
$range_size = -1; // int | size of the returned range
$timezone = Europe/Paris; // string | determine what the current time is. If you live in Brazil, \"today\" will be hours apart from Paris. Use your timezone to get results relative to your location.

try {
    $result = $apiInstance->getAlmanaxRange($language, $filter_bonus_type, $range_from, $range_to, $range_size, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlmanaxApi->getAlmanaxRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| code | |
| **filter_bonus_type** | **string**| ids from meta/{language}/almanax/bonuses | [optional] |
| **range_from** | **\DateTime**| yyyy-mm-dd | [optional] |
| **range_to** | **\DateTime**| yyyy-mm-dd | [optional] |
| **range_size** | **int**| size of the returned range | [optional] |
| **timezone** | **string**| determine what the current time is. If you live in Brazil, \&quot;today\&quot; will be hours apart from Paris. Use your timezone to get results relative to your location. | [optional] [default to &#39;Europe/Paris&#39;] |

### Return type

[**\OpenAPI\Client\Model\Almanax[]**](../Model/Almanax.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
