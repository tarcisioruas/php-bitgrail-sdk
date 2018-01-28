<?php

use BitGrail\Buy;

class BuyTest extends PHPUnit\Framework\TestCase
{
    /**
     * @expectedException BitGrail\Exceptions\BitGrailException
     */
    public function testBuySuccessCall()
    {
        $trade = new Buy();
        $response = $trade->call([
            'market' => 'BTC-XRB',
            'amount' => 0,
            'price' => 0
        ]);
    }
}
