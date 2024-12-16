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

class InstanceConfigForDescribeScheduledInstancesOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstanceConfigForDescribeScheduledInstancesOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'eip_address' => '\Volcengine\Ecs\Model\EipAddressForDescribeScheduledInstancesOutput',
        'host_name' => 'string',
        'image_id' => 'string',
        'instance_name' => 'string',
        'instance_type_id' => 'string',
        'key_pair_name' => 'string',
        'network_interfaces_res' => '\Volcengine\Ecs\Model\NetworkInterfacesReForDescribeScheduledInstancesOutput[]',
        'project_name' => 'string',
        'tags' => '\Volcengine\Ecs\Model\TagForDescribeScheduledInstancesOutput[]',
        'volumes' => '\Volcengine\Ecs\Model\VolumeForDescribeScheduledInstancesOutput[]',
        'zone_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'eip_address' => null,
        'host_name' => null,
        'image_id' => null,
        'instance_name' => null,
        'instance_type_id' => null,
        'key_pair_name' => null,
        'network_interfaces_res' => null,
        'project_name' => null,
        'tags' => null,
        'volumes' => null,
        'zone_id' => null
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
        'eip_address' => 'EipAddress',
        'host_name' => 'HostName',
        'image_id' => 'ImageId',
        'instance_name' => 'InstanceName',
        'instance_type_id' => 'InstanceTypeId',
        'key_pair_name' => 'KeyPairName',
        'network_interfaces_res' => 'NetworkInterfacesRes',
        'project_name' => 'ProjectName',
        'tags' => 'Tags',
        'volumes' => 'Volumes',
        'zone_id' => 'ZoneId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'eip_address' => 'setEipAddress',
        'host_name' => 'setHostName',
        'image_id' => 'setImageId',
        'instance_name' => 'setInstanceName',
        'instance_type_id' => 'setInstanceTypeId',
        'key_pair_name' => 'setKeyPairName',
        'network_interfaces_res' => 'setNetworkInterfacesRes',
        'project_name' => 'setProjectName',
        'tags' => 'setTags',
        'volumes' => 'setVolumes',
        'zone_id' => 'setZoneId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'eip_address' => 'getEipAddress',
        'host_name' => 'getHostName',
        'image_id' => 'getImageId',
        'instance_name' => 'getInstanceName',
        'instance_type_id' => 'getInstanceTypeId',
        'key_pair_name' => 'getKeyPairName',
        'network_interfaces_res' => 'getNetworkInterfacesRes',
        'project_name' => 'getProjectName',
        'tags' => 'getTags',
        'volumes' => 'getVolumes',
        'zone_id' => 'getZoneId'
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
        $this->container['eip_address'] = isset($data['eip_address']) ? $data['eip_address'] : null;
        $this->container['host_name'] = isset($data['host_name']) ? $data['host_name'] : null;
        $this->container['image_id'] = isset($data['image_id']) ? $data['image_id'] : null;
        $this->container['instance_name'] = isset($data['instance_name']) ? $data['instance_name'] : null;
        $this->container['instance_type_id'] = isset($data['instance_type_id']) ? $data['instance_type_id'] : null;
        $this->container['key_pair_name'] = isset($data['key_pair_name']) ? $data['key_pair_name'] : null;
        $this->container['network_interfaces_res'] = isset($data['network_interfaces_res']) ? $data['network_interfaces_res'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['zone_id'] = isset($data['zone_id']) ? $data['zone_id'] : null;
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
     * Gets eip_address
     *
     * @return \Volcengine\Ecs\Model\EipAddressForDescribeScheduledInstancesOutput
     */
    public function getEipAddress()
    {
        return $this->container['eip_address'];
    }

    /**
     * Sets eip_address
     *
     * @param \Volcengine\Ecs\Model\EipAddressForDescribeScheduledInstancesOutput $eip_address eip_address
     *
     * @return $this
     */
    public function setEipAddress($eip_address)
    {
        $this->container['eip_address'] = $eip_address;

        return $this;
    }

    /**
     * Gets host_name
     *
     * @return string
     */
    public function getHostName()
    {
        return $this->container['host_name'];
    }

    /**
     * Sets host_name
     *
     * @param string $host_name host_name
     *
     * @return $this
     */
    public function setHostName($host_name)
    {
        $this->container['host_name'] = $host_name;

        return $this;
    }

    /**
     * Gets image_id
     *
     * @return string
     */
    public function getImageId()
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id
     *
     * @param string $image_id image_id
     *
     * @return $this
     */
    public function setImageId($image_id)
    {
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets instance_name
     *
     * @return string
     */
    public function getInstanceName()
    {
        return $this->container['instance_name'];
    }

    /**
     * Sets instance_name
     *
     * @param string $instance_name instance_name
     *
     * @return $this
     */
    public function setInstanceName($instance_name)
    {
        $this->container['instance_name'] = $instance_name;

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
     * Gets key_pair_name
     *
     * @return string
     */
    public function getKeyPairName()
    {
        return $this->container['key_pair_name'];
    }

    /**
     * Sets key_pair_name
     *
     * @param string $key_pair_name key_pair_name
     *
     * @return $this
     */
    public function setKeyPairName($key_pair_name)
    {
        $this->container['key_pair_name'] = $key_pair_name;

        return $this;
    }

    /**
     * Gets network_interfaces_res
     *
     * @return \Volcengine\Ecs\Model\NetworkInterfacesReForDescribeScheduledInstancesOutput[]
     */
    public function getNetworkInterfacesRes()
    {
        return $this->container['network_interfaces_res'];
    }

    /**
     * Sets network_interfaces_res
     *
     * @param \Volcengine\Ecs\Model\NetworkInterfacesReForDescribeScheduledInstancesOutput[] $network_interfaces_res network_interfaces_res
     *
     * @return $this
     */
    public function setNetworkInterfacesRes($network_interfaces_res)
    {
        $this->container['network_interfaces_res'] = $network_interfaces_res;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name project_name
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Volcengine\Ecs\Model\TagForDescribeScheduledInstancesOutput[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Volcengine\Ecs\Model\TagForDescribeScheduledInstancesOutput[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets volumes
     *
     * @return \Volcengine\Ecs\Model\VolumeForDescribeScheduledInstancesOutput[]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     *
     * @param \Volcengine\Ecs\Model\VolumeForDescribeScheduledInstancesOutput[] $volumes volumes
     *
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

        return $this;
    }

    /**
     * Gets zone_id
     *
     * @return string
     */
    public function getZoneId()
    {
        return $this->container['zone_id'];
    }

    /**
     * Sets zone_id
     *
     * @param string $zone_id zone_id
     *
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        $this->container['zone_id'] = $zone_id;

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

