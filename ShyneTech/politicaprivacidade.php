<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"> <!-- Comando utilizado para que uma determinada pessoa consiga ter acesso ao conte�do que est� procurando, independente de qual l�ngua ela consiga ler ou falar -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ShyneTech/style.css">
    <link rel="shortcut icon" href="imagens/logo.png">
    <title>POLITICA DE PRIVACIDADE</title>
>

</head>
<body>
<?php
    session_start();

    if ($_SESSION['log'] != "ativo"){

        echo"<script language='javascript' type='text/javascript'>
        alert('Precisa esta logado para acessar o conteúdo');
        window.location.href='../naoentrou.php';</script>";
}

//echo utf8_encode("O usuario logado no momento é ");
//echo utf8_encode($_SESSION['nome']);
//echo utf8_encode("<br> O nivel dele é ". $_SESSION['nivel']."\n \n");
?>

    <div class="fonte">
    <h2>1. Dados coletados</h2> 

    <br> <br>

    <p>
    
    O site NewBrain coleta os seguintes dados pessoais dos seus usuários: <br>

    * Nome completo <br>
    * Endereço de e-mail <br>
    * Senha <br> <br> <br>

    </p>
    
    <h2>2. Como usamos os dados</h2>

    <br> <br>

    <p>
    Os dados pessoais coletados pelo site NewBrain são usados para: <br>

    * Criar uma conta para o usuário <br>
    * Fornecer o serviço solicitado pelo usuário <br>
    * Enviar e-mails de marketing <br>
    * Melhorar o site e o serviço <br> <br> <br>
    </p>
    
    <h2>3. Compartilhamento de dados</h2> 

    <br>

    <p>
    O site NewBrain não compartilha os dados pessoais dos seus usuários com terceiros, exceto nas seguintes situações: <br>

    * Com empresas de publicidade, para fins de marketing <br>
    * Com provedores de serviços, para fins de hospedagem e manutenção do site <br> <br> <br>
    </p>

    <h2>4. Opções dos usuários</h2> 
    
    <br> <br>

    <p>
    Os usuários do site NewBrain têm as seguintes opções sobre seus dados pessoais: <br>

    * Acesso: os usuários podem acessar seus dados pessoais a qualquer momento <br>
    * Retificação: os usuários podem corrigir quaisquer erros em seus dados pessoais <br>
    * Exclusão: os usuários podem solicitar a exclusão de seus dados pessoais <br> <br> <br>
    </p>

    <h2>5. Política de segurança</h2>

    <br> <br>

    <p>
    O site NewBrain adota medidas de segurança para proteger os dados pessoais dos seus usuários, incluindo: <br>

    * Criptografia de dados <br>
    * Controle de acesso <br>
    * Monitoramento de atividades suspeitas <br> <br> <br>
    </p>

    <h2>6. Atualizações</h2>

    <br> <br>

    <p>
    O site NewBrain pode atualizar esta Política de Privacidade periodicamente. Os usuários serão notificados de quaisquer alterações 
    importantes por e-mail ou através de um aviso no site. <br> <br> <br>
    </p>

    <h2>7. Contato</h2>

    <p>
    Se você tiver alguma dúvida sobre esta Política de Privacidade, entre em contato conosco pelo e-mail <a href="">shyne.tech.210@gmail.com</a>. <br> <br> <br>

    </p>
    </div>

    <div class="voltar">

    <a href="../ShyneTech/inicial.php">Voltar</a>
        
    </div>

    <footer>

<div class="rodapepo">
    <div class="boxs">
    
  <div class="imagem_empresa_inicial">
  </div>

                <div class="">
                  <br>
                  ShinyTech © 2023 - Todos os direitos reservados. <br>

                  <br> <br>
                    <div class="imagem_empresa_inicial">
                        <img src="imagens/empresa_logo.png" >
                    </div>
                </div>
                  
              </div>   
       
</footer> 

</body>
</html>
