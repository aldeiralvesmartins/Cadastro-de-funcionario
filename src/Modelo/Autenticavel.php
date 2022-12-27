<?php

namespace Aldeir\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
