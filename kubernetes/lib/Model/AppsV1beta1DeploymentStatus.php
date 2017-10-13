<?php
/**
 * AppsV1beta1DeploymentStatus
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
 * AppsV1beta1DeploymentStatus Class Doc Comment
 *
 * @category Class
 * @description DeploymentStatus is the most recently observed status of the Deployment.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppsV1beta1DeploymentStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apps.v1beta1.DeploymentStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_replicas' => 'int',
        'collision_count' => 'int',
        'conditions' => '\CBSi\Kubernetes\Model\AppsV1beta1DeploymentCondition[]',
        'observed_generation' => 'int',
        'ready_replicas' => 'int',
        'replicas' => 'int',
        'unavailable_replicas' => 'int',
        'updated_replicas' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_replicas' => 'int32',
        'collision_count' => 'int64',
        'conditions' => null,
        'observed_generation' => 'int64',
        'ready_replicas' => 'int32',
        'replicas' => 'int32',
        'unavailable_replicas' => 'int32',
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
        'available_replicas' => 'availableReplicas',
        'collision_count' => 'collisionCount',
        'conditions' => 'conditions',
        'observed_generation' => 'observedGeneration',
        'ready_replicas' => 'readyReplicas',
        'replicas' => 'replicas',
        'unavailable_replicas' => 'unavailableReplicas',
        'updated_replicas' => 'updatedReplicas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_replicas' => 'setAvailableReplicas',
        'collision_count' => 'setCollisionCount',
        'conditions' => 'setConditions',
        'observed_generation' => 'setObservedGeneration',
        'ready_replicas' => 'setReadyReplicas',
        'replicas' => 'setReplicas',
        'unavailable_replicas' => 'setUnavailableReplicas',
        'updated_replicas' => 'setUpdatedReplicas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_replicas' => 'getAvailableReplicas',
        'collision_count' => 'getCollisionCount',
        'conditions' => 'getConditions',
        'observed_generation' => 'getObservedGeneration',
        'ready_replicas' => 'getReadyReplicas',
        'replicas' => 'getReplicas',
        'unavailable_replicas' => 'getUnavailableReplicas',
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
        $this->container['available_replicas'] = isset($data['available_replicas']) ? $data['available_replicas'] : null;
        $this->container['collision_count'] = isset($data['collision_count']) ? $data['collision_count'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['observed_generation'] = isset($data['observed_generation']) ? $data['observed_generation'] : null;
        $this->container['ready_replicas'] = isset($data['ready_replicas']) ? $data['ready_replicas'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['unavailable_replicas'] = isset($data['unavailable_replicas']) ? $data['unavailable_replicas'] : null;
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
     * Gets available_replicas
     *
     * @return int
     */
    public function getAvailableReplicas()
    {
        return $this->container['available_replicas'];
    }

    /**
     * Sets available_replicas
     *
     * @param int $available_replicas Total number of available pods (ready for at least minReadySeconds) targeted by this deployment.
     *
     * @return $this
     */
    public function setAvailableReplicas($available_replicas)
    {
        $this->container['available_replicas'] = $available_replicas;

        return $this;
    }

    /**
     * Gets collision_count
     *
     * @return int
     */
    public function getCollisionCount()
    {
        return $this->container['collision_count'];
    }

    /**
     * Sets collision_count
     *
     * @param int $collision_count Count of hash collisions for the Deployment. The Deployment controller uses this field as a collision avoidance mechanism when it needs to create the name for the newest ReplicaSet.
     *
     * @return $this
     */
    public function setCollisionCount($collision_count)
    {
        $this->container['collision_count'] = $collision_count;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \CBSi\Kubernetes\Model\AppsV1beta1DeploymentCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \CBSi\Kubernetes\Model\AppsV1beta1DeploymentCondition[] $conditions Represents the latest available observations of a deployment's current state.
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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
     * @param int $observed_generation The generation observed by the deployment controller.
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
     * @param int $ready_replicas Total number of ready pods targeted by this deployment.
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
     * @param int $replicas Total number of non-terminated pods targeted by this deployment (their labels match the selector).
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

        return $this;
    }

    /**
     * Gets unavailable_replicas
     *
     * @return int
     */
    public function getUnavailableReplicas()
    {
        return $this->container['unavailable_replicas'];
    }

    /**
     * Sets unavailable_replicas
     *
     * @param int $unavailable_replicas Total number of unavailable pods targeted by this deployment.
     *
     * @return $this
     */
    public function setUnavailableReplicas($unavailable_replicas)
    {
        $this->container['unavailable_replicas'] = $unavailable_replicas;

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
     * @param int $updated_replicas Total number of non-terminated pods targeted by this deployment that have the desired template spec.
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


