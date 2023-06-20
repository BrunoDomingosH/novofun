<?php
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    include("conecta.php");

    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE email='$email' and senha='$senha'");
    $resultado = $comando->execute();
    if($comando->rowCount()>0)
    {
        header("Location:p.principal.html");
    }
    
    else {
        header("Location:pagina_entrar_cadastrar.html");
        }

    
