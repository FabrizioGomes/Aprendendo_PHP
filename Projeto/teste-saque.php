<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
        'Fabrizio',
        new Endereco('São Paulo', 'Jabaquara', 'Rua um', '98')
    )
);

$conta->deposita(5000);
$conta->saca(100);

echo $conta->recuperaSaldo();
