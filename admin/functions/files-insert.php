<?php
	if(isset($_SESSION['usr_id'])){
	echo '
		 	<form method="post" id="formulario" enctype="multipart/form-data">
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
				    </select>
				    <br>
				    <label for="">Descripción</label><br>
				    <textarea name="description" id="" cols="30" rows="5" required="" class="form-control" placeholder="Ingresar descripción de la publicación"></textarea>
				    <br>
				    <label for="">Subir imagen: </label>
				    <input type="file" name="file" accept="image/jpg, image/jpeg, image/png, image/gif, application/pdf" required="" class="form-control">
				    
				    <input type="submit" class="btn btn-success" name="btnsubmit" value="Enviar">
				    <input type="reset" class="btn btn-primary" name="btnreset" value="Nuevo">
				    
			</form>
	';

	}else
	{
		echo '
  			<div class="alert alert-warning">
			  <strong>Alerta!</strong> no puedes ver el formulario a menos que inicies sesión.
			</div>
		';
	}
?>