<?php

$peso = 90.4;
$altura = 1.73;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "IMC de $imc. Abaixo do peso ideal" . PHP_EOL;
} elseif ($imc < 25) {
    echo "IMC de $imc. Peso ideal" . PHP_EOL;
} else {
    echo "IMC de $imc. Acima do peso" . PHP_EOL;
}
