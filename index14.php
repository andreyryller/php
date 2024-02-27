<?php
    class Calculadora {
        public function adicao($a, $b) {
            return $a + $b;
        }

        public function subtracao($a, $b) {
            return $a - $b;
        }

        public function multiplicacao($a, $b) {
            return $a * $b;
        }

        public function divisao($a, $b) {
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erro: divisão por zero.";
            }
        }
    }

    $calculadora = new Calculadora();
    echo "Soma: " . $calculadora->adicao(5, 3) . "<br>";
    echo "Subtração: " . $calculadora->subtracao(5, 3) . "<br>";
    echo "Multiplicação: " . $calculadora->multiplicacao(5, 3) . "<br>";
    echo "Divisão: " . $calculadora->divisao(5, 3) . "<br>";
?>
