<?php

require 'funcoes.php';

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
$contasCorrente['345.678.912-02'] = sacar($contasCorrente['345.678.912-02'], 300);

$contasCorrente['123.456.789-00'] = depositar($contasCorrente['123.456.789-00'], 900);

foreach($contasCorrente as $cpf =>$conta){
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");
}

unset($contasCorrente['345.678.912-02']);

titularComLetrasMaiusculas($contasCorrente['123.456.789-00']);

echo "<ul>";

foreach($contasCorrente as $cpf =>$conta){
    exibeConta(($conta));
}

echo "</ul>";

/*foreach($contasCorrente as $cpf =>$conta){
    ['titular'=>$titular, 'saldo'=>$saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Testando php</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrente as $cpf => $conta) { ?>
        <dt>
            <?= $conta['titular']; ?> - <?= $cpf?>;
        </dt>
        <dd>
            Saldo: <?= $conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
