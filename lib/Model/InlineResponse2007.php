<?php
/**
 * InlineResponse2007
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzStats API - PHP SDK
 *
 * API for TZstats.com, useful for viewing information about the Tezos blockchain.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: code@ideaengine.io
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
 * InlineResponse2007 Class Doc Comment
 *
 * @category Class
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2007 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_7';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'creator' => 'string',
        'delegate' => 'string',
        'storage_size' => 'float',
        'storage_paid' => 'float',
        'first_seen' => 'float',
        'last_seen' => 'float',
        'first_seen_time' => 'string',
        'last_seen_time' => 'string',
        'n_ops' => 'float',
        'n_ops_failed' => 'float',
        'bigmaps' => '\IdeaEngine\TzStats\Model\InlineResponse2007Bigmaps',
        'iface_hash' => 'string',
        'code_hash' => 'string',
        'call_stats' => '\IdeaEngine\TzStats\Model\InlineResponse2007CallStats',
        'features' => 'mixed[]',
        'interfaces' => 'mixed[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'creator' => null,
        'delegate' => null,
        'storage_size' => null,
        'storage_paid' => null,
        'first_seen' => null,
        'last_seen' => null,
        'first_seen_time' => null,
        'last_seen_time' => null,
        'n_ops' => null,
        'n_ops_failed' => null,
        'bigmaps' => null,
        'iface_hash' => null,
        'code_hash' => null,
        'call_stats' => null,
        'features' => null,
        'interfaces' => null
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
        'address' => 'address',
        'creator' => 'creator',
        'delegate' => 'delegate',
        'storage_size' => 'storage_size',
        'storage_paid' => 'storage_paid',
        'first_seen' => 'first_seen',
        'last_seen' => 'last_seen',
        'first_seen_time' => 'first_seen_time',
        'last_seen_time' => 'last_seen_time',
        'n_ops' => 'n_ops',
        'n_ops_failed' => 'n_ops_failed',
        'bigmaps' => 'bigmaps',
        'iface_hash' => 'iface_hash',
        'code_hash' => 'code_hash',
        'call_stats' => 'call_stats',
        'features' => 'features',
        'interfaces' => 'interfaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'creator' => 'setCreator',
        'delegate' => 'setDelegate',
        'storage_size' => 'setStorageSize',
        'storage_paid' => 'setStoragePaid',
        'first_seen' => 'setFirstSeen',
        'last_seen' => 'setLastSeen',
        'first_seen_time' => 'setFirstSeenTime',
        'last_seen_time' => 'setLastSeenTime',
        'n_ops' => 'setNOps',
        'n_ops_failed' => 'setNOpsFailed',
        'bigmaps' => 'setBigmaps',
        'iface_hash' => 'setIfaceHash',
        'code_hash' => 'setCodeHash',
        'call_stats' => 'setCallStats',
        'features' => 'setFeatures',
        'interfaces' => 'setInterfaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'creator' => 'getCreator',
        'delegate' => 'getDelegate',
        'storage_size' => 'getStorageSize',
        'storage_paid' => 'getStoragePaid',
        'first_seen' => 'getFirstSeen',
        'last_seen' => 'getLastSeen',
        'first_seen_time' => 'getFirstSeenTime',
        'last_seen_time' => 'getLastSeenTime',
        'n_ops' => 'getNOps',
        'n_ops_failed' => 'getNOpsFailed',
        'bigmaps' => 'getBigmaps',
        'iface_hash' => 'getIfaceHash',
        'code_hash' => 'getCodeHash',
        'call_stats' => 'getCallStats',
        'features' => 'getFeatures',
        'interfaces' => 'getInterfaces'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['creator'] = $data['creator'] ?? null;
        $this->container['delegate'] = $data['delegate'] ?? null;
        $this->container['storage_size'] = $data['storage_size'] ?? null;
        $this->container['storage_paid'] = $data['storage_paid'] ?? null;
        $this->container['first_seen'] = $data['first_seen'] ?? null;
        $this->container['last_seen'] = $data['last_seen'] ?? null;
        $this->container['first_seen_time'] = $data['first_seen_time'] ?? null;
        $this->container['last_seen_time'] = $data['last_seen_time'] ?? null;
        $this->container['n_ops'] = $data['n_ops'] ?? null;
        $this->container['n_ops_failed'] = $data['n_ops_failed'] ?? null;
        $this->container['bigmaps'] = $data['bigmaps'] ?? null;
        $this->container['iface_hash'] = $data['iface_hash'] ?? null;
        $this->container['code_hash'] = $data['code_hash'] ?? null;
        $this->container['call_stats'] = $data['call_stats'] ?? null;
        $this->container['features'] = $data['features'] ?? null;
        $this->container['interfaces'] = $data['interfaces'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ((mb_strlen($this->container['address']) < 1)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['creator'] === null) {
            $invalidProperties[] = "'creator' can't be null";
        }
        if ((mb_strlen($this->container['creator']) < 1)) {
            $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['delegate'] === null) {
            $invalidProperties[] = "'delegate' can't be null";
        }
        if ((mb_strlen($this->container['delegate']) < 1)) {
            $invalidProperties[] = "invalid value for 'delegate', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['storage_size'] === null) {
            $invalidProperties[] = "'storage_size' can't be null";
        }
        if ($this->container['storage_paid'] === null) {
            $invalidProperties[] = "'storage_paid' can't be null";
        }
        if ($this->container['first_seen'] === null) {
            $invalidProperties[] = "'first_seen' can't be null";
        }
        if ($this->container['last_seen'] === null) {
            $invalidProperties[] = "'last_seen' can't be null";
        }
        if ($this->container['first_seen_time'] === null) {
            $invalidProperties[] = "'first_seen_time' can't be null";
        }
        if ((mb_strlen($this->container['first_seen_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_seen_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_seen_time'] === null) {
            $invalidProperties[] = "'last_seen_time' can't be null";
        }
        if ((mb_strlen($this->container['last_seen_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_seen_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['n_ops'] === null) {
            $invalidProperties[] = "'n_ops' can't be null";
        }
        if ($this->container['n_ops_failed'] === null) {
            $invalidProperties[] = "'n_ops_failed' can't be null";
        }
        if ($this->container['bigmaps'] === null) {
            $invalidProperties[] = "'bigmaps' can't be null";
        }
        if ($this->container['iface_hash'] === null) {
            $invalidProperties[] = "'iface_hash' can't be null";
        }
        if ((mb_strlen($this->container['iface_hash']) < 1)) {
            $invalidProperties[] = "invalid value for 'iface_hash', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['code_hash'] === null) {
            $invalidProperties[] = "'code_hash' can't be null";
        }
        if ((mb_strlen($this->container['code_hash']) < 1)) {
            $invalidProperties[] = "invalid value for 'code_hash', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['call_stats'] === null) {
            $invalidProperties[] = "'call_stats' can't be null";
        }
        if ($this->container['features'] === null) {
            $invalidProperties[] = "'features' can't be null";
        }
        if ($this->container['interfaces'] === null) {
            $invalidProperties[] = "'interfaces' can't be null";
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return self
     */
    public function setAddress($address)
    {

        if ((mb_strlen($address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address when calling InlineResponse2007., must be bigger than or equal to 1.');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator creator
     *
     * @return self
     */
    public function setCreator($creator)
    {

        if ((mb_strlen($creator) < 1)) {
            throw new \InvalidArgumentException('invalid length for $creator when calling InlineResponse2007., must be bigger than or equal to 1.');
        }

        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets delegate
     *
     * @return string
     */
    public function getDelegate()
    {
        return $this->container['delegate'];
    }

    /**
     * Sets delegate
     *
     * @param string $delegate delegate
     *
     * @return self
     */
    public function setDelegate($delegate)
    {

        if ((mb_strlen($delegate) < 1)) {
            throw new \InvalidArgumentException('invalid length for $delegate when calling InlineResponse2007., must be bigger than or equal to 1.');
        }

        $this->container['delegate'] = $delegate;

        return $this;
    }

    /**
     * Gets storage_size
     *
     * @return float
     */
    public function getStorageSize()
    {
        return $this->container['storage_size'];
    }

    /**
     * Sets storage_size
     *
     * @param float $storage_size storage_size
     *
     * @return self
     */
    public function setStorageSize($storage_size)
    {
        $this->container['storage_size'] = $storage_size;

        return $this;
    }

    /**
     * Gets storage_paid
     *
     * @return float
     */
    public function getStoragePaid()
    {
        return $this->container['storage_paid'];
    }

    /**
     * Sets storage_paid
     *
     * @param float $storage_paid storage_paid
     *
     * @return self
     */
    public function setStoragePaid($storage_paid)
    {
        $this->container['storage_paid'] = $storage_paid;

        return $this;
    }

    /**
     * Gets first_seen
     *
     * @return float
     */
    public function getFirstSeen()
    {
        return $this->container['first_seen'];
    }

    /**
     * Sets first_seen
     *
     * @param float $first_seen first_seen
     *
     * @return self
     */
    public function setFirstSeen($first_seen)
    {
        $this->container['first_seen'] = $first_seen;

        return $this;
    }

    /**
     * Gets last_seen
     *
     * @return float
     */
    public function getLastSeen()
    {
        return $this->container['last_seen'];
    }

    /**
     * Sets last_seen
     *
     * @param float $last_seen last_seen
     *
     * @return self
     */
    public function setLastSeen($last_seen)
    {
        $this->container['last_seen'] = $last_seen;

        return $this;
    }

    /**
     * Gets first_seen_time
     *
     * @return string
     */
    public function getFirstSeenTime()
    {
        return $this->container['first_seen_time'];
    }

    /**
     * Sets first_seen_time
     *
     * @param string $first_seen_time first_seen_time
     *
     * @return self
     */
    public function setFirstSeenTime($first_seen_time)
    {

        if ((mb_strlen($first_seen_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_seen_time when calling InlineResponse2007., must be bigger than or equal to 1.');
        }

        $this->container['first_seen_time'] = $first_seen_time;

        return $this;
    }

    /**
     * Gets last_seen_time
     *
     * @return string
     */
    public function getLastSeenTime()
    {
        return $this->container['last_seen_time'];
    }

    /**
     * Sets last_seen_time
     *
     * @param string $last_seen_time last_seen_time
     *
     * @return self
     */
    public function setLastSeenTime($last_seen_time)
    {

        if ((mb_strlen($last_seen_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_seen_time when calling InlineResponse2007., must be bigger than or equal to 1.');
        }

        $this->container['last_seen_time'] = $last_seen_time;

        return $this;
    }

    /**
     * Gets n_ops
     *
     * @return float
     */
    public function getNOps()
    {
        return $this->container['n_ops'];
    }

    /**
     * Sets n_ops
     *
     * @param float $n_ops n_ops
     *
     * @return self
     */
    public function setNOps($n_ops)
    {
        $this->container['n_ops'] = $n_ops;

        return $this;
    }

    /**
     * Gets n_ops_failed
     *
     * @return float
     */
    public function getNOpsFailed()
    {
        return $this->container['n_ops_failed'];
    }

    /**
     * Sets n_ops_failed
     *
     * @param float $n_ops_failed n_ops_failed
     *
     * @return self
     */
    public function setNOpsFailed($n_ops_failed)
    {
        $this->container['n_ops_failed'] = $n_ops_failed;

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
     * Gets iface_hash
     *
     * @return string
     */
    public function getIfaceHash()
    {
        return $this->container['iface_hash'];
    }

    /**
     * Sets iface_hash
     *
     * @param string $iface_hash iface_hash
     *
     * @return self
     */
    public function setIfaceHash($iface_hash)
    {

        if ((mb_strlen($iface_hash) < 1)) {
            throw new \InvalidArgumentException('invalid length for $iface_hash when calling InlineResponse2007., must be bigger than or equal to 1.');
        }

        $this->container['iface_hash'] = $iface_hash;

        return $this;
    }

    /**
     * Gets code_hash
     *
     * @return string
     */
    public function getCodeHash()
    {
        return $this->container['code_hash'];
    }

    /**
     * Sets code_hash
     *
     * @param string $code_hash code_hash
     *
     * @return self
     */
    public function setCodeHash($code_hash)
    {

        if ((mb_strlen($code_hash) < 1)) {
            throw new \InvalidArgumentException('invalid length for $code_hash when calling InlineResponse2007., must be bigger than or equal to 1.');
        }

        $this->container['code_hash'] = $code_hash;

        return $this;
    }

    /**
     * Gets call_stats
     *
     * @return \IdeaEngine\TzStats\Model\InlineResponse2007CallStats
     */
    public function getCallStats()
    {
        return $this->container['call_stats'];
    }

    /**
     * Sets call_stats
     *
     * @param \IdeaEngine\TzStats\Model\InlineResponse2007CallStats $call_stats call_stats
     *
     * @return self
     */
    public function setCallStats($call_stats)
    {
        $this->container['call_stats'] = $call_stats;

        return $this;
    }

    /**
     * Gets features
     *
     * @return mixed[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param mixed[] $features features
     *
     * @return self
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets interfaces
     *
     * @return mixed[]
     */
    public function getInterfaces()
    {
        return $this->container['interfaces'];
    }

    /**
     * Sets interfaces
     *
     * @param mixed[] $interfaces interfaces
     *
     * @return self
     */
    public function setInterfaces($interfaces)
    {
        $this->container['interfaces'] = $interfaces;

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


