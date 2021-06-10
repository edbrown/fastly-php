# OpenAPIClient-php

Fastly will stream log messages to the Scalyr account in the format specified in the Scalyr object.


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


$apiInstance = new OpenAPI\Client\Api\LoggingScalyrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$format_version = 2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$region = 'US'; // string | The region that log data will be sent to.
$token = 'token_example'; // string | The token to use for authentication ([https://www.scalyr.com/keys](https://www.scalyr.com/keys)).
$project_id = 'logplex'; // string | The name of the logfile within Scalyr.

try {
    $result = $apiInstance->createLogScalyr($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $region, $token, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingScalyrApi->createLogScalyr: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LoggingScalyrApi* | [**createLogScalyr**](docs/Api/LoggingScalyrApi.md#createlogscalyr) | **POST** /service/{service_id}/version/{version_id}/logging/scalyr | Create a Scalyr log endpoint
*LoggingScalyrApi* | [**deleteLogScalyr**](docs/Api/LoggingScalyrApi.md#deletelogscalyr) | **DELETE** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Delete the Scalyr log endpoint
*LoggingScalyrApi* | [**getLogScalyr**](docs/Api/LoggingScalyrApi.md#getlogscalyr) | **GET** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Get a Scalyr log endpoint
*LoggingScalyrApi* | [**listLogScalyr**](docs/Api/LoggingScalyrApi.md#listlogscalyr) | **GET** /service/{service_id}/version/{version_id}/logging/scalyr | List Scalyr log endpoints
*LoggingScalyrApi* | [**updateLogScalyr**](docs/Api/LoggingScalyrApi.md#updatelogscalyr) | **PUT** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Update the Scalyr log endpoint

## Models

- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelLoggingScalyr](docs/Model/ModelLoggingScalyr.md)

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