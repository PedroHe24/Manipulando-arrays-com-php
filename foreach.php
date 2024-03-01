<?php

$contasCorrentes = [
   '092.660.136-92' =>  [
    'Titular' => "Pedro",
     'saldo' => 1000
   ],
   '123.456.789-10' => [
    'Titular'=> 'Luiz',
    'saldo' => 1320
   ],
   '976.835.586-72' =>  [
    'Titular' => 'Rosangela',
    'saldo' => 2000
   ]
   ];

foreach ($contasCorrentes as $cpf => $conta) {
 echo $cpf . " " . $conta . PHP_EOL;
}