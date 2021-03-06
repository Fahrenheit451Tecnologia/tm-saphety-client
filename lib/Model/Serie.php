<?php
/**
 * Serie
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
 * Serie Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Serie implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Serie';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_id' => 'string',
        'name' => 'string',
        'authorization_number' => 'string',
        'external_key' => 'string',
        'prefix' => 'string',
        'valid_from' => '\DateTime',
        'valid_to' => '\DateTime',
        'start_value' => 'int',
        'end_value' => 'int',
        'efective_value' => 'int',
        'status' => 'string',
        'document_type' => 'string',
        'issue_mode' => 'string',
        'technical_key' => 'string',
        'auto_increment' => 'bool',
        'company' => '\Swagger\Client\Model\Company',
        'creation_date' => '\DateTime',
        'last_update_date' => '\DateTime',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_id' => 'uuid',
        'name' => null,
        'authorization_number' => null,
        'external_key' => null,
        'prefix' => null,
        'valid_from' => 'date-time',
        'valid_to' => 'date-time',
        'start_value' => 'int64',
        'end_value' => 'int64',
        'efective_value' => 'int64',
        'status' => null,
        'document_type' => null,
        'issue_mode' => null,
        'technical_key' => null,
        'auto_increment' => null,
        'company' => null,
        'creation_date' => 'date-time',
        'last_update_date' => 'date-time',
        'id' => 'uuid'
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
        'company_id' => 'CompanyId',
        'name' => 'Name',
        'authorization_number' => 'AuthorizationNumber',
        'external_key' => 'ExternalKey',
        'prefix' => 'Prefix',
        'valid_from' => 'ValidFrom',
        'valid_to' => 'ValidTo',
        'start_value' => 'StartValue',
        'end_value' => 'EndValue',
        'efective_value' => 'EfectiveValue',
        'status' => 'Status',
        'document_type' => 'DocumentType',
        'issue_mode' => 'IssueMode',
        'technical_key' => 'TechnicalKey',
        'auto_increment' => 'AutoIncrement',
        'company' => 'Company',
        'creation_date' => 'CreationDate',
        'last_update_date' => 'LastUpdateDate',
        'id' => 'Id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'name' => 'setName',
        'authorization_number' => 'setAuthorizationNumber',
        'external_key' => 'setExternalKey',
        'prefix' => 'setPrefix',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo',
        'start_value' => 'setStartValue',
        'end_value' => 'setEndValue',
        'efective_value' => 'setEfectiveValue',
        'status' => 'setStatus',
        'document_type' => 'setDocumentType',
        'issue_mode' => 'setIssueMode',
        'technical_key' => 'setTechnicalKey',
        'auto_increment' => 'setAutoIncrement',
        'company' => 'setCompany',
        'creation_date' => 'setCreationDate',
        'last_update_date' => 'setLastUpdateDate',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'name' => 'getName',
        'authorization_number' => 'getAuthorizationNumber',
        'external_key' => 'getExternalKey',
        'prefix' => 'getPrefix',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo',
        'start_value' => 'getStartValue',
        'end_value' => 'getEndValue',
        'efective_value' => 'getEfectiveValue',
        'status' => 'getStatus',
        'document_type' => 'getDocumentType',
        'issue_mode' => 'getIssueMode',
        'technical_key' => 'getTechnicalKey',
        'auto_increment' => 'getAutoIncrement',
        'company' => 'getCompany',
        'creation_date' => 'getCreationDate',
        'last_update_date' => 'getLastUpdateDate',
        'id' => 'getId'
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

    const STATUS_INACTIVE = 'Inactive';
    const STATUS_ACTIVE = 'Active';
    const DOCUMENT_TYPE_SALES_INVOICE = 'SalesInvoice';
    const DOCUMENT_TYPE_CREDIT_NOTE = 'CreditNote';
    const DOCUMENT_TYPE_DEBIT_NOTE = 'DebitNote';
    const DOCUMENT_TYPE_SALES_INVOICE_CONTINGENCY = 'SalesInvoiceContingency';
    const ISSUE_MODE_ELECTRONIC = 'Electronic';
    const ISSUE_MODE_BY_COMPUTER = 'ByComputer';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INACTIVE,
            self::STATUS_ACTIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_SALES_INVOICE,
            self::DOCUMENT_TYPE_CREDIT_NOTE,
            self::DOCUMENT_TYPE_DEBIT_NOTE,
            self::DOCUMENT_TYPE_SALES_INVOICE_CONTINGENCY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIssueModeAllowableValues()
    {
        return [
            self::ISSUE_MODE_ELECTRONIC,
            self::ISSUE_MODE_BY_COMPUTER,
        ];
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['authorization_number'] = isset($data['authorization_number']) ? $data['authorization_number'] : null;
        $this->container['external_key'] = isset($data['external_key']) ? $data['external_key'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
        $this->container['start_value'] = isset($data['start_value']) ? $data['start_value'] : null;
        $this->container['end_value'] = isset($data['end_value']) ? $data['end_value'] : null;
        $this->container['efective_value'] = isset($data['efective_value']) ? $data['efective_value'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['issue_mode'] = isset($data['issue_mode']) ? $data['issue_mode'] : null;
        $this->container['technical_key'] = isset($data['technical_key']) ? $data['technical_key'] : null;
        $this->container['auto_increment'] = isset($data['auto_increment']) ? $data['auto_increment'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['last_update_date'] = isset($data['last_update_date']) ? $data['last_update_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['document_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIssueModeAllowableValues();
        if (!in_array($this->container['issue_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'issue_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['document_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getIssueModeAllowableValues();
        if (!in_array($this->container['issue_mode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets authorization_number
     *
     * @return string
     */
    public function getAuthorizationNumber()
    {
        return $this->container['authorization_number'];
    }

    /**
     * Sets authorization_number
     *
     * @param string $authorization_number authorization_number
     *
     * @return $this
     */
    public function setAuthorizationNumber($authorization_number)
    {
        $this->container['authorization_number'] = $authorization_number;

        return $this;
    }

    /**
     * Gets external_key
     *
     * @return string
     */
    public function getExternalKey()
    {
        return $this->container['external_key'];
    }

    /**
     * Sets external_key
     *
     * @param string $external_key external_key
     *
     * @return $this
     */
    public function setExternalKey($external_key)
    {
        $this->container['external_key'] = $external_key;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix prefix
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \DateTime $valid_from valid_from
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param \DateTime $valid_to valid_to
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets start_value
     *
     * @return int
     */
    public function getStartValue()
    {
        return $this->container['start_value'];
    }

    /**
     * Sets start_value
     *
     * @param int $start_value start_value
     *
     * @return $this
     */
    public function setStartValue($start_value)
    {
        $this->container['start_value'] = $start_value;

        return $this;
    }

    /**
     * Gets end_value
     *
     * @return int
     */
    public function getEndValue()
    {
        return $this->container['end_value'];
    }

    /**
     * Sets end_value
     *
     * @param int $end_value end_value
     *
     * @return $this
     */
    public function setEndValue($end_value)
    {
        $this->container['end_value'] = $end_value;

        return $this;
    }

    /**
     * Gets efective_value
     *
     * @return int
     */
    public function getEfectiveValue()
    {
        return $this->container['efective_value'];
    }

    /**
     * Sets efective_value
     *
     * @param int $efective_value efective_value
     *
     * @return $this
     */
    public function setEfectiveValue($efective_value)
    {
        $this->container['efective_value'] = $efective_value;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($document_type) && !in_array($document_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets issue_mode
     *
     * @return string
     */
    public function getIssueMode()
    {
        return $this->container['issue_mode'];
    }

    /**
     * Sets issue_mode
     *
     * @param string $issue_mode issue_mode
     *
     * @return $this
     */
    public function setIssueMode($issue_mode)
    {
        $allowedValues = $this->getIssueModeAllowableValues();
        if (!is_null($issue_mode) && !in_array($issue_mode, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'issue_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['issue_mode'] = $issue_mode;

        return $this;
    }

    /**
     * Gets technical_key
     *
     * @return string
     */
    public function getTechnicalKey()
    {
        return $this->container['technical_key'];
    }

    /**
     * Sets technical_key
     *
     * @param string $technical_key technical_key
     *
     * @return $this
     */
    public function setTechnicalKey($technical_key)
    {
        $this->container['technical_key'] = $technical_key;

        return $this;
    }

    /**
     * Gets auto_increment
     *
     * @return bool
     */
    public function getAutoIncrement()
    {
        return $this->container['auto_increment'];
    }

    /**
     * Sets auto_increment
     *
     * @param bool $auto_increment auto_increment
     *
     * @return $this
     */
    public function setAutoIncrement($auto_increment)
    {
        $this->container['auto_increment'] = $auto_increment;

        return $this;
    }

    /**
     * Gets company
     *
     * @return \Swagger\Client\Model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Swagger\Client\Model\Company $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

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
     * Gets last_update_date
     *
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
        return $this->container['last_update_date'];
    }

    /**
     * Sets last_update_date
     *
     * @param \DateTime $last_update_date last_update_date
     *
     * @return $this
     */
    public function setLastUpdateDate($last_update_date)
    {
        $this->container['last_update_date'] = $last_update_date;

        return $this;
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


