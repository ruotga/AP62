<?php

class Gato extends Animal{
    public function __construct() {
        parent::__construct("Tom");
    }
    
    public function hacerSonido(){
        return "Miau";
    }

    public function presentacion(){
        return ("Soy un gato llamado ". $this->nombre );
    }
}

?>