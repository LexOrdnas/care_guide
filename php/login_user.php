<?php 
    session_start();
    if (!isset($_SESSION['id_usuario'])) {  //se não está definido o id do usuario na sessão...
        header("Location: login.php");
        exit; // ou die() 
    }
    include_once "./includes/header.php";
    // Atribuindo na variável $id o que estiver na variável id dentro da $_SESSION
    $id = $_SESSION['id_usuario'];
    $nome = $_SESSION['nome']
?>
<main>
    <div class="long-spacing"></div>
    <!-- Inicio da Sessão de Usuário -->
    <section>
        <!-- Inicio da Sessão de Entrada -->
        <div class="container-fluid d-flex justify-content-center">
            <div class="row pt-6">
                <div class="col-md-6 title-cg">
                    <p class="h1 font-weight-bold">Seja bem-vindo <?php echo $nome ?></p>
                    <p class="h1 mb-4 font-weight-bold">o que deseja fazer?</p>
                    <div class="row">
                            
                        <a href="./testimonial.php">
                        <button 
                            type="button" 
                            class="btn btn-outline-success p-4 px-2 mt-2 ml-3 mr-2 font-weight-bold">
                        <i class="fas fa-users fa-2x mb-3 float-center px-2"></i>
                        <p class="h4">Encontrar <br/>Depoimentos</p></button></a>

                        <!-- Botão de Localizar Projetos -->
                        <a href="./locator.php">
                        <button 
                            type="button" 
                            class="btn btn-outline-success p-4 mt-2 ml-3 px-2 mr-2 font-weight-bold">
                        <i class="fas fa-map fa-2x mb-3 float-center px-2"></i>
                        <p class="h4 px-1">Localizar <br/>Projetos</p></button></a>

                        <!-- Botão de Instituições e Programas -->
                        <a href="./join.php">
                        <button 
                            type="button" 
                            class="btn btn-outline-success p-4 px-2 mt-2 ml-3 font-weight-bold">
                        <i class="fas fa-warehouse fa-2x mb-3 float-center px-2"></i>
                        <p class="h4">Instituições e<br/>Programas</p></button></a>
                        
                        <!-- Botão de Instituições e Programas -->
                        <a href="./locator.php">
                        <button 
                            type="button" 
                            class="btn btn-outline-success p-4 px-2 mt-4 ml-3 font-weight-bold">
                        <i class="fas fa-handshake fa-2x mb-3 float-center px-2"></i>
                        <p class="h4">Agendamento de<br/>Reuniões</p></button></a>
                    </div>
                </div>
                <!-- Imagem -->
                <div class="col-md-6">
                    <!-- Inicio da Imagem da Sessão -->
                    <img class="w-75 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                    src="https://media.giphy.com/media/5xaOcLIrV8MOnVxEABa/giphy.gif">
                </div>
                <!-- Fim da Imagem -->
            </div>
        </div>
        <!-- Fim da Sessão de Entrada -->
    </section>
    <div class="long-spacing"></div>
</main>
<?php include_once "./includes/footer.php"; ?>