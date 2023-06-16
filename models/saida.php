<?php

        require_once '../config/db.php';

        class Saida{

                private $modelo;
                private $valor;
                private $qtde;
                private $data;


            public function setmodelo($modelo){
                $this -> modelo = $modelo; 
            }
            public function getmodelo(){
                return $this->modelo;
            }
            public function setvalor($valor){
                $this -> valor = $valor; 
            }
            public function getvalor(){
                return $this->valor;
            }
            public function setqtde($qtde){
                $this -> qtde = $qtde; 
            }
            public function getqtde(){
                return $this->qtde;
            }
            public function setdata($data){
                $this -> data = $data; 
            }
            public function getdata(){
                return $this->data;
            }


            public function insert ($modelo,$valor,$qtde,$data){

                $sql = "INSERT INTO saida (identrada,valor,qtde,data) VALUES ('".$modelo."','".$valor."','".$qtde."','".$data."')";

                $db = new db();
                $conn = $db->conectar();
                
                    if($conn->query($sql)==true){
                        echo '<p class="mensagem-sucesso">Venda Realizada</p>';
                    }else{
                        echo '<p class="mensagem-sucesso">Erro ao dar Saída</p>';
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