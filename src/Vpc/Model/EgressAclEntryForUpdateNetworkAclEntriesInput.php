<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vpc\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class EgressAclEntryForUpdateNetworkAclEntriesInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EgressAclEntryForUpdateNetworkAclEntriesInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'destination_cidr_ip' => 'string',
        'network_acl_entry_id' => 'string',
        'network_acl_entry_name' => 'string',
        'policy' => 'string',
        'port' => 'string',
        'protocol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'destination_cidr_ip' => null,
        'network_acl_entry_id' => null,
        'network_acl_entry_name' => null,
        'policy' => null,
        'port' => null,
        'protocol' => null
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
        'description' => 'Description',
        'destination_cidr_ip' => 'DestinationCidrIp',
        'network_acl_entry_id' => 'NetworkAclEntryId',
        'network_acl_entry_name' => 'NetworkAclEntryName',
        'policy' => 'Policy',
        'port' => 'Port',
        'protocol' => 'Protocol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'destination_cidr_ip' => 'setDestinationCidrIp',
        'network_acl_entry_id' => 'setNetworkAclEntryId',
        'network_acl_entry_name' => 'setNetworkAclEntryName',
        'policy' => 'setPolicy',
        'port' => 'setPort',
        'protocol' => 'setProtocol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'destination_cidr_ip' => 'getDestinationCidrIp',
        'network_acl_entry_id' => 'getNetworkAclEntryId',
        'network_acl_entry_name' => 'getNetworkAclEntryName',
        'policy' => 'getPolicy',
        'port' => 'getPort',
        'protocol' => 'getProtocol'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destination_cidr_ip'] = isset($data['destination_cidr_ip']) ? $data['destination_cidr_ip'] : null;
        $this->container['network_acl_entry_id'] = isset($data['network_acl_entry_id']) ? $data['network_acl_entry_id'] : null;
        $this->container['network_acl_entry_name'] = isset($data['network_acl_entry_name']) ? $data['network_acl_entry_name'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destination_cidr_ip
     *
     * @return string
     */
    public function getDestinationCidrIp()
    {
        return $this->container['destination_cidr_ip'];
    }

    /**
     * Sets destination_cidr_ip
     *
     * @param string $destination_cidr_ip destination_cidr_ip
     *
     * @return $this
     */
    public function setDestinationCidrIp($destination_cidr_ip)
    {
        $this->container['destination_cidr_ip'] = $destination_cidr_ip;

        return $this;
    }

    /**
     * Gets network_acl_entry_id
     *
     * @return string
     */
    public function getNetworkAclEntryId()
    {
        return $this->container['network_acl_entry_id'];
    }

    /**
     * Sets network_acl_entry_id
     *
     * @param string $network_acl_entry_id network_acl_entry_id
     *
     * @return $this
     */
    public function setNetworkAclEntryId($network_acl_entry_id)
    {
        $this->container['network_acl_entry_id'] = $network_acl_entry_id;

        return $this;
    }

    /**
     * Gets network_acl_entry_name
     *
     * @return string
     */
    public function getNetworkAclEntryName()
    {
        return $this->container['network_acl_entry_name'];
    }

    /**
     * Sets network_acl_entry_name
     *
     * @param string $network_acl_entry_name network_acl_entry_name
     *
     * @return $this
     */
    public function setNetworkAclEntryName($network_acl_entry_name)
    {
        $this->container['network_acl_entry_name'] = $network_acl_entry_name;

        return $this;
    }

    /**
     * Gets policy
     *
     * @return string
     */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy
     *
     * @param string $policy policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;

        return $this;
    }

    /**
     * Gets port
     *
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param string $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

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

