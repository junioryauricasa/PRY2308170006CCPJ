<?php
	session_start();
	include_once 'dbconnect.php';

	if(isset($_SESSION['usr_id']) == null){
		header('Location: login.php');
	}

	include ('include/_header.php');
?>
	  <div class="row" style="width:60%; margin: 0 auto">
	  	<div class="col-lg-7">
	  		<img src="http://www.ccpjunin.pe/dist/img/logo_horizontal_ccpj.png" alt="Logo ccpj" class="img-responsive" style="padding: 10px">
	  		<br>
	  		<b>Descripión: </b>Interfaz de administración de archivos y post para el portal web CCPJ, inicie sesión para poder acceder al formulario de subida de archivos.
	  	</div>
	  	<div class="col-lg-5">
		  	
		  	<form method="post" id="" enctype="multipart/form-data" action="ajax-imagen.php">
			    <label for="">Título para POST</label>
			    <input type="text" name="titulo_post" placeholder="Titulo de la publicación" required="" class="form-control">
			    <br>

			    <label for="">Seleccionar Ubicación del Post</label>
			    <select name="ubication" id="" class="form-control">
			        <option value="1">Banco de Preguntas</option>
			        <option value="2">Calendario</option>
			        <option value="3">Contador al Dia</option>
			        <option value="4">Convenios</option>
			        <option value="5">Eventos</option>
			        <option value="6">Fotos</option>
			        <option value="7">Noticias</option>
			        <option value="8">Oferta Laboral</option>
			        <option value="9">Requisitos Para Certificacion</option>
			        <option value="10">Requisitos Para Colegiatura</option>

			        <option value="11">Académico Convenciones</option>
			        <option value="12">Académico Cursos</option>
			        <option value="13">Académico Diplomados</option>

			        <option value="14">Comunicados</option>


			    </select>
			    <br>

			    <label for="">Descripción</label><br>
			    <textarea name="description" id="" cols="30" rows="5" required="" class="form-control" placeholder="Ingresar descripción de la publicación"></textarea>
			    <br>

			    <label for="">Subir imagen: </label>
			    <input type="file" name="file" accept="image/jpg, image/jpeg, image/png, image/gif, application/pdf" required="" class="form-control">
			    <br>
			    
			    <input type="submit" class="btn btn-primary" name="btnsubmit" value="Enviar">
			    <input type="reset" class="btn btn-danger" name="btnreset" value="Nuevo">
			</form>

		</div>
	  </div>

<br><br>

	<div class="container">
	  <div class="row">
	  	<div class="col-lg-12">
	  		<!-- 
	  			Tabla mostrar el listado de archivos subidos a la red
	  		 -->
	  		<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
	            <thead>
	              <tr>
	                <th>ID</th>
	                <th style="width: 20% !important;">Nombre</th>
	                <th>Descripción</th>
	                <th>Fecha</th>
	                <th>Ruta</th>
	                <th>Opciones</th>
	              </tr>
	            </thead>
	            <tbody>
	                <?php include ('functions/files-getResults-all-table.php'); ?>
	            </tbody>
		    </table>
	  			
	  	</div>	
	  </div>
	</div>

<?php 
	include ('include/_footer.php');
?>