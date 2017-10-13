<?php
/**
 * V1beta1StatefulSetStatus
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
 * V1beta1StatefulSetStatus Class Doc Comment
 *
 * @category Class
 * @description StatefulSetStatus represents the current state of a StatefulSet.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1beta1StatefulSetStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1beta1.StatefulSetStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_replicas' => 'int',
        'current_revision' => 'string',
        'observed_generation' => 'int',
        'ready_replicas' => 'int',
        'replicas' => 'int',
        'update_revision' => 'string',
        'updated_replicas' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_replicas' => 'int32',
        'current_revision' => null,
        'observed_generation' => 'int64',
        'ready_replicas' => 'int32',
        'replicas' => 'int32',
        'update_revision' => null,
        'updated_replicas' => 'int32'
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
        'current_replicas' => 'currentReplicas',
        'current_revision' => 'currentRevision',
        'observed_generation' => 'observedGeneration',
        'ready_replicas' => 'readyReplicas',
        'replicas' => 'replicas',
        'update_revision' => 'updateRevision',
        'updated_replicas' => 'updatedReplicas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_replicas' => 'setCurrentReplicas',
        'current_revision' => 'setCurrentRevision',
        'observed_generation' => 'setObservedGeneration',
        'ready_replicas' => 'setReadyReplicas',
        'replicas' => 'setReplicas',
        'update_revision' => 'setUpdateRevision',
        'updated_replicas' => 'setUpdatedReplicas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_replicas' => 'getCurrentReplicas',
        'current_revision' => 'getCurrentRevision',
        'observed_generation' => 'getObservedGeneration',
        'ready_replicas' => 'getReadyReplicas',
        'replicas' => 'getReplicas',
        'update_revision' => 'getUpdateRevision',
        'updated_replicas' => 'getUpdatedReplicas'
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
        $this->container['current_replicas'] = isset($data['current_replicas']) ? $data['current_replicas'] : null;
        $this->container['current_revision'] = isset($data['current_revision']) ? $data['current_revision'] : null;
        $this->container['observed_generation'] = isset($data['observed_generation']) ? $data['observed_generation'] : null;
        $this->container['ready_replicas'] = isset($data['ready_replicas']) ? $data['ready_replicas'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['update_revision'] = isset($data['update_revision']) ? $data['update_revision'] : null;
        $this->container['updated_replicas'] = isset($data['updated_replicas']) ? $data['updated_replicas'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['replicas'] === null) {
            $invalidProperties[] = "'replicas' can't be null";
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

        if ($this->container['replicas'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets current_replicas
     *
     * @return int
     */
    public function getCurrentReplicas()
    {
        return $this->container['current_replicas'];
    }

    /**
     * Sets current_replicas
     *
     * @param int $current_replicas currentReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet version indicated by currentRevision.
     *
     * @return $this
     */
    public function setCurrentReplicas($current_replicas)
    {
        $this->container['current_replicas'] = $current_replicas;

        return $this;
    }

    /**
     * Gets current_revision
     *
     * @return string
     */
    public function getCurrentRevision()
    {
        return $this->container['current_revision'];
    }

    /**
     * Sets current_revision
     *
     * @param string $current_revision currentRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the sequence [0,currentReplicas).
     *
     * @return $this
     */
    public function setCurrentRevision($current_revision)
    {
        $this->container['current_revision'] = $current_revision;

        return $this;
    }

    /**
     * Gets observed_generation
     *
     * @return int
     */
    public function getObservedGeneration()
    {
        return $this->container['observed_generation'];
    }

    /**
     * Sets observed_generation
     *
     * @param int $observed_generation observedGeneration is the most recent generation observed for this StatefulSet. It corresponds to the StatefulSet's generation, which is updated on mutation by the API Server.
     *
     * @return $this
     */
    public function setObservedGeneration($observed_generation)
    {
        $this->container['observed_generation'] = $observed_generation;

        return $this;
    }

    /**
     * Gets ready_replicas
     *
     * @return int
     */
    public function getReadyReplicas()
    {
        return $this->container['ready_replicas'];
    }

    /**
     * Sets ready_replicas
     *
     * @param int $ready_replicas readyReplicas is the number of Pods created by the StatefulSet controller that have a Ready Condition.
     *
     * @return $this
     */
    public function setReadyReplicas($ready_replicas)
    {
        $this->container['ready_replicas'] = $ready_replicas;

        return $this;
    }

    /**
     * Gets replicas
     *
     * @return int
     */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
     * Sets replicas
     *
     * @param int $replicas replicas is the number of Pods created by the StatefulSet controller.
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

        return $this;
    }

    /**
     * Gets update_revision
     *
     * @return string
     */
    public function getUpdateRevision()
    {
        return $this->container['update_revision'];
    }

    /**
     * Sets update_revision
     *
     * @param string $update_revision updateRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the sequence [replicas-updatedReplicas,replicas)
     *
     * @return $this
     */
    public function setUpdateRevision($update_revision)
    {
        $this->container['update_revision'] = $update_revision;

        return $this;
    }

    /**
     * Gets updated_replicas
     *
     * @return int
     */
    public function getUpdatedReplicas()
    {
        return $this->container['updated_replicas'];
    }

    /**
     * Sets updated_replicas
     *
     * @param int $updated_replicas updatedReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet version indicated by updateRevision.
     *
     * @return $this
     */
    public function setUpdatedReplicas($updated_replicas)
    {
        $this->container['updated_replicas'] = $updated_replicas;

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

