<?php

$conta1 = [
    'Titular' => "Pedro",
     'saldo' => 1000
];
$conta2 = [
    'Titular'=> 'Luiz',
    'saldo' => 1320
];
$conta3 = [
    'titular' => 'Rosangela',
    'saldo' => 2000
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count ($contasCorrentes); $i++) {
    echo $contasCorrentes [$i] ['titular'] . PHP_EOL;
}