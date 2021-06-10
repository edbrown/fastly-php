<?php
/**
 * ModelEntry
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Origin insights
 *
 * Origin insights is a real-time JSON-formatted data stream providing visibility into responses delivered from your origin servers to Fastly. The API offers a standardized set of data to report in real-time every origin response, byte, and status code received by a specified service in one-second periods up to the last complete second.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0-SNAPSHOT
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
 * ModelEntry Class Doc Comment
 *
 * @category Class
 * @description Each reporting period is represented by an entry in the &#x60;Data&#x60; property of the top level response and provides access to [measurement data](#measurements-data-model) for that time period, grouped in various ways: by origin name, origin IP address, and optionally by data center. The &#x60;datacenter&#x60; property organizes the measurements by Fastly data center, while the &#x60;aggregated&#x60; property combines the measurements of all data centers (but still splits by backend name and IP).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ModelEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'model_entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recorded' => 'int',
        'aggregated' => 'object',
        'datacenter' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recorded' => null,
        'aggregated' => null,
        'datacenter' => null
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
        'recorded' => 'recorded',
        'aggregated' => 'aggregated',
        'datacenter' => 'datacenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recorded' => 'setRecorded',
        'aggregated' => 'setAggregated',
        'datacenter' => 'setDatacenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recorded' => 'getRecorded',
        'aggregated' => 'getAggregated',
        'datacenter' => 'getDatacenter'
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
        $this->container['recorded'] = $data['recorded'] ?? null;
        $this->container['aggregated'] = $data['aggregated'] ?? null;
        $this->container['datacenter'] = $data['datacenter'] ?? null;
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
     * Gets recorded
     *
     * @return int|null
     */
    public function getRecorded()
    {
        return $this->container['recorded'];
    }

    /**
     * Sets recorded
     *
     * @param int|null $recorded The Unix timestamp at which this record's data was generated.
     *
     * @return self
     */
    public function setRecorded($recorded)
    {
        $this->container['recorded'] = $recorded;

        return $this;
    }

    /**
     * Gets aggregated
     *
     * @return object|null
     */
    public function getAggregated()
    {
        return $this->container['aggregated'];
    }

    /**
     * Sets aggregated
     *
     * @param object|null $aggregated Groups [measurements](#measurements-data-model) by backend name and then by IP address.
     *
     * @return self
     */
    public function setAggregated($aggregated)
    {
        $this->container['aggregated'] = $aggregated;

        return $this;
    }

    /**
     * Gets datacenter
     *
     * @return object|null
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     *
     * @param object|null $datacenter Groups [measurements](#measurements-data-model) by data center, then backend name, and then IP address. See the [data centers API](/reference/api/utils/datacenter/) for details of data center identifiers.
     *
     * @return self
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

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


