<?php
/**
 * CompanyOutputDto
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
 * CompanyOutputDto Class Doc Comment
 *
 * @category Class
 * @description Company
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyOutputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyOutputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timezone_code' => 'string',
        'retention_type' => 'string',
        'activities_description' => 'string',
        'is_outbound_integrated' => 'string',
        'has_inbound_profile' => 'string',
        'is_inbound_integrated' => 'string',
        'tax_information' => 'string',
        'financial_support_email' => 'string',
        'medias' => '\Swagger\Client\Model\CompanyMediaOutputDto[]',
        'inbound_configuration' => '\Swagger\Client\Model\CompanyInboundConfigurationOutputDto',
        'settings' => '\Swagger\Client\Model\CompanySettingOutputDto[]',
        'id' => 'string',
        'telephone' => 'string',
        'legal_type' => 'string',
        'identification' => '\Swagger\Client\Model\IdentificationOutputDto',
        'website_url' => 'string',
        'email' => 'string',
        'name' => 'string',
        'address' => '\Swagger\Client\Model\AddressOutputDto',
        'tax_scheme' => 'string',
        'person' => '\Swagger\Client\Model\PersonOutputDto',
        'fiscal_category' => 'string',
        'industry' => 'string',
        'language_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timezone_code' => null,
        'retention_type' => null,
        'activities_description' => null,
        'is_outbound_integrated' => null,
        'has_inbound_profile' => null,
        'is_inbound_integrated' => null,
        'tax_information' => null,
        'financial_support_email' => null,
        'medias' => null,
        'inbound_configuration' => null,
        'settings' => null,
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
        'timezone_code' => 'TimezoneCode',
        'retention_type' => 'RetentionType',
        'activities_description' => 'ActivitiesDescription',
        'is_outbound_integrated' => 'IsOutboundIntegrated',
        'has_inbound_profile' => 'HasInboundProfile',
        'is_inbound_integrated' => 'IsInboundIntegrated',
        'tax_information' => 'TaxInformation',
        'financial_support_email' => 'FinancialSupportEmail',
        'medias' => 'Medias',
        'inbound_configuration' => 'InboundConfiguration',
        'settings' => 'Settings',
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
     *
     * @var string[]
     */
    protected static $setters = [
        'timezone_code' => 'setTimezoneCode',
        'retention_type' => 'setRetentionType',
        'activities_description' => 'setActivitiesDescription',
        'is_outbound_integrated' => 'setIsOutboundIntegrated',
        'has_inbound_profile' => 'setHasInboundProfile',
        'is_inbound_integrated' => 'setIsInboundIntegrated',
        'tax_information' => 'setTaxInformation',
        'financial_support_email' => 'setFinancialSupportEmail',
        'medias' => 'setMedias',
        'inbound_configuration' => 'setInboundConfiguration',
        'settings' => 'setSettings',
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
     *
     * @var string[]
     */
    protected static $getters = [
        'timezone_code' => 'getTimezoneCode',
        'retention_type' => 'getRetentionType',
        'activities_description' => 'getActivitiesDescription',
        'is_outbound_integrated' => 'getIsOutboundIntegrated',
        'has_inbound_profile' => 'getHasInboundProfile',
        'is_inbound_integrated' => 'getIsInboundIntegrated',
        'tax_information' => 'getTaxInformation',
        'financial_support_email' => 'getFinancialSupportEmail',
        'medias' => 'getMedias',
        'inbound_configuration' => 'getInboundConfiguration',
        'settings' => 'getSettings',
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
        $this->container['timezone_code'] = isset($data['timezone_code']) ? $data['timezone_code'] : null;
        $this->container['retention_type'] = isset($data['retention_type']) ? $data['retention_type'] : null;
        $this->container['activities_description'] = isset($data['activities_description']) ? $data['activities_description'] : null;
        $this->container['is_outbound_integrated'] = isset($data['is_outbound_integrated']) ? $data['is_outbound_integrated'] : null;
        $this->container['has_inbound_profile'] = isset($data['has_inbound_profile']) ? $data['has_inbound_profile'] : null;
        $this->container['is_inbound_integrated'] = isset($data['is_inbound_integrated']) ? $data['is_inbound_integrated'] : null;
        $this->container['tax_information'] = isset($data['tax_information']) ? $data['tax_information'] : null;
        $this->container['financial_support_email'] = isset($data['financial_support_email']) ? $data['financial_support_email'] : null;
        $this->container['medias'] = isset($data['medias']) ? $data['medias'] : null;
        $this->container['inbound_configuration'] = isset($data['inbound_configuration']) ? $data['inbound_configuration'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
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
     * Gets timezone_code
     *
     * @return string
     */
    public function getTimezoneCode()
    {
        return $this->container['timezone_code'];
    }

    /**
     * Sets timezone_code
     *
     * @param string $timezone_code Timezone
     *
     * @return $this
     */
    public function setTimezoneCode($timezone_code)
    {
        $this->container['timezone_code'] = $timezone_code;

        return $this;
    }

    /**
     * Gets retention_type
     *
     * @return string
     */
    public function getRetentionType()
    {
        return $this->container['retention_type'];
    }

    /**
     * Sets retention_type
     *
     * @param string $retention_type RetentionType
     *
     * @return $this
     */
    public function setRetentionType($retention_type)
    {
        $this->container['retention_type'] = $retention_type;

        return $this;
    }

    /**
     * Gets activities_description
     *
     * @return string
     */
    public function getActivitiesDescription()
    {
        return $this->container['activities_description'];
    }

    /**
     * Sets activities_description
     *
     * @param string $activities_description ActivitiesDescription
     *
     * @return $this
     */
    public function setActivitiesDescription($activities_description)
    {
        $this->container['activities_description'] = $activities_description;

        return $this;
    }

    /**
     * Gets is_outbound_integrated
     *
     * @return string
     */
    public function getIsOutboundIntegrated()
    {
        return $this->container['is_outbound_integrated'];
    }

    /**
     * Sets is_outbound_integrated
     *
     * @param string $is_outbound_integrated IsOutboundIntegrated
     *
     * @return $this
     */
    public function setIsOutboundIntegrated($is_outbound_integrated)
    {
        $this->container['is_outbound_integrated'] = $is_outbound_integrated;

        return $this;
    }

    /**
     * Gets has_inbound_profile
     *
     * @return string
     */
    public function getHasInboundProfile()
    {
        return $this->container['has_inbound_profile'];
    }

    /**
     * Sets has_inbound_profile
     *
     * @param string $has_inbound_profile HasInboundProfile
     *
     * @return $this
     */
    public function setHasInboundProfile($has_inbound_profile)
    {
        $this->container['has_inbound_profile'] = $has_inbound_profile;

        return $this;
    }

    /**
     * Gets is_inbound_integrated
     *
     * @return string
     */
    public function getIsInboundIntegrated()
    {
        return $this->container['is_inbound_integrated'];
    }

    /**
     * Sets is_inbound_integrated
     *
     * @param string $is_inbound_integrated IsInboundIntegrated
     *
     * @return $this
     */
    public function setIsInboundIntegrated($is_inbound_integrated)
    {
        $this->container['is_inbound_integrated'] = $is_inbound_integrated;

        return $this;
    }

    /**
     * Gets tax_information
     *
     * @return string
     */
    public function getTaxInformation()
    {
        return $this->container['tax_information'];
    }

    /**
     * Sets tax_information
     *
     * @param string $tax_information TaxInformation
     *
     * @return $this
     */
    public function setTaxInformation($tax_information)
    {
        $this->container['tax_information'] = $tax_information;

        return $this;
    }

    /**
     * Gets financial_support_email
     *
     * @return string
     */
    public function getFinancialSupportEmail()
    {
        return $this->container['financial_support_email'];
    }

    /**
     * Sets financial_support_email
     *
     * @param string $financial_support_email Email to be used to \"reply\" and email body when sending notification emails
     *
     * @return $this
     */
    public function setFinancialSupportEmail($financial_support_email)
    {
        $this->container['financial_support_email'] = $financial_support_email;

        return $this;
    }

    /**
     * Gets medias
     *
     * @return \Swagger\Client\Model\CompanyMediaOutputDto[]
     */
    public function getMedias()
    {
        return $this->container['medias'];
    }

    /**
     * Sets medias
     *
     * @param \Swagger\Client\Model\CompanyMediaOutputDto[] $medias Medias
     *
     * @return $this
     */
    public function setMedias($medias)
    {
        $this->container['medias'] = $medias;

        return $this;
    }

    /**
     * Gets inbound_configuration
     *
     * @return \Swagger\Client\Model\CompanyInboundConfigurationOutputDto
     */
    public function getInboundConfiguration()
    {
        return $this->container['inbound_configuration'];
    }

    /**
     * Sets inbound_configuration
     *
     * @param \Swagger\Client\Model\CompanyInboundConfigurationOutputDto $inbound_configuration Inbound configuration
     *
     * @return $this
     */
    public function setInboundConfiguration($inbound_configuration)
    {
        $this->container['inbound_configuration'] = $inbound_configuration;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Swagger\Client\Model\CompanySettingOutputDto[]
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Swagger\Client\Model\CompanySettingOutputDto[] $settings Settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets legal_type
     *
     * @return string
     */
    public function getLegalType()
    {
        return $this->container['legal_type'];
    }

    /**
     * Sets legal_type
     *
     * @param string $legal_type legal_type
     *
     * @return $this
     */
    public function setLegalType($legal_type)
    {
        $this->container['legal_type'] = $legal_type;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return \Swagger\Client\Model\IdentificationOutputDto
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param \Swagger\Client\Model\IdentificationOutputDto $identification identification
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url website_url
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets address
     *
     * @return \Swagger\Client\Model\AddressOutputDto
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\AddressOutputDto $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets tax_scheme
     *
     * @return string
     */
    public function getTaxScheme()
    {
        return $this->container['tax_scheme'];
    }

    /**
     * Sets tax_scheme
     *
     * @param string $tax_scheme tax_scheme
     *
     * @return $this
     */
    public function setTaxScheme($tax_scheme)
    {
        $this->container['tax_scheme'] = $tax_scheme;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \Swagger\Client\Model\PersonOutputDto
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \Swagger\Client\Model\PersonOutputDto $person person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets fiscal_category
     *
     * @return string
     */
    public function getFiscalCategory()
    {
        return $this->container['fiscal_category'];
    }

    /**
     * Sets fiscal_category
     *
     * @param string $fiscal_category fiscal_category
     *
     * @return $this
     */
    public function setFiscalCategory($fiscal_category)
    {
        $this->container['fiscal_category'] = $fiscal_category;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code language_code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

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


