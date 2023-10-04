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
                        <h2>Alterar Serviços.</h2>
                        <h5>Aqui você alterar ou excluir seus serviços:</h5>
                    </div>
                </div>
                <hr />
                <form action="meusDados.php" method="POST">
                    <div class="form-group">
                        <label>Data do Atendimento:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome do Serviço aqui..." name="nomeServico" id="nomeServico" value=""/>
                    </div>
                    <div class="form-group">
                        <label>Descrição do Serviço (Opcional):</label>
                        <textarea class="form-control" placeholder="Digite sua Descrição aqui..." name="descServico" id="descServico" value=""></textarea>
                    </div>
                    <div style="text-align: center;">
                        <button name="btnSalvar" class="btn btn-success">Salvar</button>
                        <button name="btnExcluir" class="btn btn-danger">Excluir</button>
                    </div>
                </form>              
            </div>
        </div>
    </div>
</body>
</html>