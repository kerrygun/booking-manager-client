# OpenAPI\Server\booking-manager-client\InvoiceApiInterface

All URIs are relative to *https://www.booking-manager.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoices**](InvoiceApiInterface.md#getInvoices) | **GET** /invoices/{invoiceType} | exports all issued invoices or only certain type issued in requested period


## Service Declaration
```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\InvoiceApi:
        tags:
            - { name: "open_api_server.api", api: "invoice" }
    # ...
```

## **getInvoices**
> OpenAPI\Server\Model\Invoice getInvoices($invoiceType, $dateFrom, $dateTo)

exports all issued invoices or only certain type issued in requested period

All invoices issued by the company inside Booking Manager can be retrieved this call. Advance invoices for payments, final invoices, stornos as well as cash invoices in the base.  Main purpose of invoice retrieval is to **automate the recording of invoices** into bookkeeping software.  # Invoice Types All invoices are treated the same within Booking Manager, however for better segmentation we provide a possibility to filter: - **0** All invoices - **1** Final invoices for bookings or direct  invoices for services - **2** Advance invoices for payments received - **3** Storno invoices, usuallyinvoices canceled  manually or payent(advance) invoices automatically canceled via finalinvoice # Important notes - Invoices can be retrieved as many times as necessary. Booking Manager keeps their historical record. - Once exported, **to preserve the data integrity with bookkeeping software** the original invoices are locked and unchangeable in the Booking Manager application - Having that in mind, it is important to export invoices only after they are finalised for the current taxation period - Date parameters **fetch all invoices, including the dates being sent**. Time part of the date parameter is ignored, all invoices from those days will be exported.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/InvoiceApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\booking-manager-client\InvoiceApiInterface;

class InvoiceApi implements InvoiceApiInterface
{

    // ...

    /**
     * Implementation of InvoiceApiInterface#getInvoices
     */
    public function getInvoices(int $invoiceType, \DateTime $dateFrom, \DateTime $dateTo, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceType** | **int**| &#x60;0&#x60; - all &#x60;1&#x60; - final &#x60;2&#x60; - advance &#x60;3&#x60; - storno |
 **dateFrom** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |
 **dateTo** | **\DateTime**| date format&amp;#58; yyyy-MM-ddTHH:mm:ss |

### Return type

[**OpenAPI\Server\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

