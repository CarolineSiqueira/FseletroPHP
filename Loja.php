<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nossas lojas - Full Stack </title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html');
        ?>
        <!--Fim de menu-->

        <h2>Nossas loja</h2>
        <hr>
        <table id="tabela-loja">
            <tr>
                <td class="lojas">
                    <h3 class="capital">Rio de Janeiro</h3>
                    <p class="Enderecos"> Av. das Américas,5000</p>
                    <p class="Enderecos">5 &ordm; andar</p>
                    <p class="Enderecos">Barra da Tijuca</p>
                    <p class="Enderecos">(21) 3333-3333</p>
                </td>
                

                <td class="lojas">
                    <h3>São Paulo</h3>
                    <p class="Enderecos">Avenida Paulista,320</p>
                    <p class="Enderecos"> 8 &ordm; andar</p>
                    <p class="Enderecos">Centro</p>
                    <p class="Enderecos">(21) 2222-2222 </p>
                </td>

                <td class="lojas">
                    <h3>Belo Horizonte</h3>
                    <p class="Enderecos">Av. dos Andradas,250</p>
                    <p class="Enderecos">2 &ordm; andar , sala 10</p>
                    <p class="Enderecos">Santa Efigênia</p>
                    <p class="Enderecos">((21) 1111-1111</p>
                </td>
            </tr>

        </table>
        
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