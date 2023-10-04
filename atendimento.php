<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Atendimento</title>
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
                        <h2>Atendimento ao Cliente.</h2>
                        <h5>Realize o atennimento ao cliente a seguir:</h5>
                    </div>
                </div>
                <hr />
                <form action="meusDados.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data do Atendimento:</label>
                            <input type="date" class="form-control" name="dataAtendimento" id="dataAtendimento" value="" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Funcionário:</label>
                            <input class="form-control" name="funcionario" id="funcionario" value="" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Valor do Atendimento:</label>
                            <input type="text" class="form-control" placeholder="Digite o Valor aqui..." name="valor" id="valor" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Horário do Atendimento:</label>
                            <input type="datetime-local" class="form-control" name="horario" id="horario" value="" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Serviço do Atendimento:</label>
                            <input type="text" class="form-control" name="servAtendimento" id="servAtendimento" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Endereço do Salão (Opcional):</label>
                            <textarea class="form-control" placeholder="Digite o Endereço aqui..." name="endereco" id="endereco" value=""></textarea>
                        </div>
                        <div style="text-align: center;">
                            <button name="btnCadastrar" class="btn btn-success">Confirmar Atendimento</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>