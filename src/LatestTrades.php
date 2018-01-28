<?php
namespace BitGrail;

/**
 * Gets a list of latest trade of an user, you don't need additional parameters.
 * POST https://api.bitgrail.com/v1/lasttrades
 */
class LatestTrades extends Abstractions\Endpoint
{
    protected $endpoint = 'lasttrades';
}