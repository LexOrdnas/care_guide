<!-- Inicio do Cabeçalho -->
<header>
    <?php include_once('./includes/header.php'); ?>
</header>
<!-- Fim do Cabeçalho -->


<!-- Inicio do Espaçador -->
<div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "guia_de_cuidados"; // epiz_27132883_guia_de_cuidados
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>

<?php

	$result_cursos = "SELECT a.*, p. `description` AS project FROM `address` AS a
		INNER JOIN `program` AS p ON a.`name_id` = p.`id`
		ORDER BY a.`description` ASC";

	$resultado_cursos = mysqli_query($conn, $result_cursos);
	

?>

<main>
	<div class="container py-5 mt-5 mb-5">
        <div class="row py-5">
            <div class="col-md-10 ml-5 mr-5">
				<h2 class="title-cg mb-5">Instituições e programa cadastrados</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th class="text-cg">Nomes</th>
								<th class="text-cg">Endereços</th>
								<th class="text-cg" colspan="2"></th>
							</tr>
						</thead>

						<?php while ( $rows_cursos = $resultado_cursos -> fetch_assoc() ) : ?>
						<tr>
							<td class="text-card-cg"> <?php echo $rows_cursos['project']; ?></td>
							<td class="text-card-cg"> <?php echo $rows_cursos['description']; ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>

<!-- Inicio do Espaçador -->
<div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Rodapé -->
<footer>
    <?php include_once('./includes/footer.php'); ?>
</footer>
<!-- Fim do Rodapé -->