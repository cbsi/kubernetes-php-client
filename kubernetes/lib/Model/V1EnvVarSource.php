<?php
/**
 * V1EnvVarSource
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
 * V1EnvVarSource Class Doc Comment
 *
 * @category Class
 * @description EnvVarSource represents a source for the value of an EnvVar.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1EnvVarSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.EnvVarSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'config_map_key_ref' => '\CBSi\Kubernetes\Model\V1ConfigMapKeySelector',
        'field_ref' => '\CBSi\Kubernetes\Model\V1ObjectFieldSelector',
        'resource_field_ref' => '\CBSi\Kubernetes\Model\V1ResourceFieldSelector',
        'secret_key_ref' => '\CBSi\Kubernetes\Model\V1SecretKeySelector'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'config_map_key_ref' => null,
        'field_ref' => null,
        'resource_field_ref' => null,
        'secret_key_ref' => null
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
        'config_map_key_ref' => 'configMapKeyRef',
        'field_ref' => 'fieldRef',
        'resource_field_ref' => 'resourceFieldRef',
        'secret_key_ref' => 'secretKeyRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'config_map_key_ref' => 'setConfigMapKeyRef',
        'field_ref' => 'setFieldRef',
        'resource_field_ref' => 'setResourceFieldRef',
        'secret_key_ref' => 'setSecretKeyRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'config_map_key_ref' => 'getConfigMapKeyRef',
        'field_ref' => 'getFieldRef',
        'resource_field_ref' => 'getResourceFieldRef',
        'secret_key_ref' => 'getSecretKeyRef'
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
        $this->container['config_map_key_ref'] = isset($data['config_map_key_ref']) ? $data['config_map_key_ref'] : null;
        $this->container['field_ref'] = isset($data['field_ref']) ? $data['field_ref'] : null;
        $this->container['resource_field_ref'] = isset($data['resource_field_ref']) ? $data['resource_field_ref'] : null;
        $this->container['secret_key_ref'] = isset($data['secret_key_ref']) ? $data['secret_key_ref'] : null;
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
     * Gets config_map_key_ref
     *
     * @return \CBSi\Kubernetes\Model\V1ConfigMapKeySelector
     */
    public function getConfigMapKeyRef()
    {
        return $this->container['config_map_key_ref'];
    }

    /**
     * Sets config_map_key_ref
     *
     * @param \CBSi\Kubernetes\Model\V1ConfigMapKeySelector $config_map_key_ref Selects a key of a ConfigMap.
     *
     * @return $this
     */
    public function setConfigMapKeyRef($config_map_key_ref)
    {
        $this->container['config_map_key_ref'] = $config_map_key_ref;

        return $this;
    }

    /**
     * Gets field_ref
     *
     * @return \CBSi\Kubernetes\Model\V1ObjectFieldSelector
     */
    public function getFieldRef()
    {
        return $this->container['field_ref'];
    }

    /**
     * Sets field_ref
     *
     * @param \CBSi\Kubernetes\Model\V1ObjectFieldSelector $field_ref Selects a field of the pod: supports metadata.name, metadata.namespace, metadata.labels, metadata.annotations, spec.nodeName, spec.serviceAccountName, status.hostIP, status.podIP.
     *
     * @return $this
     */
    public function setFieldRef($field_ref)
    {
        $this->container['field_ref'] = $field_ref;

        return $this;
    }

    /**
     * Gets resource_field_ref
     *
     * @return \CBSi\Kubernetes\Model\V1ResourceFieldSelector
     */
    public function getResourceFieldRef()
    {
        return $this->container['resource_field_ref'];
    }

    /**
     * Sets resource_field_ref
     *
     * @param \CBSi\Kubernetes\Model\V1ResourceFieldSelector $resource_field_ref Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory, requests.cpu and requests.memory) are currently supported.
     *
     * @return $this
     */
    public function setResourceFieldRef($resource_field_ref)
    {
        $this->container['resource_field_ref'] = $resource_field_ref;

        return $this;
    }

    /**
     * Gets secret_key_ref
     *
     * @return \CBSi\Kubernetes\Model\V1SecretKeySelector
     */
    public function getSecretKeyRef()
    {
        return $this->container['secret_key_ref'];
    }

    /**
     * Sets secret_key_ref
     *
     * @param \CBSi\Kubernetes\Model\V1SecretKeySelector $secret_key_ref Selects a key of a secret in the pod's namespace
     *
     * @return $this
     */
    public function setSecretKeyRef($secret_key_ref)
    {
        $this->container['secret_key_ref'] = $secret_key_ref;

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


