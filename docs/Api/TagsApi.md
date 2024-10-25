# PostPuma\TagsApi

All URIs are relative to https://app.postpuma.com/app/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTag()**](TagsApi.md#createTag) | **POST** /{workspaceId}/tags | Create tag |
| [**deleteTag()**](TagsApi.md#deleteTag) | **DELETE** /{workspaceId}/tags/{tagUuid} | Delete tag |
| [**getTag()**](TagsApi.md#getTag) | **GET** /{workspaceId}/tags/{tagUuid} | Get tag |
| [**listTags()**](TagsApi.md#listTags) | **GET** /{workspaceId}/tags | List tags |
| [**updateTag()**](TagsApi.md#updateTag) | **PUT** /{workspaceId}/tags/{tagUuid} | Update tag |


## `createTag()`

```php
createTag($workspace_id, $create_tag_request): \PostPuma\Client\Model\Tag
```

Create tag

Create tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace ID
$create_tag_request = new \PostPuma\Client\Model\CreateTagRequest(); // \PostPuma\Client\Model\CreateTagRequest

try {
    $result = $apiInstance->createTag($workspace_id, $create_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace ID | |
| **create_tag_request** | [**\PostPuma\Client\Model\CreateTagRequest**](../Model/CreateTagRequest.md)|  | [optional] |

### Return type

[**\PostPuma\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($tag_uuid, $workspace_id): \PostPuma\Client\Model\DeleteMediaFiles200Response
```

Delete tag

Delete tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_uuid = 'tag_uuid_example'; // string | Tag UUID
$workspace_id = 'workspace_id_example'; // string | Workspace ID

try {
    $result = $apiInstance->deleteTag($tag_uuid, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_uuid** | **string**| Tag UUID | |
| **workspace_id** | **string**| Workspace ID | |

### Return type

[**\PostPuma\Client\Model\DeleteMediaFiles200Response**](../Model/DeleteMediaFiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTag()`

```php
getTag($tag_uuid, $workspace_id): \PostPuma\Client\Model\Tag
```

Get tag

Get tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_uuid = 'tag_uuid_example'; // string | Tag UUID
$workspace_id = 'workspace_id_example'; // string | Workspace ID

try {
    $result = $apiInstance->getTag($tag_uuid, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_uuid** | **string**| Tag UUID | |
| **workspace_id** | **string**| Workspace ID | |

### Return type

[**\PostPuma\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTags()`

```php
listTags($workspace_id): \PostPuma\Client\Model\ListTags200Response
```

List tags

List tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace ID

try {
    $result = $apiInstance->listTags($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace ID | |

### Return type

[**\PostPuma\Client\Model\ListTags200Response**](../Model/ListTags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTag()`

```php
updateTag($tag_uuid, $workspace_id, $update_tag_request): \PostPuma\Client\Model\DeleteMediaFiles200Response
```

Update tag

Update tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_uuid = 'tag_uuid_example'; // string | Tag UUID
$workspace_id = 'workspace_id_example'; // string | Workspace ID
$update_tag_request = new \PostPuma\Client\Model\UpdateTagRequest(); // \PostPuma\Client\Model\UpdateTagRequest

try {
    $result = $apiInstance->updateTag($tag_uuid, $workspace_id, $update_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_uuid** | **string**| Tag UUID | |
| **workspace_id** | **string**| Workspace ID | |
| **update_tag_request** | [**\PostPuma\Client\Model\UpdateTagRequest**](../Model/UpdateTagRequest.md)|  | [optional] |

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
