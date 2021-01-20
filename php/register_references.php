<?php 

    // Iniciar Sessão
    session_start();

    if(isset($_SESSION['id']) && $_SESSION['id'] <> "") {
        include_once "includes/header.html";
?>

<!-- Inicio do Espaçador -->
<div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Conteúdo Principal -->
<main>

    <!--  -->
    <div class="container py-5 mt-5 mb-5">
        <div class="row py-5">
            <div class="col-md-5 ml-5 mr-5">

                <!-- Inicio do Formulário de Card -->
                <form method="POST" action="./actions/register_card.php">
                    <h2 class="text-center title-cg mb-5">Criar Card</h2>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Cargo" name="cargo"/>
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" type="text" placeholder="Sobre" name="sobre"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Facebook" name="facebook"/>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Instagram" name="instagram"/>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Youtube" name="youtube"/>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Site" name="site"/>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="image" placeholder="Imagem" name="imagem"/>
                    </div>
                    
                    <div>
                        <button class="btn btn-lg btn-success mb-5 mt-4" type="submit" name="cadastrar">Cadastrar</button>
                    </div>
                </form>
                <!-- Fim do Formulário de Card -->
            </div>

            <div class="col-md-6">
                <img class="w-75 ml-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/WsznfDG/login.png">
            </div>
            
        </div>
    </div>

    <section>
        <div class="container py-5">
        <div class="row py-5">
                <div class="col-md-6">
                    <p class="display-4 font-weight-bold title-cg">Encontre Pessoas e grupos em São Bernardo do Campo !</p>
                        <div class="justify-content-initial">
                            <p class="text-cg">Encontre depoimentos, palestras, artigos e muito mais de pessoas que já passaram pelo que desafio de largar as drogas.</p>
                        </div>
                </div>
                <div class="col-md-6 justify-content-center">
                    <img class="w-75 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/K9dyJZg/team.png">
                </div>
            </div>
        </div>
    </section>

    <?php include_once('includes/cards.php') ?>

</main>
<!-- Fim do Conteúdo -->

<?php

    // Incluindo o documento x
    include_once "includes/footer.html";
    
    // Senão faça isso...
    } else {
        // Redirecionar para o local X após a execução de todas as ações anteriores
        header("Location: login.php");

    }
?>