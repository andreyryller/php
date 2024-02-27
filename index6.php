<?php
    $numeros = array(10, 5, 8, 12, 6);

    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;

    echo "A média dos números é: $media";
?>