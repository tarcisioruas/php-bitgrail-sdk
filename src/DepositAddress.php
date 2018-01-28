<?php

namespace BitGrail;

/**
 * Return trade history of a market
 * POST https://api.bitgrail.com/v1/getdepositaddress
 */
class DepositAddress extends Abstractions\Endpoint
{
    protected $endpoint = 'getdepositaddress';
}