<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRINHO </title>

    <link rel="stylesheet" href="pagina_carrinho_vazio.css">
    
    <script src="pagina_carrinho_bike.js"></script>        
       
</head>
<body>
    <div class="d1">
        <div class="d2">
            <div class="dd1"><img onclick="Aparecer();" src="dd1.png" alt="" width="15px"></div>
            <a href="p.principal.html"><img src="dd3.png" alt="" width="120px"></a>
            <a href="pagina_carrinho_vazio.php"><div class="dd1"><img src="dd2.png" alt="" width="20px"></div></a>
        </div>
    </div>

    <div class="lateral" id="lateral"> 
        <div class="logo"><img src="dd3.png" alt="" width="150px"></div>
        <div class="opcoes">    
            <a href="pagina_entrar_cadastrar.html"><div class="cadastro"> 
                <img class="imagem" src="usuario.png" width="17px">USUARIO
            </div></a>
            <a href="p.principal.html"><div class="cadastro"> 
                <img class="imagem" src="produtos.png" width="20px">PRODUTOS
            </div></a>
            <div class="cadastro">
                <a href="pagina_carrinho_vazio.html"><img class="imagem" src="dd2.png" width="20px"> CARRINHO
            </div></a>
            <div class="cadastro">
                <a href="fale_conosco.html"> FALE CONOSCO
            </div></a>
            <div onclick="Fechar();" class="fechar">FECHAR</div>
        </div>
    
    </div>

    <div class="divp1">
        <div class="divp2"></div>
        
        
        <?php

    
            include("conecta.php");
            $comando = $pdo->prepare("SELECT * FROM carrinho");
            $resultado = $comando->execute();
            $total=0;
            while($linha=$comando->fetch() )
            {
                $codigo=$linha["codigo"];
                $quantidade=$linha["quantidade"];
                $preco=$linha["preco"];
                $total+=$preco*$quantidade;
                echo("
                
                <div class=\"divp3\">
                <div class=\"c1\">
                    <img src=\"$codigo.png\" width=\"180px\">
                    <div class=\"textobrinq\">
                    $preco  <br>
                        teste
                    </div>
                </div>
                <div class=\"c1\">
                    <div class=\"letra_descri\">teste<br>
                    Código:$codigo
                    <div class=\"adicionar_retirar\">
                        <div class=\"mais\"></div>
                        <div class=\"quantidade\">$quantidade</div>
                        <div class=\"menos\"></div>
                        
                    </div>
                    </div>
                <br></div>
            <br></div>
                
                ");

            }
            

        ?>
        
        








        
        <div class="divp4">
            <div class="c3">TOTAL- R$<?php echo($total);?></div>
            <div class="c4"><a href="compra_finalizada_sucesso.html">FINALIZAR COMPRA</a></div>
            
        </div>
    </div>
    <div class="espaco"></div>
    <div class="rodape"></div>


</body>
</html>