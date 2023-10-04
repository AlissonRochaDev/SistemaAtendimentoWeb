<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class UsuarioDAO extends Conexao{
        public function ValidarLogin($email, $senha){
            if($email == '' || $senha == ''){
                return 0;
            }else{

            }
        }

        public function ValidarCadastro($nome, $nomeSalao, $telefone, $email, $endereco, $senha, $repSenha){
            if($nome == '' || $nomeSalao == '' || $telefone == '' || $email == '' || $senha == '' || $repSenha == ''){
                return 0;
            }else if(strlen($senha) < 8){
                return -2;
            }else if($senha != $repSenha){
                return -3;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'insert into tb_usuario(nome_usuario, nome_salao, tel_usuario, email_usuario, endereco_salao, senha_usuario) 
                                values (?, ?, ?, ?, ?, ?);';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nome);
                $sql->bindValue(2, $nomeSalao);
                $sql->bindValue(3, $telefone);
                $sql->bindValue(4, $email);
                $sql->bindValue(5, $endereco);
                $sql->bindValue(6, $senha);

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function GravarMeusDados($nome, $teleSalao, $nomeSalao, $email, $endereco){
            if($nome == '' || $teleSalao == '' || $nomeSalao == '' || $email == '' || $endereco == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'update tb_usuario set nome_usuario = ?, tel_usuario = ?, nome_salao = ?, email_usuario = ?, endereco_salao = ?  where id_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nome);
                $sql->bindValue(2, $teleSalao);
                $sql->bindValue(3, $nomeSalao);
                $sql->bindValue(4, $email);
                $sql->bindValue(5, $endereco);
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

        public function CarregarMeusDados(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'select nome_usuario, nome_salao, tel_usuario, email_usuario, endereco_salao from tb_usuario where id_usuario = ?;';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();
        }
    }
?>