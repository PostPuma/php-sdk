# OpenAPI\Client\PostsApi

All URIs are relative to https://app.postpuma.com/app/5afgg2-1egj4n-7612ng-g313ie, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPost()**](PostsApi.md#createPost) | **POST** /posts | Create post |
| [**deletePost()**](PostsApi.md#deletePost) | **DELETE** /posts/{postUuid} | Delete post |
| [**deletePosts()**](PostsApi.md#deletePosts) | **DELETE** /posts | Delete posts |
| [**getPost()**](PostsApi.md#getPost) | **GET** /posts/{postUuid} | Get post |
| [**listPosts()**](PostsApi.md#listPosts) | **GET** /posts | List posts |
| [**queuePost()**](PostsApi.md#queuePost) | **POST** /posts/add-to-queue/{postUuid} | Queue post |
| [**schedulePost()**](PostsApi.md#schedulePost) | **POST** /posts/schedule/{postUuid} | Schedule post |
| [**updatePost()**](PostsApi.md#updatePost) | **PUT** /posts/{postUuid} | Update post |


## `createPost()`

```php
createPost($create_post_request): \OpenAPI\Client\Model\Post
```

Create post

Create post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_post_request = new \OpenAPI\Client\Model\CreatePostRequest(); // \OpenAPI\Client\Model\CreatePostRequest

try {
    $result = $apiInstance->createPost($create_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_post_request** | [**\OpenAPI\Client\Model\CreatePostRequest**](../Model/CreatePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Post**](../Model/Post.md)

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
deletePost($post_uuid, $delete_post_request): \OpenAPI\Client\Model\DeletePosts200Response
```

Delete post

Delete post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$delete_post_request = new \OpenAPI\Client\Model\DeletePostRequest(); // \OpenAPI\Client\Model\DeletePostRequest

try {
    $result = $apiInstance->deletePost($post_uuid, $delete_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **delete_post_request** | [**\OpenAPI\Client\Model\DeletePostRequest**](../Model/DeletePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeletePosts200Response**](../Model/DeletePosts200Response.md)

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
deletePosts($delete_posts_request): \OpenAPI\Client\Model\DeletePosts200Response
```

Delete posts

Delete posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_posts_request = new \OpenAPI\Client\Model\DeletePostsRequest(); // \OpenAPI\Client\Model\DeletePostsRequest

try {
    $result = $apiInstance->deletePosts($delete_posts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_posts_request** | [**\OpenAPI\Client\Model\DeletePostsRequest**](../Model/DeletePostsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeletePosts200Response**](../Model/DeletePosts200Response.md)

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
getPost($post_uuid): \OpenAPI\Client\Model\Post
```

Get post

Get post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID

try {
    $result = $apiInstance->getPost($post_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |

### Return type

[**\OpenAPI\Client\Model\Post**](../Model/Post.md)

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
listPosts($page): \OpenAPI\Client\Model\ListPosts200Response
```

List posts

List posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page

try {
    $result = $apiInstance->listPosts($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->listPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListPosts200Response**](../Model/ListPosts200Response.md)

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
queuePost($post_uuid): \OpenAPI\Client\Model\QueuePost200Response
```

Queue post

Queue post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID

try {
    $result = $apiInstance->queuePost($post_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->queuePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |

### Return type

[**\OpenAPI\Client\Model\QueuePost200Response**](../Model/QueuePost200Response.md)

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
schedulePost($post_uuid, $schedule_post_request): \OpenAPI\Client\Model\QueuePost200Response
```

Schedule post

Schedule post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$schedule_post_request = new \OpenAPI\Client\Model\SchedulePostRequest(); // \OpenAPI\Client\Model\SchedulePostRequest

try {
    $result = $apiInstance->schedulePost($post_uuid, $schedule_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->schedulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **schedule_post_request** | [**\OpenAPI\Client\Model\SchedulePostRequest**](../Model/SchedulePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\QueuePost200Response**](../Model/QueuePost200Response.md)

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
updatePost($post_uuid, $update_post_request): \OpenAPI\Client\Model\DeleteMediaFiles200Response
```

Update post

Update post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_uuid = 'post_uuid_example'; // string | Post UUID
$update_post_request = new \OpenAPI\Client\Model\UpdatePostRequest(); // \OpenAPI\Client\Model\UpdatePostRequest

try {
    $result = $apiInstance->updatePost($post_uuid, $update_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->updatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_uuid** | **string**| Post UUID | |
| **update_post_request** | [**\OpenAPI\Client\Model\UpdatePostRequest**](../Model/UpdatePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeleteMediaFiles200Response**](../Model/DeleteMediaFiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
