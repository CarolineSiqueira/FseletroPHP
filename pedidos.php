<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pedidos - Full Stack Eletro</title>
        <link rel="stylesheet"  href="./css/estilo.css">
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <!--Menu-->        
        <?php
        include_once('menu.html');
        ?>
        <!--Fim de menu-->


<body>

<br><br><br>
<br><br><br>
       <center><h2>Fazer pedidos</h2>
       <form method='post' action="">
            
            Nome:<br>
            <input type="text" name="nome_cliente" style="widht:500px"><br>
            Endereço:<br>
            <input type="text" name="endereco" style="widht:500px"><br>
            Telefone:<br>
            <input type="text" name="telefone" style="widht:500px"><br>
            Produto:<br>
            <input type="text" name="nome_produto" style="widht:500px"><br>
            Quantidade:<br>
            <input type="text" name="quantidade" style="widht:500px"><br>
            Valor:<br>
            <input type="text" name="valor_unitario" style="widht:500px"><br>
            Total:<br>
            <input type="text" name="valor_total" style="widht:500px"><br>
            <hr>
            <input type="submit" name="submit" value="Enviar"><br>
        </center> 
        </form>  

        <?php

           $servername="localhost";
           $username="root";
           $password="";
           $database="fseletro";

           $conn = mysqli_connect($servername,$username,$password,$database);

           
 
           if(isset($_POST['nome_cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['nome_produto']) && isset($_POST['quantidade']) && isset($_POST['valor_unitario'])&& isset($_POST['valor_total'])){
              $nome_cliente = $_POST["nome_cliente"];
              $endereco = $_POST["endereco"];
              $telefone = $_POST["telefone"];
              $nome_produto = $_POST["nome_produto"];
              $quantidade = $_POST["quantidade"];
              $valor_unitario = $_POST["valor_unitario"];
              $valor_total = $_POST["valor_total"];

   
            $sql = "insert into tb_pedidos (nome_cliente,endereco,telefone,nome_produto,quantidade,valor_unitario,valor_total) values ('$nome_cliente','$endereco','$telefone','$nome_produto','$quantidade','$valor_unitario','$valor_total')";

            $result = $conn->query($sql);

            if($result){
                echo "Dados inseridos com sucesso!";
            }
            else{
                echo "Dados não inseridos!";
            }
        }


        ?> 



</body>


</html>

