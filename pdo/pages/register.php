<body class="bg-gradient-info">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="" class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="names"  placeholder="Nombre completo" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="birthdate" placeholder="Fecha nacimiento" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Correo electronico" required>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-6">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="contraseña" required>
                  </div>
                </div>
                <button  class="btn btn-success btn-user btn-block">
                  <i class="fa fa-save"></i>
                  Registrar
                </button>
                
                
              </form>
              <hr>
              <div class="text-center">
                <a class="btn btn-link" href="index.php"><i class="fa fa-arrow-left"></i> Ingreso de usuario</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php 
    if ($_POST) {
      $names = $_POST['names'];
      $birthdate = $_POST['birthdate'];
      $email = $_POST['email'];
      $password = $_POST['password'];


      if (addStudents($name, $birthdate, $email, $password, $conn)) {
        echo "<script>alert('El estudiante se adiciono con exito!');</script>"
      }


    }
   ?>
  </div>