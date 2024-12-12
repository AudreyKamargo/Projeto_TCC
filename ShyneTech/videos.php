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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="../ShyneTech/style.css">
    <link rel="shortcut icon" href="imagens/logo.png">
    <title>VIDEOS</title>

    <style>

    h1 {
        font-size: 50px;
    }

    </style>

</head>
<body>

    <nav id="menuh" align="center">

        <ul> <!-- UL representa uma lista de itens sem ordem r�gida, isto �, uma cole��o de itens que n�o trazem uma ordena��o num�rica e as suas posi��es, nessa lista, s�o irrelevantes.-->

        <img src="../ShyneTech/imagens/logonome_1.png" class="imagem_logo_inicial">
            <li><a href="../ShyneTech/inicial.php">Início</a></li>
            <li><a href="../ShyneTech/jogos.php">Jogos</a> </li>
            <li><a href="#">Vídeos</a> </li>
            <li><a href="../ShyneTech/lembretes.php" id="linkLembretes">Lembretes</a></li>
            <li class="saida"><a href="#" onclick="confirmarLogout()">Sair</a></li>

        </ul>

    </nav>

    <!-- Para colocar videos do youtube no <iframe> substitua o watch?v= por embed/ -->
    <br>
   
    <div class="aaaaa">

    <div class='tha'>      
            <h1>Tecnologia</h1>
            </div>

            <div class="adad">

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/SoIpR-kbRcA" class="videostamanho"></iframe>

                <div class="textovideos">
                Uso responsável da tecnologia | Primeiro Celular, Ciberbullying, Fake News e Privacidade Online                
            </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/SOYje0K_92g" class="videostamanho"></iframe>

                <div class="textovideos">
                O que é a netiqueta? 📱 Normas de comportamento na internet 
                        </div>

            </div>

            
            <div class='video'>
            <iframe src="https://www.youtube.com/embed/Cd-hGqvvJhU" class="videostamanho"></iframe>

                <div class="textovideos">
                Vocabulário de TECNOLOGIA - Celular, videogame, laptop, tablet...
                        </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/g0-Yz1g31ig" class="videostamanho"></iframe>

                <div class="textovideos">
                Tecnologia II - Vocabulário 
                        </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/mpHP2eNYvMw" class="videostamanho"></iframe>

                <div class="textovideos">
                Tecnologia III - Vocabulário
                        </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/xRWcW0RtYjY" class="videostamanho"></iframe>

                <div class="textovideos">
                O que são as fake news? - Dicas para reconhecê-las 
                        </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/PQULFL8biAs" class="videostamanho"></iframe>

                <div class="textovideos">
                Instagram para Iniciantes: Como Usar Passo a Passo Completo (Tutorial 2023)
                        </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/BszYeoeiHF0" class="videostamanho"></iframe>

                <div class="textovideos">
                Como usar o Facebook — Descomplicando a Tecnologia Online
                        </div>

            </div>

            </div>
        
    <div class="adad">

    <!-- Tricô e Crochê -->

      <div class='tha'>
        <h1>Tricô e Crochê</h1>
        </div>

        <div class='video'>
            
            <iframe src="https://www.youtube.com/embed/0Qrfi0CfjG8" class="videostamanho"></iframe>
    
            <div class="textovideos">TRICÔ PARA INICIANTES | Método Continental</div>
        
        </div>
            
        <div class='video'>
        
            <iframe src="https://www.youtube.com/embed/09Rz2-cgfC0" class="videostamanho"></iframe>

                <div class="textovideos"> CÍRCULO EM CROCHÊ PARA INICIANTES PASSO A PASSO COMO FAZER OS AUMENTOS </div>

            </div>

            <div class='video'>         
                <iframe src="https://www.youtube.com/embed/qCBCAwk6m2I" class="videostamanho"></iframe>

                <div class="textovideos">
                    Flor de crochê PASSO A PASSO
                </div>

                </div>

            <div class='video'>
                <iframe src="https://www.youtube.com/embed/V8uVwMMI_20" class="videostamanho"></iframe>
                
                <div class="textovideos">
                    SAPATINHO DE TRICÔ MUITO FÁCIL DE FAZER
                </div>

                </div>

            <div class='video'>
                <iframe src="https://www.youtube.com/embed/hHdxnjdh3BI" class="videostamanho"></iframe>
                
                <div class="textovideos">
                    Gorro de crochê
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/Lp4ShY-QOJs" class="videostamanho"></iframe>
                
                <div class="textovideos">
                    CACHECOL DE TRICÔ PASSO A PASSO
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/qS0fEv2LfYc" class="videostamanho"></iframe>
            
                <div class="textovideos">
                    Coração em crochê para aplicação rápido e fácil
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/7Tl1VGaJlgI" class="videostamanho"></iframe>
                
                <div class="textovideos">
                    COMO FAZER quadradinhos de crochê? | granny square crochet
                </div>

            </div>
    

 
</div>
            <div class='tha'>      
            <h1>Exercícios</h1>
            </div>
    <div class="adad">
            
            <div class='video' >
            <iframe src="https://www.youtube.com/embed/Dmol3aGr11s" class="videostamanho"></iframe>

                <div class="textovideos">
                4 exercícios essenciais para os idosos realizarem todos os dias!
                </div>

            </div>
            
            <div class='video'>
            <iframe src="https://www.youtube.com/embed/YTUEan019KI" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Condicionamento físico
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/r4JfHKw55RU" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios para melhorar o equilíbrio de idosos - SEM EQUIPAMENTOS
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/Q4S6S37lWmI" class="videostamanho"></iframe>

                <div class="textovideos">
                EXERCÍCIOS FÁCEIS DE FORTALECIMENTO DE BRAÇOS E OMBROS PARA TERCEIRA IDADE | OMBRO EXERCÍCIOS
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/We44qc_6Gj4" class="videostamanho"></iframe>

                <div class="textovideos">
               
                RELAXA o CORPO e ALIVIA TENSÕES | Nível 3 | Alongamento Fácil para Iniciantes
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/YTUEan019KI" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Condicionamento físico 
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/KxQev8io6xY" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Deitado na cama
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/3OedA1lw5qw" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Como evitar quedas?
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/49E33qYS-Ms" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Na cadeira
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/g5a1q_9-8XA" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Alongamento
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/09YpzyfdIVE" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Mobilidade e postura
                </div>

            </div>

            <div class='video'>
            <iframe src="https://www.youtube.com/embed/ciWF1YrbC2c" class="videostamanho"></iframe>

                <div class="textovideos">
                Exercícios físicos para idosos - Mobilidade e flexibilidade
                </div>

            </div>
    
        

            

    
    
    </div>
    
 
    </div>
            </div>
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