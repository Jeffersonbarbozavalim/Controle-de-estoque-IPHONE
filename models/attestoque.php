<?php
    require_once '../config/db.php';
    
    class Attestoque{

        private $identrada;
        private $modelo;
        private $valor;
        private $qtde;
        


            public function setidentrada($identrada){
                $this -> identrada =$identrada;
            }

            public function getidentrada(){
                return $this -> identrada;
            }
            public function setmodelo($modelo){
                $this -> modelo =$modelo;
            }

            public function getmodelo(){
                return $this -> modelo;
            }
            public function setvalor($valor){
                $this -> valor =$valor;
            }

            public function getvalor(){
                return $this -> valor;
            }
            public function setqtde($qtde){
                $this -> qtde =$qtde;
            }

            public function getqtde(){
                return $this -> qtde;
            }
            
            

            public function insert ($identrada,$modelo,$valor,$qtde){
                $sql = "INSERT INTO attestoque (identrada,modelo,valor,qtde) VALUES ('".$identrada."','".$modelo."','".$valor."','".$qtde."')";

                    $db = new db();
                    $conn = $db->conectar();
                    
                        if($conn->query($sql)==true){
                            echo '<p class="mensagem-sucesso">Atualizado com Sucesso</p>';
                        }else{
                            echo '<p class="mensagem-sucesso">Erro ao atualizar</p>';
                        }
            }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="stylemodel.css">


<style>
    .mensagem-sucesso{
    color: black;
    font-size: 40px;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    
    .mensagem-erro{
    color: black;
    font-size: 40px;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    
</style>

<body>
    <div class="conteiner">
    </div>
</body>