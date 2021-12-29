<?php
/**
 * Baker
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
 * Baker Class Doc Comment
 *
 * @category Class
 * @description A Baker
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Baker implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Baker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'address' => 'string',
        'baker_since_time' => 'string',
        'baker_version' => 'string',
        'total_balance' => 'float',
        'spendable_balance' => 'float',
        'frozen_deposits' => 'float',
        'frozen_rewards' => 'float',
        'frozen_fees' => 'float',
        'staking_balance' => 'float',
        'staking_capacity' => 'float',
        'active_delegations' => 'float',
        'is_full' => 'bool',
        'rolls' => 'float',
        'share' => 'float',
        'avg_luck_64' => 'float',
        'avg_performance_64' => 'float',
        'avg_contribution_64' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'address' => null,
        'baker_since_time' => null,
        'baker_version' => null,
        'total_balance' => null,
        'spendable_balance' => null,
        'frozen_deposits' => null,
        'frozen_rewards' => null,
        'frozen_fees' => null,
        'staking_balance' => null,
        'staking_capacity' => null,
        'active_delegations' => null,
        'is_full' => null,
        'rolls' => null,
        'share' => null,
        'avg_luck_64' => null,
        'avg_performance_64' => null,
        'avg_contribution_64' => null
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
        'id' => 'id',
        'address' => 'address',
        'baker_since_time' => 'baker_since_time',
        'baker_version' => 'baker_version',
        'total_balance' => 'total_balance',
        'spendable_balance' => 'spendable_balance',
        'frozen_deposits' => 'frozen_deposits',
        'frozen_rewards' => 'frozen_rewards',
        'frozen_fees' => 'frozen_fees',
        'staking_balance' => 'staking_balance',
        'staking_capacity' => 'staking_capacity',
        'active_delegations' => 'active_delegations',
        'is_full' => 'is_full',
        'rolls' => 'rolls',
        'share' => 'share',
        'avg_luck_64' => 'avg_luck_64',
        'avg_performance_64' => 'avg_performance_64',
        'avg_contribution_64' => 'avg_contribution_64'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'address' => 'setAddress',
        'baker_since_time' => 'setBakerSinceTime',
        'baker_version' => 'setBakerVersion',
        'total_balance' => 'setTotalBalance',
        'spendable_balance' => 'setSpendableBalance',
        'frozen_deposits' => 'setFrozenDeposits',
        'frozen_rewards' => 'setFrozenRewards',
        'frozen_fees' => 'setFrozenFees',
        'staking_balance' => 'setStakingBalance',
        'staking_capacity' => 'setStakingCapacity',
        'active_delegations' => 'setActiveDelegations',
        'is_full' => 'setIsFull',
        'rolls' => 'setRolls',
        'share' => 'setShare',
        'avg_luck_64' => 'setAvgLuck64',
        'avg_performance_64' => 'setAvgPerformance64',
        'avg_contribution_64' => 'setAvgContribution64'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'address' => 'getAddress',
        'baker_since_time' => 'getBakerSinceTime',
        'baker_version' => 'getBakerVersion',
        'total_balance' => 'getTotalBalance',
        'spendable_balance' => 'getSpendableBalance',
        'frozen_deposits' => 'getFrozenDeposits',
        'frozen_rewards' => 'getFrozenRewards',
        'frozen_fees' => 'getFrozenFees',
        'staking_balance' => 'getStakingBalance',
        'staking_capacity' => 'getStakingCapacity',
        'active_delegations' => 'getActiveDelegations',
        'is_full' => 'getIsFull',
        'rolls' => 'getRolls',
        'share' => 'getShare',
        'avg_luck_64' => 'getAvgLuck64',
        'avg_performance_64' => 'getAvgPerformance64',
        'avg_contribution_64' => 'getAvgContribution64'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['baker_since_time'] = $data['baker_since_time'] ?? null;
        $this->container['baker_version'] = $data['baker_version'] ?? null;
        $this->container['total_balance'] = $data['total_balance'] ?? null;
        $this->container['spendable_balance'] = $data['spendable_balance'] ?? null;
        $this->container['frozen_deposits'] = $data['frozen_deposits'] ?? null;
        $this->container['frozen_rewards'] = $data['frozen_rewards'] ?? null;
        $this->container['frozen_fees'] = $data['frozen_fees'] ?? null;
        $this->container['staking_balance'] = $data['staking_balance'] ?? null;
        $this->container['staking_capacity'] = $data['staking_capacity'] ?? null;
        $this->container['active_delegations'] = $data['active_delegations'] ?? null;
        $this->container['is_full'] = $data['is_full'] ?? null;
        $this->container['rolls'] = $data['rolls'] ?? null;
        $this->container['share'] = $data['share'] ?? null;
        $this->container['avg_luck_64'] = $data['avg_luck_64'] ?? null;
        $this->container['avg_performance_64'] = $data['avg_performance_64'] ?? null;
        $this->container['avg_contribution_64'] = $data['avg_contribution_64'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ((mb_strlen($this->container['address']) < 1)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['baker_since_time'] === null) {
            $invalidProperties[] = "'baker_since_time' can't be null";
        }
        if ((mb_strlen($this->container['baker_since_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'baker_since_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['baker_version'] === null) {
            $invalidProperties[] = "'baker_version' can't be null";
        }
        if ((mb_strlen($this->container['baker_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'baker_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['total_balance'] === null) {
            $invalidProperties[] = "'total_balance' can't be null";
        }
        if ($this->container['spendable_balance'] === null) {
            $invalidProperties[] = "'spendable_balance' can't be null";
        }
        if ($this->container['frozen_deposits'] === null) {
            $invalidProperties[] = "'frozen_deposits' can't be null";
        }
        if ($this->container['frozen_rewards'] === null) {
            $invalidProperties[] = "'frozen_rewards' can't be null";
        }
        if ($this->container['frozen_fees'] === null) {
            $invalidProperties[] = "'frozen_fees' can't be null";
        }
        if ($this->container['staking_balance'] === null) {
            $invalidProperties[] = "'staking_balance' can't be null";
        }
        if ($this->container['staking_capacity'] === null) {
            $invalidProperties[] = "'staking_capacity' can't be null";
        }
        if ($this->container['active_delegations'] === null) {
            $invalidProperties[] = "'active_delegations' can't be null";
        }
        if ($this->container['is_full'] === null) {
            $invalidProperties[] = "'is_full' can't be null";
        }
        if ($this->container['rolls'] === null) {
            $invalidProperties[] = "'rolls' can't be null";
        }
        if ($this->container['share'] === null) {
            $invalidProperties[] = "'share' can't be null";
        }
        if ($this->container['avg_luck_64'] === null) {
            $invalidProperties[] = "'avg_luck_64' can't be null";
        }
        if ($this->container['avg_performance_64'] === null) {
            $invalidProperties[] = "'avg_performance_64' can't be null";
        }
        if ($this->container['avg_contribution_64'] === null) {
            $invalidProperties[] = "'avg_contribution_64' can't be null";
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
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $address when calling Baker., must be bigger than or equal to 1.');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets baker_since_time
     *
     * @return string
     */
    public function getBakerSinceTime()
    {
        return $this->container['baker_since_time'];
    }

    /**
     * Sets baker_since_time
     *
     * @param string $baker_since_time baker_since_time
     *
     * @return self
     */
    public function setBakerSinceTime($baker_since_time)
    {

        if ((mb_strlen($baker_since_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $baker_since_time when calling Baker., must be bigger than or equal to 1.');
        }

        $this->container['baker_since_time'] = $baker_since_time;

        return $this;
    }

    /**
     * Gets baker_version
     *
     * @return string
     */
    public function getBakerVersion()
    {
        return $this->container['baker_version'];
    }

    /**
     * Sets baker_version
     *
     * @param string $baker_version baker_version
     *
     * @return self
     */
    public function setBakerVersion($baker_version)
    {

        if ((mb_strlen($baker_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $baker_version when calling Baker., must be bigger than or equal to 1.');
        }

        $this->container['baker_version'] = $baker_version;

        return $this;
    }

    /**
     * Gets total_balance
     *
     * @return float
     */
    public function getTotalBalance()
    {
        return $this->container['total_balance'];
    }

    /**
     * Sets total_balance
     *
     * @param float $total_balance total_balance
     *
     * @return self
     */
    public function setTotalBalance($total_balance)
    {
        $this->container['total_balance'] = $total_balance;

        return $this;
    }

    /**
     * Gets spendable_balance
     *
     * @return float
     */
    public function getSpendableBalance()
    {
        return $this->container['spendable_balance'];
    }

    /**
     * Sets spendable_balance
     *
     * @param float $spendable_balance spendable_balance
     *
     * @return self
     */
    public function setSpendableBalance($spendable_balance)
    {
        $this->container['spendable_balance'] = $spendable_balance;

        return $this;
    }

    /**
     * Gets frozen_deposits
     *
     * @return float
     */
    public function getFrozenDeposits()
    {
        return $this->container['frozen_deposits'];
    }

    /**
     * Sets frozen_deposits
     *
     * @param float $frozen_deposits frozen_deposits
     *
     * @return self
     */
    public function setFrozenDeposits($frozen_deposits)
    {
        $this->container['frozen_deposits'] = $frozen_deposits;

        return $this;
    }

    /**
     * Gets frozen_rewards
     *
     * @return float
     */
    public function getFrozenRewards()
    {
        return $this->container['frozen_rewards'];
    }

    /**
     * Sets frozen_rewards
     *
     * @param float $frozen_rewards frozen_rewards
     *
     * @return self
     */
    public function setFrozenRewards($frozen_rewards)
    {
        $this->container['frozen_rewards'] = $frozen_rewards;

        return $this;
    }

    /**
     * Gets frozen_fees
     *
     * @return float
     */
    public function getFrozenFees()
    {
        return $this->container['frozen_fees'];
    }

    /**
     * Sets frozen_fees
     *
     * @param float $frozen_fees frozen_fees
     *
     * @return self
     */
    public function setFrozenFees($frozen_fees)
    {
        $this->container['frozen_fees'] = $frozen_fees;

        return $this;
    }

    /**
     * Gets staking_balance
     *
     * @return float
     */
    public function getStakingBalance()
    {
        return $this->container['staking_balance'];
    }

    /**
     * Sets staking_balance
     *
     * @param float $staking_balance staking_balance
     *
     * @return self
     */
    public function setStakingBalance($staking_balance)
    {
        $this->container['staking_balance'] = $staking_balance;

        return $this;
    }

    /**
     * Gets staking_capacity
     *
     * @return float
     */
    public function getStakingCapacity()
    {
        return $this->container['staking_capacity'];
    }

    /**
     * Sets staking_capacity
     *
     * @param float $staking_capacity staking_capacity
     *
     * @return self
     */
    public function setStakingCapacity($staking_capacity)
    {
        $this->container['staking_capacity'] = $staking_capacity;

        return $this;
    }

    /**
     * Gets active_delegations
     *
     * @return float
     */
    public function getActiveDelegations()
    {
        return $this->container['active_delegations'];
    }

    /**
     * Sets active_delegations
     *
     * @param float $active_delegations active_delegations
     *
     * @return self
     */
    public function setActiveDelegations($active_delegations)
    {
        $this->container['active_delegations'] = $active_delegations;

        return $this;
    }

    /**
     * Gets is_full
     *
     * @return bool
     */
    public function getIsFull()
    {
        return $this->container['is_full'];
    }

    /**
     * Sets is_full
     *
     * @param bool $is_full is_full
     *
     * @return self
     */
    public function setIsFull($is_full)
    {
        $this->container['is_full'] = $is_full;

        return $this;
    }

    /**
     * Gets rolls
     *
     * @return float
     */
    public function getRolls()
    {
        return $this->container['rolls'];
    }

    /**
     * Sets rolls
     *
     * @param float $rolls rolls
     *
     * @return self
     */
    public function setRolls($rolls)
    {
        $this->container['rolls'] = $rolls;

        return $this;
    }

    /**
     * Gets share
     *
     * @return float
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param float $share share
     *
     * @return self
     */
    public function setShare($share)
    {
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets avg_luck_64
     *
     * @return float
     */
    public function getAvgLuck64()
    {
        return $this->container['avg_luck_64'];
    }

    /**
     * Sets avg_luck_64
     *
     * @param float $avg_luck_64 avg_luck_64
     *
     * @return self
     */
    public function setAvgLuck64($avg_luck_64)
    {
        $this->container['avg_luck_64'] = $avg_luck_64;

        return $this;
    }

    /**
     * Gets avg_performance_64
     *
     * @return float
     */
    public function getAvgPerformance64()
    {
        return $this->container['avg_performance_64'];
    }

    /**
     * Sets avg_performance_64
     *
     * @param float $avg_performance_64 avg_performance_64
     *
     * @return self
     */
    public function setAvgPerformance64($avg_performance_64)
    {
        $this->container['avg_performance_64'] = $avg_performance_64;

        return $this;
    }

    /**
     * Gets avg_contribution_64
     *
     * @return float
     */
    public function getAvgContribution64()
    {
        return $this->container['avg_contribution_64'];
    }

    /**
     * Sets avg_contribution_64
     *
     * @param float $avg_contribution_64 avg_contribution_64
     *
     * @return self
     */
    public function setAvgContribution64($avg_contribution_64)
    {
        $this->container['avg_contribution_64'] = $avg_contribution_64;

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


