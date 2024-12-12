function confirmarLogout() {
    var confirmacao = confirm("Tem certeza de que deseja sair?");

    if (confirmacao) {
        // Se confirmado, redirecione para o arquivo de logout
        window.location.href = "logout.php";
    }

    // Retorna false para evitar que o link execute sua ação padrão se o usuário cancelar
    return false;
}
