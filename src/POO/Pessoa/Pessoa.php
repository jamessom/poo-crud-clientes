<?php

namespace POO\Pessoa;

class Pessoa
{
    private $nome;
    private $dataNasc;
    private $rg;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * @param mixed $dataNasc
     * @return Pessoa
     */
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     * @return Pessoa
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function serializaObjeto()
    {
        return get_object_vars( $this );
    }
}