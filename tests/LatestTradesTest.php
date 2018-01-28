<?php

use BitGrail\LatestTrades;

class LatestTradesTest extends PHPUnit\Framework\TestCase
{
    private $trades;

    public function setUp()
    {
        $this->trades = new LatestTrades();
    }

    public function testLatestTradesSuccessCall()
    {
        $response = $this->trades->call();
        //If some error happens, a exception will be throwed stoping code
        $this->assertTrue(true);
    }
}
?>