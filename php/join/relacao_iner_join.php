<?php
	$servidor = "localhost";  // sql213.epizy.com
	$usuario = "root"; // epiz_27132883
	$senha = ""; // oHp69wog3MB
	$dbname = "guia_de_cuidados"; // epiz_27132883_care_guide

	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	//  c = cursos - adress = a / t = categorias = program = p
	$result_cursos = "SELECT a.*, p. `description` AS mineral FROM `address` AS a
		INNER JOIN `program` AS p ON a.`name_id` = p.`id`
		ORDER BY a.`description` ASC";

	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){
		echo "Nome do Projeto: " . $rows_cursos['mineral'] . "<br>";
		echo "Endereço: " . $rows_cursos['description'] . "<br><hr>";
	}

?>