<?php

use Aldeir\Banco\Modelo\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco('jaragua','vivendas','2','5');
$outroEndereco = new Endereco('são chico','japão','14','6');


echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;