<?php 
    require_once "./actions/db_connect.php";
    session_start();

    // Se estiver recebendo uma resposta id...
    if (isset($_SESSION['id_adm']) && $_SESSION['id_adm'] <> "") {
        // Incluindo o documento x
        include_once "./includes/header.php";
        // Atribuindo na variável $id o que estiver na variável id dentro da $_SESSION
        $id = $_SESSION['id_adm'];
        // Atribuindo na variável $sql o comando correspondente...
        $sql = "SELECT * FROM user_adm = $id;";
        // Atribuindo na variável $resultado o comando executado que estava
        // na variável $sql na conexão onde está o BD
        $result = mysqli_query($connect, $sql);
?>

<?php
    // 'sql213.epizy.com', 'epiz_27132883', 'oHp69wog3MB', 'epiz_27132883_care_guide'
    $mysqli = new mysqli('localhost', 'root', '', 'care_guide') or die(mysqli_error($mysqli));
    $result = $mysqli -> query("SELECT * FROM user_adm") or die($mysqli -> error);       
?>

<!-- Inicio do COnteúdo -->
<main>

    <!-- Inicio do Espaçador -->
    <div class="long-spacing"></div>
    <!-- Fim do Espaçador -->
    
    <!-- Inicio da Sessão de Usuário -->
    <section>

            <!-- Inicio da Sessão de Entrada -->
            <div class="container-fluid d-flex justify-content-center">
                <div class="row pt-6">
                    <div class="col-md-6 title-cg">
                        
                        <p class="h1 font-weight-bold">Seja bem-vindo,
                            <?php 
                                $row = $result -> fetch_assoc();
                                echo $_SESSION['user_name']; 
                            ?>
                        </p>
                        <p class="h1 mb-5 font-weight-bold">o que deseja fazer?</p>
                        
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
                            
                        <!-- Botão de Instituições e Programas -->
                            <!--
                            <a href="./locator.php"><button type="button" class="btn btn-outline-success p-4 px-2 mt-4 ml-3 font-weight-bold">
                            <i class="fas fa-user-edit fa-2x mb-3 float-center px-2"></i>
                            <p class="h4">Sua jorna<br/>personalizada<br/><span class="text-card-cg">Em desenvolvimento</span></p></button></a>
                            -->
                        </div>
                    </div>
                    <!-- Imagem -->
                    <div class="col-md-6 ">
                        <img class="w-100 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                        src="https://media.giphy.com/media/5xaOcLIrV8MOnVxEABa/giphy.gif">
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
    include_once "./includes/footer.php";

    // Senão faça isso...
    } else {
        // Redirecionar para o local X após a execução de todas as ações anteriores
        header("Location: ../login.php");
    }
?>