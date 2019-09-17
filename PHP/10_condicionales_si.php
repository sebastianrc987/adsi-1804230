<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>condicional (if-else-elseif)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-center text-dark">condicional (if-else-elseif)</h1>
				<?php $day = date('D'); ?>
				<?php if($day == "mon"): ?>
					<span class="badge badge-pill badge-warning">Hoy es Lunes</span>
				<?php elseif ($day == "Tue"): ?>
					<span class="badge badge-pill badge-warning">Hoy es martes</span>
				<?php elseif ($day == "wed"): ?>
					<span class="badge badge-pill badge-warning">Hoy es miercoles</span>
				<?php elseif ($day == "thu"): ?>
					<span class="badge badge-pill badge-warning">Hoy es jueves</span>
				<?php elseif ($day == "fri"): ?>
					<span class="badge badge-pill badge-warning">Hoy es viernes</span>
				<?php else: ?>
					<span class="badge badge-pill badge-warning">Hoy es sabado</span>
				<?php endif ?>
					<span class="badge badge-pill badge-warning">Hoy es domingo</span>





				
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>