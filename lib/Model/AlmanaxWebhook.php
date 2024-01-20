<?php
/**
 * AlmanaxWebhook
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
 * # A project for you - the developer. The all-in-one toolbelt for your next Ankama related project.  ## Client SDKs - [Javascript](https://github.com/dofusdude/dofusdude-js) npm i dofusdude-js --save - [Typescript](https://github.com/dofusdude/dofusdude-ts) npm i dofusdude-ts --save - [Go](https://github.com/dofusdude/dodugo) go get -u github.com/dofusdude/dodugo - [Python](https://github.com/dofusdude/dofusdude-py) pip install dofusdude - [PHP](https://github.com/dofusdude/dofusdude-php)  Everything, including this site, is generated out of the [Docs Repo](https://github.com/dofusdude/api-docs). Consider it the Single Source of Truth. If there is a problem with the SDKs, create an issue there.  Your favorite language is missing? Please let me know!  # Main Features - 🥷 **Seamless Auto-Update** load data in the background when a new Dofus version is released and serving it within 2 minutes with atomic data source switching. No downtime and no effects for the user, just always up-to-date.  - ⚡ **Blazingly Fast** all data in-memory, aggressive caching over short time spans, HTTP/2 multiplexing, written in Go, optimized for low latency, hosted on bare metal in 🇩🇪.  - 📨 **Discord Integration** Ankama related RSS and Almanax feeds to post to Discord servers with advanced features like filters or mentions. Use the endpoints as a dev or the official [Web Client](https://discord.dofusdude.com) as a user.  - 🩸 **Dofus 2 Beta** from stable to bleeding edge by replacing /dofus2 with /dofus2beta.  - 🗣️ **Multilingual** supporting _en_, _fr_, _es_, _pt_ including the dropped languages from the Dofus website _de_ and _it_.  - 🧠 **Search by Relevance** allowing typos in name and description, handled by language specific text analysis and indexing.  - 🕵️ **Complete** actual data from the game including items invisible to the encyclopedia like quest items.  - 🖼️ **HD Images** rendering game assets to high-res images with up to 800x800 px.  ... and much more on the Roadmap on my Discord.   ## Deploy now. Use forever. Everything you see here on this site, you can use now and forever. Updates could introduce new fields, new paths or parameter but never break backwards compatibility.  There is one exception! **The API will _always_ choose being up-to-date over everything else**. So if Ankama decides to drop languages from the game like they did with their website, the API will loose support for them, too.  ## Thank you! I highly welcome everyone on my [Discord](https://discord.gg/3EtHskZD8h) to just talk about projects and use cases or give feedback of any kind.  The servers have a fixed monthly cost to provide very fast responses. If you want to help me keeping them running or simply donate to that cause, consider becoming a [GitHub Sponsor](https://github.com/sponsors/dofusdude).
 *
 * The version of the OpenAPI document: 0.8.1
 * Contact: stelzo@steado.de
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
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
 * AlmanaxWebhook Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AlmanaxWebhook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlmanaxWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'daily_settings' => '\OpenAPI\Client\Model\AlmanaxWebhookDailySettings',
        'bonus_whitelist' => 'string[]',
        'bonus_blacklist' => 'string[]',
        'subscriptions' => 'string[]',
        'iso_date' => 'bool',
        'mentions' => 'array<string,\OpenAPI\Client\Model\CreateAlmanaxWebhookMentionsValueInner[]>',
        'intervals' => 'string[]',
        'weekly_weekday' => 'string',
        'created_at' => '\DateTime',
        'last_fired_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'daily_settings' => null,
        'bonus_whitelist' => null,
        'bonus_blacklist' => null,
        'subscriptions' => null,
        'iso_date' => null,
        'mentions' => null,
        'intervals' => null,
        'weekly_weekday' => null,
        'created_at' => 'date-time',
        'last_fired_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'daily_settings' => false,
        'bonus_whitelist' => true,
        'bonus_blacklist' => true,
        'subscriptions' => false,
        'iso_date' => false,
        'mentions' => true,
        'intervals' => false,
        'weekly_weekday' => true,
        'created_at' => false,
        'last_fired_at' => true,
        'updated_at' => false
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
        'id' => 'id',
        'daily_settings' => 'daily_settings',
        'bonus_whitelist' => 'bonus_whitelist',
        'bonus_blacklist' => 'bonus_blacklist',
        'subscriptions' => 'subscriptions',
        'iso_date' => 'iso_date',
        'mentions' => 'mentions',
        'intervals' => 'intervals',
        'weekly_weekday' => 'weekly_weekday',
        'created_at' => 'created_at',
        'last_fired_at' => 'last_fired_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'daily_settings' => 'setDailySettings',
        'bonus_whitelist' => 'setBonusWhitelist',
        'bonus_blacklist' => 'setBonusBlacklist',
        'subscriptions' => 'setSubscriptions',
        'iso_date' => 'setIsoDate',
        'mentions' => 'setMentions',
        'intervals' => 'setIntervals',
        'weekly_weekday' => 'setWeeklyWeekday',
        'created_at' => 'setCreatedAt',
        'last_fired_at' => 'setLastFiredAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'daily_settings' => 'getDailySettings',
        'bonus_whitelist' => 'getBonusWhitelist',
        'bonus_blacklist' => 'getBonusBlacklist',
        'subscriptions' => 'getSubscriptions',
        'iso_date' => 'getIsoDate',
        'mentions' => 'getMentions',
        'intervals' => 'getIntervals',
        'weekly_weekday' => 'getWeeklyWeekday',
        'created_at' => 'getCreatedAt',
        'last_fired_at' => 'getLastFiredAt',
        'updated_at' => 'getUpdatedAt'
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

    public const INTERVALS_DAILY = 'daily';
    public const INTERVALS_WEEKLY = 'weekly';
    public const INTERVALS_MONTHLY = 'monthly';
    public const WEEKLY_WEEKDAY_SUNDAY = 'sunday';
    public const WEEKLY_WEEKDAY_MONDAY = 'monday';
    public const WEEKLY_WEEKDAY_TUESDAY = 'tuesday';
    public const WEEKLY_WEEKDAY_WEDNESDAY = 'wednesday';
    public const WEEKLY_WEEKDAY_THURSDAY = 'thursday';
    public const WEEKLY_WEEKDAY_FRIDAY = 'friday';
    public const WEEKLY_WEEKDAY_SATURDAY = 'saturday';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntervalsAllowableValues()
    {
        return [
            self::INTERVALS_DAILY,
            self::INTERVALS_WEEKLY,
            self::INTERVALS_MONTHLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeeklyWeekdayAllowableValues()
    {
        return [
            self::WEEKLY_WEEKDAY_SUNDAY,
            self::WEEKLY_WEEKDAY_MONDAY,
            self::WEEKLY_WEEKDAY_TUESDAY,
            self::WEEKLY_WEEKDAY_WEDNESDAY,
            self::WEEKLY_WEEKDAY_THURSDAY,
            self::WEEKLY_WEEKDAY_FRIDAY,
            self::WEEKLY_WEEKDAY_SATURDAY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('daily_settings', $data ?? [], null);
        $this->setIfExists('bonus_whitelist', $data ?? [], null);
        $this->setIfExists('bonus_blacklist', $data ?? [], null);
        $this->setIfExists('subscriptions', $data ?? [], null);
        $this->setIfExists('iso_date', $data ?? [], false);
        $this->setIfExists('mentions', $data ?? [], null);
        $this->setIfExists('intervals', $data ?? [], null);
        $this->setIfExists('weekly_weekday', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('last_fired_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        $allowedValues = $this->getWeeklyWeekdayAllowableValues();
        if (!is_null($this->container['weekly_weekday']) && !in_array($this->container['weekly_weekday'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'weekly_weekday', must be one of '%s'",
                $this->container['weekly_weekday'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets daily_settings
     *
     * @return \OpenAPI\Client\Model\AlmanaxWebhookDailySettings|null
     */
    public function getDailySettings()
    {
        return $this->container['daily_settings'];
    }

    /**
     * Sets daily_settings
     *
     * @param \OpenAPI\Client\Model\AlmanaxWebhookDailySettings|null $daily_settings daily_settings
     *
     * @return self
     */
    public function setDailySettings($daily_settings)
    {
        if (is_null($daily_settings)) {
            throw new \InvalidArgumentException('non-nullable daily_settings cannot be null');
        }
        $this->container['daily_settings'] = $daily_settings;

        return $this;
    }

    /**
     * Gets bonus_whitelist
     *
     * @return string[]|null
     */
    public function getBonusWhitelist()
    {
        return $this->container['bonus_whitelist'];
    }

    /**
     * Sets bonus_whitelist
     *
     * @param string[]|null $bonus_whitelist Only post when these bonuses come up. From all available bonuses (ids) from /dofus2/meta/{language}/almanax/bonuses.
     *
     * @return self
     */
    public function setBonusWhitelist($bonus_whitelist)
    {
        if (is_null($bonus_whitelist)) {
            array_push($this->openAPINullablesSetToNull, 'bonus_whitelist');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bonus_whitelist', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bonus_whitelist'] = $bonus_whitelist;

        return $this;
    }

    /**
     * Gets bonus_blacklist
     *
     * @return string[]|null
     */
    public function getBonusBlacklist()
    {
        return $this->container['bonus_blacklist'];
    }

    /**
     * Sets bonus_blacklist
     *
     * @param string[]|null $bonus_blacklist Skip the day when these bonuses come up. From all available bonuses (ids) from /dofus2/meta/{language}/almanax/bonuses
     *
     * @return self
     */
    public function setBonusBlacklist($bonus_blacklist)
    {
        if (is_null($bonus_blacklist)) {
            array_push($this->openAPINullablesSetToNull, 'bonus_blacklist');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bonus_blacklist', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bonus_blacklist'] = $bonus_blacklist;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return string[]|null
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param string[]|null $subscriptions Get the available subscriptions with /meta/webhooks/almanax
     *
     * @return self
     */
    public function setSubscriptions($subscriptions)
    {
        if (is_null($subscriptions)) {
            throw new \InvalidArgumentException('non-nullable subscriptions cannot be null');
        }
        $this->container['subscriptions'] = $subscriptions;

        return $this;
    }

    /**
     * Gets iso_date
     *
     * @return bool|null
     */
    public function getIsoDate()
    {
        return $this->container['iso_date'];
    }

    /**
     * Sets iso_date
     *
     * @param bool|null $iso_date If false, it will use common local time formats and weekday translations. If true, the format is YYYY-MM-DD.
     *
     * @return self
     */
    public function setIsoDate($iso_date)
    {
        if (is_null($iso_date)) {
            throw new \InvalidArgumentException('non-nullable iso_date cannot be null');
        }
        $this->container['iso_date'] = $iso_date;

        return $this;
    }

    /**
     * Gets mentions
     *
     * @return array<string,\OpenAPI\Client\Model\CreateAlmanaxWebhookMentionsValueInner[]>|null
     */
    public function getMentions()
    {
        return $this->container['mentions'];
    }

    /**
     * Sets mentions
     *
     * @param array<string,\OpenAPI\Client\Model\CreateAlmanaxWebhookMentionsValueInner[]>|null $mentions Almanax bonus ids mapped to array of mentions.
     *
     * @return self
     */
    public function setMentions($mentions)
    {
        if (is_null($mentions)) {
            array_push($this->openAPINullablesSetToNull, 'mentions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mentions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mentions'] = $mentions;

        return $this;
    }

    /**
     * Gets intervals
     *
     * @return string[]|null
     */
    public function getIntervals()
    {
        return $this->container['intervals'];
    }

    /**
     * Sets intervals
     *
     * @param string[]|null $intervals - Daily posts each day, filtering with Black/Whitelist and mentions are applied daily. - Weekly posts the next 7 days (excluding the posting day) once per week at the specified time. With only weekly selected, of all mentions, only prior notices will come through daily. The 7 day preview gets filtered by the Black/Whitelist. - Monthly posts a preview of the next month from first to last date. The post will be on the last day of a month (ignoring day of the week) at the specified time. Mentions and filtering works like weekly. The biggest difference between daily and the other two is that daily always posts the current day while monthly and weekly only show future days. You can always combine the intervals by selecting multiple intervals for one hook or create multiple hooks for the same channel with different settings to get every highly specific combination you want.
     *
     * @return self
     */
    public function setIntervals($intervals)
    {
        if (is_null($intervals)) {
            throw new \InvalidArgumentException('non-nullable intervals cannot be null');
        }
        $allowedValues = $this->getIntervalsAllowableValues();
        if (array_diff($intervals, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'intervals', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['intervals'] = $intervals;

        return $this;
    }

    /**
     * Gets weekly_weekday
     *
     * @return string|null
     */
    public function getWeeklyWeekday()
    {
        return $this->container['weekly_weekday'];
    }

    /**
     * Sets weekly_weekday
     *
     * @param string|null $weekly_weekday When to post the weekly preview at the specified time.
     *
     * @return self
     */
    public function setWeeklyWeekday($weekly_weekday)
    {
        if (is_null($weekly_weekday)) {
            array_push($this->openAPINullablesSetToNull, 'weekly_weekday');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('weekly_weekday', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getWeeklyWeekdayAllowableValues();
        if (!is_null($weekly_weekday) && !in_array($weekly_weekday, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'weekly_weekday', must be one of '%s'",
                    $weekly_weekday,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weekly_weekday'] = $weekly_weekday;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets last_fired_at
     *
     * @return \DateTime|null
     */
    public function getLastFiredAt()
    {
        return $this->container['last_fired_at'];
    }

    /**
     * Sets last_fired_at
     *
     * @param \DateTime|null $last_fired_at last_fired_at
     *
     * @return self
     */
    public function setLastFiredAt($last_fired_at)
    {
        if (is_null($last_fired_at)) {
            array_push($this->openAPINullablesSetToNull, 'last_fired_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_fired_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_fired_at'] = $last_fired_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


