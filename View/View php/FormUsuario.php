<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="jumbotron jumbotron-fluid cab_1">
                <div class="logo">
                    <img src="img/logo.png" width="150px">
                </div>
                <div class="login_e_home">
                    <a href="home.php"><img src="img/home_img.png" width="50px"><span class="descricao" id="hom">Home</span></a>
                    <a href="Login.php"><img src="img/login_img.png" width="50px"><span class="descricao" id="log">Login</span></a>
                </div>
            </div>

            <div class="cab_2">
                <ul class="menu_opc">
                    <li><a class="opc">Ordens de Serviço</a>
                        <ul class="lista_OsUs">
                            <li><a href="FormOs.php">Criar</a></li>
                            <li><a href="ListaOS.php">Listar</a></li>
                        </ul>
                    </li>
                    <li><a class="opc">Usuários</a>
                        <ul class="lista_OsUs" id="list_user">
                            <li><a href="FormUsuario.php">Cadastrar</a></li>
                            <li><a href="ListaUsuario.php">Listar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>

        <div>
            <h2>Cadastro de usuário</h2>
            <hr id="log_hr1"><hr id="log_hr2">
        </div>

        <form class="form_os" action="../../Controller/UsuarioController.php" method="POST">
            <div class="form-row">
            <div class="form-group col-md-5">
                    <label for="">id</label>
                    <input type="text" class="form-control" name="id" id="id" placeholder="Ex: 1" required>
                </div>
                <div class="form-group col-md-5">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Ex: Tristan Monteiro" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">CPF</label>
                    <input type="text" class="form-control" name="txtCpf" id="txtCpf" placeholder="xxx.xxx.xxx-xx" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="">RG</label>
                    <input type="text" class="form-control" name="txtRg" id="txtRg" placeholder="xxxxxxxxxx" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Data de nascimento</label>
                    <input type="date" class="form-control" name="txtDatanasc" id="txtDatanasc" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" name="txtTelefone" id="txtTelefone" placeholder="(xx) x xxxx-xxxx" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="">Bairro</label>
                  <input type="text" class="form-control" name="txtBairro" id="txtBairro" required>
              </div>
              <div class="form-group col-md-4">
                  <label for="">Rua</label>
                  <input type="text" class="form-control" name="txtRua" id="txtRua" required>
              </div>
              <div class="form-group col-md-4">
                  <label for="">Numero</label>
                  <input type="text" class="form-control" name="txtNumero" id="txtNumero" required>
              </div>
                <div class="form-group col-md-4">
                  <label for="">Cidade</label>
                  <input type="text" class="form-control" name="txtCidade" id="txtCidade" required>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Ex@emplo.com" required>
                </div>
                <div class="form-group col-md-5">
                    <label for="">Senha</label>
                    <input type="password" class="form-control" name="txtSenha" id="txtSenha" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label for="">Controle de Acesso</label>
                    <select name="txtControleacesso" id="txtControleacesso" class="form-control">
                        <option selected></option>
                        <option value="true">Administrador</option>
                        <option value="false">Usuário</option>
                    </select>
                </div>
            </div>
            <hr id="log_hr3"><hr id="log_hr4">
            <button type="submit" class="btn btn-outline-primary" id="cadastrar">Cadastrar</button>
            <button type="reset" class="btn btn-outline-primary" id="limpar">Limpar</button>
        </form> <br>
        <form action="home.php"><button type="submit" class="btn btn-outline-primary" id="cancelar">Cancelar</button></form>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/jquery.mask.js"></script>
        <script>
            $(document).ready(function() {
                $("#txtCpf").mask("000.000.000-00")
                $("#txtTelefone").mask("(00) 0 0000-0000")
            })
        </script>
    </body>
</html>