<?php
/**
 * DocumentDTO
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
 * DocumentDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'document_number' => 'string',
        'document_type' => 'string',
        'document_sub_type' => 'string',
        'creation_date' => 'string',
        'document_date' => 'string',
        'due_date' => 'string',
        'currency' => 'string',
        'origin_name' => 'string',
        'destination_name' => 'string',
        'business_status' => 'string',
        'business_status_reason' => 'string',
        'communication_status' => 'string',
        'total_amount' => 'double',
        'gross_amount' => 'double',
        'tax_amount' => 'double',
        'issuer_identification_document_number' => 'string',
        'issuer_identification_document_type' => 'string',
        'issuer_identification_country_code' => 'string',
        'correlation_document_id' => 'string',
        'lines' => '\Swagger\Client\Model\LineDTO[]',
        'pdf' => '\Swagger\Client\Model\DocumentContentFileDTO',
        'ubl' => '\Swagger\Client\Model\DocumentContentFileDTO',
        'client_fields' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'document_number' => null,
        'document_type' => null,
        'document_sub_type' => null,
        'creation_date' => null,
        'document_date' => null,
        'due_date' => null,
        'currency' => null,
        'origin_name' => null,
        'destination_name' => null,
        'business_status' => null,
        'business_status_reason' => null,
        'communication_status' => null,
        'total_amount' => 'double',
        'gross_amount' => 'double',
        'tax_amount' => 'double',
        'issuer_identification_document_number' => null,
        'issuer_identification_document_type' => null,
        'issuer_identification_country_code' => null,
        'correlation_document_id' => null,
        'lines' => null,
        'pdf' => null,
        'ubl' => null,
        'client_fields' => null
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
        'document_number' => 'DocumentNumber',
        'document_type' => 'DocumentType',
        'document_sub_type' => 'DocumentSubType',
        'creation_date' => 'CreationDate',
        'document_date' => 'DocumentDate',
        'due_date' => 'DueDate',
        'currency' => 'Currency',
        'origin_name' => 'OriginName',
        'destination_name' => 'DestinationName',
        'business_status' => 'BusinessStatus',
        'business_status_reason' => 'BusinessStatusReason',
        'communication_status' => 'CommunicationStatus',
        'total_amount' => 'TotalAmount',
        'gross_amount' => 'GrossAmount',
        'tax_amount' => 'TaxAmount',
        'issuer_identification_document_number' => 'IssuerIdentificationDocumentNumber',
        'issuer_identification_document_type' => 'IssuerIdentificationDocumentType',
        'issuer_identification_country_code' => 'IssuerIdentificationCountryCode',
        'correlation_document_id' => 'CorrelationDocumentId',
        'lines' => 'Lines',
        'pdf' => 'Pdf',
        'ubl' => 'Ubl',
        'client_fields' => 'ClientFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_number' => 'setDocumentNumber',
        'document_type' => 'setDocumentType',
        'document_sub_type' => 'setDocumentSubType',
        'creation_date' => 'setCreationDate',
        'document_date' => 'setDocumentDate',
        'due_date' => 'setDueDate',
        'currency' => 'setCurrency',
        'origin_name' => 'setOriginName',
        'destination_name' => 'setDestinationName',
        'business_status' => 'setBusinessStatus',
        'business_status_reason' => 'setBusinessStatusReason',
        'communication_status' => 'setCommunicationStatus',
        'total_amount' => 'setTotalAmount',
        'gross_amount' => 'setGrossAmount',
        'tax_amount' => 'setTaxAmount',
        'issuer_identification_document_number' => 'setIssuerIdentificationDocumentNumber',
        'issuer_identification_document_type' => 'setIssuerIdentificationDocumentType',
        'issuer_identification_country_code' => 'setIssuerIdentificationCountryCode',
        'correlation_document_id' => 'setCorrelationDocumentId',
        'lines' => 'setLines',
        'pdf' => 'setPdf',
        'ubl' => 'setUbl',
        'client_fields' => 'setClientFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_number' => 'getDocumentNumber',
        'document_type' => 'getDocumentType',
        'document_sub_type' => 'getDocumentSubType',
        'creation_date' => 'getCreationDate',
        'document_date' => 'getDocumentDate',
        'due_date' => 'getDueDate',
        'currency' => 'getCurrency',
        'origin_name' => 'getOriginName',
        'destination_name' => 'getDestinationName',
        'business_status' => 'getBusinessStatus',
        'business_status_reason' => 'getBusinessStatusReason',
        'communication_status' => 'getCommunicationStatus',
        'total_amount' => 'getTotalAmount',
        'gross_amount' => 'getGrossAmount',
        'tax_amount' => 'getTaxAmount',
        'issuer_identification_document_number' => 'getIssuerIdentificationDocumentNumber',
        'issuer_identification_document_type' => 'getIssuerIdentificationDocumentType',
        'issuer_identification_country_code' => 'getIssuerIdentificationCountryCode',
        'correlation_document_id' => 'getCorrelationDocumentId',
        'lines' => 'getLines',
        'pdf' => 'getPdf',
        'ubl' => 'getUbl',
        'client_fields' => 'getClientFields'
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
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_sub_type'] = isset($data['document_sub_type']) ? $data['document_sub_type'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['document_date'] = isset($data['document_date']) ? $data['document_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['origin_name'] = isset($data['origin_name']) ? $data['origin_name'] : null;
        $this->container['destination_name'] = isset($data['destination_name']) ? $data['destination_name'] : null;
        $this->container['business_status'] = isset($data['business_status']) ? $data['business_status'] : null;
        $this->container['business_status_reason'] = isset($data['business_status_reason']) ? $data['business_status_reason'] : null;
        $this->container['communication_status'] = isset($data['communication_status']) ? $data['communication_status'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['gross_amount'] = isset($data['gross_amount']) ? $data['gross_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['issuer_identification_document_number'] = isset($data['issuer_identification_document_number']) ? $data['issuer_identification_document_number'] : null;
        $this->container['issuer_identification_document_type'] = isset($data['issuer_identification_document_type']) ? $data['issuer_identification_document_type'] : null;
        $this->container['issuer_identification_country_code'] = isset($data['issuer_identification_country_code']) ? $data['issuer_identification_country_code'] : null;
        $this->container['correlation_document_id'] = isset($data['correlation_document_id']) ? $data['correlation_document_id'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['ubl'] = isset($data['ubl']) ? $data['ubl'] : null;
        $this->container['client_fields'] = isset($data['client_fields']) ? $data['client_fields'] : null;
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
     * Gets document_sub_type
     *
     * @return string
     */
    public function getDocumentSubType()
    {
        return $this->container['document_sub_type'];
    }

    /**
     * Sets document_sub_type
     *
     * @param string $document_sub_type document_sub_type
     *
     * @return $this
     */
    public function setDocumentSubType($document_sub_type)
    {
        $this->container['document_sub_type'] = $document_sub_type;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets document_date
     *
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param string $document_date document_date
     *
     * @return $this
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

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
     * Gets business_status_reason
     *
     * @return string
     */
    public function getBusinessStatusReason()
    {
        return $this->container['business_status_reason'];
    }

    /**
     * Sets business_status_reason
     *
     * @param string $business_status_reason business_status_reason
     *
     * @return $this
     */
    public function setBusinessStatusReason($business_status_reason)
    {
        $this->container['business_status_reason'] = $business_status_reason;

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
     * Gets gross_amount
     *
     * @return double
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param double $gross_amount gross_amount
     *
     * @return $this
     */
    public function setGrossAmount($gross_amount)
    {
        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets issuer_identification_document_number
     *
     * @return string
     */
    public function getIssuerIdentificationDocumentNumber()
    {
        return $this->container['issuer_identification_document_number'];
    }

    /**
     * Sets issuer_identification_document_number
     *
     * @param string $issuer_identification_document_number issuer_identification_document_number
     *
     * @return $this
     */
    public function setIssuerIdentificationDocumentNumber($issuer_identification_document_number)
    {
        $this->container['issuer_identification_document_number'] = $issuer_identification_document_number;

        return $this;
    }

    /**
     * Gets issuer_identification_document_type
     *
     * @return string
     */
    public function getIssuerIdentificationDocumentType()
    {
        return $this->container['issuer_identification_document_type'];
    }

    /**
     * Sets issuer_identification_document_type
     *
     * @param string $issuer_identification_document_type issuer_identification_document_type
     *
     * @return $this
     */
    public function setIssuerIdentificationDocumentType($issuer_identification_document_type)
    {
        $this->container['issuer_identification_document_type'] = $issuer_identification_document_type;

        return $this;
    }

    /**
     * Gets issuer_identification_country_code
     *
     * @return string
     */
    public function getIssuerIdentificationCountryCode()
    {
        return $this->container['issuer_identification_country_code'];
    }

    /**
     * Sets issuer_identification_country_code
     *
     * @param string $issuer_identification_country_code issuer_identification_country_code
     *
     * @return $this
     */
    public function setIssuerIdentificationCountryCode($issuer_identification_country_code)
    {
        $this->container['issuer_identification_country_code'] = $issuer_identification_country_code;

        return $this;
    }

    /**
     * Gets correlation_document_id
     *
     * @return string
     */
    public function getCorrelationDocumentId()
    {
        return $this->container['correlation_document_id'];
    }

    /**
     * Sets correlation_document_id
     *
     * @param string $correlation_document_id correlation_document_id
     *
     * @return $this
     */
    public function setCorrelationDocumentId($correlation_document_id)
    {
        $this->container['correlation_document_id'] = $correlation_document_id;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Swagger\Client\Model\LineDTO[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Swagger\Client\Model\LineDTO[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets pdf
     *
     * @return \Swagger\Client\Model\DocumentContentFileDTO
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     *
     * @param \Swagger\Client\Model\DocumentContentFileDTO $pdf pdf
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

        return $this;
    }

    /**
     * Gets ubl
     *
     * @return \Swagger\Client\Model\DocumentContentFileDTO
     */
    public function getUbl()
    {
        return $this->container['ubl'];
    }

    /**
     * Sets ubl
     *
     * @param \Swagger\Client\Model\DocumentContentFileDTO $ubl ubl
     *
     * @return $this
     */
    public function setUbl($ubl)
    {
        $this->container['ubl'] = $ubl;

        return $this;
    }

    /**
     * Gets client_fields
     *
     * @return map[string,string]
     */
    public function getClientFields()
    {
        return $this->container['client_fields'];
    }

    /**
     * Sets client_fields
     *
     * @param map[string,string] $client_fields client_fields
     *
     * @return $this
     */
    public function setClientFields($client_fields)
    {
        $this->container['client_fields'] = $client_fields;

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


