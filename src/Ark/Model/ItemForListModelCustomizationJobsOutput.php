<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Ark\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ItemForListModelCustomizationJobsOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemForListModelCustomizationJobsOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_time' => 'string',
        'customization_type' => 'string',
        'data' => '\Volcengine\Ark\Model\DataForListModelCustomizationJobsOutput',
        'description' => 'string',
        'hyperparameters' => '\Volcengine\Ark\Model\HyperparameterForListModelCustomizationJobsOutput[]',
        'id' => 'string',
        'model_reference' => '\Volcengine\Ark\Model\ModelReferenceForListModelCustomizationJobsOutput',
        'name' => 'string',
        'outputs' => '\Volcengine\Ark\Model\OutputForListModelCustomizationJobsOutput[]',
        'project_name' => 'string',
        'published_output_count' => 'int',
        'reason' => 'string',
        'save_model_limit' => 'int',
        'status' => '\Volcengine\Ark\Model\StatusForListModelCustomizationJobsOutput',
        'tags' => '\Volcengine\Ark\Model\TagForListModelCustomizationJobsOutput[]',
        'total_output_count' => 'int',
        'update_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_time' => null,
        'customization_type' => null,
        'data' => null,
        'description' => null,
        'hyperparameters' => null,
        'id' => null,
        'model_reference' => null,
        'name' => null,
        'outputs' => null,
        'project_name' => null,
        'published_output_count' => 'int32',
        'reason' => null,
        'save_model_limit' => 'int32',
        'status' => null,
        'tags' => null,
        'total_output_count' => 'int32',
        'update_time' => null
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
        'create_time' => 'CreateTime',
        'customization_type' => 'CustomizationType',
        'data' => 'Data',
        'description' => 'Description',
        'hyperparameters' => 'Hyperparameters',
        'id' => 'Id',
        'model_reference' => 'ModelReference',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'project_name' => 'ProjectName',
        'published_output_count' => 'PublishedOutputCount',
        'reason' => 'Reason',
        'save_model_limit' => 'SaveModelLimit',
        'status' => 'Status',
        'tags' => 'Tags',
        'total_output_count' => 'TotalOutputCount',
        'update_time' => 'UpdateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_time' => 'setCreateTime',
        'customization_type' => 'setCustomizationType',
        'data' => 'setData',
        'description' => 'setDescription',
        'hyperparameters' => 'setHyperparameters',
        'id' => 'setId',
        'model_reference' => 'setModelReference',
        'name' => 'setName',
        'outputs' => 'setOutputs',
        'project_name' => 'setProjectName',
        'published_output_count' => 'setPublishedOutputCount',
        'reason' => 'setReason',
        'save_model_limit' => 'setSaveModelLimit',
        'status' => 'setStatus',
        'tags' => 'setTags',
        'total_output_count' => 'setTotalOutputCount',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_time' => 'getCreateTime',
        'customization_type' => 'getCustomizationType',
        'data' => 'getData',
        'description' => 'getDescription',
        'hyperparameters' => 'getHyperparameters',
        'id' => 'getId',
        'model_reference' => 'getModelReference',
        'name' => 'getName',
        'outputs' => 'getOutputs',
        'project_name' => 'getProjectName',
        'published_output_count' => 'getPublishedOutputCount',
        'reason' => 'getReason',
        'save_model_limit' => 'getSaveModelLimit',
        'status' => 'getStatus',
        'tags' => 'getTags',
        'total_output_count' => 'getTotalOutputCount',
        'update_time' => 'getUpdateTime'
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

    const CUSTOMIZATION_TYPE_FINETUNE_SFT = 'FinetuneSft';
    const CUSTOMIZATION_TYPE_FINETUNE_LO_RA = 'FinetuneLoRA';
    const CUSTOMIZATION_TYPE_PRETRAIN = 'Pretrain';
    const CUSTOMIZATION_TYPE_DPOLO_RA = 'DPOLoRA';
    const CUSTOMIZATION_TYPE_DPO = 'DPO';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomizationTypeAllowableValues()
    {
        return [
            self::CUSTOMIZATION_TYPE_FINETUNE_SFT,
            self::CUSTOMIZATION_TYPE_FINETUNE_LO_RA,
            self::CUSTOMIZATION_TYPE_PRETRAIN,
            self::CUSTOMIZATION_TYPE_DPOLO_RA,
            self::CUSTOMIZATION_TYPE_DPO,
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
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['customization_type'] = isset($data['customization_type']) ? $data['customization_type'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hyperparameters'] = isset($data['hyperparameters']) ? $data['hyperparameters'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['model_reference'] = isset($data['model_reference']) ? $data['model_reference'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['published_output_count'] = isset($data['published_output_count']) ? $data['published_output_count'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['save_model_limit'] = isset($data['save_model_limit']) ? $data['save_model_limit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['total_output_count'] = isset($data['total_output_count']) ? $data['total_output_count'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCustomizationTypeAllowableValues();
        if (!is_null($this->container['customization_type']) && !in_array($this->container['customization_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'customization_type', must be one of '%s'",
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
     * Gets create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string $create_time create_time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets customization_type
     *
     * @return string
     */
    public function getCustomizationType()
    {
        return $this->container['customization_type'];
    }

    /**
     * Sets customization_type
     *
     * @param string $customization_type customization_type
     *
     * @return $this
     */
    public function setCustomizationType($customization_type)
    {
        $allowedValues = $this->getCustomizationTypeAllowableValues();
        if (!is_null($customization_type) && !in_array($customization_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'customization_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customization_type'] = $customization_type;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Volcengine\Ark\Model\DataForListModelCustomizationJobsOutput
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Volcengine\Ark\Model\DataForListModelCustomizationJobsOutput $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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
     * Gets hyperparameters
     *
     * @return \Volcengine\Ark\Model\HyperparameterForListModelCustomizationJobsOutput[]
     */
    public function getHyperparameters()
    {
        return $this->container['hyperparameters'];
    }

    /**
     * Sets hyperparameters
     *
     * @param \Volcengine\Ark\Model\HyperparameterForListModelCustomizationJobsOutput[] $hyperparameters hyperparameters
     *
     * @return $this
     */
    public function setHyperparameters($hyperparameters)
    {
        $this->container['hyperparameters'] = $hyperparameters;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets model_reference
     *
     * @return \Volcengine\Ark\Model\ModelReferenceForListModelCustomizationJobsOutput
     */
    public function getModelReference()
    {
        return $this->container['model_reference'];
    }

    /**
     * Sets model_reference
     *
     * @param \Volcengine\Ark\Model\ModelReferenceForListModelCustomizationJobsOutput $model_reference model_reference
     *
     * @return $this
     */
    public function setModelReference($model_reference)
    {
        $this->container['model_reference'] = $model_reference;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return \Volcengine\Ark\Model\OutputForListModelCustomizationJobsOutput[]
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param \Volcengine\Ark\Model\OutputForListModelCustomizationJobsOutput[] $outputs outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

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
     * Gets published_output_count
     *
     * @return int
     */
    public function getPublishedOutputCount()
    {
        return $this->container['published_output_count'];
    }

    /**
     * Sets published_output_count
     *
     * @param int $published_output_count published_output_count
     *
     * @return $this
     */
    public function setPublishedOutputCount($published_output_count)
    {
        $this->container['published_output_count'] = $published_output_count;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets save_model_limit
     *
     * @return int
     */
    public function getSaveModelLimit()
    {
        return $this->container['save_model_limit'];
    }

    /**
     * Sets save_model_limit
     *
     * @param int $save_model_limit save_model_limit
     *
     * @return $this
     */
    public function setSaveModelLimit($save_model_limit)
    {
        $this->container['save_model_limit'] = $save_model_limit;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Volcengine\Ark\Model\StatusForListModelCustomizationJobsOutput
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Volcengine\Ark\Model\StatusForListModelCustomizationJobsOutput $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Volcengine\Ark\Model\TagForListModelCustomizationJobsOutput[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Volcengine\Ark\Model\TagForListModelCustomizationJobsOutput[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets total_output_count
     *
     * @return int
     */
    public function getTotalOutputCount()
    {
        return $this->container['total_output_count'];
    }

    /**
     * Sets total_output_count
     *
     * @param int $total_output_count total_output_count
     *
     * @return $this
     */
    public function setTotalOutputCount($total_output_count)
    {
        $this->container['total_output_count'] = $total_output_count;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string $update_time update_time
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

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

