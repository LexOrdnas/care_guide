<?php 

session_start();

$id = 0;
$name = '';
$location = '';
$update = false;

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die( mysqli_error($mysqli) );

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli -> query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die( $mysqli -> error );

    $_SESSION['message'] = "Campo salvo com sucesso !";
    $_SESSION['msg_type'] = 'success';

    header("location: show_project.php");

}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli -> query("DELETE FROM data WHERE id = $id") or die( $mysqli -> error );

    $_SESSION['message'] = "Campo deletado !";
    $_SESSION['msg_type'] = "danger";

    header("location: show_project.php");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli -> query("SELECT * FROM data WHERE id = $id") or die( $mysqli -> error );
    if (count([$result]) == 1) {
        $row = $result -> fetch_array();
        $name = $row['name'];
        $location = $row['location'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli -> query("UPDATE data SET name='$name', location='$location' WHERE id = $id") or die( $mysqli -> error );
    $_SESSION['message'] = "Campo editado !";
    $_SESSION['msg_type'] = "warning";

    header('location: show_project.php');
}

?>