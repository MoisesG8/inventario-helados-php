<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar usuarios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar usuarios</li>
    
    </ol>

  </section>

 
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalagregaruser">
            Agregar Usuario
          </button>
      </div>
      <div class="box-body">
        <table class="table table-responsive table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimo acceso</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Usuario Administrador</td>
              <td>Admin</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>Administrador</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2020-12-11 12:02:10</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- 
VENTANA MODAL CON EL FORMULARIO PARA PODER AGREGAR UN USUARIO
  -->

<!-- The Modal -->
<div class="modal" id="modalagregaruser" class="modal fade" role="dialog">
  
<div class="modal-dialog">
    
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background:#17a2b8">

        <h4 class="modal-title">Agregar Usuario</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form action="/action_page.php">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Agregar</button>
          </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
      </div>

    </div>
  </div>
</div>