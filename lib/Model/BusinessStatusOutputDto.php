<?php
/**
 * BusinessStatusOutputDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eInvoice Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1_8_1_16
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * BusinessStatusOutputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessStatusOutputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessStatusOutputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status_date' => '\DateTime',
        'status_type' => 'string',
        'status_reason' => 'string',
        'status_updated_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status_date' => 'date-time',
        'status_type' => null,
        'status_reason' => null,
        'status_updated_by' => null
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
        'status_date' => 'StatusDate',
        'status_type' => 'StatusType',
        'status_reason' => 'StatusReason',
        'status_updated_by' => 'StatusUpdatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status_date' => 'setStatusDate',
        'status_type' => 'setStatusType',
        'status_reason' => 'setStatusReason',
        'status_updated_by' => 'setStatusUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status_date' => 'getStatusDate',
        'status_type' => 'getStatusType',
        'status_reason' => 'getStatusReason',
        'status_updated_by' => 'getStatusUpdatedBy'
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
        $this->container['status_date'] = isset($data['status_date']) ? $data['status_date'] : null;
        $this->container['status_type'] = isset($data['status_type']) ? $data['status_type'] : null;
        $this->container['status_reason'] = isset($data['status_reason']) ? $data['status_reason'] : null;
        $this->container['status_updated_by'] = isset($data['status_updated_by']) ? $data['status_updated_by'] : null;
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
     * Gets status_date
     *
     * @return \DateTime
     */
    public function getStatusDate()
    {
        return $this->container['status_date'];
    }

    /**
     * Sets status_date
     *
     * @param \DateTime $status_date status_date
     *
     * @return $this
     */
    public function setStatusDate($status_date)
    {
        $this->container['status_date'] = $status_date;

        return $this;
    }

    /**
     * Gets status_type
     *
     * @return string
     */
    public function getStatusType()
    {
        return $this->container['status_type'];
    }

    /**
     * Sets status_type
     *
     * @param string $status_type status_type
     *
     * @return $this
     */
    public function setStatusType($status_type)
    {
        $this->container['status_type'] = $status_type;

        return $this;
    }

    /**
     * Gets status_reason
     *
     * @return string
     */
    public function getStatusReason()
    {
        return $this->container['status_reason'];
    }

    /**
     * Sets status_reason
     *
     * @param string $status_reason status_reason
     *
     * @return $this
     */
    public function setStatusReason($status_reason)
    {
        $this->container['status_reason'] = $status_reason;

        return $this;
    }

    /**
     * Gets status_updated_by
     *
     * @return string
     */
    public function getStatusUpdatedBy()
    {
        return $this->container['status_updated_by'];
    }

    /**
     * Sets status_updated_by
     *
     * @param string $status_updated_by status_updated_by
     *
     * @return $this
     */
    public function setStatusUpdatedBy($status_updated_by)
    {
        $this->container['status_updated_by'] = $status_updated_by;

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

