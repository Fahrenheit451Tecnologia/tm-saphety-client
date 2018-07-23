<?php
/**
 * Template
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
 * Template Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Template implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Template';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'document_type' => 'string',
        'document_sub_type' => 'string',
        'template_type' => 'string',
        'content' => 'string',
        'is_active' => 'bool',
        'company_id' => 'string',
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
        'name' => null,
        'document_type' => null,
        'document_sub_type' => null,
        'template_type' => null,
        'content' => 'byte',
        'is_active' => null,
        'company_id' => 'uuid',
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
        'name' => 'Name',
        'document_type' => 'DocumentType',
        'document_sub_type' => 'DocumentSubType',
        'template_type' => 'TemplateType',
        'content' => 'Content',
        'is_active' => 'IsActive',
        'company_id' => 'CompanyId',
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
        'name' => 'setName',
        'document_type' => 'setDocumentType',
        'document_sub_type' => 'setDocumentSubType',
        'template_type' => 'setTemplateType',
        'content' => 'setContent',
        'is_active' => 'setIsActive',
        'company_id' => 'setCompanyId',
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
        'name' => 'getName',
        'document_type' => 'getDocumentType',
        'document_sub_type' => 'getDocumentSubType',
        'template_type' => 'getTemplateType',
        'content' => 'getContent',
        'is_active' => 'getIsActive',
        'company_id' => 'getCompanyId',
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

    const DOCUMENT_TYPE_SALES_INVOICE = 'SalesInvoice';
    const DOCUMENT_TYPE_CREDIT_NOTE = 'CreditNote';
    const DOCUMENT_TYPE_DEBIT_NOTE = 'DebitNote';
    const TEMPLATE_TYPE_PDF = 'Pdf';
    const TEMPLATE_TYPE_EMAIL = 'Email';
    

    
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
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTemplateTypeAllowableValues()
    {
        return [
            self::TEMPLATE_TYPE_PDF,
            self::TEMPLATE_TYPE_EMAIL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_sub_type'] = isset($data['document_sub_type']) ? $data['document_sub_type'] : null;
        $this->container['template_type'] = isset($data['template_type']) ? $data['template_type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
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

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['document_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTemplateTypeAllowableValues();
        if (!in_array($this->container['template_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'template_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['content']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['content'])) {
            $invalidProperties[] = "invalid value for 'content', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['document_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTemplateTypeAllowableValues();
        if (!in_array($this->container['template_type'], $allowedValues)) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['content'])) {
            return false;
        }
        return true;
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
     * Gets template_type
     *
     * @return string
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param string $template_type template_type
     *
     * @return $this
     */
    public function setTemplateType($template_type)
    {
        $allowedValues = $this->getTemplateTypeAllowableValues();
        if (!is_null($template_type) && !in_array($template_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'template_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['template_type'] = $template_type;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {

        if (!is_null($content) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $content))) {
            throw new \InvalidArgumentException("invalid value for $content when calling Template., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
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


