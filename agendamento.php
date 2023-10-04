<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Agendamento</title>
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
                        <h2>Agendamento.</h2>
                        <h5>Realize o agendamento para os clientes aqui:</h5>
                    </div>
                </div>
                <hr />
                <form action="meusDados.php" method="POST">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Cliente Selecionado:</label>
                            <input type="text" class="form-control" name="clienteSelect" id="clienteSelect" value="" disabled/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data do Agendamento:</label>
                            <input type="date" class="form-control" name="dataAgendamento" id="dataAgendamento" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Funcionários:</label>
                            <select name="funcionarios" id="funcionarios" class="form-control">
                                <option value="">Selecione</option>
                                <option value="1">Exemple</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Horário do Atendimento:</label>
                            <input type="datetime-local" class="form-control" name="horario" id="horario" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Serviços:</label>
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
                            <button name="btnCadastrar" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                </form>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Consultar Agendamento.</h2>
                        <h5>Consulte todos os agenndamentos aqui.</h5>
                    </div>
                </div>
                <hr/>
                <form action="agendamento.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data inicial do Agendamento:</label>
                            <input type="date" class="form-control" name="dtInicialAg" id="dtInicialAg" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data final do Agendamento:</label>
                            <input type="date" class="form-control" name="dtFinalAg" id="dtFinalAg" value=""/>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button name="btnPesquisar" class="btn btn-info">Pesquisar</button>
                    </div>
                </form>
                <hr/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Agendas:</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Ação</th>
                                        <th>Data</th>
                                        <th>Hora</th>
                                        <th>Cliente</th>
                                        <th>Funcionário</th>
                                        <th>Serviço</th>
                                        <th>Observação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn btn-success">Atender</a>
                                            <a href="alterar_agenda.php" class="btn btn-warning">Alterar</a>
                                        </td>
                                        <td>[Exemple]</td>
                                        <td>[Exemple]</td>
                                        <td>[Exemple]</td>
                                        <td>[Exemple]</td>
                                        <td>[Exemple]</td>
                                        <td>[Exemple]</td>
                                    </tr>
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