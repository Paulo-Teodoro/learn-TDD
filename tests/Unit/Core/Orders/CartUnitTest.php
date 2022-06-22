<?php

namespace Tests\Core\Orders;

use Core\Orders\Cart;
use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class CartUnitTest extends TestCase
{
    public function testCart()
    {
        $cart = new Cart();
        $cart->add(new Product(
            id: '1',
            name: 'testeProduct1',
            price: 12,
            total: 1
        ));

        $cart->add(new Product(
            id: '2',
            name: 'testeProduct2',
            price: 10,
            total: 2
        ));

        $cart->add(new Product(
            id: '3',
            name: 'testeProduct3',
            price: 2,
            total: 1
        ));


        $this->assertCount(3, $cart->getItems());
        $this->assertEquals(34, $cart->totalAmount());
    }

    public function testCartWithDuplicatedItem()
    {
        $product1 = new Product(
            id: '1',
            name: 'testeProduct1',
            price: 10,
            total: 1
        );

        $cart = new Cart();
        $cart->add($product1);

        $cart->add($product1);

        $cart->add(new Product(
            id: '2',
            name: 'testeProduct2',
            price: 2,
            total: 1
        ));


        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(22, $cart->totalAmount());
    }

    public function testCartEmpty()
    {
        $cart = new Cart();

        $this->assertCount(0, $cart->getItems());
        $this->assertEquals(0, $cart->totalAmount());
    }
}