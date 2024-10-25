# PostPuma\PostsApi

All URIs are relative to https://app.postpuma.com/app/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPost()**](PostsApi.md#createPost) | **POST** /{workspaceId}/posts | Create post |
| [**deletePost()**](PostsApi.md#deletePost) | **DELETE** /{workspaceId}/posts/{postUuid} | Delete post |
| [**deletePosts()**](PostsApi.md#deletePosts) | **DELETE** /{workspaceId}/posts | Delete posts |
| [**getPost()**](PostsApi.md#getPost) | **GET** /{workspaceId}/posts/{postUuid} | Get post |
| [**listPosts()**](PostsApi.md#listPosts) | **GET** /{workspaceId}/posts | List posts |
| [**queuePost()**](PostsApi.md#queuePost) | **POST** /{workspaceId}/posts/add-to-queue/{postUuid} | Queue post |
| [**schedulePost()**](PostsApi.md#schedulePost) | **POST** /{workspaceId}/posts/schedule/{postUuid} | Schedule post |
| [**updatePost()**](PostsApi.md#updatePost) | **PUT** /{workspaceId}/posts/{postUuid} | Update post |


## `createPost()`

```php
createPost($workspace_id, $create_post_request): \PostPuma\Client\Model\Post
```

Create post

Create post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$create_post_request = new \PostPuma\Client\Model\CreatePostRequest(); // \PostPuma\Client\Model\CreatePostRequest

try {
    $result = $apiInstance->createPost($workspace_id, $create_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **create_post_request** | [**\PostPuma\Client\Model\CreatePostRequest**](../Model/CreatePostRequest.md)|  | [optional] |

### Return type

[**\PostPuma\Client\Model\Post**](../Model/Post.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePost()`

```php
deletePost($post_uuid, $workspace_id, $delete_post_request): \PostPuma\Client\Model\DeletePosts200Response
```

Delete post

Delete post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$workspace_id = 'workspace_id_example'; // string
$delete_post_request = new \PostPuma\Client\Model\DeletePostRequest(); // \PostPuma\Client\Model\DeletePostRequest

try {
    $result = $apiInstance->deletePost($post_uuid, $workspace_id, $delete_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **workspace_id** | **string**|  | |
| **delete_post_request** | [**\PostPuma\Client\Model\DeletePostRequest**](../Model/DeletePostRequest.md)|  | [optional] |

### Return type

[**\PostPuma\Client\Model\DeletePosts200Response**](../Model/DeletePosts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePosts()`

```php
deletePosts($workspace_id, $delete_posts_request): \PostPuma\Client\Model\DeletePosts200Response
```

Delete posts

Delete posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$delete_posts_request = new \PostPuma\Client\Model\DeletePostsRequest(); // \PostPuma\Client\Model\DeletePostsRequest

try {
    $result = $apiInstance->deletePosts($workspace_id, $delete_posts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **delete_posts_request** | [**\PostPuma\Client\Model\DeletePostsRequest**](../Model/DeletePostsRequest.md)|  | [optional] |

### Return type

[**\PostPuma\Client\Model\DeletePosts200Response**](../Model/DeletePosts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPost()`

```php
getPost($post_uuid, $workspace_id): \PostPuma\Client\Model\Post
```

Get post

Get post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getPost($post_uuid, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **workspace_id** | **string**|  | |

### Return type

[**\PostPuma\Client\Model\Post**](../Model/Post.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPosts()`

```php
listPosts($workspace_id, $page): \PostPuma\Client\Model\ListPosts200Response
```

List posts

List posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$page = 56; // int | Page

try {
    $result = $apiInstance->listPosts($workspace_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->listPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **page** | **int**| Page | [optional] |

### Return type

[**\PostPuma\Client\Model\ListPosts200Response**](../Model/ListPosts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queuePost()`

```php
queuePost($post_uuid, $workspace_id): \PostPuma\Client\Model\QueuePost200Response
```

Queue post

Queue post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->queuePost($post_uuid, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->queuePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **workspace_id** | **string**|  | |

### Return type

[**\PostPuma\Client\Model\QueuePost200Response**](../Model/QueuePost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schedulePost()`

```php
schedulePost($post_uuid, $workspace_id, $schedule_post_request): \PostPuma\Client\Model\QueuePost200Response
```

Schedule post

Schedule post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$workspace_id = 'workspace_id_example'; // string
$schedule_post_request = new \PostPuma\Client\Model\SchedulePostRequest(); // \PostPuma\Client\Model\SchedulePostRequest

try {
    $result = $apiInstance->schedulePost($post_uuid, $workspace_id, $schedule_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->schedulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **workspace_id** | **string**|  | |
| **schedule_post_request** | [**\PostPuma\Client\Model\SchedulePostRequest**](../Model/SchedulePostRequest.md)|  | [optional] |

### Return type

[**\PostPuma\Client\Model\QueuePost200Response**](../Model/QueuePost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePost()`

```php
updatePost($post_uuid, $workspace_id, $update_post_request): \PostPuma\Client\Model\DeleteMediaFiles200Response
```

Update post

Update post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$workspace_id = 'workspace_id_example'; // string
$update_post_request = new \PostPuma\Client\Model\UpdatePostRequest(); // \PostPuma\Client\Model\UpdatePostRequest

try {
    $result = $apiInstance->updatePost($post_uuid, $workspace_id, $update_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->updatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **workspace_id** | **string**|  | |
| **update_post_request** | [**\PostPuma\Client\Model\UpdatePostRequest**](../Model/UpdatePostRequest.md)|  | [optional] |

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
