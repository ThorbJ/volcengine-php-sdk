<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Ecs\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ModifyInstanceSpecRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModifyInstanceSpecRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_token' => 'string',
        'dry_run' => 'bool',
        'instance_id' => 'string',
        'instance_type' => 'string',
        'instance_type_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_token' => null,
        'dry_run' => null,
        'instance_id' => null,
        'instance_type' => null,
        'instance_type_id' => null
    ];

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
        'client_token' => 'ClientToken',
        'dry_run' => 'DryRun',
        'instance_id' => 'InstanceId',
        'instance_type' => 'InstanceType',
        'instance_type_id' => 'InstanceTypeId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_token' => 'setClientToken',
        'dry_run' => 'setDryRun',
        'instance_id' => 'setInstanceId',
        'instance_type' => 'setInstanceType',
        'instance_type_id' => 'setInstanceTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_token' => 'getClientToken',
        'dry_run' => 'getDryRun',
        'instance_id' => 'getInstanceId',
        'instance_type' => 'getInstanceType',
        'instance_type_id' => 'getInstanceTypeId'
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
        return self::$swaggerModelName;
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
        $this->container['client_token'] = isset($data['client_token']) ? $data['client_token'] : null;
        $this->container['dry_run'] = isset($data['dry_run']) ? $data['dry_run'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['instance_type'] = isset($data['instance_type']) ? $data['instance_type'] : null;
        $this->container['instance_type_id'] = isset($data['instance_type_id']) ? $data['instance_type_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['instance_id'] === null) {
            $invalidProperties[] = "'instance_id' can't be null";
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
     * Gets client_token
     *
     * @return string
     */
    public function getClientToken()
    {
        return $this->container['client_token'];
    }

    /**
     * Sets client_token
     *
     * @param string $client_token client_token
     *
     * @return $this
     */
    public function setClientToken($client_token)
    {
        $this->container['client_token'] = $client_token;

        return $this;
    }

    /**
     * Gets dry_run
     *
     * @return bool
     */
    public function getDryRun()
    {
        return $this->container['dry_run'];
    }

    /**
     * Sets dry_run
     *
     * @param bool $dry_run dry_run
     *
     * @return $this
     */
    public function setDryRun($dry_run)
    {
        $this->container['dry_run'] = $dry_run;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id instance_id
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets instance_type
     *
     * @return string
     */
    public function getInstanceType()
    {
        return $this->container['instance_type'];
    }

    /**
     * Sets instance_type
     *
     * @param string $instance_type instance_type
     *
     * @return $this
     */
    public function setInstanceType($instance_type)
    {
        $this->container['instance_type'] = $instance_type;

        return $this;
    }

    /**
     * Gets instance_type_id
     *
     * @return string
     */
    public function getInstanceTypeId()
    {
        return $this->container['instance_type_id'];
    }

    /**
     * Sets instance_type_id
     *
     * @param string $instance_type_id instance_type_id
     *
     * @return $this
     */
    public function setInstanceTypeId($instance_type_id)
    {
        $this->container['instance_type_id'] = $instance_type_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

