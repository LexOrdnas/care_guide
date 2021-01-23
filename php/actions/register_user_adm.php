<?php

    // Requirindo o arquio...
    require_once "db_connect.php";

    // Se estiver recebendo uma resposta cadastrar...
    if (isset($_POST['register_adm'])) {

        // Pegue os valores e coloque nas variáveis X
        $user_name = $_POST['user_name'];
        $email = $_POST['email_adm'];
        $password = $_POST['password_adm'];
        $access_code = $_POST['access_code'];

        // Atribuindo na variável $sql o comando = Inserir na tabela usuarios os valores...
        $sql = "INSERT INTO user_adm VALUES (null, '$user_name', '$email', '$password', '$access_code');";

        // Executando o comando que está na variável $sql na conexão onde está o BD
        mysqli_query($connect, $sql);

        // Redirecionar para o local X após a execução de todas as ações anteriores
        //echo "<script>location.href = '../login_user_adm.php' </script>";
        header("Location: ../login_adm.php");
    }

?>