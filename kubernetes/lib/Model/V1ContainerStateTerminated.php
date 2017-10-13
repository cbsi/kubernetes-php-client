<?php
/**
 * V1ContainerStateTerminated
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
 * V1ContainerStateTerminated Class Doc Comment
 *
 * @category Class
 * @description ContainerStateTerminated is a terminated state of a container.
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1ContainerStateTerminated implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.ContainerStateTerminated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'container_id' => 'string',
        'exit_code' => 'int',
        'finished_at' => '\DateTime',
        'message' => 'string',
        'reason' => 'string',
        'signal' => 'int',
        'started_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'container_id' => null,
        'exit_code' => 'int32',
        'finished_at' => 'date-time',
        'message' => null,
        'reason' => null,
        'signal' => 'int32',
        'started_at' => 'date-time'
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
        'container_id' => 'containerID',
        'exit_code' => 'exitCode',
        'finished_at' => 'finishedAt',
        'message' => 'message',
        'reason' => 'reason',
        'signal' => 'signal',
        'started_at' => 'startedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'container_id' => 'setContainerId',
        'exit_code' => 'setExitCode',
        'finished_at' => 'setFinishedAt',
        'message' => 'setMessage',
        'reason' => 'setReason',
        'signal' => 'setSignal',
        'started_at' => 'setStartedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_id' => 'getContainerId',
        'exit_code' => 'getExitCode',
        'finished_at' => 'getFinishedAt',
        'message' => 'getMessage',
        'reason' => 'getReason',
        'signal' => 'getSignal',
        'started_at' => 'getStartedAt'
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
        $this->container['container_id'] = isset($data['container_id']) ? $data['container_id'] : null;
        $this->container['exit_code'] = isset($data['exit_code']) ? $data['exit_code'] : null;
        $this->container['finished_at'] = isset($data['finished_at']) ? $data['finished_at'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['signal'] = isset($data['signal']) ? $data['signal'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['exit_code'] === null) {
            $invalidProperties[] = "'exit_code' can't be null";
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

        if ($this->container['exit_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets container_id
     *
     * @return string
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     *
     * @param string $container_id Container's ID in the format 'docker://<container_id>'
     *
     * @return $this
     */
    public function setContainerId($container_id)
    {
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets exit_code
     *
     * @return int
     */
    public function getExitCode()
    {
        return $this->container['exit_code'];
    }

    /**
     * Sets exit_code
     *
     * @param int $exit_code Exit status from the last termination of the container
     *
     * @return $this
     */
    public function setExitCode($exit_code)
    {
        $this->container['exit_code'] = $exit_code;

        return $this;
    }

    /**
     * Gets finished_at
     *
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->container['finished_at'];
    }

    /**
     * Sets finished_at
     *
     * @param \DateTime $finished_at Time at which the container last terminated
     *
     * @return $this
     */
    public function setFinishedAt($finished_at)
    {
        $this->container['finished_at'] = $finished_at;

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
     * @param string $message Message regarding the last termination of the container
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * @param string $reason (brief) reason from the last termination of the container
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets signal
     *
     * @return int
     */
    public function getSignal()
    {
        return $this->container['signal'];
    }

    /**
     * Sets signal
     *
     * @param int $signal Signal from the last termination of the container
     *
     * @return $this
     */
    public function setSignal($signal)
    {
        $this->container['signal'] = $signal;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at Time at which previous execution of the container started
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

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


