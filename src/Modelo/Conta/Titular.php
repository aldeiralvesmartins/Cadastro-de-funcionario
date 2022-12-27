<?php

namespace Aldeir\Banco\Modelo\Conta;

use Aldeir\Banco\Modelo\Autenticavel;
use Aldeir\Banco\Modelo\Pessoa;
use Aldeir\Banco\Modelo\CPF;
use Aldeir\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
