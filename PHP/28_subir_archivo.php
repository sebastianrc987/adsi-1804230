<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivos</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted"><?php print ("Hola Mundo"); ?></h1>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<input type="file" class="form-control-file" name="foto" accept="image/*">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Subir Foto</button>
					</div>
				</form>
				<?php if ($_FILES): ?>
					<?php if ($_FILES['foto']['error'] > 0): ?>
						<div class="alert alert-danger">
							
						</div>
					<?php else: ?>
						<?php meve_upload_file($_FILES['foto']['tmp_name'], 'uploads/'.$_FILES['foto']['name']) ?>
						<div class="alert alert-success">
							<strong>
								El Archivo Se Ha Subido Con Exito 	
							</strong>
							<li>
								<?php echo $_FILES['foto']['name'] ?>
							</li>
							<li>
								<?php echo $_FILES['foto']['type'] ?>
							</li>
							<li>
								<?php echo round($_FILES['foto']) ?>
							</li>
						</div>
					<?php endif ?>
				<?php endif ?>
			</div>
		</section>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>