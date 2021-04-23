<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Criação de Ordem de Serviço</title>
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
        <h2>Criar Ordem de serviço</h2>
        <hr id="log_hr1">
        <hr id="log_hr2">
    </div>

    <form class="form_os" action="../../Controller/OSController.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">ID</label>
                <input type="text" class="form-control" name="id" id="id">
            </div>
            <div class="form-group col-md-5">
                <label for="">Cliente</label>
            <select class="form-control" name="txtCliente" id="txtCliente">
                    <option value="0" selected>Selecione O cliente</option>
                    <?php
                    include '../../Model/UsuarioModel.php';
                    require '../../BD/conexao.php';
                    $user = new Usuario();
                    $usuario = $user->listartodos();
                    foreach ($usuario as $e) {
                        echo '<option value="'.($e->id).'">'.($e->nome).'</option>';
                    
                        
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="">Marca</label>
                <input type="text" class="form-control" name="txtMarcaequip" id="txtMarcaequip">
            </div>
            <div class="form-group col-md-2">
                <label for="">Modelo</label>
                <input type="text" class="form-control" name="txtModeloequip" id="txtModeloequip">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Cor</label>
                <input type="text" class="form-control" name="txtCorequip" id="txtCorequip">
            </div>
            <div class="form-group col-md-4">
                <label for="">Tipo</label>
                <input type="text" class="form-control" name="txtTipoequip" id="txtTipoequip">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-11">
                <label for="">Problema</label>
                <input type="text" class="form-control" name="txtVicioperceb" id="txtVicioperceb">
            </div>
        </div>
        <hr id="log_hr3">
        <hr id="log_hr4">
        <button type="submit" class="btn btn-outline-primary" id="criar">Criar</button>
        <button type="reset" class="btn btn-outline-primary" id="limpar">Limpar</button>
    </form>
    <form action="home.php"><button type="submit" class="btn btn-outline-primary" id="cancelar">Cancelar</button></form>
</body>

</html>