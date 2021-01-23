<!-- Inicio do Cabeçalho -->
<header>
    <?php include_once('includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->

<!-- Inicio do Espaçador -->
<div class="long-spacing d-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Conteúdo Principal -->
<main>
    <!-- Inicio da Sessão de Cadastro -->
    <div class="container-fluid py-5 mt-5">

        <div class="row d-flex py-5 mt-5 justify-content-around">

            <!-- Inicio do Formulário de Cadastro -->
            <div class="col-md-4 col-lg-3 ml-lg-5 ">

                <form method="POST" action="./actions/register_user.php">

                    <!-- Titulo do Formulário de Cadastro -->
                    <h2 class="text-center title-cg mb-5">Cadastro de Usuário</h2>
                        
                        <!-- Campo de Nome-->
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control input-lg" placeholder="Primeiro nome" maxlength="30">
                        </div>

                        <!-- Campo de Nome-->
                        <div class="form-group">
                            <input type="text" name="nickname" class="form-control input-lg" placeholder="Sobrenome" maxlength="30">
                        </div>
                        
                        <!-- Campo de Usuario -->
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-lg" placeholder="E-mail" maxlength="40">
                        </div>
                        
                        <!-- Campo de Senha -->
                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-lg" placeholder="Senha" 
                            maxlength="15" autocomplete="new-password">
                            
                            <!-- Link para a Pagina de Login -->
                            <a class="float-right mt-2 text-card-cg" href="login.php">Já possui uma conta ?</a>
                        </div>
                        
                        <!-- Botão de Cadastro -->
                        <div>
                            <button class="btn-lg btn btn-outline-success mb-5 mt-4" name="register" type="submit">Cadastrar</button>
                        </div>

                </form>
                
            </div>
            <!-- Fim do Formulário de Cadastro -->
            
            <!-- Inicio da Imagem da Sessão -->
            <div class="col-md-3 d-none d-lg-block justify-content-center">
                <img class="w-75" 
                src="https://media.giphy.com/media/lNG8ZbSxsj9QcNikGJ/giphy.gif">
            </div>
                <!-- Fim da Imagem da Sessão -->

            <!-- Inicio do Formulário de Cadastro -->
            <div class="col-md-4 col-lg-3 mr-lg-5">

                <form method="POST" action="./actions/register_user_adm.php">

                    <!-- Titulo do Formulário de Cadastro -->
                    <h2 class="text-center title-cg mb-5">Cadastro de Administrador</h2>
                        
                        <!-- Campo de Usuario -->
                        <div class="form-group">
                            <input type="text" name="user_name" class="form-control input-lg" placeholder="Nome de usuário" maxlength="40">
                        </div>

                        <!-- Campo de Usuario -->
                        <div class="form-group">
                            <input type="email" name="email_adm" class="form-control input-lg" placeholder="E-mail" maxlength="40">
                        </div>

                        <!-- Campo de Senha -->
                        <div class="form-group">
                            <input type="password" name="access_code" class="form-control input-lg" placeholder="Código de acesso" 
                            maxlength="15" autocomplete="new-password">
                        </div>
                        
                        <!-- Campo de Senha -->
                        <div class="form-group">
                            <input type="password" name="password_adm" class="form-control input-lg" placeholder="Senha" 
                            maxlength="15" autocomplete="new-password">
                                
                            <!-- Link para a Pagina de Login -->
                            <a class="float-right mt-2 text-card-cg" href="login_adm.php">Já possui uma conta ?</a>
                        </div>
                        
                        <!-- Botão de Cadastro -->
                        <div>
                            <button class="btn-lg btn btn-outline-success mb-5 mt-4" name="register_adm" type="submit">Cadastrar</button>
                        </div>

                </form>
                
            </div>
            <!-- Fim do Formulário de Cadastro -->

        </div>
    </div>
    <!-- Fim da Sessão de Cadastro -->

</main>
<!-- Fim do Conteúdo Principal -->

<!-- Inicio do Espaçador -->
<div class="long-spacing d-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Rodapé -->
<footer>
    <?php include_once('includes/footer.php'); ?>
</footer>
<!-- Fim do Rodapé -->