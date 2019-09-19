<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones (try/throw/catch)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center text-muted">Excepciones (try/throw/catch)</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="age" placeholder="ingresar la edad">
					</div>
					<div class="form-group">
						<input type="submit" value="calcular" class="btn btn-success">
					</div>
				</form>
				<?php 
					if ($_POST) {
						function validate_age($age) {
							if ($age < 18) {
								throw new Exception("isted no puede votar!");
							}
							return true;
						}
						try {
							validate_age($_POST['age']);
							echo '<div class="alert alert-success">
									usted puede votar
								</div>'
						} catch (Exception $e) {
							echo 	'<div class="alert alert-danger">
									
							</div>'
						}
					} 

				?>
					
				
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>