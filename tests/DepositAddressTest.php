<?php

use BitGrail\DepositAddress;

class DepositAddressTest extends PHPUnit\Framework\TestCase
{
    private $address;

    public function setUp()
    {
        $this->address = new DepositAddress();
    }

    public function testDepositAddressSuccessCall()
    {
        $response = $this->address->call(['coin' => 'XRB']);
        
        //If some error happens, a exception will be throwed stoping code
        $this->assertTrue(true);
    }
}
