antividade 1

<?php

    echo "Olá, mundo!";

?>

atividade 2

<?php
/*
    $nome = "andrey";
    echo "Olá, $nome!";
*/
?>

atividade 3

<?php
/*
    $numero = 7;

    if ($numero % 2 == 0) {
        echo "$numero é par.";
    } else {
        echo "$numero é ímpar.";
    }
    */
?>

atividade 4

<?php
/*
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
*/
?>

atividade 5 

<?php
/*
    function soma($a, $b) {
        return $a + $b;
    }

    $numero1 = 10;
    $numero2 = 5;
    $resultado = soma($numero1, $numero2);

    echo "A soma de $numero1 e $numero2 é igual a $resultado.";
    */
?>

atividade 6

<?php
/*
    $numeros = array(10, 5, 8, 12, 6);

    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;

    echo "A média dos números é: $media";
    */
?>

atividade 7

<?php
  /*
    $matriz = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    function transposta($matriz) {
        $transposta = array();
        foreach ($matriz as $i => $linha) {
            foreach ($linha as $j => $valor) {
                $transposta[$j][$i] = $valor;
            }
        }
        return $transposta;
    }
    $transposta = transposta($matriz);

    echo "Matriz original:<br>";
    foreach ($matriz as $linha) {
        echo "[" . implode(", ", $linha) . "]<br>";
    }
    echo "<br>Transposta da matriz:<br>";
    foreach ($transposta as $linha) {
        echo "[" . implode(", ", $linha) . "]<br>";
    }
*/
?>

atividade 8 

<?php
/*
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
    */
?>

atividade 9

<?php
/*
    function verificarNumero($numero) {
        if ($numero > 0) {
            echo "$numero é positivo.";
        } elseif ($numero < 0) {
            echo "$numero é negativo.";
        } else {
            echo "$numero é zero.";
        }
    }

    $numero = -5;
    verificarNumero($numero);
    */
?>

atividade 10

<?php
/*
    $numero1 = 0;
    $numero2 = 1;

    echo "Os primeiros 10 números da sequência de Fibonacci são: ";

    for ($i = 0; $i < 10; $i++) {
        echo $numero1 . " ";

        $proxNum = $numero1 + $numero2;
        $numero1 = $numero2;
        $numero2 = $proxNum;
    }
    */
?>

atividade 11

<?php
/*
    function verificarPalindromo($palavra) {
        $palavraInvertida = strrev($palavra);
        if ($palavra == $palavraInvertida) {
            return true;
        } else {
            return false;
        }
    }

    $palavra = "arara";
    if (verificarPalindromo($palavra)) {
        echo "$palavra é um palíndromo.";
    } else {
        echo "$palavra não é um palíndromo.";
    }
    */
?>

atividade 12

<?php
/*
    function segundoMaior($numeros) {
        $maior = PHP_INT_MIN;
        $segundoMaior = PHP_INT_MIN;

        foreach ($numeros as $numero) {
            if ($numero > $maior) {
                $segundoMaior = $maior;
                $maior = $numero;
            } elseif ($numero > $segundoMaior && $numero != $maior) {
                $segundoMaior = $numero;
            }
        }

        return $segundoMaior;
    }

    $numeros = array(10, 5, 8, 12, 6);
    $segundoMaior = segundoMaior($numeros);

    echo "O segundo maior elemento do array é: $segundoMaior";
    */
?>

atividade 13

<?php
/*
    function matrizSimetrica($matriz) {
        $linhas = count($matriz);
        $colunas = count($matriz[0]);

        if ($linhas != $colunas) {
            return false;
        }

        $transposta = array();
        for ($i = 0; $i < $colunas; $i++) {
            $transposta[$i] = array();
            for ($j = 0; $j < $linhas; $j++) {
                $transposta[$i][$j] = $matriz[$j][$i];
            }
        }

        for ($i = 0; $i < $linhas; $i++) {
            for ($j = 0; $j < $colunas; $j++) {
                if ($matriz[$i][$j] != $transposta[$i][$j]) {
                    return false;
                }
            }
        }

        return true;
    }

    $matriz = array(
        array(1, 2, 3),
        array(2, 4, 5),
        array(3, 5, 6)
    );

    if (matrizSimetrica($matriz)) {
        echo "A matriz é simétrica.";
    } else {
        echo "A matriz não é simétrica.";
    }
    */
?>

atividade 14

<?php
/*
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
    */
?>















