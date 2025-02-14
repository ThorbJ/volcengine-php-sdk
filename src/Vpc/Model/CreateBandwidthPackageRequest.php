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

class CreateBandwidthPackageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateBandwidthPackageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bandwidth' => 'int',
        'bandwidth_package_name' => 'string',
        'billing_type' => 'int',
        'description' => 'string',
        'isp' => 'string',
        'period' => 'int',
        'period_unit' => 'int',
        'project_name' => 'string',
        'protocol' => 'string',
        'security_protection_types' => 'string[]',
        'tags' => '\Volcengine\Vpc\Model\TagForCreateBandwidthPackageInput[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bandwidth' => null,
        'bandwidth_package_name' => null,
        'billing_type' => null,
        'description' => null,
        'isp' => null,
        'period' => null,
        'period_unit' => null,
        'project_name' => null,
        'protocol' => null,
        'security_protection_types' => null,
        'tags' => null
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
        'bandwidth' => 'Bandwidth',
        'bandwidth_package_name' => 'BandwidthPackageName',
        'billing_type' => 'BillingType',
        'description' => 'Description',
        'isp' => 'ISP',
        'period' => 'Period',
        'period_unit' => 'PeriodUnit',
        'project_name' => 'ProjectName',
        'protocol' => 'Protocol',
        'security_protection_types' => 'SecurityProtectionTypes',
        'tags' => 'Tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bandwidth' => 'setBandwidth',
        'bandwidth_package_name' => 'setBandwidthPackageName',
        'billing_type' => 'setBillingType',
        'description' => 'setDescription',
        'isp' => 'setIsp',
        'period' => 'setPeriod',
        'period_unit' => 'setPeriodUnit',
        'project_name' => 'setProjectName',
        'protocol' => 'setProtocol',
        'security_protection_types' => 'setSecurityProtectionTypes',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bandwidth' => 'getBandwidth',
        'bandwidth_package_name' => 'getBandwidthPackageName',
        'billing_type' => 'getBillingType',
        'description' => 'getDescription',
        'isp' => 'getIsp',
        'period' => 'getPeriod',
        'period_unit' => 'getPeriodUnit',
        'project_name' => 'getProjectName',
        'protocol' => 'getProtocol',
        'security_protection_types' => 'getSecurityProtectionTypes',
        'tags' => 'getTags'
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

    const ISP_BGP = 'BGP';
    const ISP_SINGLE_LINE_BGP = 'SingleLine_BGP';
    const ISP_STATIC_BGP = 'Static_BGP';
    const ISP_FUSION_BGP = 'Fusion_BGP';
    const ISP_CHINA_MOBILE = 'ChinaMobile';
    const ISP_CHINA_UNICOM = 'ChinaUnicom';
    const ISP_CHINA_TELECOM = 'ChinaTelecom';
    const ISP_CHINA_MOBILE_VALUE = 'ChinaMobile_Value';
    const ISP_CHINA_UNICOM_VALUE = 'ChinaUnicom_Value';
    const ISP_CHINA_TELECOM_VALUE = 'ChinaTelecom_Value';
    const PROTOCOL_I_PV4 = 'IPv4';
    const PROTOCOL_DUAL_STACK = 'Dual-stack';
    const PROTOCOL_I_PV6 = 'IPv6';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIspAllowableValues()
    {
        return [
            self::ISP_BGP,
            self::ISP_SINGLE_LINE_BGP,
            self::ISP_STATIC_BGP,
            self::ISP_FUSION_BGP,
            self::ISP_CHINA_MOBILE,
            self::ISP_CHINA_UNICOM,
            self::ISP_CHINA_TELECOM,
            self::ISP_CHINA_MOBILE_VALUE,
            self::ISP_CHINA_UNICOM_VALUE,
            self::ISP_CHINA_TELECOM_VALUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_I_PV4,
            self::PROTOCOL_DUAL_STACK,
            self::PROTOCOL_I_PV6,
        ];
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
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['bandwidth_package_name'] = isset($data['bandwidth_package_name']) ? $data['bandwidth_package_name'] : null;
        $this->container['billing_type'] = isset($data['billing_type']) ? $data['billing_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['period_unit'] = isset($data['period_unit']) ? $data['period_unit'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['security_protection_types'] = isset($data['security_protection_types']) ? $data['security_protection_types'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bandwidth'] === null) {
            $invalidProperties[] = "'bandwidth' can't be null";
        }
        $allowedValues = $this->getIspAllowableValues();
        if (!is_null($this->container['isp']) && !in_array($this->container['isp'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'isp', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
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
     * Gets bandwidth
     *
     * @return int
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param int $bandwidth bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets bandwidth_package_name
     *
     * @return string
     */
    public function getBandwidthPackageName()
    {
        return $this->container['bandwidth_package_name'];
    }

    /**
     * Sets bandwidth_package_name
     *
     * @param string $bandwidth_package_name bandwidth_package_name
     *
     * @return $this
     */
    public function setBandwidthPackageName($bandwidth_package_name)
    {
        $this->container['bandwidth_package_name'] = $bandwidth_package_name;

        return $this;
    }

    /**
     * Gets billing_type
     *
     * @return int
     */
    public function getBillingType()
    {
        return $this->container['billing_type'];
    }

    /**
     * Sets billing_type
     *
     * @param int $billing_type billing_type
     *
     * @return $this
     */
    public function setBillingType($billing_type)
    {
        $this->container['billing_type'] = $billing_type;

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
     * Gets isp
     *
     * @return string
     */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
     * Sets isp
     *
     * @param string $isp isp
     *
     * @return $this
     */
    public function setIsp($isp)
    {
        $allowedValues = $this->getIspAllowableValues();
        if (!is_null($isp) && !in_array($isp, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'isp', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['isp'] = $isp;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets period_unit
     *
     * @return int
     */
    public function getPeriodUnit()
    {
        return $this->container['period_unit'];
    }

    /**
     * Sets period_unit
     *
     * @param int $period_unit period_unit
     *
     * @return $this
     */
    public function setPeriodUnit($period_unit)
    {
        $this->container['period_unit'] = $period_unit;

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
        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($protocol) && !in_array($protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'protocol', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets security_protection_types
     *
     * @return string[]
     */
    public function getSecurityProtectionTypes()
    {
        return $this->container['security_protection_types'];
    }

    /**
     * Sets security_protection_types
     *
     * @param string[] $security_protection_types security_protection_types
     *
     * @return $this
     */
    public function setSecurityProtectionTypes($security_protection_types)
    {
        $this->container['security_protection_types'] = $security_protection_types;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Volcengine\Vpc\Model\TagForCreateBandwidthPackageInput[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Volcengine\Vpc\Model\TagForCreateBandwidthPackageInput[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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

