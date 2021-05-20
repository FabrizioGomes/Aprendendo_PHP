<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'Cpf.php';

$fabrizio = new Titular(new Cpf('123.456.789-10'), 'Fabrizio Gomes');
$primeiraConta = new Conta($fabrizio);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$giovani = new Titular(new Cpf('698.549.548-10'), 'Giovani Vicente');
$segundaConta = new Conta($giovani);
var_dump($segundaConta);

$outra = new Conta(new Titular(new Cpf('123.090.998-01'), 'Abcdefg'));

unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
