document.addEventListener("DOMContentLoaded", function () {
    var linkLembretes = document.getElementById('linkLembretes');

    // Adiciona um ouvinte de eventos para o clique no link
    linkLembretes.addEventListener('click', function () {
        // Remove a mensagem quando o link é clicado
        fecharMensagem();

        // Chama uma função para verificar se há novos lembretes expirados e exibir a mensagem conforme necessário
        verificarEExibirMensagem();
    });

    // Verifica o estado armazenado localmente ao carregar a página
    var mensagemArmazenada = sessionStorage.getItem('mensagemLembretes');
    if (mensagemArmazenada === 'true') {
        exibirMensagem();
    }

    // Chama a função para verificar e exibir a mensagem ao carregar a página
    verificarEExibirMensagem();
});

function verificarEExibirMensagem() {
    var lembretes = document.querySelectorAll('.lembretes');

    lembretes.forEach(function (lembrete) {
        var dataExpiracao = new Date(lembrete.getAttribute('data-expiracao'));
        var agora = new Date();

        if (dataExpiracao <= agora) {
            // Exibe a mensagem para o lembrete expirado
            exibirMensagemExpire();
        }
    });
}

function verificarLembrete(dataExpiracao, elementoLembrete) {
    var dataExpiracao = new Date(dataExpiracao);
    var agora = new Date();

    if (dataExpiracao <= agora) {
        // É hora de notificar!
        notificarLembrete('Lembrete', 'Hora de verificar o lembrete!');
        // Altera a cor do lembrete
        elementoLembrete.style.backgroundColor = '#ff6961';
    }
}

function exibirMensagem(lembretesExpirados) {
    // Cria a div de mensagem
    var mensagemContainer = document.getElementById('mensagem-container');
    mensagemContainer.innerHTML = '';

    // Adiciona uma mensagem para cada lembrete expirado
    lembretesExpirados.forEach(function (lembrete) {
        var mensagemDiv = document.createElement('div');
        mensagemDiv.classList.add('mensagem-lembrete');
        mensagemDiv.innerHTML = `<strong>${lembrete.titulo}:</strong> ${lembrete.mensagem}`;

        mensagemContainer.appendChild(mensagemDiv);
    });

    // Armazena o estado na sessionStorage
    sessionStorage.setItem('mensagemLembretes', 'true');
}

function fecharMensagem() {
    // Remove o estado da sessionStorage
    sessionStorage.removeItem('mensagemLembretes');

    // Remove as mensagens
    var mensagemContainer = document.getElementById('mensagem-container');
    mensagemContainer.innerHTML = '';
}


function notificarLembrete(titulo, mensagem) {
    // Verifica se o navegador suporta notificações
    if ('Notification' in window) {
        // Solicita permissão para exibir notificações
        Notification.requestPermission().then(function(permission) {
            if (permission === 'granted') {
                // Cria uma nova notificação
                var notificacao = new Notification(titulo, { body: mensagem });
            }
        });
    }
}

function verificarLembrete(dataCriacao, elementoLembrete) {
    var dataCriacao = new Date(dataCriacao);
    var agora = new Date();

    // Adicione o tempo desejado para a notificação (por exemplo, 10 segundos)
    dataCriacao.setSeconds(dataCriacao.getSeconds() + 10);

    if (dataCriacao <= agora) {
        // É hora de notificar!
        notificarLembrete('Lembrete', 'Hora de verificar o lembrete!');
        // Altera a cor do lembrete
        elementoLembrete.style.backgroundColor = '#ff6961';
    }
}

var lembreteAtual = null;

function drag(event) {
    lembreteAtual = event.target;
    event.dataTransfer.setData("text", event.target.id);
}

document.addEventListener("dragover", function(event) {
    event.preventDefault();
});

document.addEventListener("drop", function(event) {
    event.preventDefault();
    if (lembreteAtual) {
        lembreteAtual.style.left = (event.clientX - lembreteAtual.offsetWidth / 2) + "px";
        lembreteAtual.style.top = (event.clientY - lembreteAtual.offsetHeight / 2) + "px";
    }
});

function excluirLembrete(element) {
    if (confirm("Tem certeza de que deseja excluir este lembrete?")) {
        // Obter o ID do lembrete a ser excluído do atributo data-id
        var lembreteId = element.parentNode.getAttribute('data-id');

        // Enviar uma solicitação para o servidor para excluir o lembrete
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'excluir_lembrete.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Se a exclusão for bem-sucedida no servidor, remova o lembrete da página
                element.parentNode.remove();
            }
        };
        xhr.send('id=' + lembreteId);
    }
}

if (dataExpiracao <= agora) {
    // Exibe a div de lembrete expirado
    lembrete.classList.add('expirado');
    lembrete.style.display = 'block';
}