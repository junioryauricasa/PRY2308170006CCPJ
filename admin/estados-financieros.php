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
  		<b>Descripión: </b>Interfaz de administración de subida de videos de eventos en vivo desde facebook.
  	</div>
  	<div class="col-lg-5">

  		<form method="post" id="formulario" enctype="multipart/form-data" action="estados-financieros-insert.php">
  		    <label for="">Año</label>
  		    <select name="anio" id="" class="form-control">
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
          </select>
  		    <br>
  		    <label for="">Periodo</label>
  		    <select name="periodo" id="" class="form-control">
              <option value="1">Primer Trimestre</option>
              <option value="2">Segundo Trimestre</option>
              <option value="3">Tercer Trimestre</option>
              <option value="4">Cuarto Trimestre</option>
              <option value="5">Anual</option>
          </select>
  		    <br>
  		    <label for="">Documento</label>
  		    <input type="file" name="file" accept="application/pdf"  placeholder="Pegue el Link del video del evento" required="" class="form-control">
  		    <br>
  		    <input type="submit" name="btnsubmit" value="Enviar" class="btn btn-primary">
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
                  <th>Año</th>
                  <th>Trimestre</th>
                  <th>Documento</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                  <?php include ('functions/estados-financieros-all-table.php'); ?>
              </tbody>
        </table> 
  	</div>	
  </div>

</div>

<?php include('include/_footer.php'); ?>