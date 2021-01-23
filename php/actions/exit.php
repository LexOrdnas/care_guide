<?php

    // Iniciar Sessão...
    session_start();

    // Atribua o valor X na variável dentro do array $_SESSION
    $_SESSION['id'] = "";
    $_SESSION['email'] = "";
    $_SESSION['name'] = "";
    
    $_SESSION['id_adm'] = "";
    $_SESSION['email_adm'] = "";
    $_SESSION['user_adm'] = "";

    // Redirecionar para o local X após a execução de todas as ações anteriores
    header("Location: ../../index.php");
?>