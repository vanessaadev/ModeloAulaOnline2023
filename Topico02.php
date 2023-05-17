<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <h2 class="Titulo">EDUCAÇÃO AMBIENTAL</h2>
                        <br><br>
                        <p>O que o Programa AJA espera de você?</p>
                        <p> Ser um Agente Jovem Ambiental é ser um porta-voz do Meio Ambiente em seu município e um Agente da Natureza em sua comunidade. Ser um AJA é ser um Educador Ambiental.</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>Arborização envolvendo a comunidade de Parapui – Santana do Acaraú/CE </p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong> @projetoajaparapui</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p>Mas o que significa ser um Educador Ambiental?</p>
                        <p>Para responder a essa pergunta é preciso entender o que significa Educação e como se tornar um agente educador.</p>
                        <p> Segundo Paulo Freire, Patrono da Educação Brasileira, há duas espécies gerais de Educação: a educação dominadora e a educação libertadora. </p> 
                        <p> A educação dominadora apenas Descreveria a realidade e Transferiria conhecimento. É o que vemos tradicionalmente nas escolas. Um professor que teoricamente detém o conhecimento e transmite ao aluno, que se torna assim um mero receptor desse conhecimento.</p>
                        <p> Não é o que nos interessa neste curso.A educação libertadora seria um ato de criação do conhecimento e um método de ação-reflexão para a transformação da realidade. </p>
                        <br>
                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                            <p>Para Paulo Freire o conhecimento não é algo estático, acabado, fixo, imutável. O conhecimento é criação que se produz com a experiência crítica sobre o mundo. Conhecimento é processo, que através da ação-reflexão apreende e transforma a realidade.</p>
                            </div>
                        </div>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>Cinema ambiental com as crianças da creche na comunidade, em Fortaleza/CE.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong> @ajaspassare</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p>Assim sendo, educação é uma ato social, coletivo, de ação-reflexão e de transformação (criação) do mundo. <br>
                        Esse será nosso objetivo neste curso.</p>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <!-- CITAÇÃO -->
                                <div class="bd-callout bd-callout-success">
                                    <p> “Ninguém educa ninguém, ninguém educa a si mesmo, os homens se educam entre si, mediatizados pelo mundo” </p><footer class="blockquote-footer">Paulo Freire</footer>
                                </div>                                                           
                            </div>
                        </div>
                        <br>
                        <p>A partir desse pensamento, a educação ambiental seria então um processo de produção de conhecimento sobre as inter-relações entre os seres humanos, suas culturas e o meio ambiente, objetivando a criação de valores éticos, que modifiquem suas atitudes destrutivas, antagônica e exploratória em relação à natureza, garantindo sua preservação para as gerações futuras.</p>
                        <br>
                        <!-- Sub Título -->
                        <p class="SubTitulo">COMO UM AGENTE SE TORNA UM EDUCADOR AMBIENTAL? </p>
                        <hr>
                        <p>Um AJA é aquele que agencia a transformação de sua comunidade através de suas ações-reflexão sobre a sua realidade ambiental.</p>
                        <p>Para isso, ele está em <strong>permanentemente formação</strong>, buscando informações que aprimorem suas ações e o auxiliem no desenvolvimento de suas reflexões para que possa alcançar as transformações necessárias em sua comunidade.</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>Oficina de Orientação para o Mercado de Trabalho - IDT - Santa Quitéria/CE</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong> @horta.do.bem_</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p>Ao longo desse curso, nós estaremos nessa parceria, indicando leituras, propondo ações, compartilhando com você informações para juntos construirmos uma nova realidade em seu município.</p>
                        <p>Organize no seu caderno todas as informações que você coletou e percebeu nos seus rolês. Crie esse hábito, pois ao final deste curso, você estará apto a construir seu Plano de Ação Comunitária (PAC), com o qual você atuará em sua comunidade ao longo do Programa AJA.</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>Oficina Imagine AJA, em Maranguape/CE.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong>  @imagine.aja</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <!-- CITAÇÃO -->
                                <div class="bd-callout bd-callout-success">
                                    <p> “A educação não muda o mundo, mas muda as pessoas que vão mudar o mundo”. Paulo Freire </p>
                                </div>                                                           
                            </div>
                        </div>
                        <br>
                        <!-- Sub Título -->
                        <p class="SubTitulo">O QUE UM AJA FAZ </p>
                        <hr>
                        <p>Você Agente Jovem Ambiental tem como objetivo pensar e colocar em prática melhorias para a sua comunidade e município. Para isso você vai estudar, trocar ideias com seus colegas AJAs e moradores locais, elaborar um projeto (chamado de PAC) e executá-lo.</p>
                        <p>Basicamente é isto que um AJA faz durante sua permanência no Programa:</p>
                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mobiliza a sua comunidade e promove ações de educação ambiental sobre diversos temas;</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>AJAs de Icapuí em mutirão de plantio de mangue.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong> @aja_icapui</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p>Apoia as ações socioambientais no seu município, colaborando em eventos e campanhas;</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>AJAs participando da campanha da Prefeitura.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong> @aja_novaolinda</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p>Auxilia na conservação de áreas naturais e equipamentos públicos e na recuperação de áreas degradadas.</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>AJAs de Frecheirinha no mutirão de limpeza em parceria com os catadores.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong>  @projeto_aja_frecheirinha</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p>Participa de capacitações, reuniões e audiências públicas no município.</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong>AJAs de Itapipoca participam de audiência pública.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong>  @ajavitortome</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <!-- CITAÇÃO -->
                                <div class="bd-callout bd-callout-success">
                                    <p> Um AJA é um influenciador ambiental que está sempre em busca de novos seguidores. </p>
                                    <br>
                                    <!-- Figura 01 - End -->
                                    <br>
                                    <p>Participa de capacitações, reuniões e audiências públicas no município.</p>
                                    <br>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                            <p class="TituloFigura"><strong> </strong>AJAs de Itapipoca participam de audiência pública.</p>
                                        </a>
                                    </div>
                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong> </strong>  @ajavitortome</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->
                                    <br>
                                    <p> Chegamos ao final do primeiro módulo. Aqui entendemos a importância da compreensão histórica do meio ambiente, seja em nível planetário, seja </p>
                                </div>                                                           
                            </div>
                        </div>
                        <br>
                        <p>comunitário, e como nós nos inserimos nesse contexto como um agente educador ambiental, um agente transformador do seu meio ambiente. Agora é com você. Faça a avaliação e avance para o próximo módulo.</p>

                        <br><br>
                        <p></p>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->
                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href=".php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>