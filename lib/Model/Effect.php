<?php
/**
 * Effect
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * dofusdude
 *
 * # Open Ankama Developer Community The all-in-one toolbelt for your next Ankama related project.  ## Versions - [Dofus 2](https://docs.dofusdu.de/dofus2/) - [Dofus 3](https://docs.dofusdu.de/dofus3/)   - v1 [latest] (you are here)   ## Client SDKs - [Javascript](https://github.com/dofusdude/dofusdude-js) `npm i dofusdude-js --save` - [Typescript](https://github.com/dofusdude/dofusdude-ts) `npm i dofusdude-ts --save` - [Go](https://github.com/dofusdude/dodugo) `go get -u github.com/dofusdude/dodugo` - [Python](https://github.com/dofusdude/dofusdude-py) `pip install dofusdude` - [Java](https://github.com/dofusdude/dofusdude-java) Maven with GitHub packages setup  Everything, including this site, is generated out of the [Docs Repo](https://github.com/dofusdude/api-docs). Consider it the Single Source of Truth. If there is a problem with the SDKs, create an issue there.  Your favorite language is missing? Please let me know!  # Main Features - 🥷 **Seamless Auto-Update** load data in the background when a new Dofus version is released and serving it within 10 minutes with atomic data source switching. No downtime and no effects for the user, just always up-to-date.  - ⚡ **Blazingly Fast** all data in-memory, aggressive caching over short time spans, HTTP/2 multiplexing, written in Go, optimized for low latency, hosted on bare metal in 🇩🇪.  - 📨 **Almanax Discord Integration** Use the endpoints as a dev or the official [Web Client](https://discord.dofusdude.com) as a user.  - 🩸 **Dofus 3 Beta** from stable to bleeding edge by replacing /dofus3 with /dofus3beta.  - 🗣️ **Multilingual** supporting _en_, _fr_, _es_, _pt_, _de_.  - 🧠 **Search by Relevance** allowing typos in name and description, handled by language specific text analysis and indexing.  - 🕵️ **Official Sources** generated from actual data from the game.  ... and much more on the Roadmap on my [Discord](https://discord.gg/3EtHskZD8h).
 *
 * The version of the OpenAPI document: 1.0.0-rc.8
 * Contact: stelzo@steado.de
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Effect Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Effect implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Effect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'int_minimum' => 'int',
        'int_maximum' => 'int',
        'type' => '\OpenAPI\Client\Model\EffectType',
        'ignore_int_min' => 'bool',
        'ignore_int_max' => 'bool',
        'formatted' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'int_minimum' => null,
        'int_maximum' => null,
        'type' => null,
        'ignore_int_min' => null,
        'ignore_int_max' => null,
        'formatted' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'int_minimum' => false,
        'int_maximum' => false,
        'type' => false,
        'ignore_int_min' => false,
        'ignore_int_max' => false,
        'formatted' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'int_minimum' => 'int_minimum',
        'int_maximum' => 'int_maximum',
        'type' => 'type',
        'ignore_int_min' => 'ignore_int_min',
        'ignore_int_max' => 'ignore_int_max',
        'formatted' => 'formatted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'int_minimum' => 'setIntMinimum',
        'int_maximum' => 'setIntMaximum',
        'type' => 'setType',
        'ignore_int_min' => 'setIgnoreIntMin',
        'ignore_int_max' => 'setIgnoreIntMax',
        'formatted' => 'setFormatted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'int_minimum' => 'getIntMinimum',
        'int_maximum' => 'getIntMaximum',
        'type' => 'getType',
        'ignore_int_min' => 'getIgnoreIntMin',
        'ignore_int_max' => 'getIgnoreIntMax',
        'formatted' => 'getFormatted'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('int_minimum', $data ?? [], null);
        $this->setIfExists('int_maximum', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('ignore_int_min', $data ?? [], null);
        $this->setIfExists('ignore_int_max', $data ?? [], null);
        $this->setIfExists('formatted', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets int_minimum
     *
     * @return int|null
     */
    public function getIntMinimum()
    {
        return $this->container['int_minimum'];
    }

    /**
     * Sets int_minimum
     *
     * @param int|null $int_minimum minimum int value, can be a single if ignore_int_max and no ignore_int_min
     *
     * @return self
     */
    public function setIntMinimum($int_minimum)
    {
        if (is_null($int_minimum)) {
            throw new \InvalidArgumentException('non-nullable int_minimum cannot be null');
        }
        $this->container['int_minimum'] = $int_minimum;

        return $this;
    }

    /**
     * Gets int_maximum
     *
     * @return int|null
     */
    public function getIntMaximum()
    {
        return $this->container['int_maximum'];
    }

    /**
     * Sets int_maximum
     *
     * @param int|null $int_maximum maximum int value, if not ignore_int_max and not ignore_int_min, the effect has a range value
     *
     * @return self
     */
    public function setIntMaximum($int_maximum)
    {
        if (is_null($int_maximum)) {
            throw new \InvalidArgumentException('non-nullable int_maximum cannot be null');
        }
        $this->container['int_maximum'] = $int_maximum;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\EffectType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\EffectType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ignore_int_min
     *
     * @return bool|null
     */
    public function getIgnoreIntMin()
    {
        return $this->container['ignore_int_min'];
    }

    /**
     * Sets ignore_int_min
     *
     * @param bool|null $ignore_int_min ignore the int min field because the actual value is a string. For readability the templated field is the only important field in this case.
     *
     * @return self
     */
    public function setIgnoreIntMin($ignore_int_min)
    {
        if (is_null($ignore_int_min)) {
            throw new \InvalidArgumentException('non-nullable ignore_int_min cannot be null');
        }
        $this->container['ignore_int_min'] = $ignore_int_min;

        return $this;
    }

    /**
     * Gets ignore_int_max
     *
     * @return bool|null
     */
    public function getIgnoreIntMax()
    {
        return $this->container['ignore_int_max'];
    }

    /**
     * Sets ignore_int_max
     *
     * @param bool|null $ignore_int_max ignore the int max field, if ignore_int_min is true, int min is a single value
     *
     * @return self
     */
    public function setIgnoreIntMax($ignore_int_max)
    {
        if (is_null($ignore_int_max)) {
            throw new \InvalidArgumentException('non-nullable ignore_int_max cannot be null');
        }
        $this->container['ignore_int_max'] = $ignore_int_max;

        return $this;
    }

    /**
     * Gets formatted
     *
     * @return string|null
     */
    public function getFormatted()
    {
        return $this->container['formatted'];
    }

    /**
     * Sets formatted
     *
     * @param string|null $formatted all fields from above encoded in a single string
     *
     * @return self
     */
    public function setFormatted($formatted)
    {
        if (is_null($formatted)) {
            throw new \InvalidArgumentException('non-nullable formatted cannot be null');
        }
        $this->container['formatted'] = $formatted;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


