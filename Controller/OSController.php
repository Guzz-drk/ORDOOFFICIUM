<?php
include '../Model/OSModel.php';
if((!empty($_POST['id'])) &&(!empty($_POST['txtCliente'])) && (!empty($_POST['txtMarcaequip'])) &&
(!empty($_POST['txtModeloequip'])) && (!empty($_POST['txtCorequip'])) &&
(!empty($_POST['txtTipoequip'])) && (!empty($_POST['txtVicioperceb'])))
{
    $erros = array();

    if(count($erros) == 0){
        $os = new OrdemServico();

        $os->id = $_POST['id'];
        $os->cliente = $_POST['txtCliente'];
        $os->marcaEquipamento = $_POST['txtMarcaequip'];
        $os->modeloEquipamento = $_POST['txtModeloequip'];
        $os->corEquipamento = $_POST['txtCorequip'];
        $os->tipoEquipamento = $_POST['txtTipoequip'];
        $os->viciopercebido = $_POST['txtVicioperceb'];
        $os->salvar();
        header('Location:../view/view php/ListaOs.php');
        /*
        $ordens = $os->listartodos();
        foreach($ordens as $e){
            echo '-----------------------------------------------------------------------------------<br>';
            echo ($e->id).'<br>';
            echo ($e->cliente).'<br>';
            echo ($e->marca).'<br>';
            echo ($e->modelo).'<br>';
            echo ($e->cor).'<br>';
            echo ($e->tipo).'<br>';
            echo ($e->vicio).'<br>';
        }*/
    }
    else{
        echo "Ocorreram erros ao cadastrar a Ordem de Serviço.";
    }
}
else{
    echo "Informe todos os campos obrigatórios!";
}

?>