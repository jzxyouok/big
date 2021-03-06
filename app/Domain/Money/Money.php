<?php

namespace App\Domain\Money;

class Money
{
    private $amount, $currency;
    
    public function __construct($amount,Currency $currency){
        $this->amount = $amount;
        $this->currency = $currency;
    }
    
    public function getAmount(){
        return $this->amount;
    }
    
    public function getCurrency(){
        return $this->currency;
    }
}