<?php
/**
 * ItemListEntry
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
 * # A project for you - the developer. The all-in-one toolbelt for your next Ankama related project.  ## Client SDKs - [Javascript](https://github.com/dofusdude/dofusdude-js) `npm i dofusdude-js --save` - [Typescript](https://github.com/dofusdude/dofusdude-ts) `npm i dofusdude-ts --save` - [Go](https://github.com/dofusdude/dodugo) `go get -u github.com/dofusdude/dodugo` - [Python](https://github.com/dofusdude/dofusdude-py) `pip install dofusdude` - [PHP](https://github.com/dofusdude/dofusdude-php) - [Java](https://github.com/dofusdude/dofusdude-java) Maven with GitHub packages setup  Everything, including this site, is generated out of the [Docs Repo](https://github.com/dofusdude/api-docs). Consider it the Single Source of Truth. If there is a problem with the SDKs, create an issue there.  Your favorite language is missing? Please let me know!  # Main Features - 🥷 **Seamless Auto-Update** load data in the background when a new Dofus version is released and serving it within 10 minutes with atomic data source switching. No downtime and no effects for the user, just always up-to-date.  - ⚡ **Blazingly Fast** all data in-memory, aggressive caching over short time spans, HTTP/2 multiplexing, written in Go, optimized for low latency, hosted on bare metal in 🇩🇪.  - 📨 **Discord Integration** Ankama related RSS and Almanax feeds to post to Discord servers with advanced features like filters or mentions. Use the endpoints as a dev or the official [Web Client](https://discord.dofusdude.com) as a user.  - 🩸 **Dofus 2 Beta** from stable to bleeding edge by replacing /dofus2 with /dofus2beta.  - 🗣️ **Multilingual** supporting _en_, _fr_, _es_, _pt_ including the dropped languages from the Dofus website _de_ and _it_.  - 🧠 **Search by Relevance** allowing typos in name and description, handled by language specific text analysis and indexing.  - 🕵️ **Complete** actual data from the game including items invisible to the encyclopedia like quest items.  - 🖼️ **HD Images** rendering game assets to high-res images with up to 800x800 px.  ... and much more on the Roadmap on my [Discord](https://discord.gg/3EtHskZD8h).
 *
 * The version of the OpenAPI document: 0.9.3
 * Contact: stelzo@steado.de
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0-SNAPSHOT
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
 * ItemListEntry Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemListEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Item-List-Entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ankama_id' => 'int',
        'name' => 'string',
        'type' => '\OpenAPI\Client\Model\ItemsListEntryTypedType',
        'level' => 'int',
        'image_urls' => '\OpenAPI\Client\Model\ImageUrls',
        'recipe' => '\OpenAPI\Client\Model\RecipeEntry[]',
        'description' => 'string',
        'conditions' => '\OpenAPI\Client\Model\ConditionEntry[]',
        'condition_tree' => '\OpenAPI\Client\Model\ConditionTreeNode',
        'effects' => '\OpenAPI\Client\Model\EffectsEntry[]',
        'is_weapon' => 'bool',
        'pods' => 'int',
        'parent_set' => '\OpenAPI\Client\Model\ItemListEntryParentSet',
        'critical_hit_probability' => 'int',
        'critical_hit_bonus' => 'int',
        'is_two_handed' => 'bool',
        'max_cast_per_turn' => 'int',
        'ap_cost' => 'int',
        'range' => '\OpenAPI\Client\Model\ItemListEntryRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ankama_id' => null,
        'name' => null,
        'type' => null,
        'level' => null,
        'image_urls' => null,
        'recipe' => null,
        'description' => null,
        'conditions' => null,
        'condition_tree' => null,
        'effects' => null,
        'is_weapon' => null,
        'pods' => null,
        'parent_set' => null,
        'critical_hit_probability' => null,
        'critical_hit_bonus' => null,
        'is_two_handed' => null,
        'max_cast_per_turn' => null,
        'ap_cost' => null,
        'range' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ankama_id' => false,
        'name' => false,
        'type' => false,
        'level' => false,
        'image_urls' => false,
        'recipe' => true,
        'description' => true,
        'conditions' => true,
        'condition_tree' => false,
        'effects' => true,
        'is_weapon' => true,
        'pods' => true,
        'parent_set' => true,
        'critical_hit_probability' => true,
        'critical_hit_bonus' => true,
        'is_two_handed' => true,
        'max_cast_per_turn' => true,
        'ap_cost' => true,
        'range' => true
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
        'ankama_id' => 'ankama_id',
        'name' => 'name',
        'type' => 'type',
        'level' => 'level',
        'image_urls' => 'image_urls',
        'recipe' => 'recipe',
        'description' => 'description',
        'conditions' => 'conditions',
        'condition_tree' => 'condition_tree',
        'effects' => 'effects',
        'is_weapon' => 'is_weapon',
        'pods' => 'pods',
        'parent_set' => 'parent_set',
        'critical_hit_probability' => 'critical_hit_probability',
        'critical_hit_bonus' => 'critical_hit_bonus',
        'is_two_handed' => 'is_two_handed',
        'max_cast_per_turn' => 'max_cast_per_turn',
        'ap_cost' => 'ap_cost',
        'range' => 'range'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ankama_id' => 'setAnkamaId',
        'name' => 'setName',
        'type' => 'setType',
        'level' => 'setLevel',
        'image_urls' => 'setImageUrls',
        'recipe' => 'setRecipe',
        'description' => 'setDescription',
        'conditions' => 'setConditions',
        'condition_tree' => 'setConditionTree',
        'effects' => 'setEffects',
        'is_weapon' => 'setIsWeapon',
        'pods' => 'setPods',
        'parent_set' => 'setParentSet',
        'critical_hit_probability' => 'setCriticalHitProbability',
        'critical_hit_bonus' => 'setCriticalHitBonus',
        'is_two_handed' => 'setIsTwoHanded',
        'max_cast_per_turn' => 'setMaxCastPerTurn',
        'ap_cost' => 'setApCost',
        'range' => 'setRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ankama_id' => 'getAnkamaId',
        'name' => 'getName',
        'type' => 'getType',
        'level' => 'getLevel',
        'image_urls' => 'getImageUrls',
        'recipe' => 'getRecipe',
        'description' => 'getDescription',
        'conditions' => 'getConditions',
        'condition_tree' => 'getConditionTree',
        'effects' => 'getEffects',
        'is_weapon' => 'getIsWeapon',
        'pods' => 'getPods',
        'parent_set' => 'getParentSet',
        'critical_hit_probability' => 'getCriticalHitProbability',
        'critical_hit_bonus' => 'getCriticalHitBonus',
        'is_two_handed' => 'getIsTwoHanded',
        'max_cast_per_turn' => 'getMaxCastPerTurn',
        'ap_cost' => 'getApCost',
        'range' => 'getRange'
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
        $this->setIfExists('ankama_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('image_urls', $data ?? [], null);
        $this->setIfExists('recipe', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
        $this->setIfExists('condition_tree', $data ?? [], null);
        $this->setIfExists('effects', $data ?? [], null);
        $this->setIfExists('is_weapon', $data ?? [], null);
        $this->setIfExists('pods', $data ?? [], null);
        $this->setIfExists('parent_set', $data ?? [], null);
        $this->setIfExists('critical_hit_probability', $data ?? [], null);
        $this->setIfExists('critical_hit_bonus', $data ?? [], null);
        $this->setIfExists('is_two_handed', $data ?? [], null);
        $this->setIfExists('max_cast_per_turn', $data ?? [], null);
        $this->setIfExists('ap_cost', $data ?? [], null);
        $this->setIfExists('range', $data ?? [], null);
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
     * Gets ankama_id
     *
     * @return int|null
     */
    public function getAnkamaId()
    {
        return $this->container['ankama_id'];
    }

    /**
     * Sets ankama_id
     *
     * @param int|null $ankama_id ankama_id
     *
     * @return self
     */
    public function setAnkamaId($ankama_id)
    {
        if (is_null($ankama_id)) {
            throw new \InvalidArgumentException('non-nullable ankama_id cannot be null');
        }
        $this->container['ankama_id'] = $ankama_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ItemsListEntryTypedType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ItemsListEntryTypedType|null $type type
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
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level level
     *
     * @return self
     */
    public function setLevel($level)
    {
        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets image_urls
     *
     * @return \OpenAPI\Client\Model\ImageUrls|null
     */
    public function getImageUrls()
    {
        return $this->container['image_urls'];
    }

    /**
     * Sets image_urls
     *
     * @param \OpenAPI\Client\Model\ImageUrls|null $image_urls image_urls
     *
     * @return self
     */
    public function setImageUrls($image_urls)
    {
        if (is_null($image_urls)) {
            throw new \InvalidArgumentException('non-nullable image_urls cannot be null');
        }
        $this->container['image_urls'] = $image_urls;

        return $this;
    }

    /**
     * Gets recipe
     *
     * @return \OpenAPI\Client\Model\RecipeEntry[]|null
     */
    public function getRecipe()
    {
        return $this->container['recipe'];
    }

    /**
     * Sets recipe
     *
     * @param \OpenAPI\Client\Model\RecipeEntry[]|null $recipe recipe
     *
     * @return self
     */
    public function setRecipe($recipe)
    {
        if (is_null($recipe)) {
            array_push($this->openAPINullablesSetToNull, 'recipe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recipe'] = $recipe;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \OpenAPI\Client\Model\ConditionEntry[]|null
     * @deprecated
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \OpenAPI\Client\Model\ConditionEntry[]|null $conditions conditions
     *
     * @return self
     * @deprecated
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            array_push($this->openAPINullablesSetToNull, 'conditions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('conditions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets condition_tree
     *
     * @return \OpenAPI\Client\Model\ConditionTreeNode|null
     */
    public function getConditionTree()
    {
        return $this->container['condition_tree'];
    }

    /**
     * Sets condition_tree
     *
     * @param \OpenAPI\Client\Model\ConditionTreeNode|null $condition_tree condition_tree
     *
     * @return self
     */
    public function setConditionTree($condition_tree)
    {
        if (is_null($condition_tree)) {
            throw new \InvalidArgumentException('non-nullable condition_tree cannot be null');
        }
        $this->container['condition_tree'] = $condition_tree;

        return $this;
    }

    /**
     * Gets effects
     *
     * @return \OpenAPI\Client\Model\EffectsEntry[]|null
     */
    public function getEffects()
    {
        return $this->container['effects'];
    }

    /**
     * Sets effects
     *
     * @param \OpenAPI\Client\Model\EffectsEntry[]|null $effects effects
     *
     * @return self
     */
    public function setEffects($effects)
    {
        if (is_null($effects)) {
            array_push($this->openAPINullablesSetToNull, 'effects');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('effects', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['effects'] = $effects;

        return $this;
    }

    /**
     * Gets is_weapon
     *
     * @return bool|null
     */
    public function getIsWeapon()
    {
        return $this->container['is_weapon'];
    }

    /**
     * Sets is_weapon
     *
     * @param bool|null $is_weapon is_weapon
     *
     * @return self
     */
    public function setIsWeapon($is_weapon)
    {
        if (is_null($is_weapon)) {
            array_push($this->openAPINullablesSetToNull, 'is_weapon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_weapon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_weapon'] = $is_weapon;

        return $this;
    }

    /**
     * Gets pods
     *
     * @return int|null
     */
    public function getPods()
    {
        return $this->container['pods'];
    }

    /**
     * Sets pods
     *
     * @param int|null $pods pods
     *
     * @return self
     */
    public function setPods($pods)
    {
        if (is_null($pods)) {
            array_push($this->openAPINullablesSetToNull, 'pods');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pods', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pods'] = $pods;

        return $this;
    }

    /**
     * Gets parent_set
     *
     * @return \OpenAPI\Client\Model\ItemListEntryParentSet|null
     */
    public function getParentSet()
    {
        return $this->container['parent_set'];
    }

    /**
     * Sets parent_set
     *
     * @param \OpenAPI\Client\Model\ItemListEntryParentSet|null $parent_set parent_set
     *
     * @return self
     */
    public function setParentSet($parent_set)
    {
        if (is_null($parent_set)) {
            array_push($this->openAPINullablesSetToNull, 'parent_set');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_set', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent_set'] = $parent_set;

        return $this;
    }

    /**
     * Gets critical_hit_probability
     *
     * @return int|null
     */
    public function getCriticalHitProbability()
    {
        return $this->container['critical_hit_probability'];
    }

    /**
     * Sets critical_hit_probability
     *
     * @param int|null $critical_hit_probability critical_hit_probability
     *
     * @return self
     */
    public function setCriticalHitProbability($critical_hit_probability)
    {
        if (is_null($critical_hit_probability)) {
            array_push($this->openAPINullablesSetToNull, 'critical_hit_probability');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('critical_hit_probability', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['critical_hit_probability'] = $critical_hit_probability;

        return $this;
    }

    /**
     * Gets critical_hit_bonus
     *
     * @return int|null
     */
    public function getCriticalHitBonus()
    {
        return $this->container['critical_hit_bonus'];
    }

    /**
     * Sets critical_hit_bonus
     *
     * @param int|null $critical_hit_bonus critical_hit_bonus
     *
     * @return self
     */
    public function setCriticalHitBonus($critical_hit_bonus)
    {
        if (is_null($critical_hit_bonus)) {
            array_push($this->openAPINullablesSetToNull, 'critical_hit_bonus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('critical_hit_bonus', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['critical_hit_bonus'] = $critical_hit_bonus;

        return $this;
    }

    /**
     * Gets is_two_handed
     *
     * @return bool|null
     */
    public function getIsTwoHanded()
    {
        return $this->container['is_two_handed'];
    }

    /**
     * Sets is_two_handed
     *
     * @param bool|null $is_two_handed is_two_handed
     *
     * @return self
     */
    public function setIsTwoHanded($is_two_handed)
    {
        if (is_null($is_two_handed)) {
            array_push($this->openAPINullablesSetToNull, 'is_two_handed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_two_handed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_two_handed'] = $is_two_handed;

        return $this;
    }

    /**
     * Gets max_cast_per_turn
     *
     * @return int|null
     */
    public function getMaxCastPerTurn()
    {
        return $this->container['max_cast_per_turn'];
    }

    /**
     * Sets max_cast_per_turn
     *
     * @param int|null $max_cast_per_turn max_cast_per_turn
     *
     * @return self
     */
    public function setMaxCastPerTurn($max_cast_per_turn)
    {
        if (is_null($max_cast_per_turn)) {
            array_push($this->openAPINullablesSetToNull, 'max_cast_per_turn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_cast_per_turn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_cast_per_turn'] = $max_cast_per_turn;

        return $this;
    }

    /**
     * Gets ap_cost
     *
     * @return int|null
     */
    public function getApCost()
    {
        return $this->container['ap_cost'];
    }

    /**
     * Sets ap_cost
     *
     * @param int|null $ap_cost ap_cost
     *
     * @return self
     */
    public function setApCost($ap_cost)
    {
        if (is_null($ap_cost)) {
            array_push($this->openAPINullablesSetToNull, 'ap_cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ap_cost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ap_cost'] = $ap_cost;

        return $this;
    }

    /**
     * Gets range
     *
     * @return \OpenAPI\Client\Model\ItemListEntryRange|null
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param \OpenAPI\Client\Model\ItemListEntryRange|null $range range
     *
     * @return self
     */
    public function setRange($range)
    {
        if (is_null($range)) {
            array_push($this->openAPINullablesSetToNull, 'range');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('range', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['range'] = $range;

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


