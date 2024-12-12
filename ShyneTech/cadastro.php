<HTML>
<HEAD>
 <TITLE>LOGIN</TITLE>
</HEAD>
<BODY>
</BODY>

<?php
session_start();
include('conexao/conexao.php');

$mysql = new BancodeDados();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysql -> conecta();

$nome = mysqli_real_escape_string($mysql->con, trim($_POST['nome']));
$email = mysqli_real_escape_string($mysql->con, trim($_POST['email']));
$senha = mysqli_real_escape_string($mysql->con, trim($_POST['senha']));
$confirmacao = mysqli_real_escape_string($mysql->con, trim($_POST['confirmacao']));

$sqlstring = "select * from usuario where email='$email'"  ;
//echo $sqlstring;


$result = @mysqli_query($mysql->con, $sqlstring);
$row = mysqli_fetch_assoc($result);

$sql = "INSERT INTO usuario (nome, email, senha, confirmacao) VALUES ('$nome','$email', '$senha','$confirmacao')";



if ($senha <> $confirmacao || empty($nome) || empty($email) || empty($senha)) {
    
    echo"<script language='javascript' type='text/javascript'>
    alert('Senha diferente da confirmação de senha');window.location.href='cadastropagina.php';
    </script>";

} elseif ($senha = $confirmacao && $mysql->con->query($sql)) {

    echo"<script language='javascript' type='text/javascript'>
    alert('Você foi cadastrado');window.location.href='index.php';
    </script>";
    
 
} else {
            echo"<script language='javascript' type='text/javascript'>
        alert('Preencha todos os campos');window.location.href='cadastropagina.php';
        </script>";  
}
$mysql->con -> close();
exit;

?>
</HTML>

