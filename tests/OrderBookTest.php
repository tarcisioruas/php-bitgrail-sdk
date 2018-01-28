<?php

use BitGrail\OrderBook;

class OrderBookTest extends PHPUnit\Framework\TestCase
{
    private $book;

    public function setUp()
    {
        $this->book = new OrderBook();
    }

    public function testOrderBookSuccessCall()
    {
        $response = $this->book->call();
        $this->assertObjectHasAttribute('bids', $response);
    }
}
?>