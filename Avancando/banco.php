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


foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    exibeMensagem(
        "$cpf $titular $saldo"
    );
}


