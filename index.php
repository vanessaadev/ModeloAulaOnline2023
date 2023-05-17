<!-- <php -->
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Apresentacao';
include('layout/header.php');
?>


<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo"> MEIO AMBIENTE E EDUCAÇÃO AMBIENTAL </h2>

                        <hr>

                        <p>
                        Bem-vindo(a) ao Curso de Formação do Agente Jovem Ambiental. 
                        <P> Aqui você inicia a sua trajetória para se tornar um agente ambiental em sua comunidade. A partir de agora, oficialmente, você é um(a) Agente Jovem Ambiental. Você é um AJA, e faz parte do MAIOR PROGRAMA DE EDUCAÇÃO AMBIENTAL DO BRASIL! </P>
                        <P>São 10 mil jovens, em todos os 184 municípios do Ceará, na luta pelo meio ambiente em seus territórios!</P>
                        <P> Se você chegou até aqui, é porque escolheu fazer a diferença na sua comunidade e no seu município, contribuindo para melhorar a vida do nosso planeta.</P> 
                        <P>É isso aí! Ser um AJA é agir localmente, pensando globalmente. Por isso, estamos muito honrados e gratos pela sua disposição, sua dedicação e seu amor à natureza.</P>
                        <P> Neste módulo, você vai aprender sobre meio ambiente, natureza e educação ambiental.</P>
                        <p>Leia-o atentamente. Consulte-o sempre que tiver dúvidas.</P>
                        <p>Vamos então começar? Está pronto(a)?</p>
                        <p> Cuida nos estudos!</p>
                        <br><br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 1:</strong> AJAs em ação na Festa Anual das Árvores. Fortaleza/CE.</p>
                            <a href="imagens/Figura01.png" data-toggle="lightbox" data-footer="Texto_Imagem_Modal">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt_da_Imagem">
                            </a>
                            <p class="FonteFigura">SEMA</p>
                        </div>
                        <hr>

                       

                        <br><br>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>