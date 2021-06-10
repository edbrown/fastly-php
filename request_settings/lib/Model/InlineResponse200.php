<?php
/**
 * InlineResponse200
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Request settings
 *
 * Settings used to customize Fastly's request handling. When used with [Conditions](#condition) the Request Settings object allows you to fine tune how specific types of requests are handled.
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
 * InlineResponse200 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineResponse200 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'service_id' => 'string',
        'version' => 'int',
        'action' => 'string',
        'bypass_busy_wait' => 'int',
        'default_host' => 'string',
        'force_miss' => 'int',
        'force_ssl' => 'int',
        'geo_headers' => 'int',
        'hash_keys' => 'string',
        'max_stale_age' => 'int',
        'name' => 'string',
        'request_condition' => 'string',
        'timer_support' => 'int',
        'xff' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'service_id' => null,
        'version' => null,
        'action' => null,
        'bypass_busy_wait' => null,
        'default_host' => null,
        'force_miss' => null,
        'force_ssl' => null,
        'geo_headers' => null,
        'hash_keys' => null,
        'max_stale_age' => null,
        'name' => null,
        'request_condition' => null,
        'timer_support' => null,
        'xff' => null
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
        'service_id' => 'service_id',
        'version' => 'version',
        'action' => 'action',
        'bypass_busy_wait' => 'bypass_busy_wait',
        'default_host' => 'default_host',
        'force_miss' => 'force_miss',
        'force_ssl' => 'force_ssl',
        'geo_headers' => 'geo_headers',
        'hash_keys' => 'hash_keys',
        'max_stale_age' => 'max_stale_age',
        'name' => 'name',
        'request_condition' => 'request_condition',
        'timer_support' => 'timer_support',
        'xff' => 'xff'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_id' => 'setServiceId',
        'version' => 'setVersion',
        'action' => 'setAction',
        'bypass_busy_wait' => 'setBypassBusyWait',
        'default_host' => 'setDefaultHost',
        'force_miss' => 'setForceMiss',
        'force_ssl' => 'setForceSsl',
        'geo_headers' => 'setGeoHeaders',
        'hash_keys' => 'setHashKeys',
        'max_stale_age' => 'setMaxStaleAge',
        'name' => 'setName',
        'request_condition' => 'setRequestCondition',
        'timer_support' => 'setTimerSupport',
        'xff' => 'setXff'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_id' => 'getServiceId',
        'version' => 'getVersion',
        'action' => 'getAction',
        'bypass_busy_wait' => 'getBypassBusyWait',
        'default_host' => 'getDefaultHost',
        'force_miss' => 'getForceMiss',
        'force_ssl' => 'getForceSsl',
        'geo_headers' => 'getGeoHeaders',
        'hash_keys' => 'getHashKeys',
        'max_stale_age' => 'getMaxStaleAge',
        'name' => 'getName',
        'request_condition' => 'getRequestCondition',
        'timer_support' => 'getTimerSupport',
        'xff' => 'getXff'
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
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['bypass_busy_wait'] = $data['bypass_busy_wait'] ?? null;
        $this->container['default_host'] = $data['default_host'] ?? null;
        $this->container['force_miss'] = $data['force_miss'] ?? null;
        $this->container['force_ssl'] = $data['force_ssl'] ?? null;
        $this->container['geo_headers'] = $data['geo_headers'] ?? null;
        $this->container['hash_keys'] = $data['hash_keys'] ?? null;
        $this->container['max_stale_age'] = $data['max_stale_age'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['request_condition'] = $data['request_condition'] ?? null;
        $this->container['timer_support'] = $data['timer_support'] ?? null;
        $this->container['xff'] = $data['xff'] ?? null;
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
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id Alphanumeric string identifying the service.
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version Integer identifying a service version.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Allows you to terminate request handling and immediately perform an action. When set it can be `lookup` or `pass` (ignore the cache completely).
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets bypass_busy_wait
     *
     * @return int|null
     */
    public function getBypassBusyWait()
    {
        return $this->container['bypass_busy_wait'];
    }

    /**
     * Sets bypass_busy_wait
     *
     * @param int|null $bypass_busy_wait Disable collapsed forwarding, so you don't wait for other objects to origin.
     *
     * @return self
     */
    public function setBypassBusyWait($bypass_busy_wait)
    {
        $this->container['bypass_busy_wait'] = $bypass_busy_wait;

        return $this;
    }

    /**
     * Gets default_host
     *
     * @return string|null
     */
    public function getDefaultHost()
    {
        return $this->container['default_host'];
    }

    /**
     * Sets default_host
     *
     * @param string|null $default_host Sets the host header.
     *
     * @return self
     */
    public function setDefaultHost($default_host)
    {
        $this->container['default_host'] = $default_host;

        return $this;
    }

    /**
     * Gets force_miss
     *
     * @return int|null
     */
    public function getForceMiss()
    {
        return $this->container['force_miss'];
    }

    /**
     * Sets force_miss
     *
     * @param int|null $force_miss Allows you to force a cache miss for the request. Replaces the item in the cache if the content is cacheable.
     *
     * @return self
     */
    public function setForceMiss($force_miss)
    {
        $this->container['force_miss'] = $force_miss;

        return $this;
    }

    /**
     * Gets force_ssl
     *
     * @return int|null
     */
    public function getForceSsl()
    {
        return $this->container['force_ssl'];
    }

    /**
     * Sets force_ssl
     *
     * @param int|null $force_ssl Forces the request use SSL (redirects a non-SSL to SSL).
     *
     * @return self
     */
    public function setForceSsl($force_ssl)
    {
        $this->container['force_ssl'] = $force_ssl;

        return $this;
    }

    /**
     * Gets geo_headers
     *
     * @return int|null
     */
    public function getGeoHeaders()
    {
        return $this->container['geo_headers'];
    }

    /**
     * Sets geo_headers
     *
     * @param int|null $geo_headers Injects Fastly-Geo-Country, Fastly-Geo-City, and Fastly-Geo-Region into the request headers.
     *
     * @return self
     */
    public function setGeoHeaders($geo_headers)
    {
        $this->container['geo_headers'] = $geo_headers;

        return $this;
    }

    /**
     * Gets hash_keys
     *
     * @return string|null
     */
    public function getHashKeys()
    {
        return $this->container['hash_keys'];
    }

    /**
     * Sets hash_keys
     *
     * @param string|null $hash_keys Comma separated list of varnish request object fields that should be in the hash key.
     *
     * @return self
     */
    public function setHashKeys($hash_keys)
    {
        $this->container['hash_keys'] = $hash_keys;

        return $this;
    }

    /**
     * Gets max_stale_age
     *
     * @return int|null
     */
    public function getMaxStaleAge()
    {
        return $this->container['max_stale_age'];
    }

    /**
     * Sets max_stale_age
     *
     * @param int|null $max_stale_age How old an object is allowed to be to serve stale-if-error or stale-while-revalidate.
     *
     * @return self
     */
    public function setMaxStaleAge($max_stale_age)
    {
        $this->container['max_stale_age'] = $max_stale_age;

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
     * @param string|null $name Name for the request settings.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets request_condition
     *
     * @return string|null
     */
    public function getRequestCondition()
    {
        return $this->container['request_condition'];
    }

    /**
     * Sets request_condition
     *
     * @param string|null $request_condition Condition which, if met, will select this configuration during a request. Optional.
     *
     * @return self
     */
    public function setRequestCondition($request_condition)
    {
        $this->container['request_condition'] = $request_condition;

        return $this;
    }

    /**
     * Gets timer_support
     *
     * @return int|null
     */
    public function getTimerSupport()
    {
        return $this->container['timer_support'];
    }

    /**
     * Sets timer_support
     *
     * @param int|null $timer_support Injects the X-Timer info into the request for viewing origin fetch durations.
     *
     * @return self
     */
    public function setTimerSupport($timer_support)
    {
        $this->container['timer_support'] = $timer_support;

        return $this;
    }

    /**
     * Gets xff
     *
     * @return string|null
     */
    public function getXff()
    {
        return $this->container['xff'];
    }

    /**
     * Sets xff
     *
     * @param string|null $xff Short for X-Forwarded-For, should be `clear`, `leave`, `append`, `append_all`, or `overwrite`.
     *
     * @return self
     */
    public function setXff($xff)
    {
        $this->container['xff'] = $xff;

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

