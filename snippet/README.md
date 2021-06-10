# OpenAPIClient-php

VCL Snippets are blocks of VCL logic inserted into your service's configuration that don't require custom VCL.


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


$apiInstance = new OpenAPI\Client\Api\VclServicesSnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->createSnippet($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesSnippetApi->createSnippet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*VclServicesSnippetApi* | [**createSnippet**](docs/Api/VclServicesSnippetApi.md#createsnippet) | **POST** /service/{service_id}/version/{version_id}/snippet | Create a snippet
*VclServicesSnippetApi* | [**deleteSnippet**](docs/Api/VclServicesSnippetApi.md#deletesnippet) | **DELETE** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Delete a snippet
*VclServicesSnippetApi* | [**getSnippet**](docs/Api/VclServicesSnippetApi.md#getsnippet) | **GET** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Get a versioned snippet
*VclServicesSnippetApi* | [**getSnippetDynamic**](docs/Api/VclServicesSnippetApi.md#getsnippetdynamic) | **GET** /service/{service_id}/snippet/{snippet_id} | Get a dynamic snippet
*VclServicesSnippetApi* | [**listSnippets**](docs/Api/VclServicesSnippetApi.md#listsnippets) | **GET** /service/{service_id}/version/{version_id}/snippet | List snippets
*VclServicesSnippetApi* | [**updateSnippet**](docs/Api/VclServicesSnippetApi.md#updatesnippet) | **PUT** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Update a versioned snippet
*VclServicesSnippetApi* | [**updateSnippetDynamic**](docs/Api/VclServicesSnippetApi.md#updatesnippetdynamic) | **PUT** /service/{service_id}/snippet/{snippet_id} | Update a dynamic snippet

## Models

- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelSnippet](docs/Model/ModelSnippet.md)

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