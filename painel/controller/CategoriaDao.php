<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 28/08/18
 * Time: 16:24
 */


require_once('Conexao.php');

class CategoriaDao
{

    function  __construct()
    {
        $this->con=new Conexao();
        $this->pdo = $this->con->Connect();
    }





       function cadastrar(CategoriaModel $entCategoria){
            try {
                    $stmt = $this->pdo->prepare("INSERT INTO tipo_funcionario (nivel) VALUES (:us_titulo)");
                    $param = array(
                        ":us_titulo" => $entCategoria->getNivel(),
                    );
                    return $stmt->execute($param);
            }catch (PDOException $ex){
                echo "ERRO 02: {$ex->getMessage()}";
            }

        }


    function consultarcategoria($titulo){
        try{
            $stmt = $this->pdo->prepare("SELECT * FROM tipo_funcionario WHERE  nivel =:nivel");
            $param = array(":nivel"=>$titulo);
            $stmt->execute($param);
            if ($stmt-> rowCount() > 0){
                return true;

            }else{
                return false;
            }

        }catch (PDOException $ex){
            echo "ERRO 01: {$ex->getMessage()}";
        }
    }


        public  function listarcategoria(){
            try{
                $stmt=$this->pdo->prepare("SELECT * from tipo_funcionario");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);

            }catch (PDOException $e){
                echo "ERRO 03: {$e->getMessage()}";
            }
        }









}