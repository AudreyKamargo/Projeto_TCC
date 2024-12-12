<HTML>
<HEAD>
 <TITLE>LOGIN</TITLE>
</HEAD>
<BODY>
<?php
 require_once('conexao/conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql -> conecta();
	
   $email=$_POST['email'];
   $senha=$_POST['senha'];
   // ajustando a instru��o select verificar usuario e senha
    $sqlstring = "select * from usuario where email='$email' and senha='$senha'"  ;

	$result = @mysqli_query($mysql->con, $sqlstring);
	$total = $result -> num_rows;
  
  if($total==1){
        $dados=mysqli_fetch_array($result) ;
      	session_start();
      	$_SESSION['id']= $dados['id'];
 		$_SESSION['nome'] =$dados['nome'] ;
		$_SESSION['log'] = 'ativo';

		  echo"<script language='javascript' type='text/javascript'>
          alert('Você está logado');window.location.href='inicial.php';
          </script>";

     }
      else {
      	  echo"<script language='javascript' type='text/javascript'>
            alert('Senha ou email invalido');window.location.href
            ='index.php';</script>";
      }
      $mysql->fechar();
 ?>
</BODY>
</HTML>
