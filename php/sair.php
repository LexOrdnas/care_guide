<?php
  session_start();
  unset($_SESSION['id_usuario']); //destruindo a sessao
  header("Location: login.php");//encaminhado para index
 ?>
