<?php

    require_once './DAO/ClienteDAO.php';

    $objDAO = new ClienteDAO();

    if(isset($_POST['btnCadastrar'])){
        $nomeCliente = trim($_POST['nomeCliente']);
        $phone = trim($_POST['phone']);
        $endereco = trim($_POST['endereco']);

        $retorno = $objDAO->CadastrarCliente($nomeCliente, $phone, $endereco);

        // header('Refresh: 3; url=cadastrar_cliente.php?retorno='); 
        // exit;

        header('location: cadastrar_cliente.php?retorno=' . $retorno); 
        exit;
    }

    $clientes = $objDAO->ConsultarCliente();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Cadastro de Cliente</title>
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
                        <h2>Cadastro de Cliente.</h2>
                        <h5>Aqui você pode realizar o cadastro de seus clientes:</h5>
                    </div>
                </div>

                <hr/>

                <form action="cadastrar_cliente.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome do Cliente:</label>
                            <input type="text" class="form-control" placeholder="Digite o Nome aqui..." name="nomeCliente" id="nomeCliente" value="<?= isset($nomeCliente) ? $nomeCliente : '' ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefone (WhatsApp):</label>
                            <input type="text" class="form-control" placeholder="Digite o Telefone aqui..." name="phone" id="phone" value="<?= isset($phone) ? $phone : '' ?>"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input type="text" class="form-control" placeholder="Digite o Endereço aqui..." name="endereco" id="endereco" value="<?= isset($endereco) ? $endereco : '' ?>"/>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button name="btnCadastrar" class="btn btn-success" onclick="return ValidarClientes()">Cadastrar</button>
                    </div>
                </form>

                <hr/>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Clientes cadastrados:</span>
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
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php foreach($clientes as $clt): ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a href="alterar_cliente.php" class="btn btn-warning">Alterar</a>
                                            <a href="agendamento.php" class="btn btn-info">Agendar</a>
                                        </td>
                                        <td><?= $clt['nome_cliente'] ?></td>
                                        <td><?= $clt['tel_cliente'] ?></td>
                                        <td><?= $clt['endereco_cliente'] ?></td>
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