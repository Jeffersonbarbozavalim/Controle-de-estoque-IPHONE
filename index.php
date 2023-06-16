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
    <link rel="stylesheet" type="text/css" href="modal2.css" media="screen">
    <link rel="icon" href="img/jedison.png" type="image/png">
</head>
<body>

<div class="container">
        <div class="cabecalho">
            <h1>Import Iphone Aguaí</h1>
            <nav>
                <input type="button" onclick="openModal()" value="Entrada" />
                <input type="button" onclick="openModal1()" value="Saída" />
                <input type="button" onclick="openModalmyModal()" value="Estoque" />
                <input type="button" onclick="" value="Atualizar estoque" />
            </nav>
        </div>
        <div class="img">
            <img src="img/jedison.png" alt="fundo">
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
        <input type="number" id="valor" name ="qtde" required placeholder="Quantidade"><br><br> 
        <input type="submit" value="Cadastrar" id="cds">
             </form>
        </div>
    </div>
    <div id="modal2" class="modal2">
            <div class="modal-content2">
                <span class="close" onclick="closeModal2()">&times;</span>
                <h3>Cadastre as entradas</h3>
                
                <form action="controller/insertcontroller.php" method="post">
                    
                    <input type="text" id="nome" name ="modelo" required placeholder="Modelo"><br><br>    
                <input type="decimal" id="valor" name ="valor" required placeholder="Valor de compra"><br><br>
                <input type="number" id="qtde" name ="qtde" required placeholder="Quantidade"><br><br>

                <input type="submit" value="Cadastrar" id="cds">
            </form>
        </div>
    </div>
</div>
<div id="myModal" class="modal2">
  <div class="modal-content2">
    <span class="close" onclick="closeModalmyModal()">&times;</span>
    <h1>Tabela de Estoque</h1>
    <table id="estoqueTable">
      <thead>
        <tr>
          <th class="table">Produto</th>
          <th class="table">Quantidade</th>
          <th class="table">Preço</th>
        </tr>
      </thead>
                    </br>
      <tbody>
      <?php
    $strcon = mysqli_connect ("localhost","root","admin","import") or die ('Erro ao conectar ao banco');
            $sql ="SELECT * FROM estoque  ORDER BY modelo ";
            $resultado = mysqli_query($strcon,$sql) or die ("Erro ao encontrar");
            while ($registro = mysqli_fetch_array($resultado)){
                $modelo = $registro['modelo'];
                $quantidade = $registro['qtde'];
                $valor = $registro['valor'];
             
?>
        <tr>
          <th><?=$modelo?></th>
          <th class="qtde"><?=$quantidade?></th>
          <th>R$<?=$valor?></th>
        </tr>
<?php
}
mysqli_close($strcon);
echo "</table>";
?>      
        </tbody>
    </table>
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
        <script>

function openModalmyModal() {
                document.getElementById("myModal").style.display = "block";
            }

// Fechar o modal quando o botão de fechar ou fora do modal for clicado
function closeModalmyModal() {
                document.getElementById("myModal").style.display = "none";
            }

        </script>
    
</body>
</html>
