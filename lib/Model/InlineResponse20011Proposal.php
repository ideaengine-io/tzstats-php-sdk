<?php
/**
 * InlineResponse20011Proposal
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
 * InlineResponse20011Proposal Class Doc Comment
 *
 * @category Class
 * @package  IdeaEngine\TzStats
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20011Proposal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_11_proposal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'voting_period' => 'float',
        'voting_period_kind' => 'string',
        'period_start_time' => 'string',
        'period_end_time' => 'string',
        'period_start_block' => 'float',
        'period_end_block' => 'float',
        'eligible_rolls' => 'float',
        'eligible_voters' => 'float',
        'quorum_pct' => 'float',
        'quorum_rolls' => 'float',
        'turnout_rolls' => 'float',
        'turnout_voters' => 'float',
        'turnout_pct' => 'float',
        'turnout_ema' => 'float',
        'yay_rolls' => 'float',
        'yay_voters' => 'float',
        'nay_rolls' => 'float',
        'nay_voters' => 'float',
        'pass_rolls' => 'float',
        'pass_voters' => 'float',
        'is_open' => 'bool',
        'is_failed' => 'bool',
        'is_draw' => 'bool',
        'no_proposal' => 'bool',
        'no_quorum' => 'bool',
        'no_majority' => 'bool',
        'proposals' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'voting_period' => null,
        'voting_period_kind' => null,
        'period_start_time' => null,
        'period_end_time' => null,
        'period_start_block' => null,
        'period_end_block' => null,
        'eligible_rolls' => null,
        'eligible_voters' => null,
        'quorum_pct' => null,
        'quorum_rolls' => null,
        'turnout_rolls' => null,
        'turnout_voters' => null,
        'turnout_pct' => null,
        'turnout_ema' => null,
        'yay_rolls' => null,
        'yay_voters' => null,
        'nay_rolls' => null,
        'nay_voters' => null,
        'pass_rolls' => null,
        'pass_voters' => null,
        'is_open' => null,
        'is_failed' => null,
        'is_draw' => null,
        'no_proposal' => null,
        'no_quorum' => null,
        'no_majority' => null,
        'proposals' => null
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
        'voting_period' => 'voting_period',
        'voting_period_kind' => 'voting_period_kind',
        'period_start_time' => 'period_start_time',
        'period_end_time' => 'period_end_time',
        'period_start_block' => 'period_start_block',
        'period_end_block' => 'period_end_block',
        'eligible_rolls' => 'eligible_rolls',
        'eligible_voters' => 'eligible_voters',
        'quorum_pct' => 'quorum_pct',
        'quorum_rolls' => 'quorum_rolls',
        'turnout_rolls' => 'turnout_rolls',
        'turnout_voters' => 'turnout_voters',
        'turnout_pct' => 'turnout_pct',
        'turnout_ema' => 'turnout_ema',
        'yay_rolls' => 'yay_rolls',
        'yay_voters' => 'yay_voters',
        'nay_rolls' => 'nay_rolls',
        'nay_voters' => 'nay_voters',
        'pass_rolls' => 'pass_rolls',
        'pass_voters' => 'pass_voters',
        'is_open' => 'is_open',
        'is_failed' => 'is_failed',
        'is_draw' => 'is_draw',
        'no_proposal' => 'no_proposal',
        'no_quorum' => 'no_quorum',
        'no_majority' => 'no_majority',
        'proposals' => 'proposals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voting_period' => 'setVotingPeriod',
        'voting_period_kind' => 'setVotingPeriodKind',
        'period_start_time' => 'setPeriodStartTime',
        'period_end_time' => 'setPeriodEndTime',
        'period_start_block' => 'setPeriodStartBlock',
        'period_end_block' => 'setPeriodEndBlock',
        'eligible_rolls' => 'setEligibleRolls',
        'eligible_voters' => 'setEligibleVoters',
        'quorum_pct' => 'setQuorumPct',
        'quorum_rolls' => 'setQuorumRolls',
        'turnout_rolls' => 'setTurnoutRolls',
        'turnout_voters' => 'setTurnoutVoters',
        'turnout_pct' => 'setTurnoutPct',
        'turnout_ema' => 'setTurnoutEma',
        'yay_rolls' => 'setYayRolls',
        'yay_voters' => 'setYayVoters',
        'nay_rolls' => 'setNayRolls',
        'nay_voters' => 'setNayVoters',
        'pass_rolls' => 'setPassRolls',
        'pass_voters' => 'setPassVoters',
        'is_open' => 'setIsOpen',
        'is_failed' => 'setIsFailed',
        'is_draw' => 'setIsDraw',
        'no_proposal' => 'setNoProposal',
        'no_quorum' => 'setNoQuorum',
        'no_majority' => 'setNoMajority',
        'proposals' => 'setProposals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voting_period' => 'getVotingPeriod',
        'voting_period_kind' => 'getVotingPeriodKind',
        'period_start_time' => 'getPeriodStartTime',
        'period_end_time' => 'getPeriodEndTime',
        'period_start_block' => 'getPeriodStartBlock',
        'period_end_block' => 'getPeriodEndBlock',
        'eligible_rolls' => 'getEligibleRolls',
        'eligible_voters' => 'getEligibleVoters',
        'quorum_pct' => 'getQuorumPct',
        'quorum_rolls' => 'getQuorumRolls',
        'turnout_rolls' => 'getTurnoutRolls',
        'turnout_voters' => 'getTurnoutVoters',
        'turnout_pct' => 'getTurnoutPct',
        'turnout_ema' => 'getTurnoutEma',
        'yay_rolls' => 'getYayRolls',
        'yay_voters' => 'getYayVoters',
        'nay_rolls' => 'getNayRolls',
        'nay_voters' => 'getNayVoters',
        'pass_rolls' => 'getPassRolls',
        'pass_voters' => 'getPassVoters',
        'is_open' => 'getIsOpen',
        'is_failed' => 'getIsFailed',
        'is_draw' => 'getIsDraw',
        'no_proposal' => 'getNoProposal',
        'no_quorum' => 'getNoQuorum',
        'no_majority' => 'getNoMajority',
        'proposals' => 'getProposals'
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
        $this->container['voting_period'] = $data['voting_period'] ?? null;
        $this->container['voting_period_kind'] = $data['voting_period_kind'] ?? null;
        $this->container['period_start_time'] = $data['period_start_time'] ?? null;
        $this->container['period_end_time'] = $data['period_end_time'] ?? null;
        $this->container['period_start_block'] = $data['period_start_block'] ?? null;
        $this->container['period_end_block'] = $data['period_end_block'] ?? null;
        $this->container['eligible_rolls'] = $data['eligible_rolls'] ?? null;
        $this->container['eligible_voters'] = $data['eligible_voters'] ?? null;
        $this->container['quorum_pct'] = $data['quorum_pct'] ?? null;
        $this->container['quorum_rolls'] = $data['quorum_rolls'] ?? null;
        $this->container['turnout_rolls'] = $data['turnout_rolls'] ?? null;
        $this->container['turnout_voters'] = $data['turnout_voters'] ?? null;
        $this->container['turnout_pct'] = $data['turnout_pct'] ?? null;
        $this->container['turnout_ema'] = $data['turnout_ema'] ?? null;
        $this->container['yay_rolls'] = $data['yay_rolls'] ?? null;
        $this->container['yay_voters'] = $data['yay_voters'] ?? null;
        $this->container['nay_rolls'] = $data['nay_rolls'] ?? null;
        $this->container['nay_voters'] = $data['nay_voters'] ?? null;
        $this->container['pass_rolls'] = $data['pass_rolls'] ?? null;
        $this->container['pass_voters'] = $data['pass_voters'] ?? null;
        $this->container['is_open'] = $data['is_open'] ?? null;
        $this->container['is_failed'] = $data['is_failed'] ?? null;
        $this->container['is_draw'] = $data['is_draw'] ?? null;
        $this->container['no_proposal'] = $data['no_proposal'] ?? null;
        $this->container['no_quorum'] = $data['no_quorum'] ?? null;
        $this->container['no_majority'] = $data['no_majority'] ?? null;
        $this->container['proposals'] = $data['proposals'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['voting_period'] === null) {
            $invalidProperties[] = "'voting_period' can't be null";
        }
        if ($this->container['voting_period_kind'] === null) {
            $invalidProperties[] = "'voting_period_kind' can't be null";
        }
        if ((mb_strlen($this->container['voting_period_kind']) < 1)) {
            $invalidProperties[] = "invalid value for 'voting_period_kind', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['period_start_time'] === null) {
            $invalidProperties[] = "'period_start_time' can't be null";
        }
        if ((mb_strlen($this->container['period_start_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'period_start_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['period_end_time'] === null) {
            $invalidProperties[] = "'period_end_time' can't be null";
        }
        if ((mb_strlen($this->container['period_end_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'period_end_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['period_start_block'] === null) {
            $invalidProperties[] = "'period_start_block' can't be null";
        }
        if ($this->container['period_end_block'] === null) {
            $invalidProperties[] = "'period_end_block' can't be null";
        }
        if ($this->container['eligible_rolls'] === null) {
            $invalidProperties[] = "'eligible_rolls' can't be null";
        }
        if ($this->container['eligible_voters'] === null) {
            $invalidProperties[] = "'eligible_voters' can't be null";
        }
        if ($this->container['quorum_pct'] === null) {
            $invalidProperties[] = "'quorum_pct' can't be null";
        }
        if ($this->container['quorum_rolls'] === null) {
            $invalidProperties[] = "'quorum_rolls' can't be null";
        }
        if ($this->container['turnout_rolls'] === null) {
            $invalidProperties[] = "'turnout_rolls' can't be null";
        }
        if ($this->container['turnout_voters'] === null) {
            $invalidProperties[] = "'turnout_voters' can't be null";
        }
        if ($this->container['turnout_pct'] === null) {
            $invalidProperties[] = "'turnout_pct' can't be null";
        }
        if ($this->container['turnout_ema'] === null) {
            $invalidProperties[] = "'turnout_ema' can't be null";
        }
        if ($this->container['yay_rolls'] === null) {
            $invalidProperties[] = "'yay_rolls' can't be null";
        }
        if ($this->container['yay_voters'] === null) {
            $invalidProperties[] = "'yay_voters' can't be null";
        }
        if ($this->container['nay_rolls'] === null) {
            $invalidProperties[] = "'nay_rolls' can't be null";
        }
        if ($this->container['nay_voters'] === null) {
            $invalidProperties[] = "'nay_voters' can't be null";
        }
        if ($this->container['pass_rolls'] === null) {
            $invalidProperties[] = "'pass_rolls' can't be null";
        }
        if ($this->container['pass_voters'] === null) {
            $invalidProperties[] = "'pass_voters' can't be null";
        }
        if ($this->container['is_open'] === null) {
            $invalidProperties[] = "'is_open' can't be null";
        }
        if ($this->container['is_failed'] === null) {
            $invalidProperties[] = "'is_failed' can't be null";
        }
        if ($this->container['is_draw'] === null) {
            $invalidProperties[] = "'is_draw' can't be null";
        }
        if ($this->container['no_proposal'] === null) {
            $invalidProperties[] = "'no_proposal' can't be null";
        }
        if ($this->container['no_quorum'] === null) {
            $invalidProperties[] = "'no_quorum' can't be null";
        }
        if ($this->container['no_majority'] === null) {
            $invalidProperties[] = "'no_majority' can't be null";
        }
        if ($this->container['proposals'] === null) {
            $invalidProperties[] = "'proposals' can't be null";
        }
        if ((count($this->container['proposals']) < 1)) {
            $invalidProperties[] = "invalid value for 'proposals', number of items must be greater than or equal to 1.";
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
     * Gets voting_period
     *
     * @return float
     */
    public function getVotingPeriod()
    {
        return $this->container['voting_period'];
    }

    /**
     * Sets voting_period
     *
     * @param float $voting_period voting_period
     *
     * @return self
     */
    public function setVotingPeriod($voting_period)
    {
        $this->container['voting_period'] = $voting_period;

        return $this;
    }

    /**
     * Gets voting_period_kind
     *
     * @return string
     */
    public function getVotingPeriodKind()
    {
        return $this->container['voting_period_kind'];
    }

    /**
     * Sets voting_period_kind
     *
     * @param string $voting_period_kind voting_period_kind
     *
     * @return self
     */
    public function setVotingPeriodKind($voting_period_kind)
    {

        if ((mb_strlen($voting_period_kind) < 1)) {
            throw new \InvalidArgumentException('invalid length for $voting_period_kind when calling InlineResponse20011Proposal., must be bigger than or equal to 1.');
        }

        $this->container['voting_period_kind'] = $voting_period_kind;

        return $this;
    }

    /**
     * Gets period_start_time
     *
     * @return string
     */
    public function getPeriodStartTime()
    {
        return $this->container['period_start_time'];
    }

    /**
     * Sets period_start_time
     *
     * @param string $period_start_time period_start_time
     *
     * @return self
     */
    public function setPeriodStartTime($period_start_time)
    {

        if ((mb_strlen($period_start_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $period_start_time when calling InlineResponse20011Proposal., must be bigger than or equal to 1.');
        }

        $this->container['period_start_time'] = $period_start_time;

        return $this;
    }

    /**
     * Gets period_end_time
     *
     * @return string
     */
    public function getPeriodEndTime()
    {
        return $this->container['period_end_time'];
    }

    /**
     * Sets period_end_time
     *
     * @param string $period_end_time period_end_time
     *
     * @return self
     */
    public function setPeriodEndTime($period_end_time)
    {

        if ((mb_strlen($period_end_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $period_end_time when calling InlineResponse20011Proposal., must be bigger than or equal to 1.');
        }

        $this->container['period_end_time'] = $period_end_time;

        return $this;
    }

    /**
     * Gets period_start_block
     *
     * @return float
     */
    public function getPeriodStartBlock()
    {
        return $this->container['period_start_block'];
    }

    /**
     * Sets period_start_block
     *
     * @param float $period_start_block period_start_block
     *
     * @return self
     */
    public function setPeriodStartBlock($period_start_block)
    {
        $this->container['period_start_block'] = $period_start_block;

        return $this;
    }

    /**
     * Gets period_end_block
     *
     * @return float
     */
    public function getPeriodEndBlock()
    {
        return $this->container['period_end_block'];
    }

    /**
     * Sets period_end_block
     *
     * @param float $period_end_block period_end_block
     *
     * @return self
     */
    public function setPeriodEndBlock($period_end_block)
    {
        $this->container['period_end_block'] = $period_end_block;

        return $this;
    }

    /**
     * Gets eligible_rolls
     *
     * @return float
     */
    public function getEligibleRolls()
    {
        return $this->container['eligible_rolls'];
    }

    /**
     * Sets eligible_rolls
     *
     * @param float $eligible_rolls eligible_rolls
     *
     * @return self
     */
    public function setEligibleRolls($eligible_rolls)
    {
        $this->container['eligible_rolls'] = $eligible_rolls;

        return $this;
    }

    /**
     * Gets eligible_voters
     *
     * @return float
     */
    public function getEligibleVoters()
    {
        return $this->container['eligible_voters'];
    }

    /**
     * Sets eligible_voters
     *
     * @param float $eligible_voters eligible_voters
     *
     * @return self
     */
    public function setEligibleVoters($eligible_voters)
    {
        $this->container['eligible_voters'] = $eligible_voters;

        return $this;
    }

    /**
     * Gets quorum_pct
     *
     * @return float
     */
    public function getQuorumPct()
    {
        return $this->container['quorum_pct'];
    }

    /**
     * Sets quorum_pct
     *
     * @param float $quorum_pct quorum_pct
     *
     * @return self
     */
    public function setQuorumPct($quorum_pct)
    {
        $this->container['quorum_pct'] = $quorum_pct;

        return $this;
    }

    /**
     * Gets quorum_rolls
     *
     * @return float
     */
    public function getQuorumRolls()
    {
        return $this->container['quorum_rolls'];
    }

    /**
     * Sets quorum_rolls
     *
     * @param float $quorum_rolls quorum_rolls
     *
     * @return self
     */
    public function setQuorumRolls($quorum_rolls)
    {
        $this->container['quorum_rolls'] = $quorum_rolls;

        return $this;
    }

    /**
     * Gets turnout_rolls
     *
     * @return float
     */
    public function getTurnoutRolls()
    {
        return $this->container['turnout_rolls'];
    }

    /**
     * Sets turnout_rolls
     *
     * @param float $turnout_rolls turnout_rolls
     *
     * @return self
     */
    public function setTurnoutRolls($turnout_rolls)
    {
        $this->container['turnout_rolls'] = $turnout_rolls;

        return $this;
    }

    /**
     * Gets turnout_voters
     *
     * @return float
     */
    public function getTurnoutVoters()
    {
        return $this->container['turnout_voters'];
    }

    /**
     * Sets turnout_voters
     *
     * @param float $turnout_voters turnout_voters
     *
     * @return self
     */
    public function setTurnoutVoters($turnout_voters)
    {
        $this->container['turnout_voters'] = $turnout_voters;

        return $this;
    }

    /**
     * Gets turnout_pct
     *
     * @return float
     */
    public function getTurnoutPct()
    {
        return $this->container['turnout_pct'];
    }

    /**
     * Sets turnout_pct
     *
     * @param float $turnout_pct turnout_pct
     *
     * @return self
     */
    public function setTurnoutPct($turnout_pct)
    {
        $this->container['turnout_pct'] = $turnout_pct;

        return $this;
    }

    /**
     * Gets turnout_ema
     *
     * @return float
     */
    public function getTurnoutEma()
    {
        return $this->container['turnout_ema'];
    }

    /**
     * Sets turnout_ema
     *
     * @param float $turnout_ema turnout_ema
     *
     * @return self
     */
    public function setTurnoutEma($turnout_ema)
    {
        $this->container['turnout_ema'] = $turnout_ema;

        return $this;
    }

    /**
     * Gets yay_rolls
     *
     * @return float
     */
    public function getYayRolls()
    {
        return $this->container['yay_rolls'];
    }

    /**
     * Sets yay_rolls
     *
     * @param float $yay_rolls yay_rolls
     *
     * @return self
     */
    public function setYayRolls($yay_rolls)
    {
        $this->container['yay_rolls'] = $yay_rolls;

        return $this;
    }

    /**
     * Gets yay_voters
     *
     * @return float
     */
    public function getYayVoters()
    {
        return $this->container['yay_voters'];
    }

    /**
     * Sets yay_voters
     *
     * @param float $yay_voters yay_voters
     *
     * @return self
     */
    public function setYayVoters($yay_voters)
    {
        $this->container['yay_voters'] = $yay_voters;

        return $this;
    }

    /**
     * Gets nay_rolls
     *
     * @return float
     */
    public function getNayRolls()
    {
        return $this->container['nay_rolls'];
    }

    /**
     * Sets nay_rolls
     *
     * @param float $nay_rolls nay_rolls
     *
     * @return self
     */
    public function setNayRolls($nay_rolls)
    {
        $this->container['nay_rolls'] = $nay_rolls;

        return $this;
    }

    /**
     * Gets nay_voters
     *
     * @return float
     */
    public function getNayVoters()
    {
        return $this->container['nay_voters'];
    }

    /**
     * Sets nay_voters
     *
     * @param float $nay_voters nay_voters
     *
     * @return self
     */
    public function setNayVoters($nay_voters)
    {
        $this->container['nay_voters'] = $nay_voters;

        return $this;
    }

    /**
     * Gets pass_rolls
     *
     * @return float
     */
    public function getPassRolls()
    {
        return $this->container['pass_rolls'];
    }

    /**
     * Sets pass_rolls
     *
     * @param float $pass_rolls pass_rolls
     *
     * @return self
     */
    public function setPassRolls($pass_rolls)
    {
        $this->container['pass_rolls'] = $pass_rolls;

        return $this;
    }

    /**
     * Gets pass_voters
     *
     * @return float
     */
    public function getPassVoters()
    {
        return $this->container['pass_voters'];
    }

    /**
     * Sets pass_voters
     *
     * @param float $pass_voters pass_voters
     *
     * @return self
     */
    public function setPassVoters($pass_voters)
    {
        $this->container['pass_voters'] = $pass_voters;

        return $this;
    }

    /**
     * Gets is_open
     *
     * @return bool
     */
    public function getIsOpen()
    {
        return $this->container['is_open'];
    }

    /**
     * Sets is_open
     *
     * @param bool $is_open is_open
     *
     * @return self
     */
    public function setIsOpen($is_open)
    {
        $this->container['is_open'] = $is_open;

        return $this;
    }

    /**
     * Gets is_failed
     *
     * @return bool
     */
    public function getIsFailed()
    {
        return $this->container['is_failed'];
    }

    /**
     * Sets is_failed
     *
     * @param bool $is_failed is_failed
     *
     * @return self
     */
    public function setIsFailed($is_failed)
    {
        $this->container['is_failed'] = $is_failed;

        return $this;
    }

    /**
     * Gets is_draw
     *
     * @return bool
     */
    public function getIsDraw()
    {
        return $this->container['is_draw'];
    }

    /**
     * Sets is_draw
     *
     * @param bool $is_draw is_draw
     *
     * @return self
     */
    public function setIsDraw($is_draw)
    {
        $this->container['is_draw'] = $is_draw;

        return $this;
    }

    /**
     * Gets no_proposal
     *
     * @return bool
     */
    public function getNoProposal()
    {
        return $this->container['no_proposal'];
    }

    /**
     * Sets no_proposal
     *
     * @param bool $no_proposal no_proposal
     *
     * @return self
     */
    public function setNoProposal($no_proposal)
    {
        $this->container['no_proposal'] = $no_proposal;

        return $this;
    }

    /**
     * Gets no_quorum
     *
     * @return bool
     */
    public function getNoQuorum()
    {
        return $this->container['no_quorum'];
    }

    /**
     * Sets no_quorum
     *
     * @param bool $no_quorum no_quorum
     *
     * @return self
     */
    public function setNoQuorum($no_quorum)
    {
        $this->container['no_quorum'] = $no_quorum;

        return $this;
    }

    /**
     * Gets no_majority
     *
     * @return bool
     */
    public function getNoMajority()
    {
        return $this->container['no_majority'];
    }

    /**
     * Sets no_majority
     *
     * @param bool $no_majority no_majority
     *
     * @return self
     */
    public function setNoMajority($no_majority)
    {
        $this->container['no_majority'] = $no_majority;

        return $this;
    }

    /**
     * Gets proposals
     *
     * @return object[]
     */
    public function getProposals()
    {
        return $this->container['proposals'];
    }

    /**
     * Sets proposals
     *
     * @param object[] $proposals proposals
     *
     * @return self
     */
    public function setProposals($proposals)
    {


        if ((count($proposals) < 1)) {
            throw new \InvalidArgumentException('invalid length for $proposals when calling InlineResponse20011Proposal., number of items must be greater than or equal to 1.');
        }
        $this->container['proposals'] = $proposals;

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


