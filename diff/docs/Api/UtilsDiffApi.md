# OpenAPI\Client\UtilsDiffApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**diffServiceVersions()**](UtilsDiffApi.md#diffServiceVersions) | **GET** /service/{service_id}/diff/from/{from_version_id}/to/{to_version_id} | Diff two service versions


## `diffServiceVersions()`

```php
diffServiceVersions($service_id, $from_version_id, $to_version_id, $format): \OpenAPI\Client\Model\InlineResponse200
```

Diff two service versions

Get diff between two versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilsDiffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$from_version_id = 1; // int | The version number of the service to which changes in the generated VCL are being compared. Can either be a positive number from 1 to your maximum version or a negative number from -1 down (-1 is latest version etc).
$to_version_id = 2; // int | The version number of the service from which changes in the generated VCL are being compared. Uses same numbering scheme as `from`.
$format = 'text'; // string | Optional method to format the diff field.

try {
    $result = $apiInstance->diffServiceVersions($service_id, $from_version_id, $to_version_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsDiffApi->diffServiceVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **from_version_id** | **int**| The version number of the service to which changes in the generated VCL are being compared. Can either be a positive number from 1 to your maximum version or a negative number from -1 down (-1 is latest version etc). |
 **to_version_id** | **int**| The version number of the service from which changes in the generated VCL are being compared. Uses same numbering scheme as &#x60;from&#x60;. |
 **format** | **string**| Optional method to format the diff field. | [optional] [default to &#39;text&#39;]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)