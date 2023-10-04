<?php

    require_once './DAO/UsuarioDAO.php';

    $objDAO = new UsuarioDAO();

    if(isset($_POST['btnCadastrar'])){
        $nome = trim($_POST['nomeUsuario']);
        $teleSalao = trim($_POST['telefone']);
        $nomeSalao = trim($_POST['nomeSalao']);
        $email = trim($_POST['emailUsuario']);
        $endereco = trim($_POST['endereco']);

        $retorno = $objDAO->GravarMeusDados($nome, $teleSalao, $nomeSalao, $email, $endereco);
    }

    $dados = $objDAO->CarregarMeusDados();

    // echo '<pre>';
    // var_dump($dados);
    // echo '</pre>';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Meus Dados</title>
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
                        <h2>Meus Dados.</h2>
                        <h5>Aqui você poderá alterar seus dados de cadastro.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr/>
                <form action="meus_dados.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Seu Nome:</label>
                            <input class="form-control" placeholder="Digite seu Nome aqui..." name="nomeUsuario" id="nomeUsuario" value="<?= $dados[0]['nome_usuario'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Telefone do Salão:</label>
                            <input class="form-control" placeholder="Digite Telefone aqui..." name="telefone" id="telefone" value="<?= $dados[0]['tel_usuario'] ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome do Salão:</label>
                            <input class="form-control" placeholder="Digite o Nome do Salão aqui..." name="nomeSalao" id="nomeSalao" value="<?= $dados[0]['nome_salao'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Seu E-mail:</label>
                            <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="emailUsuario" id="emailUsuario" value="<?= $dados[0]['email_usuario'] ?>"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Endereço do Salão (Opcional):</label>
                            <input type="text" class="form-control" placeholder="Digite o Endereço aqui..." name="endereco" id="endereco" value="<?= $dados[0]['endereco_salao'] ?>"/>
                        </div>
                        <div style="text-align: center;">
                            <button name="btnCadastrar" class="btn btn-success" onclick="return ValidarMeusDados()">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>