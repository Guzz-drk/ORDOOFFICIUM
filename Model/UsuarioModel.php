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


    public function __construct($id,$nome,$cpf,$rg,$telefone,$dataNascimento,$email,$rua,$bairro,$numero,$cidade,$senha,$controleAcesso)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->senha = $senha;
        $this->controleAcesso = $controleAcesso;
        

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
