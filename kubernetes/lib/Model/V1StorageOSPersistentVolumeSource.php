<?php
/**
 * V1StorageOSPersistentVolumeSource
 *
 * PHP version 5
 *
 * @category Class
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kubernetes
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.7.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CBSi\Kubernetes\Model;

use \ArrayAccess;
use \CBSi\Kubernetes\ObjectSerializer;

/**
 * V1StorageOSPersistentVolumeSource Class Doc Comment
 *
 * @category Class
 * @description Represents a StorageOS persistent volume resource.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1StorageOSPersistentVolumeSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.StorageOSPersistentVolumeSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fs_type' => 'string',
        'read_only' => 'bool',
        'secret_ref' => '\CBSi\Kubernetes\Model\V1ObjectReference',
        'volume_name' => 'string',
        'volume_namespace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fs_type' => null,
        'read_only' => null,
        'secret_ref' => null,
        'volume_name' => null,
        'volume_namespace' => null
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
        'fs_type' => 'fsType',
        'read_only' => 'readOnly',
        'secret_ref' => 'secretRef',
        'volume_name' => 'volumeName',
        'volume_namespace' => 'volumeNamespace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fs_type' => 'setFsType',
        'read_only' => 'setReadOnly',
        'secret_ref' => 'setSecretRef',
        'volume_name' => 'setVolumeName',
        'volume_namespace' => 'setVolumeNamespace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fs_type' => 'getFsType',
        'read_only' => 'getReadOnly',
        'secret_ref' => 'getSecretRef',
        'volume_name' => 'getVolumeName',
        'volume_namespace' => 'getVolumeNamespace'
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
        $this->container['fs_type'] = isset($data['fs_type']) ? $data['fs_type'] : null;
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
        $this->container['secret_ref'] = isset($data['secret_ref']) ? $data['secret_ref'] : null;
        $this->container['volume_name'] = isset($data['volume_name']) ? $data['volume_name'] : null;
        $this->container['volume_namespace'] = isset($data['volume_namespace']) ? $data['volume_namespace'] : null;
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

        return true;
    }


    /**
     * Gets fs_type
     *
     * @return string
     */
    public function getFsType()
    {
        return $this->container['fs_type'];
    }

    /**
     * Sets fs_type
     *
     * @param string $fs_type Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. \"ext4\", \"xfs\", \"ntfs\". Implicitly inferred to be \"ext4\" if unspecified.
     *
     * @return $this
     */
    public function setFsType($fs_type)
    {
        $this->container['fs_type'] = $fs_type;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool $read_only Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     *
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets secret_ref
     *
     * @return \CBSi\Kubernetes\Model\V1ObjectReference
     */
    public function getSecretRef()
    {
        return $this->container['secret_ref'];
    }

    /**
     * Sets secret_ref
     *
     * @param \CBSi\Kubernetes\Model\V1ObjectReference $secret_ref SecretRef specifies the secret to use for obtaining the StorageOS API credentials.  If not specified, default values will be attempted.
     *
     * @return $this
     */
    public function setSecretRef($secret_ref)
    {
        $this->container['secret_ref'] = $secret_ref;

        return $this;
    }

    /**
     * Gets volume_name
     *
     * @return string
     */
    public function getVolumeName()
    {
        return $this->container['volume_name'];
    }

    /**
     * Sets volume_name
     *
     * @param string $volume_name VolumeName is the human-readable name of the StorageOS volume.  Volume names are only unique within a namespace.
     *
     * @return $this
     */
    public function setVolumeName($volume_name)
    {
        $this->container['volume_name'] = $volume_name;

        return $this;
    }

    /**
     * Gets volume_namespace
     *
     * @return string
     */
    public function getVolumeNamespace()
    {
        return $this->container['volume_namespace'];
    }

    /**
     * Sets volume_namespace
     *
     * @param string $volume_namespace VolumeNamespace specifies the scope of the volume within StorageOS.  If no namespace is specified then the Pod's namespace will be used.  This allows the Kubernetes name scoping to be mirrored within StorageOS for tighter integration. Set VolumeName to any name to override the default behaviour. Set to \"default\" if you are not using namespaces within StorageOS. Namespaces that do not pre-exist within StorageOS will be created.
     *
     * @return $this
     */
    public function setVolumeNamespace($volume_namespace)
    {
        $this->container['volume_namespace'] = $volume_namespace;

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
     * @return mixed
     */
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


