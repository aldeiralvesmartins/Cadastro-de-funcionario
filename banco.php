<?php

require_once 'autoload.php';

use Aldeir\Banco\Modelo\Conta\{ContaCorrente, Titular, Conta, ContaPoupanca};
use Aldeir\Banco\Modelo\Endereco;
use Aldeir\Banco\Modelo\CPF;


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaPoupanca($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . '<br>';
echo $primeiraConta->recuperaCpfTitular() . '<br>';
echo $primeiraConta->recuperaSaldo() . '<br>';

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia);


$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));

echo Conta::recuperaNumeroDeContas() . '<br>';
