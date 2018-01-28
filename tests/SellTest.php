<?php

use BitGrail\Sell;

class SellTest extends PHPUnit\Framework\TestCase
{
    /**
     * @expectedException BitGrail\Exceptions\BitGrailException
     */
    public function testBuySuccessCall()
    {
        $trade = new Sell();
        $response = $trade->call([
            'market' => 'BTC-XRB',
            'amount' => 0,
            'price' => 0
        ]);
        
    }
}
?>