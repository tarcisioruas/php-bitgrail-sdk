<?php

use BitGrail\TradeHistory;

class TradeHistoryTest extends PHPUnit\Framework\TestCase
{
    private $history;

    public function setUp()
    {
        $this->history = new TradeHistory();
    }

    public function testTradeHistoryCall()
    {
        $response = $this->history->call();
        //If some error happen, a exception will be throwed stoping code
        $this->assertTrue(true);
    }
}
?>