<?php
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
?>