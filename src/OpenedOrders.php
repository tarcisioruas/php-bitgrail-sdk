<?php

namespace BitGrail;

/**
 * Gets a list of open orders by a user, you don't need additional parameters.
 * POST https://api.bitgrail.com/v1/openorders
 */
class OpenedOrders extends Abstractions\Endpoint
{
    protected $endpoint = 'openorders';
}