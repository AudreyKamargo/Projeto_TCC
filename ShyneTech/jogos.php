<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
include('verificar_login.php');
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"> <!-- Comando utilizado para que uma determinada pessoa consiga ter acesso ao conte�do que est� procurando, independente de qual l�ngua ela consiga ler ou falar -->
    <link rel="stylesheet" href="../ShyneTech/style.css">
    <link rel="shortcut icon" href="imagens/logo.png">
    <title>JOGOS</title>

</head>
<body>

<nav id="menuh" align="center">

        <ul> <!-- UL representa uma lista de itens sem ordem r�gida, isto �, uma cole��o de itens que n�o trazem uma ordena��o num�rica e as suas posi��es, nessa lista, s�o irrelevantes.-->

        <img src="../ShyneTech/imagens/logonome_1.png" class="imagem_logo_inicial">
        <li><a href="../ShyneTech/inicial.php">Início</a></li>
        <li><a href="">Jogos</a> </li>
        <li><a href="../ShyneTech/videos.php">Vídeos</a> </li>
        <li><a href="../ShyneTech/lembretes.php" id="linkLembretes">Lembretes</a></li>
        <li class="saida"><a href="#" onclick="confirmarLogout()">Sair</a></li>


    </ul>

</nav>

<div class="jooj">

<div class="jogo">  
    


    <div class="jogoa">    
      
    <a href="../ShyneTech/jogos/jogo_da_velha2.0/index.html" >
        
    <img src="../ShyneTech/imagens/jogo_da_velha.png" alt="JOGO DA VELHA" width="200" height="200">
        
    </a>

    </div>

    <div>
    <p class="p">JOGO DA VELHA</p>
    </div>


</div>

<div class="jogo">  
    

    <div class="jogoa">
        
    <a href="../ShyneTech/jogos/jogo_memoria/index.html" >
    
    <img src="../ShyneTech/imagens/jogo_memoria.png" alt="JOGO DA MEMORIA" width="200" height="200">
        
    </div>
    </a>

    <div>
    <p class="p">JOGO DA MEMORIA</p>
    </div>


</div>

<div class="jogo">  
    
    

    <div class="jogoa">
      
    <a href="../ShyneTech/jogos/xadrez_tcc/index.html" >
        
    <img src="../ShyneTech/imagens/xadrez.png" alt="XADREZ" width="200" height="200">
        
    </div>
    </a>

    <div>
    <p class="p2">XADREZ</p>
    </div>
</div>


<div class="jogoe">  
    


    <div class="jogoa">
            
    <a href="../ShyneTech/jogos/jogoscsharp">
    
    <img src="../ShyneTech/imagens/quebra_cabeca.png" alt="QUEBRA-CABEÇA" width="200" height="200">
        
    </a>    
  
    </div>


    <div>
    <p class="p">QUEBRA-CABEÇA</p>
    </div>


</div>


<div class="jogoi">  
    


    <div class="jogoa">    
      
    <a href="../ShyneTech/jogos/jogoscsharp">
        
    <img src="../ShyneTech/imagens/caca_palavras.png" alt="CAÇA-PALAVRAS" width="200" height="200">
    
    </a>    
    
    </div>


    <div>
    <p class="p">CAÇA-PALAVRAS</p>
    </div>


</div>

</div>


  <script src="../ShyneTech/sair.js"></script>
  <div class="espaco">
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