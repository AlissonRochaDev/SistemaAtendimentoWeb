<?php

    if(isset($_GET['retorno'])){
        $retorno = $_GET['retorno'];
    }

    if(isset($retorno)){
        switch($retorno){
            case 0:
				echo '<div class="alert alert-warning" style="text-align: center;">Preencher o(s) campo(s) obrigatório(s)!</div>';
            break;
			case 1:
				echo '<div class="alert alert-success" style="text-align: center;">Ação realizada com Sucesso!</div>';
            break;
			case -1:
				echo '<div class="alert alert-danger" style="text-align: center;">Ocorreu um erro na operação. tente mais tarde!</div>';
            break;
			case -2:
				echo '<div class="alert alert-danger" style="text-align: center;">A Senha deve conter no mínimo 8 caracteres!</div>';
            break;
			case -3:
				echo '<div class="alert alert-danger" style="text-align: center;">Os campos Senha e Repetir Senha devem ser iguais!</div>';
            break;
			case -4:
				echo '<div class="alert alert-danger" style="text-align: center;">O registro não poderá ser excluido, pois está em uso!</div>';
            break;
			case -5:
				echo '<div class="alert alert-danger" style="text-align: center;">E-mail já Cadastrado, insira outro E-mail!</div>';
            break;
			case -6:
				echo '<div class="alert alert-danger" style="text-align: center;">Usuário não encontrado!</div>';
            break;
        }
    }