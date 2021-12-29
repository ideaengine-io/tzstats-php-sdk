<?php
/**
 * InlineResponse2008
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TZstats
 *
 * API for TZstats.com
 *
 * The version of the OpenAPI document: 1.0
 * Contact: tezos@whafor.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace IdeaEngine\TzStats\Model;

use \ArrayAccess;
use \IdeaEngine\TzStats\ObjectSerializer;

/**
 * InlineResponse2008 Class Doc Comment
 *
 * @category Class
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2008 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_8';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'storage_type' => '\IdeaEngine\TzStats\Model\InlineResponse2008StorageType',
        'entrypoints' => '\IdeaEngine\TzStats\Model\InlineResponse2008Entrypoints',
        'bigmaps' => '\IdeaEngine\TzStats\Model\InlineResponse2007Bigmaps'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'storage_type' => null,
        'entrypoints' => null,
        'bigmaps' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'storage_type' => 'storage_type',
        'entrypoints' => 'entrypoints',
        'bigmaps' => 'bigmaps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'storage_type' => 'setStorageType',
        'entrypoints' => 'setEntrypoints',
        'bigmaps' => 'setBigmaps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'storage_type' => 'getStorageType',
        'entrypoints' => 'getEntrypoints',
        'bigmaps' => 'getBigmaps'
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
        $this->container['storage_type'] = $data['storage_type'] ?? null;
        $this->container['entrypoints'] = $data['entrypoints'] ?? null;
        $this->container['bigmaps'] = $data['bigmaps'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['storage_type'] === null) {
            $invalidProperties[] = "'storage_type' can't be null";
        }
        if ($this->container['entrypoints'] === null) {
            $invalidProperties[] = "'entrypoints' can't be null";
        }
        if ($this->container['bigmaps'] === null) {
            $invalidProperties[] = "'bigmaps' can't be null";
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
     * Gets storage_type
     *
     * @return \IdeaEngine\TzStats\Model\InlineResponse2008StorageType
     */
    public function getStorageType()
    {
        return $this->container['storage_type'];
    }

    /**
     * Sets storage_type
     *
     * @param \IdeaEngine\TzStats\Model\InlineResponse2008StorageType $storage_type storage_type
     *
     * @return self
     */
    public function setStorageType($storage_type)
    {
        $this->container['storage_type'] = $storage_type;

        return $this;
    }

    /**
     * Gets entrypoints
     *
     * @return \IdeaEngine\TzStats\Model\InlineResponse2008Entrypoints
     */
    public function getEntrypoints()
    {
        return $this->container['entrypoints'];
    }

    /**
     * Sets entrypoints
     *
     * @param \IdeaEngine\TzStats\Model\InlineResponse2008Entrypoints $entrypoints entrypoints
     *
     * @return self
     */
    public function setEntrypoints($entrypoints)
    {
        $this->container['entrypoints'] = $entrypoints;

        return $this;
    }

    /**
     * Gets bigmaps
     *
     * @return \IdeaEngine\TzStats\Model\InlineResponse2007Bigmaps
     */
    public function getBigmaps()
    {
        return $this->container['bigmaps'];
    }

    /**
     * Sets bigmaps
     *
     * @param \IdeaEngine\TzStats\Model\InlineResponse2007Bigmaps $bigmaps bigmaps
     *
     * @return self
     */
    public function setBigmaps($bigmaps)
    {
        $this->container['bigmaps'] = $bigmaps;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

