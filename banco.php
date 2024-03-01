<?php
  require_once ("funcoes.php");

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
      'saldo' => 20000
    ]
    ];

    $contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

    $contasCorrentes['976.835.586-72' ] = depositar($contasCorrentes['976.835.586-72'], 900);

    unset ($contasCorrentes['976.835.586-72']);

  titularComLetrasMaiusculas($contasCorrentes['092.660.136-92']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas Correntes</h1>

  <d1>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
      <dt><h3><?=$conta['Titular']; ?>-<?= $cpf;?></h3></dt>
   <dd> Saldo:<?php echo $conta['saldo'];?></dd>
   <?php } ?>    
  </d1>
</body>
</html>

  

  