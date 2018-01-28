<?php

use BitGrail\Markets;

class MarketsTest extends PHPUnit\Framework\TestCase
{
    private $markets;

    public function setUp()
    {
        $this->markets = new Markets();
    }

    public function testMarketsSuccessCall()
    {
        $response = $this->markets->call();
        $this->assertObjectHasAttribute('BTC', $response);
    }
}
?>