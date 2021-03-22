<header>
    <?php 
        include_once('includes/header.php');

        require_once 'actions/usuarios.php';
	    $u = new Usuario;
     ?>
</header>

<div class="medium-spacing d-none d-lg-block"></div>

<main>
    <div class="container-fluid py-5 mt-5">
        <div class="row d-flex py-5 mt-5 justify-content-around">
            <div class="col-md-4 col-lg-3 ml-lg-5 ">
                <form method="POST">
                    <!-- Titulo do Formulário de Cadastro -->
                    <h2 class="text-center title-cg mb-5">Cadastro de Usuário</h2>
                        <!-- Campo de Nome-->
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="nome" 
                                class="form-control input-lg" 
                                placeholder="Primeiro nome" 
                                maxlength="30"
                                autofocus
                            >
                        </div>

                        <!-- Campo Telefone -->
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="telefone" 
                                class="form-control input-lg" 
                                placeholder="Telefone" 
                                maxlength="30"
                            >
                        </div>
                        
                        <!-- Campo de Usuario -->
                        <div class="form-group">
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control input-lg" 
                                placeholder="E-mail" 
                                maxlength="40"
                            >
                        </div>

                        <!-- Campo de Nome-->
                        <div class="form-group">
                            <input 
                                type="password" 
                                name="senha" 
                                class="form-control input-lg" 
                                placeholder="Senha"
                                minlength="8" 
                                maxlength="30"
                                pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$])[a-zA-Z0-9@#$]{8,50}$"
                            >
                            <small class="text-secondary p-2">
                                Um mínimo de 8 caracteres, recomendado: letras, numeros e caracteres especiais
                            </small>
                        </div>
                        
                        <!-- Campo de Senha -->
                        <div class="form-group">
                            <input 
                                type="password" 
                                name="confSenha" 
                                class="form-control input-lg" 
                                placeholder="Confirmar Senha" 
                                minlength="8"
                                maxlength="30" 
                                autocomplete="new-password"
                                pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$])[a-zA-Z0-9@#$]{8,50}$"
                            >
                            <!-- Link para a Pagina de Login -->
                            <a 
                                class="float-right mt-2 text-card-cg" 
                                href="login.php">
                                    Já possui uma conta ?
                            </a>
                        </div>
                        
                        <div>
                            <button class="btn-lg btn btn-outline-success mb-5 mt-4" type="submit">
                                Cadastrar
                            </button>
                        </div>

                </form>
                
            </div>

            <div class="col-md-3 d-none d-lg-block justify-content-center">
                <img class="w-75" 
                src="https://media.giphy.com/media/lNG8ZbSxsj9QcNikGJ/giphy.gif">
            </div>
        </div>
    </div>

    <?php
    //verificar se clicou no botao
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']); //addslashes evita codigos maliciosos.
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes( $_POST['confSenha']);
        //verificando se todos os campos nao estao vazios
        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u -> conectar(
                "care_guide", // epiz_27132883_care_guide
                "localhost",  // sql213.epizy.com
                "root",       // epiz_27132883
                ""            // oHp69wog3MB
            );
            if ($u -> msgErro == "") { //conectado normalmente;
                if ($senha == $confirmarSenha) {
                    if ($u -> cadastrar($nome, $telefone, $email, $senha)) {
                        ?>
                        <div class="alert alert-success text-center mx-5" role="alert">
                            <strong>Cadastrado com sucesso!</strong>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-warning text-center mx-5" role="alert">
                            <strong>Email já cadastrado,</strong> retorne e faça login.
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-danger text-center mx-5" role="alert">
                        <strong>Senhas não conferem!</strong>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="msg_erro">
                    <?php echo "Erro: ".$u -> msgErro;?>
                </div>
                <?php
                }
            } else {
                ?>
                <div class="alert alert-warning text-center mx-5" role="alert">
                    <strong>Preencha todos os campos!</strong>
                </div>
                <?php
            }
    }
?>
</main>

<div class="long-spacing d-none d-lg-block"></div>

<footer>
    <?php include_once('includes/footer.php'); ?>
</footer>