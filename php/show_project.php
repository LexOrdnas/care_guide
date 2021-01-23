<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guia de Cuidados</title>
    <meta name="description" content="MVP Básico de projeto da Recode Pro 2020">
    <meta name="keywords" content="MVP Básico, Recode Pro 2020">
    <meta name="author" content="Squad 9 - SP2">
    <!-- Ícone do Site -->
    <link rel="shortcut icon" href="https://i.ibb.co/Sn5qHr2/plus.png" type="image/png">
    <!-- Fonte Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Titillium+Web&display=swap" rel="stylesheet">
    <!-- CSS Principal -->
    <link rel="stylesheet" href="./../css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" 
    integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
    crossorigin="anonymous" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
    crossorigin="anonymous" defer></script>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" 
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" 
    crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" 
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" 
    crossorigin="" defer></script>
    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
    <!-- Arquivo Functions JS -->
    <script src="./../js/functions.js" defer></script>
</head>
<body class="bg-cg">

  <!-- Inicio do Espaçador -->
  <div class="small-spacing mt-2 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
  <!-- Fim do Espaçador -->

  <?php require_once 'process.php'; ?>

  <?php

  if ( isset( $_SESSION['message'] ) ): ?>

  <div class="alert alert-<?= $_SESSION['msg_type'] ?> alert-dismissible" data-dismiss="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>

      <?php 
        echo $_SESSION['message'];
        unset($_SESSION['Message']);
      ?>

  </div>

  <?php endif ?>

  <!-- Inicio do Cabeçalho -->
  <header>
      <?php include_once('includes/header.php'); ?>
  </header>
  <!-- Fim do Cabeçalho -->

  <?php
    $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
    $result = $mysqli -> query("SELECT * FROM data") or die($mysqli -> error);       
  ?>

  <!-- Inicio do Espaçador -->
  <div class="small-spacing mt-2 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
  <!-- Fim do Espaçador -->

    <div class="container-fluid py-5 mt-4">

      <div class="row d-flex py-5 justify-content-around">

        <div class="col-md-3 ml-5 mr-5">

          <form action=""  method="post">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
              
              <h2 class="title-cg mb-3">Cadastro de Instituições</h2>
        
              <input type="text" name="name" class="form-control text-card-cg mb-3" value="<?php echo $name; ?>"placeholder="Instituição ou Programa">
            </div>

            <div class="form-group">
              
              <input type="text" name="location" class="form-control text-card-cg" value="<?php echo $location; ?>" placeholder="Endereço">
            </div>

            <div class="form-group">

            <?php
              if ($update == true) :
            ?>
                <button type="submit" class="btn btn-info" name="update">Atualizar</button>

              <?php else : ?>

                <button type="submit" class="btn btn-outline-success btn-lg" name="save">Salvar</button>

              <?php endif; ?>
            </div>
          </form>
        </div>
        
    <div class="col-md-6 ml-5 mr-5">
          <table class="table table-responsive">
            <thead>
              <tr>
                <th class="text-cg">Instituição ou programa</th>
                <th class="text-cg">Endereço</th>
                <th class="text-cg" colspan="2"></th>
              </tr>
            </thead>


            <?php
            while ($row = $result->fetch_assoc()) : ?>
              <tr>
                <td class="text-card-cg"> <?php echo $row['name']; ?></td>
                <td class="text-card-cg"> <?php echo $row['location']; ?></td>
                <td>
                  <a href="show_project.php?edit=<?php echo $row['id']; ?>" class="btn btn-outline-info mr-2">Edit</a>
                  <a href="show_project.php?delete=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </table>
        </div>
    </div>
  </div>

  <!-- Inicio do Espaçador -->
  <div class="small-spacing mt-2 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
  <!-- Fim do Espaçador -->

    <!-- Inicio do Rodapé -->
    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
    <!-- Fim do Rodapé -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
</body>
</html>