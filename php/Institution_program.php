<!-- Inicio do Cabeçalho -->
<header>
    <?php include_once('./includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->

<!-- Inicio do Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<?php require_once 'conn.php'; ?>

<?php if (isset($_SESSION['message'])): ?>

<div class="alert alert-<?= $_SESSION['msg_type'] ?> mt-5">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>

<?php endif ?>

<div class="container-fluid py-5 mt-4">
<?php
    $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
    $result = $mysqli -> query("SELECT * FROM data") or die($mysqli -> error);
?>

  <div class="row d-flex py-5 justify-content-around">

    <div class="col-md-3 ml-5 mr-5">

        <form action="conn.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <div class="form-group">
            <label class="text-cg">Name</label>
            <input 
                type="text" 
                name="name" 
                class="form-control"
                value="<?php echo $name; ?>"
                placeholder="Insira seu nome">
            </div>

            <div class="form-group">
            <label class="text-cg">Localização</label>
            <input 
                type="text" 
                name="location" 
                class="form-control" 
                value="<?php echo $location; ?>"
                placeholder="Insira o Endereço">
            </div>

            <div class="form-group">
            <?php
                if ($update == true):
            ?>
                 <button type="submit" name="update" class="btn btn-outline-info">Atualizar</button>
            <?php else: ?>
                <button type="submit" name="save" class="btn btn-outline-success">Save</button>
            <?php endif; ?>
            </div>

        </form>
        
    </div>
  

  <div class="col-md-6 ml-5 mr-5">
        <table class="table">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <?php
                while ($row = $result -> fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td>
                            <a href="conn.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-outline-info mr-2">Editar</a>

                            <a href="institution_program.php?delete=<?php echo $row['id']; ?>"
                            class="btn btn-outline-danger">Deletar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
  </div>
</div>

<?php
    function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>

<!-- Inicio do Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Rodapé -->
<footer>
    <?php include_once('./includes/footer.php'); ?>
</footer>
<!-- Fim do Rodapé -->