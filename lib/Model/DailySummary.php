<?php
/**
 * DailySummary
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
 * DailySummary Class Doc Comment
 *
 * @category Class
 * @package  WeFitter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DailySummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DailySummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
'distance' => 'float',
'steps' => 'float',
'calories' => 'float',
'points' => 'float',
'source' => 'string',
'heart_rate_summary' => '\WeFitter\Client\Model\HeartRateSummaryLinked',
'stress_summary' => '\WeFitter\Client\Model\StressSummaryLinked'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date',
'distance' => null,
'steps' => null,
'calories' => null,
'points' => null,
'source' => null,
'heart_rate_summary' => null,
'stress_summary' => null    ];

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
        'date' => 'date',
'distance' => 'distance',
'steps' => 'steps',
'calories' => 'calories',
'points' => 'points',
'source' => 'source',
'heart_rate_summary' => 'heart_rate_summary',
'stress_summary' => 'stress_summary'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
'distance' => 'setDistance',
'steps' => 'setSteps',
'calories' => 'setCalories',
'points' => 'setPoints',
'source' => 'setSource',
'heart_rate_summary' => 'setHeartRateSummary',
'stress_summary' => 'setStressSummary'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
'distance' => 'getDistance',
'steps' => 'getSteps',
'calories' => 'getCalories',
'points' => 'getPoints',
'source' => 'getSource',
'heart_rate_summary' => 'getHeartRateSummary',
'stress_summary' => 'getStressSummary'    ];

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

    const SOURCE_FITBIT = 'FITBIT';
const SOURCE_GOOGLEFIT = 'GOOGLEFIT';
const SOURCE_GARMIN = 'GARMIN';
const SOURCE_STRAVA = 'STRAVA';
const SOURCE_OMH = 'OMH';
const SOURCE_POLAR = 'POLAR';
const SOURCE_WF = 'WF';
const SOURCE_WITHINGS = 'WITHINGS';
const SOURCE_AGGREGATED = 'AGGREGATED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_FITBIT,
self::SOURCE_GOOGLEFIT,
self::SOURCE_GARMIN,
self::SOURCE_STRAVA,
self::SOURCE_OMH,
self::SOURCE_POLAR,
self::SOURCE_WF,
self::SOURCE_WITHINGS,
self::SOURCE_AGGREGATED,        ];
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['calories'] = isset($data['calories']) ? $data['calories'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['heart_rate_summary'] = isset($data['heart_rate_summary']) ? $data['heart_rate_summary'] : null;
        $this->container['stress_summary'] = isset($data['stress_summary']) ? $data['stress_summary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Date of the summary.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float $distance Distance in meters.
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return float
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param float $steps Steps taken.
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets calories
     *
     * @return float
     */
    public function getCalories()
    {
        return $this->container['calories'];
    }

    /**
     * Sets calories
     *
     * @param float $calories Calories burned.
     *
     * @return $this
     */
    public function setCalories($calories)
    {
        $this->container['calories'] = $calories;

        return $this;
    }

    /**
     * Gets points
     *
     * @return float
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param float $points Points earned.
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Origin of the data.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets heart_rate_summary
     *
     * @return \WeFitter\Client\Model\HeartRateSummaryLinked
     */
    public function getHeartRateSummary()
    {
        return $this->container['heart_rate_summary'];
    }

    /**
     * Sets heart_rate_summary
     *
     * @param \WeFitter\Client\Model\HeartRateSummaryLinked $heart_rate_summary heart_rate_summary
     *
     * @return $this
     */
    public function setHeartRateSummary($heart_rate_summary)
    {
        $this->container['heart_rate_summary'] = $heart_rate_summary;

        return $this;
    }

    /**
     * Gets stress_summary
     *
     * @return \WeFitter\Client\Model\StressSummaryLinked
     */
    public function getStressSummary()
    {
        return $this->container['stress_summary'];
    }

    /**
     * Sets stress_summary
     *
     * @param \WeFitter\Client\Model\StressSummaryLinked $stress_summary stress_summary
     *
     * @return $this
     */
    public function setStressSummary($stress_summary)
    {
        $this->container['stress_summary'] = $stress_summary;

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