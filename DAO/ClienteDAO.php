<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class ClienteDAO extends Conexao{
        public function CadastrarCliente($nomeCliente, $phone, $endereco){
            if($nomeCliente == '' || $phone == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'insert into tb_cliente(nome_cliente, tel_cliente, endereco_cliente, id_usuario) values (?, ?, ?, ?);';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nomeCliente);
                $sql->bindValue(2, $phone);
                $sql->bindValue(3, $endereco);
                $sql->bindValue(4, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ConsultarCliente(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'select id_cliente, nome_cliente, tel_cliente, endereco_cliente from tb_cliente where id_usuario = ? order by nome_cliente ASC';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();
    
            return $sql->fetchAll();
        }

        public function AlterarCliente($nomeCliente, $phone){
            if($nomeCliente == '' || $phone == ''){
                return 0;
            }else{
                return 1;
            }
        }
    }

?>