# # Weapon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ankama_id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**type** | [**\OpenAPI\Client\Model\ItemsListEntryTypedType**](ItemsListEntryTypedType.md) |  | [optional]
**is_weapon** | **bool** | always true when the item is a weapon. Many fields are now available. Always check for this flag first when getting single equipment items. | [optional]
**level** | **int** |  | [optional]
**pods** | **int** |  | [optional]
**image_urls** | [**\OpenAPI\Client\Model\ImageUrls**](ImageUrls.md) |  | [optional]
**effects** | [**\OpenAPI\Client\Model\EffectsEntry[]**](EffectsEntry.md) |  | [optional]
**conditions** | [**\OpenAPI\Client\Model\ConditionEntry[]**](ConditionEntry.md) |  | [optional]
**critical_hit_probability** | **int** |  | [optional]
**critical_hit_bonus** | **int** |  | [optional]
**is_two_handed** | **bool** |  | [optional]
**max_cast_per_turn** | **int** |  | [optional]
**ap_cost** | **int** |  | [optional]
**range** | [**\OpenAPI\Client\Model\WeaponRange**](WeaponRange.md) |  | [optional]
**recipe** | [**\OpenAPI\Client\Model\RecipeEntry[]**](RecipeEntry.md) |  | [optional]
**parent_set** | [**\OpenAPI\Client\Model\EquipmentParentSet**](EquipmentParentSet.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
