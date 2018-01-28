<?php

namespace BitGrail;

/**
 * Gets a list of withdrawals of an user
 * POST https://api.bitgrail.com/v1/withdrawshistory
 */
class WithdrawsHistory extends Abstractions\Endpoint
{
    protected $endpoint = 'withdrawshistory';
}
?>