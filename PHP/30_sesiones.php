<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sesiones</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted">sesiones</h1>
				<hr>
				<div class="jumbotron">
					<?php if ($_POST) {
						unset($_SESSION['visitante']);
					}
						
					?>
					<?php if (isset($_SESSION['visitas'])): ?>
						<?php $_SESSION['visitas']++; ?>
					<?php else: ?>
						<?php $_SESSION['visitas'] = 1; ?>
					<?php endif ?>
					<p class="lead">
						<strong>
							usted ha visitado esta pagina:
						</strong>
						<?php echo $_SESSION['visitas']; ?>
					</p>
					<form action="" method="POST">
						<input type="submit" value="cerrar sesion" class="btn btn-danger">
					</form>
				</div>
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>