<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Alterar Agendamento</title>
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
                        <h2>Alterar Agendamento do(a): (Nome do Usuário carregado pelo PHP).</h2>
                        <h5>Realize o agendamento para os clientes aqui:</h5>
                    </div>
                </div>
                <hr />
                <form action="meusDados.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data do Agendamento:</label>
                            <input type="date" class="form-control" name="dataAgendamento" id="dataAgendamento" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Funcionário do Agendamento:</label>
                            <select name="funcionarios" id="funcionarios" class="form-control">
                                <option value="">Selecione</option>
                                <option value="1">Exemple</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Horário do Agendamento:</label>
                            <input type="datetime-local" class="form-control" name="horario" id="horario" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Serviço do Agendamento:</label>
                            <select name="servicos" id="servicos" class="form-control">
                                <option value="">Selecione</option>
                                <option value="1">Exemple</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (Opcional):</label>
                            <textarea class="form-control" placeholder="Digite o Endereço aqui..." name="obs" id="obs" value=""></textarea>
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