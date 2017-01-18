<?php

require "../config.php";

$cliente = new \POO\Pessoa\Types\PessoaFisica();
$cliente->setNome("Fulaninho")
        ->setDataNasc('10/10/1980')
        ->setRg("3488823")
        ->setCpf("13536788255");

$fornecedir = new \POO\Pessoa\Types\PessoaJuridica();
$fornecedir->setCnpj("11111111111")
           ->setDataNasc('01/01/1981')
           ->setNome("Jose")
           ->setRg('222222');

var_dump( $cliente, $fornecedir );