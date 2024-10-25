# PostPuma

PostPuma API specifications


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/postpuma/php-sdk.git"
    }
  ],
  "require": {
    "postpuma/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/PostPuma/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = PostPuma\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PostPuma\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID

try {
    $result = $apiInstance->getAccount($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://app.postpuma.com/app/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /{workspaceId}/accounts/{accountUuid} | Get account
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /{workspaceId}/accounts | List accounts
*MediaApi* | [**deleteMediaFiles**](docs/Api/MediaApi.md#deletemediafiles) | **DELETE** /{workspaceId}/media | Delete media files
*MediaApi* | [**getMediaFile**](docs/Api/MediaApi.md#getmediafile) | **GET** /{workspaceId}/media/{mediaUuid} | Get media file
*MediaApi* | [**listMediaFiles**](docs/Api/MediaApi.md#listmediafiles) | **GET** /{workspaceId}/media | List media files
*MediaApi* | [**uploadMediaFile**](docs/Api/MediaApi.md#uploadmediafile) | **POST** /{workspaceId}/media | Upload media file
*PostsApi* | [**createPost**](docs/Api/PostsApi.md#createpost) | **POST** /{workspaceId}/posts | Create post
*PostsApi* | [**deletePost**](docs/Api/PostsApi.md#deletepost) | **DELETE** /{workspaceId}/posts/{postUuid} | Delete post
*PostsApi* | [**deletePosts**](docs/Api/PostsApi.md#deleteposts) | **DELETE** /{workspaceId}/posts | Delete posts
*PostsApi* | [**getPost**](docs/Api/PostsApi.md#getpost) | **GET** /{workspaceId}/posts/{postUuid} | Get post
*PostsApi* | [**listPosts**](docs/Api/PostsApi.md#listposts) | **GET** /{workspaceId}/posts | List posts
*PostsApi* | [**queuePost**](docs/Api/PostsApi.md#queuepost) | **POST** /{workspaceId}/posts/add-to-queue/{postUuid} | Queue post
*PostsApi* | [**schedulePost**](docs/Api/PostsApi.md#schedulepost) | **POST** /{workspaceId}/posts/schedule/{postUuid} | Schedule post
*PostsApi* | [**updatePost**](docs/Api/PostsApi.md#updatepost) | **PUT** /{workspaceId}/posts/{postUuid} | Update post
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /{workspaceId}/tags | Create tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /{workspaceId}/tags/{tagUuid} | Delete tag
*TagsApi* | [**getTag**](docs/Api/TagsApi.md#gettag) | **GET** /{workspaceId}/tags/{tagUuid} | Get tag
*TagsApi* | [**listTags**](docs/Api/TagsApi.md#listtags) | **GET** /{workspaceId}/tags | List tags
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /{workspaceId}/tags/{tagUuid} | Update tag

## Models

- [Account](docs/Model/Account.md)
- [AccountData](docs/Model/AccountData.md)
- [CreatePostRequest](docs/Model/CreatePostRequest.md)
- [CreateTagRequest](docs/Model/CreateTagRequest.md)
- [DeleteMediaFiles200Response](docs/Model/DeleteMediaFiles200Response.md)
- [DeleteMediaFilesRequest](docs/Model/DeleteMediaFilesRequest.md)
- [DeletePostRequest](docs/Model/DeletePostRequest.md)
- [DeletePosts200Response](docs/Model/DeletePosts200Response.md)
- [DeletePosts200ResponseOneOf](docs/Model/DeletePosts200ResponseOneOf.md)
- [DeletePosts200ResponseOneOf1](docs/Model/DeletePosts200ResponseOneOf1.md)
- [DeletePostsRequest](docs/Model/DeletePostsRequest.md)
- [ListAccounts200Response](docs/Model/ListAccounts200Response.md)
- [ListMediaFiles200Response](docs/Model/ListMediaFiles200Response.md)
- [ListPosts200Response](docs/Model/ListPosts200Response.md)
- [ListTags200Response](docs/Model/ListTags200Response.md)
- [MediaFile](docs/Model/MediaFile.md)
- [Post](docs/Model/Post.md)
- [PostUser](docs/Model/PostUser.md)
- [QueuePost200Response](docs/Model/QueuePost200Response.md)
- [SchedulePostRequest](docs/Model/SchedulePostRequest.md)
- [Tag](docs/Model/Tag.md)
- [UpdatePostRequest](docs/Model/UpdatePostRequest.md)
- [UpdateTagRequest](docs/Model/UpdateTagRequest.md)
- [Version](docs/Model/Version.md)
- [VersionContent](docs/Model/VersionContent.md)
- [VersionOptions](docs/Model/VersionOptions.md)
- [VersionOptionsInstagram](docs/Model/VersionOptionsInstagram.md)
- [VersionOptionsLinkedin](docs/Model/VersionOptionsLinkedin.md)
- [VersionOptionsMastodon](docs/Model/VersionOptionsMastodon.md)
- [VersionOptionsPinterest](docs/Model/VersionOptionsPinterest.md)
- [VersionOptionsPinterestBoards](docs/Model/VersionOptionsPinterestBoards.md)
- [VersionOptionsTiktok](docs/Model/VersionOptionsTiktok.md)
- [VersionOptionsTiktokPrivacyLevel](docs/Model/VersionOptionsTiktokPrivacyLevel.md)
- [VersionOptionsYoutube](docs/Model/VersionOptionsYoutube.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@postpuma.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
