<?php

function sacar( array $conta, float $valoraSacar) : array
{
    if ($valoraSacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else
        $conta['saldo'] -= $valoraSacar;
    
    return $conta;
};

function depositar( array $conta, float $valoraDepositar): array
{
    if ($valoraDepositar > 0){
        $conta['saldo'] += $valoraDepositar;       
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }

    return $conta;
};

function titularComLetrasMaiusculas(array $conta)
{
    echo $conta
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeMensagem( string $mensagem){
    echo $mensagem . PHP_EOL;
}