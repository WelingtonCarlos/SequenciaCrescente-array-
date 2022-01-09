<?php

function SequenciaCrescente($array) {

    if (sizeof($array) == 1) {
    
        // se o array conter somente um elemento, ele automaticamente será considerado true.
        return ": - True";
    
    }
    
    for ($i = 0; $i < sizeof($array); $i++) {
    
        $crescente = true;
    
        $arr = $array;

        array_splice($arr, $i, 1);

        for ($j = 0; $j < sizeof($arr) - 1; $j++) {

            if ($arr[$j] >= $arr[$j + 1]) {

                $crescente = false;

            }

        }

        if ($crescente) {

            return ": - True";

        }

    }

    return ": - False";
}

echo "Testes realizados abaixo, para verificar a integridade da função:"."<br>"."<br>";

echo "[1, 3, 2, 1]".SequenciaCrescente([1, 3, 2, 1])."<br>"."<br>";
echo "[1, 3, 2]".SequenciaCrescente([1, 3, 2])."<br>"."<br>";
echo "[1, 2, 1, 2]".SequenciaCrescente([1, 2, 1, 2])."<br>"."<br>";
echo "[3, 6, 5, 8, 10, 20, 15]".SequenciaCrescente([3, 6, 5, 8, 10, 20, 15])."<br>"."<br>";
echo "[1, 1, 2, 3, 4, 4]".SequenciaCrescente([1, 1, 2, 3, 4, 4])."<br>"."<br>";
echo "[1, 4, 10, 4, 2]".SequenciaCrescente([1, 4, 10, 4, 2])."<br>"."<br>";
echo "[10, 1, 2, 3, 4, 5]".SequenciaCrescente([10, 1, 2, 3, 4, 5])."<br>"."<br>";
echo "[1, 1, 1, 2, 3]".SequenciaCrescente([1, 1, 1, 2, 3])."<br>"."<br>";
echo "[0, -2, 5, 6] ".SequenciaCrescente([0, -2, 5, 6])."<br>"."<br>";
echo "[1, 2, 3, 4, 5, 3, 5, 6] ".SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6])."<br>"."<br>";
echo "[40, 50, 60, 10, 20, 30]".SequenciaCrescente([40, 50, 60, 10, 20, 30])."<br>"."<br>";
echo "[1, 1] ".SequenciaCrescente([1, 1])."<br>"."<br>";
echo "[1, 2, 5, 3, 5] ".SequenciaCrescente([1, 2, 5, 3, 5])."<br>"."<br>";
echo "[1, 2, 5, 5, 5] ".SequenciaCrescente([1, 2, 5, 5, 5])."<br>"."<br>";
echo "[10, 1, 2, 3, 4, 5, 6, 1]".SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1])."<br>"."<br>";
echo "[1, 2, 3, 4, 3, 6]".SequenciaCrescente([1, 2, 3, 4, 3, 6])."<br>"."<br>";
echo "[1, 2, 3, 4, 99, 5, 6]".SequenciaCrescente([1, 2, 3, 4, 99, 5, 6])."<br>"."<br>";
echo "[123, -17, -5, 1, 2, 3, 12, 43, 45]".SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45])."<br>"."<br>";
echo "[3, 5, 67, 98, 3]".SequenciaCrescente([3, 5, 67, 98, 3])."<br>"."<br>";

echo "Função para verificar se é true ou false a condição aplicada a arrays de tamanho 5 formados a partir de sorteio entre os numeros 1 e 10:"."<br>"."<br>";

function SequenciaCrescenteEmArraysAleatorios($arraySorteado) {

    if (sizeof($arraySorteado) == 1) {
    
        // se o array conter somente um elemento, ele automaticamente será considerado true.
        return ": - True";
    
    }
    
    for ($i = 0; $i < sizeof($arraySorteado); $i++) {
    
        $crescente = true;
    
        $arr = $arraySorteado;

        array_splice($arr, $i, 1);

        for ($j = 0; $j < sizeof($arr) - 1; $j++) {

            if ($arr[$j] >= $arr[$j + 1]) {

                $crescente = false;

            }

        }

        if ($crescente) {

            return ": - True";

        }

    }

    return ": - False";
}

$arraySorteado = array();

    foreach(range(1,rand(1,5)) as $x) { // definindo a quantidade de elementos no array.

        array_push($arraySorteado, rand(1, 10)); // sorteando os elementos para preencher o array de forma aleatória.

    }

echo "Array sorteado = [".implode(", ",$arraySorteado)."]".SequenciaCrescente($arraySorteado);
