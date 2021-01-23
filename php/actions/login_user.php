<?php

// Iniciando Sessão
session_start();

// Requirindo o arquio...
require_once 'db_connect.php';

// Se estiver recebendo uma resposta logar...
if (isset($_POST['login'])) {
    
    // Pegue os valores e coloque nas variáveis X
    $email = $_POST['email'];
    $password = $_POST['password'];

    // strlen = Retorna o tamanho de uma String
    // Se o tamanho da String for maior que 0...
    if (strlen($email) > 0 && strlen($password) > 0) {

        // Atribuindo na variável $sql o comando = 
        // "Selecione todos os elementos da tabela X,
        //  enquanto o que estiver dentro da variável X for igual a X".
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' LIMIT 1;";
        
        // mysqli_query = realiza uma consulta no BD
        // Atribuindo na variável $resultado o valor True ou False e o comando SQL
        $result = mysqli_query($connect, $sql);

        // Atribuindo na variável $row o comando SQL da variável $resultado
        while($row = mysqli_fetch_assoc($result)) {

            // Validando se existe um ID dentro da variável $row
            if ($row['id']) {

                // $_SESSION = Um array associativo contendo variáveis de 
                // sessão disponíveis para o atual script.
                $_SESSION['id'] = $row['id'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['nickname'] = $row['nickname'];
                $_SESSION['email'] = $row['email'];

                // Redirecionar para o local X após a execução de todas as ações anteriores
                header("Location: ../login_user.php");
            }
        } 
    } 
} 

?> 