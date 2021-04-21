<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <div>
        <form action="../../Controller/UsuarioController.php" method="POST">
            <Label>ID:</Label>
                <input type="text" name="id" id="id">
                <br><br>
            <Label>Nome:</Label>
                <input type="text" name="txtNome" id="txtNome">
                <br><br>
            <Label>CPF:</Label>
                <input type="text" name="txtCpf" id="txtCpf">
                <br><br>
            <Label>RG:</Label>
                <input type="text" name="txtRg" id="txtRg">
                <br><br>
            <Label>Telefone:</Label>
                <input type="text" name="txtTelefone" id="txtTelefone">
                <br><br>
            <Label>Data de Nascimento:</Label>
                <input type="date" name="txtDatanasc" id="txtDatanasc">
                <br><br>
            <Label>E-mail:</Label>
                <input type="email" name="txtEmail" id="txtEmail">
                <br><br>
            <Label>Cidade:</Label>
                <input type="text" name="txtCidade" id="txtCidade">
                <br><br>
            <Label>Rua:</Label>
                <input type="text" name="txtRua" id="txtRua">
                <br><br>
            <Label>Bairro:</Label>
                <input type="text" name="txtBairro" id="txtBairro">
                <br><br>
            <Label>Número:</Label>
                <input type="text" name="txtNumero" id="txtNumero">
                <br><br>
            <Label>Senha:</Label>
                <input type="password" name="txtSenha" id="txtSenha">
                <br><br>
            <Label>Controle de Acesso:</Label>
                <input type="text" name="txtControleacesso" id="txtControleacesso">
                <br><br>
            <button type="submit">Enviar!</button> 
            <button type="reset">Limpar!</button>
        </form>
    </div>
        <br><br>
    <div>
        <form action="home.php">
            <button type="submit">Cancelar!</button>
        </form>
    </div>
</body>
</html>