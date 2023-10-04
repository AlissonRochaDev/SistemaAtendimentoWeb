<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class ServicoDAO extends Conexao{
        public function CadastrarServicos($nome, $obs){
            if($nome == '' || $obs == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'insert into tb_servico(nome_servico, descricao_servico, id_usuario) values(?, ?, ?);';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nome);
                $sql->bindValue(2, $obs);
                $sql->bindValue(3, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ConsultarServico(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'select id_servico, nome_servico, descricao_servico from tb_servico where id_usuario = ? order by nome_servico ASC';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();
    
            return $sql->fetchAll();
        }
    }


?>