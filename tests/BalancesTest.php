<?php

use BitGrail\Balances;

class BalancesTest extends PHPUnit\Framework\TestCase
{
    private $balances;

    public function setUp()
    {
        $this->balances = new Balances();
    }

    public function testBalancesSuccessCall()
    {
        $response = $this->balances->call();
        $this->assertTrue(count($response) > 0);
    }
}
?>