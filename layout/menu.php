<!-- PLUGIN DO FADE IN -->

<style>
    .MenuTopico {
        color: #274F23 !important;
        font-weight: bold !important;
    }

    .MenuTopico:hover {
        background-color: #ccc;
    }
    
    .ativo {
        background-color: #e1ebe3;
    }

    #menuNumero {
        color: #b6a7d8;
        font-weight: bold !important;
        font-size: 1.2rem;
        padding-right: 0.3rem;
        margin-left: 0;
        margin-right: 0.4rem;
        font-family: "Raleway";
        right: 0.8rem;
        margin-top: -0.23rem;
    }

    .NomeCurso {
        margin-top: 20px;
        padding: 70px 0;
        background-image: linear-gradient(to right, #F5E7CC , #7C8046 );
        font-size: 1.2em;
        padding: 10px;
        color: #44833f;
        font-weight: bold;
    }
</style>

<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active ps">
            <div class="m-4 mx-auto text-center">
                <!-- <a href="index.php">
                <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                </a> -->
                <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="130" width="70" alt="Logo EGPCE">
                <h3 class="NomeCurso">Cartografia Básica e Introdução ao Geoprocessamento com QGIS</h3>
            </div>
            <div class="sidebar-menu">

                <ul class="menu ms-3">

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="index.php" class="MenuTopico sidebar-link <?php if($page=='Apresentacao'){echo'ativo';}?>"><span id="menuNumero"> </span>Apresentação </a>
                        </div>
                    </li>

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico01.php" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo'ativo';}?>"><span id="menuNumero">01 </span>Panorama do Comportamento Digital </a>
                        </div>
                    </li>

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico02.php" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo'ativo';}?>"><span id="menuNumero">02 </span>Eventos Presenciais, Híbridos e Digitais como Ferramenta de Educaçã </a>
                        </div>
                    </li>   

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico03.php" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo'ativo';}?>"><span id="menuNumero">03 </span>Design e Planejamento de Eventos Digitais</a>
                        </div>
                    </li>  

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico04.php" class="MenuTopico sidebar-link <?php if($page=='Topico04'){echo'ativo';}?>"><span id="menuNumero">04 </span>Tipologia de Eventos Digitais</a>
                        </div>
                    </li>                                                      
                                                
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>

</div>
<!-- SCRIPT - JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('ul li a').click(function() {
            $('li a').removeClass("ativo");
            $(this).addClass("ativo");
        });
    });
</script>
