<?php
namespace Interfaces;

//abstract class must have AT LEAST ONE abstract method

abstract class PaymentMethod {
    // public string $paymenttype;

    public function affichertype():void {
        echo "<br>Je paye par " . get_class($this);
    }

    abstract public function paymentConfirmationIndicator():void;
}