# # Effect

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**int_minimum** | **int** | minimum int value, can be a single if ignore_int_max and no ignore_int_min | [optional]
**int_maximum** | **int** | maximum int value, if not ignore_int_max and not ignore_int_min, the effect has a range value | [optional]
**type** | [**\OpenAPI\Client\Model\EffectType**](EffectType.md) |  | [optional]
**ignore_int_min** | **bool** | ignore the int min field because the actual value is a string. For readability the templated field is the only important field in this case. | [optional]
**ignore_int_max** | **bool** | ignore the int max field, if ignore_int_min is true, int min is a single value | [optional]
**formatted** | **string** | all fields from above encoded in a single string | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
