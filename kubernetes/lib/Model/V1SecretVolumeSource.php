<?php
/**
 * V1SecretVolumeSource
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
 * V1SecretVolumeSource Class Doc Comment
 *
 * @category Class
 * @description Adapts a Secret into a volume.  The contents of the target Secret&#39;s Data field will be presented in a volume as files using the keys in the Data field as the file names. Secret volumes support ownership management and SELinux relabeling.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1SecretVolumeSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.SecretVolumeSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_mode' => 'int',
        'items' => '\CBSi\Kubernetes\Model\V1KeyToPath[]',
        'optional' => 'bool',
        'secret_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_mode' => 'int32',
        'items' => null,
        'optional' => null,
        'secret_name' => null
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
        'default_mode' => 'defaultMode',
        'items' => 'items',
        'optional' => 'optional',
        'secret_name' => 'secretName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_mode' => 'setDefaultMode',
        'items' => 'setItems',
        'optional' => 'setOptional',
        'secret_name' => 'setSecretName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_mode' => 'getDefaultMode',
        'items' => 'getItems',
        'optional' => 'getOptional',
        'secret_name' => 'getSecretName'
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
        $this->container['default_mode'] = isset($data['default_mode']) ? $data['default_mode'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['secret_name'] = isset($data['secret_name']) ? $data['secret_name'] : null;
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
     * Gets default_mode
     *
     * @return int
     */
    public function getDefaultMode()
    {
        return $this->container['default_mode'];
    }

    /**
     * Sets default_mode
     *
     * @param int $default_mode Optional: mode bits to use on created files by default. Must be a value between 0 and 0777. Defaults to 0644. Directories within the path are not affected by this setting. This might be in conflict with other options that affect the file mode, like fsGroup, and the result can be other mode bits set.
     *
     * @return $this
     */
    public function setDefaultMode($default_mode)
    {
        $this->container['default_mode'] = $default_mode;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \CBSi\Kubernetes\Model\V1KeyToPath[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \CBSi\Kubernetes\Model\V1KeyToPath[] $items If unspecified, each key-value pair in the Data field of the referenced Secret will be projected into the volume as a file whose name is the key and content is the value. If specified, the listed keys will be projected into the specified paths, and unlisted keys will not be present. If a key is specified which is not present in the Secret, the volume setup will error unless it is marked optional. Paths must be relative and may not contain the '..' path or start with '..'.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets optional
     *
     * @return bool
     */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
     * Sets optional
     *
     * @param bool $optional Specify whether the Secret or it's keys must be defined
     *
     * @return $this
     */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;

        return $this;
    }

    /**
     * Gets secret_name
     *
     * @return string
     */
    public function getSecretName()
    {
        return $this->container['secret_name'];
    }

    /**
     * Sets secret_name
     *
     * @param string $secret_name Name of the secret in the pod's namespace to use. More info: https://kubernetes.io/docs/concepts/storage/volumes#secret
     *
     * @return $this
     */
    public function setSecretName($secret_name)
    {
        $this->container['secret_name'] = $secret_name;

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


