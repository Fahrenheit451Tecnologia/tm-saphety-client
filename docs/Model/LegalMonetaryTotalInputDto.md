# LegalMonetaryTotalInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gross_amount** | **string** | Sum of gross amount of all lines, before taxes; MaxLength: 19 | 
**payable_amount** | **string** | Value to pay: Gross amount + Total taxes - taxes withheld; MaxLength: 19 | 
**taxable_amount** | **string** | Base amount for tax calculation (Gross amount + Charges - Allawances); MaxLength: 19 | 
**allowances_total_amount** | **string** | Sum of all allwances; MaxLength: 19 | [optional] 
**charges_total_amount** | **string** | Sum of all charges; MaxLength: 19 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


