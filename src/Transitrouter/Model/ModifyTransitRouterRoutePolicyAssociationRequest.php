<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Transitrouter\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ModifyTransitRouterRoutePolicyAssociationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModifyTransitRouterRoutePolicyAssociationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'direction' => 'string',
        'transit_router_route_policy_table_id' => 'string',
        'transit_router_route_table_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direction' => null,
        'transit_router_route_policy_table_id' => null,
        'transit_router_route_table_id' => null
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
        'direction' => 'Direction',
        'transit_router_route_policy_table_id' => 'TransitRouterRoutePolicyTableId',
        'transit_router_route_table_id' => 'TransitRouterRouteTableId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'transit_router_route_policy_table_id' => 'setTransitRouterRoutePolicyTableId',
        'transit_router_route_table_id' => 'setTransitRouterRouteTableId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'transit_router_route_policy_table_id' => 'getTransitRouterRoutePolicyTableId',
        'transit_router_route_table_id' => 'getTransitRouterRouteTableId'
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['transit_router_route_policy_table_id'] = isset($data['transit_router_route_policy_table_id']) ? $data['transit_router_route_policy_table_id'] : null;
        $this->container['transit_router_route_table_id'] = isset($data['transit_router_route_table_id']) ? $data['transit_router_route_table_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['transit_router_route_policy_table_id'] === null) {
            $invalidProperties[] = "'transit_router_route_policy_table_id' can't be null";
        }
        if ($this->container['transit_router_route_table_id'] === null) {
            $invalidProperties[] = "'transit_router_route_table_id' can't be null";
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
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets transit_router_route_policy_table_id
     *
     * @return string
     */
    public function getTransitRouterRoutePolicyTableId()
    {
        return $this->container['transit_router_route_policy_table_id'];
    }

    /**
     * Sets transit_router_route_policy_table_id
     *
     * @param string $transit_router_route_policy_table_id transit_router_route_policy_table_id
     *
     * @return $this
     */
    public function setTransitRouterRoutePolicyTableId($transit_router_route_policy_table_id)
    {
        $this->container['transit_router_route_policy_table_id'] = $transit_router_route_policy_table_id;

        return $this;
    }

    /**
     * Gets transit_router_route_table_id
     *
     * @return string
     */
    public function getTransitRouterRouteTableId()
    {
        return $this->container['transit_router_route_table_id'];
    }

    /**
     * Sets transit_router_route_table_id
     *
     * @param string $transit_router_route_table_id transit_router_route_table_id
     *
     * @return $this
     */
    public function setTransitRouterRouteTableId($transit_router_route_table_id)
    {
        $this->container['transit_router_route_table_id'] = $transit_router_route_table_id;

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

