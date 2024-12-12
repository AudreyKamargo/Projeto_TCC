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

    <div>
    <h2>*1. Dados coletados*</h2>

    <p>

    O site NewBrain coleta os seguintes dados pessoais dos seus usuários:

    * Nome completo
    * Endereço de e-mail
    * Senha

    </p>
    
    <h2>*2. Como usamos os dados*</h2>

    Os dados pessoais coletados pelo site NewBrain são usados para:

    * Criar uma conta para o usuário
    * Fornecer o serviço solicitado pelo usuário
    * Enviar e-mails de marketing
    * Melhorar o site e o serviço

    <h2>*3. Compartilhamento de dados*</h2>

    O site NewBrain não compartilha os dados pessoais dos seus usuários com terceiros, exceto nas seguintes situações:

    * Com empresas de publicidade, para fins de marketing
    * Com provedores de serviços, para fins de hospedagem e manutenção do site

    <h2>*4. Opções dos usuários*</h2>

    Os usuários do site NewBrain têm as seguintes opções sobre seus dados pessoais:

    * Acesso: os usuários podem acessar seus dados pessoais a qualquer momento
    * Retificação: os usuários podem corrigir quaisquer erros em seus dados pessoais
    * Exclusão: os usuários podem solicitar a exclusão de seus dados pessoais

    <h2>*5. Política de segurança*</h2>

    O site NewBrain adota medidas de segurança para proteger os dados pessoais dos seus usuários, incluindo:

    * Criptografia de dados
    * Controle de acesso
    * Monitoramento de atividades suspeitas

    <h2>*6. Atualizações*</h2>

    O site NewBrain pode atualizar esta Política de Privacidade periodicamente. Os usuários serão notificados de quaisquer alterações 
    importantes por e-mail ou através de um aviso no site.

    <h2>*7. Contato*</h2>

    Se você tiver alguma dúvida sobre esta Política de Privacidade, entre em contato conosco pelo e-mail [endereço de e-mail].

    Esta política de privacidade é um exemplo simples que pode ser adaptado para atender às necessidades específicas do seu site.
    É importante que você revise esta política com um advogado para garantir que ela esteja em conformidade com as leis de proteção
     de dados aplicáveis.

    Aqui estão algumas explicações sobre as informações que você pode incluir em sua política de privacidade:

    * *Tipos de dados coletados:* Você deve indicar quais dados pessoais você coleta dos seus usuários. Isso inclui informações como
     nome, endereço de e-mail, endereço IP, cookies, etc.
    * *Finalidades para as quais os dados são coletados:* Você deve explicar como você usa os dados pessoais coletados.
     Isso inclui as finalidades para as quais você coleta os dados, como marketing, atendimento ao cliente, etc.
    * *Compartilhamento de dados com terceiros:* Você deve explicar como você compartilha os dados pessoais coletados com terceiros.
     Isso inclui empresas de publicidade, provedores de serviços, etc.
    * *Opções dos usuários:* Você deve indicar quais opções os usuários têm sobre seus dados pessoais. Isso inclui o direito de acesso,
     retificação, exclusão, etc.
    * *Política de segurança:* Você deve explicar as medidas de segurança que você toma para proteger os dados pessoais dos seus
     usuários.

    Ao criar uma política de privacidade clara e concisa, você está protegendo a privacidade dos seus usuários e garantindo que
     o seu site esteja em conformidade com as leis de proteção de dados.
    </div>


    

    <div class="rodape">
        
    <img src="../ShyneTech/imagens/empresa_logo.png" class="imagem_empresa_inicial">
       
        <div class="">
            ShinyTech © 2023 - Todos os direitos reservados. <a href="../ShyneTech/termoprivacidade" target="_blank" rel="noopener noreferrer"></a>
        </div>
    
    </div>

</body>
</html>
