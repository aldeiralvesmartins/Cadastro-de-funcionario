<?php

use Aldeir\Banco\Modelo\CPF;
use Aldeir\Banco\Modelo\Funcionario\Desenvolvedor;

$desenvolvedor = new Desenvolvedor('aldeir', new CPF('545.895.369-87'),3000);
$desenvolvedor->nome;