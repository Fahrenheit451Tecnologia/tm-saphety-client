<?php
/**
 * CompanyDTO
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
 * CompanyDTO Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanyDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CompanyDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timezone_code' => 'string',
        'retention_type' => 'string',
        'activities_description' => 'string',
        'is_integrated' => 'string',
        'tax_information' => 'string',
        'medias' => '\Swagger\Client\Model\CompanyMediaDTO[]',
        'id' => 'string',
        'telephone' => 'string',
        'legal_type' => 'string',
        'identification' => '\Swagger\Client\Model\IdentificationDTO',
        'website_url' => 'string',
        'email' => 'string',
        'name' => 'string',
        'address' => '\Swagger\Client\Model\AddressDTO',
        'tax_scheme' => 'string',
        'person' => '\Swagger\Client\Model\PersonDTO',
        'fiscal_category' => 'string',
        'industry' => 'string',
        'language_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timezone_code' => null,
        'retention_type' => null,
        'activities_description' => null,
        'is_integrated' => null,
        'tax_information' => null,
        'medias' => null,
        'id' => 'uuid',
        'telephone' => null,
        'legal_type' => null,
        'identification' => null,
        'website_url' => null,
        'email' => null,
        'name' => null,
        'address' => null,
        'tax_scheme' => null,
        'person' => null,
        'fiscal_category' => null,
        'industry' => null,
        'language_code' => null
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
        'timezone_code' => 'TimezoneCode',
        'retention_type' => 'RetentionType',
        'activities_description' => 'ActivitiesDescription',
        'is_integrated' => 'IsIntegrated',
        'tax_information' => 'TaxInformation',
        'medias' => 'Medias',
        'id' => 'Id',
        'telephone' => 'Telephone',
        'legal_type' => 'LegalType',
        'identification' => 'Identification',
        'website_url' => 'WebsiteUrl',
        'email' => 'Email',
        'name' => 'Name',
        'address' => 'Address',
        'tax_scheme' => 'TaxScheme',
        'person' => 'Person',
        'fiscal_category' => 'FiscalCategory',
        'industry' => 'Industry',
        'language_code' => 'LanguageCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'timezone_code' => 'setTimezoneCode',
        'retention_type' => 'setRetentionType',
        'activities_description' => 'setActivitiesDescription',
        'is_integrated' => 'setIsIntegrated',
        'tax_information' => 'setTaxInformation',
        'medias' => 'setMedias',
        'id' => 'setId',
        'telephone' => 'setTelephone',
        'legal_type' => 'setLegalType',
        'identification' => 'setIdentification',
        'website_url' => 'setWebsiteUrl',
        'email' => 'setEmail',
        'name' => 'setName',
        'address' => 'setAddress',
        'tax_scheme' => 'setTaxScheme',
        'person' => 'setPerson',
        'fiscal_category' => 'setFiscalCategory',
        'industry' => 'setIndustry',
        'language_code' => 'setLanguageCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'timezone_code' => 'getTimezoneCode',
        'retention_type' => 'getRetentionType',
        'activities_description' => 'getActivitiesDescription',
        'is_integrated' => 'getIsIntegrated',
        'tax_information' => 'getTaxInformation',
        'medias' => 'getMedias',
        'id' => 'getId',
        'telephone' => 'getTelephone',
        'legal_type' => 'getLegalType',
        'identification' => 'getIdentification',
        'website_url' => 'getWebsiteUrl',
        'email' => 'getEmail',
        'name' => 'getName',
        'address' => 'getAddress',
        'tax_scheme' => 'getTaxScheme',
        'person' => 'getPerson',
        'fiscal_category' => 'getFiscalCategory',
        'industry' => 'getIndustry',
        'language_code' => 'getLanguageCode'
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
        $this->container['timezone_code'] = isset($data['timezone_code']) ? $data['timezone_code'] : null;
        $this->container['retention_type'] = isset($data['retention_type']) ? $data['retention_type'] : null;
        $this->container['activities_description'] = isset($data['activities_description']) ? $data['activities_description'] : null;
        $this->container['is_integrated'] = isset($data['is_integrated']) ? $data['is_integrated'] : null;
        $this->container['tax_information'] = isset($data['tax_information']) ? $data['tax_information'] : null;
        $this->container['medias'] = isset($data['medias']) ? $data['medias'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['legal_type'] = isset($data['legal_type']) ? $data['legal_type'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['tax_scheme'] = isset($data['tax_scheme']) ? $data['tax_scheme'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['fiscal_category'] = isset($data['fiscal_category']) ? $data['fiscal_category'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets timezone_code
     * @return string
     */
    public function getTimezoneCode()
    {
        return $this->container['timezone_code'];
    }

    /**
     * Sets timezone_code
     * @param string $timezone_code
     * @return $this
     */
    public function setTimezoneCode($timezone_code)
    {
        $this->container['timezone_code'] = $timezone_code;

        return $this;
    }

    /**
     * Gets retention_type
     * @return string
     */
    public function getRetentionType()
    {
        return $this->container['retention_type'];
    }

    /**
     * Sets retention_type
     * @param string $retention_type
     * @return $this
     */
    public function setRetentionType($retention_type)
    {
        $this->container['retention_type'] = $retention_type;

        return $this;
    }

    /**
     * Gets activities_description
     * @return string
     */
    public function getActivitiesDescription()
    {
        return $this->container['activities_description'];
    }

    /**
     * Sets activities_description
     * @param string $activities_description
     * @return $this
     */
    public function setActivitiesDescription($activities_description)
    {
        $this->container['activities_description'] = $activities_description;

        return $this;
    }

    /**
     * Gets is_integrated
     * @return string
     */
    public function getIsIntegrated()
    {
        return $this->container['is_integrated'];
    }

    /**
     * Sets is_integrated
     * @param string $is_integrated
     * @return $this
     */
    public function setIsIntegrated($is_integrated)
    {
        $this->container['is_integrated'] = $is_integrated;

        return $this;
    }

    /**
     * Gets tax_information
     * @return string
     */
    public function getTaxInformation()
    {
        return $this->container['tax_information'];
    }

    /**
     * Sets tax_information
     * @param string $tax_information
     * @return $this
     */
    public function setTaxInformation($tax_information)
    {
        $this->container['tax_information'] = $tax_information;

        return $this;
    }

    /**
     * Gets medias
     * @return \Swagger\Client\Model\CompanyMediaDTO[]
     */
    public function getMedias()
    {
        return $this->container['medias'];
    }

    /**
     * Sets medias
     * @param \Swagger\Client\Model\CompanyMediaDTO[] $medias
     * @return $this
     */
    public function setMedias($medias)
    {
        $this->container['medias'] = $medias;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets telephone
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     * @param string $telephone
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

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
     * @param string $legal_type
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
     * @param \Swagger\Client\Model\IdentificationDTO $identification
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

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
     * @param string $website_url
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
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param \Swagger\Client\Model\AddressDTO $address
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
     * @param string $tax_scheme
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
     * @param \Swagger\Client\Model\PersonDTO $person
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
     * @param string $fiscal_category
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
     * @param string $industry
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets language_code
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     * @param string $language_code
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

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

