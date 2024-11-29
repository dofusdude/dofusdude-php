<?php
/**
 * CreateTwitterWebhook
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
 * The version of the OpenAPI document: 1.0.0-rc.2
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
 * CreateTwitterWebhook Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateTwitterWebhook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTwitterWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'whitelist' => 'string[]',
        'blacklist' => 'string[]',
        'subscriptions' => 'string[]',
        'format' => 'string',
        'preview_length' => 'int',
        'callback' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'whitelist' => null,
        'blacklist' => null,
        'subscriptions' => null,
        'format' => null,
        'preview_length' => 'int32',
        'callback' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'whitelist' => true,
        'blacklist' => true,
        'subscriptions' => false,
        'format' => false,
        'preview_length' => true,
        'callback' => false
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
        'whitelist' => 'whitelist',
        'blacklist' => 'blacklist',
        'subscriptions' => 'subscriptions',
        'format' => 'format',
        'preview_length' => 'preview_length',
        'callback' => 'callback'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'whitelist' => 'setWhitelist',
        'blacklist' => 'setBlacklist',
        'subscriptions' => 'setSubscriptions',
        'format' => 'setFormat',
        'preview_length' => 'setPreviewLength',
        'callback' => 'setCallback'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'whitelist' => 'getWhitelist',
        'blacklist' => 'getBlacklist',
        'subscriptions' => 'getSubscriptions',
        'format' => 'getFormat',
        'preview_length' => 'getPreviewLength',
        'callback' => 'getCallback'
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

    public const FORMAT_DISCORD = 'discord';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_DISCORD,
        ];
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
        $this->setIfExists('whitelist', $data ?? [], null);
        $this->setIfExists('blacklist', $data ?? [], null);
        $this->setIfExists('subscriptions', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('preview_length', $data ?? [], null);
        $this->setIfExists('callback', $data ?? [], null);
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

        if ($this->container['subscriptions'] === null) {
            $invalidProperties[] = "'subscriptions' can't be null";
        }
        if ((count($this->container['subscriptions']) < 1)) {
            $invalidProperties[] = "invalid value for 'subscriptions', number of items must be greater than or equal to 1.";
        }

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['preview_length']) && ($this->container['preview_length'] > 280)) {
            $invalidProperties[] = "invalid value for 'preview_length', must be smaller than or equal to 280.";
        }

        if (!is_null($this->container['preview_length']) && ($this->container['preview_length'] < 0)) {
            $invalidProperties[] = "invalid value for 'preview_length', must be bigger than or equal to 0.";
        }

        if ($this->container['callback'] === null) {
            $invalidProperties[] = "'callback' can't be null";
        }
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
     * Gets whitelist
     *
     * @return string[]|null
     */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
     * Sets whitelist
     *
     * @param string[]|null $whitelist whitelist
     *
     * @return self
     */
    public function setWhitelist($whitelist)
    {
        if (is_null($whitelist)) {
            array_push($this->openAPINullablesSetToNull, 'whitelist');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('whitelist', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['whitelist'] = $whitelist;

        return $this;
    }

    /**
     * Gets blacklist
     *
     * @return string[]|null
     */
    public function getBlacklist()
    {
        return $this->container['blacklist'];
    }

    /**
     * Sets blacklist
     *
     * @param string[]|null $blacklist blacklist
     *
     * @return self
     */
    public function setBlacklist($blacklist)
    {
        if (is_null($blacklist)) {
            array_push($this->openAPINullablesSetToNull, 'blacklist');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('blacklist', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['blacklist'] = $blacklist;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return string[]
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param string[] $subscriptions Get the available subscriptions with /meta/webhooks/twitter
     *
     * @return self
     */
    public function setSubscriptions($subscriptions)
    {
        if (is_null($subscriptions)) {
            throw new \InvalidArgumentException('non-nullable subscriptions cannot be null');
        }


        if ((count($subscriptions) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subscriptions when calling CreateTwitterWebhook., number of items must be greater than or equal to 1.');
        }
        $this->container['subscriptions'] = $subscriptions;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets preview_length
     *
     * @return int|null
     */
    public function getPreviewLength()
    {
        return $this->container['preview_length'];
    }

    /**
     * Sets preview_length
     *
     * @param int|null $preview_length preview_length
     *
     * @return self
     */
    public function setPreviewLength($preview_length)
    {
        if (is_null($preview_length)) {
            array_push($this->openAPINullablesSetToNull, 'preview_length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preview_length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($preview_length) && ($preview_length > 280)) {
            throw new \InvalidArgumentException('invalid value for $preview_length when calling CreateTwitterWebhook., must be smaller than or equal to 280.');
        }
        if (!is_null($preview_length) && ($preview_length < 0)) {
            throw new \InvalidArgumentException('invalid value for $preview_length when calling CreateTwitterWebhook., must be bigger than or equal to 0.');
        }

        $this->container['preview_length'] = $preview_length;

        return $this;
    }

    /**
     * Gets callback
     *
     * @return string
     */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
     * Sets callback
     *
     * @param string $callback Discord Webhook URL
     *
     * @return self
     */
    public function setCallback($callback)
    {
        if (is_null($callback)) {
            throw new \InvalidArgumentException('non-nullable callback cannot be null');
        }
        $this->container['callback'] = $callback;

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


