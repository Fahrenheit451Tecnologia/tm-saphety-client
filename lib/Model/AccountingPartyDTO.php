<?php
/**
 * AccountingPartyDTO
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
 * OpenAPI spec version: 1_7_0_4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * AccountingPartyDTO Class Doc Comment
 *
 * @category    Class
 * @description Data structure which can describe the issuer or customer
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountingPartyDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AccountingPartyDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_assigned_account_id' => 'string',
        'tele_fax' => 'string',
        'document_contacts' => '\Swagger\Client\Model\DocumentContactDTO[]',
        'gln' => 'string',
        'legal_type' => 'string',
        'identification' => '\Swagger\Client\Model\IdentificationDTO',
        'name' => 'string',
        'website_url' => 'string',
        'email' => 'string',
        'address' => '\Swagger\Client\Model\AddressDTO',
        'tax_scheme' => 'string',
        'person' => '\Swagger\Client\Model\PersonDTO',
        'fiscal_category' => 'string',
        'industry' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_assigned_account_id' => null,
        'tele_fax' => null,
        'document_contacts' => null,
        'gln' => null,
        'legal_type' => null,
        'identification' => null,
        'name' => null,
        'website_url' => null,
        'email' => null,
        'address' => null,
        'tax_scheme' => null,
        'person' => null,
        'fiscal_category' => null,
        'industry' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'customer_assigned_account_id' => 'CustomerAssignedAccountID',
        'tele_fax' => 'TeleFax',
        'document_contacts' => 'DocumentContacts',
        'gln' => 'Gln',
        'legal_type' => 'LegalType',
        'identification' => 'Identification',
        'name' => 'Name',
        'website_url' => 'WebsiteUrl',
        'email' => 'Email',
        'address' => 'Address',
        'tax_scheme' => 'TaxScheme',
        'person' => 'Person',
        'fiscal_category' => 'FiscalCategory',
        'industry' => 'Industry'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customer_assigned_account_id' => 'setCustomerAssignedAccountId',
        'tele_fax' => 'setTeleFax',
        'document_contacts' => 'setDocumentContacts',
        'gln' => 'setGln',
        'legal_type' => 'setLegalType',
        'identification' => 'setIdentification',
        'name' => 'setName',
        'website_url' => 'setWebsiteUrl',
        'email' => 'setEmail',
        'address' => 'setAddress',
        'tax_scheme' => 'setTaxScheme',
        'person' => 'setPerson',
        'fiscal_category' => 'setFiscalCategory',
        'industry' => 'setIndustry'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customer_assigned_account_id' => 'getCustomerAssignedAccountId',
        'tele_fax' => 'getTeleFax',
        'document_contacts' => 'getDocumentContacts',
        'gln' => 'getGln',
        'legal_type' => 'getLegalType',
        'identification' => 'getIdentification',
        'name' => 'getName',
        'website_url' => 'getWebsiteUrl',
        'email' => 'getEmail',
        'address' => 'getAddress',
        'tax_scheme' => 'getTaxScheme',
        'person' => 'getPerson',
        'fiscal_category' => 'getFiscalCategory',
        'industry' => 'getIndustry'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['customer_assigned_account_id'] = isset($data['customer_assigned_account_id']) ? $data['customer_assigned_account_id'] : null;
        $this->container['tele_fax'] = isset($data['tele_fax']) ? $data['tele_fax'] : null;
        $this->container['document_contacts'] = isset($data['document_contacts']) ? $data['document_contacts'] : null;
        $this->container['gln'] = isset($data['gln']) ? $data['gln'] : null;
        $this->container['legal_type'] = isset($data['legal_type']) ? $data['legal_type'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['tax_scheme'] = isset($data['tax_scheme']) ? $data['tax_scheme'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['fiscal_category'] = isset($data['fiscal_category']) ? $data['fiscal_category'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['legal_type'] === null) {
            $invalid_properties[] = "'legal_type' can't be null";
        }
        if ($this->container['identification'] === null) {
            $invalid_properties[] = "'identification' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalid_properties[] = "'address' can't be null";
        }
        if ($this->container['fiscal_category'] === null) {
            $invalid_properties[] = "'fiscal_category' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['legal_type'] === null) {
            return false;
        }
        if ($this->container['identification'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['address'] === null) {
            return false;
        }
        if ($this->container['fiscal_category'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets customer_assigned_account_id
     * @return string
     */
    public function getCustomerAssignedAccountId()
    {
        return $this->container['customer_assigned_account_id'];
    }

    /**
     * Sets customer_assigned_account_id
     * @param string $customer_assigned_account_id Id assigned by the Customer
     * @return $this
     */
    public function setCustomerAssignedAccountId($customer_assigned_account_id)
    {
        $this->container['customer_assigned_account_id'] = $customer_assigned_account_id;

        return $this;
    }

    /**
     * Gets tele_fax
     * @return string
     */
    public function getTeleFax()
    {
        return $this->container['tele_fax'];
    }

    /**
     * Sets tele_fax
     * @param string $tele_fax TeleFax
     * @return $this
     */
    public function setTeleFax($tele_fax)
    {
        $this->container['tele_fax'] = $tele_fax;

        return $this;
    }

    /**
     * Gets document_contacts
     * @return \Swagger\Client\Model\DocumentContactDTO[]
     */
    public function getDocumentContacts()
    {
        return $this->container['document_contacts'];
    }

    /**
     * Sets document_contacts
     * @param \Swagger\Client\Model\DocumentContactDTO[] $document_contacts Party contacts related to  current document
     * @return $this
     */
    public function setDocumentContacts($document_contacts)
    {
        $this->container['document_contacts'] = $document_contacts;

        return $this;
    }

    /**
     * Gets gln
     * @return string
     */
    public function getGln()
    {
        return $this->container['gln'];
    }

    /**
     * Sets gln
     * @param string $gln Party GLN
     * @return $this
     */
    public function setGln($gln)
    {
        $this->container['gln'] = $gln;

        return $this;
    }

    /**
     * Gets legal_type
     * @return string
     */
    public function getLegalType()
    {
        return $this->container['legal_type'];
    }

    /**
     * Sets legal_type
     * @param string $legal_type Document type identification. The value must be one of this: ['Natural', 'Legal']
     * @return $this
     */
    public function setLegalType($legal_type)
    {
        $this->container['legal_type'] = $legal_type;

        return $this;
    }

    /**
     * Gets identification
     * @return \Swagger\Client\Model\IdentificationDTO
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     * @param \Swagger\Client\Model\IdentificationDTO $identification Identification
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of commercial establishment
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets website_url
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     * @param string $website_url Website url
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email address
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address
     * @return \Swagger\Client\Model\AddressDTO
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Swagger\Client\Model\AddressDTO $address Data required to detail address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets tax_scheme
     * @return string
     */
    public function getTaxScheme()
    {
        return $this->container['tax_scheme'];
    }

    /**
     * Sets tax_scheme
     * @param string $tax_scheme Describe the regime. The value must be one of this: [1, 2, 3] whom 1= General, 2=Simplex, 3=NotApplicable
     * @return $this
     */
    public function setTaxScheme($tax_scheme)
    {
        $this->container['tax_scheme'] = $tax_scheme;

        return $this;
    }

    /**
     * Gets person
     * @return \Swagger\Client\Model\PersonDTO
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     * @param \Swagger\Client\Model\PersonDTO $person Person. It is necessary when LegalType=Natural
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets fiscal_category
     * @return string
     */
    public function getFiscalCategory()
    {
        return $this->container['fiscal_category'];
    }

    /**
     * Sets fiscal_category
     * @param string $fiscal_category Fiscal Category
     * @return $this
     */
    public function setFiscalCategory($fiscal_category)
    {
        $this->container['fiscal_category'] = $fiscal_category;

        return $this;
    }

    /**
     * Gets industry
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     * @param string $industry Industry
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

