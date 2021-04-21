<?php
include_once('../BD/conexao.php');
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
    
    private $banco;


    public function __construct()
    {
        $this->banco = conexao::Conectar();
    }
    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }
    public function __get($nome)
    {
        return $this->$nome;
    }
    public function Inserir(){
        $stmt = $this->banco->prepare("INSERT INTO usuario(id,nome,cpf,rg,telefone,datanacimento,email,rua,bairro,numero,cidade,senha,controleacesso) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$this->id);
        $stmt->bindParam(2,$this->nome);
        $stmt->bindParam(3,$this->cpf);
        $stmt->bindParam(4,$this->rg);
        $stmt->bindParam(5,$this->telefone);
        $stmt->bindParam(6,$this->dataNascimento);
        $stmt->bindParam(7,$this->email);
        $stmt->bindParam(8,$this->rua);
        $stmt->bindParam(9,$this->bairro);
        $stmt->bindParam(10,$this->numero);
        $stmt->bindParam(11,$this->cidade);
        $stmt->bindParam(12,$this->senha);
        $stmt->bindParam(13,$this->controleAcesso);
        $stmt->execute();
    }
    public function listartodos(){

        $rs = $this->banco->query("SELECT * FROM usuario");

        $osm = null;
        $i =0;

        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $os = new Usuario();

            $os->id = $row->id;
            $os->nome = $row->nome;
            $os->cpg = $row->cpf;
            $os->rg = $row->rg;
            $os->telefone = $row->telefone;
            $os->datanacimento = $row->datanacimento;
            $os->email = $row->email;
            $os->rua = $row->rua;
            $os->bairro = $row->bairro;
            $os->numero = $row->numero;
            $os->cidade = $row->cidade;
            $os->senha = $row->senha;
            $os->controleacesso = $row->controleacesso;

            $os->banco = null;
            $osm[$i] = $os;
            $i++;
        }
        return $osm;
    }
   
}
