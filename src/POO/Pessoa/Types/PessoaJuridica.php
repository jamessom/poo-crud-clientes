<?php

namespace POO\Pessoa\Types;
use \POO\Pessoa\Pessoa;

class PessoaJuridica extends Pessoa
{
    private $cnpj;

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     * @return PessoaJuridica
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function serializaObjeto()
    {
        $vars = array_merge(get_object_vars($this), parent::serializaObjeto());
        return $vars;
    }
}
