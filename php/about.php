<?php 
    session_start();
    require_once 'actions/usuarios.php';
    $u = new Usuario;
?>

<div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>

<main>
    <div class="container py-5 mt-3">
        <h5 class="text-success h1 text-center">Quem Somos</h5> 
        <div class="row py-5">
            <div class="col-md-6 mt-5">
                    <div class="row justify-content-initial mt-5">
                        <p class="h5 mr-5 ml-5 lh-base" style="color: #BDBDBD;">
                        O Cuide.se surgiu a partir da experiência de um de nossos membros no voluntariado do Instituto Life For Life, 
                        que atua no auxílio às pessoas em situação de rua e dependentes químicos.
                        Levando em consideração que a dependência química é um dos maiores problemas de saúde pública mundial, 
                        vimos a necessidade melhorar a comunicação entre as instituições e a comunidade, para que pessoas nessa 
                        situação possam localizar facilmente centros e clínicas de reabilitação que estejam em sua região, 
                        além de poder contar com o apoio de pessoas recuperadas e obter um tratamento virtual personalizado.
                        Tudo isso, utilizando uma linguagem e metodologia personalizada com o apoio das entidades da saúde com tecnologias modernas.
                        Nosso projeto foi guiado pelo espírito de ajuda e de esperança, com o propósito de auxiliar na recuperação de muitas pessoas, 
                        respeitando o seu momento e sua história.
                        </p>
                    </div>
            </div>

            <!-- Sessão da Imagem -->
            <div class="col-md-6 justify-content-center">
                <img class="w-75 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                src="https://i.ibb.co/5BZFh2M/stock-prices.png">
            </div>

        </div>
    </div>

    <div class="counter">
        <div class="container">
        <small class="text-danger d-flex text-center">* Dados Fictícios</small>
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="count-up">
                    <p class="counter-count display-4 text-center">XX</p>
                    <h3 class="h2 text-center">Instituições Vinculadas</h3>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="count-up">
                    <p class="counter-count display-4 text-center">XXX</p>
                    <h3 class="h2 text-center">Pessoas Encaminhadas</h3>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="count-up">
                    <p class="counter-count display-4 text-center">XXX</p>
                    <h3 class="h2 text-center">Tratamentos em Andamento</h3>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="count-up">
                    <p class="counter-count display-4 text-center">XX</p>
                    <h3 class="h2 text-center">+ 6 meses de Superação</h3>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="text-center mb-3">
    <div class="container text-white">
        <header>
            <h1 class="display-4">Bootstrap carousel quotes</h1>
            <p class="font-italic mb-1">Create an elegant quote carousel using default Bootstrap 4 carousel component.</p>
            <p class="font-italic">Snippet by
                <a class="text-white" href="https://bootstrapious.com/">
                    <u>Bootstrapious</u>
                </a>
            </p>
        </header>
    </div>
</section>

<section class="pb-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">
                <div class="p-5 bg-white shadow rounded">
                    <!-- Bootstrap carousel-->
                    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                        <!-- Bootstrap carousel indicators [nav] -->
                        <ol class="carousel-indicators mb-0">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner px-5 pb-4">
                            <div class="carousel-item active">
                                <div class="media">
                                <img class="rounded-circle img-thumbnail" 
                                     src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-1_ffutqr.jpg" 
                                     alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead">
                                            <i class="fa fa-quote-left mr-3 text-success"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="media">
                                <img class="rounded-circle img-thumbnail" 
                                     src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-3_hdxocq.jpg" 
                                     alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead">
                                            <i class="fa fa-quote-left mr-3 text-success"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                                <div class="media">
                                <img class="rounded-circle img-thumbnail" 
                                     src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-2_gibm2s.jpg" 
                                     alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead">
                                            <i class="fa fa-quote-left mr-3 text-success"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fa fa-angle-left text-dark text-lg"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-angle-right text-dark text-lg"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section>
    <div class="container pb-5">
        <div class="row py-5">

            <div class="col-md-6 title-cg">

                    <p class="h1 font-weight-bold">Objetivos de desenvolvimento sustentável</p>
                    
                    <div class="row">
                        <p class="h5 mt-3 ml-3" style="color: #BDBDBD;">
                            Adotada durante a Cúpula das Nações Unidas sobre o Desenvolvimento Sustentável, 
                            realizada pela ONU, a Agenda de Objetivos de Desenvolvimento Sustentável (ODS) é 
                            composta por 17 objetivos e 169 metas a serem atingidos pelos países-membros até 2030. 
                            A Agenda foi construída levando em consideração as diferentes realidades, capacidades e 
                            níveis de desenvolvimento das nações.Para conhecer todas as ODS clique na imagem abaixo!
                        </p>
                    </div>
            </div>

            <div class="col-md-6 justify-content-center">
                <img class="w-100 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                src="https://i.ibb.co/2FXXyJD/ods.png">
            </div>

        </div>
    </div>
</section>
</main>

<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>

<footer>
    <?php include_once('./includes/footer.php'); include('includes/header.php');?>
</footer>