<?php
/**
 * V1PodStatus
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
 * V1PodStatus Class Doc Comment
 *
 * @category Class
 * @description PodStatus represents information about the status of a pod. Status may trail the actual state of a system.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1PodStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.PodStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conditions' => '\CBSi\Kubernetes\Model\V1PodCondition[]',
        'container_statuses' => '\CBSi\Kubernetes\Model\V1ContainerStatus[]',
        'host_ip' => 'string',
        'init_container_statuses' => '\CBSi\Kubernetes\Model\V1ContainerStatus[]',
        'message' => 'string',
        'phase' => 'string',
        'pod_ip' => 'string',
        'qos_class' => 'string',
        'reason' => 'string',
        'start_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conditions' => null,
        'container_statuses' => null,
        'host_ip' => null,
        'init_container_statuses' => null,
        'message' => null,
        'phase' => null,
        'pod_ip' => null,
        'qos_class' => null,
        'reason' => null,
        'start_time' => 'date-time'
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
        'conditions' => 'conditions',
        'container_statuses' => 'containerStatuses',
        'host_ip' => 'hostIP',
        'init_container_statuses' => 'initContainerStatuses',
        'message' => 'message',
        'phase' => 'phase',
        'pod_ip' => 'podIP',
        'qos_class' => 'qosClass',
        'reason' => 'reason',
        'start_time' => 'startTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conditions' => 'setConditions',
        'container_statuses' => 'setContainerStatuses',
        'host_ip' => 'setHostIp',
        'init_container_statuses' => 'setInitContainerStatuses',
        'message' => 'setMessage',
        'phase' => 'setPhase',
        'pod_ip' => 'setPodIp',
        'qos_class' => 'setQosClass',
        'reason' => 'setReason',
        'start_time' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conditions' => 'getConditions',
        'container_statuses' => 'getContainerStatuses',
        'host_ip' => 'getHostIp',
        'init_container_statuses' => 'getInitContainerStatuses',
        'message' => 'getMessage',
        'phase' => 'getPhase',
        'pod_ip' => 'getPodIp',
        'qos_class' => 'getQosClass',
        'reason' => 'getReason',
        'start_time' => 'getStartTime'
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
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['container_statuses'] = isset($data['container_statuses']) ? $data['container_statuses'] : null;
        $this->container['host_ip'] = isset($data['host_ip']) ? $data['host_ip'] : null;
        $this->container['init_container_statuses'] = isset($data['init_container_statuses']) ? $data['init_container_statuses'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['pod_ip'] = isset($data['pod_ip']) ? $data['pod_ip'] : null;
        $this->container['qos_class'] = isset($data['qos_class']) ? $data['qos_class'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
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
     * Gets conditions
     *
     * @return \CBSi\Kubernetes\Model\V1PodCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \CBSi\Kubernetes\Model\V1PodCondition[] $conditions Current service state of pod. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets container_statuses
     *
     * @return \CBSi\Kubernetes\Model\V1ContainerStatus[]
     */
    public function getContainerStatuses()
    {
        return $this->container['container_statuses'];
    }

    /**
     * Sets container_statuses
     *
     * @param \CBSi\Kubernetes\Model\V1ContainerStatus[] $container_statuses The list has one entry per container in the manifest. Each entry is currently the output of `docker inspect`. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @return $this
     */
    public function setContainerStatuses($container_statuses)
    {
        $this->container['container_statuses'] = $container_statuses;

        return $this;
    }

    /**
     * Gets host_ip
     *
     * @return string
     */
    public function getHostIp()
    {
        return $this->container['host_ip'];
    }

    /**
     * Sets host_ip
     *
     * @param string $host_ip IP address of the host to which the pod is assigned. Empty if not yet scheduled.
     *
     * @return $this
     */
    public function setHostIp($host_ip)
    {
        $this->container['host_ip'] = $host_ip;

        return $this;
    }

    /**
     * Gets init_container_statuses
     *
     * @return \CBSi\Kubernetes\Model\V1ContainerStatus[]
     */
    public function getInitContainerStatuses()
    {
        return $this->container['init_container_statuses'];
    }

    /**
     * Sets init_container_statuses
     *
     * @param \CBSi\Kubernetes\Model\V1ContainerStatus[] $init_container_statuses The list has one entry per init container in the manifest. The most recent successful init container will have ready = true, the most recently started container will have startTime set. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @return $this
     */
    public function setInitContainerStatuses($init_container_statuses)
    {
        $this->container['init_container_statuses'] = $init_container_statuses;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message A human readable message indicating details about why the pod is in this condition.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets phase
     *
     * @return string
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     *
     * @param string $phase Current condition of the pod. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-phase
     *
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets pod_ip
     *
     * @return string
     */
    public function getPodIp()
    {
        return $this->container['pod_ip'];
    }

    /**
     * Sets pod_ip
     *
     * @param string $pod_ip IP address allocated to the pod. Routable at least within the cluster. Empty if not yet allocated.
     *
     * @return $this
     */
    public function setPodIp($pod_ip)
    {
        $this->container['pod_ip'] = $pod_ip;

        return $this;
    }

    /**
     * Gets qos_class
     *
     * @return string
     */
    public function getQosClass()
    {
        return $this->container['qos_class'];
    }

    /**
     * Sets qos_class
     *
     * @param string $qos_class The Quality of Service (QOS) classification assigned to the pod based on resource requirements See PodQOSClass type for available QOS classes More info: https://github.com/kubernetes/kubernetes/blob/master/docs/design/resource-qos.md
     *
     * @return $this
     */
    public function setQosClass($qos_class)
    {
        $this->container['qos_class'] = $qos_class;

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
     * @param string $reason A brief CamelCase message indicating details about why the pod is in this state. e.g. 'OutOfDisk'
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time RFC 3339 date and time at which the object was acknowledged by the Kubelet. This is before the Kubelet pulled the container image(s) for the pod.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

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

