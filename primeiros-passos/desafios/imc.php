<?php

$altura = 1.74;
$peso = 60;
$imc = $peso / $altura ** 2;

echo ("Seu imc é $imc").PHP_EOL;

if($imc<18.5){
    echo ("Magreza" . PHP_EOL);
}else if($imc >= 18.5 and $imc <= 24.9){
    echo ("Normal" . PHP_EOL);
}else if($imc >= 25 and $imc <= 29.9){
    echo ("Sobrepeso" . PHP_EOL);
}else if($imc >= 30 and $imc <= 39.9){
    echo ("Obesidade" . PHP_EOL);
}else if($imc>40){
    echo ("Obesidade grave" . PHP_EOL);
}
