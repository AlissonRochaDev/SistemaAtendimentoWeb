<?php

    require_once './DAO/FuncionarioDAO.php';

    $objDAO = new FuncionarioDAO();

    if(isset($_GET['retorno']) && is_numeric($_GET['retorno'])){
        $idFuncionario = $_GET['cod'];

        $dados = $objDAO->DetalharFuncionario($idFuncionario);

        if(count($dados) == 0){
            header('location: cadastrar_funcionario.php');
            exit;
        }
    }else if(isset($_POST['btnSalvar'])){
        $nomeFuncionario = trim($_POST['nomeFuncionario']);
        $dataAdmss = trim($_POST['dataAdmss']);
        $dataDmss = trim($_POST['dataDmss']);
        $phone = trim($_POST['phone']);
        $local = trim($_POST['local']);

        $retorno = $objDAO->AlterarFuncionario($nomeFuncionario, $dataAdmss, $dataDmss, $phone, $local);


    }else if(isset($_POST['btnExcluir'])){

    }


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Alterar Funcionário</title>
    <?php include_once '_head.php'; ?>
</head>

<body>
    <div id="wrapper">
        <?php
            include_once '_topo.php';
            include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Alterar Funcionário.</h2>
                        <h5>Aqui você pode realizar a alteração de dados do seu Funcionário.</h5>
                    </div>
                </div>
                <hr/>
                <form action="alterar_funcionario.php" method="POST">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_funcionario'] ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome do Funcionário:</label>
                            <input type="text" class="form-control" placeholder="Digite o Nome aqui..." name="nomeFuncionario" id="nomeFuncionario" value="<?= isset($nomeFuncionario) ? $nomeFuncionario : '' ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Data de Admissão:</label>
                            <input type="date" class="form-control" name="dataAdmss" id="dataAdmss" value="<?= isset($dataAdmss) ? $dataAdmss : '' ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefone (WhatsApp):</label>
                            <input type="text" class="form-control" placeholder="Digite o Telefone aqui..." name="phone" id="phone" value="<?= isset($phone) ? $phone : '' ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Data de Demissão (Opcional):</label>
                            <input type="date" class="form-control" name="dataDmss" id="dataDmss" value="<?= isset($dataDmss) ? $dataDmss : '' ?>"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input type="text" class="form-control" placeholder="Digite o Endereço aqui..." name="local" id="local" value="<?= isset($local) ? $local : '' ?>"/>
                        </div>
                    </div>
                        <div style="text-align: center;">
                            <button name="btnSalvar" class="btn btn-success">Salvar</button>
                            <button name="btnExcluir" class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>