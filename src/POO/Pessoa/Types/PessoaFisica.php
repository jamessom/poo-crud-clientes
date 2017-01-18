<?php

namespace POO\Pessoa\Types;
use \POO\Pessoa\Pessoa;

class PessoaFisica extends Pessoa
{
    private $cpf;

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return PessoaFisica
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }
}
