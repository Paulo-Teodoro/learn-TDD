<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testAttributes()
    {
        $customer = new Customer(
            name: "Paulo Teodoro"
        );
        $this->assertEquals("Paulo Teodoro", $customer->getName());

        $customer->changeName(
            name: "new name"
        );
        $this->assertEquals("new name", $customer->getName());

        $this->assertTrue(true);
    }
}