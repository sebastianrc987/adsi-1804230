<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>archivo texto plano</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center tex-dark">archivo texto plano</h1>
				<hr>
				<div class="alert alert-warning text-justify">
				<?php 
					$file = fopen('text/lorem.txt', 'r') or exit('no se pudo encontrar!');

					while (!feof($file)) {
						echo fgets($file);
					}
					fclose($file);
				 ?>
				 </div>
				 <div class="alert alert-dark text-justify">
				<?php 
					$file = fopen('text/lorem.txt', 'r') or exit('no se pudo encontrar!');

					while (!feof($file)) {
						echo fgetc($file).'.';
					}
					fgetc($file);
				 ?>
				 </div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>