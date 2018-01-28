<?php

use BitGrail\DepositHistory;

class DepositHistoryTest extends PHPUnit\Framework\TestCase
{
    public function testDepositHistorySuccessCall()
    {
        $history = new DepositHistory();
        $response = $history->call([
            'coin' => 'XRB'
        ]);
        
        //If some error happen, a exception will be throwed stoping code
        $this->assertTrue(true);
    }
}
?>