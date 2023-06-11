<?php

    class db{
        public function conectar(){
            $servename = "localhost";
            $username = "root";
            $password = "";
            $dbname = "import";

                $con = new mysqli($servename,$username,$password,$dbname);

                    if($con->connect_errno){
                        die("conexão falhou". $con->connect_error);
                    }
                        return $con;
        }
    }

?>