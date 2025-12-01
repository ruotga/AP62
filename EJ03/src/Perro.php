<?php

class Perro extends Animal{
    public function __construct() {
        parent::__construct("Spike");
    }

    public function hacerSonido(){
        return "Guau";
    }

    public function presentacion(){
        return ("Soy un perro llamado ". $this->nombre );
    }
}

?>