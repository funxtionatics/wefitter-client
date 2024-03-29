<?php
/**
 * ChallengeList
 *
 * PHP version 5
 *
 * @category Class
 * @package  WeFitter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WeFitter API
 *
 * This is the WeFitter API
 *
 * OpenAPI spec version: v1.1
 * Contact: hello@wefitter.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WeFitter\Client\Model;

use \ArrayAccess;
use \WeFitter\Client\ObjectSerializer;

/**
 * ChallengeList Class Doc Comment
 *
 * @category Class
 * @package  WeFitter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChallengeList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChallengeList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
'public_id' => 'string',
'title' => 'string',
'slogan' => 'string',
'start' => '\DateTime',
'end' => '\DateTime',
'type' => 'string',
'goal' => 'string',
'goal_value' => 'int',
'goal_type' => 'string',
'visibility' => 'string',
'num_members' => 'string',
'repetition' => 'string',
'avatar' => 'string',
'data_source' => 'string',
'activity_types' => '\WeFitter\Client\Model\ChallengeActivityType[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => 'uri',
'public_id' => 'uuid',
'title' => null,
'slogan' => null,
'start' => 'date-time',
'end' => 'date-time',
'type' => null,
'goal' => null,
'goal_value' => null,
'goal_type' => null,
'visibility' => null,
'num_members' => null,
'repetition' => null,
'avatar' => 'uri',
'data_source' => null,
'activity_types' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
'public_id' => 'public_id',
'title' => 'title',
'slogan' => 'slogan',
'start' => 'start',
'end' => 'end',
'type' => 'type',
'goal' => 'goal',
'goal_value' => 'goal_value',
'goal_type' => 'goal_type',
'visibility' => 'visibility',
'num_members' => 'num_members',
'repetition' => 'repetition',
'avatar' => 'avatar',
'data_source' => 'data_source',
'activity_types' => 'activity_types'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
'public_id' => 'setPublicId',
'title' => 'setTitle',
'slogan' => 'setSlogan',
'start' => 'setStart',
'end' => 'setEnd',
'type' => 'setType',
'goal' => 'setGoal',
'goal_value' => 'setGoalValue',
'goal_type' => 'setGoalType',
'visibility' => 'setVisibility',
'num_members' => 'setNumMembers',
'repetition' => 'setRepetition',
'avatar' => 'setAvatar',
'data_source' => 'setDataSource',
'activity_types' => 'setActivityTypes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
'public_id' => 'getPublicId',
'title' => 'getTitle',
'slogan' => 'getSlogan',
'start' => 'getStart',
'end' => 'getEnd',
'type' => 'getType',
'goal' => 'getGoal',
'goal_value' => 'getGoalValue',
'goal_type' => 'getGoalType',
'visibility' => 'getVisibility',
'num_members' => 'getNumMembers',
'repetition' => 'getRepetition',
'avatar' => 'getAvatar',
'data_source' => 'getDataSource',
'activity_types' => 'getActivityTypes'    ];

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
        return self::$swaggerModelName;
    }

    const TYPE_INDIVIDUAL = 'INDIVIDUAL';
const TYPE_GROUP = 'GROUP';
const TYPE_TEAM = 'TEAM';
const GOAL_DAILY = 'DAILY';
const GOAL_TOTAL = 'TOTAL';
const GOAL_WEEKLY = 'WEEKLY';
const GOAL_MONTHLY = 'MONTHLY';
const GOAL_TYPE_POINTS = 'POINTS';
const GOAL_TYPE_DISTANCE = 'DISTANCE';
const GOAL_TYPE_CALORIES = 'CALORIES';
const GOAL_TYPE_DURATION = 'DURATION';
const GOAL_TYPE_STEPS = 'STEPS';
const VISIBILITY__PUBLIC = 'PUBLIC';
const VISIBILITY__PRIVATE = 'PRIVATE';
const REPETITION_NONE = 'NONE';
const REPETITION_STREAK = 'STREAK';
const REPETITION_STICKTOIT = 'STICKTOIT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INDIVIDUAL,
self::TYPE_GROUP,
self::TYPE_TEAM,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGoalAllowableValues()
    {
        return [
            self::GOAL_DAILY,
self::GOAL_TOTAL,
self::GOAL_WEEKLY,
self::GOAL_MONTHLY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGoalTypeAllowableValues()
    {
        return [
            self::GOAL_TYPE_POINTS,
self::GOAL_TYPE_DISTANCE,
self::GOAL_TYPE_CALORIES,
self::GOAL_TYPE_DURATION,
self::GOAL_TYPE_STEPS,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY__PUBLIC,
self::VISIBILITY__PRIVATE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRepetitionAllowableValues()
    {
        return [
            self::REPETITION_NONE,
self::REPETITION_STREAK,
self::REPETITION_STICKTOIT,        ];
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['slogan'] = isset($data['slogan']) ? $data['slogan'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['goal'] = isset($data['goal']) ? $data['goal'] : null;
        $this->container['goal_value'] = isset($data['goal_value']) ? $data['goal_value'] : null;
        $this->container['goal_type'] = isset($data['goal_type']) ? $data['goal_type'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['num_members'] = isset($data['num_members']) ? $data['num_members'] : null;
        $this->container['repetition'] = isset($data['repetition']) ? $data['repetition'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['activity_types'] = isset($data['activity_types']) ? $data['activity_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['goal'] === null) {
            $invalidProperties[] = "'goal' can't be null";
        }
        $allowedValues = $this->getGoalAllowableValues();
        if (!is_null($this->container['goal']) && !in_array($this->container['goal'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'goal', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['goal_type'] === null) {
            $invalidProperties[] = "'goal_type' can't be null";
        }
        $allowedValues = $this->getGoalTypeAllowableValues();
        if (!is_null($this->container['goal_type']) && !in_array($this->container['goal_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'goal_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['visibility'] === null) {
            $invalidProperties[] = "'visibility' can't be null";
        }
        $allowedValues = $this->getVisibilityAllowableValues();
        if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['repetition'] === null) {
            $invalidProperties[] = "'repetition' can't be null";
        }
        $allowedValues = $this->getRepetitionAllowableValues();
        if (!is_null($this->container['repetition']) && !in_array($this->container['repetition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'repetition', must be one of '%s'",
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets public_id
     *
     * @return string
     */
    public function getPublicId()
    {
        return $this->container['public_id'];
    }

    /**
     * Sets public_id
     *
     * @param string $public_id public_id
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->container['slogan'];
    }

    /**
     * Sets slogan
     *
     * @param string $slogan slogan
     *
     * @return $this
     */
    public function setSlogan($slogan)
    {
        $this->container['slogan'] = $slogan;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets goal
     *
     * @return string
     */
    public function getGoal()
    {
        return $this->container['goal'];
    }

    /**
     * Sets goal
     *
     * @param string $goal goal
     *
     * @return $this
     */
    public function setGoal($goal)
    {
        $allowedValues = $this->getGoalAllowableValues();
        if (!in_array($goal, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'goal', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['goal'] = $goal;

        return $this;
    }

    /**
     * Gets goal_value
     *
     * @return int
     */
    public function getGoalValue()
    {
        return $this->container['goal_value'];
    }

    /**
     * Sets goal_value
     *
     * @param int $goal_value goal_value
     *
     * @return $this
     */
    public function setGoalValue($goal_value)
    {
        $this->container['goal_value'] = $goal_value;

        return $this;
    }

    /**
     * Gets goal_type
     *
     * @return string
     */
    public function getGoalType()
    {
        return $this->container['goal_type'];
    }

    /**
     * Sets goal_type
     *
     * @param string $goal_type goal_type
     *
     * @return $this
     */
    public function setGoalType($goal_type)
    {
        $allowedValues = $this->getGoalTypeAllowableValues();
        if (!in_array($goal_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'goal_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['goal_type'] = $goal_type;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string $visibility visibility
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $allowedValues = $this->getVisibilityAllowableValues();
        if (!in_array($visibility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visibility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets num_members
     *
     * @return string
     */
    public function getNumMembers()
    {
        return $this->container['num_members'];
    }

    /**
     * Sets num_members
     *
     * @param string $num_members num_members
     *
     * @return $this
     */
    public function setNumMembers($num_members)
    {
        $this->container['num_members'] = $num_members;

        return $this;
    }

    /**
     * Gets repetition
     *
     * @return string
     */
    public function getRepetition()
    {
        return $this->container['repetition'];
    }

    /**
     * Sets repetition
     *
     * @param string $repetition repetition
     *
     * @return $this
     */
    public function setRepetition($repetition)
    {
        $allowedValues = $this->getRepetitionAllowableValues();
        if (!in_array($repetition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repetition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['repetition'] = $repetition;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar avatar
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param string $data_source data_source
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets activity_types
     *
     * @return \WeFitter\Client\Model\ChallengeActivityType[]
     */
    public function getActivityTypes()
    {
        return $this->container['activity_types'];
    }

    /**
     * Sets activity_types
     *
     * @param \WeFitter\Client\Model\ChallengeActivityType[] $activity_types activity_types
     *
     * @return $this
     */
    public function setActivityTypes($activity_types)
    {
        $this->container['activity_types'] = $activity_types;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
