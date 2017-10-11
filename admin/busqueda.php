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
  		<b>Descripión: </b>Interfaz de administración de archivos y post para el portal web CCPJ, inicie sesión para poder acceder al formulario de subida de archivos.
  	</div>
  	<div class="col-lg-5">

  	<?php
  		if(isset($_SESSION['usr_id'])){
			echo '
				 	<form method="post" id="formulario" enctype="multipart/form-data">
						    <label for="">Título para POST</label>
						    <input type="text" name="titulo_post" placeholder="Ingrese critério de busqueda" required="" class="form-control">
						    <br>
						    <input type="submit" value="buscar" class="btn btn-primary">
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
  		<?php include('getResults.php'); ?>
  	</div>	
  </div>

</div>

<?php include('include/_footer.php'); ?>