# booking-manager-client
# Booking Manager API for Agencies and Charter Fleets

Booking Manager API is a standard Web service that enables clients to connect their data with external systems and services and to extend the automation benefits of the Booking Manager System.
- It is used by charter agencies to publish availabilities of Charter Operators and automate booking processes by connecting Booking Manager to their own web sites to allow for seamless online booking experience for end users or integrating it with their CRM solutions in order to automate office procedures.
- Charter operators use the web service to connect Booking Manager with their book keeping softwares and save time and effort in accounting department.
- Third Party Software tools also use Booking Manager API to display richer information, for example boat tracking systems are able to visualise client contact information directly on the map showing the boat location in real time.
## Document Changes
### 29.05.2020
- `/companies` more information added in response - address, additional telephone and additional mobile number
- `/offers` added `kind` parameter in the request
- `/yachts` added `validForBases from/to` parameter to the response
### 10.04.2020  
- `/yachts` added `shipyardId` parameter to the response
- POST `/addDocument` - function to add document on specific item
- `/offers` added `sailingAreaId` as additional parameter in request
- PUT `/reservation` added `expirationDate` for options
    
### 12.03.2020.
- Extras valid for certain yacht in `/yachts`
- `/yachts` function with extras duration parameter - `validDaysFrom`/`validDaysTo`
- `/yachts` function with year of build `year`, default yacht deposit `deposit`, commision percentage `commissionPercentage` and default check in day `defaultCheckInDay`
- `/yacht` field `lenghtAtWaterline` corrected to length

This [Symfony](https://symfony.com/) bundle is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2.0.2
- Package version: 2.0.2
- Build package: org.openapitools.codegen.languages.PhpSymfonyServerCodegen
For more information, please visit [https://support.booking-manager.com/](https://support.booking-manager.com/)

## Requirements

PHP 8.0 and later

## Installation & Usage

To install the dependencies via [Composer](http://getcomposer.org/), add the following repository to `composer.json` of your Symfony project:

```json
{
    "repositories": [{
        "type": "path",
        "url": "//Path to your generated openapi bundle"
    }],
}
```

Then run:

```
composer require kerrygun/booking-manager-client:dev-master
```

to add the generated openapi bundle as a dependency.

## Tests

To run the unit tests for the generated bundle, first navigate to the directory containing the code, then run the following commands:

```
composer install
./vendor/bin/phpunit
```


## Getting Started

Step 1: Please follow the [installation procedure](#installation--usage) first.

Step 2: Enable the bundle in the bundle configuration:

```php
// app/config/bundles.php
return [
    // ...
    OpenAPI\Server\booking-manager-clientBundle::class => ['all' => true],
];
```

Step 3: Register the routes:

```yaml
# app/config/routes.yaml
open_api_server:
    resource: "@booking-manager-clientBundle/Resources/config/routing.yml"
```

Step 4: Implement the API calls:

```php
<?php
// src/Acme/MyBundle/Api/BookingApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\booking-manager-client\BookingApiInterface;

class BookingApi implements BookingApiInterface // An interface is autogenerated
{

    /**
     * Implementation of BookingApiInterface#addDocuent
     */
    public function addDocuent($itemType, int $id, string $description, UploadedFile $document = null, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // Other operation methods ...
}
```

Step 5: Tag your API implementation:

```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\BookingApi:
        tags:
            - { name: "open_api_server.api", api: "booking" }
    # ...
```

Now you can start using the bundle!


## Documentation for API Endpoints

All URIs are relative to *https://www.booking-manager.com/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookingApiInterface* | [**addDocuent**](Resources/docs/Api/BookingApiInterface.md#adddocuent) | **POST** /addDocument/{itemType} | Add document
*BookingApiInterface* | [**cancelReservation**](Resources/docs/Api/BookingApiInterface.md#cancelreservation) | **DELETE** /reservation/{reservationId} | Cancel reservation
*BookingApiInterface* | [**confirmReservation**](Resources/docs/Api/BookingApiInterface.md#confirmreservation) | **PUT** /reservation/{reservationId} | Confirm reservation
*BookingApiInterface* | [**createReservation**](Resources/docs/Api/BookingApiInterface.md#createreservation) | **POST** /reservation | Create reservation
*BookingApiInterface* | [**getAvailability**](Resources/docs/Api/BookingApiInterface.md#getavailability) | **GET** /availability/{year} | Gets availability
*BookingApiInterface* | [**getBaseById**](Resources/docs/Api/BookingApiInterface.md#getbasebyid) | **GET** /base/{id} | Gets a specific base
*BookingApiInterface* | [**getBases**](Resources/docs/Api/BookingApiInterface.md#getbases) | **GET** /bases | Provides a list of bases
*BookingApiInterface* | [**getCompanies**](Resources/docs/Api/BookingApiInterface.md#getcompanies) | **GET** /companies | Provides a list of companies
*BookingApiInterface* | [**getCompanyBy**](Resources/docs/Api/BookingApiInterface.md#getcompanyby) | **GET** /company/{id} | Gets a specific company
*BookingApiInterface* | [**getCountries**](Resources/docs/Api/BookingApiInterface.md#getcountries) | **GET** /countries | Provides a list of countries
*BookingApiInterface* | [**getCountryById**](Resources/docs/Api/BookingApiInterface.md#getcountrybyid) | **GET** /country/{id} | Gets a specific country
*BookingApiInterface* | [**getEquipment**](Resources/docs/Api/BookingApiInterface.md#getequipment) | **GET** /equipment | Provides a list of equipment categories
*BookingApiInterface* | [**getOffers**](Resources/docs/Api/BookingApiInterface.md#getoffers) | **GET** /offers | Provides a list of available offers
*BookingApiInterface* | [**getPrices**](Resources/docs/Api/BookingApiInterface.md#getprices) | **GET** /prices | Provides a list of yacht prices
*BookingApiInterface* | [**getReservation**](Resources/docs/Api/BookingApiInterface.md#getreservation) | **GET** /reservation/{reservationId} | Get reservation
*BookingApiInterface* | [**getReservations**](Resources/docs/Api/BookingApiInterface.md#getreservations) | **GET** /reservations/{year} | Retrieves all reservations, including cancelled reservations
*BookingApiInterface* | [**getSailingAreaById**](Resources/docs/Api/BookingApiInterface.md#getsailingareabyid) | **GET** /sailingArea/{id} | Gets a specific sailing area
*BookingApiInterface* | [**getSailingAreas**](Resources/docs/Api/BookingApiInterface.md#getsailingareas) | **GET** /sailingAreas | Provides a list of sailing areas
*BookingApiInterface* | [**getShipyardById**](Resources/docs/Api/BookingApiInterface.md#getshipyardbyid) | **GET** /shipyard/{id} | Gets a specific shipyard
*BookingApiInterface* | [**getShipyards**](Resources/docs/Api/BookingApiInterface.md#getshipyards) | **GET** /shipyards | Provides a list of shipyards
*BookingApiInterface* | [**getShortAvailability**](Resources/docs/Api/BookingApiInterface.md#getshortavailability) | **GET** /shortAvailability/{year} | Gets shortAvailability
*BookingApiInterface* | [**getSpecialOffers**](Resources/docs/Api/BookingApiInterface.md#getspecialoffers) | **GET** /specialOffers | Provides a list of special offers
*BookingApiInterface* | [**getSpecialOffersByType**](Resources/docs/Api/BookingApiInterface.md#getspecialoffersbytype) | **GET** /specialOffers/{offerType} | Provides a list of special offers
*BookingApiInterface* | [**getWorldRegionById**](Resources/docs/Api/BookingApiInterface.md#getworldregionbyid) | **GET** /worldRegion/{id} | Gets a specific world region
*BookingApiInterface* | [**getWorldRegions**](Resources/docs/Api/BookingApiInterface.md#getworldregions) | **GET** /worldRegions | Provides a list of world regions
*BookingApiInterface* | [**getYachts**](Resources/docs/Api/BookingApiInterface.md#getyachts) | **GET** /yachts | Provides a list of yachts
*BookingApiInterface* | [**getYacthById**](Resources/docs/Api/BookingApiInterface.md#getyacthbyid) | **GET** /yacht/{id} | Gets a specific yacht
*InvoiceApiInterface* | [**getInvoices**](Resources/docs/Api/InvoiceApiInterface.md#getinvoices) | **GET** /invoices/{invoiceType} | exports all issued invoices or only certain type issued in requested period


## Documentation For Models

 - [AvailabilityResponse](Resources/docs/Model/AvailabilityResponse.md)
 - [Base](Resources/docs/Model/Base.md)
 - [Bi](Resources/docs/Model/Bi.md)
 - [Company](Resources/docs/Model/Company.md)
 - [Country](Resources/docs/Model/Country.md)
 - [Datetime](Resources/docs/Model/Datetime.md)
 - [DocumentResponse](Resources/docs/Model/DocumentResponse.md)
 - [Equipment](Resources/docs/Model/Equipment.md)
 - [Extras](Resources/docs/Model/Extras.md)
 - [Flexibility](Resources/docs/Model/Flexibility.md)
 - [Image](Resources/docs/Model/Image.md)
 - [Invoice](Resources/docs/Model/Invoice.md)
 - [ItemTypeEnum](Resources/docs/Model/ItemTypeEnum.md)
 - [Layout](Resources/docs/Model/Layout.md)
 - [Offer](Resources/docs/Model/Offer.md)
 - [Price](Resources/docs/Model/Price.md)
 - [Product](Resources/docs/Model/Product.md)
 - [ProductEnum](Resources/docs/Model/ProductEnum.md)
 - [Reservation](Resources/docs/Model/Reservation.md)
 - [ReservationResponse](Resources/docs/Model/ReservationResponse.md)
 - [SailingArea](Resources/docs/Model/SailingArea.md)
 - [Services](Resources/docs/Model/Services.md)
 - [Shipyard](Resources/docs/Model/Shipyard.md)
 - [ShortAvailability](Resources/docs/Model/ShortAvailability.md)
 - [ValidForBases](Resources/docs/Model/ValidForBases.md)
 - [Vat](Resources/docs/Model/Vat.md)
 - [WorldRegion](Resources/docs/Model/WorldRegion.md)
 - [Yacht](Resources/docs/Model/Yacht.md)


## Documentation For Authorization


## bearerAuth

- **Type**: HTTP basic authentication


## Author


