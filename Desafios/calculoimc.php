<?php 
$altura = 1.76;
$peso = 100.00;

$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você esta com o IMC ";
if ($imc < 18.5 ) {
    echo "abaixo";
} elseif ($imc < 25 ) {
    echo "Dentro";
} else {
    echo "acima ";
}
echo "do recomendado";
