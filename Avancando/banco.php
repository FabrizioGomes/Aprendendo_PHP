<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Allan',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Giovani',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
    'titular' => 'Fabrizio',
    'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);
$contasCorrentes['123.456.789-12'] = sacar(
    $contasCorrentes['123.456.789-12'],
    500
);

$contasCorrentes['123.456.789-12'] = depositar(
    $contasCorrentes['123.456.789-12'],
    10000
 );

unset ($contasCorrentes['123.456.789-11']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);


/*echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta) {
   exibeConta($conta);
}

echo "</ul>";
*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Contas correntes </h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>    
            Saldo: <?= $conta['saldo']; ?>
        </dd>
    <?php } ?>    
    </dl>
    
</body>
</html>