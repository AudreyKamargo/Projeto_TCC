<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include('verificar_login.php')
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"> <!-- Comando utilizado para que uma determinada pessoa consiga ter acesso ao conte�do que est� procurando, independente de qual l�ngua ela consiga ler ou falar -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/logo.png">
    <script src="https://kit.fontawesome.com/cb3e6ca719.js" crossorigin="anonymous"></script>
    <title>PAGINA INICIAL</title>

</head>
<body>
<main>
    <div>
      <nav id="menuh" align="center">
      
              <ul> <!-- UL representa uma lista de itens sem ordem r�gida, isto �, uma cole��o de itens que n�o trazem uma ordena��o num�rica e as suas posi��es, nessa lista, s�o irrelevantes.-->
      
              <img src="imagens/logonome_1.png" class="imagem_logo_inicial">
              <li><a href=" ">Início</a></li>
              <li><a href="../ShyneTech/jogos.php">Jogos</a> </li>
              <li><a href="../ShyneTech/videos.php">Vídeos</a> </li>
              <li><a href="../ShyneTech/lembretes.php" id="linkLembretes">Lembretes</a></li>
              <li class="saida"><a href="#" onclick="confirmarLogout()">Sair</a></li>

      
          </ul>
      
      </nav>
    </div>
<main>
<section>

<div class="Inicial_imagem">

<img src="../ShyneTech/imagens/tela.png" alt="">

</div>

<div class="caixas" style="display: flex;  ">

<div class="mvvc"> 
    <BR>  
      <img src="../ShyneTech/imagens/console.png" class="imagem-a">
    <BR>
  <p class="subtitulo"></p>
    <p> Nossa página de jogos é seu destino definitivo. Ajuste seu teclado ou toque na tela e embarque nessa jornada
       emocionante. Os jogos estão apenas a um clique de distância, prontos paraproporcionar
        momentos inesquecíveis de entretenimento. </p>
<br>
    <form action="../ShyneTech/jogos.php" method="post" enctype="multipart/form-data">
      <button class="buttonsn"

  input type="submit" name="jogo" value="JOGAR"> Jogar

    </button>
</form>
<br>
  </div>

<div class="mvvc">
    <BR>  
      <img src="../ShyneTech/imagens/video.png" class="imagem-a">
    <BR>
    <p class="subtitulo"> </p>
      <p> Prepare seu gancho de crochê ou vista suas roupas de ginástica e venha se
         juntar a nós nesta jornada emocionante de criatividade e saúde. Os vídeos estão à sua disposição, prontos para inspirar,
          motivar e ajudar você a criar belas peças e um corpo saudável.</p>
<br>
    <form action="videos.php" method="post" enctype="multipart/form-data">
      <button class="buttonsn"

  input type="submit" name="video" value="Video"> Assistir

    </button>
</form>
<br>
</div>

<div class="mvvc">
  
      <BR>  
      <img src="../ShyneTech/imagens/clock.png" class="imagem-a">
      <BR>
    <p class="subtitulo"></p>
    <p> Nossa página de lembretes foi criada para ajudá-lo a manter-se no controle de sua vida, de forma simples e eficaz.
      Simplificamos a tarefa de lembrar, para que você possa dedicar tempo ao que realmente importa. ajudando você a lembrar
       o que é essencial. </p>
    <br>
    <form action="lembretes.php" method="post" enctype="multipart/form-data">
      <button class="buttonsn"

  input type="submit" name="lembrete" value="LEMBRETE"> Adicionar

    </button>
</form>
<br>
</div>  </div>

<br> <br><br> <br>

<div class="Inicial_imagem">

<img src="../ShyneTech/imagens/empresa.png" alt="">

</div>
<br> <br><br> <br>

</section>   

</main>
        
<br><br><br>
<script src="../ShyneTech/sair.js"></script>
<footer>
  <section>
<div class="rodape">
    <div class="boxs">
    
  <div class="imagem_empresa_inicial">
  </div>
                <h4> Sobre Nós</h4>
                  <h6>
                    <p>
                    A Shiny Tech é uma empresa de tecnologia
                    formada por alunos durante seu TCC.
                    Especializada em soluções online personalizadas,
                    a empresa atende a usuários e empresas com criatividade 
                    e inovação, oferecendo parcerias para projetos digitais
                    de todos os tipos e tamanhos. 
                    </p>
                  </h6>
                </div>
                <hr>
                <div class="boxs">
                <h4> Outras Páginas</h4>
                <ul>
                  <li><a href="#"></a>Início</li>
                  <li><a href="#"></a>Jogos</li>
                  <li><a href="#"></a>Vídeos</li>
                  <li><a href="#"></a>Lembretes</li>
                </ul></div>
                <hr>
                <div class="boxs">
                <h4> Contatos</h4>
                <ul>
                  <li><a href="https://twitter.com/shiny_tech210"><i class="fa-brands fa-x-twitter"></i>Twitter: shiny_tech210</li></a>
                  <li><a href="https://instagram.com/shiny_.tech?igshid=NzZlODBkYWE4Ng=="><i class="fa-brands fa-instagram"></i> Instagram: shiny_.tech</a></li>
                  <li><a href="https://outlook.live.com/mail/shyne.tech210@gmail.com"><i class="fa-solid fa-envelope"></i> E-mail: shyne.tech@gmail.com</li></a>
                </ul>
              </div>

              <hr>
              



                <div class="">
                  <br>
                  ShinyTech © 2023 - Todos os direitos reservados. <br>
                  <br> <br><br>
                  <a href="../ShyneTech/politicaprivacidade.php" target="_blank" rel="noopener noreferrer">Política de Privacidade</a>

                  <br> <br>
                  <div class="imagem_empresa_inicial">

                  <img src="imagens/empresa_logo.png" >
                </div>

                
        </div>
                  
              </div>   
      </section>          
</footer> 
</body>
</html>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Obtém o elemento do link de lembretes
    var linkLembretes = document.getElementById('linkLembretes');

    // Adiciona um ouvinte de eventos para o clique no link
    linkLembretes.addEventListener('click', function () {
        // Remove a exclamação quando o link é clicado
        removerExclamacao();

        // Chama uma função para verificar se há novos lembretes expirados e adicionar a exclamação conforme necessário
        verificarEAdicionarExclamacao();
    });

    function adicionarExclamacao() {
        linkLembretes.style.color = 'red';
        linkLembretes.innerHTML = 'Lembretes !';
        // Armazena o estado na sessionStorage
        sessionStorage.setItem('exclamacaoLembretes', 'true');
    }

    function removerExclamacao() {
        linkLembretes.style.color = '';
        linkLembretes.innerHTML = 'Lembretes';
        // Remove o estado da sessionStorage
        sessionStorage.removeItem('exclamacaoLembretes');
    }

    function verificarEAdicionarExclamacao() {
        // Adicione a lógica real aqui para verificar se há novos lembretes expirados
        var haNovosLembretesExpirados = false; // Substitua isso pela lógica real

        // Se houver novos lembretes expirados, adicione a exclamação
        if (haNovosLembretesExpirados) {
            adicionarExclamacao();
        }
    }

    // Verifica o estado armazenado localmente ao carregar a página
    var exclamacaoArmazenada = sessionStorage.getItem('exclamacaoLembretes');
    if (exclamacaoArmazenada === 'true') {
        adicionarExclamacao();
    }
  });


  function verificarLembretesExpirados() {
      return true;
  }
</script>