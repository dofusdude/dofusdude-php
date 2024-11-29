# # PutAlmanaxWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bonus_whitelist** | **string[]** | from all available bonuses (ids) from /dofus3/meta/{language}/almanax/bonuses. Delete old entries with empty array []. Just null changes nothing. | [optional]
**bonus_blacklist** | **string[]** | from all available bonuses (ids) from /dofus3/meta/{language}/almanax/bonuses. Delete old entries with empty array []. Just null changes nothing. | [optional]
**subscriptions** | **string[]** | Get the available subscriptions with /meta/webhooks/almanax | [optional]
**daily_settings** | [**\OpenAPI\Client\Model\CreateAlmanaxWebhookDailySettings**](CreateAlmanaxWebhookDailySettings.md) |  | [optional]
**iso_date** | **bool** | If false, it will use common local time formats and weekday translations. If true, the format is YYYY-MM-DD. | [optional] [default to false]
**mentions** | **array<string,\OpenAPI\Client\Model\CreateAlmanaxWebhookMentionsValueInner[]>** | Almanax bonus ids mapped to array of mentions. | [optional]
**intervals** | **string[]** |  | [optional]
**weekly_weekday** | **string** | When to post the weekly preview at the specified time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
