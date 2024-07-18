<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vefaas\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class CreateFunctionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateFunctionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code_size' => 'int',
        'code_size_limit' => 'int',
        'creation_time' => 'string',
        'description' => 'string',
        'envs' => '\Volcengine\Vefaas\Model\EnvForCreateFunctionOutput[]',
        'exclusive_mode' => 'bool',
        'id' => 'string',
        'initializer_sec' => 'int',
        'instance_type' => 'string',
        'last_update_time' => 'string',
        'max_concurrency' => 'int',
        'memory_mb' => 'int',
        'name' => 'string',
        'nas_storage' => '\Volcengine\Vefaas\Model\NasStorageForCreateFunctionOutput',
        'owner' => 'string',
        'request_timeout' => 'int',
        'runtime' => 'string',
        'source_location' => 'string',
        'source_type' => 'string',
        'tls_config' => '\Volcengine\Vefaas\Model\TlsConfigForCreateFunctionOutput',
        'tos_mount_config' => '\Volcengine\Vefaas\Model\TosMountConfigForCreateFunctionOutput',
        'triggers_count' => 'int',
        'vpc_config' => '\Volcengine\Vefaas\Model\VpcConfigForCreateFunctionOutput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code_size' => 'int32',
        'code_size_limit' => 'int32',
        'creation_time' => null,
        'description' => null,
        'envs' => null,
        'exclusive_mode' => null,
        'id' => null,
        'initializer_sec' => 'int32',
        'instance_type' => null,
        'last_update_time' => null,
        'max_concurrency' => 'int32',
        'memory_mb' => 'int32',
        'name' => null,
        'nas_storage' => null,
        'owner' => null,
        'request_timeout' => 'int32',
        'runtime' => null,
        'source_location' => null,
        'source_type' => null,
        'tls_config' => null,
        'tos_mount_config' => null,
        'triggers_count' => 'int32',
        'vpc_config' => null
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
        'code_size' => 'CodeSize',
        'code_size_limit' => 'CodeSizeLimit',
        'creation_time' => 'CreationTime',
        'description' => 'Description',
        'envs' => 'Envs',
        'exclusive_mode' => 'ExclusiveMode',
        'id' => 'Id',
        'initializer_sec' => 'InitializerSec',
        'instance_type' => 'InstanceType',
        'last_update_time' => 'LastUpdateTime',
        'max_concurrency' => 'MaxConcurrency',
        'memory_mb' => 'MemoryMB',
        'name' => 'Name',
        'nas_storage' => 'NasStorage',
        'owner' => 'Owner',
        'request_timeout' => 'RequestTimeout',
        'runtime' => 'Runtime',
        'source_location' => 'SourceLocation',
        'source_type' => 'SourceType',
        'tls_config' => 'TlsConfig',
        'tos_mount_config' => 'TosMountConfig',
        'triggers_count' => 'TriggersCount',
        'vpc_config' => 'VpcConfig'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code_size' => 'setCodeSize',
        'code_size_limit' => 'setCodeSizeLimit',
        'creation_time' => 'setCreationTime',
        'description' => 'setDescription',
        'envs' => 'setEnvs',
        'exclusive_mode' => 'setExclusiveMode',
        'id' => 'setId',
        'initializer_sec' => 'setInitializerSec',
        'instance_type' => 'setInstanceType',
        'last_update_time' => 'setLastUpdateTime',
        'max_concurrency' => 'setMaxConcurrency',
        'memory_mb' => 'setMemoryMb',
        'name' => 'setName',
        'nas_storage' => 'setNasStorage',
        'owner' => 'setOwner',
        'request_timeout' => 'setRequestTimeout',
        'runtime' => 'setRuntime',
        'source_location' => 'setSourceLocation',
        'source_type' => 'setSourceType',
        'tls_config' => 'setTlsConfig',
        'tos_mount_config' => 'setTosMountConfig',
        'triggers_count' => 'setTriggersCount',
        'vpc_config' => 'setVpcConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code_size' => 'getCodeSize',
        'code_size_limit' => 'getCodeSizeLimit',
        'creation_time' => 'getCreationTime',
        'description' => 'getDescription',
        'envs' => 'getEnvs',
        'exclusive_mode' => 'getExclusiveMode',
        'id' => 'getId',
        'initializer_sec' => 'getInitializerSec',
        'instance_type' => 'getInstanceType',
        'last_update_time' => 'getLastUpdateTime',
        'max_concurrency' => 'getMaxConcurrency',
        'memory_mb' => 'getMemoryMb',
        'name' => 'getName',
        'nas_storage' => 'getNasStorage',
        'owner' => 'getOwner',
        'request_timeout' => 'getRequestTimeout',
        'runtime' => 'getRuntime',
        'source_location' => 'getSourceLocation',
        'source_type' => 'getSourceType',
        'tls_config' => 'getTlsConfig',
        'tos_mount_config' => 'getTosMountConfig',
        'triggers_count' => 'getTriggersCount',
        'vpc_config' => 'getVpcConfig'
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
        $this->container['code_size'] = isset($data['code_size']) ? $data['code_size'] : null;
        $this->container['code_size_limit'] = isset($data['code_size_limit']) ? $data['code_size_limit'] : null;
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['envs'] = isset($data['envs']) ? $data['envs'] : null;
        $this->container['exclusive_mode'] = isset($data['exclusive_mode']) ? $data['exclusive_mode'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['initializer_sec'] = isset($data['initializer_sec']) ? $data['initializer_sec'] : null;
        $this->container['instance_type'] = isset($data['instance_type']) ? $data['instance_type'] : null;
        $this->container['last_update_time'] = isset($data['last_update_time']) ? $data['last_update_time'] : null;
        $this->container['max_concurrency'] = isset($data['max_concurrency']) ? $data['max_concurrency'] : null;
        $this->container['memory_mb'] = isset($data['memory_mb']) ? $data['memory_mb'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nas_storage'] = isset($data['nas_storage']) ? $data['nas_storage'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['request_timeout'] = isset($data['request_timeout']) ? $data['request_timeout'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['source_location'] = isset($data['source_location']) ? $data['source_location'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['tls_config'] = isset($data['tls_config']) ? $data['tls_config'] : null;
        $this->container['tos_mount_config'] = isset($data['tos_mount_config']) ? $data['tos_mount_config'] : null;
        $this->container['triggers_count'] = isset($data['triggers_count']) ? $data['triggers_count'] : null;
        $this->container['vpc_config'] = isset($data['vpc_config']) ? $data['vpc_config'] : null;
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
     * Gets code_size
     *
     * @return int
     */
    public function getCodeSize()
    {
        return $this->container['code_size'];
    }

    /**
     * Sets code_size
     *
     * @param int $code_size code_size
     *
     * @return $this
     */
    public function setCodeSize($code_size)
    {
        $this->container['code_size'] = $code_size;

        return $this;
    }

    /**
     * Gets code_size_limit
     *
     * @return int
     */
    public function getCodeSizeLimit()
    {
        return $this->container['code_size_limit'];
    }

    /**
     * Sets code_size_limit
     *
     * @param int $code_size_limit code_size_limit
     *
     * @return $this
     */
    public function setCodeSizeLimit($code_size_limit)
    {
        $this->container['code_size_limit'] = $code_size_limit;

        return $this;
    }

    /**
     * Gets creation_time
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param string $creation_time creation_time
     *
     * @return $this
     */
    public function setCreationTime($creation_time)
    {
        $this->container['creation_time'] = $creation_time;

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
     * Gets envs
     *
     * @return \Volcengine\Vefaas\Model\EnvForCreateFunctionOutput[]
     */
    public function getEnvs()
    {
        return $this->container['envs'];
    }

    /**
     * Sets envs
     *
     * @param \Volcengine\Vefaas\Model\EnvForCreateFunctionOutput[] $envs envs
     *
     * @return $this
     */
    public function setEnvs($envs)
    {
        $this->container['envs'] = $envs;

        return $this;
    }

    /**
     * Gets exclusive_mode
     *
     * @return bool
     */
    public function getExclusiveMode()
    {
        return $this->container['exclusive_mode'];
    }

    /**
     * Sets exclusive_mode
     *
     * @param bool $exclusive_mode exclusive_mode
     *
     * @return $this
     */
    public function setExclusiveMode($exclusive_mode)
    {
        $this->container['exclusive_mode'] = $exclusive_mode;

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
     * Gets initializer_sec
     *
     * @return int
     */
    public function getInitializerSec()
    {
        return $this->container['initializer_sec'];
    }

    /**
     * Sets initializer_sec
     *
     * @param int $initializer_sec initializer_sec
     *
     * @return $this
     */
    public function setInitializerSec($initializer_sec)
    {
        $this->container['initializer_sec'] = $initializer_sec;

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
     * Gets last_update_time
     *
     * @return string
     */
    public function getLastUpdateTime()
    {
        return $this->container['last_update_time'];
    }

    /**
     * Sets last_update_time
     *
     * @param string $last_update_time last_update_time
     *
     * @return $this
     */
    public function setLastUpdateTime($last_update_time)
    {
        $this->container['last_update_time'] = $last_update_time;

        return $this;
    }

    /**
     * Gets max_concurrency
     *
     * @return int
     */
    public function getMaxConcurrency()
    {
        return $this->container['max_concurrency'];
    }

    /**
     * Sets max_concurrency
     *
     * @param int $max_concurrency max_concurrency
     *
     * @return $this
     */
    public function setMaxConcurrency($max_concurrency)
    {
        $this->container['max_concurrency'] = $max_concurrency;

        return $this;
    }

    /**
     * Gets memory_mb
     *
     * @return int
     */
    public function getMemoryMb()
    {
        return $this->container['memory_mb'];
    }

    /**
     * Sets memory_mb
     *
     * @param int $memory_mb memory_mb
     *
     * @return $this
     */
    public function setMemoryMb($memory_mb)
    {
        $this->container['memory_mb'] = $memory_mb;

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
     * Gets nas_storage
     *
     * @return \Volcengine\Vefaas\Model\NasStorageForCreateFunctionOutput
     */
    public function getNasStorage()
    {
        return $this->container['nas_storage'];
    }

    /**
     * Sets nas_storage
     *
     * @param \Volcengine\Vefaas\Model\NasStorageForCreateFunctionOutput $nas_storage nas_storage
     *
     * @return $this
     */
    public function setNasStorage($nas_storage)
    {
        $this->container['nas_storage'] = $nas_storage;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets request_timeout
     *
     * @return int
     */
    public function getRequestTimeout()
    {
        return $this->container['request_timeout'];
    }

    /**
     * Sets request_timeout
     *
     * @param int $request_timeout request_timeout
     *
     * @return $this
     */
    public function setRequestTimeout($request_timeout)
    {
        $this->container['request_timeout'] = $request_timeout;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return string
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param string $runtime runtime
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

        return $this;
    }

    /**
     * Gets source_location
     *
     * @return string
     */
    public function getSourceLocation()
    {
        return $this->container['source_location'];
    }

    /**
     * Sets source_location
     *
     * @param string $source_location source_location
     *
     * @return $this
     */
    public function setSourceLocation($source_location)
    {
        $this->container['source_location'] = $source_location;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string $source_type source_type
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets tls_config
     *
     * @return \Volcengine\Vefaas\Model\TlsConfigForCreateFunctionOutput
     */
    public function getTlsConfig()
    {
        return $this->container['tls_config'];
    }

    /**
     * Sets tls_config
     *
     * @param \Volcengine\Vefaas\Model\TlsConfigForCreateFunctionOutput $tls_config tls_config
     *
     * @return $this
     */
    public function setTlsConfig($tls_config)
    {
        $this->container['tls_config'] = $tls_config;

        return $this;
    }

    /**
     * Gets tos_mount_config
     *
     * @return \Volcengine\Vefaas\Model\TosMountConfigForCreateFunctionOutput
     */
    public function getTosMountConfig()
    {
        return $this->container['tos_mount_config'];
    }

    /**
     * Sets tos_mount_config
     *
     * @param \Volcengine\Vefaas\Model\TosMountConfigForCreateFunctionOutput $tos_mount_config tos_mount_config
     *
     * @return $this
     */
    public function setTosMountConfig($tos_mount_config)
    {
        $this->container['tos_mount_config'] = $tos_mount_config;

        return $this;
    }

    /**
     * Gets triggers_count
     *
     * @return int
     */
    public function getTriggersCount()
    {
        return $this->container['triggers_count'];
    }

    /**
     * Sets triggers_count
     *
     * @param int $triggers_count triggers_count
     *
     * @return $this
     */
    public function setTriggersCount($triggers_count)
    {
        $this->container['triggers_count'] = $triggers_count;

        return $this;
    }

    /**
     * Gets vpc_config
     *
     * @return \Volcengine\Vefaas\Model\VpcConfigForCreateFunctionOutput
     */
    public function getVpcConfig()
    {
        return $this->container['vpc_config'];
    }

    /**
     * Sets vpc_config
     *
     * @param \Volcengine\Vefaas\Model\VpcConfigForCreateFunctionOutput $vpc_config vpc_config
     *
     * @return $this
     */
    public function setVpcConfig($vpc_config)
    {
        $this->container['vpc_config'] = $vpc_config;

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

