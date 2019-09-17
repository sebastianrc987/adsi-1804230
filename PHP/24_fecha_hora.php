<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fecha hora</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center tex-dark">fecha hora</h1>
				<hr>
				<div class="jumbotron">
					<p class="lead text-center">
						<strong>horas minutos y segundos</strong>
						<?php echo date('h:i:s'); ?>

					</p>
					<p class="lead text-center">
						<strong>dia mes y año</strong>
						<?php echo date('d-m-Y'); ?>

					</p>
					<p class="lead text-center">
						<strong>dia semana</strong>
						<?php echo date('l'); ?>

					</p>
					<p class="lead text-center">
						<strong>año</strong>
						<?php echo date('Y'); ?>

					</p>
					<p class="lead text-center">
						<strong>Ciudad</strong>
						<?php echo date('e'); ?>

					</p>
				</div>
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>