<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Alterar Cliente</title>
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
                        <h2>Alterar Cliente.</h2>
                        <h5>Aqui você pode realizar a alteração de cadastro do seu cliente:</h5>
                    </div>
                </div>
                <hr />
                <form action="meusDados.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome do Cliente:</label>
                            <input type="text" class="form-control" placeholder="Digite o Nome aqui..." name="nomeCliente" id="nomeCliente" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefone (WhatsApp):</label>
                            <input type="text" class="form-control" placeholder="Digite o Telefone aqui..." name="phone" id="phone" value=""/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input type="text" class="form-control" placeholder="Digite o Endereço aqui..." name="endereco" id="endereco" value=""/>
                        </div>
                    </div>
                        <div style="text-align: center;">
                            <button name="btnSalvar" class="btn btn-success">Salvar</button>
                            <button name="btnExcluir" class="btn btn-danger">Excluir</button>
                            <a href="consultar_cliente.php" class="btn btn-info">Consultar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>