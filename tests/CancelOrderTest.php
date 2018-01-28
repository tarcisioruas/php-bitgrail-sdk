<?php

use BitGrail\CancelOrder;

class CancelOrderTest extends PHPUnit\Framework\TestCase
{
    /**
     * @expectedException BitGrail\Exceptions\BitGrailException
     */
    public function testCancelOrderSuccessCall()
    {
        $trade = new CancelOrder();
        $response = $trade->call([
            'id' => 0
        ]);
        
    }
}
?>