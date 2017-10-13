<?php
/**
 * V1beta1PodSecurityPolicySpec
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
 * V1beta1PodSecurityPolicySpec Class Doc Comment
 *
 * @category Class
 * @description Pod Security Policy Spec defines the policy enforced.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1beta1PodSecurityPolicySpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1beta1.PodSecurityPolicySpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_capabilities' => 'string[]',
        'default_add_capabilities' => 'string[]',
        'fs_group' => '\CBSi\Kubernetes\Model\V1beta1FSGroupStrategyOptions',
        'host_ipc' => 'bool',
        'host_network' => 'bool',
        'host_pid' => 'bool',
        'host_ports' => '\CBSi\Kubernetes\Model\V1beta1HostPortRange[]',
        'privileged' => 'bool',
        'read_only_root_filesystem' => 'bool',
        'required_drop_capabilities' => 'string[]',
        'run_as_user' => '\CBSi\Kubernetes\Model\V1beta1RunAsUserStrategyOptions',
        'se_linux' => '\CBSi\Kubernetes\Model\V1beta1SELinuxStrategyOptions',
        'supplemental_groups' => '\CBSi\Kubernetes\Model\V1beta1SupplementalGroupsStrategyOptions',
        'volumes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_capabilities' => null,
        'default_add_capabilities' => null,
        'fs_group' => null,
        'host_ipc' => null,
        'host_network' => null,
        'host_pid' => null,
        'host_ports' => null,
        'privileged' => null,
        'read_only_root_filesystem' => null,
        'required_drop_capabilities' => null,
        'run_as_user' => null,
        'se_linux' => null,
        'supplemental_groups' => null,
        'volumes' => null
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
        'allowed_capabilities' => 'allowedCapabilities',
        'default_add_capabilities' => 'defaultAddCapabilities',
        'fs_group' => 'fsGroup',
        'host_ipc' => 'hostIPC',
        'host_network' => 'hostNetwork',
        'host_pid' => 'hostPID',
        'host_ports' => 'hostPorts',
        'privileged' => 'privileged',
        'read_only_root_filesystem' => 'readOnlyRootFilesystem',
        'required_drop_capabilities' => 'requiredDropCapabilities',
        'run_as_user' => 'runAsUser',
        'se_linux' => 'seLinux',
        'supplemental_groups' => 'supplementalGroups',
        'volumes' => 'volumes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_capabilities' => 'setAllowedCapabilities',
        'default_add_capabilities' => 'setDefaultAddCapabilities',
        'fs_group' => 'setFsGroup',
        'host_ipc' => 'setHostIpc',
        'host_network' => 'setHostNetwork',
        'host_pid' => 'setHostPid',
        'host_ports' => 'setHostPorts',
        'privileged' => 'setPrivileged',
        'read_only_root_filesystem' => 'setReadOnlyRootFilesystem',
        'required_drop_capabilities' => 'setRequiredDropCapabilities',
        'run_as_user' => 'setRunAsUser',
        'se_linux' => 'setSeLinux',
        'supplemental_groups' => 'setSupplementalGroups',
        'volumes' => 'setVolumes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_capabilities' => 'getAllowedCapabilities',
        'default_add_capabilities' => 'getDefaultAddCapabilities',
        'fs_group' => 'getFsGroup',
        'host_ipc' => 'getHostIpc',
        'host_network' => 'getHostNetwork',
        'host_pid' => 'getHostPid',
        'host_ports' => 'getHostPorts',
        'privileged' => 'getPrivileged',
        'read_only_root_filesystem' => 'getReadOnlyRootFilesystem',
        'required_drop_capabilities' => 'getRequiredDropCapabilities',
        'run_as_user' => 'getRunAsUser',
        'se_linux' => 'getSeLinux',
        'supplemental_groups' => 'getSupplementalGroups',
        'volumes' => 'getVolumes'
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
        $this->container['allowed_capabilities'] = isset($data['allowed_capabilities']) ? $data['allowed_capabilities'] : null;
        $this->container['default_add_capabilities'] = isset($data['default_add_capabilities']) ? $data['default_add_capabilities'] : null;
        $this->container['fs_group'] = isset($data['fs_group']) ? $data['fs_group'] : null;
        $this->container['host_ipc'] = isset($data['host_ipc']) ? $data['host_ipc'] : null;
        $this->container['host_network'] = isset($data['host_network']) ? $data['host_network'] : null;
        $this->container['host_pid'] = isset($data['host_pid']) ? $data['host_pid'] : null;
        $this->container['host_ports'] = isset($data['host_ports']) ? $data['host_ports'] : null;
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : null;
        $this->container['read_only_root_filesystem'] = isset($data['read_only_root_filesystem']) ? $data['read_only_root_filesystem'] : null;
        $this->container['required_drop_capabilities'] = isset($data['required_drop_capabilities']) ? $data['required_drop_capabilities'] : null;
        $this->container['run_as_user'] = isset($data['run_as_user']) ? $data['run_as_user'] : null;
        $this->container['se_linux'] = isset($data['se_linux']) ? $data['se_linux'] : null;
        $this->container['supplemental_groups'] = isset($data['supplemental_groups']) ? $data['supplemental_groups'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fs_group'] === null) {
            $invalidProperties[] = "'fs_group' can't be null";
        }
        if ($this->container['run_as_user'] === null) {
            $invalidProperties[] = "'run_as_user' can't be null";
        }
        if ($this->container['se_linux'] === null) {
            $invalidProperties[] = "'se_linux' can't be null";
        }
        if ($this->container['supplemental_groups'] === null) {
            $invalidProperties[] = "'supplemental_groups' can't be null";
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

        if ($this->container['fs_group'] === null) {
            return false;
        }
        if ($this->container['run_as_user'] === null) {
            return false;
        }
        if ($this->container['se_linux'] === null) {
            return false;
        }
        if ($this->container['supplemental_groups'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets allowed_capabilities
     *
     * @return string[]
     */
    public function getAllowedCapabilities()
    {
        return $this->container['allowed_capabilities'];
    }

    /**
     * Sets allowed_capabilities
     *
     * @param string[] $allowed_capabilities AllowedCapabilities is a list of capabilities that can be requested to add to the container. Capabilities in this field may be added at the pod author's discretion. You must not list a capability in both AllowedCapabilities and RequiredDropCapabilities.
     *
     * @return $this
     */
    public function setAllowedCapabilities($allowed_capabilities)
    {
        $this->container['allowed_capabilities'] = $allowed_capabilities;

        return $this;
    }

    /**
     * Gets default_add_capabilities
     *
     * @return string[]
     */
    public function getDefaultAddCapabilities()
    {
        return $this->container['default_add_capabilities'];
    }

    /**
     * Sets default_add_capabilities
     *
     * @param string[] $default_add_capabilities DefaultAddCapabilities is the default set of capabilities that will be added to the container unless the pod spec specifically drops the capability.  You may not list a capabiility in both DefaultAddCapabilities and RequiredDropCapabilities.
     *
     * @return $this
     */
    public function setDefaultAddCapabilities($default_add_capabilities)
    {
        $this->container['default_add_capabilities'] = $default_add_capabilities;

        return $this;
    }

    /**
     * Gets fs_group
     *
     * @return \CBSi\Kubernetes\Model\V1beta1FSGroupStrategyOptions
     */
    public function getFsGroup()
    {
        return $this->container['fs_group'];
    }

    /**
     * Sets fs_group
     *
     * @param \CBSi\Kubernetes\Model\V1beta1FSGroupStrategyOptions $fs_group FSGroup is the strategy that will dictate what fs group is used by the SecurityContext.
     *
     * @return $this
     */
    public function setFsGroup($fs_group)
    {
        $this->container['fs_group'] = $fs_group;

        return $this;
    }

    /**
     * Gets host_ipc
     *
     * @return bool
     */
    public function getHostIpc()
    {
        return $this->container['host_ipc'];
    }

    /**
     * Sets host_ipc
     *
     * @param bool $host_ipc hostIPC determines if the policy allows the use of HostIPC in the pod spec.
     *
     * @return $this
     */
    public function setHostIpc($host_ipc)
    {
        $this->container['host_ipc'] = $host_ipc;

        return $this;
    }

    /**
     * Gets host_network
     *
     * @return bool
     */
    public function getHostNetwork()
    {
        return $this->container['host_network'];
    }

    /**
     * Sets host_network
     *
     * @param bool $host_network hostNetwork determines if the policy allows the use of HostNetwork in the pod spec.
     *
     * @return $this
     */
    public function setHostNetwork($host_network)
    {
        $this->container['host_network'] = $host_network;

        return $this;
    }

    /**
     * Gets host_pid
     *
     * @return bool
     */
    public function getHostPid()
    {
        return $this->container['host_pid'];
    }

    /**
     * Sets host_pid
     *
     * @param bool $host_pid hostPID determines if the policy allows the use of HostPID in the pod spec.
     *
     * @return $this
     */
    public function setHostPid($host_pid)
    {
        $this->container['host_pid'] = $host_pid;

        return $this;
    }

    /**
     * Gets host_ports
     *
     * @return \CBSi\Kubernetes\Model\V1beta1HostPortRange[]
     */
    public function getHostPorts()
    {
        return $this->container['host_ports'];
    }

    /**
     * Sets host_ports
     *
     * @param \CBSi\Kubernetes\Model\V1beta1HostPortRange[] $host_ports hostPorts determines which host port ranges are allowed to be exposed.
     *
     * @return $this
     */
    public function setHostPorts($host_ports)
    {
        $this->container['host_ports'] = $host_ports;

        return $this;
    }

    /**
     * Gets privileged
     *
     * @return bool
     */
    public function getPrivileged()
    {
        return $this->container['privileged'];
    }

    /**
     * Sets privileged
     *
     * @param bool $privileged privileged determines if a pod can request to be run as privileged.
     *
     * @return $this
     */
    public function setPrivileged($privileged)
    {
        $this->container['privileged'] = $privileged;

        return $this;
    }

    /**
     * Gets read_only_root_filesystem
     *
     * @return bool
     */
    public function getReadOnlyRootFilesystem()
    {
        return $this->container['read_only_root_filesystem'];
    }

    /**
     * Sets read_only_root_filesystem
     *
     * @param bool $read_only_root_filesystem ReadOnlyRootFilesystem when set to true will force containers to run with a read only root file system.  If the container specifically requests to run with a non-read only root file system the PSP should deny the pod. If set to false the container may run with a read only root file system if it wishes but it will not be forced to.
     *
     * @return $this
     */
    public function setReadOnlyRootFilesystem($read_only_root_filesystem)
    {
        $this->container['read_only_root_filesystem'] = $read_only_root_filesystem;

        return $this;
    }

    /**
     * Gets required_drop_capabilities
     *
     * @return string[]
     */
    public function getRequiredDropCapabilities()
    {
        return $this->container['required_drop_capabilities'];
    }

    /**
     * Sets required_drop_capabilities
     *
     * @param string[] $required_drop_capabilities RequiredDropCapabilities are the capabilities that will be dropped from the container.  These are required to be dropped and cannot be added.
     *
     * @return $this
     */
    public function setRequiredDropCapabilities($required_drop_capabilities)
    {
        $this->container['required_drop_capabilities'] = $required_drop_capabilities;

        return $this;
    }

    /**
     * Gets run_as_user
     *
     * @return \CBSi\Kubernetes\Model\V1beta1RunAsUserStrategyOptions
     */
    public function getRunAsUser()
    {
        return $this->container['run_as_user'];
    }

    /**
     * Sets run_as_user
     *
     * @param \CBSi\Kubernetes\Model\V1beta1RunAsUserStrategyOptions $run_as_user runAsUser is the strategy that will dictate the allowable RunAsUser values that may be set.
     *
     * @return $this
     */
    public function setRunAsUser($run_as_user)
    {
        $this->container['run_as_user'] = $run_as_user;

        return $this;
    }

    /**
     * Gets se_linux
     *
     * @return \CBSi\Kubernetes\Model\V1beta1SELinuxStrategyOptions
     */
    public function getSeLinux()
    {
        return $this->container['se_linux'];
    }

    /**
     * Sets se_linux
     *
     * @param \CBSi\Kubernetes\Model\V1beta1SELinuxStrategyOptions $se_linux seLinux is the strategy that will dictate the allowable labels that may be set.
     *
     * @return $this
     */
    public function setSeLinux($se_linux)
    {
        $this->container['se_linux'] = $se_linux;

        return $this;
    }

    /**
     * Gets supplemental_groups
     *
     * @return \CBSi\Kubernetes\Model\V1beta1SupplementalGroupsStrategyOptions
     */
    public function getSupplementalGroups()
    {
        return $this->container['supplemental_groups'];
    }

    /**
     * Sets supplemental_groups
     *
     * @param \CBSi\Kubernetes\Model\V1beta1SupplementalGroupsStrategyOptions $supplemental_groups SupplementalGroups is the strategy that will dictate what supplemental groups are used by the SecurityContext.
     *
     * @return $this
     */
    public function setSupplementalGroups($supplemental_groups)
    {
        $this->container['supplemental_groups'] = $supplemental_groups;

        return $this;
    }

    /**
     * Gets volumes
     *
     * @return string[]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     *
     * @param string[] $volumes volumes is a white list of allowed volume plugins.  Empty indicates that all plugins may be used.
     *
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

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


