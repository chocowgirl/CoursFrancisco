<?php

namespace Interfaces;


class CarteCredit extends PaymentMethod implements IPayEtRembourse {

    public function payer():void
    {
        echo "<br> J'effectue le paiement par " . get_class($this);
    }

    public function rembourser(): void
    {
        echo "<br> J'effectue le remboursement à ce " . get_class($this);
    }

    public function paymentConfirmationIndicator(): void
    {
        echo "<br> CREDIIIIIT!  beep beep!";
    }
}