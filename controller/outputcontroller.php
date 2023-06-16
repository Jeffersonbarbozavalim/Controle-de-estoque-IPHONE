<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Estoque</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" type="imagem/x-icon" href="../img/skol.png" />
</head>
<script type="text/javascript"> // Tipo do Script
function redirectTime(){ // Função que define o tempo
window.history.back(); //volta para a página anterior, que seria após inserir produto na mesa
}
</script>

<body onLoad="setTimeout('redirectTime()', 1000)">
<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once '../models/saida.php';


    $modelo = $_POST['modelo'];
    $valor = $_POST['valor'];
    $qtde = $_POST['qtde'];
    $data = $_POST['data'] = date('Y-m-d');



        $classe = new Saida();
        $classe->setmodelo($modelo);
        $classe->setvalor($valor);
        $classe->setqtde($qtde);
        $classe->setdata($data);
        $classe->insert($modelo,$valor,$qtde,$data);

?>