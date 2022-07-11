# Yacht

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | unique resource id | 
**name** | **string** | the name of the individual yacht | 
**model** | **string** | the name of the individual yacht | 
**modelId** | **int** | the name of the model | 
**shipyardId** | **int** | id of the shipyard (boat manufacturer) | [optional] 
**year** | **int** | the build year of the boat | [optional] 
**kind** | **string** | The kind of a vessel. Kind can be -  Sail boat , Motor boat, Catamaran, Power Catamaran, Gulet, Motorsailer, Motoryacht, Trimaran, Other | 
**homeBaseId** | **int** | the unique id of the home base | 
**homeBase** | **string** | Home base name | [optional] 
**companyId** | **int** | ID of the charter company | 
**company** | **string** | Charter company name | [optional] 
**draught** | **float** | draught (m) | [optional] 
**beam** | **float** | beam (m) | [optional] 
**length** | **float** | length at waterline (m) | [optional] 
**waterCapacity** | **float** | capacity of the water tank (l) | [optional] 
**fuelCapacity** | **float** | capacity of the fuel tank (l) | [optional] 
**engine** | **string** |  | [optional] 
**deposit** | **float** |  | [optional] 
**commissionPercentage** | **float** |  | [optional] 
**wc** | **int** |  | [optional] 
**berths** | **int** |  | [optional] 
**cabins** | **int** |  | [optional] 
**mainsailArea** | **float** |  | [optional] 
**genoaArea** | **float** |  | [optional] 
**mainsailType** | **string** | types - Full Batten or Furling | [optional] 
**genoaType** | **string** | types - Furling or Self Tacking Jib | [optional] 
**defaultCheckInDay** | **int** | -1 Any, 1 Sunday, 2 Monday, 3 Tuesday, 4 Wednesday, 5 Thursday, 6 Friday, 7 Saturday | [optional] 
**images** | [**OpenAPI\Server\Model\Image**](Image.md) | Each boat has minimum of 3 pictures - Main, Interior and Plan Image. Additionally, each boat can have more pictures than 3 minimum ones, and if available, they will be visible along will all other pictures. | [optional] 
**equipmentIds** | **int** |  | [optional] 
**products** | [**OpenAPI\Server\Model\Product**](Product.md) | Boat can have one or multiple products assigned on it. It means that it can be offered at the same time as one or more products ( e.g. Bareboat and Crewed). Values can be Bareboat, Crewed, Cabin, Flotilla, Regatta and Allinclusive. | [optional] 
**cabinsLayout** | [**OpenAPI\Server\Model\Layout**](Layout.md) |  | [optional] 
**berthsLayout** | [**OpenAPI\Server\Model\Layout**](Layout.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


