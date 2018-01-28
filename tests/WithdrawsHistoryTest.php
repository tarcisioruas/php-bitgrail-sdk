<?php

use BitGrail\WithdrawsHistory;

class WithdrawsHistoryTest extends PHPUnit\Framework\TestCase
{
    public function testWithdrawsHistorySuccessCall()
    {
        $history = new WithdrawsHistory();
        $response = $history->call([
            'coin' => 'XRB'
        ]);
        
        //If some error happen, a exception will be throwed stoping code
        $this->assertTrue(true);
    }
}
?>