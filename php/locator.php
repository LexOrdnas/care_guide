<header>
    <?php session_start(); include_once('includes/header.php'); ?>
</header>

<main>
    <section class="bg-menu-cg">
        <div class="container">
            <div class="row py-5 mt-5">
                
                <div class="col-md-3">
                    <img 
                        class="w-75 mt-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                        src="https://i.ibb.co/sgbw33P/map.png">
                </div>

                <div class="col-md-9">
                    <p class="h2 mb-2 mt-5 title-cg-w">
                        <b>Procure por Instituições ou programas de tratamento.</b>
                    </p>
                    <p class="text-cg-w">São Bernardo do Campo</p>
                </div>

                <div class="container d-flex justify-content-center">
                    <a href="./show_project.php">
                    <button class="btn btn-outline-light btn-lg font-weight-bold">
                        Cadastrar +
                    </button>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Inicio do Mapa -->
    <div id="mapid" class="container-fluid"></div> 
    <!-- Fim do Mapa -->

</main>

<footer>
    <?php include_once('includes/footer.php'); ?>
</footer>