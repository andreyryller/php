<?php
    $numero1 = 0;
    $numero2 = 1;

    echo "Os primeiros 10 números da sequência de Fibonacci são: ";

    for ($i = 0; $i < 10; $i++) {
        echo $numero1 . " ";

        $proxNum = $numero1 + $numero2;
        $numero1 = $numero2;
        $numero2 = $proxNum;
    }

?>