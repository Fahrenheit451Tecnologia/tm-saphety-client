# LineDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Line number | [optional] 
**free_of_charge** | **string** | True if item is free of charge. Otherwise false. | [optional] 
**accounting_cost_code** | **string** | The Buyer&#39;s accounting code applied to the Invoice Line | [optional] 
**quantity** | **string** | Item quantity | [optional] 
**quantity_unit_of_measure** | **string** | Unit of measure of the bill item | [optional] 
**taxable_amount** | **string** | Taxable amount | [optional] 
**tax_category** | **string** | Tax type or class. The value must be one of this [&#39;IVA&#39;, &#39;Consumption&#39;, &#39;ICA&#39;] | [optional] 
**tax_percentage** | **string** | Tax Percentage | [optional] 
**tax_amount** | **string** | Amount of tax withheld | [optional] 
**unit_price** | **string** | Unit price of item | [optional] 
**gross_amount** | **string** | Gross amount. Quantity x unit price. Exclude allowances and charges | [optional] 
**net_amount** | **string** | Net amount. Quantity x unit price. Include allowances and charges | [optional] 
**allowance_charges** | [**\Swagger\Client\Model\AllowanceChargeDTO[]**](AllowanceChargeDTO.md) | There is no place to map this on final UBL | [optional] 
**document_references** | [**\Swagger\Client\Model\DocumentReferenceDTO[]**](DocumentReferenceDTO.md) |  | [optional] 
**document_line_references** | [**\Swagger\Client\Model\DocumentLineReferenceDTO[]**](DocumentLineReferenceDTO.md) |  | [optional] 
**item** | [**\Swagger\Client\Model\ItemDTO**](ItemDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


