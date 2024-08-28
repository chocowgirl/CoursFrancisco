<?php

namespace Interfaces;

class Bancontact extends \Interfaces\PaymentMethod implements IPayEtRembourse{

    public function payer():void
    {
        echo "<br> J'effectue le paiement";
    }

    public function rembourser(): void
    {
        echo "<br> J'effectue le remboursement";
    }

    public function paymentConfirmationIndicator(): void
    {
        echo "<br>BANCONTACT! bip bip bip!";
    }
}