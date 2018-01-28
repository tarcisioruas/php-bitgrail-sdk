# PHP BITGRAIL API SDK

This project is designed to help you make your own projects that interact with the [Bitgrail API](https://bitgrail.com/api-documentation). You can register buy, sell or cancel orders, request deposit address, withdraws and others features. This project seeks to have complete API coverage.

#### Installation
```
composer require "tarcisioruas/php-bitgrail-sdk"
```
<details>
 <summary>Click for help with installation</summary>

## Install Composer
If the above step didn't work, install composer and try again.
#### Debian / Ubuntu
```
sudo apt-get install curl
curl -s http://getcomposer.org/installer | php
php composer.phar install
```
Composer not found? Use this command instead:
```
php composer.phar require "tarcisioruas/php-bitgrail-sdk"
```

#### Windows:
[Download installer for Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
</details>

#### How To Use
##### Setting Security Params
To use private API you have to [create keys pair](https://bitgrail.com/api-keys) to authenticate user at [BitGrail](https://bitgrail.com/).

##### Code Examples
###### Security
Setting security params.
```php
...

/*
* You can set yours API KEY and API SECRET at Environment Variables 
* or put that in a main file, like index.php.
*/
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

...
```
###### Markets
Returns array with all tickers of all markets on BitGrail.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

$api = new BitGrail\Markets();
$markets = $api->call();
var_dump($markets);

````
###### Balances
Gets balances of all coins present on BitGrail you don't need parameters, except the authentication ones.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

//listing balances
$api = new BitGrail\Balances();
$balances = $api->call();
var_dump($balances);
```
###### Ticker
Returns last ticker price details for a market.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

//getting ticker
$api = new BitGrail\Ticker('BTC-XRB');
$ticker = $api->call();
var_dump($ticker);
```
###### OrderBook
Returns array composed by bids and asks of a market orderbook.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

//listing order book
$api = new BitGrail\OrderBook('BTC-XRB');
$book = $api->call();
var_dump($book);
```
###### Trade History
Returns array of latest 500 transactions.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

//listing trade history
$api = new BitGrail\TradeHistory('BTC-XRB');
$tradeHistory = $api->call();
var_dump($tradeHistories);
```
###### Open Orders
Get a list of open orders by a user.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

//listing the opened orders
$api = new BitGrail\OpenedOrders();
$opened = $api->call();
var_dump($opened);
```
###### Buy Order
Creates a buy order.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

//registering a buy order
$api = new BitGrail\Buy();
$buyOrder = $api->call([
            'market' => 'BTC-XRB',
            'amount' => 1,
            'price' => 0.00177
        ]);
var_dump($buyOrder);
```
###### Sell Order
Creates a sell order.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');
//regitering a sell order
$api = new BitGrail\Sell();
$sellOrder = $api->call([
            'market' => 'BTC-XRB',
            'amount' => 1,
            'price' => 0.00177
        ]);
var_dump($sellOrder);
```
###### Cancel Order
Cancels an order.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');
//canceling a order
$api = new BitGrail\CancelOrder();
$response = $api->call([
            'id' => 1 //Order Id
        ]);
var_dump($response);
```
###### Latest Trades
Gets a list of latest trade of authenticated user.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');
//listing user latest trades
$api = new BitGrail\LatestTrades();
$trades = $api->call();
var_dump($trades);
```
###### Deposit Address
Gets a deposit address.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');
//getting deposit address
$api = new BitGrail\DepositAddress();
$address = $api->call(['coin' => 'XRB']);
var_dump($address);
```
###### Deposit History
Gets a list of deposits of authenticated user.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');
//getting a deposit address
$api = new BitGrail\DepositHistory();
$depositHistory = $api->call(['coin' => 'XRB']);
var_dump($depositHistory);
```
###### Withdraw
Withdraws coins to other wallet / exchange.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');
//withdraw
$api = new BitGrail\Withdraw();
$withdraw = $api->call([
            'coin' => 'XRB',
            'amount' => 1, //amount of coins to send 
            'address' => 'theaddresstosendcoins'
        ]);
var_dump($withdraw);
```
###### Withdraw History
Get a list of withdrawals of authenticated user.
```php
<?php
require 'vendor/autoload.php';

//Defining auth parameters
putenv('BITGRAIL_API_KEY=YourApiKey');
putenv('BITGRAIL_API_SECRET=YourSecret');

//listing withdraw history
$api = new BitGrail\WithdrawHistory();
$withdrawHistory = $api->call(['coin' => 'XBR']);
var_dump($withdrawHistory);
```

### Development

Want to contribute? Great!

If you find a bug or want improve new features, be free to change de code and send a pull requests. You will be added to the developers list.

### Donate

The developer spent a lot of time developing those classes. What about to contribute with some help? It will be cool to receive some XRB/MRai at [xrb_31t8ncrcn1hr7xc7rpoqrjx9ufisgpaf9fbeg8nz7oyfcfd4ora7oadpjff8](https://raiblocks.net/account/index.php?acc=xrb_31t8ncrcn1hr7xc7rpoqrjx9ufisgpaf9fbeg8nz7oyfcfd4ora7oadpjff8)
