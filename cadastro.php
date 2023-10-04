<?php

    require_once './DAO/UsuarioDAO.php';

    if(isset($_POST['btnCadastrar'])){
        $nome = trim($_POST['nomeUsuario']);
        $nomeSalao = trim($_POST['nomeSalao']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);
        $endereco = trim($_POST['endereco']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        $objDAO = new UsuarioDAO();
        $retorno = $objDAO->ValidarCadastro($nome, $nomeSalao, $telefone, $email, $endereco, $senha, $repSenha);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Cadastrar</title>
    <?php include_once '_head.php'; ?>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <br/>
                <br/>
                <h2>Cadastre-se.</h2>
                <h5>(Faça seu cadastro para acesso)</h5>
                <?php include_once '_msg.php' ?>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Preencha todos os campos:</strong>
                    </div>
                    <div class="panel-body">
                        <br/>
                        <form action="cadastro.php" method="POST" role="form">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nomeUsuario" id="nomeUsuario" value="<?= isset($nome) ? $nome : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Digite o Nome do Salão aqui..." name="nomeSalao" id="nomeSalao" value="<?= isset($nomeSalao) ? $nomeSalao : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Digite o Telefone do Salão aqui..." name="telefone" id="telefone" value="<?= isset($telefone) ? $telefone : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email" value="<?= isset($email) ? $email : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Digite o Endereço do Salão aqui..." name="endereco" id="endereco" value="<?= isset($endereco) ? $endereco : '' ?>"/>
                            </div>                            
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite sua Senha aqui (Mínimo 6 caracteres)" name="senha" id="senha" value="<?= isset($senha) ? $senha : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Repita sua Senha" name="repSenha" id="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>"/>
                            </div>
                            <button class="btn btnColor" name="btnCadastrar" onclick="return ValidarCadastro()">Cadastrar</button>
                        </form>
                        <hr/>
                        <span>Já possui uma conta?</span> <a href="index.php">Clique aqui...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>