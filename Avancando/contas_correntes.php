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

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}