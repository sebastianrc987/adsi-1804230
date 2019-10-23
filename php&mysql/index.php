<?php
include 'config/app.php';
include 'config/db.php';
?>

<?php
include 'includes/header.php';?>
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted">PHP & MYSQL</h1>
				<hr>
				<div class="jumbotron text-center">
					<img src="<?php echo $imgs ?>logo.png" width="180px">
					<br><br>
					<div class="btn-group-vertical">
						<a class="btn btn-outline-dark" href="pokemons/">
							<i class="fas fa-feather-alt"></i>
							Modulo Pokemones
						</a>
						<a class="btn btn-outline-dark" href="trainers/">
							<i class="fa fa-users fa-2x"></i>
							Modulo Entrenadores
						</a>
						<a class="btn btn-outline-dark" href="gyms/">
							<i class="fa fa-dumbbell fa-2x"></i>
							Modulo Gimnasios
						</a>
					</div>
				</div>
			</div>
			<?php
			include 'includes/footer.php';?>
