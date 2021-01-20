<?php

    // Iniciar Sessão...
    session_start();

    // Atribua o valor X na variável dentro do array $_SESSION
    $_SESSION['id'] = "";
    $_SESSION['email'] = "";
    $_SESSION['name'] = "";

    // Redirecionar para o local X após a execução de todas as ações anteriores
    header("Location: ../../index.php");
?>