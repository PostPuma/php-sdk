# PostPuma\MediaApi

All URIs are relative to https://app.postpuma.com/app/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMediaFiles()**](MediaApi.md#deleteMediaFiles) | **DELETE** /{workspaceId}/media | Delete media files |
| [**getMediaFile()**](MediaApi.md#getMediaFile) | **GET** /{workspaceId}/media/{mediaUuid} | Get media file |
| [**listMediaFiles()**](MediaApi.md#listMediaFiles) | **GET** /{workspaceId}/media | List media files |
| [**uploadMediaFile()**](MediaApi.md#uploadMediaFile) | **POST** /{workspaceId}/media | Upload media file |


## `deleteMediaFiles()`

```php
deleteMediaFiles($workspace_id, $delete_media_files_request): \PostPuma\Client\Model\DeleteMediaFiles200Response
```

Delete media files

Delete media files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$delete_media_files_request = new \PostPuma\Client\Model\DeleteMediaFilesRequest(); // \PostPuma\Client\Model\DeleteMediaFilesRequest

try {
    $result = $apiInstance->deleteMediaFiles($workspace_id, $delete_media_files_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->deleteMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **delete_media_files_request** | [**\PostPuma\Client\Model\DeleteMediaFilesRequest**](../Model/DeleteMediaFilesRequest.md)|  | [optional] |

### Return type

[**\PostPuma\Client\Model\DeleteMediaFiles200Response**](../Model/DeleteMediaFiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaFile()`

```php
getMediaFile($media_uuid, $workspace_id): \PostPuma\Client\Model\MediaFile
```

Get media file

Get media file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_uuid = 'media_uuid_example'; // string | Media UUID
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getMediaFile($media_uuid, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getMediaFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_uuid** | **string**| Media UUID | |
| **workspace_id** | **string**|  | |

### Return type

[**\PostPuma\Client\Model\MediaFile**](../Model/MediaFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMediaFiles()`

```php
listMediaFiles($workspace_id, $page): \PostPuma\Client\Model\ListMediaFiles200Response
```

List media files

List media files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$page = 56; // int | Page number

try {
    $result = $apiInstance->listMediaFiles($workspace_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->listMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **page** | **int**| Page number | [optional] |

### Return type

[**\PostPuma\Client\Model\ListMediaFiles200Response**](../Model/ListMediaFiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMediaFile()`

```php
uploadMediaFile($workspace_id, $file): \PostPuma\Client\Model\MediaFile
```

Upload media file

Upload media file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadMediaFile($workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->uploadMediaFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\PostPuma\Client\Model\MediaFile**](../Model/MediaFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
