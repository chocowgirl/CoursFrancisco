<?php
namespace Interfaces;

interface IPayEtRembourse {
    public function payer():void;

    public function rembourser():void;
}