<?php
/**
 * InlineResponse2002Supply
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
 * InlineResponse2002Supply Class Doc Comment
 *
 * @category Class
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2002Supply implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_2_supply';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'row_id' => 'float',
        'height' => 'float',
        'cycle' => 'float',
        'time' => 'string',
        'total' => 'float',
        'activated' => 'float',
        'unclaimed' => 'float',
        'circulating' => 'float',
        'liquid' => 'float',
        'delegated' => 'float',
        'staking' => 'float',
        'shielded' => 'float',
        'active_delegated' => 'float',
        'active_staking' => 'float',
        'inactive_delegated' => 'float',
        'inactive_staking' => 'float',
        'minted' => 'float',
        'minted_baking' => 'float',
        'minted_endorsing' => 'float',
        'minted_seeding' => 'float',
        'minted_airdrop' => 'float',
        'minted_subsidy' => 'float',
        'burned' => 'float',
        'burned_double_baking' => 'float',
        'burned_double_endorse' => 'float',
        'burned_origination' => 'float',
        'burned_allocation' => 'float',
        'burned_storage' => 'float',
        'burned_explicit' => 'float',
        'burned_seed_miss' => 'float',
        'frozen' => 'float',
        'frozen_deposits' => 'float',
        'frozen_rewards' => 'float',
        'frozen_fees' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'row_id' => null,
        'height' => null,
        'cycle' => null,
        'time' => null,
        'total' => null,
        'activated' => null,
        'unclaimed' => null,
        'circulating' => null,
        'liquid' => null,
        'delegated' => null,
        'staking' => null,
        'shielded' => null,
        'active_delegated' => null,
        'active_staking' => null,
        'inactive_delegated' => null,
        'inactive_staking' => null,
        'minted' => null,
        'minted_baking' => null,
        'minted_endorsing' => null,
        'minted_seeding' => null,
        'minted_airdrop' => null,
        'minted_subsidy' => null,
        'burned' => null,
        'burned_double_baking' => null,
        'burned_double_endorse' => null,
        'burned_origination' => null,
        'burned_allocation' => null,
        'burned_storage' => null,
        'burned_explicit' => null,
        'burned_seed_miss' => null,
        'frozen' => null,
        'frozen_deposits' => null,
        'frozen_rewards' => null,
        'frozen_fees' => null
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
        'row_id' => 'row_id',
        'height' => 'height',
        'cycle' => 'cycle',
        'time' => 'time',
        'total' => 'total',
        'activated' => 'activated',
        'unclaimed' => 'unclaimed',
        'circulating' => 'circulating',
        'liquid' => 'liquid',
        'delegated' => 'delegated',
        'staking' => 'staking',
        'shielded' => 'shielded',
        'active_delegated' => 'active_delegated',
        'active_staking' => 'active_staking',
        'inactive_delegated' => 'inactive_delegated',
        'inactive_staking' => 'inactive_staking',
        'minted' => 'minted',
        'minted_baking' => 'minted_baking',
        'minted_endorsing' => 'minted_endorsing',
        'minted_seeding' => 'minted_seeding',
        'minted_airdrop' => 'minted_airdrop',
        'minted_subsidy' => 'minted_subsidy',
        'burned' => 'burned',
        'burned_double_baking' => 'burned_double_baking',
        'burned_double_endorse' => 'burned_double_endorse',
        'burned_origination' => 'burned_origination',
        'burned_allocation' => 'burned_allocation',
        'burned_storage' => 'burned_storage',
        'burned_explicit' => 'burned_explicit',
        'burned_seed_miss' => 'burned_seed_miss',
        'frozen' => 'frozen',
        'frozen_deposits' => 'frozen_deposits',
        'frozen_rewards' => 'frozen_rewards',
        'frozen_fees' => 'frozen_fees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'row_id' => 'setRowId',
        'height' => 'setHeight',
        'cycle' => 'setCycle',
        'time' => 'setTime',
        'total' => 'setTotal',
        'activated' => 'setActivated',
        'unclaimed' => 'setUnclaimed',
        'circulating' => 'setCirculating',
        'liquid' => 'setLiquid',
        'delegated' => 'setDelegated',
        'staking' => 'setStaking',
        'shielded' => 'setShielded',
        'active_delegated' => 'setActiveDelegated',
        'active_staking' => 'setActiveStaking',
        'inactive_delegated' => 'setInactiveDelegated',
        'inactive_staking' => 'setInactiveStaking',
        'minted' => 'setMinted',
        'minted_baking' => 'setMintedBaking',
        'minted_endorsing' => 'setMintedEndorsing',
        'minted_seeding' => 'setMintedSeeding',
        'minted_airdrop' => 'setMintedAirdrop',
        'minted_subsidy' => 'setMintedSubsidy',
        'burned' => 'setBurned',
        'burned_double_baking' => 'setBurnedDoubleBaking',
        'burned_double_endorse' => 'setBurnedDoubleEndorse',
        'burned_origination' => 'setBurnedOrigination',
        'burned_allocation' => 'setBurnedAllocation',
        'burned_storage' => 'setBurnedStorage',
        'burned_explicit' => 'setBurnedExplicit',
        'burned_seed_miss' => 'setBurnedSeedMiss',
        'frozen' => 'setFrozen',
        'frozen_deposits' => 'setFrozenDeposits',
        'frozen_rewards' => 'setFrozenRewards',
        'frozen_fees' => 'setFrozenFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'row_id' => 'getRowId',
        'height' => 'getHeight',
        'cycle' => 'getCycle',
        'time' => 'getTime',
        'total' => 'getTotal',
        'activated' => 'getActivated',
        'unclaimed' => 'getUnclaimed',
        'circulating' => 'getCirculating',
        'liquid' => 'getLiquid',
        'delegated' => 'getDelegated',
        'staking' => 'getStaking',
        'shielded' => 'getShielded',
        'active_delegated' => 'getActiveDelegated',
        'active_staking' => 'getActiveStaking',
        'inactive_delegated' => 'getInactiveDelegated',
        'inactive_staking' => 'getInactiveStaking',
        'minted' => 'getMinted',
        'minted_baking' => 'getMintedBaking',
        'minted_endorsing' => 'getMintedEndorsing',
        'minted_seeding' => 'getMintedSeeding',
        'minted_airdrop' => 'getMintedAirdrop',
        'minted_subsidy' => 'getMintedSubsidy',
        'burned' => 'getBurned',
        'burned_double_baking' => 'getBurnedDoubleBaking',
        'burned_double_endorse' => 'getBurnedDoubleEndorse',
        'burned_origination' => 'getBurnedOrigination',
        'burned_allocation' => 'getBurnedAllocation',
        'burned_storage' => 'getBurnedStorage',
        'burned_explicit' => 'getBurnedExplicit',
        'burned_seed_miss' => 'getBurnedSeedMiss',
        'frozen' => 'getFrozen',
        'frozen_deposits' => 'getFrozenDeposits',
        'frozen_rewards' => 'getFrozenRewards',
        'frozen_fees' => 'getFrozenFees'
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
        $this->container['row_id'] = $data['row_id'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['cycle'] = $data['cycle'] ?? null;
        $this->container['time'] = $data['time'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['activated'] = $data['activated'] ?? null;
        $this->container['unclaimed'] = $data['unclaimed'] ?? null;
        $this->container['circulating'] = $data['circulating'] ?? null;
        $this->container['liquid'] = $data['liquid'] ?? null;
        $this->container['delegated'] = $data['delegated'] ?? null;
        $this->container['staking'] = $data['staking'] ?? null;
        $this->container['shielded'] = $data['shielded'] ?? null;
        $this->container['active_delegated'] = $data['active_delegated'] ?? null;
        $this->container['active_staking'] = $data['active_staking'] ?? null;
        $this->container['inactive_delegated'] = $data['inactive_delegated'] ?? null;
        $this->container['inactive_staking'] = $data['inactive_staking'] ?? null;
        $this->container['minted'] = $data['minted'] ?? null;
        $this->container['minted_baking'] = $data['minted_baking'] ?? null;
        $this->container['minted_endorsing'] = $data['minted_endorsing'] ?? null;
        $this->container['minted_seeding'] = $data['minted_seeding'] ?? null;
        $this->container['minted_airdrop'] = $data['minted_airdrop'] ?? null;
        $this->container['minted_subsidy'] = $data['minted_subsidy'] ?? null;
        $this->container['burned'] = $data['burned'] ?? null;
        $this->container['burned_double_baking'] = $data['burned_double_baking'] ?? null;
        $this->container['burned_double_endorse'] = $data['burned_double_endorse'] ?? null;
        $this->container['burned_origination'] = $data['burned_origination'] ?? null;
        $this->container['burned_allocation'] = $data['burned_allocation'] ?? null;
        $this->container['burned_storage'] = $data['burned_storage'] ?? null;
        $this->container['burned_explicit'] = $data['burned_explicit'] ?? null;
        $this->container['burned_seed_miss'] = $data['burned_seed_miss'] ?? null;
        $this->container['frozen'] = $data['frozen'] ?? null;
        $this->container['frozen_deposits'] = $data['frozen_deposits'] ?? null;
        $this->container['frozen_rewards'] = $data['frozen_rewards'] ?? null;
        $this->container['frozen_fees'] = $data['frozen_fees'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['row_id'] === null) {
            $invalidProperties[] = "'row_id' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['cycle'] === null) {
            $invalidProperties[] = "'cycle' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ((mb_strlen($this->container['time']) < 1)) {
            $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['activated'] === null) {
            $invalidProperties[] = "'activated' can't be null";
        }
        if ($this->container['unclaimed'] === null) {
            $invalidProperties[] = "'unclaimed' can't be null";
        }
        if ($this->container['circulating'] === null) {
            $invalidProperties[] = "'circulating' can't be null";
        }
        if ($this->container['liquid'] === null) {
            $invalidProperties[] = "'liquid' can't be null";
        }
        if ($this->container['delegated'] === null) {
            $invalidProperties[] = "'delegated' can't be null";
        }
        if ($this->container['staking'] === null) {
            $invalidProperties[] = "'staking' can't be null";
        }
        if ($this->container['shielded'] === null) {
            $invalidProperties[] = "'shielded' can't be null";
        }
        if ($this->container['active_delegated'] === null) {
            $invalidProperties[] = "'active_delegated' can't be null";
        }
        if ($this->container['active_staking'] === null) {
            $invalidProperties[] = "'active_staking' can't be null";
        }
        if ($this->container['inactive_delegated'] === null) {
            $invalidProperties[] = "'inactive_delegated' can't be null";
        }
        if ($this->container['inactive_staking'] === null) {
            $invalidProperties[] = "'inactive_staking' can't be null";
        }
        if ($this->container['minted'] === null) {
            $invalidProperties[] = "'minted' can't be null";
        }
        if ($this->container['minted_baking'] === null) {
            $invalidProperties[] = "'minted_baking' can't be null";
        }
        if ($this->container['minted_endorsing'] === null) {
            $invalidProperties[] = "'minted_endorsing' can't be null";
        }
        if ($this->container['minted_seeding'] === null) {
            $invalidProperties[] = "'minted_seeding' can't be null";
        }
        if ($this->container['minted_airdrop'] === null) {
            $invalidProperties[] = "'minted_airdrop' can't be null";
        }
        if ($this->container['minted_subsidy'] === null) {
            $invalidProperties[] = "'minted_subsidy' can't be null";
        }
        if ($this->container['burned'] === null) {
            $invalidProperties[] = "'burned' can't be null";
        }
        if ($this->container['burned_double_baking'] === null) {
            $invalidProperties[] = "'burned_double_baking' can't be null";
        }
        if ($this->container['burned_double_endorse'] === null) {
            $invalidProperties[] = "'burned_double_endorse' can't be null";
        }
        if ($this->container['burned_origination'] === null) {
            $invalidProperties[] = "'burned_origination' can't be null";
        }
        if ($this->container['burned_allocation'] === null) {
            $invalidProperties[] = "'burned_allocation' can't be null";
        }
        if ($this->container['burned_storage'] === null) {
            $invalidProperties[] = "'burned_storage' can't be null";
        }
        if ($this->container['burned_explicit'] === null) {
            $invalidProperties[] = "'burned_explicit' can't be null";
        }
        if ($this->container['burned_seed_miss'] === null) {
            $invalidProperties[] = "'burned_seed_miss' can't be null";
        }
        if ($this->container['frozen'] === null) {
            $invalidProperties[] = "'frozen' can't be null";
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
     * Gets row_id
     *
     * @return float
     */
    public function getRowId()
    {
        return $this->container['row_id'];
    }

    /**
     * Sets row_id
     *
     * @param float $row_id row_id
     *
     * @return self
     */
    public function setRowId($row_id)
    {
        $this->container['row_id'] = $row_id;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets cycle
     *
     * @return float
     */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
     * Sets cycle
     *
     * @param float $cycle cycle
     *
     * @return self
     */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time time
     *
     * @return self
     */
    public function setTime($time)
    {

        if ((mb_strlen($time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $time when calling InlineResponse2002Supply., must be bigger than or equal to 1.');
        }

        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets activated
     *
     * @return float
     */
    public function getActivated()
    {
        return $this->container['activated'];
    }

    /**
     * Sets activated
     *
     * @param float $activated activated
     *
     * @return self
     */
    public function setActivated($activated)
    {
        $this->container['activated'] = $activated;

        return $this;
    }

    /**
     * Gets unclaimed
     *
     * @return float
     */
    public function getUnclaimed()
    {
        return $this->container['unclaimed'];
    }

    /**
     * Sets unclaimed
     *
     * @param float $unclaimed unclaimed
     *
     * @return self
     */
    public function setUnclaimed($unclaimed)
    {
        $this->container['unclaimed'] = $unclaimed;

        return $this;
    }

    /**
     * Gets circulating
     *
     * @return float
     */
    public function getCirculating()
    {
        return $this->container['circulating'];
    }

    /**
     * Sets circulating
     *
     * @param float $circulating circulating
     *
     * @return self
     */
    public function setCirculating($circulating)
    {
        $this->container['circulating'] = $circulating;

        return $this;
    }

    /**
     * Gets liquid
     *
     * @return float
     */
    public function getLiquid()
    {
        return $this->container['liquid'];
    }

    /**
     * Sets liquid
     *
     * @param float $liquid liquid
     *
     * @return self
     */
    public function setLiquid($liquid)
    {
        $this->container['liquid'] = $liquid;

        return $this;
    }

    /**
     * Gets delegated
     *
     * @return float
     */
    public function getDelegated()
    {
        return $this->container['delegated'];
    }

    /**
     * Sets delegated
     *
     * @param float $delegated delegated
     *
     * @return self
     */
    public function setDelegated($delegated)
    {
        $this->container['delegated'] = $delegated;

        return $this;
    }

    /**
     * Gets staking
     *
     * @return float
     */
    public function getStaking()
    {
        return $this->container['staking'];
    }

    /**
     * Sets staking
     *
     * @param float $staking staking
     *
     * @return self
     */
    public function setStaking($staking)
    {
        $this->container['staking'] = $staking;

        return $this;
    }

    /**
     * Gets shielded
     *
     * @return float
     */
    public function getShielded()
    {
        return $this->container['shielded'];
    }

    /**
     * Sets shielded
     *
     * @param float $shielded shielded
     *
     * @return self
     */
    public function setShielded($shielded)
    {
        $this->container['shielded'] = $shielded;

        return $this;
    }

    /**
     * Gets active_delegated
     *
     * @return float
     */
    public function getActiveDelegated()
    {
        return $this->container['active_delegated'];
    }

    /**
     * Sets active_delegated
     *
     * @param float $active_delegated active_delegated
     *
     * @return self
     */
    public function setActiveDelegated($active_delegated)
    {
        $this->container['active_delegated'] = $active_delegated;

        return $this;
    }

    /**
     * Gets active_staking
     *
     * @return float
     */
    public function getActiveStaking()
    {
        return $this->container['active_staking'];
    }

    /**
     * Sets active_staking
     *
     * @param float $active_staking active_staking
     *
     * @return self
     */
    public function setActiveStaking($active_staking)
    {
        $this->container['active_staking'] = $active_staking;

        return $this;
    }

    /**
     * Gets inactive_delegated
     *
     * @return float
     */
    public function getInactiveDelegated()
    {
        return $this->container['inactive_delegated'];
    }

    /**
     * Sets inactive_delegated
     *
     * @param float $inactive_delegated inactive_delegated
     *
     * @return self
     */
    public function setInactiveDelegated($inactive_delegated)
    {
        $this->container['inactive_delegated'] = $inactive_delegated;

        return $this;
    }

    /**
     * Gets inactive_staking
     *
     * @return float
     */
    public function getInactiveStaking()
    {
        return $this->container['inactive_staking'];
    }

    /**
     * Sets inactive_staking
     *
     * @param float $inactive_staking inactive_staking
     *
     * @return self
     */
    public function setInactiveStaking($inactive_staking)
    {
        $this->container['inactive_staking'] = $inactive_staking;

        return $this;
    }

    /**
     * Gets minted
     *
     * @return float
     */
    public function getMinted()
    {
        return $this->container['minted'];
    }

    /**
     * Sets minted
     *
     * @param float $minted minted
     *
     * @return self
     */
    public function setMinted($minted)
    {
        $this->container['minted'] = $minted;

        return $this;
    }

    /**
     * Gets minted_baking
     *
     * @return float
     */
    public function getMintedBaking()
    {
        return $this->container['minted_baking'];
    }

    /**
     * Sets minted_baking
     *
     * @param float $minted_baking minted_baking
     *
     * @return self
     */
    public function setMintedBaking($minted_baking)
    {
        $this->container['minted_baking'] = $minted_baking;

        return $this;
    }

    /**
     * Gets minted_endorsing
     *
     * @return float
     */
    public function getMintedEndorsing()
    {
        return $this->container['minted_endorsing'];
    }

    /**
     * Sets minted_endorsing
     *
     * @param float $minted_endorsing minted_endorsing
     *
     * @return self
     */
    public function setMintedEndorsing($minted_endorsing)
    {
        $this->container['minted_endorsing'] = $minted_endorsing;

        return $this;
    }

    /**
     * Gets minted_seeding
     *
     * @return float
     */
    public function getMintedSeeding()
    {
        return $this->container['minted_seeding'];
    }

    /**
     * Sets minted_seeding
     *
     * @param float $minted_seeding minted_seeding
     *
     * @return self
     */
    public function setMintedSeeding($minted_seeding)
    {
        $this->container['minted_seeding'] = $minted_seeding;

        return $this;
    }

    /**
     * Gets minted_airdrop
     *
     * @return float
     */
    public function getMintedAirdrop()
    {
        return $this->container['minted_airdrop'];
    }

    /**
     * Sets minted_airdrop
     *
     * @param float $minted_airdrop minted_airdrop
     *
     * @return self
     */
    public function setMintedAirdrop($minted_airdrop)
    {
        $this->container['minted_airdrop'] = $minted_airdrop;

        return $this;
    }

    /**
     * Gets minted_subsidy
     *
     * @return float
     */
    public function getMintedSubsidy()
    {
        return $this->container['minted_subsidy'];
    }

    /**
     * Sets minted_subsidy
     *
     * @param float $minted_subsidy minted_subsidy
     *
     * @return self
     */
    public function setMintedSubsidy($minted_subsidy)
    {
        $this->container['minted_subsidy'] = $minted_subsidy;

        return $this;
    }

    /**
     * Gets burned
     *
     * @return float
     */
    public function getBurned()
    {
        return $this->container['burned'];
    }

    /**
     * Sets burned
     *
     * @param float $burned burned
     *
     * @return self
     */
    public function setBurned($burned)
    {
        $this->container['burned'] = $burned;

        return $this;
    }

    /**
     * Gets burned_double_baking
     *
     * @return float
     */
    public function getBurnedDoubleBaking()
    {
        return $this->container['burned_double_baking'];
    }

    /**
     * Sets burned_double_baking
     *
     * @param float $burned_double_baking burned_double_baking
     *
     * @return self
     */
    public function setBurnedDoubleBaking($burned_double_baking)
    {
        $this->container['burned_double_baking'] = $burned_double_baking;

        return $this;
    }

    /**
     * Gets burned_double_endorse
     *
     * @return float
     */
    public function getBurnedDoubleEndorse()
    {
        return $this->container['burned_double_endorse'];
    }

    /**
     * Sets burned_double_endorse
     *
     * @param float $burned_double_endorse burned_double_endorse
     *
     * @return self
     */
    public function setBurnedDoubleEndorse($burned_double_endorse)
    {
        $this->container['burned_double_endorse'] = $burned_double_endorse;

        return $this;
    }

    /**
     * Gets burned_origination
     *
     * @return float
     */
    public function getBurnedOrigination()
    {
        return $this->container['burned_origination'];
    }

    /**
     * Sets burned_origination
     *
     * @param float $burned_origination burned_origination
     *
     * @return self
     */
    public function setBurnedOrigination($burned_origination)
    {
        $this->container['burned_origination'] = $burned_origination;

        return $this;
    }

    /**
     * Gets burned_allocation
     *
     * @return float
     */
    public function getBurnedAllocation()
    {
        return $this->container['burned_allocation'];
    }

    /**
     * Sets burned_allocation
     *
     * @param float $burned_allocation burned_allocation
     *
     * @return self
     */
    public function setBurnedAllocation($burned_allocation)
    {
        $this->container['burned_allocation'] = $burned_allocation;

        return $this;
    }

    /**
     * Gets burned_storage
     *
     * @return float
     */
    public function getBurnedStorage()
    {
        return $this->container['burned_storage'];
    }

    /**
     * Sets burned_storage
     *
     * @param float $burned_storage burned_storage
     *
     * @return self
     */
    public function setBurnedStorage($burned_storage)
    {
        $this->container['burned_storage'] = $burned_storage;

        return $this;
    }

    /**
     * Gets burned_explicit
     *
     * @return float
     */
    public function getBurnedExplicit()
    {
        return $this->container['burned_explicit'];
    }

    /**
     * Sets burned_explicit
     *
     * @param float $burned_explicit burned_explicit
     *
     * @return self
     */
    public function setBurnedExplicit($burned_explicit)
    {
        $this->container['burned_explicit'] = $burned_explicit;

        return $this;
    }

    /**
     * Gets burned_seed_miss
     *
     * @return float
     */
    public function getBurnedSeedMiss()
    {
        return $this->container['burned_seed_miss'];
    }

    /**
     * Sets burned_seed_miss
     *
     * @param float $burned_seed_miss burned_seed_miss
     *
     * @return self
     */
    public function setBurnedSeedMiss($burned_seed_miss)
    {
        $this->container['burned_seed_miss'] = $burned_seed_miss;

        return $this;
    }

    /**
     * Gets frozen
     *
     * @return float
     */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
     * Sets frozen
     *
     * @param float $frozen frozen
     *
     * @return self
     */
    public function setFrozen($frozen)
    {
        $this->container['frozen'] = $frozen;

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


