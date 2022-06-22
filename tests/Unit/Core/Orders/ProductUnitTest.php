<?php

namespace Tests\Core\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testAttributes()
    {
        $product = new Product(
            id: "1",
            name: "product",
            price: 10,
            total: 12
        );

        $this->assertEquals("1", $product->getId());
        $this->assertEquals("product", $product->getName());
        $this->assertEquals(10, $product->getPrice());
    }

    public function testCalc()
    {
        $product = new Product(
            id: "1",
            name: "product",
            price: 10,
            total: 12
        );

        $this->assertEquals(120, $product->total());

        $this->assertTrue(true);
    }

    public function testCalcWithTax()
    {
        $product = new Product(
            id: "1",
            name: "product",
            price: 10,
            total: 12
        );

        $this->assertEquals(132, $product->totalWithTax(10));

        $this->assertTrue(true);
    }
}