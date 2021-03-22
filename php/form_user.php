<?php 
    session_start();

    if (isset($_SESSION['id'])) {
        include_once "./includes/header.php";
?>

<!-- Inicio do Espaçador -->
<div class="long-spacing"></div> 
<!-- Fim do Espaçador -->

<!-- Inicio do Conteúdo Principal -->
<main>
    <!-- Inicio do Formulário de Instituição e Programas -->
    <div class="container py-2 mt-5 mb-5">
        <div class="row ">
            <div class="col-md-5 col-ms-8 mx-auto">
                
                <form method="POST" action="./actions/register_post.php">
                    <h2 class="h3 text-center title-cg mb-5">Instituição e Programas</h2>
                    
                    <!-- Campo Nome -->
                    <div class="form-group mb-4">
                        <input class="form-control" type="text" placeholder="Nome" name="title">
                    </div>
                    
                    <!-- Campo Sobre -->
                    <div class="form-group mb-4">
                        <textarea class="form-control" placeholder="Sobre" name="content"></textarea>
                    </div>
                    
                    <!-- Campo Whatsapp -->
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Whatsapp" name="whatsapp">
                    </div>
                    
                    <!-- Botão Salvar -->
                    <div>
                        <button class="btn btn-lg btn-success mb-5 mt-4" type="submit" name="comment">
                            Salvar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Fim do Formulário de Instituição e Programas -->
</main>
<!-- Fim do Conteúdo Principal -->

<!-- Inicio do Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<div class="medium-spacing"></div>
<!-- Fim do Espaçador -->

<?php
    include_once "./includes/footer.php";

    } else {
        header("Location: login.php");
    }
?>