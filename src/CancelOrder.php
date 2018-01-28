<?php

namespace BitGrail;

/**
 * Cancels an order
 * POST https://api.bitgrail.com/v1/cancelorder
 */
class CancelOrder extends Abstractions\Endpoint
{
    protected $endpoint = 'cancelorder';
}