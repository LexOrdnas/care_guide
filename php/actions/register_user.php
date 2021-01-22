<?php

    // Requirindo o arquio...
    require_once "db_connect.php";

    // Se estiver recebendo uma resposta cadastrar...
    if (isset($_POST['register'])) {

        // Pegue os valores e coloque nas variáveis X
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Atribuindo na variável $sql o comando = Inserir na tabela usuarios os valores...
        $sql = "INSERT INTO user VALUES (null, '$name', '$email', '$password');";

        // Executando o comando que está na variável $sql na conexão onde está o BD
        mysqli_query($connect, $sql);

        // Redirecionar para o local X após a execução de todas as ações anteriores
        header("Location: ../login.php");
    }

?>