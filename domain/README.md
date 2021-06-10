# OpenAPIClient-php

A domain represents the domain name through which visitors will retrieve content. There can be multiple domains for a service.


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


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$domain_name = www.example.com; // string

try {
    $result = $apiInstance->checkDomain($service_id, $version_id, $domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->checkDomain: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ServicesDomainApi* | [**checkDomain**](docs/Api/ServicesDomainApi.md#checkdomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name}/check | Validate DNS configuration for a single domain on a service
*ServicesDomainApi* | [**checkDomains**](docs/Api/ServicesDomainApi.md#checkdomains) | **GET** /service/{service_id}/version/{version_id}/domain/check_all | Validate DNS configuration for all domains on a service
*ServicesDomainApi* | [**createDomain**](docs/Api/ServicesDomainApi.md#createdomain) | **POST** /service/{service_id}/version/{version_id}/domain | Add a domain name to a service
*ServicesDomainApi* | [**deleteDomain**](docs/Api/ServicesDomainApi.md#deletedomain) | **DELETE** /service/{service_id}/version/{version_id}/domain/{domain_name} | Remove a domain from a service
*ServicesDomainApi* | [**getDomain**](docs/Api/ServicesDomainApi.md#getdomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name} | Describe a domain
*ServicesDomainApi* | [**listDomains**](docs/Api/ServicesDomainApi.md#listdomains) | **GET** /service/{service_id}/version/{version_id}/domain | List domains
*ServicesDomainApi* | [**updateDomain**](docs/Api/ServicesDomainApi.md#updatedomain) | **PUT** /service/{service_id}/version/{version_id}/domain/{domain_name} | Update a domain

## Models

- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelDomain](docs/Model/ModelDomain.md)

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