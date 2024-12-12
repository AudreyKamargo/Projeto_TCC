<?php
include('conexao/conexao.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];
    $data = $_POST["data_hora_alerta"];

    // Obtém o ID do usuário da sessão
    $idUsuario = $_SESSION['id'];

    // Criar uma instância da classe BancodeDados
    $banco = new BancodeDados();
    $banco->conecta();

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO notas (titulo, conteudo, data_criacao, id_usuario) VALUES ('$titulo', '$conteudo', '$data', '$idUsuario')";

    if (mysqli_query($banco->con, $sql)) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Lembrete adicionado com sucesso!!');window.location.href='lembretes.php';
        </script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Erro ao adicionar o lembrete');window.location.href='adicionar_lembretes.php';
        </script>" . mysqli_error($banco->con);
    }

    $banco->fechar();
}
?>

<!DOCTYPE html>
<html>
<head>
    <center>
    <title>Adicionar Lembrete</title>

    <link rel="stylesheet" href="../ShyneTech/style.css">
</head>
<body>
    <h1>Adicionar Lembrete</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Título: <input type="text" name="titulo"><br>
        Conteúdo: <textarea name="conteudo"></textarea><br>
        Data e Hora do Alerta: <input type="datetime-local" name="data_hora_alerta"><br>
        <input type="submit" value="Adicionar">
    </form>

    <a href="lembretes.php" class="link-button1">Voltar para Meus Lembretes</a>

    </center>

    
</body>
</html>