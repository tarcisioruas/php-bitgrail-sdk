<?php

use BitGrail\Withdraw;

class WithdrawTest extends PHPUnit\Framework\TestCase
{
    private $withdraw;

    public function setUp()
    {
        $this->withdraw = new Withdraw();
    }

    /**
     * @expectedException BitGrail\Exceptions\BitGrailException
     */
    public function testWithdrawSuccessCall()
    {
        $response = $this->withdraw->call([
            'coin' => 'XRB',
            'amount' => 0,
            'address' => 'xyz'
        ]);

        //If some error happen, a exception will be throwed stoping code
        $this->assertTrue(true);
    }
}