<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (indice numerico</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted"><?php print ("Hola Mundo"); ?></h1>
				<hr>
				<?php # asignacion de indice automatico
					$cars = array('volkswagen', 'toyota','renault');
					# ASIGNACION de indice manual
					$cars[3] = 'fiat';
					$cars[4] = 'mazda';
					$cars[5] = 'chevrolet';

					# var_dump($cars);

				 ?>
				<div class="btn-group">
				  <button type="button" class="btn btn-dark">
				  		<?php echo $car ?>
				  </button>
				<?php endforeac ?>
				</div>
				
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>