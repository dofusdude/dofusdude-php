# # CreateAlmanaxWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bonus_whitelist** | **string[]** | from all available bonuses (ids) from /dofus3/meta/{language}/almanax/bonuses | [optional]
**bonus_blacklist** | **string[]** | from all available bonuses (ids) from /dofus3/meta/{language}/almanax/bonuses | [optional]
**subscriptions** | **string[]** | Get the available subscriptions with /meta/webhooks/almanax |
**format** | **string** |  |
**callback** | **string** | Discord Webhook URL |
**daily_settings** | [**\OpenAPI\Client\Model\CreateAlmanaxWebhookDailySettings**](CreateAlmanaxWebhookDailySettings.md) |  | [optional]
**iso_date** | **bool** | If false, it will use common local time formats and weekday translations. If true, the format is YYYY-MM-DD. | [optional] [default to false]
**mentions** | **array<string,\OpenAPI\Client\Model\CreateAlmanaxWebhookMentionsValueInner[]>** | Almanax bonus ids mapped to array of mentions. | [optional]
**intervals** | **string[]** | - Daily posts each day, filtering with Black/Whitelist and mentions are applied daily. - Weekly posts the next 7 days (excluding the posting day) once per week at the specified time. With only weekly selected, of all mentions, only prior notices will come through daily. The 7 day preview gets filtered by the Black/Whitelist. - Monthly posts a preview of the next month from first to last date. The post will be on the last day of a month (ignoring day of the week) at the specified time. Mentions and filtering works like weekly. The biggest difference between daily and the other two is that daily always posts the current day while monthly and weekly only show future days. You can always combine the intervals by selecting multiple intervals for one hook or create multiple hooks for the same channel with different settings to get every highly specific combination you want. |
**weekly_weekday** | **string** | When to post the weekly preview at the specified time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
