<?php
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
?>