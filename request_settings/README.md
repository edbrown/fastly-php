# OpenAPIClient-php

Settings used to customize Fastly's request handling. When used with [Conditions](#condition) the Request Settings object allows you to fine tune how specific types of requests are handled.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesRequestSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->createRequestSettings($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesRequestSettingsApi->createRequestSettings: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*VclServicesRequestSettingsApi* | [**createRequestSettings**](docs/Api/VclServicesRequestSettingsApi.md#createrequestsettings) | **POST** /service/{service_id}/version/{version_id}/request_settings | Create a Request Settings object
*VclServicesRequestSettingsApi* | [**deleteRequestSettings**](docs/Api/VclServicesRequestSettingsApi.md#deleterequestsettings) | **DELETE** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Delete a Request Settings object
*VclServicesRequestSettingsApi* | [**getRequestSettings**](docs/Api/VclServicesRequestSettingsApi.md#getrequestsettings) | **GET** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Get a Request Settings object
*VclServicesRequestSettingsApi* | [**listRequestSettings**](docs/Api/VclServicesRequestSettingsApi.md#listrequestsettings) | **GET** /service/{service_id}/version/{version_id}/request_settings | List Request Settings objects
*VclServicesRequestSettingsApi* | [**updateRequestSettings**](docs/Api/VclServicesRequestSettingsApi.md#updaterequestsettings) | **PUT** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Update a Request Settings object

## Models

- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelRequestSettings](docs/Model/ModelRequestSettings.md)

## Authorization

### token_engineer

- **Type**: API key
- **API key parameter name**: Fastly-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`