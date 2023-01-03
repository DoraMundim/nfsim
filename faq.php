<?php

include 'menu.php';

?>
<html>
    <body>
        <section>
            <div class="header-faq">
                <div class="titulo-faq">
                    <h1>F.A.Q.</h1>
                </div>
                <div class="imagemslide">
                    <img src="./img/faqimage.png" alt="FAQ">
                </div>
            </div>
        </section>
        <section>
            <div class="titulo-faq">
                <h2><strong>Perguntas frequentes</strong></h2>
            </div>
        </section>
        <section class="duvidas">
        <div class="perguntas">
            <div class="lado1">
                <div class="respostas1-faq">
                    <p>Posso usar o certificado do tipo A3 para emitir notas?   <button onmouseenter="mostrarResposta ()" id="verresposta" onmouseleave="esconder1 ()"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id=mostrar>Não, esse sistema só emite documentos fiscais com certificado digital do tipo A1</h5>
                </div>
                <div class="respostas2-faq">
                    <p>Existe multa rescisória caso eu desista de usar o sistema antes de completar um ano?  <button onmouseenter="mostrarResposta2 ()" id="verresposta2" onmouseleave="esconder2 ()"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id=mostrar2>Só há fidelidade nos planos que incluem o certificado digital. Se você optar por um plano sem certificado digital não há fidelidade.</h5>
                </div>
                <div class="respostas3-faq">
                    <p>O SISTEMA GESTOR SEFÁCIL atende todos os estados do Brasil?  <button onmouseenter="mostrarResposta3 ()" id="verresposta3" onmouseleave="esconder3 ()"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id="mostrar3">Sim, todos os estados do Brasil e no Distrito Federal.</h5>
                </div>
                <div class="respostas4-faq">
                    <p>O SISTEMA GESTOR SEFÁCIL é integrado ao SAT Fiscal? <button onmouseenter="mostrarResposta4 ()" id="verresposta4" onmouseleave="esconder4 ()"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id="mostrar4">Sim, todos os estados do Brasil e no Distrito Federal.</h5>
                </div>
            </div>
            <div class="lado2">
                <div class="respostas21-faq">
                    <p>O SISTEMA GESTOR SEFÁCIL gera arquivos SPED? <button onmouseenter="mostrarResposta6 ()" id="verresposta6" onmouseleave="esconder5 ()"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id="mostrar6">Não. O Gestor Sefácil atende exclusivamente empresas do Regime Tributário Simples nacional e MEI.</h5>
                </div>
                <div class="respostas22-faq">
                    <p>O SISTEMA GESTOR SEFÁCIL emite notas fiscais para veículos? <button onmouseenter="mostrarResposta7 ()" id="verresposta7" onmouseleave="esconder6 ()"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id="mostrar7">Sim. O Gestor Sefácil atende às exigências impostas pelo Denatran para emplacamento de veículos novos e carretas reboque.</h5>
                </div>
                <div class="respostas23-faq">
                    <p>O SISTEMA GESTOR SEFÁCIL emite notas fiscais de gás e derivados de petróleo?  <button onmouseenter="mostrarResposta8 ()" id="verresposta8" onmouseleave="esconder7 ()"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id="mostrar8">Sim. O Gestor Sefácil atende às exigências da ANP (Agência Nacional de Petróleo) emitindo notas nas conformidades legais.</h5>
                </div>
                <div class="respostas24-faq">
                    <p>O SISTEMA GESTOR SEFÁCIL atende lojas de confecções e calçados?  <button onmouseenter="mostrarResposta9 ()" onmouseleave="esconder8 ()"  id="verresposta9"><img src="./img/mostrar.png" alt="Mostrar"></button></p><br>
                    <h5 id="mostrar9" >Sim. O Gestor Sefácil possui cadastro de produtos por grade de cor e tamanho, possibilitando assim ter um controle de estoque mais preciso e eficiente.</h5>
                </div>
            </div>
        </div>
        </section>

    </body>

</html>

<?php

include 'rodape.php';

?>