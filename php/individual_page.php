<!-- Inicio do Cabeçalho -->
<header>
    <?php session_start(); include_once('includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->

<!-- Inicio do Conteúdo Principal -->
<main>

    <!-- Inicio do Jumbotron de Imagem -->
    <div class="jumbotron jumbotron-fluid bg-sbc">
        <div class="container bg-banner"></div>
    </div>
    <!-- Fim do Jumbotron de Imagem -->

    <!-- Inicio de mini galeria de imagens -->
    <div class="container">
        <div class="row">
            <img class="mini-img" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg"> 
            <img class="mini-img" src="http://c2.staticflickr.com/8/7218/7209301894_c99d3a33c2_h.jpg"> 
            <img class="mini-img" src="http://c2.staticflickr.com/8/7231/6947093326_df216540ff_b.jpg"> 
            <img class="mini-img" src="http://c1.staticflickr.com/9/8788/17367410309_78abb9e5b6_b.jpg">
            <img class="mini-img" src="http://c2.staticflickr.com/6/5814/20700286354_762c19bd3b_b.jpg">
        </div>
    </div>
    <!-- Fim de mini galeria de imagens -->

    <!-- Inicio da sessão de Informações Gerais -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6 title-cg">
                    
                    <p class="h1 font-weight-bold">Secretária da Saúde de São Bernardo do Campo</p>
                        
                        <div class="h6 mt-1 ml-4 text-card-cg mt-4">
                            <p>Endereço:</p>
                            <p>Rua João Pessoa, 59</p>
                            <p>CEP 09715-000</p>
                            <p>Parque Centro</p>
                            <p>Tel.: 4125-1300</p>
                        </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Fim da sessão de Informações Gerais -->
 
    <!-- Inicio da sessão de Informações de Contato -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 title-cg">
                    <p class="h3 mb-3 font-weight-bold">Informações de Contato</p>
                    
                    <div class="row float-left">
                        
                        <button 
                            type="button" 
                            class="btn btn-outline-success p-4 px-2 ml-2 mt-3 font-weight-bold">
                            <i class="far fa-clock fa-2x mb-3 mr-3 float-left px-2"></i>
                            <p class="h4 float-left">
                                Segunda á Sexta<br/>8H ás 18H
                            </p>
                        </button>
                        
                        <button 
                            type="button" 
                            class="btn btn-outline-success p-4 p mt-3 ml-2 font-weight-bold">
                            <i class="fas fa-exclamation fa-2x mb-3 mr-3 float-left px-2"></i>
                            <p class="h4 float-left">
                                Não atendemos<br/>fim de semana
                            </p>
                        </button>
                        
                        <a href="https://www.google.com.br/maps/place/Secretaria+da+Sa%C3%BAde+de+S%C3%A3o+Bernardo+do+Campo/@-23.7072111,-46.5509592,17z/data=!4m5!3m4!1s0x94ce42299f078989:0xdabfc5ffe8a524b6!8m2!3d-23.707216!4d-46.5487705?hl=pt-BR">
                        <img 
                            class="w-25 mt-2" 
                            src="https://i.ibb.co/wJNySVM/google-maps.png" 
                            title="Ver rotas no Google Maps">
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Fim da sessão de Informações de Contato -->

    <!-- Inicio do Botão do Whatsapp -->
    <?php include_once('./includes/whatsapp-floating-button.php') ?>
      <!-- Fim do Botão do Whatsapp -->

</main>
<!-- Fim do Conteúdo Principal -->

<!-- Inicio do Espaçador -->
<div class="medium-spacing"></div>
<!-- Fim do Espaçador -->

<?php include_once('includes/footer.php'); ?>

