<?php

$contasCorrente = [
    '123.456.789-00'=>[
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '234.567.891-01'=>[
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '345.678.912-02'=>[
        'titular' => 'Alberto',
        'saldo' => 300
    ]];

$contasCorrente['456.789.123.-04'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contasCorrente as $cpf =>$conta){
    echo $cpf;
    echo $conta['titular'];
    echo $conta['saldo'];
}