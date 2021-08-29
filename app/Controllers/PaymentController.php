<?php


namespace App\Controllers;


use App\Exception\CardException;

class PaymentController
{
    public function store()
    {

        try {
            $this->makePayment();
        } catch (CardException $exception) {
            if (method_exists($this,$handler='handler'. $exception->getShortName() )) {
                $this->{$handler}($exception);
            }
        }
    }

    private function handlerCardException($e){
        return $e->getMessage();
    }
    private function makePayment()
    {
        throw new CardException('failed');
    }
}
