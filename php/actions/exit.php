<?php

    // Iniciar Sessão...
    session_start();

    // Atribua o valor X na variável dentro do array $_SESSION
    $_SESSION['id_usuario'] = null;
    $_SESSION['email'] = null;
    $_SESSION['name'] = null;

    //Destruindo a sessão:
    session_destroy();
    
    header("Location: ../../index.php");
?>