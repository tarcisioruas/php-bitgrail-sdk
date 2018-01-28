<?php

use BitGrail\Ticker;

class TickerTest extends PHPUnit\Framework\TestCase
{
    private $ticker;

    public function setUp()
    {
        $this->ticker = new Ticker();
    }

    public function testTickerSuccessCall()
    {
        $response = $this->ticker->call();
        $this->assertObjectHasAttribute('last', $response);
    }
}
?>