<?php
class BD{
    protected $nombre;
    public function __construct($nombre){
        $this->nombre=$nombre;
    }
    public function guardar(){
        echo "Guardando en la base de datos:".$this->nombre."<br>";
    }
}


?>