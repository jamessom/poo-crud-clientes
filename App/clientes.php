<?php

require "../config.php";

/**
 * Array de dados aleatórios
 */
$arNomes  = array("João", "Maria", "José", "Gabriela", "Alberto", "Roberto", "Tânia", "Carla", "Joana", "Paula");
$arCPF    = array("10207193118", "11695934105", "02839906198", "02955746150", "50364474173");
$arCNPJ   = array("51563693000161", "55658085000191", "72937447000100", "26956921000116", "29931944000164");
$arDtNasc = array(
    "01/02/1980", "02/02/1982", "03/02/1983", "04/02/1984", "05/02/1985",
    "06/02/1986", "07/02/1987", "08/02/1988", "09/02/1989", "10/02/1990"
);
$arRgs    = array(
    "125083567", "438062966", "391309146", "115154115", "420249412",
    "365881247", "488251059", "233720509", "471440267", "333543075"
);

/**
 * Variáveis para agrupar os valores de cada classe
 */
$clientes     = array();
$fornecedores = array();

/**
 * Criação de pessoas do tipo física de forma aleatória
 */
$flagCliente = 1;
while( $flagCliente <= 5 ){

    $cliente = new \POO\Pessoa\Types\PessoaFisica();
    $cliente->setNome( $arNomes[rand(0,9)] )
        ->setDataNasc( $arDtNasc[rand(0,9)] )
        ->setRg( $arRgs[rand(0,9)] )
        ->setCpf( $arCPF[rand(0,4)] );
        array_push( $clientes, $cliente->serializaObjeto() );
    $flagCliente++;
}

/**
 * Criação de pessoas do tipo jurídica de forma aleatória
 */
$flagFornecedor = 1;
while( $flagFornecedor <= 5 ){

    $fornecedor = new \POO\Pessoa\Types\PessoaJuridica();
    $fornecedor->setNome( $arNomes[rand(0,9)] )
        ->setDataNasc( $arDtNasc[rand(0,9)] )
        ->setRg( $arRgs[rand(0,9)] )
        ->setCnpj( $arCNPJ[rand(0,4)] );
    array_push( $fornecedores, $fornecedor->serializaObjeto() );
    $flagFornecedor++;
}

/**
 * Agrupa todas as pessoas.
 */
$pessoas = array_merge( $clientes, $fornecedores );