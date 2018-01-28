<?php

namespace BitGrail;

/**
 * Return a array with markets
 * GET https://api.bitgrail.com/v1/markets
 */
class Markets extends Abstractions\Endpoint
{
    protected $endpoint = 'markets';
    protected $authenticated = false;
}