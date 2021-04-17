<?php
include '../Model/OSModel.php';
if((!empty($_POST['txtCliente'])) && (!empty($_POST['txtMarcaequip'])) &&
(!empty($_POST['txtModeloequip'])) && (!empty($_POST['txtCorequip'])) &&
(!empty($_POST['txtTipoequip'])) && (!empty($_POST['txtVicioperceb'])))
{
    $erros = array();

    if(count($erros) == 0){
        $os = new OrdemServico();

        $os->cliente = $_POST['txtCliente'];
        $os->marcaEquipamento = $_POST['txtMarcaequip'];
        $os->modeloEquipamento = $_POST['txtModeloequip'];
        $os->corEquipamento = $_POST['txtCorequip'];
        $os->tipoEquipamento = $_POST['txtTipoequip'];
        $os->viciopercebido = $_POST['txtVicioperceb'];
        echo "Ordem de Servico para $os->cliente criada com sucesso!";
    }
    else{
        echo "Ocorreram erros ao cadastrar a Ordem de Serviço.";
    }
}
else{
    echo "Informe todos os campos obrigatórios!";
}

?>