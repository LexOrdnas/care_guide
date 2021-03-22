<?php session_start(); include_once "./includes/header.php"; ?>

<div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<div class="small-spacing"></div>

<main>
    <section>
        <div class="container pt-5">
            <div class="row py-4">
                <div class="col-md-6 title-cg">
                    <p class="h1 font-weight-bold mb-3 ">
                        Encontre Pessoas e grupos em São Bernardo do Campo !
                    </p>
                    <div class="justify-content-initial">
                        <p class="h5">Encontre depoimentos, palestras, artigos e muito mais de 
                                pessoas que já passaram pelo que desafio de largar as drogas.</p>
                    </div>

                    <div class="col-md-6 justify-content-center">
                        <img class="w-100 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                        src="https://media.giphy.com/media/xT0xeOGAGEAuQK1ujm/giphy.gif">
                    </div>

                </div>

                <div class="col-md-6 justify-content-center">
                    <img class="w-75 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                    src="https://i.ibb.co/M81dL6C/undraw-team-ih79.png">
                </div>
                
            </div>
        </div>
    </section>

    <?php include_once('./includes/cards.php') ?>

    <?php include_once('./includes/whatsapp-floating-button.php') ?>

</main>

<div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>

<?php include_once "./includes/footer.php" ?>