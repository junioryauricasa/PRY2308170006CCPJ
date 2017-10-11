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
								    <!--
								    <input type="submit" name="btnsubmit" value="Enviar">
								    <input type="reset" name="btnreset" value="Nuevo">
								    -->
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
		</div>
	  </div>
<div class="container">


  <br>

  <div class="row">
  	<div class="col-lg-12">
  		<?php include('getResults.php'); ?>
  	</div>	
  </div>

</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<script>  
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>