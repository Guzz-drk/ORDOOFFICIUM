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
    public function __construct($id,$cliente,$marca,$modelo,$cor,$tipo,$vicio)
    {
        $this->id=$id;
        $this->cliente=$cliente;
        $this->marcaEquipamento=$marca;
        $this->modeloEquipamento=$modelo;
        $this->corEquipamento=$cor;
        $this->tipoEquipamento=$tipo;
        $this->viciopercebido=$vicio;

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
