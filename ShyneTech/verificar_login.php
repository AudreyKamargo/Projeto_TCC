<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function verificarAutenticacao() {
    if (!isset($_SESSION['id'])) {
        // Usuário não autenticado, redirecione para a página de login
        header("Location: index.php");
        exit();
    }
}

// Chame essa função no início de qualquer página que exija autenticação
verificarAutenticacao();
?>
