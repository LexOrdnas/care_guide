<?php 
    
    // Requirindo o arquio...
    require_once "./actions/db_connect.php";

    // Iniciar Sessão
    session_start();

    // Se estiver recebendo uma resposta id...
    if (isset($_SESSION['id']) && $_SESSION['id'] <> "") {

        // Incluindo o documento x
        include_once "./includes/header.php";

        // Atribuindo na variável $id o que estiver na variável id dentro da $_SESSION
        $id = $_SESSION['id'];

        // Atribuindo na variável $sql o comando correspondente...
        $sql = "SELECT * FROM posts WHERE user = $id;";

        // Atribuindo na variável $resultado o comando executado que estava
        // na variável $sql na conexão onde está o BD
        $result = mysqli_query($connect, $sql);

?>

<!-- Inicio do COnteúdo -->
<main>

    <!-- Inicio do Espaçador -->
    <div class="small-spacing"></div>
    <!-- Fim do Espaçador -->
    
    <!-- Inicio da Sessão de Usuário -->
    <section>

            <!-- Inicio da Sessão de Entrada -->
            <div class="container mb-4">
                <div class="row pt-5">
                    <div class="col-md-6">

                        <p class="h3 title-cg font-weight-bold">Seja bem-vindo,</p>
                        <p class="h3 mb-4 title-cg font-weight-bold">o que deseja fazer?</p>
                        
                        <div class="row">
                            
                            <!-- Botão de Encontrar Referências -->
                            <a href="./php/reference.php"><button type="button" class="btn btn-outline-success p-4 px-2 mt-2 ml-3 font-weight-bold">
                            <i class="fas fa-users fa-2x mb-3 float-center px-2"></i>
                            <p class="h4">Encontrar <br/>Referências</p></button></a>

                            <!-- Botão de Localizar Projetos -->
                            <a href="./php/locator.php"><button type="button" class="btn btn-outline-success p-4 mt-2 ml-3 px-2 font-weight-bold">
                            <i class="fas fa-map fa-2x mb-3 float-center px-2"></i>
                            <p class="h4 px-1">Localizar <br/>Projetos</p></button></a>

                            <!-- Botão de Instituições e Programas -->
                            <a href="http://localhost:3333"><button type="button" class="btn btn-outline-success p-4 px-2 mt-2 ml-3 font-weight-bold">
                            <i class="fas fa-warehouse fa-2x mb-3 float-center px-2"></i>
                            <p class="h4">Instituições e<br/>Programas</p></button></a>
                            
                        </div>
                    </div>

                    <!-- Imagem -->
                    <div class="col-md-6">
                        <img class="w-75 ml-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                        src="https://i.ibb.co/grKVcNV/welcome.png">
                    </div>

                </div>
            </div>
            <!-- Fim da Sessão de Entrada -->

            <!-- Inicio de Sessão de Texto -->
            <div class="container mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <p class="h6 text-card-cg">Aqui você pode marcar instituições e programas de tratamento relacionado ao uso de 
                            drogas no botão "Instituições e Programas", alem disso você pode visualizar o que postou nesta pagina na tabela abaixo.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Fim de Sessão de Texto -->
            
            <!-- Inicio da Sessão de Exibição -->
            <div class="container">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <!-- Inicio da Tabela -->
                        <table class="table table-hover">
                        <h3 class="h3 text-cg mb-4">Instituições e Programas</h3>

                        <tr class="bg-success text-white">
                            <th>Nome</th>
                            <th>Sobre</th>
                            <th>Whatsapp</th>
                        </tr>

                        <!-- Inicio da condição de repetição de linhas -->
                        <?php
                        // Atribuindo na variável $row o comando SQL da variável $resultado
                        // Enquanto estiver recebendo algum valor da tabela posts ele ira repetir a tabela a abaixo...
                        while($row = mysqli_fetch_assoc($result)) { 
                        ?>

                        <!-- Inicio da estrutura da linha da tabela -->
                        <tr class="text-card-cg h6">
                            <td>
                                <?php echo $row['title'] ?>
                            </td>
                            <td>
                                <?php echo $row['content'] ?>
                            </td>
                            <td>
                                <?php echo $row['whatsapp'] ?>
                            </td>
                        </tr>
                        <!-- Fim da estrutura da linha da tabela -->

                        <?php 
                        // Fim da condição WHILE
                        } 
                        ?>
                        <!-- Fim da condição de repetição de linhas -->
                        </table>
                        <!-- Fim da tabela -->
                    </div>
                </div>
            </div>
            <!-- Fim da Sessão de Exibição -->

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
    } else {
        // Redirecionar para o local X após a execução de todas as ações anteriores
        header("Location: ../login.php");
    }

?>