<?php

namespace rkujawa\LaravelPaymentGateway\Interfaces\Request;

interface PaymentTransactionContract
{
    /**
     * @param array|mixed $data
     * @param int $amount
     * @return \rkujawa\LaravelPaymentGateway\Interfaces\Response\PaymentTransactionContract
     */
    public function charge($data, $amount);

    /**
     * TODO: Define the transaction tables and models.
     * 
     * @param mixed $paymentTransaction
     * @return \rkujawa\LaravelPaymentGateway\Interfaces\Response\PaymentTransactionContract
     */
    public function void($paymentTransaction);

    /**
     * TODO: Define the transaction tables and models.
     * 
     * @param mixed $paymentTransaction
     * @param int $amount
     * @return \rkujawa\LaravelPaymentGateway\Interfaces\Response\PaymentTransactionContract
     */
    public function refund($paymentTransaction, $amount);
}
