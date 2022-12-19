<?php

$contador = 1;

echo "While" . PHP_EOL;
while($contador <= 15){
    echo "#$contador".PHP_EOL;
    $contador++;
}

echo"For".PHP_EOL;
for($contador =1;$contador<=15;$contador++){
    if($contador==13){
        continue;
    }
    echo "#$contador".PHP_EOL;
}