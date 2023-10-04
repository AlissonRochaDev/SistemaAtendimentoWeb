<?php

    require_once './DAO/FuncionarioDAO.php';

    $objDAO = new FuncionarioDAO();

    if(isset($_POST['btnCadastrar'])){
        $nomeFuncionario = trim($_POST['nomeFuncionario']);
        $dataAdmss = $_POST['dataAdmss'];
        $phone = trim($_POST['phone']);
        $dataDmss = $_POST['dataDmss'];
        $local = trim($_POST['local']);

        $retorno = $objDAO->CadastrarFuncionario($nomeFuncionario, $dataAdmss, $phone, $dataDmss, $local);

        header('location: cadastrar_funcionario.php?retorno=' . $retorno); 
        exit;
    }

    $funcionarios = $objDAO->ConsultarFuncionario();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Cadastro de Funcionário</title>
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
                        <h2>Cadastro de Funcionário.</h2>
                        <h5>Aqui você pode realizar o cadastro dos seus Funcionários:</h5>
                    </div>
                </div>
                <hr />
                <form action="cadastrar_funcionario.php" method="POST">
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
                        <button name="btnCadastrar" class="btn btn-success" onclick="return ValidarFuncionarios()">Cadastrar</button>
                    </div>
                </form>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Funcionários cadastrados:</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Ação</th>
                                        <th>Nome</th>
                                        <th>Telefone (WhatsApp)</th>
                                        <th>Endereço</th>
                                        <th>Admissão</th>
                                        <th>Demissão</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php foreach($funcionarios as $fun): ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a href="alterar_funcionario.php?retorno=<?= $fun['id_funcionario'] ?>" class="btn btn-warning">Alterar</a>
                                        </td>
                                        <td><?= $fun['nome_funcionario'] ?></td>
                                        <td><?= $fun['tel_funcionario'] ?></td>
                                        <td><?= $fun['endereco_funcionario'] ?></td>
                                        <td><?= $fun['data_admissao'] ?></td>
                                        <td><?= $fun['data_demissao'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</body>
</html>