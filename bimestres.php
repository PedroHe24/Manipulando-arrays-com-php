<?php 

$notasBimestre1 = [
   'Fernando'=>10,
    'Luiz' =>5,
    'Pedro' => 10,
    'Rosangela' =>7,
    'João'=>6
];

$notasBimestre2 = [
    'Fernando' => 7,
     'Luiz' => 8,
     'Pedro' =>10,
     'Rosangela' =>5
     
 ];

 $alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));

 