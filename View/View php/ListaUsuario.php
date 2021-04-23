<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Usuários cadastrados</title>
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
            <h2>Usuários</h2>
            <hr id="log_hr1"><hr id="log_hr2">
        </div>

        <table class="table" style="overflow: hidden;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Cidade</th>
                <th scope="col">Excluir</th>
                <th scope="col">Alterar</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            include '../../Model/UsuarioModel.php';
            require '../../BD/conexao.php';
            $user= new Usuario();
            $usuario = $user->listartodos();
            foreach($usuario as $e){
            echo '<tr>';
            echo '<th>'.($e->id).'</th>';
            echo '<th>'.($e->nome).'</th>';
            echo '<th>'.($e->email).'</th>';
            echo '<th>'.($e->cidade).'</th>';
            echo '<th> <button>&#9745</button> </th>';
            echo '<th> <button>&#9999</button> </th>';
            echo '</tr>';}?>
            </tbody>
          </table>
        
       
    </body>
</html>
