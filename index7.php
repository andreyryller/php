<?php
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
?>