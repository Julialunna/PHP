<?php


$contasCorrente = [
    123456789=>[
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    234567891=>[
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    345678912=>[
        'titular' => 'Alberto',
        'saldo' => 300
    ]];

foreach($contasCorrente as $cpf =>$conta){
    echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
    echo $conta['saldo'] . PHP_EOL;
}