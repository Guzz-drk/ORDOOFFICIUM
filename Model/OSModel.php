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
    public function salvar(){
        $stmt = $this->conexao->prepare("INSERT INTO OrdemServico(id,cliente,marca,modelo,cor,tipo,vicio) VALUES(?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$this->id);
        $stmt->bindParam(3,$this->cliente);
        $stmt->bindParam(4,$this->marcaEquipamento);
        $stmt->bindParam(5,$this->modeloEquipamento);
        $stmt->bindParam(6,$this->corEquipamento);
        $stmt->bindParam(7,$this->tipoEquipamento);
        $stmt->bindParam(8,$this->viciopercebido);

        $stmt->execute();
    }
    
    public function listartodos(){

        $rs = $this->conexao->query("SELECT * FROM pessoa");

        $osm = null;
        $i =0;

        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $os = new OrdemServico();

            $os->id = $row->id;
            $os->cliente = $row->cliente;
            $os->marca = $row->marcaEquipamento;
            $os->modelo = $row->modeloEquipamento;
            $os->cor = $row->corEquipamento;
            $os->tipo = $row->tipoEquipamento;
            $os->vicio = $row->viciopercebido;

            $os->conexao = null;
            $osm[$i] = $os;
            $i++;
        }
        return $os;
    }
}
