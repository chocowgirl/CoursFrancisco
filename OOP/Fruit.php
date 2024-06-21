<?php
declare (strict_types = 1);


class Fruit{

    public string $name;
    public string $colour;
    public bool $juicy;

    function describe() :void{
        print("The " . $this->name . " is a fruit that is coloured mostly " . $this->colour . ".  It is " . $this->juicy . " that this fruit is juicy.");
    }


}
