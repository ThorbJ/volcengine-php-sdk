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

class CreateRouteEntryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateRouteEntryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_token' => 'string',
        'description' => 'string',
        'destination_cidr_block' => 'string',
        'destination_prefix_list_id' => 'string',
        'next_hop_id' => 'string',
        'next_hop_type' => 'string',
        'route_entry_name' => 'string',
        'route_table_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_token' => null,
        'description' => null,
        'destination_cidr_block' => null,
        'destination_prefix_list_id' => null,
        'next_hop_id' => null,
        'next_hop_type' => null,
        'route_entry_name' => null,
        'route_table_id' => null
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
        'description' => 'Description',
        'destination_cidr_block' => 'DestinationCidrBlock',
        'destination_prefix_list_id' => 'DestinationPrefixListId',
        'next_hop_id' => 'NextHopId',
        'next_hop_type' => 'NextHopType',
        'route_entry_name' => 'RouteEntryName',
        'route_table_id' => 'RouteTableId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_token' => 'setClientToken',
        'description' => 'setDescription',
        'destination_cidr_block' => 'setDestinationCidrBlock',
        'destination_prefix_list_id' => 'setDestinationPrefixListId',
        'next_hop_id' => 'setNextHopId',
        'next_hop_type' => 'setNextHopType',
        'route_entry_name' => 'setRouteEntryName',
        'route_table_id' => 'setRouteTableId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_token' => 'getClientToken',
        'description' => 'getDescription',
        'destination_cidr_block' => 'getDestinationCidrBlock',
        'destination_prefix_list_id' => 'getDestinationPrefixListId',
        'next_hop_id' => 'getNextHopId',
        'next_hop_type' => 'getNextHopType',
        'route_entry_name' => 'getRouteEntryName',
        'route_table_id' => 'getRouteTableId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destination_cidr_block'] = isset($data['destination_cidr_block']) ? $data['destination_cidr_block'] : null;
        $this->container['destination_prefix_list_id'] = isset($data['destination_prefix_list_id']) ? $data['destination_prefix_list_id'] : null;
        $this->container['next_hop_id'] = isset($data['next_hop_id']) ? $data['next_hop_id'] : null;
        $this->container['next_hop_type'] = isset($data['next_hop_type']) ? $data['next_hop_type'] : null;
        $this->container['route_entry_name'] = isset($data['route_entry_name']) ? $data['route_entry_name'] : null;
        $this->container['route_table_id'] = isset($data['route_table_id']) ? $data['route_table_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['next_hop_id'] === null) {
            $invalidProperties[] = "'next_hop_id' can't be null";
        }
        if ($this->container['next_hop_type'] === null) {
            $invalidProperties[] = "'next_hop_type' can't be null";
        }
        if ($this->container['route_table_id'] === null) {
            $invalidProperties[] = "'route_table_id' can't be null";
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
     * Gets destination_cidr_block
     *
     * @return string
     */
    public function getDestinationCidrBlock()
    {
        return $this->container['destination_cidr_block'];
    }

    /**
     * Sets destination_cidr_block
     *
     * @param string $destination_cidr_block destination_cidr_block
     *
     * @return $this
     */
    public function setDestinationCidrBlock($destination_cidr_block)
    {
        $this->container['destination_cidr_block'] = $destination_cidr_block;

        return $this;
    }

    /**
     * Gets destination_prefix_list_id
     *
     * @return string
     */
    public function getDestinationPrefixListId()
    {
        return $this->container['destination_prefix_list_id'];
    }

    /**
     * Sets destination_prefix_list_id
     *
     * @param string $destination_prefix_list_id destination_prefix_list_id
     *
     * @return $this
     */
    public function setDestinationPrefixListId($destination_prefix_list_id)
    {
        $this->container['destination_prefix_list_id'] = $destination_prefix_list_id;

        return $this;
    }

    /**
     * Gets next_hop_id
     *
     * @return string
     */
    public function getNextHopId()
    {
        return $this->container['next_hop_id'];
    }

    /**
     * Sets next_hop_id
     *
     * @param string $next_hop_id next_hop_id
     *
     * @return $this
     */
    public function setNextHopId($next_hop_id)
    {
        $this->container['next_hop_id'] = $next_hop_id;

        return $this;
    }

    /**
     * Gets next_hop_type
     *
     * @return string
     */
    public function getNextHopType()
    {
        return $this->container['next_hop_type'];
    }

    /**
     * Sets next_hop_type
     *
     * @param string $next_hop_type next_hop_type
     *
     * @return $this
     */
    public function setNextHopType($next_hop_type)
    {
        $this->container['next_hop_type'] = $next_hop_type;

        return $this;
    }

    /**
     * Gets route_entry_name
     *
     * @return string
     */
    public function getRouteEntryName()
    {
        return $this->container['route_entry_name'];
    }

    /**
     * Sets route_entry_name
     *
     * @param string $route_entry_name route_entry_name
     *
     * @return $this
     */
    public function setRouteEntryName($route_entry_name)
    {
        $this->container['route_entry_name'] = $route_entry_name;

        return $this;
    }

    /**
     * Gets route_table_id
     *
     * @return string
     */
    public function getRouteTableId()
    {
        return $this->container['route_table_id'];
    }

    /**
     * Sets route_table_id
     *
     * @param string $route_table_id route_table_id
     *
     * @return $this
     */
    public function setRouteTableId($route_table_id)
    {
        $this->container['route_table_id'] = $route_table_id;

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

