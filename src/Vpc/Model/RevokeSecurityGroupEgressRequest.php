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

class RevokeSecurityGroupEgressRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RevokeSecurityGroupEgressRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cidr_ip' => 'string',
        'description' => 'string',
        'policy' => 'string',
        'port_end' => 'int',
        'port_start' => 'int',
        'prefix_list_id' => 'string',
        'priority' => 'int',
        'protocol' => 'string',
        'security_group_id' => 'string',
        'source_group_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cidr_ip' => null,
        'description' => null,
        'policy' => null,
        'port_end' => null,
        'port_start' => null,
        'prefix_list_id' => null,
        'priority' => null,
        'protocol' => null,
        'security_group_id' => null,
        'source_group_id' => null
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
        'cidr_ip' => 'CidrIp',
        'description' => 'Description',
        'policy' => 'Policy',
        'port_end' => 'PortEnd',
        'port_start' => 'PortStart',
        'prefix_list_id' => 'PrefixListId',
        'priority' => 'Priority',
        'protocol' => 'Protocol',
        'security_group_id' => 'SecurityGroupId',
        'source_group_id' => 'SourceGroupId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cidr_ip' => 'setCidrIp',
        'description' => 'setDescription',
        'policy' => 'setPolicy',
        'port_end' => 'setPortEnd',
        'port_start' => 'setPortStart',
        'prefix_list_id' => 'setPrefixListId',
        'priority' => 'setPriority',
        'protocol' => 'setProtocol',
        'security_group_id' => 'setSecurityGroupId',
        'source_group_id' => 'setSourceGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cidr_ip' => 'getCidrIp',
        'description' => 'getDescription',
        'policy' => 'getPolicy',
        'port_end' => 'getPortEnd',
        'port_start' => 'getPortStart',
        'prefix_list_id' => 'getPrefixListId',
        'priority' => 'getPriority',
        'protocol' => 'getProtocol',
        'security_group_id' => 'getSecurityGroupId',
        'source_group_id' => 'getSourceGroupId'
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
        $this->container['cidr_ip'] = isset($data['cidr_ip']) ? $data['cidr_ip'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['port_end'] = isset($data['port_end']) ? $data['port_end'] : null;
        $this->container['port_start'] = isset($data['port_start']) ? $data['port_start'] : null;
        $this->container['prefix_list_id'] = isset($data['prefix_list_id']) ? $data['prefix_list_id'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['security_group_id'] = isset($data['security_group_id']) ? $data['security_group_id'] : null;
        $this->container['source_group_id'] = isset($data['source_group_id']) ? $data['source_group_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['port_end'] === null) {
            $invalidProperties[] = "'port_end' can't be null";
        }
        if ($this->container['port_start'] === null) {
            $invalidProperties[] = "'port_start' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['security_group_id'] === null) {
            $invalidProperties[] = "'security_group_id' can't be null";
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
     * Gets cidr_ip
     *
     * @return string
     */
    public function getCidrIp()
    {
        return $this->container['cidr_ip'];
    }

    /**
     * Sets cidr_ip
     *
     * @param string $cidr_ip cidr_ip
     *
     * @return $this
     */
    public function setCidrIp($cidr_ip)
    {
        $this->container['cidr_ip'] = $cidr_ip;

        return $this;
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
     * Gets port_end
     *
     * @return int
     */
    public function getPortEnd()
    {
        return $this->container['port_end'];
    }

    /**
     * Sets port_end
     *
     * @param int $port_end port_end
     *
     * @return $this
     */
    public function setPortEnd($port_end)
    {
        $this->container['port_end'] = $port_end;

        return $this;
    }

    /**
     * Gets port_start
     *
     * @return int
     */
    public function getPortStart()
    {
        return $this->container['port_start'];
    }

    /**
     * Sets port_start
     *
     * @param int $port_start port_start
     *
     * @return $this
     */
    public function setPortStart($port_start)
    {
        $this->container['port_start'] = $port_start;

        return $this;
    }

    /**
     * Gets prefix_list_id
     *
     * @return string
     */
    public function getPrefixListId()
    {
        return $this->container['prefix_list_id'];
    }

    /**
     * Sets prefix_list_id
     *
     * @param string $prefix_list_id prefix_list_id
     *
     * @return $this
     */
    public function setPrefixListId($prefix_list_id)
    {
        $this->container['prefix_list_id'] = $prefix_list_id;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * Gets security_group_id
     *
     * @return string
     */
    public function getSecurityGroupId()
    {
        return $this->container['security_group_id'];
    }

    /**
     * Sets security_group_id
     *
     * @param string $security_group_id security_group_id
     *
     * @return $this
     */
    public function setSecurityGroupId($security_group_id)
    {
        $this->container['security_group_id'] = $security_group_id;

        return $this;
    }

    /**
     * Gets source_group_id
     *
     * @return string
     */
    public function getSourceGroupId()
    {
        return $this->container['source_group_id'];
    }

    /**
     * Sets source_group_id
     *
     * @param string $source_group_id source_group_id
     *
     * @return $this
     */
    public function setSourceGroupId($source_group_id)
    {
        $this->container['source_group_id'] = $source_group_id;

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

