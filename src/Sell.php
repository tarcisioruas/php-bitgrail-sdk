<?php

namespace BitGrail;

/**
 * Creates a sell order
 * POST https://api.bitgrail.com/v1/sellorder
 */
class Sell extends Abstractions\Endpoint
{
    protected $endpoint = 'sellorder';
}