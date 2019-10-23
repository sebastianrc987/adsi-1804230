<?php
include '../config/app.php';
include '../config/db.php';
?>

<?php
include '../includes/header.php';?>
<div class="col-md-6 offset-md-3">
  <h1 class="text-center text-muted">
    <i class="fa fa-plus fa-2x"></i>
    ADICIONAR GIMNASIO
  </h1>
  <hr>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo $url; ?>">
          <i class="fa fa-home"></i>
          Inicio
        </a>
      </li>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo $url; ?>gyms/">
          <i class="fas fa-feather-alt"></i>
          Modulo Gimnasios
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Modificar Gimnacios
      </li>
    </ol>
  </nav>

  <hr>
  <form action="" method="post">
    <div class="form-group">
      <label for="name">Nombre:</label>
      <input class="form-control" type="text" name="name" value="<?php echo $row['id']?>" required>
    </div>
    
      <?php 
       $sql = "SELECT * FROM trainers";
       $result = mysqli_query($con, $sql);
       ?>
       <label for="trainers_id">Entrenador:</label>
       <select name="trainers_id" class="form-control" required>
         <option value="">Seleccione...</option>
         <?php while($rowt = mysqli_fetch_array($result)) { ?>
          <option value="<?php echo $rowt['id'] ?>" <?php if ($row['id'] == $row['trainer_id']): ?> selected <?php endif ?>>
          <?php echo $row['name'] ?>
          </option>
        <?php } ?>

       </select>

    <div class="form-group">
      <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Crear Gimnasio
      </button>
      <button type="reset" class="btn btn-light" onclick="">
        <i class="fa fa-eraser"></i>
        Limpiar Formulario
      </button>
    </div>
  </form>
  <?php 
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM pokemons WHERE id = ".$id;
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($result)){


        
      
  ?>

  <?php
    if($_POST) {
      $name      = mysqli_real_escape_string($con, $_POST['name']);
      

      $sql = "INSERT INTO gyms VALUE(default,'$name';)";
                                         

       if(mysqli_query($con, $sql)){
        $_SESSION['message']="el gimnasio    ".$name ."Fue adicionado con exito";
        echo "<script>window.location.replace('index.php');</script>";
       }else{
        echo "Error".mysqli_error($con);
       }
 }
   ?>
</div>
<?php
include '../includes/footer.php';?>
