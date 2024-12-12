<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('verificar_login.php');
require_once('../ShyneTech/conexao/conexao.php');

$banco = new BancodeDados();
$banco->conecta();

$idUsuario = $_SESSION['id'];

// Listar todos os lembretes
$sql = "SELECT id, titulo, conteudo, data_criacao FROM notas WHERE id_usuario = '$idUsuario'";
$result = mysqli_query($banco->con, $sql);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../ShyneTech/style.css">
    <link rel="shortcut icon" href="imagens/logo.png">
    <title>LEMBRETES</title>
</head>
<body>
    <nav id="menuh" align="center">
        <ul>
            <img src="../ShyneTech/imagens/logonome_1.png" class="imagem_logo_inicial">
            <li><a href="../ShyneTech/inicial.php">Início</a></li>
            <li><a href="../ShyneTech/jogos.php">Jogos</a></li>
            <li><a href="../ShyneTech/videos.php">Vídeos</a></li>
            <li><a href=" " id="linkLembretes">Lembretes</a></li>
            <li class="saida"><a href="#" onclick="confirmarLogout()">Sair</a></li>
        </ul>
    </nav>

    <center>
        <div class="titulo_lembrete">
            <h1>Meus Lembretes</h1>
        </div>

        <br><br><br><br><br>

        <div id="mensagem-container"></div>


        <?php
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $dataExpiracao = date('Y-m-d H:i:s', strtotime($row['data_criacao'] . ' + 10 seconds'));
                    echo '<div class="lembretes" draggable="true" ondragstart="drag(event)" data-id="' . $row['id'] . '" data-expiracao="' . $row['data_criacao'] . '" onmouseover="verificarLembrete(\'' . $row['data_criacao'] . '\', this)">';
                    echo "<span class='excluir' onclick='excluirLembrete(this)'>&#128465;</span>";
                    echo $row["titulo"] . "<br><br>";
                    echo $row["conteudo"] . "<br><br><br>";
                    echo "Data e hora programado: <br> " . $row["data_criacao"] . "<br><br>";
                    echo "</div>";
                }
            } else {
                echo '<div class="naoencontrado">Nenhum lembrete encontrado.</div>';
            }
        } else {
            echo "Erro ao listar lembretes: " . mysqli_error($banco->con);
        }

        $banco->fechar();
        ?>

        <a href="adicionar_lembretes.php" class="link-button1">Adicionar Lembrete</a>
        <br>
    </center>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../ShyneTech/sair.js"></script>
    <script src="../ShyneTech/script.js"></script>
  <div class="espaco">
    <br><br>
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
