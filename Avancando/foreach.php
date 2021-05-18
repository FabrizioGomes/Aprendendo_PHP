<?php
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Allan',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Giovani',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Fabrizio',
    'saldo' => 300
    ]
];

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}