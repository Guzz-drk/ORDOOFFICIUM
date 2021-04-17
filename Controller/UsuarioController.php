<?php

include '../Model/UsuarioModel.php';
include '../Include/UsuarioValidate.php';

if((!empty($_POST['txtNome'])) && (!empty($_POST['txtCpf'])) &&
(!empty($_POST['txtRg'])) && (!empty($_POST['txtTelefone'])) &&
(!empty($_POST['txtDatanasc'])) && (!empty($_POST['txtEmail'])) &&
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

        $user->nome = $_POST['txtNome'];
        $user->cpf = $_POST['txtCpf'];
        $user->rg = $_POST['txtRg'];
        $user->telefone = $_POST['txtTelefone'];
        $user->dataNascimento = $_POST['txtDatanasc'];
        $user->email = $_POST['txtEmail'];
        $user->cidade = $_POST['txtCidade'];
        $user->senha = $_POST['txtSenha'];
        $user->controleAcesso = $_POST['txtControleacesso'];
        echo "Usuário $user->nome $user->email Criado com sucesso!";
    } 
    else{
        echo "Ocorreram erros ao cadastrar novo Usuário.";
    }
}
else{
    echo "Informe todos os campos obrigatórios!";
}
?>