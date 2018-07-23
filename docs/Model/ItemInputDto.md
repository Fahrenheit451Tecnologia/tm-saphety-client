# ItemInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gtin** | **string** | Item identification GTIN; MaxLength: 20 | [optional] 
**buyer_item_identification** | **string** | Item code assigned by buyer; MaxLength: 20 | [optional] 
**seller_item_identification** | **string** | Item code assigned by seller &#x3D; SKU; MaxLength: 20 | [optional] 
**serial_number** | **string** | SerialNumber; MaxLength: 20 | [optional] 
**description** | **string** | Item description belonging to the invoice line; MaxLength: 400 | 
**brand_name** | **string** | Brand name; MaxLength: 20 | [optional] 
**model_name** | **string** | Model name; MaxLength: 20 | [optional] 
**pack_quantity** | **string** | Number of packages; MaxLength: 19 | [optional] 
**pack_unit_of_measure** | **string** | Unit of measure | [optional] 
**units_per_package** | **string** | Number of items per package; MaxLength: 19 | [optional] 
**gas_and_oil_properties** | [**\Swagger\Client\Model\GasAndOilInputDto[]**](GasAndOilInputDto.md) |  | [optional] 
**height** | **string** | Height of item; MaxLength: 19 | [optional] 
**height_unit_of_measure** | **string** | Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html | [optional] 
**width** | **string** | Width of item; MaxLength: 19 | [optional] 
**width_unit_of_measure** | **string** | Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html | [optional] 
**depth** | **string** | Depth of item; MaxLength: 19 | [optional] 
**depth_unit_of_measure** | **string** | Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html | [optional] 
**volume** | **string** | Volume of item; MaxLength: 19 | [optional] 
**volume_unit_of_measure** | **string** | Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html | [optional] 
**lot_number** | **string** | lot number; MaxLength: 20 | [optional] 
**expiry_date** | **string** | Expiry Date | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


