<?php

use Aldeir\Banco\Modelo\CPF;
use Aldeir\Banco\Modelo\Funcionario\Gerente;
use Aldeir\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
