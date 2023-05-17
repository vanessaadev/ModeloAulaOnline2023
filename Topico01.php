<!-- <php -->
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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
    <div id="Inicio"></div>
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


                        <h2 class="Titulo"> MEIO AMBIENTE E EDUCAÇÃO AMBIENTAL </h2>
                        <br><br>

                        <p>Para atuar como um educador ambiental na sua comunidade, é preciso fazer algumas reflexões iniciais: O que é o meio ambiente? Como o planeta se transformou no que é hoje? Por que a educação ambiental é fundamental no contexto atual? Qual a importância de um educador ambiental comunitário?</p>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p><strong>Bora começar pelo começo.</strong>  <br>
                                Incluindo nosso corpo, TUDO o que nos rodeia é Meio Ambiente. Nossa casa, nossa rua, nosso bairro, nosso quintal, nossa cidade. <br>
                                Meio ambiente é onde nós nascemos, crescemos, estudamos, trabalhamos, namoramos, festejamos, nos divertimos, casamos, nos reproduzimos e morremos. <br>Meio ambiente é onde nós seres humanos, e também não humanos, vivemos. Gente, bicho, planta e também a geografia do lugar: os rios, riachos, mares, mangues, serras, montanhas, florestas, o solo e o clima.
                                </p>
                            </div>
                        </div>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Tudo o que nos rodeia, tudo o que compõe a paisagem em que estamos inseridos é MEIO AMBIENTE. Veja as imagens: </p>
                                <!-- Modal Quadro 01 - Begin -->
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#ModaQuadro02" data-footer="Trilha - Primeiro passo">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Trilha - Primeiro passo">
                                    </a>
                                    <p class="FonteFigura">Fonte:Celso Oliveira.</p>
                                </div>

                                <!-- Modal Quadro 01 - Begin -->
                                <div class="modal fade text-center" id="ModaQuadro02" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid wow fadeInRight" src="imagens/Figura02.png" alt="Trilha - Primeiro passo">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura">Monumento Natural Monólitos de Quixadá/CE.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Modal Quadro 02 - Begin -->
                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#ModaQuadro03" data-footer="Trilha - Primeiro passo">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Trilha - Primeiro passo">
                                    </a>
                                    <p class="FonteFigura">Fonte: Davi Pinheiro.</p>
                                </div>

                                <!-- Modal Quadro 02 - Begin -->
                                <div class="modal fade text-center" id="ModaQuadro03" tabindex="-1" aria-labelledby="exampleModalLabe3" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid wow fadeInDown " src="imagens/Figura03.png" alt="Trilha - Primeiro passo">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura">Areninha no Parque Estadual do Cocó – Fortaleza/CE. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Modal Quadro 03 - Begin -->
                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#ModaQuadro04" data-footer="Trilha - Primeiro passo">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Trilha - Primeiro passo">
                                    </a>
                                    <p class="FonteFigura">Fonte:  Marcos Vieira.</p>
                                </div>

                                <!-- Modal Quadro 03 - Begin -->
                                <div class="modal fade text-center" id="ModaQuadro04" tabindex="-1" aria-labelledby="exampleModalLabe4" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura04.png" alt="Trilha - Primeiro passo">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura">Independência/CE </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <br>
                        <p>Simples assim?</p>
                        <p> Não! É complexo assim. A vida é complexa, pois está conectada com tudo o que existe. <strong> Vida é conexão e troca.</strong> <br>
                        Nós estamos conectados com a atmosfera através da respiração. Nosso alimento está conectado com o solo onde ele é produzido. Os rios estão conectados com a cidade em que moramos. As florestas estão conectadas com o ar que respiramos. Humanos e não humanos (plantas e bichos)  conectados em torno do planeta formando uma grande paisagem chamada Biosfera.</p>
                        <p>Todos os elementos dessa paisagem estão em relação ativa com todos os outros elementos. Cada ação, cada comportamento, cada gesto de um dos integrantes dessa paisagem altera em maior ou menor escala toda paisagem. É como uma grande teia.<strong> A Teia da Vida.</strong></p>
                        <br>
                        <!-- Modal Quadro 03 - Begin -->
                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#ModaQuadro05" data-footer="Trilha - Primeiro passo">
                                <img class="img-fluid" src="imagens/Figura05.png" alt="Trilha - Primeiro passo">
                            </a>
                            <p class="FonteFigura">Fonte:  Marcos Vieira.</p>
                        </div>
                        <br>
                        <!-- Modal Quadro 01 - Begin -->
                        <div class="modal fade text-center" id="ModaQuadro05" tabindex="-1" aria-labelledby="exampleModalLabe5" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura05.png" alt="Trilha - Primeiro passo">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura">Independência/CE </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Pise leve sobre a terra. Suavize suas pegadas. Um papel que vai ao chão,  uma queimada na mata, tudo mata. TUDO tem consequência para o meio ambiente. Pise leve sobre a terra. Deixe a terra respirar. </p>                                
                            </div>
                        </div>
                        <br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Pega essa visão no vídeo da ONG WWF: <Link>https://www.youtube.com/watch?v=FfbSxW3wPUQ</Link></p>
                            </div>
                        </div>
                        <br>
                        <!-- Sub Título -->
                        <p class="SubTitulo">PRIMEIRO ROLÊ INVESTIGATIVO</p>
                        <hr>
                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p> “Ninguém caminha sem aprender a caminhar, sem aprender a fazer o caminho caminhando, refazendo e retocando o sonho pelo qual se pôs a caminhar.”</p>
                            <footer class="blockquote-footer">Paulo Freire</footer>
                        </div>
                        <br>
                        <p>Um educador ambiental precisa aprender a ler os caminhos que compõe a sua realidade. É um aprendizado constante. Precisa ir a campo, andar pela comunidade, sair pra conhecer seu mundo e todo mundo que dele faz parte.Essa é a proposta do ROLÊ INVESTIGATIVO.</p>
                        <p>Chinelo no pé, boné na cabeça. Na mão, um caderno ou um borrão, e lápis ou caneta. Se gostar de desenhar não se acanhe, pode levar canetinhas ou lápis colorido. O celular, por favor, só pra fazer umas fotos. Ok?  </p>
                        <p> Tudo pronto? Então bora lá!</p>
                        <p> Saia de casa como se estivesse acabado de chegar ao lugar onde você vive. Olhe tudo com admiração e a surpresa de uma criança que descobre o mundo. Prenda-se nos detalhes. Caminhe aleatoriamente pelo seu bairro. Percorra durante uma hora todo o território do entorno da sua casa que você puder alcançar. Desenhe um mapa do seu percurso. Esse é o seu meio ambiente! </p>
                        <br>
                        <!-- Modal Quadro 01 - Begin -->
                        <div class="text-center">
                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#ModaQuadro06" data-footer="Trilha - Primeiro passo">
                                <img class="img-fluid" src="imagens/Figura06.png" alt="Trilha - Primeiro passo">
                            </a>
                            <p class="FonteFigura">Fonte: Esse rolê pela comunidade vai abrir seus olhos!</p>
                        </div>
                        <br>
                        <!-- Modal Quadro 01 - Begin -->
                        <div class="modal fade text-center" id="ModaQuadro06" tabindex="-1" aria-labelledby="exampleModalLabe5" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura06.png" alt="Trilha - Primeiro passo">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura">Esse rolê pela comunidade vai abrir seus olhos! </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>A proposta do rolê é fazer um primeiro relatório das suas percepções sobre o seu meio ambiente. </p>                                
                            </div>
                        </div>
                        <br>
                        <p>Vou te dar um roteiro para facilitar sua caminhada investigativa, mas você pode acrescentar outras coisas. Pode fazer fotos e desenhos. Entrevistar pessoas. Anotar suas impressões, seus pensamentos e questionamentos sobre o que você vai vivenciar.</p>
                        <p>Pequeno Roteiro para seu 1º ROLÊ INVESTIGATIVO:</p>
                        <!-- Marcadores -->
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Você mora numa área urbana ou rural?</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Seu território é próximo ao litoral, sertão ou serra?</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Tem áreas verdes? Plantações? Campo de futebol? Árvores?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"> Suas ruas são de terra, calçamento, asfaltada? </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Seu bairro é muito populoso? Você conhece as pessoas que moram perto de você?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Tem muitos animais domésticos pelo bairro? Cães, gatos?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Tem animais de criação? Galinhas, bois e vacas, cabras, porcos, carneiros?</li>                            
                            <li class="wow fadeInLeft" data-wow-delay="2.3s"> Você vê com facilidade outros animais? Pássaros, calangos, cobras, etc?</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s"> Tem lixo nas ruas? Tem esgoto a céu aberto?</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.9s"> Tem crianças brincando nas ruas? Quais as brincadeiras? É no celular ou elas interagem entre si? </li>
                            <li class="wow fadeInLeft" data-wow-delay="3.3s"> As pessoas do seu bairro gostam de plantas ornamentais, plantam jardins?</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.6s"> O vento é fresco? O ar é limpo ou tem muita fumaça?</li>
                            <li class="wow fadeInLeft" data-wow-delay="3.9s"> Tem muito trânsito no seu bairro?</li>
                            <li class="wow fadeInLeft" data-wow-delay="4.3s"> É um bairro mais residencial ou comercial?</li>
                            <li class="wow fadeInLeft" data-wow-delay="4.6s"> Existe um lugar que as pessoas gostam de frequentar? Praças, parques, praia, lagoa, açude?</li>
                            <li class="wow fadeInLeft" data-wow-delay="4.9s"> ocê descreveria seu bairro como um lugar agradável e bom de viver? Sim ou não? Por quê?</li>
                        </ul>
                        <br>
                        <!-- Figuras na mesma linha-->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong> </strong> Anotando tudo no caderno</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>AJA de Pacatuba/CE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong> </strong> Fazendo seu relatório do rolê</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong> AJA de Morrinhos/CE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                        </div>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>E aí? Curtiu o rolê? <br>
                                Anote suas percepções e reflexões no seu caderno. Ele será muito importante durante toda sua formação. Ele será o guia para suas futuras ações. Voltemos aos estudos. </p>                                
                            </div>
                        </div>
                        <br>
                        <!-- Sub Título -->
                        <p class="SubTitulo">MEIO AMBIENTE EM PERMANENTE TRANSFORMAÇÃO </p>
                        <hr>
                        <p>Você se lembra da nossa última fala sobre o meio ambiente?</p>
                        <br>
                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p>“Todos os elementos dessa paisagem estão em relação ativa com todos os outros elementos. Cada ação, cada comportamento, cada gesto de um dos integrantes dessa paisagem altera em maior ou menor escala toda paisagem.”</p>
                            <footer class="blockquote-footer"></footer>
                        </div>
                        <br>
                        <p>Sabe o que isso quer dizer?</p>
                        <p > Quer dizer que o Meio Ambiente tem uma história e é dinâmico. Não há paisagens estáticas, paradas no tempo. As paisagens se transformam permanentemente pela ação do tempo, do clima, e também pela ação do ser humano. O Lugar que você mora e que observou no seu rolê não é o mesmo do tempo dos seus pais. Nem o lugar que seus pais conheceram na juventude deles foi o mesmo do tempo dos seus avós. Imagina então as transformações que a Terra já sofreu ao longo de sua longa existência.</p>
                        <p> Vamos conhecer algumas dessas mudanças? Então pega a visão dessa linha do tempo:</p>
                        <br>
                        <p class="wow fadeInLeft" data-wow-delay="0.3s"> Nosso planeta tem cerca de 4,5 bilhões de anos. Muitas transformações aconteceram em seu clima, atmosfera, superfície e paisagem desde sua origem. Já foi um planeta em chamas com muita fumaça e larva de vulcão. Já esteve quase todo congelado. Recebeu chuvas de meteoros que alteraram suas paisagens.</p>
                        <p class="wow fadeInLeft" data-wow-delay="0.6s"> A vida surgiu nos oceanos há 3,6 bilhões de anos. Com o aparecimento de seres microscópicos chamados de “Cianobactérias”, que tinham a capacidade de fazer fotossíntese e assim liberar oxigênio, a atmosfera se modificou. A Terra estava pronta para a explosão de formas de vida mais complexas. Em seguida a vida avança sobre a parte seca do planeta, modificando a paisagem terrestre. </p>
                        <br>
                        <p lass="wow fadeInLeft" data-wow-delay="0.9s">Há um pouco mais de 4 milhões de anos, os primeiros hominídeos começaram sua jornada na Terra. Entre uma glaciação e outra, ele avança sobre toda superfície do planeta.</p>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Todos esses processos evolutivos foram processos naturais. Vida é mudança. </p>                                
                            </div>
                        </div>
                        <br>
                        <p>Mas eis que um belo dia, há 10 mil anos… o Homo sapiens inventou a agricultura.</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong> A agricultura mudou a história da humanidade e do meio ambiente.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong> De coletor para agricultor.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p> Você já pensou o que isso significou para a história da espécie humana e para a biodiversidade das paisagens do nosso planeta?</p>
                        <p> Antes o ser humano era caçador/coletor/nômade. Andava por aí em busca de alimentos, comia o que a natureza lhe oferecia. Seguia o ciclo das estações, comia as frutas de cada época, seguia as migrações dos peixes, aves e outros animais que lhes serviam de caça.</p>
                        <p>Agora como agricultor, torna-se sedentário. Cria vilas e cidades. Delimita territórios que precisam ser defendidos contra outros grupos humanos. Criam-se os primeiros exércitos para a defesa de suas culturas. Acontece a divisão do trabalho e as castas de reis, sacerdotes, militares e trabalhadores.</p>
                        <p> Com a fartura de alimentação proporcionada pela agricultura, a população humana cresce exponencialmente exigindo que ele busque sempre mais terras para serem plantadas.</p> 
                        <p> Como antes ele comia o que a natureza lhe proporcionava, sua dieta era diversa. Diversa como as paisagens das florestas de onde retirava seu sustento. Com a agricultura, o homem começou a selecionar algumas espécies que eram de ciclo de colheita mais curto. Porém, essa seleção das espécies cultivadas, principalmente cereais e leguminosas, leva a um rápido esgotamento do solo. Isso reforça a exigência de um constante avanço sobre novas terras. </p>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>A agricultura modificou não apenas a forma de ser e estar no mundo, mas o próprio mundo e suas paisagens. </p>                                
                            </div>
                        </div>
                        <br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Plantation é um tipo de sistema agrícola baseado em uma monocultura de exportação (cana de açúcar, tabaco, algodão) mediante a utilização de latifúndios e mão de obra escrava.</p>
                            </div>
                        </div>
                        <br>
                        <p>Para termos ideia da dimensão do impacto ambiental e humano desse processo histórico, vejamos alguns dados:</p>
                        <br>

                        <p class="wow fadeInLeft" data-wow-delay="0.3s"> Antes da chegada dos europeus, 57 milhões de pessoas de diversos povos, línguas e culturas, já habitavam as Américas. Em menos de um século após a invasão, só restavam 10% desses povos. Ou seja, mais de 50 milhões de seres humanos foram mortos pelas armas e pelas doenças trazidas pelos colonizadores.</p>
                        <p class="wow fadeInLeft" data-wow-delay="0.6s"> Para a exploração das riquezas e do solo das terras americanas, mais de 13 milhões de diversos povos negros da África foram escravizados e embarcados para as Américas para trabalhar nas plantações e na mineração. 20% morreram na travessia fruto da crueldade com que eram tratados.</p>
                        <p class="wow fadeInLeft" data-wow-delay="0.9s"> Aqui no Brasil, nesses 500 anos de exploração, 87,6% da Mata Atlântica foram destruídos.</p>
                        <p class="wow fadeInLeft" data-wow-delay="1.3s"> Da nossa Caatinga, restam 53,62% da cobertura original.</p>
                        <p class="wow fadeInLeft" data-wow-delay="1.6s">O Cerrado perdeu 46% de sua vegetação nativa e só 20% permanece intocado.</p>
                        <p class="wow fadeInLeft" data-wow-delay="1.9s">A Floresta Amazônica perdeu cerca de 20% do seu gigantesco território.</p>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Nunca antes na história do planeta houve tantas transformações num espaço de tempo tão curto. E elas continuam a acontecer, cada vez mais rápido! </p>                                
                            </div>
                        </div>
                        <br>
                        <!-- Sub Título -->
                        <p class="SubTitulo">SEGUNDO ROLÊ INVESTIGATIVO </p>
                        <hr>
                        <p>Neste segundo rolê investigativo, você vai fazer um exercício de reconstrução histórica do seu meio ambiente. Vai acrescentando as informações no seu caderno.</p>
                        <br>
                        <p>Pequeno Roteiro para seu 2º ROLÊ INVESTIGATIVO:</p>
                        <!-- Marcadores -->
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Procure conversar com moradores mais antigos do seu bairro. Eles são a memória do lugar e representam a identidade do território. Peça para eles descreverem seu bairro na infância e juventude deles. Provavelmente alguém terá fotografia daquela época.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Caminhe à procura de uma lagoa, rio ou riacho, uma mata, uma duna ou um morro que foram alterados, aterrados, modificados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Como era o dia a dia de trabalho e de lazer dos moradores de sua comunidade em décadas passadas.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"> Lembre-se que as festas tradicionais estão intimamente associadas aos períodos do ano, às estações do ano, etc. Na sua comunidade tem ou tinha festas tradicionais, grupos de folguedos, danças típicas? </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Procure por pistas sobre o clima. Você sabe em que bioma você vive?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Você conhece as árvores, as frutas da sua região? Lembra de alguma árvore que havia na sua infância? Seu pais e avós tem alguma memória sobre frutas e plantas que já não se encontra mais em sua região?</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">E animais silvestres? Que aves, répteis, mamíferos existem ou existiam em sua região?</li>                            
                            <li class="wow fadeInLeft" data-wow-delay="2.3s"> Pesquise em livros, revistas, museus, internet, sobre a história de seu município e do seu bairro.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s"> Há povos Tradicionais em seu município? (Indígenas, quilombolas, ribeirinhos, marisqueiras, etc)</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.9s"> Busque fazer um relato com suas palavras sobre a história do meio ambiente de sua comunidade. Colete fotos antigas, pinturas, que retratem sua história.</li>
                        </ul>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong> AJA conversando com uma antiga moradora da comunidade. Eusébio/CE</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>  @agente.jovem </p>
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
                                <p>Conhecer as transformações pelas quais o seu território passou é fundamental para compreender como ele é hoje e como poderá ser amanhã. Parafraseando o pensador grego Heródoto, é preciso “Pensar o passado para compreender o presente e idealizar o futuro.”</p>                                
                            </div>
                        </div>
                        <br>
                        <p>E aí? Avançou na sua compreensão da história do seu território? Ampliou sua percepção da sua rua, do seu bairro, da sua cidade? Anota tudo no seu caderno, pois esse material organizado ajudará no momento de escrever seu Plano de Ação Comunitária (PAC), ao final deste curso.  </p>
                        <br>
                        <!-- Sub Título -->
                        <p class="SubTitulo">REVOLUÇÃO INDUSTRIAL </p>
                        <hr>
                        <p>Você já deve ter percebido que nós iniciamos nosso curso a partir da formação do planeta, dos movimentos geológicos e evolutivos que alteraram as paisagens planetárias em ciclos de milhões de anos; passamos pela interferência humana que em poucos milhares de anos aceleraram as transformações planetárias; e por último, os últimos quinhentos anos, que, como uma tempestade, alterou violentamente os ecossistemas e a forma do ser humano habitar o mundo.</p>
                        <p>Porém, as transformações mais profundas ocorreram nos dois últimos séculos, com a fase de aceleração da destruição do meio ambiente. Estamos falando da Revolução Industrial.</p>
                        <p>Podemos citar três pontos importantes: </p>
                        <br>
                        <!-- Marcadores -->
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> No Séc. XVIII (anos de 1700), com o desenvolvimento das ciências (principalmente da química e física) e a invenção do motor a vapor, os meios de produção e distribuição de mercadoria ganham velocidade, causando grandes transformações econômicas e sociais.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Nos séculos XIX e XX (anos de 1800 e 1900), o desenvolvimento industrial movimenta uma gigantesca migração de pessoas da zona rural para os centros urbanos, provocando o crescimento desordenado das cidades, desestruturando ainda mais o meio ambiente urbano.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> A utilização de combustível fóssil (petróleo, carvão mineral e gás natural) como fonte de energia, sua utilização na agricultura (adubo, fertilizante e agrotóxico), e como matéria-prima para indústria (plástico) reforçam as violentas alterações no meio ambiente.</li>
                        </ul>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>O resultado dessa visão de progresso transforma a natureza em uma “adversária” a ser vencida e o meio ambiente numa fonte inesgotável de recursos a serem transformado em mercadoria e consumidos pelo ser humano.</p>                                
                            </div>
                        </div>
                        <br>
                        <p>Esse pensamento que coloca o ser humano e suas culturas de um lado e a “Natureza” do outro, seja como adversária ou como matéria prima para suas mercadorias, nos distancia da compreensão de que NÓS SOMOS NATUREZA.</p>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong> </strong> </p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong> </strong>   </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->
                        <br>
                        <p>A ruptura entre cultura e natureza, entre o que é humano e o que é natural, cria um enorme abismo conduzindo a humanidade ao risco de sua própria extinção.</p>
                        <br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Dá uma olhada nessa animação: <link rel="stylesheet" href="https://www.youtube.com/watch?v=mBq5GQkBLbU"> </p>
                            </div>
                        </div>
                        <br>
                        <p>Todo esse processo de exploração e destruição, que beneficia a apenas 1% da humanidade e coloca em risco toda a vida no planeta, <strong>NÃO ACONTECEU SEM RESISTÊNCIA</strong> . </p>
                        <p>Movimentos anticolonialistas, abolicionistas, resistência dos povos indígenas e dos povos negros escravizados, e movimentos pela preservação do Meio Ambiente sempre existiram ao longo de toda história, apesar da violenta tentativa dos poderosos que se beneficiam com esse processo de exploração tentar invisibilizá-los apagando-os da história.  </p>
                        <br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Pega a visão com essa jovem ambientalista aí: <link rel="stylesheet" href="https://www.youtube.com/watch?v=R8XJJ6LWn1IU"> </p>
                                <p>Com vocês, o líder indígena e ambientalista Ailton Krenak: <link rel="stylesheet" href="https://www.youtube.com/watch?v=Cbk0V6dRUSk"> </p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Assistir a esses vídeos dá uma instigação né, uma vontade de fazer a diferença! E essa é a ideia do Programa AJA. Agora vamos para o nosso último rolê desse módulo.</p>                                
                            </div>
                        </div>
                        <br>
                        <!-- Sub Título -->
                        <p class="SubTitulo">TERCEIRO ROLÊ INVESTIGATIVO</p>
                        <hr>
                        <p>Pequeno Roteiro para seu 3º ROLÊ INVESTIGATIVO:</p>
                        <!-- Marcadores -->
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Converse com as lideranças das associações comunitárias (sindicatos de trabalhadores rurais, ONGs, coletivos de cultura, comunidades de matrizes africanas, indígenas, pastorais, etc), investigando quais suas principais lutas.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Vá até a sua Prefeitura e procure os secretários de agricultura, meio ambiente, cultura, educação, assistência social. Busque entrevistá-los sobre as políticas públicas do município. </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">  Observe como a população e a gestão pública lida com os resíduos sólidos. Há lixões na sua cidade? Há coleta seletiva? Existem catadores de material reciclável? Como eles se organizam? Pra quem eles vendem? Qual o destino dos resíduos sólidos? </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"> Há lagoas, rios, riachos, praias, perto de sua casa? Como estão suas águas? São próprias para banho? Quais os usos que a população faz dessas fontes de água? (Lazer, lavagem de roupas e ou animais, consumo, pesca, uso para a agricultura, etc) </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Existe matas, parques, florestas próximo a sua comunidade? Como estão? Que usos a população faz dela? ( Lazer, coleta de madeira, caça ou captura de animais silvestres, descarte de lixo)</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Existe indústrias, matadouros, armazéns, comércios, bares, restaurantes em seus bairros ou comunidade? Como eles interagem com a comunidade? Como eles interferem no meio ambiente? Quais as principais atividades econômicas do seu município?</li>
                        </ul>
                        <br>
                        

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
            <br><br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Apresentacao.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div>

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>