<?php
    class Circulo {
        private $raio;

        public function __construct($raio) {
            $this->raio = $raio;
        }

        public function calcularArea() {
            return pi() * pow($this->raio, 2);
        }
    } 
    $circulo = new Circulo(5);
    $area = $circulo->calcularArea();

    echo "A área do círculo é: $area";
?>