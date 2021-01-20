<?php

    // Requirindo o arquio...
    require_once "db_connect.php";

    // Se estiver recebendo uma resposta cadastrar...
    if (isset($_POST['register_users_adm'])) {

        // Pegue os valores e coloque nas variáveis X
        $email = $_POST['email_adm'];
        $access_code = $_POST['access_code'];
        $password = $_POST['password_adm'];

        // Atribuindo na variável $sql o comando = Inserir na tabela usuarios os valores...
        $sql = "INSERT INTO user_adm VALUES (null, '$email', '$access_code', '$password');";

        // Executando o comando que está na variável $sql na conexão onde está o BD
        mysqli_query($connect, $sql);

        // Redirecionar para o local X após a execução de todas as ações anteriores
        header("Location: ../login_user_adm.php");
    }

?>