<?php

$servername="localhost";
$username="root";
$password="";
$database="fseletro";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão ao BD falhou:". mysqli_connect_error());
}


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet"  href="./css/estilo.css">
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <!--Menu-->        
        <?php
        include_once('menu.html');
        ?>
        <!--Fim de menu-->

        <header>
        <h2>Produtos</h2>
        </header>
        <hr>

        
        <div id="categoria">
             
              <h3>Categorias</h3>
            <ul>
                <li onclick="exibir_todos()">Todos(12)</li>
                <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</li>
                <li onclick="exibir_categoria('fogao')">Fogões(3)</li>
                <li onclick="exibir_categoria('microondas')">Microondas(2)</li>
                <li onclick="exibir_categoria('lavaloucas')">Lava-louças(2)</li>
                <li onclick="exibir_categoria('lavadouraderoupas')">Lavadoura de Roupas(2)</li>
            </ul>
        </div>

            <div class="caixa-produtos">   
        
            <?php

                $sql = "select * from tb_produtos";
                $result = $conn->query($sql);
              
                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                        

            ?>

                  
               <div class="produtos" id=<?php echo $rows["categoria"]; ?> style="display: block;">
                   <img src="<?php echo $rows["imagem"]; ?>" width="180px" onclick="destaque(this)"> 
                   <br>
                   <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                   <hr>
                   <p class="descricao"><strike>R$<?php echo $rows["preco"]; ?></strike></p>    
                   <p class="preço-final">R$<?php echo $rows["precofinal"]; ?></p>
               </div>     
            
            <?php
                   }
               }else {
                  echo "Nenhum produto cadastrado!";
              }
              
            ?>

            </div>

                
                
             
               
               

            

              
               

        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>



    
      
       
         <footer id="rodape"> 
            <h4>Formas de pagamento</h4>
            <img src="./Imagem/forma de pagamento.html" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>

         </footer>
      
      


    

       

    
    </body>
</html>