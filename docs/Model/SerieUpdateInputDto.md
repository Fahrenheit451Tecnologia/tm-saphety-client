# SerieUpdateInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Serie name; MaxLength: 50 | 
**authorization_number** | **string** | Serie authorization number (assigned by DIAN) | [optional] 
**prefix** | **string** | Serie prefix; MaxLength: 4 | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) | Serie is valid after this date, inclusive | 
**valid_to** | [**\DateTime**](\DateTime.md) | Serie is valid until this date, inclusive | [optional] 
**start_value** | **int** | Serie first value | 
**end_value** | **int** | Serie last value | [optional] 
**efective_value** | **int** | The first created document will start with this especific value | 
**document_type** | **string** | Document type of the serie [SalesInvoice, CreditNote, DebitNote, ...]. See DataElements.DocumentType | 
**technical_key** | **string** | Serie technical key. (assigned by DIAN) | [optional] 
**auto_increment** | **string** | If false, the serie number is not managed by application.  The document number will not be assigned by this software.  However, the serie range, prefix and range will be validated  Default is true. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


