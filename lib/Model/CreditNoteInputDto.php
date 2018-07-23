<?php
/**
 * CreditNoteInputDto
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
 * CreditNoteInputDto Class Doc Comment
 *
 * @category Class
 * @description Represents an CreditNote input DTO.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditNoteInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditNoteInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serie_prefix' => 'string',
        'serie_number' => 'string',
        'delivery_date' => 'string',
        'billing_period' => '\Swagger\Client\Model\PeriodInputDto',
        'document_references' => '\Swagger\Client\Model\DocumentReferenceInputDto[]',
        'reason_credit' => 'string',
        'payment_method' => 'string',
        'prepaid_payments' => '\Swagger\Client\Model\PrepaidPaymentInputDto[]',
        'issuer_party' => '\Swagger\Client\Model\IssuerPartyInputDto',
        'customer_party' => '\Swagger\Client\Model\CustomerPartyInputDto',
        'notes' => 'string[]',
        'currency' => 'string',
        'lines' => '\Swagger\Client\Model\LineInputDto[]',
        'tax_summaries' => '\Swagger\Client\Model\TaxSummaryInputDto[]',
        'withholding_tax_summaries' => '\Swagger\Client\Model\WithholdingTaxSummaryInputDto[]',
        'total' => '\Swagger\Client\Model\LegalMonetaryTotalInputDto',
        'issue_mode' => 'string',
        'issue_date' => 'string',
        'due_date' => 'string',
        'external_reference' => 'string',
        'correlation_document_id' => 'string',
        'serie_external_key' => 'string',
        'additional_notification_emails' => 'string[]',
        'custom_fields' => '\Swagger\Client\Model\CustomFieldInputDto[]',
        'attachments' => '\Swagger\Client\Model\DocumentAttachmentInputDto[]',
        'pdf' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serie_prefix' => null,
        'serie_number' => null,
        'delivery_date' => null,
        'billing_period' => null,
        'document_references' => null,
        'reason_credit' => null,
        'payment_method' => null,
        'prepaid_payments' => null,
        'issuer_party' => null,
        'customer_party' => null,
        'notes' => null,
        'currency' => null,
        'lines' => null,
        'tax_summaries' => null,
        'withholding_tax_summaries' => null,
        'total' => null,
        'issue_mode' => null,
        'issue_date' => null,
        'due_date' => null,
        'external_reference' => null,
        'correlation_document_id' => null,
        'serie_external_key' => null,
        'additional_notification_emails' => null,
        'custom_fields' => null,
        'attachments' => null,
        'pdf' => 'byte'
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
        'serie_prefix' => 'SeriePrefix',
        'serie_number' => 'SerieNumber',
        'delivery_date' => 'DeliveryDate',
        'billing_period' => 'BillingPeriod',
        'document_references' => 'DocumentReferences',
        'reason_credit' => 'ReasonCredit',
        'payment_method' => 'PaymentMethod',
        'prepaid_payments' => 'PrepaidPayments',
        'issuer_party' => 'IssuerParty',
        'customer_party' => 'CustomerParty',
        'notes' => 'Notes',
        'currency' => 'Currency',
        'lines' => 'Lines',
        'tax_summaries' => 'TaxSummaries',
        'withholding_tax_summaries' => 'WithholdingTaxSummaries',
        'total' => 'Total',
        'issue_mode' => 'IssueMode',
        'issue_date' => 'IssueDate',
        'due_date' => 'DueDate',
        'external_reference' => 'ExternalReference',
        'correlation_document_id' => 'CorrelationDocumentId',
        'serie_external_key' => 'SerieExternalKey',
        'additional_notification_emails' => 'AdditionalNotificationEmails',
        'custom_fields' => 'CustomFields',
        'attachments' => 'Attachments',
        'pdf' => 'Pdf'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serie_prefix' => 'setSeriePrefix',
        'serie_number' => 'setSerieNumber',
        'delivery_date' => 'setDeliveryDate',
        'billing_period' => 'setBillingPeriod',
        'document_references' => 'setDocumentReferences',
        'reason_credit' => 'setReasonCredit',
        'payment_method' => 'setPaymentMethod',
        'prepaid_payments' => 'setPrepaidPayments',
        'issuer_party' => 'setIssuerParty',
        'customer_party' => 'setCustomerParty',
        'notes' => 'setNotes',
        'currency' => 'setCurrency',
        'lines' => 'setLines',
        'tax_summaries' => 'setTaxSummaries',
        'withholding_tax_summaries' => 'setWithholdingTaxSummaries',
        'total' => 'setTotal',
        'issue_mode' => 'setIssueMode',
        'issue_date' => 'setIssueDate',
        'due_date' => 'setDueDate',
        'external_reference' => 'setExternalReference',
        'correlation_document_id' => 'setCorrelationDocumentId',
        'serie_external_key' => 'setSerieExternalKey',
        'additional_notification_emails' => 'setAdditionalNotificationEmails',
        'custom_fields' => 'setCustomFields',
        'attachments' => 'setAttachments',
        'pdf' => 'setPdf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serie_prefix' => 'getSeriePrefix',
        'serie_number' => 'getSerieNumber',
        'delivery_date' => 'getDeliveryDate',
        'billing_period' => 'getBillingPeriod',
        'document_references' => 'getDocumentReferences',
        'reason_credit' => 'getReasonCredit',
        'payment_method' => 'getPaymentMethod',
        'prepaid_payments' => 'getPrepaidPayments',
        'issuer_party' => 'getIssuerParty',
        'customer_party' => 'getCustomerParty',
        'notes' => 'getNotes',
        'currency' => 'getCurrency',
        'lines' => 'getLines',
        'tax_summaries' => 'getTaxSummaries',
        'withholding_tax_summaries' => 'getWithholdingTaxSummaries',
        'total' => 'getTotal',
        'issue_mode' => 'getIssueMode',
        'issue_date' => 'getIssueDate',
        'due_date' => 'getDueDate',
        'external_reference' => 'getExternalReference',
        'correlation_document_id' => 'getCorrelationDocumentId',
        'serie_external_key' => 'getSerieExternalKey',
        'additional_notification_emails' => 'getAdditionalNotificationEmails',
        'custom_fields' => 'getCustomFields',
        'attachments' => 'getAttachments',
        'pdf' => 'getPdf'
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
        $this->container['serie_prefix'] = isset($data['serie_prefix']) ? $data['serie_prefix'] : null;
        $this->container['serie_number'] = isset($data['serie_number']) ? $data['serie_number'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['billing_period'] = isset($data['billing_period']) ? $data['billing_period'] : null;
        $this->container['document_references'] = isset($data['document_references']) ? $data['document_references'] : null;
        $this->container['reason_credit'] = isset($data['reason_credit']) ? $data['reason_credit'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['prepaid_payments'] = isset($data['prepaid_payments']) ? $data['prepaid_payments'] : null;
        $this->container['issuer_party'] = isset($data['issuer_party']) ? $data['issuer_party'] : null;
        $this->container['customer_party'] = isset($data['customer_party']) ? $data['customer_party'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['tax_summaries'] = isset($data['tax_summaries']) ? $data['tax_summaries'] : null;
        $this->container['withholding_tax_summaries'] = isset($data['withholding_tax_summaries']) ? $data['withholding_tax_summaries'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['issue_mode'] = isset($data['issue_mode']) ? $data['issue_mode'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['correlation_document_id'] = isset($data['correlation_document_id']) ? $data['correlation_document_id'] : null;
        $this->container['serie_external_key'] = isset($data['serie_external_key']) ? $data['serie_external_key'] : null;
        $this->container['additional_notification_emails'] = isset($data['additional_notification_emails']) ? $data['additional_notification_emails'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['delivery_date'] === null) {
            $invalidProperties[] = "'delivery_date' can't be null";
        }
        if ($this->container['billing_period'] === null) {
            $invalidProperties[] = "'billing_period' can't be null";
        }
        if ($this->container['reason_credit'] === null) {
            $invalidProperties[] = "'reason_credit' can't be null";
        }
        if ($this->container['issuer_party'] === null) {
            $invalidProperties[] = "'issuer_party' can't be null";
        }
        if ($this->container['customer_party'] === null) {
            $invalidProperties[] = "'customer_party' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if ($this->container['tax_summaries'] === null) {
            $invalidProperties[] = "'tax_summaries' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['issue_mode'] === null) {
            $invalidProperties[] = "'issue_mode' can't be null";
        }
        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if (!is_null($this->container['external_reference']) && (strlen($this->container['external_reference']) > 50)) {
            $invalidProperties[] = "invalid value for 'external_reference', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['correlation_document_id'] === null) {
            $invalidProperties[] = "'correlation_document_id' can't be null";
        }
        if ((strlen($this->container['correlation_document_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'correlation_document_id', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['serie_external_key'] === null) {
            $invalidProperties[] = "'serie_external_key' can't be null";
        }
        if (!is_null($this->container['pdf']) && (strlen($this->container['pdf']) > 5000000)) {
            $invalidProperties[] = "invalid value for 'pdf', the character length must be smaller than or equal to 5000000.";
        }

        if (!is_null($this->container['pdf']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['pdf'])) {
            $invalidProperties[] = "invalid value for 'pdf', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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

        if ($this->container['delivery_date'] === null) {
            return false;
        }
        if ($this->container['billing_period'] === null) {
            return false;
        }
        if ($this->container['reason_credit'] === null) {
            return false;
        }
        if ($this->container['issuer_party'] === null) {
            return false;
        }
        if ($this->container['customer_party'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        if ($this->container['lines'] === null) {
            return false;
        }
        if ($this->container['tax_summaries'] === null) {
            return false;
        }
        if ($this->container['total'] === null) {
            return false;
        }
        if ($this->container['issue_mode'] === null) {
            return false;
        }
        if ($this->container['issue_date'] === null) {
            return false;
        }
        if ($this->container['due_date'] === null) {
            return false;
        }
        if (strlen($this->container['external_reference']) > 50) {
            return false;
        }
        if ($this->container['correlation_document_id'] === null) {
            return false;
        }
        if (strlen($this->container['correlation_document_id']) > 50) {
            return false;
        }
        if ($this->container['serie_external_key'] === null) {
            return false;
        }
        if (strlen($this->container['pdf']) > 5000000) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['pdf'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets serie_prefix
     *
     * @return string
     */
    public function getSeriePrefix()
    {
        return $this->container['serie_prefix'];
    }

    /**
     * Sets serie_prefix
     *
     * @param string $serie_prefix If the serie selected by SerieExternalKey is Autoincrement, this field must bem empty.  The document number will be assigned by the system.  Id the serie selected by SerieExternalKey is not Autoincrement, the prefix must be present.  Serie validations will be applied.
     *
     * @return $this
     */
    public function setSeriePrefix($serie_prefix)
    {
        $this->container['serie_prefix'] = $serie_prefix;

        return $this;
    }

    /**
     * Gets serie_number
     *
     * @return string
     */
    public function getSerieNumber()
    {
        return $this->container['serie_number'];
    }

    /**
     * Sets serie_number
     *
     * @param string $serie_number If the serie selected by SerieExternalKey is Autoincrement, this field must bem empty.  The document number will be assigned by the system.  Id the serie selected by SerieExternalKey is not Autoincrement, the SerieNumber must be present.  Serie validations will be applied.
     *
     * @return $this
     */
    public function setSerieNumber($serie_number)
    {
        $this->container['serie_number'] = $serie_number;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param string $delivery_date Credit Note Delivery Date. Format {yyyy-mm-dd}
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets billing_period
     *
     * @return \Swagger\Client\Model\PeriodInputDto
     */
    public function getBillingPeriod()
    {
        return $this->container['billing_period'];
    }

    /**
     * Sets billing_period
     *
     * @param \Swagger\Client\Model\PeriodInputDto $billing_period Billing Period
     *
     * @return $this
     */
    public function setBillingPeriod($billing_period)
    {
        $this->container['billing_period'] = $billing_period;

        return $this;
    }

    /**
     * Gets document_references
     *
     * @return \Swagger\Client\Model\DocumentReferenceInputDto[]
     */
    public function getDocumentReferences()
    {
        return $this->container['document_references'];
    }

    /**
     * Sets document_references
     *
     * @param \Swagger\Client\Model\DocumentReferenceInputDto[] $document_references Documents(Sales Invoice, Exportation Invoice) refered to the credit note
     *
     * @return $this
     */
    public function setDocumentReferences($document_references)
    {
        $this->container['document_references'] = $document_references;

        return $this;
    }

    /**
     * Gets reason_credit
     *
     * @return string
     */
    public function getReasonCredit()
    {
        return $this->container['reason_credit'];
    }

    /**
     * Sets reason_credit
     *
     * @param string $reason_credit Reason Credit. The value must be one of this ['ReturnGoods', 'CancellationInvoice', 'TotalReduction', 'TotalDiscount', 'Termination', 'Others']
     *
     * @return $this
     */
    public function setReasonCredit($reason_credit)
    {
        $this->container['reason_credit'] = $reason_credit;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Bill payment method.  The value must be one of this ['Cash', 'Cheque', 'Bank', 'Transfer', 'BankDeposit']
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets prepaid_payments
     *
     * @return \Swagger\Client\Model\PrepaidPaymentInputDto[]
     */
    public function getPrepaidPayments()
    {
        return $this->container['prepaid_payments'];
    }

    /**
     * Sets prepaid_payments
     *
     * @param \Swagger\Client\Model\PrepaidPaymentInputDto[] $prepaid_payments Information on the prepaid amount and date
     *
     * @return $this
     */
    public function setPrepaidPayments($prepaid_payments)
    {
        $this->container['prepaid_payments'] = $prepaid_payments;

        return $this;
    }

    /**
     * Gets issuer_party
     *
     * @return \Swagger\Client\Model\IssuerPartyInputDto
     */
    public function getIssuerParty()
    {
        return $this->container['issuer_party'];
    }

    /**
     * Sets issuer_party
     *
     * @param \Swagger\Client\Model\IssuerPartyInputDto $issuer_party Data required of issuer to bill
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
     * @return \Swagger\Client\Model\CustomerPartyInputDto
     */
    public function getCustomerParty()
    {
        return $this->container['customer_party'];
    }

    /**
     * Sets customer_party
     *
     * @param \Swagger\Client\Model\CustomerPartyInputDto $customer_party Data required of customer to bill
     *
     * @return $this
     */
    public function setCustomerParty($customer_party)
    {
        $this->container['customer_party'] = $customer_party;

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
     * @param string[] $notes Additional information: Free text on the document
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
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency code. Colombia is 'COP'
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Swagger\Client\Model\LineInputDto[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Swagger\Client\Model\LineInputDto[] $lines Sales Invoice lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets tax_summaries
     *
     * @return \Swagger\Client\Model\TaxSummaryInputDto[]
     */
    public function getTaxSummaries()
    {
        return $this->container['tax_summaries'];
    }

    /**
     * Sets tax_summaries
     *
     * @param \Swagger\Client\Model\TaxSummaryInputDto[] $tax_summaries Information used to report taxes
     *
     * @return $this
     */
    public function setTaxSummaries($tax_summaries)
    {
        $this->container['tax_summaries'] = $tax_summaries;

        return $this;
    }

    /**
     * Gets withholding_tax_summaries
     *
     * @return \Swagger\Client\Model\WithholdingTaxSummaryInputDto[]
     */
    public function getWithholdingTaxSummaries()
    {
        return $this->container['withholding_tax_summaries'];
    }

    /**
     * Sets withholding_tax_summaries
     *
     * @param \Swagger\Client\Model\WithholdingTaxSummaryInputDto[] $withholding_tax_summaries Information used to report withholding taxes
     *
     * @return $this
     */
    public function setWithholdingTaxSummaries($withholding_tax_summaries)
    {
        $this->container['withholding_tax_summaries'] = $withholding_tax_summaries;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Swagger\Client\Model\LegalMonetaryTotalInputDto
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Swagger\Client\Model\LegalMonetaryTotalInputDto $total Relating to the total amounts applicable to the bill
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
     * @param string $issue_mode Issue Mode. The value must be one of this ['Electronic', 'ByComputer']
     *
     * @return $this
     */
    public function setIssueMode($issue_mode)
    {
        $this->container['issue_mode'] = $issue_mode;

        return $this;
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
     * @param string $issue_date Date issue of the invoice for tax purposes. Format {yyyy-MM-ddTHH:mm:ss}
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

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
     * @param string $due_date Bill Due Date. Format {yyyy-mm-dd}
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param string $external_reference External Reference; MaxLength: 50
     *
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        if (!is_null($external_reference) && (strlen($external_reference) > 50)) {
            throw new \InvalidArgumentException('invalid length for $external_reference when calling CreditNoteInputDto., must be smaller than or equal to 50.');
        }

        $this->container['external_reference'] = $external_reference;

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
     * @param string $correlation_document_id Unique identifier for the document. This Id is used to prevent document duplication.; MaxLength: 50
     *
     * @return $this
     */
    public function setCorrelationDocumentId($correlation_document_id)
    {
        if ((strlen($correlation_document_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $correlation_document_id when calling CreditNoteInputDto., must be smaller than or equal to 50.');
        }

        $this->container['correlation_document_id'] = $correlation_document_id;

        return $this;
    }

    /**
     * Gets serie_external_key
     *
     * @return string
     */
    public function getSerieExternalKey()
    {
        return $this->container['serie_external_key'];
    }

    /**
     * Sets serie_external_key
     *
     * @param string $serie_external_key Unique identifier for the serie. This identifier is generated by the system when the serie is created  and must be sent back on document creation to select wich serie will be used
     *
     * @return $this
     */
    public function setSerieExternalKey($serie_external_key)
    {
        $this->container['serie_external_key'] = $serie_external_key;

        return $this;
    }

    /**
     * Gets additional_notification_emails
     *
     * @return string[]
     */
    public function getAdditionalNotificationEmails()
    {
        return $this->container['additional_notification_emails'];
    }

    /**
     * Sets additional_notification_emails
     *
     * @param string[] $additional_notification_emails List of adicional emails to be notified
     *
     * @return $this
     */
    public function setAdditionalNotificationEmails($additional_notification_emails)
    {
        $this->container['additional_notification_emails'] = $additional_notification_emails;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \Swagger\Client\Model\CustomFieldInputDto[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \Swagger\Client\Model\CustomFieldInputDto[] $custom_fields Document Custom Fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Swagger\Client\Model\DocumentAttachmentInputDto[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\DocumentAttachmentInputDto[] $attachments Document downloadable attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     *
     * @param string $pdf Graphical representation of the document in pdf format; MaxLength: 5000000
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        if (!is_null($pdf) && (strlen($pdf) > 5000000)) {
            throw new \InvalidArgumentException('invalid length for $pdf when calling CreditNoteInputDto., must be smaller than or equal to 5000000.');
        }
        if (!is_null($pdf) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $pdf))) {
            throw new \InvalidArgumentException("invalid value for $pdf when calling CreditNoteInputDto., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['pdf'] = $pdf;

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

