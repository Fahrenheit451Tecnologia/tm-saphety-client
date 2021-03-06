<?php
/**
 * SearchAuditCriteriaDTO
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
 * SearchAuditCriteriaDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchAuditCriteriaDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchAuditCriteriaDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'virtual_operator' => 'string',
        'creation_date_start' => '\DateTime',
        'creation_date_end' => '\DateTime',
        'event_type' => 'string',
        'result_status' => 'string',
        'username' => 'string',
        'property_value' => 'string',
        'offset' => 'int',
        'number_of_records' => 'int',
        'sort_field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'virtual_operator' => null,
        'creation_date_start' => 'date-time',
        'creation_date_end' => 'date-time',
        'event_type' => null,
        'result_status' => null,
        'username' => null,
        'property_value' => null,
        'offset' => 'int32',
        'number_of_records' => 'int32',
        'sort_field' => null
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
        'id' => 'Id',
        'virtual_operator' => 'VirtualOperator',
        'creation_date_start' => 'CreationDateStart',
        'creation_date_end' => 'CreationDateEnd',
        'event_type' => 'EventType',
        'result_status' => 'ResultStatus',
        'username' => 'Username',
        'property_value' => 'PropertyValue',
        'offset' => 'Offset',
        'number_of_records' => 'NumberOfRecords',
        'sort_field' => 'SortField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'virtual_operator' => 'setVirtualOperator',
        'creation_date_start' => 'setCreationDateStart',
        'creation_date_end' => 'setCreationDateEnd',
        'event_type' => 'setEventType',
        'result_status' => 'setResultStatus',
        'username' => 'setUsername',
        'property_value' => 'setPropertyValue',
        'offset' => 'setOffset',
        'number_of_records' => 'setNumberOfRecords',
        'sort_field' => 'setSortField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'virtual_operator' => 'getVirtualOperator',
        'creation_date_start' => 'getCreationDateStart',
        'creation_date_end' => 'getCreationDateEnd',
        'event_type' => 'getEventType',
        'result_status' => 'getResultStatus',
        'username' => 'getUsername',
        'property_value' => 'getPropertyValue',
        'offset' => 'getOffset',
        'number_of_records' => 'getNumberOfRecords',
        'sort_field' => 'getSortField'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['virtual_operator'] = isset($data['virtual_operator']) ? $data['virtual_operator'] : null;
        $this->container['creation_date_start'] = isset($data['creation_date_start']) ? $data['creation_date_start'] : null;
        $this->container['creation_date_end'] = isset($data['creation_date_end']) ? $data['creation_date_end'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['result_status'] = isset($data['result_status']) ? $data['result_status'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['property_value'] = isset($data['property_value']) ? $data['property_value'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['number_of_records'] = isset($data['number_of_records']) ? $data['number_of_records'] : null;
        $this->container['sort_field'] = isset($data['sort_field']) ? $data['sort_field'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['virtual_operator']) && (strlen($this->container['virtual_operator']) > 60)) {
            $invalidProperties[] = "invalid value for 'virtual_operator', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['event_type']) && (strlen($this->container['event_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'event_type', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['result_status']) && (strlen($this->container['result_status']) > 100)) {
            $invalidProperties[] = "invalid value for 'result_status', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['username']) && (strlen($this->container['username']) > 100)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['property_value']) && (strlen($this->container['property_value']) > 450)) {
            $invalidProperties[] = "invalid value for 'property_value', the character length must be smaller than or equal to 450.";
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

        if (strlen($this->container['virtual_operator']) > 60) {
            return false;
        }
        if (strlen($this->container['event_type']) > 100) {
            return false;
        }
        if (strlen($this->container['result_status']) > 100) {
            return false;
        }
        if (strlen($this->container['username']) > 100) {
            return false;
        }
        if (strlen($this->container['property_value']) > 450) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets virtual_operator
     *
     * @return string
     */
    public function getVirtualOperator()
    {
        return $this->container['virtual_operator'];
    }

    /**
     * Sets virtual_operator
     *
     * @param string $virtual_operator MaxLength: 60
     *
     * @return $this
     */
    public function setVirtualOperator($virtual_operator)
    {
        if (!is_null($virtual_operator) && (strlen($virtual_operator) > 60)) {
            throw new \InvalidArgumentException('invalid length for $virtual_operator when calling SearchAuditCriteriaDTO., must be smaller than or equal to 60.');
        }

        $this->container['virtual_operator'] = $virtual_operator;

        return $this;
    }

    /**
     * Gets creation_date_start
     *
     * @return \DateTime
     */
    public function getCreationDateStart()
    {
        return $this->container['creation_date_start'];
    }

    /**
     * Sets creation_date_start
     *
     * @param \DateTime $creation_date_start creation_date_start
     *
     * @return $this
     */
    public function setCreationDateStart($creation_date_start)
    {
        $this->container['creation_date_start'] = $creation_date_start;

        return $this;
    }

    /**
     * Gets creation_date_end
     *
     * @return \DateTime
     */
    public function getCreationDateEnd()
    {
        return $this->container['creation_date_end'];
    }

    /**
     * Sets creation_date_end
     *
     * @param \DateTime $creation_date_end creation_date_end
     *
     * @return $this
     */
    public function setCreationDateEnd($creation_date_end)
    {
        $this->container['creation_date_end'] = $creation_date_end;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type MaxLength: 100
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        if (!is_null($event_type) && (strlen($event_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $event_type when calling SearchAuditCriteriaDTO., must be smaller than or equal to 100.');
        }

        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets result_status
     *
     * @return string
     */
    public function getResultStatus()
    {
        return $this->container['result_status'];
    }

    /**
     * Sets result_status
     *
     * @param string $result_status MaxLength: 100
     *
     * @return $this
     */
    public function setResultStatus($result_status)
    {
        if (!is_null($result_status) && (strlen($result_status) > 100)) {
            throw new \InvalidArgumentException('invalid length for $result_status when calling SearchAuditCriteriaDTO., must be smaller than or equal to 100.');
        }

        $this->container['result_status'] = $result_status;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username MaxLength: 100
     *
     * @return $this
     */
    public function setUsername($username)
    {
        if (!is_null($username) && (strlen($username) > 100)) {
            throw new \InvalidArgumentException('invalid length for $username when calling SearchAuditCriteriaDTO., must be smaller than or equal to 100.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets property_value
     *
     * @return string
     */
    public function getPropertyValue()
    {
        return $this->container['property_value'];
    }

    /**
     * Sets property_value
     *
     * @param string $property_value MaxLength: 450
     *
     * @return $this
     */
    public function setPropertyValue($property_value)
    {
        if (!is_null($property_value) && (strlen($property_value) > 450)) {
            throw new \InvalidArgumentException('invalid length for $property_value when calling SearchAuditCriteriaDTO., must be smaller than or equal to 450.');
        }

        $this->container['property_value'] = $property_value;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets number_of_records
     *
     * @return int
     */
    public function getNumberOfRecords()
    {
        return $this->container['number_of_records'];
    }

    /**
     * Sets number_of_records
     *
     * @param int $number_of_records number_of_records
     *
     * @return $this
     */
    public function setNumberOfRecords($number_of_records)
    {
        $this->container['number_of_records'] = $number_of_records;

        return $this;
    }

    /**
     * Gets sort_field
     *
     * @return string
     */
    public function getSortField()
    {
        return $this->container['sort_field'];
    }

    /**
     * Sets sort_field
     *
     * @param string $sort_field sort_field
     *
     * @return $this
     */
    public function setSortField($sort_field)
    {
        $this->container['sort_field'] = $sort_field;

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


