<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentInterface;
use Core\Payment\PaymentController;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentControllerUnitTest extends TestCase
{
    public function testPayment()
    {
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment
            ->shouldReceive('makePayment')
            ->times(1)
            ->andReturn(true);

        $payment = new PaymentController($mockPayment);
        $response = $payment->execute();

        $this->assertTrue($response);
    }

    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }
}