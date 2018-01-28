<?php

namespace BitGrail;

/**
 * Use that class to get the last details for the wish market
 * GET https://api.bitgrail.com/v1/$FIAT-$COIN/ticker
 */
class Ticker extends Abstractions\Endpoint
{
    protected $endpoint = 'ticker';
    protected $authenticated = false;

    function __construct($market = 'BTC-XRB') {
        $this->endpoint = $market . '/' . $this->endpoint;
    }
}
?>

