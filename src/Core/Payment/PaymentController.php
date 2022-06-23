<?php

namespace Core\Payment;

class PaymentController
{
    private $repository;

    public function __construct(PaymentInterface $payment)
    {       
        $this->repository = $payment;
    }

    public function execute()
    {
        return $this->repository->makePayment([]);
    }
}