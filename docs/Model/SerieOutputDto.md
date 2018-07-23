# SerieOutputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Serie Id | [optional] 
**company_id** | **string** | Company id for the serie | [optional] 
**name** | **string** | Serie name | [optional] 
**authorization_number** | **string** | Serie authorization number (assigned by DIAN) | [optional] 
**prefix** | **string** | Serie prefix | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) | Serie is valid after this date, inclusive | [optional] 
**valid_to** | [**\DateTime**](\DateTime.md) | Serie is valid until this date, inclusive | [optional] 
**start_value** | **int** | Serie first value | [optional] 
**end_value** | **int** | Serie last value | [optional] 
**efective_value** | **int** | The first created document will start with this especific value | [optional] 
**document_type** | **string** | Document type of the serie [SalesInvoice, CreditNote, DebitNote, ...]. See DataElements.DocumentType | [optional] 
**serie_type** | **string** | [Range, Unlimited, ...]. See DataElements.SerieType | [optional] 
**issue_mode** | **string** | [Electronic, ByComputer, ...]. See DataElements.IssueMode | [optional] 
**technical_key** | **string** | Serie technical key. (assigned by DIAN) | [optional] 
**status** | **string** | Serie status. [Active, Inactive, ...]. See DataElements.SerieStatus | [optional] 
**auto_increment** | **string** | If false, the serie number is not managed by application.  The document number will not be assigned by this software.  However, the serie range, prefix and range will be validated  Default is true. | [optional] 
**external_key** | **string** | Serie external key | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


