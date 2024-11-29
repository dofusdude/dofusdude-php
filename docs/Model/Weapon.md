# # Weapon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ankama_id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**type** | [**\OpenAPI\Client\Model\TranslatedId**](TranslatedId.md) |  | [optional]
**is_weapon** | **bool** | always true when the item is a weapon. Many fields are now available. Always check for this flag first when getting single equipment items. | [optional]
**level** | **int** |  | [optional]
**pods** | **int** |  | [optional]
**image_urls** | [**\OpenAPI\Client\Model\Images**](Images.md) |  | [optional]
**effects** | [**\OpenAPI\Client\Model\Effect[]**](Effect.md) |  | [optional]
**conditions** | [**\OpenAPI\Client\Model\ConditionNode**](ConditionNode.md) |  | [optional]
**critical_hit_probability** | **int** |  | [optional]
**critical_hit_bonus** | **int** |  | [optional]
**max_cast_per_turn** | **int** |  | [optional]
**ap_cost** | **int** |  | [optional]
**range** | [**\OpenAPI\Client\Model\Range**](Range.md) |  | [optional]
**recipe** | [**\OpenAPI\Client\Model\Recipe[]**](Recipe.md) |  | [optional]
**parent_set** | [**\OpenAPI\Client\Model\TranslatedId**](TranslatedId.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
