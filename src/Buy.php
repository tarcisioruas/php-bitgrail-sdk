<?php

namespace BitGrail;

/**
 * Creates a buy order
 * POST https://api.bitgrail.com/v1/buyorder
 */
class Buy extends Abstractions\Endpoint
{
    protected $endpoint = 'buyorder';
}