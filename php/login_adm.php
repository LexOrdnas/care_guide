<!-- Inicio do Cabeçalho -->
<header>
    <?php include_once('./includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->

<!-- Inicio do Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Conteúdo Principal -->
<main>
    
    <!-- Inicio da Sessão de Login -->
    <div class="container py-5 mt-5 mb-5">
        <div class="row py-5">
            <!-- Inicio da Imagem -->
            <div class="col-md-6">
                <img class="w-100 ml-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/F6dB64f/admin.png">
            </div>
            <!-- Fim da Imagem -->
            <div class="col-md-5 ml-5 mr-5">
                
                <!-- Inicio do Formulário de Login -->
                <form method="POST" action="./actions/login_user_adm.php">
                    
                    <!-- Titulo do Formulário -->
                    <h2 class="text-center title-cg mb-5">Entrar como Administrador</h2>
                    
                    <!-- Campo de Usuario -->
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Usuário" name="email_adm">
                    </div>

                    <!-- Campo de Senha -->
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Código de acesso" name="access_code">
                    </div>

                    <!-- Campo de Senha -->
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Senha" name="password_adm">
                        <div class="justify-content-between"> 
                            <a class="float-right mt-2 text-card-cg" href="register.php"><small> Ainda não tem uma conta?</small></a>
                        </div>
                    </div>

                    <!-- Botão Entrar -->
                    <div>
                        <button class="btn-lg btn btn-outline-success mb-5 mt-4" type="submit" name="login_user_adm.php">Entrar</button>
                    </div>

                </form>
                <!-- Fim do Formulário de Login -->
            </div>


        </div>
    </div>
    <!-- Fim da Sessão de Login -->

</main>
<!-- Fim do Conteúdo Principal -->

<!-- Inicio do Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Rodapé -->
<footer>
    <?php include_once('./includes/footer.php'); ?>
</footer>
<!-- Fim do Rodapé -->