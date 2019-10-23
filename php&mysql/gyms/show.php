<?php
include '../config/app.php';
include '../config/db.php';
?>

<?php
include '../includes/header.php';?>
<div class="col-md-6 offset-md-3">
  <h1 class="text-center text-muted">
    <i class="fa fa-search fa-2x"></i>
    CONSULTAR POKEMON
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
        <a href="<?php echo $url; ?>pokemons/">
          <i class="fas fa-feather-alt"></i>
          Modulo Pokemones
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Adicionar Pokemon
      </li>
    </ol>
  </nav>
  <hr>
  <table class="table table-hover table-bordered table-striped">
    <?php 
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM pokemons WHERE id = ".$id;
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($result)){


        
      
     ?>
     <tr>
       <th>Id:</th>
       <td><?php echo $row['id']; ?></td>
     </tr>
     <tr>
       <th>Nombre:</th>
       <td><?php echo $row['name']; ?></td>
     </tr>
     <tr>
       <th>Tipo:</th>
       <td>
          <?php if ($row['type'] == 'fuego'): ?>
            <span class="badge badge-danger">
              <?php echo $row['type']; ?>
            </span>
          <?php if ($row['type'] == 'electrico'): ?>
            <span class="badge badge-dark">
              <?php echo $row['type']; ?>
            </span>
          <?php if ($row['type'] == 'electrico'): ?>
            <span class="badge badge-dark">
              <?php echo $row['type']; ?>
            </span>
          <?php if ($row['type'] == 'electrico'): ?>
            <span class="badge badge-dark">
              <?php echo $row['type']; ?>
            </span>
          <?php if ($row['type'] == 'planta'): ?>
            <span class="badge badge-success">
              <?php echo $row['type']; ?>
            </span>
          <?php if ($row['type'] == 'fantasma'): ?>
            <span class="badge badge-light">
              <?php echo $row['type']; ?>
            </span>
          <?php if ($row['type'] == 'normal'): ?>
            <span class="badge badge-dark">
              <?php echo $row['type']; ?>
            </span>
       </td>
     </tr>
     <tr>
       <th>Fuerza:</th>
       <td><?php echo $row['strength'] ?></td>
     </tr>
     <tr>
       <th>Resistencia:</th>
       <td><?php echo $row['stamina'] ?></td>
     </tr>
     <tr>
       <th>Velocidad:</th>
       <td><?php echo $row['speed'] ?></td>
     </tr>
     <tr>
       <th>Precision:</th>
       <td><?php echo $row['accuracy'] ?></td>
     </tr>
     <?php 
        }
      }
      ?>
  </table>

  
  

 
<?php
include '../includes/footer.php';?>