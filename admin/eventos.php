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

  	<?php
  		if(isset($_SESSION['usr_id'])){
			echo '
				 	<form method="post" id="formulario" enctype="multipart/form-data" action="ajax-video-evento.php">
					    <label for="">Link del evento</label>
					    <input type="text" name="link" placeholder="Pegue el Link del video del evento" required="" class="form-control">
					    <br>
					    <input type="submit" name="btnsubmit" value="Enviar" class="btn btn-primary">
					    <input type="reset" name="btnreset" value="Nuevo" class="btn btn-default">
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

  <div class="row">
  	<div class="col-lg-12">
  		<?php include('getResults_videos-eventos.php'); ?>
  	</div>	
  </div>

</div>

<?php include('include/_footer.php'); ?>