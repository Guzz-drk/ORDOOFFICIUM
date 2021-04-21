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
        <form action="../../Controller/OSController.php" method="POST">
            <Label>ID:</Label>
                <input type="text" name="id" id="id">
                <br><br>
            <Label>Cliente:</Label>
                <input type="text" name="txtCliente" id="txtCliente">
                <br><br>
            <Label>Marca do Equipamento:</Label>
                <input type="text" name="txtMarcaequip" id="txtMarcaequip">
                <br><br>
            <Label>Modelo do Equipamento:</Label>
                <input type="text" name="txtModeloequip" id="txtModeloequip">
                <br><br>
            <Label>Cor do Equipamento:</Label>
                <input type="text" name="txtCorequip" id="txtCorequip">
                <br><br>
            <Label>Tipo de Equipamento:</Label>
                <input type="text" name="txtTipoequip" id="txtTipoequip">
                <br><br>
            <Label>Vcio Percebido:</Label>
                <input type="text" name="txtVicioperceb" id="txtVicioperceb">
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