<?php

session_start();

require_once 'db_connect.php';

if (isset($_POST['login_adm'])) {

    $email_adm = $_POST['email_adm'];
    // $access_code = $_POST['access_code'];
    $password_adm = $_POST['password_adm'];

    if (strlen($email_adm) > 0 && strlen($password_adm) > 0) {

        $sql = "SELECT * FROM user_adm WHERE email_adm = '$email_adm' AND password_adm = '$password_adm' LIMIT 1;";
      
        $result = mysqli_query($connect, $sql);

        while($row = mysqli_fetch_assoc($result)) {

            if ($row['id_adm']) {

                $_SESSION['id_adm'] = $row['id_adm'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['email_adm'] = $row['email_adm'];
                $_SESSION['access_code'] = $row['access_code'];

                header("Location: ../login_user_adm.php");
            }
        } 
    } 
}

?> 