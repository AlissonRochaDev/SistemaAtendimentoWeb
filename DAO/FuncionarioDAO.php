<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class FuncionarioDAO extends Conexao{
        public function CadastrarFuncionario($nomeFuncionario, $dataAdmss, $phone, $dataDmss, $local){
            if($nomeFuncionario == '' || $dataAdmss == '' || $phone == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'insert into tb_funcionario(nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario, id_usuario) values (?, ?, ?, ?, ?, ?);';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nomeFuncionario);
                $sql->bindValue(2, $phone);
                $sql->bindValue(3, $dataAdmss);
                $sql->bindValue(4, $dataDmss);
                $sql->bindValue(5, $local);
                $sql->bindValue(6, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ConsultarFuncionario(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'select id_funcionario, nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario from tb_funcionario where id_usuario = ? order by nome_funcionario ASC';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();
    
            return $sql->fetchAll();
        }

        public function DetalharFuncionario($idFuncionario){
            $conexao = parent::retornarConexao();

            $comando_sql = 'select id_funcionario, nome_funcionario, tel_funcionario, data_admissao, data_demissao, endereco_funcionario from tb_funcionario where id_funcionario = ? and id_usuario = ?;';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $idFuncionario);
            $sql->bindValue(2, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();
        }

        public function AlterarFuncionario($nomeFuncionario, $dataAdmss, $phone, $dataDmss, $local){
            if($nomeFuncionario == '' || $dataAdmss == '' || $phone == '' || $dataDmss == ''){
                return 0;
            }else{
                return 1;
            }
        }        
    }

?>