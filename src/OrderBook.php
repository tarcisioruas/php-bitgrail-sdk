<?php

namespace BitGrail;

/*
* Gets a array containing bids and asks order book
* GET https://api.bitgrail.com/v1/$FIAT-$COIN/orderbook
*/
class OrderBook extends Abstractions\Endpoint
{
    protected $endpoint = 'orderbook';
    protected $authenticated = false;

    /**
    * @param string $market Market where you whish to see the book orders. Ex: 'BTC-XRB'
    */
    function __construct($market = 'BTC-XRB') {
        $this->endpoint = $market . '/' . $this->endpoint;
    }
}
?>