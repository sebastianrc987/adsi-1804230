<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comentarios</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted">Comentarios</h1>
				<hr>
				<?php
				//un comentario de una linea
				$clases = "btn tbn-lg btn-block btn-primary";
				/*
				btn= boton
				btn-lg = boton grande
				btn-bock = boton en bloque
				btn-primary = botton 
				*/
				#se imprime la variable $clases dentrop de class
				<a href="" class="<?=$clases?>">Esto Es Un Boton</a>
					
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>