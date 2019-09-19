<?php 
//crear cookie:
setcookie('nombre', 'jeremias springfield', time()+60);
//eliminar una cookie:
//setcookie('nombre', 'jeremias springfield', time()-60);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cookies</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted">Cookies</h1>
				<hr>
				<div class="jumbotron">
					<small>
						ver cookies: ir a la consola / aplication / cookies
					</small>
					<?php if (isset($COOKIE['nombre'])): ?>
						<p class="lead">
							<strong>nombre:</strong>
						</p>
					<?php endif ?>
				</div>
				
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>