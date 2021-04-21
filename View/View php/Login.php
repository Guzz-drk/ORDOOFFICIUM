<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
                </div>
            </div>
        </header>

        <div>
            <h2>Login</h2>
            <hr id="log_hr1"><hr id="log_hr2">
        </div>
        
        <form class="formulario">
            <div class="form-group col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="usuario_gr">Usuário</span>
                    </div>
                    <input type="text" class="form-control" name="txtNome" id="txtNome" required>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="cpf_gr">CPF</span>
                    </div>
                    <input type="text" class="form-control" name="txtCpf" id="txtCpf" required>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email_gr">Email</span>
                    </div>
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" required>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="senha_gr">Senha</span>
                    </div>
                    <input type="text" class="form-control" name="txtSenha" id="txtSenha" required>
                </div>
            </div>
            <hr id="log_hr3"><hr id="log_hr4">
            <button type="submit" class="btn btn-outline-primary">Entrar</button>
        </form>
        
    </body>
</html>