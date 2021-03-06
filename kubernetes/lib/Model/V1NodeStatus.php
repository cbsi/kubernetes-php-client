<?php
/**
 * V1NodeStatus
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
 * V1NodeStatus Class Doc Comment
 *
 * @category Class
 * @description NodeStatus is information about the current status of a node.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1NodeStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.NodeStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addresses' => '\CBSi\Kubernetes\Model\V1NodeAddress[]',
        'allocatable' => 'map[string,string]',
        'capacity' => 'map[string,string]',
        'conditions' => '\CBSi\Kubernetes\Model\V1NodeCondition[]',
        'daemon_endpoints' => '\CBSi\Kubernetes\Model\V1NodeDaemonEndpoints',
        'images' => '\CBSi\Kubernetes\Model\V1ContainerImage[]',
        'node_info' => '\CBSi\Kubernetes\Model\V1NodeSystemInfo',
        'phase' => 'string',
        'volumes_attached' => '\CBSi\Kubernetes\Model\V1AttachedVolume[]',
        'volumes_in_use' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addresses' => null,
        'allocatable' => null,
        'capacity' => null,
        'conditions' => null,
        'daemon_endpoints' => null,
        'images' => null,
        'node_info' => null,
        'phase' => null,
        'volumes_attached' => null,
        'volumes_in_use' => null
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
        'addresses' => 'addresses',
        'allocatable' => 'allocatable',
        'capacity' => 'capacity',
        'conditions' => 'conditions',
        'daemon_endpoints' => 'daemonEndpoints',
        'images' => 'images',
        'node_info' => 'nodeInfo',
        'phase' => 'phase',
        'volumes_attached' => 'volumesAttached',
        'volumes_in_use' => 'volumesInUse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addresses' => 'setAddresses',
        'allocatable' => 'setAllocatable',
        'capacity' => 'setCapacity',
        'conditions' => 'setConditions',
        'daemon_endpoints' => 'setDaemonEndpoints',
        'images' => 'setImages',
        'node_info' => 'setNodeInfo',
        'phase' => 'setPhase',
        'volumes_attached' => 'setVolumesAttached',
        'volumes_in_use' => 'setVolumesInUse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addresses' => 'getAddresses',
        'allocatable' => 'getAllocatable',
        'capacity' => 'getCapacity',
        'conditions' => 'getConditions',
        'daemon_endpoints' => 'getDaemonEndpoints',
        'images' => 'getImages',
        'node_info' => 'getNodeInfo',
        'phase' => 'getPhase',
        'volumes_attached' => 'getVolumesAttached',
        'volumes_in_use' => 'getVolumesInUse'
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
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['allocatable'] = isset($data['allocatable']) ? $data['allocatable'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['daemon_endpoints'] = isset($data['daemon_endpoints']) ? $data['daemon_endpoints'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['node_info'] = isset($data['node_info']) ? $data['node_info'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['volumes_attached'] = isset($data['volumes_attached']) ? $data['volumes_attached'] : null;
        $this->container['volumes_in_use'] = isset($data['volumes_in_use']) ? $data['volumes_in_use'] : null;
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
     * Gets addresses
     *
     * @return \CBSi\Kubernetes\Model\V1NodeAddress[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \CBSi\Kubernetes\Model\V1NodeAddress[] $addresses List of addresses reachable to the node. Queried from cloud provider, if available. More info: https://kubernetes.io/docs/concepts/nodes/node/#addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets allocatable
     *
     * @return map[string,string]
     */
    public function getAllocatable()
    {
        return $this->container['allocatable'];
    }

    /**
     * Sets allocatable
     *
     * @param map[string,string] $allocatable Allocatable represents the resources of a node that are available for scheduling. Defaults to Capacity.
     *
     * @return $this
     */
    public function setAllocatable($allocatable)
    {
        $this->container['allocatable'] = $allocatable;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return map[string,string]
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param map[string,string] $capacity Capacity represents the total resources of a node. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \CBSi\Kubernetes\Model\V1NodeCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \CBSi\Kubernetes\Model\V1NodeCondition[] $conditions Conditions is an array of current observed node conditions. More info: https://kubernetes.io/docs/concepts/nodes/node/#condition
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets daemon_endpoints
     *
     * @return \CBSi\Kubernetes\Model\V1NodeDaemonEndpoints
     */
    public function getDaemonEndpoints()
    {
        return $this->container['daemon_endpoints'];
    }

    /**
     * Sets daemon_endpoints
     *
     * @param \CBSi\Kubernetes\Model\V1NodeDaemonEndpoints $daemon_endpoints Endpoints of daemons running on the Node.
     *
     * @return $this
     */
    public function setDaemonEndpoints($daemon_endpoints)
    {
        $this->container['daemon_endpoints'] = $daemon_endpoints;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \CBSi\Kubernetes\Model\V1ContainerImage[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \CBSi\Kubernetes\Model\V1ContainerImage[] $images List of container images on this node
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets node_info
     *
     * @return \CBSi\Kubernetes\Model\V1NodeSystemInfo
     */
    public function getNodeInfo()
    {
        return $this->container['node_info'];
    }

    /**
     * Sets node_info
     *
     * @param \CBSi\Kubernetes\Model\V1NodeSystemInfo $node_info Set of ids/uuids to uniquely identify the node. More info: https://kubernetes.io/docs/concepts/nodes/node/#info
     *
     * @return $this
     */
    public function setNodeInfo($node_info)
    {
        $this->container['node_info'] = $node_info;

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
     * @param string $phase NodePhase is the recently observed lifecycle phase of the node. More info: https://kubernetes.io/docs/concepts/nodes/node/#phase The field is never populated, and now is deprecated.
     *
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets volumes_attached
     *
     * @return \CBSi\Kubernetes\Model\V1AttachedVolume[]
     */
    public function getVolumesAttached()
    {
        return $this->container['volumes_attached'];
    }

    /**
     * Sets volumes_attached
     *
     * @param \CBSi\Kubernetes\Model\V1AttachedVolume[] $volumes_attached List of volumes that are attached to the node.
     *
     * @return $this
     */
    public function setVolumesAttached($volumes_attached)
    {
        $this->container['volumes_attached'] = $volumes_attached;

        return $this;
    }

    /**
     * Gets volumes_in_use
     *
     * @return string[]
     */
    public function getVolumesInUse()
    {
        return $this->container['volumes_in_use'];
    }

    /**
     * Sets volumes_in_use
     *
     * @param string[] $volumes_in_use List of attachable volumes in use (mounted) by the node.
     *
     * @return $this
     */
    public function setVolumesInUse($volumes_in_use)
    {
        $this->container['volumes_in_use'] = $volumes_in_use;

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


