<?php

include_once "./Animal.php";

class Chien extends Animal {
    public function guider():void{
        print("<br> Je vous accompagne!");
    }

public function communiquer():void{
    print("<br>WOOF!");
}
}

