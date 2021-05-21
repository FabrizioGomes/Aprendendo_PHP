<?php

require_once 'Modelo/Conta/Conta.php';
require_once 'Modelo/Endereco.php';
require_once 'Modelo/Pessoa.php';
require_once 'Modelo/Conta/Titular.php';
require_once 'Modelo/Cpf.php';

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});