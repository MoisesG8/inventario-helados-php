<div class="login-box">
  
  <div class="login-logo">
    <img src="vistas/img/plantilla/logo-meca.png" class="img-responsive" style="padding:30px 100px 0px 100px">  
    <a ><b>Admin Helados Mama Meca</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tus credenciales</p>

    <form action="#" method="post">
      <div class="form-group has-feedback">
        
        <input type="text" class="form-control" placeholder="Usuario" name="adUser" required>
        
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="ingpassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block "> Iniciar sesion </button>
        </div>
        <!-- /.col -->
      </div>
      <?php
        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
      ?>
    </form>
</div>
<!-- /.login-box -->