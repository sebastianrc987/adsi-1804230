<?php
  // configuracion base de datos
  $host = "localhost";
  $user = "root";
  $pass = "";
  $ndb  = "adsi1804230";

  // conexion base de datos
  $con  = mysqli_connect($host, $user, $pass, $ndb);
  if (mysqli_connect_errno()) {
    echo "<span class='alert alert-danger'> Error:"
    .mysqli_connect_errno()." </span>";
  }
 ?>
