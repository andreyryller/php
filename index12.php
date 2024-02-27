<?php
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
?>