<?php
/**
 * Ticker
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
 * Ticker Class Doc Comment
 *
 * @category Class
 * @description A ticker pair.
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Ticker implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Ticker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pair' => 'string',
        'base' => 'string',
        'quote' => 'string',
        'exchange' => 'string',
        'open' => 'float',
        'high' => 'float',
        'low' => 'float',
        'last' => 'float',
        'change' => 'float',
        'vwap' => 'float',
        'n_trades' => 'float',
        'volume_base' => 'float',
        'volume_quote' => 'float',
        'timestamp' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pair' => null,
        'base' => null,
        'quote' => null,
        'exchange' => null,
        'open' => null,
        'high' => null,
        'low' => null,
        'last' => null,
        'change' => null,
        'vwap' => null,
        'n_trades' => null,
        'volume_base' => null,
        'volume_quote' => null,
        'timestamp' => null
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
        'pair' => 'pair',
        'base' => 'base',
        'quote' => 'quote',
        'exchange' => 'exchange',
        'open' => 'open',
        'high' => 'high',
        'low' => 'low',
        'last' => 'last',
        'change' => 'change',
        'vwap' => 'vwap',
        'n_trades' => 'n_trades',
        'volume_base' => 'volume_base',
        'volume_quote' => 'volume_quote',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pair' => 'setPair',
        'base' => 'setBase',
        'quote' => 'setQuote',
        'exchange' => 'setExchange',
        'open' => 'setOpen',
        'high' => 'setHigh',
        'low' => 'setLow',
        'last' => 'setLast',
        'change' => 'setChange',
        'vwap' => 'setVwap',
        'n_trades' => 'setNTrades',
        'volume_base' => 'setVolumeBase',
        'volume_quote' => 'setVolumeQuote',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pair' => 'getPair',
        'base' => 'getBase',
        'quote' => 'getQuote',
        'exchange' => 'getExchange',
        'open' => 'getOpen',
        'high' => 'getHigh',
        'low' => 'getLow',
        'last' => 'getLast',
        'change' => 'getChange',
        'vwap' => 'getVwap',
        'n_trades' => 'getNTrades',
        'volume_base' => 'getVolumeBase',
        'volume_quote' => 'getVolumeQuote',
        'timestamp' => 'getTimestamp'
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
        $this->container['pair'] = $data['pair'] ?? null;
        $this->container['base'] = $data['base'] ?? null;
        $this->container['quote'] = $data['quote'] ?? null;
        $this->container['exchange'] = $data['exchange'] ?? null;
        $this->container['open'] = $data['open'] ?? null;
        $this->container['high'] = $data['high'] ?? null;
        $this->container['low'] = $data['low'] ?? null;
        $this->container['last'] = $data['last'] ?? null;
        $this->container['change'] = $data['change'] ?? null;
        $this->container['vwap'] = $data['vwap'] ?? null;
        $this->container['n_trades'] = $data['n_trades'] ?? null;
        $this->container['volume_base'] = $data['volume_base'] ?? null;
        $this->container['volume_quote'] = $data['volume_quote'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pair'] === null) {
            $invalidProperties[] = "'pair' can't be null";
        }
        if ((mb_strlen($this->container['pair']) < 1)) {
            $invalidProperties[] = "invalid value for 'pair', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['base'] === null) {
            $invalidProperties[] = "'base' can't be null";
        }
        if ((mb_strlen($this->container['base']) < 1)) {
            $invalidProperties[] = "invalid value for 'base', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['quote'] === null) {
            $invalidProperties[] = "'quote' can't be null";
        }
        if ((mb_strlen($this->container['quote']) < 1)) {
            $invalidProperties[] = "invalid value for 'quote', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['exchange'] === null) {
            $invalidProperties[] = "'exchange' can't be null";
        }
        if ((mb_strlen($this->container['exchange']) < 1)) {
            $invalidProperties[] = "invalid value for 'exchange', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['open'] === null) {
            $invalidProperties[] = "'open' can't be null";
        }
        if ($this->container['high'] === null) {
            $invalidProperties[] = "'high' can't be null";
        }
        if ($this->container['low'] === null) {
            $invalidProperties[] = "'low' can't be null";
        }
        if ($this->container['last'] === null) {
            $invalidProperties[] = "'last' can't be null";
        }
        if ($this->container['change'] === null) {
            $invalidProperties[] = "'change' can't be null";
        }
        if ($this->container['vwap'] === null) {
            $invalidProperties[] = "'vwap' can't be null";
        }
        if ($this->container['n_trades'] === null) {
            $invalidProperties[] = "'n_trades' can't be null";
        }
        if ($this->container['volume_base'] === null) {
            $invalidProperties[] = "'volume_base' can't be null";
        }
        if ($this->container['volume_quote'] === null) {
            $invalidProperties[] = "'volume_quote' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ((mb_strlen($this->container['timestamp']) < 1)) {
            $invalidProperties[] = "invalid value for 'timestamp', the character length must be bigger than or equal to 1.";
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
     * Gets pair
     *
     * @return string
     */
    public function getPair()
    {
        return $this->container['pair'];
    }

    /**
     * Sets pair
     *
     * @param string $pair pair
     *
     * @return self
     */
    public function setPair($pair)
    {

        if ((mb_strlen($pair) < 1)) {
            throw new \InvalidArgumentException('invalid length for $pair when calling Ticker., must be bigger than or equal to 1.');
        }

        $this->container['pair'] = $pair;

        return $this;
    }

    /**
     * Gets base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param string $base base
     *
     * @return self
     */
    public function setBase($base)
    {

        if ((mb_strlen($base) < 1)) {
            throw new \InvalidArgumentException('invalid length for $base when calling Ticker., must be bigger than or equal to 1.');
        }

        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param string $quote quote
     *
     * @return self
     */
    public function setQuote($quote)
    {

        if ((mb_strlen($quote) < 1)) {
            throw new \InvalidArgumentException('invalid length for $quote when calling Ticker., must be bigger than or equal to 1.');
        }

        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return string
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string $exchange exchange
     *
     * @return self
     */
    public function setExchange($exchange)
    {

        if ((mb_strlen($exchange) < 1)) {
            throw new \InvalidArgumentException('invalid length for $exchange when calling Ticker., must be bigger than or equal to 1.');
        }

        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets open
     *
     * @return float
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     *
     * @param float $open open
     *
     * @return self
     */
    public function setOpen($open)
    {
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets high
     *
     * @return float
     */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
     * Sets high
     *
     * @param float $high high
     *
     * @return self
     */
    public function setHigh($high)
    {
        $this->container['high'] = $high;

        return $this;
    }

    /**
     * Gets low
     *
     * @return float
     */
    public function getLow()
    {
        return $this->container['low'];
    }

    /**
     * Sets low
     *
     * @param float $low low
     *
     * @return self
     */
    public function setLow($low)
    {
        $this->container['low'] = $low;

        return $this;
    }

    /**
     * Gets last
     *
     * @return float
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param float $last last
     *
     * @return self
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets change
     *
     * @return float
     */
    public function getChange()
    {
        return $this->container['change'];
    }

    /**
     * Sets change
     *
     * @param float $change change
     *
     * @return self
     */
    public function setChange($change)
    {
        $this->container['change'] = $change;

        return $this;
    }

    /**
     * Gets vwap
     *
     * @return float
     */
    public function getVwap()
    {
        return $this->container['vwap'];
    }

    /**
     * Sets vwap
     *
     * @param float $vwap vwap
     *
     * @return self
     */
    public function setVwap($vwap)
    {
        $this->container['vwap'] = $vwap;

        return $this;
    }

    /**
     * Gets n_trades
     *
     * @return float
     */
    public function getNTrades()
    {
        return $this->container['n_trades'];
    }

    /**
     * Sets n_trades
     *
     * @param float $n_trades n_trades
     *
     * @return self
     */
    public function setNTrades($n_trades)
    {
        $this->container['n_trades'] = $n_trades;

        return $this;
    }

    /**
     * Gets volume_base
     *
     * @return float
     */
    public function getVolumeBase()
    {
        return $this->container['volume_base'];
    }

    /**
     * Sets volume_base
     *
     * @param float $volume_base volume_base
     *
     * @return self
     */
    public function setVolumeBase($volume_base)
    {
        $this->container['volume_base'] = $volume_base;

        return $this;
    }

    /**
     * Gets volume_quote
     *
     * @return float
     */
    public function getVolumeQuote()
    {
        return $this->container['volume_quote'];
    }

    /**
     * Sets volume_quote
     *
     * @param float $volume_quote volume_quote
     *
     * @return self
     */
    public function setVolumeQuote($volume_quote)
    {
        $this->container['volume_quote'] = $volume_quote;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {

        if ((mb_strlen($timestamp) < 1)) {
            throw new \InvalidArgumentException('invalid length for $timestamp when calling Ticker., must be bigger than or equal to 1.');
        }

        $this->container['timestamp'] = $timestamp;

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

