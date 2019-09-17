<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reto fechas</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center tex-dark">reto fechas</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<label for="birthdate"> Fecha Nacimiento</label>
						<input type="date" id="birthdate" name="birthdate" class="form-control">
					</div>
					<div class="form-group">
					 <button type="submit" class="btn btn-outline-succeess">calcular edad</button>
					</div>
				</form>
				<?php 
					if($_POST) {
						

						$day 	= date('d', strtotime($_POST['birthdate']));
						$month 	= date('m', strtotime($_POST['birthdate']));
						$year 	= date('Y', strtotime($_POST['birthdate']));


						$born 	= mktime(0, 0, 0, $month, $day, $year);
						$today 	= mktime(0, 0, 0, date('m'), date('d'), date('Y'));
					}
				?>
			</div>

		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>