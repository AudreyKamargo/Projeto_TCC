<?php
session_start();
session_destroy(); // Destroi a sessão
echo"<script language='javascript' type='text/javascript'>
          alert('Você saiu!!');window.location.href='index.php';
          </script>";
exit;
?>
