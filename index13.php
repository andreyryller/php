<?php
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
?>
