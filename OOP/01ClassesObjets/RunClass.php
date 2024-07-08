<?php

declare(strict_types = 1);

class Run {
    public float $distanceRun;
    public DateTime $dateRun;
    public string $modelShoes;

    public function __construct(float $distanceRun, DateTime $dateRun, string $modelShoes){
        // print('It works!');
        $this->distanceRun = $distanceRun;
        $this->dateRun = $dateRun;
        $this->modelShoes = $modelShoes;

    }



}