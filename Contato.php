<?php

$servername="localhost";
$username="root";
$password="";
$database="fseletro";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão ao BD falhou:". mysqli_connect_error());
}


if(isset($_POST['nome']) && isset($_POST['mensagem'])){
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

   
    $sql = "insert into tb_comentarios (nome,mensagem) values ('$nome','$mensagem')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html');
        ?>
        <!--Fim de menu-->

        <h2>Contato</h2>
        <hr>
        <table id="tabela-contato">
            <tr>
                <td width="50%" aling="center">
                    <img src="Imagem/Email.png"width="15%"><br>
                    <div class="contato">Nosso e-mail:</div><br>
                    <div class="nossosDados">Fullstackeletro@gmail.com</div>
                    </td>
                <td width="50%" aling="center">
                 <img src="Imagem/Whatsapp.png" width="35%"><br>
                 <div class="contato">Entre em contato pelo Whatsapp:</div><br>
                 <div class="nossosDados">(21)98888-7777</div>
                </td>
            </tr>
           
        </table>

        <br><br><br>
        <br><br><br>
        
        <form method="post" action="">
            Nome:<br>
            <input type="text" name="nome" style="widht:500px"><br>
            Mensagem:<br>
            <input type="text" name="mensagem" style="widht:500px"><br>

            <input type="submit" name="submit" value="Enviar"><br>
        </form>    
       
       <br>
       <br>
       <br>
       <footer id="rodape"> 
           <h4 id="formasdepagamento">Formas de pagamento</h4>
           <img src="./Imagem/forma de pagamento.html" alt="Formas de pagamento">
           <p>&copy; Recode Pro</p>
    </footer>
    
    </body>
</html>

