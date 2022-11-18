# OpenAPI\Client\WebhooksApi

All URIs are relative to https://api.dofusdu.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWebhooksAlmanaxId()**](WebhooksApi.md#deleteWebhooksAlmanaxId) | **DELETE** /webhooks/almanax/{id} | Unregister Almanax Hook |
| [**deleteWebhooksRssId()**](WebhooksApi.md#deleteWebhooksRssId) | **DELETE** /webhooks/rss/{id} | Unregister RSS Hook |
| [**deleteWebhooksTwitterId()**](WebhooksApi.md#deleteWebhooksTwitterId) | **DELETE** /webhooks/twitter/{id} | Unregister Twitter Hook |
| [**getMetaWebhooksAlmanax()**](WebhooksApi.md#getMetaWebhooksAlmanax) | **GET** /meta/webhooks/almanax | Get Almanax Hook Metainfo |
| [**getMetaWebhooksRss()**](WebhooksApi.md#getMetaWebhooksRss) | **GET** /meta/webhooks/rss | Get RSS Hook Metainfo |
| [**getMetaWebhooksTwitter()**](WebhooksApi.md#getMetaWebhooksTwitter) | **GET** /meta/webhooks/twitter | Get Twitter Hook Metainfo |
| [**getWebhooksAlmanaxId()**](WebhooksApi.md#getWebhooksAlmanaxId) | **GET** /webhooks/almanax/{id} | Get Almanax Hook |
| [**getWebhooksRssId()**](WebhooksApi.md#getWebhooksRssId) | **GET** /webhooks/rss/{id} | Get RSS Hook |
| [**getWebhooksTwitterId()**](WebhooksApi.md#getWebhooksTwitterId) | **GET** /webhooks/twitter/{id} | Get Twitter Hook |
| [**postWebhooksAlmanax()**](WebhooksApi.md#postWebhooksAlmanax) | **POST** /webhooks/almanax | Register Almanax Hook |
| [**postWebhooksRss()**](WebhooksApi.md#postWebhooksRss) | **POST** /webhooks/rss | Register RSS Hook |
| [**postWebhooksTwitter()**](WebhooksApi.md#postWebhooksTwitter) | **POST** /webhooks/twitter | Register Twitter Hook |
| [**putWebhooksAlmanaxId()**](WebhooksApi.md#putWebhooksAlmanaxId) | **PUT** /webhooks/almanax/{id} | Update Almanax Hook |
| [**putWebhooksRssId()**](WebhooksApi.md#putWebhooksRssId) | **PUT** /webhooks/rss/{id} | Update RSS Hook |
| [**putWebhooksTwitterId()**](WebhooksApi.md#putWebhooksTwitterId) | **PUT** /webhooks/twitter/{id} | Update Twitter Hook |


## `deleteWebhooksAlmanaxId()`

```php
deleteWebhooksAlmanaxId($id)
```

Unregister Almanax Hook

Delete a Webhook from the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteWebhooksAlmanaxId($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhooksAlmanaxId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhooksRssId()`

```php
deleteWebhooksRssId($id)
```

Unregister RSS Hook

Delete a Webhook from the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteWebhooksRssId($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhooksRssId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhooksTwitterId()`

```php
deleteWebhooksTwitterId($id)
```

Unregister Twitter Hook

Delete a Webhook from the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteWebhooksTwitterId($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhooksTwitterId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaWebhooksAlmanax()`

```php
getMetaWebhooksAlmanax(): \OpenAPI\Client\Model\GetMetaWebhooksTwitter200Response
```

Get Almanax Hook Metainfo

Get a list of all available subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMetaWebhooksAlmanax();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getMetaWebhooksAlmanax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetMetaWebhooksTwitter200Response**](../Model/GetMetaWebhooksTwitter200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaWebhooksRss()`

```php
getMetaWebhooksRss(): \OpenAPI\Client\Model\GetMetaWebhooksTwitter200Response
```

Get RSS Hook Metainfo

Get a list of all available subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMetaWebhooksRss();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getMetaWebhooksRss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetMetaWebhooksTwitter200Response**](../Model/GetMetaWebhooksTwitter200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaWebhooksTwitter()`

```php
getMetaWebhooksTwitter(): \OpenAPI\Client\Model\GetMetaWebhooksTwitter200Response
```

Get Twitter Hook Metainfo

Get a list of all available subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMetaWebhooksTwitter();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getMetaWebhooksTwitter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetMetaWebhooksTwitter200Response**](../Model/GetMetaWebhooksTwitter200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooksAlmanaxId()`

```php
getWebhooksAlmanaxId($id): \OpenAPI\Client\Model\AlmanaxWebhook
```

Get Almanax Hook

Retrieve details about an existing Almanax Webhook with a given uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWebhooksAlmanaxId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooksAlmanaxId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AlmanaxWebhook**](../Model/AlmanaxWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooksRssId()`

```php
getWebhooksRssId($id): \OpenAPI\Client\Model\RssWebhook
```

Get RSS Hook

Retrieve details about an existing RSS Webhook with a given uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWebhooksRssId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooksRssId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\RssWebhook**](../Model/RssWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooksTwitterId()`

```php
getWebhooksTwitterId($id): \OpenAPI\Client\Model\TwitterWebhook
```

Get Twitter Hook

Retrieve details about an existing Twitter Webhook with a given uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWebhooksTwitterId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooksTwitterId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\TwitterWebhook**](../Model/TwitterWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postWebhooksAlmanax()`

```php
postWebhooksAlmanax($create_almanax_webhook)
```

Register Almanax Hook

Register a new Webhook to post Almanax updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_almanax_webhook = {"bonus_whitelist":null,"bonus_blacklist":null,"subscriptions":["dofus2_fr"],"format":"discord","callback":"https://discord.com/api/webhooks/XYZ","daily_settings":{"timezone":"Europe/Paris","midnight_offset":0},"iso_date":false,"mentions":{"kolossium-experience":[{"discord_id":1234,"is_role":true,"ping_days_before":null}]},"intervals":["daily"],"weekly_weekday":"sunday"}; // \OpenAPI\Client\Model\CreateAlmanaxWebhook | 

try {
    $apiInstance->postWebhooksAlmanax($create_almanax_webhook);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postWebhooksAlmanax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_almanax_webhook** | [**\OpenAPI\Client\Model\CreateAlmanaxWebhook**](../Model/CreateAlmanaxWebhook.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postWebhooksRss()`

```php
postWebhooksRss($create_rss_webhook)
```

Register RSS Hook

Register a new Webhook to post RSS news as soon as they are posted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_rss_webhook = {"whitelist":["retro"],"blacklist":null,"subscriptions":["dofus2-en-official-news"],"format":"discord","preview_length":2000,"callback":"https://discord.com/api/webhooks/XYZ"}; // \OpenAPI\Client\Model\CreateRSSWebhook | 

try {
    $apiInstance->postWebhooksRss($create_rss_webhook);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postWebhooksRss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_rss_webhook** | [**\OpenAPI\Client\Model\CreateRSSWebhook**](../Model/CreateRSSWebhook.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postWebhooksTwitter()`

```php
postWebhooksTwitter($create_twitter_webhook)
```

Register Twitter Hook

Register a new Webhook to post Twitter updates as soon as they are posted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_twitter_webhook = {"whitelist":null,"blacklist":null,"subscriptions":["DOFUSfr"],"format":"discord","preview_length":280,"callback":"https://discord.com/api/webhooks/XYZ"}; // \OpenAPI\Client\Model\CreateTwitterWebhook | 

try {
    $apiInstance->postWebhooksTwitter($create_twitter_webhook);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postWebhooksTwitter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_twitter_webhook** | [**\OpenAPI\Client\Model\CreateTwitterWebhook**](../Model/CreateTwitterWebhook.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putWebhooksAlmanaxId()`

```php
putWebhooksAlmanaxId($id, $put_almanax_webhook): \OpenAPI\Client\Model\AlmanaxWebhook
```

Update Almanax Hook

Update the details of an Almanax Webhook. All fields are optional and arrays will be overwritten, so always put all selected items of an array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$put_almanax_webhook = {"bonus_whitelist":[],"bonus_blacklist":null,"subscriptions":null,"daily_settings":{"timezone":"Europe/Paris","midnight_offset":0},"iso_date":false,"mentions":{"kolossium-experience":[{"discord_id":1234,"is_role":true,"ping_days_before":null}]},"intervals":["daily"],"weekly_weekday":"sunday"}; // \OpenAPI\Client\Model\PutAlmanaxWebhook

try {
    $result = $apiInstance->putWebhooksAlmanaxId($id, $put_almanax_webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->putWebhooksAlmanaxId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **put_almanax_webhook** | [**\OpenAPI\Client\Model\PutAlmanaxWebhook**](../Model/PutAlmanaxWebhook.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AlmanaxWebhook**](../Model/AlmanaxWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putWebhooksRssId()`

```php
putWebhooksRssId($id, $put_rss_webhook): \OpenAPI\Client\Model\RssWebhook
```

Update RSS Hook

Update the details of a RSS Webhook. All fields are optional and arrays will be overwritten, so always put all selected items of an array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$put_rss_webhook = {"whitelist":null,"blacklist":null,"subscriptions":null,"preview_length":60}; // \OpenAPI\Client\Model\PutRSSWebhook | 

try {
    $result = $apiInstance->putWebhooksRssId($id, $put_rss_webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->putWebhooksRssId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **put_rss_webhook** | [**\OpenAPI\Client\Model\PutRSSWebhook**](../Model/PutRSSWebhook.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RssWebhook**](../Model/RssWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putWebhooksTwitterId()`

```php
putWebhooksTwitterId($id, $put_twitter_webhook): \OpenAPI\Client\Model\TwitterWebhook
```

Update Twitter Hook

Update the details of a Twitter Webhook. All fields are optional and arrays will be overwritten, so always put all selected items of an array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$put_twitter_webhook = {"whitelist":["retro"],"blacklist":null,"subscriptions":["dofus2-en-official-changelog"],"preview_length":null}; // \OpenAPI\Client\Model\PutTwitterWebhook | 

try {
    $result = $apiInstance->putWebhooksTwitterId($id, $put_twitter_webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->putWebhooksTwitterId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **put_twitter_webhook** | [**\OpenAPI\Client\Model\PutTwitterWebhook**](../Model/PutTwitterWebhook.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TwitterWebhook**](../Model/TwitterWebhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
