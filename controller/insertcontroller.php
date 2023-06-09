<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once '../models/entrada.php';


    $modelo = $_POST['modelo'];
    $valor = $_POST['valor'];
    $data = $_POST['data'] = date('Y-m-d');


        $classe = new Entrada();
        $classe->setmodelo($modelo);
        $classe->setvalor($valor);
        $classe->setdata($data);
        $classe->insert($modelo,$valor,$data);

?>