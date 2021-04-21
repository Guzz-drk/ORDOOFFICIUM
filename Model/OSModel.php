<?php
//classe
class OrdemServico
{
    //variaveis a serem reconhecidas pelo navegador 
    var $id;
    var $cliente;
    var $marcaEquipamento;
    var $modeloEquipamento;
    var $corEquipamento;
    var $tipoEquipamento;
    var $viciopercebido;

//funções "magicas"
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
