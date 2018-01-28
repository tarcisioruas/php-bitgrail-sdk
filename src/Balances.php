<?php

namespace BitGrail;

/**
 * To get balances of all coins present on BitGrail you don't need parameters,
 * except the authentication ones.
 * If succesfully, return an array containing as index the coin code and these parameters
 * POST https://api.bitgrail.com/v1/balances
 */
class Balances extends Abstractions\Endpoint
{
    protected $endpoint = 'balances';
}
?>