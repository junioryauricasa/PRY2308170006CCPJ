<?php
	session_start();
	include_once 'dbconnect.php';

	if(isset($_SESSION['usr_id']) == null){
		header('Location: login.php');
	}

	include ('include/_header.php');
?>

<div class="container">
  <div class="row">
  	<div class="col-lg-7">
  		<img src="http://www.ccpjunin.pe/dist/img/logo_horizontal_ccpj.png" alt="Logo ccpj" class="img-responsive" style="padding: 10px">
  		<br>
  		<b>Descripión: </b>Interfaz de administración subida de banners.
  	</div>
  	<div class="col-lg-5">

      <form method="post" id="formulario" enctype="multipart/form-data" action="banners-insert.php">
          <label for="">IMG Desktop</label>
          <input type="file" name="file" accept="image/jpg, image/jpeg, image/png, image/gif" placeholder="" required="" class="form-control">
          <br>
          <!--label for="">IMG Smartphone</label>
          <input type="file" name="file1" accept="image/jpg, image/jpeg, image/png, image/gif" placeholder="" required="" class="form-control">
          <br-->
          <label for="">Enlace</label>
          <input type="url" name="enlace" placeholder="Pegue el enlace en esta sección" class="form-control">
          <br>
          <label for="">Descripción</label>
          <input type="text" name="descripcion" placeholder="Agrege una descripción previa" required="" class="form-control">
          <br>
          <input type="submit" name="btnsubmit" value="Registrar" class="btn btn-primary">
          <input type="reset" name="btnreset" value="Nuevo" class="btn btn-default">
      </form>

	 </div>
  </div>

<br><br>

  <div class="row">
  	<div class="col-lg-12">

      <!-- 
            Tabla mostrar el listado de archivos subidos a la red
         -->
        <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>IMG Desk</th>
                  <th>Descripción</th>
                  <th>Enlace</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                  <?php include ('functions/banners-all-table.php'); ?>
              </tbody>
        </table> 
  	</div>	
  </div>

</div>

<?php include('include/_footer.php'); ?>