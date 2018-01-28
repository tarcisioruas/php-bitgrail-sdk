<?php
namespace BitGrail;

/**
 * Gets a list of deposits of an user
 * POST https://api.bitgrail.com/v1/depositshistory
 */
class DepositHistory extends Abstractions\Endpoint
{
    protected $endpoint = 'depositshistory';
}