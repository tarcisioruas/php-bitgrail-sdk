<?php

use BitGrail\OpenedOrders;

class OpenedOrdersTest extends PHPUnit\Framework\TestCase
{
    private $orders;

    public function setUp()
    {
        $this->orders = new OpenedOrders();
    }

    public function testOpenedOrdersSuccessCall()
    {
        $response = $this->orders->call();
        //If some error happen, a exception will be throwed stoping code
        $this->assertTrue(true);
    }
}
?>