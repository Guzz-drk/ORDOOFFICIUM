<?php
include '../Model/UsuarioModel.php';
include '../Include/UsuarioValidate.php';

if((!empty($_POST['id'])) && (!empty($_POST['txtNome'])) && (!empty($_POST['txtCpf'])) &&
(!empty($_POST['txtRg'])) && (!empty($_POST['txtTelefone'])) &&
(!empty($_POST['txtDatanasc'])) && (!empty($_POST['txtEmail'])) &&(!empty($_POST['txtRua'])) &&
(!empty($_POST['txtBairro'])) &&  (!empty($_POST['txtNumero'])) && 
(!empty($_POST['txtCidade'])) && (!empty($_POST['txtSenha'])) && 
(!empty($_POST['txtControleacesso'])))
{
    $erros = array();

    if(!UsuarioValidate::testarEmail($_POST['txtEmail'])){
        $erros[] = 'E-mail Inválido';
    }
    if(!UsuarioValidate::validaCPF($_POST['txtCpf'])){
        $erros[] = 'CPF Inválido';
    }

    if(count($erros) == 0){
        $user = new Usuario();

        $user->id = $_POST['id'];
        $user->nome = $_POST['txtNome'];
        $user->cpf = $_POST['txtCpf'];
        $user->rg = $_POST['txtRg'];
        $user->telefone = $_POST['txtTelefone'];
        $user->dataNascimento = $_POST['txtDatanasc'];
        $user->email = $_POST['txtEmail'];
        $user->rua = $_POST['txtRua'];
        $user->bairro = $_POST['txtBairro'];
        $user->numero = $_POST['txtNumero'];
        $user->cidade = $_POST['txtCidade'];
        $user->senha = $_POST['txtSenha'];
        $user->controleAcesso = $_POST['txtControleacesso'];
        $user->Inserir();
        header('Location:../view/view php/ListaUsuario.php');
       /* $usuarios = $user->listartodos();
        foreach($usuarios as $e){
            echo '-----------------------------------------------------------------------------------<br>';
            echo ($e->id).'<br>';
            echo ($e->nome).'<br>';
            echo ($e->cpf).'<br>';
            echo ($e->rg).'<br>';
            echo ($e->telefone).'<br>';
            echo ($e->email).'<br>';
            echo ($e->cidade).'<br>';
        }*/
    } 
    else{
        echo "Ocorreram erros ao cadastrar novo Usuário.";
    }
}
else{
    echo "Informe todos os campos obrigatórios!";
}
?>