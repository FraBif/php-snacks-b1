<?php

class Indumento{
 
public $materiale;

function __construct($materiale){

    $this->materiale = $materiale;
}
}

class Scarpa extends Indumento {

    public $marca;

    function __construct($materiale, $marca) {
        parent::__construct($materiale);
        $this->marca = $marca;
    }


}






?>