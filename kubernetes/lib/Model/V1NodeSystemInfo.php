<?php
/**
 * V1NodeSystemInfo
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
 * V1NodeSystemInfo Class Doc Comment
 *
 * @category Class
 * @description NodeSystemInfo is a set of ids/uuids to uniquely identify the node.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1NodeSystemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.NodeSystemInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'architecture' => 'string',
        'boot_id' => 'string',
        'container_runtime_version' => 'string',
        'kernel_version' => 'string',
        'kube_proxy_version' => 'string',
        'kubelet_version' => 'string',
        'machine_id' => 'string',
        'operating_system' => 'string',
        'os_image' => 'string',
        'system_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'architecture' => null,
        'boot_id' => null,
        'container_runtime_version' => null,
        'kernel_version' => null,
        'kube_proxy_version' => null,
        'kubelet_version' => null,
        'machine_id' => null,
        'operating_system' => null,
        'os_image' => null,
        'system_uuid' => null
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
        'architecture' => 'architecture',
        'boot_id' => 'bootID',
        'container_runtime_version' => 'containerRuntimeVersion',
        'kernel_version' => 'kernelVersion',
        'kube_proxy_version' => 'kubeProxyVersion',
        'kubelet_version' => 'kubeletVersion',
        'machine_id' => 'machineID',
        'operating_system' => 'operatingSystem',
        'os_image' => 'osImage',
        'system_uuid' => 'systemUUID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'architecture' => 'setArchitecture',
        'boot_id' => 'setBootId',
        'container_runtime_version' => 'setContainerRuntimeVersion',
        'kernel_version' => 'setKernelVersion',
        'kube_proxy_version' => 'setKubeProxyVersion',
        'kubelet_version' => 'setKubeletVersion',
        'machine_id' => 'setMachineId',
        'operating_system' => 'setOperatingSystem',
        'os_image' => 'setOsImage',
        'system_uuid' => 'setSystemUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'architecture' => 'getArchitecture',
        'boot_id' => 'getBootId',
        'container_runtime_version' => 'getContainerRuntimeVersion',
        'kernel_version' => 'getKernelVersion',
        'kube_proxy_version' => 'getKubeProxyVersion',
        'kubelet_version' => 'getKubeletVersion',
        'machine_id' => 'getMachineId',
        'operating_system' => 'getOperatingSystem',
        'os_image' => 'getOsImage',
        'system_uuid' => 'getSystemUuid'
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
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['boot_id'] = isset($data['boot_id']) ? $data['boot_id'] : null;
        $this->container['container_runtime_version'] = isset($data['container_runtime_version']) ? $data['container_runtime_version'] : null;
        $this->container['kernel_version'] = isset($data['kernel_version']) ? $data['kernel_version'] : null;
        $this->container['kube_proxy_version'] = isset($data['kube_proxy_version']) ? $data['kube_proxy_version'] : null;
        $this->container['kubelet_version'] = isset($data['kubelet_version']) ? $data['kubelet_version'] : null;
        $this->container['machine_id'] = isset($data['machine_id']) ? $data['machine_id'] : null;
        $this->container['operating_system'] = isset($data['operating_system']) ? $data['operating_system'] : null;
        $this->container['os_image'] = isset($data['os_image']) ? $data['os_image'] : null;
        $this->container['system_uuid'] = isset($data['system_uuid']) ? $data['system_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['architecture'] === null) {
            $invalidProperties[] = "'architecture' can't be null";
        }
        if ($this->container['boot_id'] === null) {
            $invalidProperties[] = "'boot_id' can't be null";
        }
        if ($this->container['container_runtime_version'] === null) {
            $invalidProperties[] = "'container_runtime_version' can't be null";
        }
        if ($this->container['kernel_version'] === null) {
            $invalidProperties[] = "'kernel_version' can't be null";
        }
        if ($this->container['kube_proxy_version'] === null) {
            $invalidProperties[] = "'kube_proxy_version' can't be null";
        }
        if ($this->container['kubelet_version'] === null) {
            $invalidProperties[] = "'kubelet_version' can't be null";
        }
        if ($this->container['machine_id'] === null) {
            $invalidProperties[] = "'machine_id' can't be null";
        }
        if ($this->container['operating_system'] === null) {
            $invalidProperties[] = "'operating_system' can't be null";
        }
        if ($this->container['os_image'] === null) {
            $invalidProperties[] = "'os_image' can't be null";
        }
        if ($this->container['system_uuid'] === null) {
            $invalidProperties[] = "'system_uuid' can't be null";
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

        if ($this->container['architecture'] === null) {
            return false;
        }
        if ($this->container['boot_id'] === null) {
            return false;
        }
        if ($this->container['container_runtime_version'] === null) {
            return false;
        }
        if ($this->container['kernel_version'] === null) {
            return false;
        }
        if ($this->container['kube_proxy_version'] === null) {
            return false;
        }
        if ($this->container['kubelet_version'] === null) {
            return false;
        }
        if ($this->container['machine_id'] === null) {
            return false;
        }
        if ($this->container['operating_system'] === null) {
            return false;
        }
        if ($this->container['os_image'] === null) {
            return false;
        }
        if ($this->container['system_uuid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets architecture
     *
     * @return string
     */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
     * Sets architecture
     *
     * @param string $architecture The Architecture reported by the node
     *
     * @return $this
     */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;

        return $this;
    }

    /**
     * Gets boot_id
     *
     * @return string
     */
    public function getBootId()
    {
        return $this->container['boot_id'];
    }

    /**
     * Sets boot_id
     *
     * @param string $boot_id Boot ID reported by the node.
     *
     * @return $this
     */
    public function setBootId($boot_id)
    {
        $this->container['boot_id'] = $boot_id;

        return $this;
    }

    /**
     * Gets container_runtime_version
     *
     * @return string
     */
    public function getContainerRuntimeVersion()
    {
        return $this->container['container_runtime_version'];
    }

    /**
     * Sets container_runtime_version
     *
     * @param string $container_runtime_version ContainerRuntime Version reported by the node through runtime remote API (e.g. docker://1.5.0).
     *
     * @return $this
     */
    public function setContainerRuntimeVersion($container_runtime_version)
    {
        $this->container['container_runtime_version'] = $container_runtime_version;

        return $this;
    }

    /**
     * Gets kernel_version
     *
     * @return string
     */
    public function getKernelVersion()
    {
        return $this->container['kernel_version'];
    }

    /**
     * Sets kernel_version
     *
     * @param string $kernel_version Kernel Version reported by the node from 'uname -r' (e.g. 3.16.0-0.bpo.4-amd64).
     *
     * @return $this
     */
    public function setKernelVersion($kernel_version)
    {
        $this->container['kernel_version'] = $kernel_version;

        return $this;
    }

    /**
     * Gets kube_proxy_version
     *
     * @return string
     */
    public function getKubeProxyVersion()
    {
        return $this->container['kube_proxy_version'];
    }

    /**
     * Sets kube_proxy_version
     *
     * @param string $kube_proxy_version KubeProxy Version reported by the node.
     *
     * @return $this
     */
    public function setKubeProxyVersion($kube_proxy_version)
    {
        $this->container['kube_proxy_version'] = $kube_proxy_version;

        return $this;
    }

    /**
     * Gets kubelet_version
     *
     * @return string
     */
    public function getKubeletVersion()
    {
        return $this->container['kubelet_version'];
    }

    /**
     * Sets kubelet_version
     *
     * @param string $kubelet_version Kubelet Version reported by the node.
     *
     * @return $this
     */
    public function setKubeletVersion($kubelet_version)
    {
        $this->container['kubelet_version'] = $kubelet_version;

        return $this;
    }

    /**
     * Gets machine_id
     *
     * @return string
     */
    public function getMachineId()
    {
        return $this->container['machine_id'];
    }

    /**
     * Sets machine_id
     *
     * @param string $machine_id MachineID reported by the node. For unique machine identification in the cluster this field is preferred. Learn more from man(5) machine-id: http://man7.org/linux/man-pages/man5/machine-id.5.html
     *
     * @return $this
     */
    public function setMachineId($machine_id)
    {
        $this->container['machine_id'] = $machine_id;

        return $this;
    }

    /**
     * Gets operating_system
     *
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->container['operating_system'];
    }

    /**
     * Sets operating_system
     *
     * @param string $operating_system The Operating System reported by the node
     *
     * @return $this
     */
    public function setOperatingSystem($operating_system)
    {
        $this->container['operating_system'] = $operating_system;

        return $this;
    }

    /**
     * Gets os_image
     *
     * @return string
     */
    public function getOsImage()
    {
        return $this->container['os_image'];
    }

    /**
     * Sets os_image
     *
     * @param string $os_image OS Image reported by the node from /etc/os-release (e.g. Debian GNU/Linux 7 (wheezy)).
     *
     * @return $this
     */
    public function setOsImage($os_image)
    {
        $this->container['os_image'] = $os_image;

        return $this;
    }

    /**
     * Gets system_uuid
     *
     * @return string
     */
    public function getSystemUuid()
    {
        return $this->container['system_uuid'];
    }

    /**
     * Sets system_uuid
     *
     * @param string $system_uuid SystemUUID reported by the node. For unique machine identification MachineID is preferred. This field is specific to Red Hat hosts https://access.redhat.com/documentation/en-US/Red_Hat_Subscription_Management/1/html/RHSM/getting-system-uuid.html
     *
     * @return $this
     */
    public function setSystemUuid($system_uuid)
    {
        $this->container['system_uuid'] = $system_uuid;

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


