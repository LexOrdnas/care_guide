 <!-- Inicio do Formulário de Cadastro -->
 <div class="col-md-4 col-lg-3 mr-lg-5">

<form method="POST" action="./actions/register_user_adm.php">

    <!-- Titulo do Formulário de Cadastro -->
    <h2 class="text-center title-cg mb-5">Cadastro de Administrador</h2>
        
        <!-- Campo de Usuario -->
        <div class="form-group">
            <input 
                type="text" 
                name="user_name" 
                class="form-control input-lg" 
                placeholder="Nome de usuário" 
                maxlength="40"
            >
        </div>

        <!-- Campo de Usuario -->
        <div class="form-group">
            <input 
                type="email" 
                name="email_adm" 
                class="form-control input-lg" 
                placeholder="E-mail" 
                maxlength="40"
            >
        </div>

        <!-- Campo de Senha -->
        <div class="form-group">
            <input 
                type="password" 
                name="access_code" 
                class="form-control input-lg" 
                placeholder="Código de acesso" 
                maxlength="15" 
                autocomplete="new-password"
            >
        </div>
        
        <!-- Campo de Senha -->
        <div class="form-group">
            <input 
                type="password" 
                name="password_adm" 
                class="form-control input-lg" 
                placeholder="Senha" 
                maxlength="15" 
                autocomplete="new-password"
            >

            <a 
                class="float-right mt-2 text-card-cg" 
                href="login_adm.php">
                    Já possui uma conta ?
            </a>
        </div>

        <div>
            <button 
                class="btn-lg btn btn-outline-success mb-5 mt-4" 
                name="register_adm" 
                type="submit">
                Cadastrar
            </button>
        </div>

</form>

</div>
<!-- Fim do Formulário de Cadastro -->