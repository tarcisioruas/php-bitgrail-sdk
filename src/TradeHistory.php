<?php

namespace BitGrail;

/**
 * Return trade history of a market
 * GET https://api.bitgrail.com/v1/$FIAT-$COIN/tradehistory
 */
class TradeHistory extends Abstractions\Endpoint
{
    protected $endpoint = 'tradehistory';
    protected $authenticated = false;

   /**
    * @param string $market Market where you whish to see the trade history. Ex: 'BTC-XRB'
    */
    function __construct($market = 'BTC-XRB') {
        $this->endpoint = $market . '/' . $this->endpoint;
    }
}
?>