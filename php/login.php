<?php 
    session_start();
    require_once 'actions/usuarios.php';
    $u = new Usuario;
?>
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<main>
    <!-- Inicio da Sessão de Login -->
    <div class="container py-5 mt-5 d-flex justify-content-center">
        <div class="row py-5">
            <div class="col-md-10 col-lg-5 ml-5 mr-5">
                <!-- Inicio do Formulário de Login -->
                <form method="POST">
                    <!-- Titulo do Formulário -->
                    <h2 class="text-center title-cg mb-5">Entrar</h2>
                    <!-- Campo de Usuario -->
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="E-mail" name="email">
                    </div>
                    <!-- Campo de Senha -->
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Senha" name="senha">
                        <div class="justify-content-between"> 
                            <a class="float-right mt-2 text-card-cg" href="register.php">
                                <small>Ainda não tem uma conta?</small>
                            </a>
                        </div>
                    </div>
                    <!-- Botão Entrar -->
                    <div class="d-flex mt-5">
                        <button class="btn btn-lg btn-outline-success mr-3" type="submit">
                            Entrar
                        </button>
                    </div>
                </form>
                <!-- Fim do Formulário de Login -->
            </div>
            <!-- Inicio da Imagem -->
            <div class="col-md-6">
                <img class="w-100 ml-5 d-none d-lg-block" src="https://i.ibb.co/frYhSK7/Login-re-4vu2.png">
            </div>
            <!-- Fim da Imagem -->
        </div>
    </div>
    <!-- Fim da Sessão de Login -->
    <?php
		if(isset($_POST['email'])) {
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);
			//verificando se todos os campos nao estao vazios
			if(!empty($email) && !empty($senha)) {
                // "epiz_27132883_care_guide", "sql213.epizy.com", "epiz_27132883", "oHp69wog3MB"
				$u -> conectar ( "care_guide", "localhost", "root",	"" ); //conectando ao banco
				if ($u -> msgErro == "") { // caso a mensagem esteja vazia, login ok
					if ($u -> logar($email, $senha)) {
                        echo "<script> window.location.href='login_user.php' </script>";
					} else {
						?>
                        <div class="alert alert-danger text-center mx-5" role="alert">
                            <strong>Email e/ou senha estão incorretos!</strong>
                        </div>
						<?php
					}
				} else {
					?>
					<div class="msg_erro">
						<?php echo "Erro: ".$u -> msgErro; ?>
					</div>
					<?php
				}
			} else {
			?>
                <div class="alert alert-danger text-center mx-5" role="alert">
                    <strong>Preencha todos os campos!</strong>
                </div>
				<?php
			}
		}
	?>
</main>
<!-- Fim do Conteúdo Principal -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<footer>
    <?php include_once('./includes/footer.php'); include('includes/header.php');?>
</footer>