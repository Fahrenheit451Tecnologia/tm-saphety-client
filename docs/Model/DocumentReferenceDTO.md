# DocumentReferenceDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_referred** | **string** | Document number referred. Example: PRUE98745631 | 
**issue_date** | [**\DateTime**](\DateTime.md) | Date when refered to invoice | 
**type** | **string** | Type of document reference[InvoiceReference,OrderReference,DespatchReference,ReceiptReference, CreditReference, DebitReference , OtherReference | 
**other_reference_type_id** | **string** | If Type&#x3D;OtherReference use this field to set the custom type ID | [optional] 
**other_reference_type_description** | **string** | If Type&#x3D;OtherReference use this field to set the custom description of the reference | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


