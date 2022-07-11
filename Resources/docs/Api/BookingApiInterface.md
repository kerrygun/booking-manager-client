# OpenAPI\Server\BookingManagerClient\BookingApiInterface

All URIs are relative to *https://www.booking-manager.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocuent**](BookingApiInterface.md#addDocuent) | **POST** /addDocument/{itemType} | Add document
[**cancelReservation**](BookingApiInterface.md#cancelReservation) | **DELETE** /reservation/{reservationId} | Cancel reservation
[**confirmReservation**](BookingApiInterface.md#confirmReservation) | **PUT** /reservation/{reservationId} | Confirm reservation
[**createReservation**](BookingApiInterface.md#createReservation) | **POST** /reservation | Create reservation
[**getAvailability**](BookingApiInterface.md#getAvailability) | **GET** /availability/{year} | Gets availability
[**getBaseById**](BookingApiInterface.md#getBaseById) | **GET** /base/{id} | Gets a specific base
[**getBases**](BookingApiInterface.md#getBases) | **GET** /bases | Provides a list of bases
[**getCompanies**](BookingApiInterface.md#getCompanies) | **GET** /companies | Provides a list of companies
[**getCompanyBy**](BookingApiInterface.md#getCompanyBy) | **GET** /company/{id} | Gets a specific company
[**getCountries**](BookingApiInterface.md#getCountries) | **GET** /countries | Provides a list of countries
[**getCountryById**](BookingApiInterface.md#getCountryById) | **GET** /country/{id} | Gets a specific country
[**getEquipment**](BookingApiInterface.md#getEquipment) | **GET** /equipment | Provides a list of equipment categories
[**getOffers**](BookingApiInterface.md#getOffers) | **GET** /offers | Provides a list of available offers
[**getPrices**](BookingApiInterface.md#getPrices) | **GET** /prices | Provides a list of yacht prices
[**getReservation**](BookingApiInterface.md#getReservation) | **GET** /reservation/{reservationId} | Get reservation
[**getReservations**](BookingApiInterface.md#getReservations) | **GET** /reservations/{year} | Retrieves all reservations, including cancelled reservations
[**getSailingAreaById**](BookingApiInterface.md#getSailingAreaById) | **GET** /sailingArea/{id} | Gets a specific sailing area
[**getSailingAreas**](BookingApiInterface.md#getSailingAreas) | **GET** /sailingAreas | Provides a list of sailing areas
[**getShipyardById**](BookingApiInterface.md#getShipyardById) | **GET** /shipyard/{id} | Gets a specific shipyard
[**getShipyards**](BookingApiInterface.md#getShipyards) | **GET** /shipyards | Provides a list of shipyards
[**getShortAvailability**](BookingApiInterface.md#getShortAvailability) | **GET** /shortAvailability/{year} | Gets shortAvailability
[**getSpecialOffers**](BookingApiInterface.md#getSpecialOffers) | **GET** /specialOffers | Provides a list of special offers
[**getSpecialOffersByType**](BookingApiInterface.md#getSpecialOffersByType) | **GET** /specialOffers/{offerType} | Provides a list of special offers
[**getWorldRegionById**](BookingApiInterface.md#getWorldRegionById) | **GET** /worldRegion/{id} | Gets a specific world region
[**getWorldRegions**](BookingApiInterface.md#getWorldRegions) | **GET** /worldRegions | Provides a list of world regions
[**getYachts**](BookingApiInterface.md#getYachts) | **GET** /yachts | Provides a list of yachts
[**getYacthById**](BookingApiInterface.md#getYacthById) | **GET** /yacht/{id} | Gets a specific yacht


## Service Declaration
```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\BookingApi:
        tags:
            - { name: "open_api_server.api", api: "booking" }
    # ...
```

## **addDocuent**
> OpenAPI\Server\Model\DocumentResponse addDocuent($itemType, $id, $description, $document)

Add document

Calling *_/addDocument* is used to place a document on specific item in Booking Manager system. You can add various document/s on  - yacht model, reservation, user from the addressbook or yacht. Yacht model and yacht id can be retrieved from /yachts reponse, reservation id from /reservations. Successfull document upload returns - \"UPLOADED\"

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#addDocuent
     */
    public function addDocuent($itemType, int $id, string $description, ?UploadedFile $document, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemType** | [**ItemTypeEnum**](../Model/.md)|  |
 **id** | **int**| Entity id |
 **description** | **string**| Document description |
 **document** | **UploadedFile****UploadedFile**|  | [optional]

### Return type

[**OpenAPI\Server\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cancelReservation**
> OpenAPI\Server\Model\ReservationResponse cancelReservation($reservationId)

Cancel reservation

Calling *_/reservation* cancels a option. An already confirmed booking is not possible to cancel automatically.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#cancelReservation
     */
    public function cancelReservation(int $reservationId, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservationId** | **int**| reservation id |

### Return type

[**OpenAPI\Server\Model\ReservationResponse**](../Model/ReservationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **confirmReservation**
> OpenAPI\Server\Model\ReservationResponse confirmReservation($reservationId)

Confirm reservation

Calling *_/reservation* converts an option into finalized reservation

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#confirmReservation
     */
    public function confirmReservation(int $reservationId, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservationId** | **int**| reservation id |

### Return type

[**OpenAPI\Server\Model\ReservationResponse**](../Model/ReservationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createReservation**
> OpenAPI\Server\Model\ReservationResponse createReservation($reservation)

Create reservation

Calling *_/reservation* is used to place a new option in the Booking Manager system. The system creates an option with standard discounts and obligatory applicable options. In this request, status is always 2 (option).

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#createReservation
     */
    public function createReservation(Reservation $reservation, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation** | [**OpenAPI\Server\Model\Reservation**](../Model/Reservation.md)| json object |

### Return type

[**OpenAPI\Server\Model\ReservationResponse**](../Model/ReservationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAvailability**
> OpenAPI\Server\Model\AvailabilityResponse getAvailability($year, $companyId)

Gets availability

Calling *_/availability/{id}* returns availability for specific year

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getAvailability
     */
    public function getAvailability(int $year, ?int $companyId, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| specific year |
 **companyId** | **int**| company id | [optional]

### Return type

[**OpenAPI\Server\Model\AvailabilityResponse**](../Model/AvailabilityResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBaseById**
> OpenAPI\Server\Model\Base getBaseById($id)

Gets a specific base

Calling *_/base/{id}* with specific id returns only one base with that id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getBaseById
     */
    public function getBaseById(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| entity id |

### Return type

[**OpenAPI\Server\Model\Base**](../Model/Base.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBases**
> OpenAPI\Server\Model\Base getBases()

Provides a list of bases

Calling *_/bases* retrieves a list of bases that are assigned for each boat. Base is the exact location where boat is located. One base can belong to more sailing areas. In that case, multiple dedicated sailing areas are separated by comma. Example of connecting the bases with sailing areas is with - Country Italy - countryId is 380. That base belongs to sailing area - 18. In sailingAreas function, this id belongs to Tyrrhenian Sea. So, you can then connect the Sapri base with Tyrrhenian Sea, and same for all other bases that belong to sailingAreas - 18.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getBases
     */
    public function getBases(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Base**](../Model/Base.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCompanies**
> OpenAPI\Server\Model\Company getCompanies()

Provides a list of companies

Calling *_/companies* retrieves a list of companies

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getCompanies
     */
    public function getCompanies(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Company**](../Model/Company.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCompanyBy**
> OpenAPI\Server\Model\Company getCompanyBy($id)

Gets a specific company

Calling *_/company/{id}* with specific id returns only one company with requested id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getCompanyBy
     */
    public function getCompanyBy(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| entity id |

### Return type

[**OpenAPI\Server\Model\Company**](../Model/Company.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCountries**
> OpenAPI\Server\Model\Country getCountries()

Provides a list of countries

Retrieves a list of all *ISO-3166* countries and their short, long codes and world region code. Countries from the list present the countries of dedicated bases of the boats.     More about the ISO-3166 standard here https://www.iso.org/iso-3166-country-codes.html

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getCountries
     */
    public function getCountries(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Country**](../Model/Country.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCountryById**
> OpenAPI\Server\Model\Country getCountryById($id)

Gets a specific country

Rretrieves only one country by id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getCountryById
     */
    public function getCountryById(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| entity id |

### Return type

[**OpenAPI\Server\Model\Country**](../Model/Country.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getEquipment**
> OpenAPI\Server\Model\Equipment getEquipment()

Provides a list of equipment categories

Calling *_/equipment* retrieves a list of equipment categories. Each boat can have multiple equipment items, and equipment items have dedicated equipment categories. Boat can have many equipment items, but not all of them can have dedicated equipment categories. Dedicated equipment categories represent categories that can be used as search option filter on the web page, for more precise search of boats with dedicated equipment. Not every equipment item can have dedicated equipment category. In those cases, equipment item dedicated category is -1.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getEquipment
     */
    public function getEquipment(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Equipment**](../Model/Equipment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getOffers**
> OpenAPI\Server\Model\Offer getOffers($dateFrom, $dateTo, $flexibility, $companyId, $country, $productName, $baseFromId, $baseToId, $sailingAreaId, $yachtId, $modelId, $currency, $tripDuration, $minCabins, $maxCabins, $minBerths, $maxBerths, $minHeads, $maxHeads, $minLength, $maxLength)

Provides a list of available offers

Returns a list of all available yachts according to selected parameters such as -date from, date to, flexibility, product name, currency and trip duration. Flexibility presents timeframe (along with dates) as an additional filiter to retrieve results If you use flexibility 6 (in year), returned available boats will be only the ones that have default check in day Saturday. All other selected flexibility parameters will return all available departures (e.g Friday, Monday etc.)

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getOffers
     */
    public function getOffers(\DateTime $dateFrom, \DateTime $dateTo, ?$flexibility, ?array $companyId, ?array $country, ?$productName, ?array $baseFromId, ?array $baseToId, ?array $sailingAreaId, ?array $yachtId, ?array $modelId, ?string $currency, ?array $tripDuration, ?int $minCabins, ?int $maxCabins, ?int $minBerths, ?int $maxBerths, ?int $minHeads, ?int $maxHeads, ?float $minLength, ?float $maxLength, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateFrom** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |
 **dateTo** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |
 **flexibility** | [**Flexibility**](../Model/.md)| &#x60;1&#x60; - on day &#x60;2&#x60; - in week &#x60;3&#x60; - one week &#x60;4&#x60; - two weeks &#x60;5&#x60; - in month &#x60;6&#x60; - in year | [optional]
 **companyId** | [**int**](../Model/int.md)| company ids | [optional]
 **country** | [**string**](../Model/string.md)| countries | [optional]
 **productName** | [**ProductEnum**](../Model/.md)| product name | [optional]
 **baseFromId** | [**int**](../Model/int.md)| base from ids | [optional]
 **baseToId** | [**int**](../Model/int.md)| base to ids | [optional]
 **sailingAreaId** | [**int**](../Model/int.md)| sailing area ids | [optional]
 **yachtId** | [**int**](../Model/int.md)| yacht ids | [optional]
 **modelId** | [**int**](../Model/int.md)| model ids | [optional]
 **currency** | **string**| currency | [optional]
 **tripDuration** | [**int**](../Model/int.md)| one or more trip durations | [optional]
 **minCabins** | **int**| minimum number of cabins | [optional]
 **maxCabins** | **int**| maximum number of cabins | [optional]
 **minBerths** | **int**| minimum number of berths | [optional]
 **maxBerths** | **int**| maximum number of berths | [optional]
 **minHeads** | **int**| minimum number of heads | [optional]
 **maxHeads** | **int**| maximum number of heads | [optional]
 **minLength** | **float**| minimum length | [optional]
 **maxLength** | **float**| maximum length | [optional]

### Return type

[**OpenAPI\Server\Model\Offer**](../Model/Offer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getPrices**
> OpenAPI\Server\Model\Price getPrices($dateFrom, $dateTo, $companyId, $country, $productName, $yachtId, $currency, $tripDuration)

Provides a list of yacht prices

Calling *_/prices* retrieves a list of yacht price on requested date interval

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getPrices
     */
    public function getPrices(\DateTime $dateFrom, \DateTime $dateTo, ?array $companyId, ?array $country, ?$productName, ?array $yachtId, ?string $currency, ?array $tripDuration, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateFrom** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |
 **dateTo** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |
 **companyId** | [**int**](../Model/int.md)| company ids | [optional]
 **country** | [**string**](../Model/string.md)| countries | [optional]
 **productName** | [**ProductEnum**](../Model/.md)| product name | [optional]
 **yachtId** | [**int**](../Model/int.md)| yacht ids | [optional]
 **currency** | **string**| currency | [optional]
 **tripDuration** | [**int**](../Model/int.md)| one or more trip durations | [optional]

### Return type

[**OpenAPI\Server\Model\Price**](../Model/Price.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getReservation**
> OpenAPI\Server\Model\ReservationResponse getReservation($reservationId)

Get reservation

Calling *_/reservation* is used to get specific reservation.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getReservation
     */
    public function getReservation(int $reservationId, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservationId** | **int**| reservation id |

### Return type

[**OpenAPI\Server\Model\ReservationResponse**](../Model/ReservationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getReservations**
> OpenAPI\Server\Model\ReservationResponse getReservations($year, $status)

Retrieves all reservations, including cancelled reservations

Calling *_/reservations* retrieves a list of all reservations

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getReservations
     */
    public function getReservations(int $year, ?int $status, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| specific year |
 **status** | **int**| Retrieves bookings with the entered status. If parameter is not entered, all reservations will be retrieved, including canceled ones. | [optional]

### Return type

[**OpenAPI\Server\Model\ReservationResponse**](../Model/ReservationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSailingAreaById**
> OpenAPI\Server\Model\SailingArea getSailingAreaById($id)

Gets a specific sailing area

Returns only one sailing area with the matching id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getSailingAreaById
     */
    public function getSailingAreaById(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| entity id |

### Return type

[**OpenAPI\Server\Model\SailingArea**](../Model/SailingArea.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSailingAreas**
> OpenAPI\Server\Model\SailingArea getSailingAreas()

Provides a list of sailing areas

Retrieves a full list of sailing areas. Sailing area is a more local geographical unit considered to be a single destination by sailors. This area can be comprised of multiple bases and is not always limited to only one country.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getSailingAreas
     */
    public function getSailingAreas(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\SailingArea**](../Model/SailingArea.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getShipyardById**
> OpenAPI\Server\Model\Shipyard getShipyardById($id)

Gets a specific shipyard

Calling *_/shipyard/{id}* with specific id returns only one shipyard with that id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getShipyardById
     */
    public function getShipyardById(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| entity id |

### Return type

[**OpenAPI\Server\Model\Shipyard**](../Model/Shipyard.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getShipyards**
> OpenAPI\Server\Model\Shipyard getShipyards()

Provides a list of shipyards

Calling *_/shipyards* retrieves a list of shipyards of the boats.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getShipyards
     */
    public function getShipyards(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Shipyard**](../Model/Shipyard.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getShortAvailability**
> OpenAPI\Server\Model\ShortAvailability getShortAvailability($year, $companyId, $yachtId, $format)

Gets shortAvailability

Calling *_/shortAvailability/{id}* return availability for specific year. Different status format will retrieve results in different format.  - 1 Binary - availability information for the resource in binary format. Each availabilityInfo is 365 characters long (or 366 in case of the leap year) and it represents the whole year (single character is one day of the year). First character is January 1st, second character is January 2nd, and so on. If character is equal to “0” it means that yacht is available on that day, otherwise character is equalto “1”. - 2 Hex - availability information for the resource in hexadecimal format. Each availabilityInfo is 92 characters long and it represents the whole year. First character is January 1, January 2, January 3 and January 4, second character is January 5, January 6, January 7 and January 8, and so on. Last characters should be discarded depending on how long the requested year is. For example, if availabilityInfo is “fe03f0..” in binary it is “0000 0001 1111 1100 0000 1111..” and it means that yacht is available from January 1 until January 8, but it is not available from January 8 until January 15, and so on. - 3 Status - Response is the same as the Binary response with one difference – booked days are not represented with character “1” for all types of reservations but instead reservation status id is used. For example, if availabilityInfo is “2222 2220 0000...” it means that boat is under status Option from January 1 until January 8, and it is free from January 8 etc.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getShortAvailability
     */
    public function getShortAvailability(int $year, ?int $companyId, ?int $yachtId, ?int $format, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| specific year |
 **companyId** | **int**| company id | [optional]
 **yachtId** | **int**| yacht id | [optional]
 **format** | **int**| &#x60;1&#x60; - binary &#x60;2&#x60; - hex &#x60;3&#x60; - status | [optional]

### Return type

[**OpenAPI\Server\Model\ShortAvailability**](../Model/ShortAvailability.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSpecialOffers**
> OpenAPI\Server\Model\Offer getSpecialOffers($dateFrom, $flexibility, $companyId, $country, $productName, $baseFromId, $baseToId, $yachtId, $modelId, $currency, $tripDuration, $minCabins, $maxCabins, $minBerths, $maxBerths, $minHeads, $maxHeads, $minLength, $maxLength)

Provides a list of special offers

Calling *_/specialOffers* retrieves a list of special offers (one way or short terms). One way offer presents an offer where boat can start or end it s charter in a different base that it s home base.   Boat can start on a different base that it s home base if e.g. week before the requested period, boat ended in a different base that it s home base and then it s offered from that other base at particular period.   If the boat has base A, and ends up a charter in base B, on the date when it finished in base B, it will be offered from that base. Short term presents an offer where duration of the charter will be less than 7 days. This means that boat can depart on e.g. Saturday and end charter on Wednesday. In the week (certain day) were a boat ended it s charter on Wednesday, it will be offered as an special offer ( short term) until the next availble check in day (default check in day if the boat).

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getSpecialOffers
     */
    public function getSpecialOffers(\DateTime $dateFrom, ?$flexibility, ?array $companyId, ?array $country, ?$productName, ?array $baseFromId, ?array $baseToId, ?array $yachtId, ?array $modelId, ?string $currency, ?array $tripDuration, ?int $minCabins, ?int $maxCabins, ?int $minBerths, ?int $maxBerths, ?int $minHeads, ?int $maxHeads, ?float $minLength, ?float $maxLength, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateFrom** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |
 **flexibility** | [**Flexibility**](../Model/.md)| &#x60;1&#x60; - on day &#x60;2&#x60; - in week &#x60;3&#x60; - one week &#x60;4&#x60; - two weeks &#x60;5&#x60; - in month &#x60;6&#x60; - in year | [optional]
 **companyId** | [**int**](../Model/int.md)| company ids | [optional]
 **country** | [**string**](../Model/string.md)| countries | [optional]
 **productName** | [**ProductEnum**](../Model/.md)| product name | [optional]
 **baseFromId** | [**int**](../Model/int.md)| base from ids | [optional]
 **baseToId** | [**int**](../Model/int.md)| base to ids | [optional]
 **yachtId** | [**int**](../Model/int.md)| yacht ids | [optional]
 **modelId** | [**int**](../Model/int.md)| model ids | [optional]
 **currency** | **string**| currency | [optional]
 **tripDuration** | [**int**](../Model/int.md)| one or more trip durations | [optional]
 **minCabins** | **int**| minimum number of cabins | [optional]
 **maxCabins** | **int**| maximum number of cabins | [optional]
 **minBerths** | **int**| minimum number of berths | [optional]
 **maxBerths** | **int**| maximum number of berths | [optional]
 **minHeads** | **int**| minimum number of heads | [optional]
 **maxHeads** | **int**| maximum number of heads | [optional]
 **minLength** | **float**| minimum length | [optional]
 **maxLength** | **float**| maximum length | [optional]

### Return type

[**OpenAPI\Server\Model\Offer**](../Model/Offer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSpecialOffersByType**
> OpenAPI\Server\Model\Offer getSpecialOffersByType($offerType, $dateFrom, $flexibility, $companyId, $country, $productName, $baseFromId, $baseToId, $sailingAreaId, $yachtId, $modelId, $currency, $tripDuration, $minCabins, $maxCabins, $minBerths, $maxBerths, $minHeads, $maxHeads, $minLength, $maxLength)

Provides a list of special offers

Calling *_/specialOffers* retrieves a list of special offers (one way or short term offers)

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getSpecialOffersByType
     */
    public function getSpecialOffersByType(string $offerType, \DateTime $dateFrom, ?$flexibility, ?array $companyId, ?array $country, ?$productName, ?array $baseFromId, ?array $baseToId, ?array $sailingAreaId, ?array $yachtId, ?array $modelId, ?string $currency, ?array $tripDuration, ?int $minCabins, ?int $maxCabins, ?int $minBerths, ?int $maxBerths, ?int $minHeads, ?int $maxHeads, ?float $minLength, ?float $maxLength, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerType** | **string**| offer type |
 **dateFrom** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |
 **flexibility** | [**Flexibility**](../Model/.md)| &#x60;1&#x60; - on day &#x60;2&#x60; - in week &#x60;3&#x60; - one week &#x60;4&#x60; - two weeks &#x60;5&#x60; - in month &#x60;6&#x60; - in year | [optional]
 **companyId** | [**int**](../Model/int.md)| company ids | [optional]
 **country** | [**string**](../Model/string.md)| countries | [optional]
 **productName** | [**ProductEnum**](../Model/.md)| product name | [optional]
 **baseFromId** | [**int**](../Model/int.md)| base from ids | [optional]
 **baseToId** | [**int**](../Model/int.md)| base to ids | [optional]
 **sailingAreaId** | [**int**](../Model/int.md)| sailing area ids | [optional]
 **yachtId** | [**int**](../Model/int.md)| yacht ids | [optional]
 **modelId** | [**int**](../Model/int.md)| model ids | [optional]
 **currency** | **string**| currency | [optional]
 **tripDuration** | [**int**](../Model/int.md)| one or more trip durations | [optional]
 **minCabins** | **int**| minimum number of cabins | [optional]
 **maxCabins** | **int**| maximum number of cabins | [optional]
 **minBerths** | **int**| minimum number of berths | [optional]
 **maxBerths** | **int**| maximum number of berths | [optional]
 **minHeads** | **int**| minimum number of heads | [optional]
 **maxHeads** | **int**| maximum number of heads | [optional]
 **minLength** | **float**| minimum length | [optional]
 **maxLength** | **float**| maximum length | [optional]

### Return type

[**OpenAPI\Server\Model\Offer**](../Model/Offer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getWorldRegionById**
> OpenAPI\Server\Model\WorldRegion getWorldRegionById($id)

Gets a specific world region

Returns only one worldRegion matching the Id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getWorldRegionById
     */
    public function getWorldRegionById(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| entity id |

### Return type

[**OpenAPI\Server\Model\WorldRegion**](../Model/WorldRegion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getWorldRegions**
> OpenAPI\Server\Model\WorldRegion getWorldRegions()

Provides a list of world regions

Retrieves a list of world regions. World Regions are used to group countries in larger world areas and should not be confused with sailing areas

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getWorldRegions
     */
    public function getWorldRegions(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\WorldRegion**](../Model/WorldRegion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getYachts**
> OpenAPI\Server\Model\Yacht getYachts($companyId)

Provides a list of yachts

Calling *_/yachts* retrieves a list of yachts, with all the detailed information and description of the boat. Description contains boat technical specifications, images and dedicated equipment categories. Also, information about applicable extra services for different products (Bareboat, Crewed, Cabin, Flotilla, Regatta and Allinclusive) are visible. One boat can have multiple products assigned (e.g. Bareboat and Crewed) at the same time, therefore each product has it s own elaboration of applicable extras.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getYachts
     */
    public function getYachts(?int $companyId, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyId** | **int**| company id | [optional]

### Return type

[**OpenAPI\Server\Model\Yacht**](../Model/Yacht.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getYacthById**
> OpenAPI\Server\Model\Yacht getYacthById($id)

Gets a specific yacht

Calling *_/yacht/{id}* with specific id returns only one yacht with that id and all dedicated details.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\BookingManagerClient\BookingApiInterface;

class BookingApi implements BookingApiInterface
{

    // ...

    /**
     * Implementation of BookingApiInterface#getYacthById
     */
    public function getYacthById(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| entity id |

### Return type

[**OpenAPI\Server\Model\Yacht**](../Model/Yacht.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

