<?php
/**
 * V1beta1StatefulSetSpec
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
 * V1beta1StatefulSetSpec Class Doc Comment
 *
 * @category Class
 * @description A StatefulSetSpec is the specification of a StatefulSet.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1beta1StatefulSetSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1beta1.StatefulSetSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pod_management_policy' => 'string',
        'replicas' => 'int',
        'revision_history_limit' => 'int',
        'selector' => '\CBSi\Kubernetes\Model\V1LabelSelector',
        'service_name' => 'string',
        'template' => '\CBSi\Kubernetes\Model\V1PodTemplateSpec',
        'update_strategy' => '\CBSi\Kubernetes\Model\V1beta1StatefulSetUpdateStrategy',
        'volume_claim_templates' => '\CBSi\Kubernetes\Model\V1PersistentVolumeClaim[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pod_management_policy' => null,
        'replicas' => 'int32',
        'revision_history_limit' => 'int32',
        'selector' => null,
        'service_name' => null,
        'template' => null,
        'update_strategy' => null,
        'volume_claim_templates' => null
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
        'pod_management_policy' => 'podManagementPolicy',
        'replicas' => 'replicas',
        'revision_history_limit' => 'revisionHistoryLimit',
        'selector' => 'selector',
        'service_name' => 'serviceName',
        'template' => 'template',
        'update_strategy' => 'updateStrategy',
        'volume_claim_templates' => 'volumeClaimTemplates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pod_management_policy' => 'setPodManagementPolicy',
        'replicas' => 'setReplicas',
        'revision_history_limit' => 'setRevisionHistoryLimit',
        'selector' => 'setSelector',
        'service_name' => 'setServiceName',
        'template' => 'setTemplate',
        'update_strategy' => 'setUpdateStrategy',
        'volume_claim_templates' => 'setVolumeClaimTemplates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pod_management_policy' => 'getPodManagementPolicy',
        'replicas' => 'getReplicas',
        'revision_history_limit' => 'getRevisionHistoryLimit',
        'selector' => 'getSelector',
        'service_name' => 'getServiceName',
        'template' => 'getTemplate',
        'update_strategy' => 'getUpdateStrategy',
        'volume_claim_templates' => 'getVolumeClaimTemplates'
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
        $this->container['pod_management_policy'] = isset($data['pod_management_policy']) ? $data['pod_management_policy'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['revision_history_limit'] = isset($data['revision_history_limit']) ? $data['revision_history_limit'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['update_strategy'] = isset($data['update_strategy']) ? $data['update_strategy'] : null;
        $this->container['volume_claim_templates'] = isset($data['volume_claim_templates']) ? $data['volume_claim_templates'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['service_name'] === null) {
            $invalidProperties[] = "'service_name' can't be null";
        }
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

        if ($this->container['service_name'] === null) {
            return false;
        }
        if ($this->container['template'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets pod_management_policy
     *
     * @return string
     */
    public function getPodManagementPolicy()
    {
        return $this->container['pod_management_policy'];
    }

    /**
     * Sets pod_management_policy
     *
     * @param string $pod_management_policy podManagementPolicy controls how pods are created during initial scale up, when replacing pods on nodes, or when scaling down. The default policy is `OrderedReady`, where pods are created in increasing order (pod-0, then pod-1, etc) and the controller will wait until each pod is ready before continuing. When scaling down, the pods are removed in the opposite order. The alternative policy is `Parallel` which will create pods in parallel to match the desired scale without waiting, and on scale down will delete all pods at once.
     *
     * @return $this
     */
    public function setPodManagementPolicy($pod_management_policy)
    {
        $this->container['pod_management_policy'] = $pod_management_policy;

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
     * @param int $replicas replicas is the desired number of replicas of the given Template. These are replicas in the sense that they are instantiations of the same Template, but individual replicas also have a consistent identity. If unspecified, defaults to 1.
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
     * @param int $revision_history_limit revisionHistoryLimit is the maximum number of revisions that will be maintained in the StatefulSet's revision history. The revision history consists of all revisions not represented by a currently applied StatefulSetSpec version. The default value is 10.
     *
     * @return $this
     */
    public function setRevisionHistoryLimit($revision_history_limit)
    {
        $this->container['revision_history_limit'] = $revision_history_limit;

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
     * @param \CBSi\Kubernetes\Model\V1LabelSelector $selector selector is a label query over pods that should match the replica count. If empty, defaulted to labels on the pod template. More info: https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string $service_name serviceName is the name of the service that governs this StatefulSet. This service must exist before the StatefulSet, and is responsible for the network identity of the set. Pods get DNS/hostnames that follow the pattern: pod-specific-string.serviceName.default.svc.cluster.local where \"pod-specific-string\" is managed by the StatefulSet controller.
     *
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

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
     * @param \CBSi\Kubernetes\Model\V1PodTemplateSpec $template template is the object that describes the pod that will be created if insufficient replicas are detected. Each pod stamped out by the StatefulSet will fulfill this Template, but have a unique identity from the rest of the StatefulSet.
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets update_strategy
     *
     * @return \CBSi\Kubernetes\Model\V1beta1StatefulSetUpdateStrategy
     */
    public function getUpdateStrategy()
    {
        return $this->container['update_strategy'];
    }

    /**
     * Sets update_strategy
     *
     * @param \CBSi\Kubernetes\Model\V1beta1StatefulSetUpdateStrategy $update_strategy updateStrategy indicates the StatefulSetUpdateStrategy that will be employed to update Pods in the StatefulSet when a revision is made to Template.
     *
     * @return $this
     */
    public function setUpdateStrategy($update_strategy)
    {
        $this->container['update_strategy'] = $update_strategy;

        return $this;
    }

    /**
     * Gets volume_claim_templates
     *
     * @return \CBSi\Kubernetes\Model\V1PersistentVolumeClaim[]
     */
    public function getVolumeClaimTemplates()
    {
        return $this->container['volume_claim_templates'];
    }

    /**
     * Sets volume_claim_templates
     *
     * @param \CBSi\Kubernetes\Model\V1PersistentVolumeClaim[] $volume_claim_templates volumeClaimTemplates is a list of claims that pods are allowed to reference. The StatefulSet controller is responsible for mapping network identities to claims in a way that maintains the identity of a pod. Every claim in this list must have at least one matching (by name) volumeMount in one container in the template. A claim in this list takes precedence over any volumes in the template, with the same name.
     *
     * @return $this
     */
    public function setVolumeClaimTemplates($volume_claim_templates)
    {
        $this->container['volume_claim_templates'] = $volume_claim_templates;

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


