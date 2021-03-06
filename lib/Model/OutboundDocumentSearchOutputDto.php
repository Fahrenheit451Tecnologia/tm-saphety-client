<?php
/**
 * OutboundDocumentSearchOutputDto
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
 * OutboundDocumentSearchOutputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OutboundDocumentSearchOutputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OutboundDocumentSearchOutputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'document_type' => 'string',
        'document_number' => 'string',
        'origin_name' => 'string',
        'destination_name' => 'string',
        'document_date' => '\DateTime',
        'creation_date' => '\DateTime',
        'business_status' => 'string',
        'communication_status' => 'string',
        'communication_status_comments' => 'string',
        'main_notification_email_status' => 'string',
        'main_notification_email_status_reason' => 'string',
        'currency' => 'string',
        'total_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'document_type' => null,
        'document_number' => null,
        'origin_name' => null,
        'destination_name' => null,
        'document_date' => 'date-time',
        'creation_date' => 'date-time',
        'business_status' => null,
        'communication_status' => null,
        'communication_status_comments' => null,
        'main_notification_email_status' => null,
        'main_notification_email_status_reason' => null,
        'currency' => null,
        'total_amount' => 'double'
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
        'document_type' => 'DocumentType',
        'document_number' => 'DocumentNumber',
        'origin_name' => 'OriginName',
        'destination_name' => 'DestinationName',
        'document_date' => 'DocumentDate',
        'creation_date' => 'CreationDate',
        'business_status' => 'BusinessStatus',
        'communication_status' => 'CommunicationStatus',
        'communication_status_comments' => 'CommunicationStatusComments',
        'main_notification_email_status' => 'MainNotificationEmailStatus',
        'main_notification_email_status_reason' => 'MainNotificationEmailStatusReason',
        'currency' => 'Currency',
        'total_amount' => 'TotalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_type' => 'setDocumentType',
        'document_number' => 'setDocumentNumber',
        'origin_name' => 'setOriginName',
        'destination_name' => 'setDestinationName',
        'document_date' => 'setDocumentDate',
        'creation_date' => 'setCreationDate',
        'business_status' => 'setBusinessStatus',
        'communication_status' => 'setCommunicationStatus',
        'communication_status_comments' => 'setCommunicationStatusComments',
        'main_notification_email_status' => 'setMainNotificationEmailStatus',
        'main_notification_email_status_reason' => 'setMainNotificationEmailStatusReason',
        'currency' => 'setCurrency',
        'total_amount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_type' => 'getDocumentType',
        'document_number' => 'getDocumentNumber',
        'origin_name' => 'getOriginName',
        'destination_name' => 'getDestinationName',
        'document_date' => 'getDocumentDate',
        'creation_date' => 'getCreationDate',
        'business_status' => 'getBusinessStatus',
        'communication_status' => 'getCommunicationStatus',
        'communication_status_comments' => 'getCommunicationStatusComments',
        'main_notification_email_status' => 'getMainNotificationEmailStatus',
        'main_notification_email_status_reason' => 'getMainNotificationEmailStatusReason',
        'currency' => 'getCurrency',
        'total_amount' => 'getTotalAmount'
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
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['origin_name'] = isset($data['origin_name']) ? $data['origin_name'] : null;
        $this->container['destination_name'] = isset($data['destination_name']) ? $data['destination_name'] : null;
        $this->container['document_date'] = isset($data['document_date']) ? $data['document_date'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['business_status'] = isset($data['business_status']) ? $data['business_status'] : null;
        $this->container['communication_status'] = isset($data['communication_status']) ? $data['communication_status'] : null;
        $this->container['communication_status_comments'] = isset($data['communication_status_comments']) ? $data['communication_status_comments'] : null;
        $this->container['main_notification_email_status'] = isset($data['main_notification_email_status']) ? $data['main_notification_email_status'] : null;
        $this->container['main_notification_email_status_reason'] = isset($data['main_notification_email_status_reason']) ? $data['main_notification_email_status_reason'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
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
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number document_number
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets origin_name
     *
     * @return string
     */
    public function getOriginName()
    {
        return $this->container['origin_name'];
    }

    /**
     * Sets origin_name
     *
     * @param string $origin_name origin_name
     *
     * @return $this
     */
    public function setOriginName($origin_name)
    {
        $this->container['origin_name'] = $origin_name;

        return $this;
    }

    /**
     * Gets destination_name
     *
     * @return string
     */
    public function getDestinationName()
    {
        return $this->container['destination_name'];
    }

    /**
     * Sets destination_name
     *
     * @param string $destination_name destination_name
     *
     * @return $this
     */
    public function setDestinationName($destination_name)
    {
        $this->container['destination_name'] = $destination_name;

        return $this;
    }

    /**
     * Gets document_date
     *
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param \DateTime $document_date document_date
     *
     * @return $this
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets business_status
     *
     * @return string
     */
    public function getBusinessStatus()
    {
        return $this->container['business_status'];
    }

    /**
     * Sets business_status
     *
     * @param string $business_status business_status
     *
     * @return $this
     */
    public function setBusinessStatus($business_status)
    {
        $this->container['business_status'] = $business_status;

        return $this;
    }

    /**
     * Gets communication_status
     *
     * @return string
     */
    public function getCommunicationStatus()
    {
        return $this->container['communication_status'];
    }

    /**
     * Sets communication_status
     *
     * @param string $communication_status communication_status
     *
     * @return $this
     */
    public function setCommunicationStatus($communication_status)
    {
        $this->container['communication_status'] = $communication_status;

        return $this;
    }

    /**
     * Gets communication_status_comments
     *
     * @return string
     */
    public function getCommunicationStatusComments()
    {
        return $this->container['communication_status_comments'];
    }

    /**
     * Sets communication_status_comments
     *
     * @param string $communication_status_comments communication_status_comments
     *
     * @return $this
     */
    public function setCommunicationStatusComments($communication_status_comments)
    {
        $this->container['communication_status_comments'] = $communication_status_comments;

        return $this;
    }

    /**
     * Gets main_notification_email_status
     *
     * @return string
     */
    public function getMainNotificationEmailStatus()
    {
        return $this->container['main_notification_email_status'];
    }

    /**
     * Sets main_notification_email_status
     *
     * @param string $main_notification_email_status main_notification_email_status
     *
     * @return $this
     */
    public function setMainNotificationEmailStatus($main_notification_email_status)
    {
        $this->container['main_notification_email_status'] = $main_notification_email_status;

        return $this;
    }

    /**
     * Gets main_notification_email_status_reason
     *
     * @return string
     */
    public function getMainNotificationEmailStatusReason()
    {
        return $this->container['main_notification_email_status_reason'];
    }

    /**
     * Sets main_notification_email_status_reason
     *
     * @param string $main_notification_email_status_reason main_notification_email_status_reason
     *
     * @return $this
     */
    public function setMainNotificationEmailStatusReason($main_notification_email_status_reason)
    {
        $this->container['main_notification_email_status_reason'] = $main_notification_email_status_reason;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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


