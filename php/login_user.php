<?php 
    session_start();
    if (!isset($_SESSION['id_usuario'])) {  //se não está definido o id do usuario na sessao
        header("Location: login.php");
        exit; //die() 
      }
   
        // Incluindo o documento x
        include_once "./includes/header.php";
        
        // Atribuindo na variável $id o que estiver na variável id dentro da $_SESSION
        $id = $_SESSION['id_usuario'];

        // Atribuindo na variável $sql o comando correspondente...
        $sql = "SELECT * FROM usuarios = $id;";

?>

<!-- Inicio do COnteúdo -->
<main>

    <!-- Inicio do Espaçador -->
    <div class="long-spacing"></div>
    <!-- Fim do Espaçador -->
    
    <!-- Inicio da Sessão de Usuário -->
    <section>

            <!-- Inicio da Sessão de Entrada -->
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-6 title-cg">
                        
                        <p class="h1 font-weight-bold">Seja bem-vindo
                        </p>
                        <p class="h1 mb-4 font-weight-bold">o que deseja fazer?</p>
                        
                        <div class="row">
                            
                            <!-- Botão de Encontrar Referências -->
                            <a href="./testimonial.php"><button type="button" class="btn btn-outline-success p-4 px-2 mt-2 ml-3 mr-2 font-weight-bold">
                            <i class="fas fa-users fa-2x mb-3 float-center px-2"></i>
                            <p class="h4">Encontrar <br/>Depoimentos</p></button></a>

                            <!-- Botão de Localizar Projetos -->
                            <a href="./locator.php"><button type="button" class="btn btn-outline-success p-4 mt-2 ml-3 px-2 mr-2 font-weight-bold">
                            <i class="fas fa-map fa-2x mb-3 float-center px-2"></i>
                            <p class="h4 px-1">Localizar <br/>Projetos</p></button></a>
                                
                        </div>
                    </div>

                    <!-- Imagem -->
                    <div class="col-md-6">
                        <!-- Inicio da Imagem da Sessão -->
                        <img class="w-75 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                        src="https://media.giphy.com/media/5xaOcLIrV8MOnVxEABa/giphy.gif">
                <!-- Fim da Imagem da Sessão -->
                    </div>

                </div>
            </div>
            
            <!-- Fim da Sessão de Entrada -->            
        
    </section>

</main>
<!-- Fim do Conteúdo -->

<!-- Inicio do Espaçador -->
<div class="long-spacing"></div>
<!-- Fim do Espaçador -->
 
<?php

    // Incluindo o documento x
    include_once "./includes/footer.php";

    // Senão faça isso...
    //} else {
        // Redirecionar para o local X após a execução de todas as ações anteriores
        //header("Location: ../login.php");
    //}

?>