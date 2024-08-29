<?php
namespace Interfaces;

//une interface est une classe PUREMENT abstrait

interface IPayEtRembourse {
    public function payer():void;

    public function rembourser():void;
}