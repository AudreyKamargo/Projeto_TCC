<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <link rel="shortcut icon" href="imagens/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="body">

        <div class="logo_cadastro">

        <img src="../ShyneTech/imagens/empresa_logo.png" class="imagem_empresa">

        </div>

<div class="boxformula1">  
        

    <form action="cadastro.php" method="post" enctype="multipart/form-data">

        <div>

            <div class="txtcadastro">

                <div class="alinhara">

                        <p>NOME :</p>

                            <input type="name" name="nome" id="nome">

                        <p>E-MAIL :</p>

                            <input type="email" name="email" id="email">

                        <p>SENHA :</p>

                            <input type="password" name="senha" id="senha">

                        <p>CONFIRMAÇÃO DE SENHA :</p>

                            <input type="password" name="confirmacao" id="confirmacao">

                        <button class="btncadastro"

                        input type="submit" name="cadastro" value="CADASTRAR">CADASTRAR
                        
                        </button>
                </div>

            </div>
        </div>
    </form>
    

</div>
</body>
</html>