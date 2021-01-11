<?php

class Carro {
    public $marca;
    public $modelo;
    private $kilometraje;
    public $combustible;

    private static $llantas = 4;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->kilometraje = 0;
        $this->combustible = true;
    }

    public function conducir($km) {
        $this->kilometraje = $this->kilometraje + $km;
    }

    public static function getLlantas() {       
        return Carro::$llantas;
    }

    public function getKilometraje() {
        return $this->kilometraje;
    }

    function __destruct() {
        print "destrullendo objeto";
    }
}

echo Carro::getLlantas();

$carro = new Carro("Toyota", "Yaris Sedán");

echo $carro->marca."<br/>";
echo $carro->modelo."<br/>";
echo $carro->combustible."<br/>";
echo $carro->getKilometraje()."<br/>";

$carro->conducir(10);

echo $carro->getKilometraje()."<br/>";


