<?php
include('../ShyneTech/conexao/conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifique se o ID do lembrete a ser excluído está definido
    if (isset($_POST['id'])) {
        $lembreteId = $_POST['id'];

        // Crie uma instância da classe BancodeDados
        $banco = new BancodeDados();
        $banco->conecta();

        // Consulta SQL para excluir o lembrete com base no ID
        $sql = "DELETE FROM notas WHERE id = " . mysqli_real_escape_string($banco->con, $lembreteId);

        if (mysqli_query($banco->con, $sql)) {
            echo "Lembrete excluído com sucesso.";
        } else {
            echo "Erro ao excluir lembrete: " . mysqli_error($banco->con);
        }

        // Feche a conexão com o banco de dados
        $banco->fechar();
    } else {
        echo "ID do lembrete não fornecido.";
    }
} else {
    echo "Método de solicitação inválido.";
}
?>
