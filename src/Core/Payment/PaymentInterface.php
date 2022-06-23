<?php

namespace Core\Payment;

interface PaymentInterface
{
    public function makePayment(array $data): bool;
}