<?php
/**
 * V1ObjectMeta
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
 * V1ObjectMeta Class Doc Comment
 *
 * @category Class
 * @description ObjectMeta is metadata that all persisted resources must have, which includes all objects users must create.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1ObjectMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.ObjectMeta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'annotations' => 'map[string,string]',
        'cluster_name' => 'string',
        'creation_timestamp' => '\DateTime',
        'deletion_grace_period_seconds' => 'int',
        'deletion_timestamp' => '\DateTime',
        'finalizers' => 'string[]',
        'generate_name' => 'string',
        'generation' => 'int',
        'initializers' => '\CBSi\Kubernetes\Model\V1Initializers',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'namespace' => 'string',
        'owner_references' => '\CBSi\Kubernetes\Model\V1OwnerReference[]',
        'resource_version' => 'string',
        'self_link' => 'string',
        'uid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'annotations' => null,
        'cluster_name' => null,
        'creation_timestamp' => 'date-time',
        'deletion_grace_period_seconds' => 'int64',
        'deletion_timestamp' => 'date-time',
        'finalizers' => null,
        'generate_name' => null,
        'generation' => 'int64',
        'initializers' => null,
        'labels' => null,
        'name' => null,
        'namespace' => null,
        'owner_references' => null,
        'resource_version' => null,
        'self_link' => null,
        'uid' => null
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
        'annotations' => 'annotations',
        'cluster_name' => 'clusterName',
        'creation_timestamp' => 'creationTimestamp',
        'deletion_grace_period_seconds' => 'deletionGracePeriodSeconds',
        'deletion_timestamp' => 'deletionTimestamp',
        'finalizers' => 'finalizers',
        'generate_name' => 'generateName',
        'generation' => 'generation',
        'initializers' => 'initializers',
        'labels' => 'labels',
        'name' => 'name',
        'namespace' => 'namespace',
        'owner_references' => 'ownerReferences',
        'resource_version' => 'resourceVersion',
        'self_link' => 'selfLink',
        'uid' => 'uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annotations' => 'setAnnotations',
        'cluster_name' => 'setClusterName',
        'creation_timestamp' => 'setCreationTimestamp',
        'deletion_grace_period_seconds' => 'setDeletionGracePeriodSeconds',
        'deletion_timestamp' => 'setDeletionTimestamp',
        'finalizers' => 'setFinalizers',
        'generate_name' => 'setGenerateName',
        'generation' => 'setGeneration',
        'initializers' => 'setInitializers',
        'labels' => 'setLabels',
        'name' => 'setName',
        'namespace' => 'setNamespace',
        'owner_references' => 'setOwnerReferences',
        'resource_version' => 'setResourceVersion',
        'self_link' => 'setSelfLink',
        'uid' => 'setUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annotations' => 'getAnnotations',
        'cluster_name' => 'getClusterName',
        'creation_timestamp' => 'getCreationTimestamp',
        'deletion_grace_period_seconds' => 'getDeletionGracePeriodSeconds',
        'deletion_timestamp' => 'getDeletionTimestamp',
        'finalizers' => 'getFinalizers',
        'generate_name' => 'getGenerateName',
        'generation' => 'getGeneration',
        'initializers' => 'getInitializers',
        'labels' => 'getLabels',
        'name' => 'getName',
        'namespace' => 'getNamespace',
        'owner_references' => 'getOwnerReferences',
        'resource_version' => 'getResourceVersion',
        'self_link' => 'getSelfLink',
        'uid' => 'getUid'
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
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['cluster_name'] = isset($data['cluster_name']) ? $data['cluster_name'] : null;
        $this->container['creation_timestamp'] = isset($data['creation_timestamp']) ? $data['creation_timestamp'] : null;
        $this->container['deletion_grace_period_seconds'] = isset($data['deletion_grace_period_seconds']) ? $data['deletion_grace_period_seconds'] : null;
        $this->container['deletion_timestamp'] = isset($data['deletion_timestamp']) ? $data['deletion_timestamp'] : null;
        $this->container['finalizers'] = isset($data['finalizers']) ? $data['finalizers'] : null;
        $this->container['generate_name'] = isset($data['generate_name']) ? $data['generate_name'] : null;
        $this->container['generation'] = isset($data['generation']) ? $data['generation'] : null;
        $this->container['initializers'] = isset($data['initializers']) ? $data['initializers'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['owner_references'] = isset($data['owner_references']) ? $data['owner_references'] : null;
        $this->container['resource_version'] = isset($data['resource_version']) ? $data['resource_version'] : null;
        $this->container['self_link'] = isset($data['self_link']) ? $data['self_link'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
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
     * Gets annotations
     *
     * @return map[string,string]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     *
     * @param map[string,string] $annotations Annotations is an unstructured key value map stored with a resource that may be set by external tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     *
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }

    /**
     * Gets cluster_name
     *
     * @return string
     */
    public function getClusterName()
    {
        return $this->container['cluster_name'];
    }

    /**
     * Sets cluster_name
     *
     * @param string $cluster_name The name of the cluster which the object belongs to. This is used to distinguish resources with same name and namespace in different clusters. This field is not set anywhere right now and apiserver is going to ignore it if set in create or update request.
     *
     * @return $this
     */
    public function setClusterName($cluster_name)
    {
        $this->container['cluster_name'] = $cluster_name;

        return $this;
    }

    /**
     * Gets creation_timestamp
     *
     * @return \DateTime
     */
    public function getCreationTimestamp()
    {
        return $this->container['creation_timestamp'];
    }

    /**
     * Sets creation_timestamp
     *
     * @param \DateTime $creation_timestamp CreationTimestamp is a timestamp representing the server time when this object was created. It is not guaranteed to be set in happens-before order across separate operations. Clients may not set this value. It is represented in RFC3339 form and is in UTC.  Populated by the system. Read-only. Null for lists. More info: https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @return $this
     */
    public function setCreationTimestamp($creation_timestamp)
    {
        $this->container['creation_timestamp'] = $creation_timestamp;

        return $this;
    }

    /**
     * Gets deletion_grace_period_seconds
     *
     * @return int
     */
    public function getDeletionGracePeriodSeconds()
    {
        return $this->container['deletion_grace_period_seconds'];
    }

    /**
     * Sets deletion_grace_period_seconds
     *
     * @param int $deletion_grace_period_seconds Number of seconds allowed for this object to gracefully terminate before it will be removed from the system. Only set when deletionTimestamp is also set. May only be shortened. Read-only.
     *
     * @return $this
     */
    public function setDeletionGracePeriodSeconds($deletion_grace_period_seconds)
    {
        $this->container['deletion_grace_period_seconds'] = $deletion_grace_period_seconds;

        return $this;
    }

    /**
     * Gets deletion_timestamp
     *
     * @return \DateTime
     */
    public function getDeletionTimestamp()
    {
        return $this->container['deletion_timestamp'];
    }

    /**
     * Sets deletion_timestamp
     *
     * @param \DateTime $deletion_timestamp DeletionTimestamp is RFC 3339 date and time at which this resource will be deleted. This field is set by the server when a graceful deletion is requested by the user, and is not directly settable by a client. The resource is expected to be deleted (no longer visible from resource lists, and not reachable by name) after the time in this field. Once set, this value may not be unset or be set further into the future, although it may be shortened or the resource may be deleted prior to this time. For example, a user may request that a pod is deleted in 30 seconds. The Kubelet will react by sending a graceful termination signal to the containers in the pod. After that 30 seconds, the Kubelet will send a hard termination signal (SIGKILL) to the container and after cleanup, remove the pod from the API. In the presence of network partitions, this object may still exist after this timestamp, until an administrator or automated process can determine the resource is fully terminated. If not set, graceful deletion of the object has not been requested.  Populated by the system when a graceful deletion is requested. Read-only. More info: https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @return $this
     */
    public function setDeletionTimestamp($deletion_timestamp)
    {
        $this->container['deletion_timestamp'] = $deletion_timestamp;

        return $this;
    }

    /**
     * Gets finalizers
     *
     * @return string[]
     */
    public function getFinalizers()
    {
        return $this->container['finalizers'];
    }

    /**
     * Sets finalizers
     *
     * @param string[] $finalizers Must be empty before the object is deleted from the registry. Each entry is an identifier for the responsible component that will remove the entry from the list. If the deletionTimestamp of the object is non-nil, entries in this list can only be removed.
     *
     * @return $this
     */
    public function setFinalizers($finalizers)
    {
        $this->container['finalizers'] = $finalizers;

        return $this;
    }

    /**
     * Gets generate_name
     *
     * @return string
     */
    public function getGenerateName()
    {
        return $this->container['generate_name'];
    }

    /**
     * Sets generate_name
     *
     * @param string $generate_name GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name field has not been provided. If this field is used, the name returned to the client will be different than the name passed. This value will also be combined with a unique suffix. The provided value has the same validation rules as the Name field, and may be truncated by the length of the suffix required to make the value unique on the server.  If this field is specified and the generated name exists, the server will NOT return a 409 - instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name could not be found in the time allotted, and the client should retry (optionally after the time indicated in the Retry-After header).  Applied only if Name is not specified. More info: https://git.k8s.io/community/contributors/devel/api-conventions.md#idempotency
     *
     * @return $this
     */
    public function setGenerateName($generate_name)
    {
        $this->container['generate_name'] = $generate_name;

        return $this;
    }

    /**
     * Gets generation
     *
     * @return int
     */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
     * Sets generation
     *
     * @param int $generation A sequence number representing a specific generation of the desired state. Populated by the system. Read-only.
     *
     * @return $this
     */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;

        return $this;
    }

    /**
     * Gets initializers
     *
     * @return \CBSi\Kubernetes\Model\V1Initializers
     */
    public function getInitializers()
    {
        return $this->container['initializers'];
    }

    /**
     * Sets initializers
     *
     * @param \CBSi\Kubernetes\Model\V1Initializers $initializers An initializer is a controller which enforces some system invariant at object creation time. This field is a list of initializers that have not yet acted on this object. If nil or empty, this object has been completely initialized. Otherwise, the object is considered uninitialized and is hidden (in list/watch and get calls) from clients that haven't explicitly asked to observe uninitialized objects.  When an object is created, the system will populate this list with the current set of initializers. Only privileged users may set or modify this list. Once it is empty, it may not be modified further by any user.
     *
     * @return $this
     */
    public function setInitializers($initializers)
    {
        $this->container['initializers'] = $initializers;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return map[string,string]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param map[string,string] $labels Map of string keys and values that can be used to organize and categorize (scope and select) objects. May match selectors of replication controllers and services. More info: http://kubernetes.io/docs/user-guide/labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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
     * @param string $name Name must be unique within a namespace. Is required when creating resources, although some resources may allow a client to request the generation of an appropriate name automatically. Name is primarily intended for creation idempotence and configuration definition. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string $namespace Namespace defines the space within each name must be unique. An empty namespace is equivalent to the \"default\" namespace, but \"default\" is the canonical representation. Not all objects are required to be scoped to a namespace - the value of this field for those objects will be empty.  Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets owner_references
     *
     * @return \CBSi\Kubernetes\Model\V1OwnerReference[]
     */
    public function getOwnerReferences()
    {
        return $this->container['owner_references'];
    }

    /**
     * Sets owner_references
     *
     * @param \CBSi\Kubernetes\Model\V1OwnerReference[] $owner_references List of objects depended by this object. If ALL objects in the list have been deleted, this object will be garbage collected. If this object is managed by a controller, then an entry in this list will point to this controller, with the controller field set to true. There cannot be more than one managing controller.
     *
     * @return $this
     */
    public function setOwnerReferences($owner_references)
    {
        $this->container['owner_references'] = $owner_references;

        return $this;
    }

    /**
     * Gets resource_version
     *
     * @return string
     */
    public function getResourceVersion()
    {
        return $this->container['resource_version'];
    }

    /**
     * Sets resource_version
     *
     * @param string $resource_version An opaque value that represents the internal version of this object that can be used by clients to determine when objects have changed. May be used for optimistic concurrency, change detection, and the watch operation on a resource or set of resources. Clients must treat these values as opaque and passed unmodified back to the server. They may only be valid for a particular resource or set of resources.  Populated by the system. Read-only. Value must be treated as opaque by clients and . More info: https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     *
     * @return $this
     */
    public function setResourceVersion($resource_version)
    {
        $this->container['resource_version'] = $resource_version;

        return $this;
    }

    /**
     * Gets self_link
     *
     * @return string
     */
    public function getSelfLink()
    {
        return $this->container['self_link'];
    }

    /**
     * Sets self_link
     *
     * @param string $self_link SelfLink is a URL representing this object. Populated by the system. Read-only.
     *
     * @return $this
     */
    public function setSelfLink($self_link)
    {
        $this->container['self_link'] = $self_link;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid UID is the unique in time and space value for this object. It is typically generated by the server on successful creation of a resource and is not allowed to change on PUT operations.  Populated by the system. Read-only. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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

