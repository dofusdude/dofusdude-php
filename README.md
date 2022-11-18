# dofusdude-php

# A project for you - the developer.
The free, always-up-to-date, low-latency, insert-buzzword-here Ankama API for your next cool project!

## Client SDKs
Don't write types or functions yourself - I already (kinda) did! 😉
- [Javascript](https://github.com/dofusdude/dofusdude-js) npm i dofusdude-js --save
- [Typescript](https://github.com/dofusdude/dofusdude-ts) npm i dofusdude-ts --save
- [Go](https://github.com/dofusdude/dodugo) go get -u github.com/dofusdude/dodugo
- [Python](https://github.com/dofusdude/dofusdude-py) pip install dofusdude

Everything, including this site, is generated out of the [Docs Repo](https://github.com/dofusdude/api-docs). Consider it the Single Source of Truth. If there is a problem with the SDKs, create an issue there.

Your favorite language is missing? Please let me know!

# Main Features
- 🥷 **Seamless Auto-Update** load data in the background when a new Dofus version is released and serving it within 2 minutes with atomic data source switching. No downtime and no effects for the user, just always up-to-date.

- ⚡ **Blazingly Fast** all data in-memory, aggressive caching over short time spans, HTTP/2 multiplexing, written in Go, optimized for low latency, hosted on bare metal in 🇩🇪.

- 📨 **Discord Integration** Ankama related Twitter, RSS and Almanax feeds to post to Discord servers with advanced features like filters or mentions. Use the endpoints as a dev or the official [Web Client](https://discord.dofusdude.com) as a user.

- 🩸 **Dofus 2 Beta** from stable to bleeding edge by replacing /dofus2 with /dofus2beta.

- 🗣️ **Multilingual** supporting _en_, _fr_, _es_, _pt_ including the dropped languages from the Dofus website _de_ and _it_.

- 🧠 **Search by Relevance** allowing typos in name and description, handled by language specific text analysis and indexing by the powerful [Meilisearch](https://www.meilisearch.com) written in Rust.

- 🕵️ **Complete** actual data from the game including items invisible to the encyclopedia like quest items.

- 🖼️ **HD Images** rendering vector graphics into PNGs up to 800x800 px in the background.


## Current state
- Weapons ✅
- Equipment ✅
- Sets ✅
- Resources ✅
- Consumables ✅
- Pets ✅
- Mounts ✅
- Cosmetics/Ceremonial Items ✅
- Harnesses ✅
- Quest Items ✅
- Almanax ✅
- Monsters ❌
- Spells ❌

... and much more on the Roadmap on my Discord. 

## Deploy now. Use forever.
Everything you see here on this site, you can use now and forever. Updates could introduce new fields, new paths or parameter but never break backwards compatibility, so no field or parameter will be deleted.

There is one exception! **The API will _always_ choose being up-to-date over everything else**. So if Ankama decides to drop languages from the game like they did with their website, the API will loose support for them, too.

## Only the beginning... 🤯
I want this project to be useful and not just add plain GET-categories no one needs.

There is a long list of features I want to add (see the Roadmap on my [Discord](https://discord.gg/3EtHskZD8h)). But they are all focussed on you, the developers. So please let me know what you need. I will change the list based on demand.

# Get started! 🥳
Scroll down and try it for yourself!

Or see how these other awesome projects use it:
- [KaellyBot](https://github.com/Kaysoro/KaellyBot) by Kaysoro
- [Dofus Craftlist](https://dofuscraftlist-dev.netlify.app) by Lystina
- [AlmanaxApp](https://almanaxapp.netlify.app) by Lystina
- [luwnarya.fr](https://luwnarya.fr)

I highly recommend using the SDKs for quick results. I use them myself for microservices for the API.

## Thank you!
I highly welcome everyone on my [Discord](https://discord.gg/3EtHskZD8h) to just talk about projects and use cases or give feedback of any kind.

The servers have a fixed monthly cost to provide very fast responses. If you want to help me keeping them running or simply  donate, consider becoming a [GitHub Sponsor](https://github.com/sponsors/dofusdude).



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




$apiInstance = new OpenAPI\Client\Api\AllItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | a valid language code
$game = dofus2; // string
$query = atcham; // string | case sensitive search query
$filter_type_name = Bottes; // string | only results with the translated type name across all item_subtypes
$filter_min_level = 190; // int | only results which level is equal or above this value
$filter_max_level = 200; // int | only results which level is equal or below this value

try {
    $result = $apiInstance->getItemsAllSearch($language, $game, $query, $filter_type_name, $filter_min_level, $filter_max_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllItemsApi->getItemsAllSearch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.dofusdu.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AllItemsApi* | [**getItemsAllSearch**](docs/Api/AllItemsApi.md#getitemsallsearch) | **GET** /{game}/{language}/items/search | Search All Items
*AlmanaxApi* | [**getAlmanaxDate**](docs/Api/AlmanaxApi.md#getalmanaxdate) | **GET** /dofus2/{language}/almanax/{date} | Single Almanax Date
*AlmanaxApi* | [**getAlmanaxRange**](docs/Api/AlmanaxApi.md#getalmanaxrange) | **GET** /dofus2/{language}/almanax | Almanax Range
*ConsumablesApi* | [**getAllItemsConsumablesList**](docs/Api/ConsumablesApi.md#getallitemsconsumableslist) | **GET** /{game}/{language}/items/consumables/all | List All Consumables
*ConsumablesApi* | [**getItemsConsumablesList**](docs/Api/ConsumablesApi.md#getitemsconsumableslist) | **GET** /{game}/{language}/items/consumables | List Consumables
*ConsumablesApi* | [**getItemsConsumablesSearch**](docs/Api/ConsumablesApi.md#getitemsconsumablessearch) | **GET** /{game}/{language}/items/consumables/search | Search Consumables
*ConsumablesApi* | [**getItemsConsumablesSingle**](docs/Api/ConsumablesApi.md#getitemsconsumablessingle) | **GET** /{game}/{language}/items/consumables/{ankama_id} | Single Consumables
*CosmeticsApi* | [**getAllCosmeticsList**](docs/Api/CosmeticsApi.md#getallcosmeticslist) | **GET** /{game}/{language}/items/cosmetics/all | List All Cosmetics
*CosmeticsApi* | [**getCosmeticsList**](docs/Api/CosmeticsApi.md#getcosmeticslist) | **GET** /{game}/{language}/items/cosmetics | List Cosmetics
*CosmeticsApi* | [**getCosmeticsSearch**](docs/Api/CosmeticsApi.md#getcosmeticssearch) | **GET** /{game}/{language}/items/cosmetics/search | Search Cosmetics
*CosmeticsApi* | [**getCosmeticsSingle**](docs/Api/CosmeticsApi.md#getcosmeticssingle) | **GET** /{game}/{language}/items/cosmetics/{ankama_id} | Single Cosmetics
*EquipmentApi* | [**getAllItemsEquipmentList**](docs/Api/EquipmentApi.md#getallitemsequipmentlist) | **GET** /{game}/{language}/items/equipment/all | List All Equipment
*EquipmentApi* | [**getItemsEquipmentList**](docs/Api/EquipmentApi.md#getitemsequipmentlist) | **GET** /{game}/{language}/items/equipment | List Equipment
*EquipmentApi* | [**getItemsEquipmentSearch**](docs/Api/EquipmentApi.md#getitemsequipmentsearch) | **GET** /{game}/{language}/items/equipment/search | Search Equipment
*EquipmentApi* | [**getItemsEquipmentSingle**](docs/Api/EquipmentApi.md#getitemsequipmentsingle) | **GET** /{game}/{language}/items/equipment/{ankama_id} | Single Equipment
*MetaApi* | [**getMetaAlmanaxBonuses**](docs/Api/MetaApi.md#getmetaalmanaxbonuses) | **GET** /dofus2/meta/{language}/almanax/bonuses | Available Almanax Bonuses
*MetaApi* | [**getMetaElements**](docs/Api/MetaApi.md#getmetaelements) | **GET** /dofus2/meta/elements | Effects and Condition Elements
*MountsApi* | [**getAllMountsList**](docs/Api/MountsApi.md#getallmountslist) | **GET** /{game}/{language}/mounts/all | List All Mounts
*MountsApi* | [**getMountsList**](docs/Api/MountsApi.md#getmountslist) | **GET** /{game}/{language}/mounts | List Mounts
*MountsApi* | [**getMountsSearch**](docs/Api/MountsApi.md#getmountssearch) | **GET** /{game}/{language}/mounts/search | Search Mounts
*MountsApi* | [**getMountsSingle**](docs/Api/MountsApi.md#getmountssingle) | **GET** /{game}/{language}/mounts/{ankama_id} | Single Mounts
*QuestItemsApi* | [**getAllItemsQuestList**](docs/Api/QuestItemsApi.md#getallitemsquestlist) | **GET** /{game}/{language}/items/quest/all | List All Quest Items
*QuestItemsApi* | [**getItemQuestSingle**](docs/Api/QuestItemsApi.md#getitemquestsingle) | **GET** /{game}/{language}/items/quest/{ankama_id} | Single Quest Items
*QuestItemsApi* | [**getItemsQuestList**](docs/Api/QuestItemsApi.md#getitemsquestlist) | **GET** /{game}/{language}/items/quest | List Quest Items
*QuestItemsApi* | [**getItemsQuestSearch**](docs/Api/QuestItemsApi.md#getitemsquestsearch) | **GET** /{game}/{language}/items/quest/search | Search Quest Items
*ResourcesApi* | [**getAllItemsResourcesList**](docs/Api/ResourcesApi.md#getallitemsresourceslist) | **GET** /{game}/{language}/items/resources/all | List All Resources
*ResourcesApi* | [**getItemsResourceSearch**](docs/Api/ResourcesApi.md#getitemsresourcesearch) | **GET** /{game}/{language}/items/resources/search | Search Resources
*ResourcesApi* | [**getItemsResourcesList**](docs/Api/ResourcesApi.md#getitemsresourceslist) | **GET** /{game}/{language}/items/resources | List Resources
*ResourcesApi* | [**getItemsResourcesSingle**](docs/Api/ResourcesApi.md#getitemsresourcessingle) | **GET** /{game}/{language}/items/resources/{ankama_id} | Single Resources
*SetsApi* | [**getAllSetsList**](docs/Api/SetsApi.md#getallsetslist) | **GET** /{game}/{language}/sets/all | List All Sets
*SetsApi* | [**getSetsList**](docs/Api/SetsApi.md#getsetslist) | **GET** /{game}/{language}/sets | List Sets
*SetsApi* | [**getSetsSearch**](docs/Api/SetsApi.md#getsetssearch) | **GET** /{game}/{language}/sets/search | Search Sets
*SetsApi* | [**getSetsSingle**](docs/Api/SetsApi.md#getsetssingle) | **GET** /{game}/{language}/sets/{ankama_id} | Single Sets
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

- [AlmanaxEntry](docs/Model/AlmanaxEntry.md)
- [AlmanaxEntryBonus](docs/Model/AlmanaxEntryBonus.md)
- [AlmanaxEntryTribute](docs/Model/AlmanaxEntryTribute.md)
- [AlmanaxEntryTributeItem](docs/Model/AlmanaxEntryTributeItem.md)
- [AlmanaxWebhook](docs/Model/AlmanaxWebhook.md)
- [AlmanaxWebhookDailySettings](docs/Model/AlmanaxWebhookDailySettings.md)
- [ConditionEntry](docs/Model/ConditionEntry.md)
- [Cosmetic](docs/Model/Cosmetic.md)
- [CreateAlmanaxWebhook](docs/Model/CreateAlmanaxWebhook.md)
- [CreateAlmanaxWebhookDailySettings](docs/Model/CreateAlmanaxWebhookDailySettings.md)
- [CreateAlmanaxWebhookMentionsValueInner](docs/Model/CreateAlmanaxWebhookMentionsValueInner.md)
- [CreateRSSWebhook](docs/Model/CreateRSSWebhook.md)
- [CreateTwitterWebhook](docs/Model/CreateTwitterWebhook.md)
- [EffectsEntry](docs/Model/EffectsEntry.md)
- [EffectsEntryType](docs/Model/EffectsEntryType.md)
- [Equipment](docs/Model/Equipment.md)
- [EquipmentParentSet](docs/Model/EquipmentParentSet.md)
- [EquipmentSet](docs/Model/EquipmentSet.md)
- [GetMetaAlmanaxBonuses200ResponseInner](docs/Model/GetMetaAlmanaxBonuses200ResponseInner.md)
- [GetMetaWebhooksTwitter200Response](docs/Model/GetMetaWebhooksTwitter200Response.md)
- [ImageUrls](docs/Model/ImageUrls.md)
- [ItemListEntry](docs/Model/ItemListEntry.md)
- [ItemsListEntryTyped](docs/Model/ItemsListEntryTyped.md)
- [ItemsListEntryTypedType](docs/Model/ItemsListEntryTypedType.md)
- [ItemsListPaged](docs/Model/ItemsListPaged.md)
- [LinksPaged](docs/Model/LinksPaged.md)
- [Mount](docs/Model/Mount.md)
- [MountListEntry](docs/Model/MountListEntry.md)
- [MountsListPaged](docs/Model/MountsListPaged.md)
- [PutAlmanaxWebhook](docs/Model/PutAlmanaxWebhook.md)
- [PutRSSWebhook](docs/Model/PutRSSWebhook.md)
- [PutTwitterWebhook](docs/Model/PutTwitterWebhook.md)
- [RecipeEntry](docs/Model/RecipeEntry.md)
- [Resource](docs/Model/Resource.md)
- [RssWebhook](docs/Model/RssWebhook.md)
- [SetListEntry](docs/Model/SetListEntry.md)
- [SetsListPaged](docs/Model/SetsListPaged.md)
- [TwitterWebhook](docs/Model/TwitterWebhook.md)
- [Weapon](docs/Model/Weapon.md)
- [WeaponRange](docs/Model/WeaponRange.md)

## Authorization
All endpoints do not require authorization.
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

- API version: `0.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
