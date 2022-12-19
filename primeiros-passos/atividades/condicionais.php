<?php

$idade = 16;
$numeroDePessoas = 2;
$nome = 'Júlia';

echo "Você só pode entarr se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if($idade >= 18 and $nome == 'Júlia'){
    echo "Você tem $idade anos". PHP_EOL; 
    echo 'Pode entrar sozinho.';
}else if($idade >= 16 and $numeroDePessoas==2){
    echo "Você só tem $idade anos e está acompanhado". PHP_EOL; 
    echo 'Pode entrar.'; 
}else
    echo "Você só tem $idade anos. Não pode entrar desacompanhado."; 
echo PHP_EOL;
echo "Adeus!";