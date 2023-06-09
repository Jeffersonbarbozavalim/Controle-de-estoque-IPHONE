<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone Aguai</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="modal.css" media="screen">
    <link rel="stylesheet" type="text/css" href="modal1.css" media="screen">
    <link rel="icon" href="img/jedison.png" type="image/png">
</head>
<body>

    <div class="container">

        
        <div class="cabecalho">
            <h1>Import Iphone Aguaí</h1>
            <nav>
                <input type="button" onclick="openModal()" value="Entrada" />
                <input type="button" onclick="openModal1()" value="Saída" />
                <input type="button" onclick="location.href='#'" value="Estoque" />
                <input type="button" onclick="location.href='#'" value="Atualizar estoque" />
            </nav>
            
            
        </div>
        <div class="fundo">
            <img src="img/apple-1867461.jpg" alt="fundo" height="100%" width="100%">
        </div>
        <div class="img">
            <img src="img/jedison.png" alt="fundo" height="300px" width="300px">
        </div>
    
    </div>
    <div class="footer">
        
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Cadastre as entradas</h3>

            <form action="controller/insertcontroller.php" method="post">
                              
                <input type="text" id="nome" name ="modelo" required placeholder="Modelo"><br><br>    
                <input type="decimal" id="valor" name ="valor" required placeholder="Valor de compra"><br><br>
                <input type="number" id="qtde" name ="qtde" required placeholder="Quantidade"><br><br>

                <input type="submit" value="Cadastrar" id="cds">
            </form>
        </div>
    </div>
    <div id="modal1" class="modal1">
        <div class="modal-content1">
            <span class="close" onclick="closeModal1()">&times;</span>
            <h3>Cadastre as Vendas</h3>
<?php
$conexao = new mysqli("localhost","root","admin","import");
?>
            <form action="controller/outputcontroller.php" method="post">
                              
            <div class="selecao">
                <select id="option" name="modelo">
                    <option>selecione o produto</option>  
<?php
                        $result = "SELECT * FROM entrada ORDER BY modelo";
                        $resultado = mysqli_query($conexao, $result);
                        while($row = mysqli_fetch_assoc($resultado)) {
                        echo '<option value="'.$row['identrada'].'"> '.$row['modelo'].' </option>';
                    }
    ?>                  
        </select>
                <br><br>    
                <input type="decimal" id="valor" name ="valor" required placeholder="Valor de venda"><br><br> 
                <input type="submit" value="Cadastrar" id="cds">
            </form>
        </div>
    </div>

    <script>
        // Função para abrir o modal
        function openModal() {
            document.getElementById("modal").style.display = "block";
        }
        
        // Função para fechar o modal
        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }
        </script>
        <script>
            // Função para abrir o modal
            function openModal1() {
                document.getElementById("modal1").style.display = "block";
            }
        
            // Função para fechar o modal
            function closeModal1() {
                document.getElementById("modal1").style.display = "none";
            }
        </script>
    
</body>
</html>
