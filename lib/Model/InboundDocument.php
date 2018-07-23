<?php
/**
 * InboundDocument
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
 * InboundDocument Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InboundDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ubl_version' => 'string',
        'dian_version' => 'string',
        'number' => 'string',
        'cufe' => 'string',
        'issue_date' => '\DateTime',
        'document_type' => 'string',
        'document_sub_type' => 'string',
        'notes' => 'string[]',
        'currency' => '\Swagger\Client\Model\Currency',
        'billing_period' => '\Swagger\Client\Model\Period',
        'public_url' => 'string',
        'issuer_party' => '\Swagger\Client\Model\Issuer',
        'customer_party' => '\Swagger\Client\Model\Company',
        'tax_summary' => '\Swagger\Client\Model\InboundDocumentTaxSummary[]',
        'withholding_tax_summary' => '\Swagger\Client\Model\InboundDocumentWithholdingTaxSummary[]',
        'total' => '\Swagger\Client\Model\LegalMonetaryTotal',
        'issue_mode' => 'string',
        'business_status' => '\Swagger\Client\Model\InboundDocumentBusinessStatus[]',
        'issuer_party_id' => 'string',
        'customer_party_id' => 'string',
        'virtual_operator_id' => 'string',
        'technological_provider_id' => 'string',
        'technological_provider' => '\Swagger\Client\Model\TechnologicalProvider',
        'virtual_operator' => '\Swagger\Client\Model\VirtualOperator',
        'document_files' => '\Swagger\Client\Model\InboundDocumentFile[]',
        'document_attachments' => '\Swagger\Client\Model\InboundDocumentAttachment[]',
        'zip_document_name' => 'string',
        'invalid_signature' => 'bool',
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
        'ubl_version' => null,
        'dian_version' => null,
        'number' => null,
        'cufe' => null,
        'issue_date' => 'date-time',
        'document_type' => null,
        'document_sub_type' => null,
        'notes' => null,
        'currency' => null,
        'billing_period' => null,
        'public_url' => null,
        'issuer_party' => null,
        'customer_party' => null,
        'tax_summary' => null,
        'withholding_tax_summary' => null,
        'total' => null,
        'issue_mode' => null,
        'business_status' => null,
        'issuer_party_id' => 'uuid',
        'customer_party_id' => 'uuid',
        'virtual_operator_id' => 'uuid',
        'technological_provider_id' => 'uuid',
        'technological_provider' => null,
        'virtual_operator' => null,
        'document_files' => null,
        'document_attachments' => null,
        'zip_document_name' => null,
        'invalid_signature' => null,
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
        'ubl_version' => 'UblVersion',
        'dian_version' => 'DianVersion',
        'number' => 'Number',
        'cufe' => 'Cufe',
        'issue_date' => 'IssueDate',
        'document_type' => 'DocumentType',
        'document_sub_type' => 'DocumentSubType',
        'notes' => 'Notes',
        'currency' => 'Currency',
        'billing_period' => 'BillingPeriod',
        'public_url' => 'PublicUrl',
        'issuer_party' => 'IssuerParty',
        'customer_party' => 'CustomerParty',
        'tax_summary' => 'TaxSummary',
        'withholding_tax_summary' => 'WithholdingTaxSummary',
        'total' => 'Total',
        'issue_mode' => 'IssueMode',
        'business_status' => 'BusinessStatus',
        'issuer_party_id' => 'IssuerPartyId',
        'customer_party_id' => 'CustomerPartyId',
        'virtual_operator_id' => 'VirtualOperatorId',
        'technological_provider_id' => 'TechnologicalProviderId',
        'technological_provider' => 'TechnologicalProvider',
        'virtual_operator' => 'VirtualOperator',
        'document_files' => 'DocumentFiles',
        'document_attachments' => 'DocumentAttachments',
        'zip_document_name' => 'ZipDocumentName',
        'invalid_signature' => 'InvalidSignature',
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
        'ubl_version' => 'setUblVersion',
        'dian_version' => 'setDianVersion',
        'number' => 'setNumber',
        'cufe' => 'setCufe',
        'issue_date' => 'setIssueDate',
        'document_type' => 'setDocumentType',
        'document_sub_type' => 'setDocumentSubType',
        'notes' => 'setNotes',
        'currency' => 'setCurrency',
        'billing_period' => 'setBillingPeriod',
        'public_url' => 'setPublicUrl',
        'issuer_party' => 'setIssuerParty',
        'customer_party' => 'setCustomerParty',
        'tax_summary' => 'setTaxSummary',
        'withholding_tax_summary' => 'setWithholdingTaxSummary',
        'total' => 'setTotal',
        'issue_mode' => 'setIssueMode',
        'business_status' => 'setBusinessStatus',
        'issuer_party_id' => 'setIssuerPartyId',
        'customer_party_id' => 'setCustomerPartyId',
        'virtual_operator_id' => 'setVirtualOperatorId',
        'technological_provider_id' => 'setTechnologicalProviderId',
        'technological_provider' => 'setTechnologicalProvider',
        'virtual_operator' => 'setVirtualOperator',
        'document_files' => 'setDocumentFiles',
        'document_attachments' => 'setDocumentAttachments',
        'zip_document_name' => 'setZipDocumentName',
        'invalid_signature' => 'setInvalidSignature',
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
        'ubl_version' => 'getUblVersion',
        'dian_version' => 'getDianVersion',
        'number' => 'getNumber',
        'cufe' => 'getCufe',
        'issue_date' => 'getIssueDate',
        'document_type' => 'getDocumentType',
        'document_sub_type' => 'getDocumentSubType',
        'notes' => 'getNotes',
        'currency' => 'getCurrency',
        'billing_period' => 'getBillingPeriod',
        'public_url' => 'getPublicUrl',
        'issuer_party' => 'getIssuerParty',
        'customer_party' => 'getCustomerParty',
        'tax_summary' => 'getTaxSummary',
        'withholding_tax_summary' => 'getWithholdingTaxSummary',
        'total' => 'getTotal',
        'issue_mode' => 'getIssueMode',
        'business_status' => 'getBusinessStatus',
        'issuer_party_id' => 'getIssuerPartyId',
        'customer_party_id' => 'getCustomerPartyId',
        'virtual_operator_id' => 'getVirtualOperatorId',
        'technological_provider_id' => 'getTechnologicalProviderId',
        'technological_provider' => 'getTechnologicalProvider',
        'virtual_operator' => 'getVirtualOperator',
        'document_files' => 'getDocumentFiles',
        'document_attachments' => 'getDocumentAttachments',
        'zip_document_name' => 'getZipDocumentName',
        'invalid_signature' => 'getInvalidSignature',
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
    const ISSUE_MODE_ELECTRONIC = 'Electronic';
    const ISSUE_MODE_BY_COMPUTER = 'ByComputer';
    

    
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
        $this->container['ubl_version'] = isset($data['ubl_version']) ? $data['ubl_version'] : null;
        $this->container['dian_version'] = isset($data['dian_version']) ? $data['dian_version'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['cufe'] = isset($data['cufe']) ? $data['cufe'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_sub_type'] = isset($data['document_sub_type']) ? $data['document_sub_type'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['billing_period'] = isset($data['billing_period']) ? $data['billing_period'] : null;
        $this->container['public_url'] = isset($data['public_url']) ? $data['public_url'] : null;
        $this->container['issuer_party'] = isset($data['issuer_party']) ? $data['issuer_party'] : null;
        $this->container['customer_party'] = isset($data['customer_party']) ? $data['customer_party'] : null;
        $this->container['tax_summary'] = isset($data['tax_summary']) ? $data['tax_summary'] : null;
        $this->container['withholding_tax_summary'] = isset($data['withholding_tax_summary']) ? $data['withholding_tax_summary'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['issue_mode'] = isset($data['issue_mode']) ? $data['issue_mode'] : null;
        $this->container['business_status'] = isset($data['business_status']) ? $data['business_status'] : null;
        $this->container['issuer_party_id'] = isset($data['issuer_party_id']) ? $data['issuer_party_id'] : null;
        $this->container['customer_party_id'] = isset($data['customer_party_id']) ? $data['customer_party_id'] : null;
        $this->container['virtual_operator_id'] = isset($data['virtual_operator_id']) ? $data['virtual_operator_id'] : null;
        $this->container['technological_provider_id'] = isset($data['technological_provider_id']) ? $data['technological_provider_id'] : null;
        $this->container['technological_provider'] = isset($data['technological_provider']) ? $data['technological_provider'] : null;
        $this->container['virtual_operator'] = isset($data['virtual_operator']) ? $data['virtual_operator'] : null;
        $this->container['document_files'] = isset($data['document_files']) ? $data['document_files'] : null;
        $this->container['document_attachments'] = isset($data['document_attachments']) ? $data['document_attachments'] : null;
        $this->container['zip_document_name'] = isset($data['zip_document_name']) ? $data['zip_document_name'] : null;
        $this->container['invalid_signature'] = isset($data['invalid_signature']) ? $data['invalid_signature'] : null;
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
     * Gets ubl_version
     *
     * @return string
     */
    public function getUblVersion()
    {
        return $this->container['ubl_version'];
    }

    /**
     * Sets ubl_version
     *
     * @param string $ubl_version ubl_version
     *
     * @return $this
     */
    public function setUblVersion($ubl_version)
    {
        $this->container['ubl_version'] = $ubl_version;

        return $this;
    }

    /**
     * Gets dian_version
     *
     * @return string
     */
    public function getDianVersion()
    {
        return $this->container['dian_version'];
    }

    /**
     * Sets dian_version
     *
     * @param string $dian_version dian_version
     *
     * @return $this
     */
    public function setDianVersion($dian_version)
    {
        $this->container['dian_version'] = $dian_version;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets cufe
     *
     * @return string
     */
    public function getCufe()
    {
        return $this->container['cufe'];
    }

    /**
     * Sets cufe
     *
     * @param string $cufe cufe
     *
     * @return $this
     */
    public function setCufe($cufe)
    {
        $this->container['cufe'] = $cufe;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime $issue_date issue_date
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

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
     * Gets notes
     *
     * @return string[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets billing_period
     *
     * @return \Swagger\Client\Model\Period
     */
    public function getBillingPeriod()
    {
        return $this->container['billing_period'];
    }

    /**
     * Sets billing_period
     *
     * @param \Swagger\Client\Model\Period $billing_period billing_period
     *
     * @return $this
     */
    public function setBillingPeriod($billing_period)
    {
        $this->container['billing_period'] = $billing_period;

        return $this;
    }

    /**
     * Gets public_url
     *
     * @return string
     */
    public function getPublicUrl()
    {
        return $this->container['public_url'];
    }

    /**
     * Sets public_url
     *
     * @param string $public_url public_url
     *
     * @return $this
     */
    public function setPublicUrl($public_url)
    {
        $this->container['public_url'] = $public_url;

        return $this;
    }

    /**
     * Gets issuer_party
     *
     * @return \Swagger\Client\Model\Issuer
     */
    public function getIssuerParty()
    {
        return $this->container['issuer_party'];
    }

    /**
     * Sets issuer_party
     *
     * @param \Swagger\Client\Model\Issuer $issuer_party issuer_party
     *
     * @return $this
     */
    public function setIssuerParty($issuer_party)
    {
        $this->container['issuer_party'] = $issuer_party;

        return $this;
    }

    /**
     * Gets customer_party
     *
     * @return \Swagger\Client\Model\Company
     */
    public function getCustomerParty()
    {
        return $this->container['customer_party'];
    }

    /**
     * Sets customer_party
     *
     * @param \Swagger\Client\Model\Company $customer_party customer_party
     *
     * @return $this
     */
    public function setCustomerParty($customer_party)
    {
        $this->container['customer_party'] = $customer_party;

        return $this;
    }

    /**
     * Gets tax_summary
     *
     * @return \Swagger\Client\Model\InboundDocumentTaxSummary[]
     */
    public function getTaxSummary()
    {
        return $this->container['tax_summary'];
    }

    /**
     * Sets tax_summary
     *
     * @param \Swagger\Client\Model\InboundDocumentTaxSummary[] $tax_summary tax_summary
     *
     * @return $this
     */
    public function setTaxSummary($tax_summary)
    {
        $this->container['tax_summary'] = $tax_summary;

        return $this;
    }

    /**
     * Gets withholding_tax_summary
     *
     * @return \Swagger\Client\Model\InboundDocumentWithholdingTaxSummary[]
     */
    public function getWithholdingTaxSummary()
    {
        return $this->container['withholding_tax_summary'];
    }

    /**
     * Sets withholding_tax_summary
     *
     * @param \Swagger\Client\Model\InboundDocumentWithholdingTaxSummary[] $withholding_tax_summary withholding_tax_summary
     *
     * @return $this
     */
    public function setWithholdingTaxSummary($withholding_tax_summary)
    {
        $this->container['withholding_tax_summary'] = $withholding_tax_summary;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Swagger\Client\Model\LegalMonetaryTotal
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Swagger\Client\Model\LegalMonetaryTotal $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * Gets business_status
     *
     * @return \Swagger\Client\Model\InboundDocumentBusinessStatus[]
     */
    public function getBusinessStatus()
    {
        return $this->container['business_status'];
    }

    /**
     * Sets business_status
     *
     * @param \Swagger\Client\Model\InboundDocumentBusinessStatus[] $business_status business_status
     *
     * @return $this
     */
    public function setBusinessStatus($business_status)
    {
        $this->container['business_status'] = $business_status;

        return $this;
    }

    /**
     * Gets issuer_party_id
     *
     * @return string
     */
    public function getIssuerPartyId()
    {
        return $this->container['issuer_party_id'];
    }

    /**
     * Sets issuer_party_id
     *
     * @param string $issuer_party_id issuer_party_id
     *
     * @return $this
     */
    public function setIssuerPartyId($issuer_party_id)
    {
        $this->container['issuer_party_id'] = $issuer_party_id;

        return $this;
    }

    /**
     * Gets customer_party_id
     *
     * @return string
     */
    public function getCustomerPartyId()
    {
        return $this->container['customer_party_id'];
    }

    /**
     * Sets customer_party_id
     *
     * @param string $customer_party_id customer_party_id
     *
     * @return $this
     */
    public function setCustomerPartyId($customer_party_id)
    {
        $this->container['customer_party_id'] = $customer_party_id;

        return $this;
    }

    /**
     * Gets virtual_operator_id
     *
     * @return string
     */
    public function getVirtualOperatorId()
    {
        return $this->container['virtual_operator_id'];
    }

    /**
     * Sets virtual_operator_id
     *
     * @param string $virtual_operator_id virtual_operator_id
     *
     * @return $this
     */
    public function setVirtualOperatorId($virtual_operator_id)
    {
        $this->container['virtual_operator_id'] = $virtual_operator_id;

        return $this;
    }

    /**
     * Gets technological_provider_id
     *
     * @return string
     */
    public function getTechnologicalProviderId()
    {
        return $this->container['technological_provider_id'];
    }

    /**
     * Sets technological_provider_id
     *
     * @param string $technological_provider_id technological_provider_id
     *
     * @return $this
     */
    public function setTechnologicalProviderId($technological_provider_id)
    {
        $this->container['technological_provider_id'] = $technological_provider_id;

        return $this;
    }

    /**
     * Gets technological_provider
     *
     * @return \Swagger\Client\Model\TechnologicalProvider
     */
    public function getTechnologicalProvider()
    {
        return $this->container['technological_provider'];
    }

    /**
     * Sets technological_provider
     *
     * @param \Swagger\Client\Model\TechnologicalProvider $technological_provider technological_provider
     *
     * @return $this
     */
    public function setTechnologicalProvider($technological_provider)
    {
        $this->container['technological_provider'] = $technological_provider;

        return $this;
    }

    /**
     * Gets virtual_operator
     *
     * @return \Swagger\Client\Model\VirtualOperator
     */
    public function getVirtualOperator()
    {
        return $this->container['virtual_operator'];
    }

    /**
     * Sets virtual_operator
     *
     * @param \Swagger\Client\Model\VirtualOperator $virtual_operator virtual_operator
     *
     * @return $this
     */
    public function setVirtualOperator($virtual_operator)
    {
        $this->container['virtual_operator'] = $virtual_operator;

        return $this;
    }

    /**
     * Gets document_files
     *
     * @return \Swagger\Client\Model\InboundDocumentFile[]
     */
    public function getDocumentFiles()
    {
        return $this->container['document_files'];
    }

    /**
     * Sets document_files
     *
     * @param \Swagger\Client\Model\InboundDocumentFile[] $document_files document_files
     *
     * @return $this
     */
    public function setDocumentFiles($document_files)
    {
        $this->container['document_files'] = $document_files;

        return $this;
    }

    /**
     * Gets document_attachments
     *
     * @return \Swagger\Client\Model\InboundDocumentAttachment[]
     */
    public function getDocumentAttachments()
    {
        return $this->container['document_attachments'];
    }

    /**
     * Sets document_attachments
     *
     * @param \Swagger\Client\Model\InboundDocumentAttachment[] $document_attachments document_attachments
     *
     * @return $this
     */
    public function setDocumentAttachments($document_attachments)
    {
        $this->container['document_attachments'] = $document_attachments;

        return $this;
    }

    /**
     * Gets zip_document_name
     *
     * @return string
     */
    public function getZipDocumentName()
    {
        return $this->container['zip_document_name'];
    }

    /**
     * Sets zip_document_name
     *
     * @param string $zip_document_name zip_document_name
     *
     * @return $this
     */
    public function setZipDocumentName($zip_document_name)
    {
        $this->container['zip_document_name'] = $zip_document_name;

        return $this;
    }

    /**
     * Gets invalid_signature
     *
     * @return bool
     */
    public function getInvalidSignature()
    {
        return $this->container['invalid_signature'];
    }

    /**
     * Sets invalid_signature
     *
     * @param bool $invalid_signature invalid_signature
     *
     * @return $this
     */
    public function setInvalidSignature($invalid_signature)
    {
        $this->container['invalid_signature'] = $invalid_signature;

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


