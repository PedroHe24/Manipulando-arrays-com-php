<?php

$dados =[
    'nome' => 'Pedro',
    'nota' => 10,
    'idade' => 24,
];

extract($dados);
var_dump($nome, $nota, $idade);

var_dump (compact('nome', 'nota', 'idade'));