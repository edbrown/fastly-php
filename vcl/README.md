# OpenAPIClient-php

A VCL is a Varnish configuration file used to customize the configuration for a Service.


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


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->createCustomVcl($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->createCustomVcl: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*VclServicesVclApi* | [**createCustomVcl**](docs/Api/VclServicesVclApi.md#createcustomvcl) | **POST** /service/{service_id}/version/{version_id}/vcl | Create a custom VCL file
*VclServicesVclApi* | [**deleteCustomVcl**](docs/Api/VclServicesVclApi.md#deletecustomvcl) | **DELETE** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Delete a custom VCL file
*VclServicesVclApi* | [**getCustomVcl**](docs/Api/VclServicesVclApi.md#getcustomvcl) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Get a custom VCL file
*VclServicesVclApi* | [**getCustomVclBoilerplate**](docs/Api/VclServicesVclApi.md#getcustomvclboilerplate) | **GET** /service/{service_id}/version/{version_id}/boilerplate | Get boilerplate VCL
*VclServicesVclApi* | [**getCustomVclGenerated**](docs/Api/VclServicesVclApi.md#getcustomvclgenerated) | **GET** /service/{service_id}/version/{version_id}/generated_vcl | Get the generated VCL for a service
*VclServicesVclApi* | [**getCustomVclGeneratedHighlighted**](docs/Api/VclServicesVclApi.md#getcustomvclgeneratedhighlighted) | **GET** /service/{service_id}/version/{version_id}/generated_vcl/content | Get the generated VCL with syntax highlighting
*VclServicesVclApi* | [**getCustomVclHighlighted**](docs/Api/VclServicesVclApi.md#getcustomvclhighlighted) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/content | Get a custom VCL file with syntax highlighting
*VclServicesVclApi* | [**getCustomVclRaw**](docs/Api/VclServicesVclApi.md#getcustomvclraw) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/download | Download a custom VCL file
*VclServicesVclApi* | [**listCustomVcl**](docs/Api/VclServicesVclApi.md#listcustomvcl) | **GET** /service/{service_id}/version/{version_id}/vcl | List custom VCL files
*VclServicesVclApi* | [**setCustomVclMain**](docs/Api/VclServicesVclApi.md#setcustomvclmain) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/main | Set a custom VCL file as main
*VclServicesVclApi* | [**updateCustomVcl**](docs/Api/VclServicesVclApi.md#updatecustomvcl) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Update a custom VCL file

## Models

- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelVcl](docs/Model/ModelVcl.md)

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