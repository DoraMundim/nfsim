<?php

include 'menu.php';

if ($_POST) {
    
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => [
            'secret' => '6LfI1asjAAAAAMi2V78MT8iUkF6lGyMTfMaNzqnt',
            'response' => $_POST['g-recaptcha-response'] ?? ''
        ]

    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    $responseArray = json_decode($response,true);

    $sucesso = $responseArray['success'] ?? false;

    echo $sucesso ? "Mensagem enviada com sucesso" : "Erro ao enviar mensagem";
    exit;

}

?>
<html>
<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
        function validarPost () {
        if (grecaptcha.getResponse() != "") return true;
            alert('Selecione a caixa de "não sou um robô"');
            return false;
}
</script>
</head>
<div class="container-contato">
    <div class="header-contato">
        <div class="titulo-contato">
            <h1>Contato</h1>
        </div>
        <div class="image-contato">
            <img src="./img/contato.png" alt="Fale Conosco">
        </div><br>
    </div><br>
        <h2>Mande uma mensagem</h2><br>
    <div class="formulario">
    <form action="?" method="POST" onsubmit="return validarPost()">
        <label for="nome">Seu nome: *</label><br>
        <input type="text" id="nome" name="Nome" placeholder="Digite seu nome: "><br>
        <label for="e-mail">Seu email: *</label><br>
        <input type="text" id="email" name="Email" placeholder="Digite seu e-mail: "><br>
        <label for="assunto">Assunto: *</label><br>
        <input type="text" id="assunto" name="Nome" placeholder="Digite o assunto: "><br>
        <label for="mensagem">Mensagem: *</label><br>
        <input type="text" id="mensagem" name="mensagem" placeholder="Digite sua mesagem: "><br><br>
        <div class="g-recaptcha" data-sitekey="6LfI1asjAAAAAF6Muo8IfSIedWEn5QawZuv7vakb"></div><br><br><br>
        <button type="submit">Enviar</button>
    </form>
</div>
</div>

</html>
<?php

include 'rodape.php';

?>