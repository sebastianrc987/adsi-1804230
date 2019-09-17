<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (switch)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted">Condicional (switch)</h1>
				<hr>
				<?php
					$day = date('d');
					switch ($day) {
						case 1:
							break;
						case 2:
							break;
						case 3:
							break;
						case 4:
							break;
						case 5:
							break;
						case 6:
							break;
						case 7:
							break;
						case 8:
							break;
						case 9:
							echo '<ul class="list-group">
									<li class="list-group"></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>'
							break;
						default:
							 break;

					}
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>