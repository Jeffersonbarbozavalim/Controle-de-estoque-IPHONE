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
                        echo "Venda realizada";
                    }else{
                        echo "Erro ao dar saida";
                    }
            }
        }

?>