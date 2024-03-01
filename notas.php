<?php

$notas = [
   'Fernando'=>10,
    'Luiz' =>8,
    'Pedro' =>null,
    'Rosangela' =>7,
    'João'=>6
];

krsort($notas);
var_dump($notas); 

if(is_array($notas)) {
    echo 'Sim, é um array'. PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Luiz fez a prova:' . PHP_EOL;
var_dump(isset($notas['Luiz']));

echo 'Alguém tirou 10?' .PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' .PHP_EOL;
var_dump (array_search(10, $notas));

// array_key_exists = Verifica se a chave existe
// in_array = Verifica se o valor existe
// isset = Verifica se a chave existe e não é nula.