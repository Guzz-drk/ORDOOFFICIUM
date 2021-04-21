<?php
include_once('../BD/conexao.php');
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

    private $banco;

//funções "magicas"
    public function __construct()
    {
      $this->banco = conexao::Conectar();

    }
    public function __get($prop) {
        return $this->$prop;
    }
    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }
   


    public function salvar(){
        $stmt = $this->banco->prepare("INSERT INTO OrdemServico(id,cliente,marca,modelo,cor,tipo,vicio) VALUES(?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$this->id);
        $stmt->bindParam(2,$this->cliente);
        $stmt->bindParam(3,$this->marcaEquipamento);
        $stmt->bindParam(4,$this->modeloEquipamento);
        $stmt->bindParam(5,$this->corEquipamento);
        $stmt->bindParam(6,$this->tipoEquipamento);
        $stmt->bindParam(7,$this->viciopercebido);

        $stmt->execute();
    }
    
    public function listartodos(){

        $rs = $this->banco->query("SELECT * FROM ordemservico");

        $osm = null;
        $i =0;

        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $os = new OrdemServico();

            $os->id = $row->id;
            $os->cliente = $row->cliente;
            $os->marca = $row->marca;
            $os->modelo = $row->modelo;
            $os->cor = $row->cor;
            $os->tipo = $row->tipo;
            $os->vicio = $row->vicio;

            $os->banco = null;
            $osm[$i] = $os;
            $i++;
        }
        return $osm;
    }
}
