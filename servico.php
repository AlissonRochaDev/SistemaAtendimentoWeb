<?php

    require_once './DAO/ServicoDAO.php';

    $objDAO = new ServicoDAO();

    if(isset($_POST['btnCadastrar'])){
        $nomeServico = trim($_POST['nomeServico']);
        $obsServico = trim($_POST['descServico']);

        $retorno = $objDAO->CadastrarServicos($nomeServico, $obsServico);

        header('location: servico.php?retorno=' . $retorno); 
        exit;
    }

    $servicos = $objDAO->ConsultarServico();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Serviços</title>
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
                        <h2>Serviços.</h2>
                        <h5>Aqui você gerência seus serviços:</h5>
                    </div>
                </div>
                <hr/>
                <form action="servico.php" method="POST">
                    <div class="form-group">
                        <label>Nome do Serviço:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome do Serviço aqui..." name="nomeServico" id="nomeServico" value="<?= isset($nomeServico) ? $nomeServico : '' ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Descrição do Serviço (Opcional):</label>
                        <textarea class="form-control" placeholder="Digite sua Descrição aqui..." name="descServico" id="descServico" value="<?= isset($obsServico) ? $obsServico : '' ?>"></textarea>
                    </div>
                    <div style="text-align: center;">
                        <button name="btnCadastrar" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Serviços cadastrados:</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Ação</th>
                                        <th>Serviço</th>
                                        <th>Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($servicos as $ser): ?>
                                        <tr>
                                            <td style="text-align: center;">
                                                <a href="alterar_servico.php" class="btn btn-warning">Alterar</a>
                                            </td>
                                            <td><?= $ser['nome_servico'] ?></td>
                                            <td><?= $ser['descricao_servico'] ?></td>
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