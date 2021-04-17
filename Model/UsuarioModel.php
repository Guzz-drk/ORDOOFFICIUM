<?php

class Usuario
{
    var $id;
    var $nome;
    var $cpf;
    var $rg;
    var $telefone;
    var $dataNascimento;
    var $email;
    var $rua;
    var $bairro;
    var $numero;
    var $cidade;
    var $senha;
    var $controleAcesso;


    public function __construct()
    {
    }
    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }
    public function __get($nome)
    {
        return $this->$nome;
    }
}
