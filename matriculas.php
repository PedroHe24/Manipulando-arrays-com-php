<?php

$alunos2023 = [
   0 =>'Fernando',
    1=>'Luiz',
     2 =>'Pedro',
     3=>'Rosangela',
     4 =>'João',
 ];

 $novosAlunos = [
   5 =>'Bernado',
    6 =>'Ana Julia',
    7 =>'Wagner',
    8 =>'Maria Martha',
    9 =>'Isabela',
 ];

 $alunos2024 = [...$alunos2023, 'Juvenil' ,...$novosAlunos];
array_push($alunos2023, 'Gabriel', 'Pablo', 'Maria Alice');
$alunos2024[] = 'Zé Roberto';

array_unshift($alunos2023, 'Musashi', 'Ibuki');

echo array_pop($alunos2024). PHP_EOL;
 
var_dump($alunos2023);
