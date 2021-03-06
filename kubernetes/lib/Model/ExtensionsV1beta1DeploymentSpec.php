<?php
/**
 * ExtensionsV1beta1DeploymentSpec
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
 * ExtensionsV1beta1DeploymentSpec Class Doc Comment
 *
 * @category Class
 * @description DeploymentSpec is the specification of the desired behavior of the Deployment.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionsV1beta1DeploymentSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'extensions.v1beta1.DeploymentSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'min_ready_seconds' => 'int',
        'paused' => 'bool',
        'progress_deadline_seconds' => 'int',
        'replicas' => 'int',
        'revision_history_limit' => 'int',
        'rollback_to' => '\CBSi\Kubernetes\Model\ExtensionsV1beta1RollbackConfig',
        'selector' => '\CBSi\Kubernetes\Model\V1LabelSelector',
        'strategy' => '\CBSi\Kubernetes\Model\ExtensionsV1beta1DeploymentStrategy',
        'template' => '\CBSi\Kubernetes\Model\V1PodTemplateSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'min_ready_seconds' => 'int32',
        'paused' => null,
        'progress_deadline_seconds' => 'int32',
        'replicas' => 'int32',
        'revision_history_limit' => 'int32',
        'rollback_to' => null,
        'selector' => null,
        'strategy' => null,
        'template' => null
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
        'min_ready_seconds' => 'minReadySeconds',
        'paused' => 'paused',
        'progress_deadline_seconds' => 'progressDeadlineSeconds',
        'replicas' => 'replicas',
        'revision_history_limit' => 'revisionHistoryLimit',
        'rollback_to' => 'rollbackTo',
        'selector' => 'selector',
        'strategy' => 'strategy',
        'template' => 'template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_ready_seconds' => 'setMinReadySeconds',
        'paused' => 'setPaused',
        'progress_deadline_seconds' => 'setProgressDeadlineSeconds',
        'replicas' => 'setReplicas',
        'revision_history_limit' => 'setRevisionHistoryLimit',
        'rollback_to' => 'setRollbackTo',
        'selector' => 'setSelector',
        'strategy' => 'setStrategy',
        'template' => 'setTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_ready_seconds' => 'getMinReadySeconds',
        'paused' => 'getPaused',
        'progress_deadline_seconds' => 'getProgressDeadlineSeconds',
        'replicas' => 'getReplicas',
        'revision_history_limit' => 'getRevisionHistoryLimit',
        'rollback_to' => 'getRollbackTo',
        'selector' => 'getSelector',
        'strategy' => 'getStrategy',
        'template' => 'getTemplate'
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
        $this->container['min_ready_seconds'] = isset($data['min_ready_seconds']) ? $data['min_ready_seconds'] : null;
        $this->container['paused'] = isset($data['paused']) ? $data['paused'] : null;
        $this->container['progress_deadline_seconds'] = isset($data['progress_deadline_seconds']) ? $data['progress_deadline_seconds'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['revision_history_limit'] = isset($data['revision_history_limit']) ? $data['revision_history_limit'] : null;
        $this->container['rollback_to'] = isset($data['rollback_to']) ? $data['rollback_to'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
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

        if ($this->container['template'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets min_ready_seconds
     *
     * @return int
     */
    public function getMinReadySeconds()
    {
        return $this->container['min_ready_seconds'];
    }

    /**
     * Sets min_ready_seconds
     *
     * @param int $min_ready_seconds Minimum number of seconds for which a newly created pod should be ready without any of its container crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     *
     * @return $this
     */
    public function setMinReadySeconds($min_ready_seconds)
    {
        $this->container['min_ready_seconds'] = $min_ready_seconds;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return bool
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool $paused Indicates that the deployment is paused and will not be processed by the deployment controller.
     *
     * @return $this
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets progress_deadline_seconds
     *
     * @return int
     */
    public function getProgressDeadlineSeconds()
    {
        return $this->container['progress_deadline_seconds'];
    }

    /**
     * Sets progress_deadline_seconds
     *
     * @param int $progress_deadline_seconds The maximum time in seconds for a deployment to make progress before it is considered to be failed. The deployment controller will continue to process failed deployments and a condition with a ProgressDeadlineExceeded reason will be surfaced in the deployment status. Once autoRollback is implemented, the deployment controller will automatically rollback failed deployments. Note that progress will not be estimated during the time a deployment is paused. This is not set by default.
     *
     * @return $this
     */
    public function setProgressDeadlineSeconds($progress_deadline_seconds)
    {
        $this->container['progress_deadline_seconds'] = $progress_deadline_seconds;

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
     * @param int $replicas Number of desired pods. This is a pointer to distinguish between explicit zero and not specified. Defaults to 1.
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

        return $this;
    }

    /**
     * Gets revision_history_limit
     *
     * @return int
     */
    public function getRevisionHistoryLimit()
    {
        return $this->container['revision_history_limit'];
    }

    /**
     * Sets revision_history_limit
     *
     * @param int $revision_history_limit The number of old ReplicaSets to retain to allow rollback. This is a pointer to distinguish between explicit zero and not specified.
     *
     * @return $this
     */
    public function setRevisionHistoryLimit($revision_history_limit)
    {
        $this->container['revision_history_limit'] = $revision_history_limit;

        return $this;
    }

    /**
     * Gets rollback_to
     *
     * @return \CBSi\Kubernetes\Model\ExtensionsV1beta1RollbackConfig
     */
    public function getRollbackTo()
    {
        return $this->container['rollback_to'];
    }

    /**
     * Sets rollback_to
     *
     * @param \CBSi\Kubernetes\Model\ExtensionsV1beta1RollbackConfig $rollback_to The config this deployment is rolling back to. Will be cleared after rollback is done.
     *
     * @return $this
     */
    public function setRollbackTo($rollback_to)
    {
        $this->container['rollback_to'] = $rollback_to;

        return $this;
    }

    /**
     * Gets selector
     *
     * @return \CBSi\Kubernetes\Model\V1LabelSelector
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     *
     * @param \CBSi\Kubernetes\Model\V1LabelSelector $selector Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones affected by this deployment.
     *
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

        return $this;
    }

    /**
     * Gets strategy
     *
     * @return \CBSi\Kubernetes\Model\ExtensionsV1beta1DeploymentStrategy
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param \CBSi\Kubernetes\Model\ExtensionsV1beta1DeploymentStrategy $strategy The deployment strategy to use to replace existing pods with new ones.
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \CBSi\Kubernetes\Model\V1PodTemplateSpec
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \CBSi\Kubernetes\Model\V1PodTemplateSpec $template Template describes the pods that will be created.
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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


