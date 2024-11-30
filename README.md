# dofusdude-php

# Open Ankama Developer Community
The all-in-one toolbelt for your next Ankama related project.

## Versions
- [Dofus 2](https://docs.dofusdu.de/dofus2/)
- [Dofus 3](https://docs.dofusdu.de/dofus3/)
  - v1 [latest] (you are here) 

## Client SDKs
- [Javascript](https://github.com/dofusdude/dofusdude-js) `npm i dofusdude-js --save`
- [Typescript](https://github.com/dofusdude/dofusdude-ts) `npm i dofusdude-ts --save`
- [Go](https://github.com/dofusdude/dodugo) `go get -u github.com/dofusdude/dodugo`
- [Python](https://github.com/dofusdude/dofusdude-py) `pip install dofusdude`
- [Java](https://github.com/dofusdude/dofusdude-java) Maven with GitHub packages setup

Everything, including this site, is generated out of the [Docs Repo](https://github.com/dofusdude/api-docs). Consider it the Single Source of Truth. If there is a problem with the SDKs, create an issue there.

Your favorite language is missing? Please let me know!

# Main Features
- 🥷 **Seamless Auto-Update** load data in the background when a new Dofus version is released and serving it within 10 minutes with atomic data source switching. No downtime and no effects for the user, just always up-to-date.

- ⚡ **Blazingly Fast** all data in-memory, aggressive caching over short time spans, HTTP/2 multiplexing, written in Go, optimized for low latency, hosted on bare metal in 🇩🇪.

- 📨 **Almanax Discord Integration** Use the endpoints as a dev or the official [Web Client](https://discord.dofusdude.com) as a user.

- 🩸 **Dofus 3 Beta** from stable to bleeding edge by replacing /dofus3 with /dofus3beta.

- 🗣️ **Multilingual** supporting _en_, _fr_, _es_, _pt_, _de_.

- 🧠 **Search by Relevance** allowing typos in name and description, handled by language specific text analysis and indexing.

- 🕵️ **Official Sources** generated from actual data from the game.

... and much more on the Roadmap on my [Discord](https://discord.gg/3EtHskZD8h).


For more information, please visit [https://discord.gg/3EtHskZD8h](https://discord.gg/3EtHskZD8h).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/dofusdude/dofusdude-php.git"
    }
  ],
  "require": {
    "dofusdude/dofusdude-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/dofusdude-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.dofusdu.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AlmanaxApi* | [**getAlmanaxDate**](docs/Api/AlmanaxApi.md#getalmanaxdate) | **GET** /dofus2/{language}/almanax/{date} | Single Almanax Date
*AlmanaxApi* | [**getAlmanaxRange**](docs/Api/AlmanaxApi.md#getalmanaxrange) | **GET** /dofus2/{language}/almanax | Almanax Range
*ConsumablesApi* | [**getAllItemsConsumablesList**](docs/Api/ConsumablesApi.md#getallitemsconsumableslist) | **GET** /{game}/v1/{language}/items/consumables/all | List All Consumables
*ConsumablesApi* | [**getItemsConsumablesList**](docs/Api/ConsumablesApi.md#getitemsconsumableslist) | **GET** /{game}/v1/{language}/items/consumables | List Consumables
*ConsumablesApi* | [**getItemsConsumablesSearch**](docs/Api/ConsumablesApi.md#getitemsconsumablessearch) | **GET** /{game}/v1/{language}/items/consumables/search | Search Consumables
*ConsumablesApi* | [**getItemsConsumablesSingle**](docs/Api/ConsumablesApi.md#getitemsconsumablessingle) | **GET** /{game}/v1/{language}/items/consumables/{ankama_id} | Single Consumables
*CosmeticsApi* | [**getAllCosmeticsList**](docs/Api/CosmeticsApi.md#getallcosmeticslist) | **GET** /{game}/v1/{language}/items/cosmetics/all | List All Cosmetics
*CosmeticsApi* | [**getCosmeticsList**](docs/Api/CosmeticsApi.md#getcosmeticslist) | **GET** /{game}/v1/{language}/items/cosmetics | List Cosmetics
*CosmeticsApi* | [**getCosmeticsSearch**](docs/Api/CosmeticsApi.md#getcosmeticssearch) | **GET** /{game}/v1/{language}/items/cosmetics/search | Search Cosmetics
*CosmeticsApi* | [**getCosmeticsSingle**](docs/Api/CosmeticsApi.md#getcosmeticssingle) | **GET** /{game}/v1/{language}/items/cosmetics/{ankama_id} | Single Cosmetics
*EquipmentApi* | [**getAllItemsEquipmentList**](docs/Api/EquipmentApi.md#getallitemsequipmentlist) | **GET** /{game}/v1/{language}/items/equipment/all | List All Equipment
*EquipmentApi* | [**getItemsEquipmentList**](docs/Api/EquipmentApi.md#getitemsequipmentlist) | **GET** /{game}/v1/{language}/items/equipment | List Equipment
*EquipmentApi* | [**getItemsEquipmentSearch**](docs/Api/EquipmentApi.md#getitemsequipmentsearch) | **GET** /{game}/v1/{language}/items/equipment/search | Search Equipment
*EquipmentApi* | [**getItemsEquipmentSingle**](docs/Api/EquipmentApi.md#getitemsequipmentsingle) | **GET** /{game}/v1/{language}/items/equipment/{ankama_id} | Single Equipment
*GameApi* | [**getGameSearch**](docs/Api/GameApi.md#getgamesearch) | **GET** /{game}/v1/{language}/search | Game Search
*GameApi* | [**getItemsAllSearch**](docs/Api/GameApi.md#getitemsallsearch) | **GET** /{game}/v1/{language}/items/search | Search All Items
*MetaApi* | [**getGameSearchTypes**](docs/Api/MetaApi.md#getgamesearchtypes) | **GET** /dofus3beta/v1/meta/search/types | Available Game Search Types
*MetaApi* | [**getItemTypes**](docs/Api/MetaApi.md#getitemtypes) | **GET** /dofus3beta/v1/meta/items/types | Available Item Types
*MetaApi* | [**getMetaAlmanaxBonuses**](docs/Api/MetaApi.md#getmetaalmanaxbonuses) | **GET** /dofus2/meta/{language}/almanax/bonuses | Available Almanax Bonuses
*MetaApi* | [**getMetaAlmanaxBonusesSearch**](docs/Api/MetaApi.md#getmetaalmanaxbonusessearch) | **GET** /dofus2/meta/{language}/almanax/bonuses/search | Search Available Almanax Bonuses
*MetaApi* | [**getMetaElements**](docs/Api/MetaApi.md#getmetaelements) | **GET** /dofus3beta/v1/meta/elements | Effects and Condition Elements
*MetaApi* | [**getMetaVersion**](docs/Api/MetaApi.md#getmetaversion) | **GET** /{game}/v1/meta/version | Game Version
*MountsApi* | [**getAllMountsList**](docs/Api/MountsApi.md#getallmountslist) | **GET** /{game}/v1/{language}/mounts/all | List All Mounts
*MountsApi* | [**getMountsList**](docs/Api/MountsApi.md#getmountslist) | **GET** /{game}/v1/{language}/mounts | List Mounts
*MountsApi* | [**getMountsSearch**](docs/Api/MountsApi.md#getmountssearch) | **GET** /{game}/v1/{language}/mounts/search | Search Mounts
*MountsApi* | [**getMountsSingle**](docs/Api/MountsApi.md#getmountssingle) | **GET** /{game}/v1/{language}/mounts/{ankama_id} | Single Mounts
*QuestItemsApi* | [**getAllItemsQuestList**](docs/Api/QuestItemsApi.md#getallitemsquestlist) | **GET** /{game}/v1/{language}/items/quest/all | List All Quest Items
*QuestItemsApi* | [**getItemQuestSingle**](docs/Api/QuestItemsApi.md#getitemquestsingle) | **GET** /{game}/v1/{language}/items/quest/{ankama_id} | Single Quest Items
*QuestItemsApi* | [**getItemsQuestList**](docs/Api/QuestItemsApi.md#getitemsquestlist) | **GET** /{game}/v1/{language}/items/quest | List Quest Items
*QuestItemsApi* | [**getItemsQuestSearch**](docs/Api/QuestItemsApi.md#getitemsquestsearch) | **GET** /{game}/v1/{language}/items/quest/search | Search Quest Items
*ResourcesApi* | [**getAllItemsResourcesList**](docs/Api/ResourcesApi.md#getallitemsresourceslist) | **GET** /{game}/v1/{language}/items/resources/all | List All Resources
*ResourcesApi* | [**getItemsResourceSearch**](docs/Api/ResourcesApi.md#getitemsresourcesearch) | **GET** /{game}/v1/{language}/items/resources/search | Search Resources
*ResourcesApi* | [**getItemsResourcesList**](docs/Api/ResourcesApi.md#getitemsresourceslist) | **GET** /{game}/v1/{language}/items/resources | List Resources
*ResourcesApi* | [**getItemsResourcesSingle**](docs/Api/ResourcesApi.md#getitemsresourcessingle) | **GET** /{game}/v1/{language}/items/resources/{ankama_id} | Single Resources
*SetsApi* | [**getAllSetsList**](docs/Api/SetsApi.md#getallsetslist) | **GET** /{game}/v1/{language}/sets/all | List All Sets
*SetsApi* | [**getSetsList**](docs/Api/SetsApi.md#getsetslist) | **GET** /{game}/v1/{language}/sets | List Sets
*SetsApi* | [**getSetsSearch**](docs/Api/SetsApi.md#getsetssearch) | **GET** /{game}/v1/{language}/sets/search | Search Sets
*SetsApi* | [**getSetsSingle**](docs/Api/SetsApi.md#getsetssingle) | **GET** /{game}/v1/{language}/sets/{ankama_id} | Single Sets
*WebhooksApi* | [**deleteWebhooksAlmanaxId**](docs/Api/WebhooksApi.md#deletewebhooksalmanaxid) | **DELETE** /webhooks/almanax/{id} | Unregister Almanax Hook
*WebhooksApi* | [**deleteWebhooksRssId**](docs/Api/WebhooksApi.md#deletewebhooksrssid) | **DELETE** /webhooks/rss/{id} | Unregister RSS Hook
*WebhooksApi* | [**deleteWebhooksTwitterId**](docs/Api/WebhooksApi.md#deletewebhookstwitterid) | **DELETE** /webhooks/twitter/{id} | Unregister Twitter Hook
*WebhooksApi* | [**getMetaWebhooksAlmanax**](docs/Api/WebhooksApi.md#getmetawebhooksalmanax) | **GET** /meta/webhooks/almanax | Get Almanax Hook Metainfo
*WebhooksApi* | [**getMetaWebhooksRss**](docs/Api/WebhooksApi.md#getmetawebhooksrss) | **GET** /meta/webhooks/rss | Get RSS Hook Metainfo
*WebhooksApi* | [**getMetaWebhooksTwitter**](docs/Api/WebhooksApi.md#getmetawebhookstwitter) | **GET** /meta/webhooks/twitter | Get Twitter Hook Metainfo
*WebhooksApi* | [**getWebhooksAlmanaxId**](docs/Api/WebhooksApi.md#getwebhooksalmanaxid) | **GET** /webhooks/almanax/{id} | Get Almanax Hook
*WebhooksApi* | [**getWebhooksRssId**](docs/Api/WebhooksApi.md#getwebhooksrssid) | **GET** /webhooks/rss/{id} | Get RSS Hook
*WebhooksApi* | [**getWebhooksTwitterId**](docs/Api/WebhooksApi.md#getwebhookstwitterid) | **GET** /webhooks/twitter/{id} | Get Twitter Hook
*WebhooksApi* | [**postWebhooksAlmanax**](docs/Api/WebhooksApi.md#postwebhooksalmanax) | **POST** /webhooks/almanax | Register Almanax Hook
*WebhooksApi* | [**postWebhooksRss**](docs/Api/WebhooksApi.md#postwebhooksrss) | **POST** /webhooks/rss | Register RSS Hook
*WebhooksApi* | [**postWebhooksTwitter**](docs/Api/WebhooksApi.md#postwebhookstwitter) | **POST** /webhooks/twitter | Register Twitter Hook
*WebhooksApi* | [**putWebhooksAlmanaxId**](docs/Api/WebhooksApi.md#putwebhooksalmanaxid) | **PUT** /webhooks/almanax/{id} | Update Almanax Hook
*WebhooksApi* | [**putWebhooksRssId**](docs/Api/WebhooksApi.md#putwebhooksrssid) | **PUT** /webhooks/rss/{id} | Update RSS Hook
*WebhooksApi* | [**putWebhooksTwitterId**](docs/Api/WebhooksApi.md#putwebhookstwitterid) | **PUT** /webhooks/twitter/{id} | Update Twitter Hook

## Models

- [Almanax](docs/Model/Almanax.md)
- [AlmanaxBonus](docs/Model/AlmanaxBonus.md)
- [AlmanaxTribute](docs/Model/AlmanaxTribute.md)
- [AlmanaxTributeItem](docs/Model/AlmanaxTributeItem.md)
- [AlmanaxWebhook](docs/Model/AlmanaxWebhook.md)
- [AlmanaxWebhookDailySettings](docs/Model/AlmanaxWebhookDailySettings.md)
- [Condition](docs/Model/Condition.md)
- [ConditionLeaf](docs/Model/ConditionLeaf.md)
- [ConditionNode](docs/Model/ConditionNode.md)
- [ConditionRelation](docs/Model/ConditionRelation.md)
- [CreateAlmanaxWebhook](docs/Model/CreateAlmanaxWebhook.md)
- [CreateAlmanaxWebhookDailySettings](docs/Model/CreateAlmanaxWebhookDailySettings.md)
- [CreateAlmanaxWebhookMentionsValueInner](docs/Model/CreateAlmanaxWebhookMentionsValueInner.md)
- [CreateRSSWebhook](docs/Model/CreateRSSWebhook.md)
- [CreateTwitterWebhook](docs/Model/CreateTwitterWebhook.md)
- [Effect](docs/Model/Effect.md)
- [EffectType](docs/Model/EffectType.md)
- [Equipment](docs/Model/Equipment.md)
- [EquipmentSet](docs/Model/EquipmentSet.md)
- [Error](docs/Model/Error.md)
- [GameSearch](docs/Model/GameSearch.md)
- [GameSearchItem](docs/Model/GameSearchItem.md)
- [GameSearchType](docs/Model/GameSearchType.md)
- [GetMetaAlmanaxBonuses200ResponseInner](docs/Model/GetMetaAlmanaxBonuses200ResponseInner.md)
- [GetMetaWebhooksTwitter200Response](docs/Model/GetMetaWebhooksTwitter200Response.md)
- [Images](docs/Model/Images.md)
- [ItemSubtype](docs/Model/ItemSubtype.md)
- [ListEquipmentSet](docs/Model/ListEquipmentSet.md)
- [ListEquipmentSets](docs/Model/ListEquipmentSets.md)
- [ListItem](docs/Model/ListItem.md)
- [ListItemGeneral](docs/Model/ListItemGeneral.md)
- [ListItems](docs/Model/ListItems.md)
- [ListMounts](docs/Model/ListMounts.md)
- [Mount](docs/Model/Mount.md)
- [MountFamily](docs/Model/MountFamily.md)
- [PagedLinks](docs/Model/PagedLinks.md)
- [PutAlmanaxWebhook](docs/Model/PutAlmanaxWebhook.md)
- [PutRSSWebhook](docs/Model/PutRSSWebhook.md)
- [PutTwitterWebhook](docs/Model/PutTwitterWebhook.md)
- [Range](docs/Model/Range.md)
- [Recipe](docs/Model/Recipe.md)
- [Resource](docs/Model/Resource.md)
- [RssWebhook](docs/Model/RssWebhook.md)
- [TranslatedId](docs/Model/TranslatedId.md)
- [TwitterWebhook](docs/Model/TwitterWebhook.md)
- [Version](docs/Model/Version.md)
- [Weapon](docs/Model/Weapon.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

stelzo@steado.de

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0-rc.5`
    - Generator version: `7.11.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
