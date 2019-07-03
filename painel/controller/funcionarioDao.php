<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 31/08/18
 * Time: 00:37
 */

require_once ("Conexao.php");

class funcionarioDao
{


    function __construct()
    {
        $this->con=new Conexao();
        $this->pdo = $this->con->Connect();
    }


    function cadastrarFuncionario(FuncionarioModal $entfuncionario){
            try{
                $stmt=$this->pdo->prepare("INSERT INTO funcionario (nome_funcionario, num_identificacao, login_ou_email, senha, endereco, tipo_funcionario_idtipo_funcionario) VALUES (:nome, :identificacao, :login,:senha, :endereco, :categoria)");
                $param= array(
                ":nome" =>$entfuncionario->getNomefncionario(),
                ":identificacao"=>$entfuncionario->getIdentificacao(),
                ":login"=>$entfuncionario->getLoginEmail(),
                ":senha"=>md5($entfuncionario->getSenha()),
                ":endereco"=>$entfuncionario->getEndereco(),
                ":categoria" =>$entfuncionario->getTipoFuncionario(),
                );

                 return $stmt->execute($param);
            }catch (PDOException $ex){

                echo "Erro 01:  {$ex->getMessage()}";
            }
    }

    function consultarFuncionario($identificacao){
        try{
            $stmt = $this->pdo->prepare("SELECT * FROM funcionario WHERE num_identificacao = :identificacao");
            $param=array(
                ":identificacao"=>  $identificacao
            );
            $stmt->execute($param);

            if ($stmt-> rowCount() > 0){
                return true;

            }else{
                return false;
            }

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }catch (PDOException $ex){
            echo "ERRO 02: {$ex->getMessage()}";
        }
    }

}