<?php
/**
 * CufeInputDto
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
 * CufeInputDto Class Doc Comment
 *
 * @category Class
 * @description Data to gerenate a CUFE hash according to dian rules
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CufeInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CufeInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'issue_date' => 'string',
        'customer_document_type' => 'string',
        'customer_document_number' => 'string',
        'issuer_nit_number' => 'string',
        'serie_technical_key' => 'string',
        'document_number' => 'string',
        'total_iva' => 'string',
        'total_ipo' => 'string',
        'total_ica' => 'string',
        'total_gross_amount' => 'string',
        'total_payable_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'issue_date' => null,
        'customer_document_type' => null,
        'customer_document_number' => null,
        'issuer_nit_number' => null,
        'serie_technical_key' => null,
        'document_number' => null,
        'total_iva' => null,
        'total_ipo' => null,
        'total_ica' => null,
        'total_gross_amount' => null,
        'total_payable_amount' => null
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
        'issue_date' => 'IssueDate',
        'customer_document_type' => 'CustomerDocumentType',
        'customer_document_number' => 'CustomerDocumentNumber',
        'issuer_nit_number' => 'IssuerNitNumber',
        'serie_technical_key' => 'SerieTechnicalKey',
        'document_number' => 'DocumentNumber',
        'total_iva' => 'TotalIva',
        'total_ipo' => 'TotalIpo',
        'total_ica' => 'TotalIca',
        'total_gross_amount' => 'TotalGrossAmount',
        'total_payable_amount' => 'TotalPayableAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'issue_date' => 'setIssueDate',
        'customer_document_type' => 'setCustomerDocumentType',
        'customer_document_number' => 'setCustomerDocumentNumber',
        'issuer_nit_number' => 'setIssuerNitNumber',
        'serie_technical_key' => 'setSerieTechnicalKey',
        'document_number' => 'setDocumentNumber',
        'total_iva' => 'setTotalIva',
        'total_ipo' => 'setTotalIpo',
        'total_ica' => 'setTotalIca',
        'total_gross_amount' => 'setTotalGrossAmount',
        'total_payable_amount' => 'setTotalPayableAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'issue_date' => 'getIssueDate',
        'customer_document_type' => 'getCustomerDocumentType',
        'customer_document_number' => 'getCustomerDocumentNumber',
        'issuer_nit_number' => 'getIssuerNitNumber',
        'serie_technical_key' => 'getSerieTechnicalKey',
        'document_number' => 'getDocumentNumber',
        'total_iva' => 'getTotalIva',
        'total_ipo' => 'getTotalIpo',
        'total_ica' => 'getTotalIca',
        'total_gross_amount' => 'getTotalGrossAmount',
        'total_payable_amount' => 'getTotalPayableAmount'
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
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['customer_document_type'] = isset($data['customer_document_type']) ? $data['customer_document_type'] : null;
        $this->container['customer_document_number'] = isset($data['customer_document_number']) ? $data['customer_document_number'] : null;
        $this->container['issuer_nit_number'] = isset($data['issuer_nit_number']) ? $data['issuer_nit_number'] : null;
        $this->container['serie_technical_key'] = isset($data['serie_technical_key']) ? $data['serie_technical_key'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['total_iva'] = isset($data['total_iva']) ? $data['total_iva'] : null;
        $this->container['total_ipo'] = isset($data['total_ipo']) ? $data['total_ipo'] : null;
        $this->container['total_ica'] = isset($data['total_ica']) ? $data['total_ica'] : null;
        $this->container['total_gross_amount'] = isset($data['total_gross_amount']) ? $data['total_gross_amount'] : null;
        $this->container['total_payable_amount'] = isset($data['total_payable_amount']) ? $data['total_payable_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['customer_document_type'] === null) {
            $invalidProperties[] = "'customer_document_type' can't be null";
        }
        if ($this->container['customer_document_number'] === null) {
            $invalidProperties[] = "'customer_document_number' can't be null";
        }
        if ($this->container['issuer_nit_number'] === null) {
            $invalidProperties[] = "'issuer_nit_number' can't be null";
        }
        if ($this->container['serie_technical_key'] === null) {
            $invalidProperties[] = "'serie_technical_key' can't be null";
        }
        if ($this->container['document_number'] === null) {
            $invalidProperties[] = "'document_number' can't be null";
        }
        if ($this->container['total_iva'] === null) {
            $invalidProperties[] = "'total_iva' can't be null";
        }
        if ($this->container['total_ipo'] === null) {
            $invalidProperties[] = "'total_ipo' can't be null";
        }
        if ($this->container['total_ica'] === null) {
            $invalidProperties[] = "'total_ica' can't be null";
        }
        if ($this->container['total_gross_amount'] === null) {
            $invalidProperties[] = "'total_gross_amount' can't be null";
        }
        if ($this->container['total_payable_amount'] === null) {
            $invalidProperties[] = "'total_payable_amount' can't be null";
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

        if ($this->container['issue_date'] === null) {
            return false;
        }
        if ($this->container['customer_document_type'] === null) {
            return false;
        }
        if ($this->container['customer_document_number'] === null) {
            return false;
        }
        if ($this->container['issuer_nit_number'] === null) {
            return false;
        }
        if ($this->container['serie_technical_key'] === null) {
            return false;
        }
        if ($this->container['document_number'] === null) {
            return false;
        }
        if ($this->container['total_iva'] === null) {
            return false;
        }
        if ($this->container['total_ipo'] === null) {
            return false;
        }
        if ($this->container['total_ica'] === null) {
            return false;
        }
        if ($this->container['total_gross_amount'] === null) {
            return false;
        }
        if ($this->container['total_payable_amount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets issue_date
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string $issue_date Document issue date
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets customer_document_type
     *
     * @return string
     */
    public function getCustomerDocumentType()
    {
        return $this->container['customer_document_type'];
    }

    /**
     * Sets customer_document_type
     *
     * @param string $customer_document_type Customer document type according the DIAN documentation
     *
     * @return $this
     */
    public function setCustomerDocumentType($customer_document_type)
    {
        $this->container['customer_document_type'] = $customer_document_type;

        return $this;
    }

    /**
     * Gets customer_document_number
     *
     * @return string
     */
    public function getCustomerDocumentNumber()
    {
        return $this->container['customer_document_number'];
    }

    /**
     * Sets customer_document_number
     *
     * @param string $customer_document_number Customer document number
     *
     * @return $this
     */
    public function setCustomerDocumentNumber($customer_document_number)
    {
        $this->container['customer_document_number'] = $customer_document_number;

        return $this;
    }

    /**
     * Gets issuer_nit_number
     *
     * @return string
     */
    public function getIssuerNitNumber()
    {
        return $this->container['issuer_nit_number'];
    }

    /**
     * Sets issuer_nit_number
     *
     * @param string $issuer_nit_number Issuer Nit number
     *
     * @return $this
     */
    public function setIssuerNitNumber($issuer_nit_number)
    {
        $this->container['issuer_nit_number'] = $issuer_nit_number;

        return $this;
    }

    /**
     * Gets serie_technical_key
     *
     * @return string
     */
    public function getSerieTechnicalKey()
    {
        return $this->container['serie_technical_key'];
    }

    /**
     * Sets serie_technical_key
     *
     * @param string $serie_technical_key Serie technical key
     *
     * @return $this
     */
    public function setSerieTechnicalKey($serie_technical_key)
    {
        $this->container['serie_technical_key'] = $serie_technical_key;

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
     * @param string $document_number Document number
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets total_iva
     *
     * @return string
     */
    public function getTotalIva()
    {
        return $this->container['total_iva'];
    }

    /**
     * Sets total_iva
     *
     * @param string $total_iva Sum of IVAs tax amount
     *
     * @return $this
     */
    public function setTotalIva($total_iva)
    {
        $this->container['total_iva'] = $total_iva;

        return $this;
    }

    /**
     * Gets total_ipo
     *
     * @return string
     */
    public function getTotalIpo()
    {
        return $this->container['total_ipo'];
    }

    /**
     * Sets total_ipo
     *
     * @param string $total_ipo Sum of IPOs tax amount
     *
     * @return $this
     */
    public function setTotalIpo($total_ipo)
    {
        $this->container['total_ipo'] = $total_ipo;

        return $this;
    }

    /**
     * Gets total_ica
     *
     * @return string
     */
    public function getTotalIca()
    {
        return $this->container['total_ica'];
    }

    /**
     * Sets total_ica
     *
     * @param string $total_ica Sum of ICAs tax amount
     *
     * @return $this
     */
    public function setTotalIca($total_ica)
    {
        $this->container['total_ica'] = $total_ica;

        return $this;
    }

    /**
     * Gets total_gross_amount
     *
     * @return string
     */
    public function getTotalGrossAmount()
    {
        return $this->container['total_gross_amount'];
    }

    /**
     * Sets total_gross_amount
     *
     * @param string $total_gross_amount Total document gross amount
     *
     * @return $this
     */
    public function setTotalGrossAmount($total_gross_amount)
    {
        $this->container['total_gross_amount'] = $total_gross_amount;

        return $this;
    }

    /**
     * Gets total_payable_amount
     *
     * @return string
     */
    public function getTotalPayableAmount()
    {
        return $this->container['total_payable_amount'];
    }

    /**
     * Sets total_payable_amount
     *
     * @param string $total_payable_amount Total document payable amount
     *
     * @return $this
     */
    public function setTotalPayableAmount($total_payable_amount)
    {
        $this->container['total_payable_amount'] = $total_payable_amount;

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


