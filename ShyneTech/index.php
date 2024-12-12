<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <link rel="shortcut icon" href="imagens/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="body">

        <div class="logo_login">

            <img src="../ShyneTech/imagens/empresa_logo.png" class="imagem_empresa">
        
        </div>


    <div class="boxformula">


        <form action="entrada.php" method="post" enctype="multipart/form-data">
            
            <div class="alinhar">
               
                <div class="txtlogin">
                    
                    <p>E-MAIL :</p>
                    
                        <input type="email" name="email" id="email" placeholder="Email..">

                    <p>SENHA :</p> 

                        <input type="password" name="senha" id="senha" placeholder="Senha..">

                    <button class="btnlogin"

                    input type="submit" name="login" value="LOGAR"> ENTRAR

                    </button>
                
                </div>
            
            </div>
        
        </form>

        <br>

    <p>Ainda não tem login? <a href="../ShyneTech/cadastropagina.php" rel="noopener noreferrer">Cadastre-se aqui.</a></p>

</body>
</html>