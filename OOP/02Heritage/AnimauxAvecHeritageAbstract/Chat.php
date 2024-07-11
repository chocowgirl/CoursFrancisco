<?php

include_once "./Animal.php";

class Chat extends Animal {
    public function tomberDebout():void{
        print("<br> Toujours debout!!!");
    }

public function communiquer():void{
    print("<br>MEOW!");
}
}


