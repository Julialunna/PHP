<?php
$array = [
    1=>'a', 
    '1'=>'b',
    1.5 => 'c', //transforma em inteiro
    true => 'd' //true vira 1
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}