<!-- Inicio do Cabeçalho -->
<header>
    <?php include_once('includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->

<!-- Inicio do COnteúdo -->
<main>
    <!-- Inicio da Sessão -->
    <section class="bg-menu-cg">
        <div class="container">
            <div class="row py-5 mt-5">
                
                <!-- Inicio da Imagem -->
                <div class="col-md-3">
                    <img class="w-75 mt-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/sgbw33P/map.png">
                </div>
                <!-- Fim da Imagem -->

                <!-- Inicio do Texto -->
                <div class="col-md-9">
                    <p class="h2 mb-2 mt-5 title-cg-w"><b>Procure por Instituições ou programas de tratamento.</b></p>
                    <p class="text-cg-w">São Bernardo do Campo</p>
                </div>
                <!-- Fim do Texto -->

            </div>
        </div>
    </section>
    <!-- Fim da Sessão -->

    <!-- Inicio do Mapa -->
    <div id="mapid" class="container-fluid"></div> 
    <!-- Fim do Mapa -->

    <div class="container d-flex justify-content-center">
        <a href="./relacao_iner_join.php">
          <button class="btn btn-outline-success font-weight-bold">Cadastrar +</button>
        </a>
    </div>

</main>
<!-- Fim do Conteúdo -->

<!-- Inicio do Rodapé -->
<footer>
    <?php include_once('includes/footer.php'); ?>
</footer>
<!-- Fim do Rodapé -->
