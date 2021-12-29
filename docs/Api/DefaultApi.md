# IdeaEngine\TzStats\DefaultApi

All URIs are relative to https://api.tzstats.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlockchainConfig()**](DefaultApi.md#getBlockchainConfig) | **GET** /explorer/config/{head|blockheight} | Blockchain Config
[**getBlockchainTip()**](DefaultApi.md#getBlockchainTip) | **GET** /explorer/tip | Blockchain Tip
[**getExplorerAccountsAccountId()**](DefaultApi.md#getExplorerAccountsAccountId) | **GET** /explorer/account/{hash} | Accounts
[**getExplorerBakers()**](DefaultApi.md#getExplorerBakers) | **GET** /explorer/bakers | Bakers
[**getExplorerBigmapId()**](DefaultApi.md#getExplorerBigmapId) | **GET** /explorer/bigmap/{id} | Bigmaps
[**getExplorerBigmapIdUpdates()**](DefaultApi.md#getExplorerBigmapIdUpdates) | **GET** /explorer/bigmap/{id}/updates | Bigmap Updates
[**getExplorerBigmapIdValues()**](DefaultApi.md#getExplorerBigmapIdValues) | **GET** /explorer/bigmap/{id}/values | Bigmap Info
[**getExplorerBlockHashHeightHead()**](DefaultApi.md#getExplorerBlockHashHeightHead) | **GET** /explorer/block/{hash|height|head} | Blocks
[**getExplorerConstantHash()**](DefaultApi.md#getExplorerConstantHash) | **GET** /explorer/constant/{hash} | Constants
[**getExplorerContractHash()**](DefaultApi.md#getExplorerContractHash) | **GET** /explorer/contract/{hash} | Contracts
[**getExplorerContractHashCalls()**](DefaultApi.md#getExplorerContractHashCalls) | **GET** /explorer/contract/{hash}/calls | Contract Calls
[**getExplorerContractHashScript()**](DefaultApi.md#getExplorerContractHashScript) | **GET** /explorer/contract/{hash}/script | Contract Scripts
[**getExplorerContractHashStorage()**](DefaultApi.md#getExplorerContractHashStorage) | **GET** /explorer/contract/{hash}/storage | Contract Storage
[**getExplorerCycleHeadNumber()**](DefaultApi.md#getExplorerCycleHeadNumber) | **GET** /explorer/cycle/{head|number} | Cycles
[**getExplorerElectionHeadHashNumber()**](DefaultApi.md#getExplorerElectionHeadHashNumber) | **GET** /explorer/election/{head|hash|number} | Elections
[**getExplorerOpHashId()**](DefaultApi.md#getExplorerOpHashId) | **GET** /explorer/op/{hash|id} | Operations
[**getIndexerStatus()**](DefaultApi.md#getIndexerStatus) | **GET** /explorer/status | Indexer Status
[**getMarketsTickers()**](DefaultApi.md#getMarketsTickers) | **GET** /markets/tickers | Market Tickers


## `getBlockchainConfig()`

```php
getBlockchainConfig($head_blockheight): \IdeaEngine\TzStats\Model\InlineResponse2001
```

Blockchain Config

Fetches blockchain configuration parameters.   This endpoint accepts head and a block height as path parameters, so you can access configurations of past protocols as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$head_blockheight = 'head_blockheight_example'; // string

try {
    $result = $apiInstance->getBlockchainConfig($head_blockheight);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBlockchainConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **head_blockheight** | **string**|  |

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockchainTip()`

```php
getBlockchainTip(): \IdeaEngine\TzStats\Model\InlineResponse2002
```

Blockchain Tip

Returns info about the most recent block, indexer status, protocol deployments and supply statistics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBlockchainTip();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBlockchainTip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerAccountsAccountId()`

```php
getExplorerAccountsAccountId($hash, $meta): \IdeaEngine\TzStats\Model\InlineResponse2003
```

Accounts

Provides information about the most recent state of accounts and smart contracts. Baker accounts and delegator accounts contain additional state information. See the table below for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string
$meta = 56; // int | embed optional metadata

try {
    $result = $apiInstance->getExplorerAccountsAccountId($hash, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerAccountsAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**|  |
 **meta** | **int**| embed optional metadata | [optional]

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerBakers()`

```php
getExplorerBakers(): \IdeaEngine\TzStats\Model\Baker[]
```

Bakers

Get a list of all active bakers, their current status and affiliation metadata. Optionally filter by status and country or get a random list of suggestions for a given account. This endpoint is supposed to be a simple to use listing feature for wallets and other dapps who like to enable delegation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getExplorerBakers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerBakers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TzStats\Model\Baker[]**](../Model/Baker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerBigmapId()`

```php
getExplorerBigmapId($id, $prim): \IdeaEngine\TzStats\Model\InlineResponse2004
```

Bigmaps

Returns information about the identity and type of a bigmap.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$prim = 56; // int | native Micheline primitive

try {
    $result = $apiInstance->getExplorerBigmapId($id, $prim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerBigmapId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **prim** | **int**| native Micheline primitive | [optional]

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerBigmapIdUpdates()`

```php
getExplorerBigmapIdUpdates($id, $prim, $unpack): \IdeaEngine\TzStats\Model\InlineResponse2005
```

Bigmap Updates

List historic updates to a bigmap in chronological order, including keys that have been deleted. Supports  paging with limit and cursor / offset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$prim = 56; // int | native Micheline primitives
$unpack = 56; // int | unpacking of packed data

try {
    $result = $apiInstance->getExplorerBigmapIdUpdates($id, $prim, $unpack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerBigmapIdUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **prim** | **int**| native Micheline primitives | [optional]
 **unpack** | **int**| unpacking of packed data | [optional]

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerBigmapIdValues()`

```php
getExplorerBigmapIdValues($id, $prim, $unpack): \IdeaEngine\TzStats\Model\InlineResponse2005
```

Bigmap Info

Lists key/value pairs in bigmaps with optional metadata, native primitives and unpacking. Supports  paging with limit and cursor / offset historic key listing using block (int64|hash)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$prim = True; // bool | native Micheline primitives
$unpack = True; // bool | unpacking of packed data

try {
    $result = $apiInstance->getExplorerBigmapIdValues($id, $prim, $unpack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerBigmapIdValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **prim** | **bool**| native Micheline primitives | [optional]
 **unpack** | **bool**| unpacking of packed data | [optional]

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerBlockHashHeightHead()`

```php
getExplorerBlockHashHeightHead($hash_height_head, $meta): \IdeaEngine\TzStats\Model\InlineResponse2006
```

Blocks

Fetches information about the specified block. Takes either a block hash, a block height or the string head as argument.   Use meta (boolean) to embed optional account metadata and rights to embed information about baking and endorsing rights as well as their status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash_height_head = 'hash_height_head_example'; // string
$meta = 56; // int | embed options account metadata

try {
    $result = $apiInstance->getExplorerBlockHashHeightHead($hash_height_head, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerBlockHashHeightHead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash_height_head** | **string**|  |
 **meta** | **int**| embed options account metadata | [optional]

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerConstantHash()`

```php
getExplorerConstantHash($hash)
```

Constants

Returns value and metadata for a registered global constant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string

try {
    $apiInstance->getExplorerConstantHash($hash);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerConstantHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerContractHash()`

```php
getExplorerContractHash($hash): \IdeaEngine\TzStats\Model\InlineResponse2007
```

Contracts

Returns information about a Tezos smart contract. For balance details call the explorer account endpoint using the contracts KT1 address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string

try {
    $result = $apiInstance->getExplorerContractHash($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerContractHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**|  |

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerContractHashCalls()`

```php
getExplorerContractHashCalls($hash, $unpack, $prim, $meta, $order): \IdeaEngine\TzStats\Model\Transaction[]
```

Contract Calls

Returns contract calls (transactions) sent to the contract with embedded parameters, storage and bigmap updates. Supports  listing of newer updates with since (int64|hash) filtering by entrypoint (int64|string) using id, name or branch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string
$unpack = 56; // int | unpack packed data
$prim = 56; // int | native Micheline primitives
$meta = 56; // int | include meta data
$order = 'order_example'; // string | order of calls

try {
    $result = $apiInstance->getExplorerContractHashCalls($hash, $unpack, $prim, $meta, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerContractHashCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**|  |
 **unpack** | **int**| unpack packed data | [optional]
 **prim** | **int**| native Micheline primitives | [optional]
 **meta** | **int**| include meta data | [optional]
 **order** | **string**| order of calls | [optional]

### Return type

[**\IdeaEngine\TzStats\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`, `multipart/form-data`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerContractHashScript()`

```php
getExplorerContractHashScript($hash): \IdeaEngine\TzStats\Model\InlineResponse2008
```

Contract Scripts

Returns the native Michelson JSON encoding of the deployed smart contract code as well as type specifications for call parameters, storage and bigmaps. Also contains decoded entrypoints and unfolded storage type.  JSON keys for entrypoint arguments always follow the convention <order>@<name>, i.e. they include an integer order number as first argument, followed by an optional @ symbol and an optional argument name extracted from type annotations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string

try {
    $result = $apiInstance->getExplorerContractHashScript($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerContractHashScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**|  |

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerContractHashStorage()`

```php
getExplorerContractHashStorage($hash, $meta, $prim, $unpack): \IdeaEngine\TzStats\Model\InlineResponse2009
```

Contract Storage

Returns the most recent or a historic version of the contracts storage. Supports  historic values when using block (int64|hash)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string
$meta = 56; // int
$prim = 56; // int
$unpack = 56; // int

try {
    $result = $apiInstance->getExplorerContractHashStorage($hash, $meta, $prim, $unpack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerContractHashStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**|  |
 **meta** | **int**|  | [optional]
 **prim** | **int**|  | [optional]
 **unpack** | **int**|  | [optional]

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerCycleHeadNumber()`

```php
getExplorerCycleHeadNumber($head_number): \IdeaEngine\TzStats\Model\InlineResponse20010
```

Cycles

Provides information about a consensus cycle, the past roll snapshot cycle and the future cycle whose rights are determined by the current cycle.   This endpoint accepts head and a cycle number as path parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$head_number = 'head_number_example'; // string

try {
    $result = $apiInstance->getExplorerCycleHeadNumber($head_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerCycleHeadNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **head_number** | **string**|  |

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerElectionHeadHashNumber()`

```php
getExplorerElectionHeadHashNumber($head_hash_number): \IdeaEngine\TzStats\Model\InlineResponse20011
```

Elections

On-chain elections can be queried by proposal hash or sequence number. An election contains a complete set of data on a past or the currently ongoing (head) on-chain voting process, including up to four voting periods. Voting periods may be empty when no proposal has been published. Only the last voting period of the last election can be in state open. Ballots represent the individual ballot operations sent by bakers during votes or the up-votes to a proposal during the first voting period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$head_hash_number = 'head_hash_number_example'; // string

try {
    $result = $apiInstance->getExplorerElectionHeadHashNumber($head_hash_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerElectionHeadHashNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **head_hash_number** | **string**|  |

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExplorerOpHashId()`

```php
getExplorerOpHashId($hash_id): \IdeaEngine\TzStats\Model\Operation[]
```

Operations

Returns info about a single operation or a list of related operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash_id = 'hash_id_example'; // string

try {
    $result = $apiInstance->getExplorerOpHashId($hash_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExplorerOpHashId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash_id** | **string**|  |

### Return type

[**\IdeaEngine\TzStats\Model\Operation[]**](../Model/Operation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIndexerStatus()`

```php
getIndexerStatus(): \IdeaEngine\TzStats\Model\InlineResponse200
```

Indexer Status

Returns the current indexer status, useful to check of the indexer is in sync with the blockchain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIndexerStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getIndexerStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TzStats\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarketsTickers()`

```php
getMarketsTickers(): \IdeaEngine\TzStats\Model\Ticker[]
```

Market Tickers

Fetches a list of market price tickers with 24h OHLCV data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TzStats\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMarketsTickers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMarketsTickers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TzStats\Model\Ticker[]**](../Model/Ticker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
