# LineInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Line number | 
**free_of_charge** | **string** | True if item is free of charge. Otherwise false. | [optional] 
**accounting_cost_code** | **string** | The Buyer&#39;s accounting code applied to the Invoice Line; MaxLength: 20 | [optional] 
**quantity** | **string** | Item quantity | 
**quantity_unit_of_measure** | **string** | Unit of measure of the bill item | 
**taxable_amount** | **string** | Taxable amount | 
**tax_category** | **string** | Tax type or class. See DataElements.TaxCategories | 
**tax_percentage** | **string** | Tax Percentage | 
**tax_amount** | **string** | Amount of tax withheld | 
**exclude_vat** | **string** | True if a line is tax exempted. Otherwise False. | [optional] 
**unit_price** | **string** | Unit price of item | 
**gross_amount** | **string** | Gross amount. Quantity x unit price. Exclude allowances and charges | 
**net_amount** | **string** | Net amount. Quantity x unit price. Include allowances and charges | 
**allowance_charges** | [**\Swagger\Client\Model\AllowanceChargeInputDto[]**](AllowanceChargeInputDto.md) |  | [optional] 
**document_references** | [**\Swagger\Client\Model\DocumentReferenceInputDto[]**](DocumentReferenceInputDto.md) |  | [optional] 
**document_line_references** | [**\Swagger\Client\Model\DocumentLineReferenceInputDto[]**](DocumentLineReferenceInputDto.md) |  | [optional] 
**item** | [**\Swagger\Client\Model\ItemInputDto**](ItemInputDto.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


