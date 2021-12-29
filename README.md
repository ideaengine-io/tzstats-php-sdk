# TzStats

API for TZstats.com, useful for viewing information about the Tezos blockchain.

For more information, please visit [https://github.com/ideaengine-io/tzstats-php-sdk](https://github.com/ideaengine-io/tzstats-php-sdk).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ideaengine-io/tzstats-php-sdk.git"
    }
  ],
  "require": {
    "ideaengine-io/tzstats-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/TzStats/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.tzstats.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**getBlockchainConfig**](docs/Api/DefaultApi.md#getblockchainconfig) | **GET** /explorer/config/{head|blockheight} | Blockchain Config
*DefaultApi* | [**getBlockchainTip**](docs/Api/DefaultApi.md#getblockchaintip) | **GET** /explorer/tip | Blockchain Tip
*DefaultApi* | [**getExplorerAccountsAccountId**](docs/Api/DefaultApi.md#getexploreraccountsaccountid) | **GET** /explorer/account/{hash} | Accounts
*DefaultApi* | [**getExplorerBakers**](docs/Api/DefaultApi.md#getexplorerbakers) | **GET** /explorer/bakers | Bakers
*DefaultApi* | [**getExplorerBigmapId**](docs/Api/DefaultApi.md#getexplorerbigmapid) | **GET** /explorer/bigmap/{id} | Bigmaps
*DefaultApi* | [**getExplorerBigmapIdUpdates**](docs/Api/DefaultApi.md#getexplorerbigmapidupdates) | **GET** /explorer/bigmap/{id}/updates | Bigmap Updates
*DefaultApi* | [**getExplorerBigmapIdValues**](docs/Api/DefaultApi.md#getexplorerbigmapidvalues) | **GET** /explorer/bigmap/{id}/values | Bigmap Info
*DefaultApi* | [**getExplorerBlockHashHeightHead**](docs/Api/DefaultApi.md#getexplorerblockhashheighthead) | **GET** /explorer/block/{hash|height|head} | Blocks
*DefaultApi* | [**getExplorerConstantHash**](docs/Api/DefaultApi.md#getexplorerconstanthash) | **GET** /explorer/constant/{hash} | Constants
*DefaultApi* | [**getExplorerContractHash**](docs/Api/DefaultApi.md#getexplorercontracthash) | **GET** /explorer/contract/{hash} | Contracts
*DefaultApi* | [**getExplorerContractHashCalls**](docs/Api/DefaultApi.md#getexplorercontracthashcalls) | **GET** /explorer/contract/{hash}/calls | Contract Calls
*DefaultApi* | [**getExplorerContractHashScript**](docs/Api/DefaultApi.md#getexplorercontracthashscript) | **GET** /explorer/contract/{hash}/script | Contract Scripts
*DefaultApi* | [**getExplorerContractHashStorage**](docs/Api/DefaultApi.md#getexplorercontracthashstorage) | **GET** /explorer/contract/{hash}/storage | Contract Storage
*DefaultApi* | [**getExplorerCycleHeadNumber**](docs/Api/DefaultApi.md#getexplorercycleheadnumber) | **GET** /explorer/cycle/{head|number} | Cycles
*DefaultApi* | [**getExplorerElectionHeadHashNumber**](docs/Api/DefaultApi.md#getexplorerelectionheadhashnumber) | **GET** /explorer/election/{head|hash|number} | Elections
*DefaultApi* | [**getExplorerOpHashId**](docs/Api/DefaultApi.md#getexplorerophashid) | **GET** /explorer/op/{hash|id} | Operations
*DefaultApi* | [**getIndexerStatus**](docs/Api/DefaultApi.md#getindexerstatus) | **GET** /explorer/status | Indexer Status
*DefaultApi* | [**getMarketsTickers**](docs/Api/DefaultApi.md#getmarketstickers) | **GET** /markets/tickers | Market Tickers

## Models

- [Baker](docs/Model/Baker.md)
- [Contract](docs/Model/Contract.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20010SnapshotCycle](docs/Model/InlineResponse20010SnapshotCycle.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20011Proposal](docs/Model/InlineResponse20011Proposal.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2002Status](docs/Model/InlineResponse2002Status.md)
- [InlineResponse2002Supply](docs/Model/InlineResponse2002Supply.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2004KeyType](docs/Model/InlineResponse2004KeyType.md)
- [InlineResponse2004ValueType](docs/Model/InlineResponse2004ValueType.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2005ValueType](docs/Model/InlineResponse2005ValueType.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2007Bigmaps](docs/Model/InlineResponse2007Bigmaps.md)
- [InlineResponse2007CallStats](docs/Model/InlineResponse2007CallStats.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2008Entrypoints](docs/Model/InlineResponse2008Entrypoints.md)
- [InlineResponse2008EntrypointsAddLiquidity](docs/Model/InlineResponse2008EntrypointsAddLiquidity.md)
- [InlineResponse2008EntrypointsDefault](docs/Model/InlineResponse2008EntrypointsDefault.md)
- [InlineResponse2008EntrypointsSetBaker](docs/Model/InlineResponse2008EntrypointsSetBaker.md)
- [InlineResponse2008StorageType](docs/Model/InlineResponse2008StorageType.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InlineResponse2009Value](docs/Model/InlineResponse2009Value.md)
- [Operation](docs/Model/Operation.md)
- [Ticker](docs/Model/Ticker.md)
- [Transaction](docs/Model/Transaction.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

code@ideaengine.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
