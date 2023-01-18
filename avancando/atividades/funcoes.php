<?php
function exibeMensagem(string $mensagem) {
    echo $mensagem . '<br>';
}
   
function sacar(array $conta, float $valoASacar) : array
{
    if($valoASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar esse valor");
    }else{
        $conta['saldo'] -= $valoASacar;
    }

    return $conta;
}

function depositar (array $conta, float $valorADepositar) : array
{
    if($valorADepositar>0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem("Depósito inválido");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta (array $conta)
{
    ['titular'=>$titular, 'saldo'=>$saldo] = $conta;
    echo "<li>Titular: $titular $saldo</li>";
}