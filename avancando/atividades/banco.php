<?php

function exibeMensagem($mensagem) {
    echo $mensagem;
}
   
function sacar($conta, $valoASacar){
    if($valoASacar > $conta['saldo']){
        echo "Você não pode sacar esse valor" . PHP_EOL;
    }else{
        $conta['saldo'] -= $valoASacar;
    }

    return $conta;
}

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

$contasCorrente['234.567.891-01'] = sacar($contasCorrente['234.567.891-01'], 500);
$contasCorrente['345.678.912-02'] = sacar($contasCorrente['345.678.912-02'], 500);



foreach($contasCorrente as $cpf =>$conta){
    exibeMensagem($cpf . PHP_EOL);
    exibeMensagem($conta['titular'] . PHP_EOL);
    exibeMensagem($conta['saldo'] . PHP_EOL);
}