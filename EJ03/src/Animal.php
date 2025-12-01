<?php

class Animal{
    protected $nombre;

    public function __construct($Especie = "animal"){
        $this->nombre = $Especie;
    }

    public function hacerSonido(){
        return "Sonido generico";
    }

    public function presentacion(){
        return ("Soy un " . $this->nombre . " llamado X");
    }
}

?>