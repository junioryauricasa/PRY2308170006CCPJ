<?php 
	
	$codigo = $_GET['codid'];

	if($codigo == null){
		header('location: ../eventos.php');
	}

    include('../db/conextion.php'); //include connection file
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// sql to delete a record
	$sql = "DELETE FROM tb_upload_videos_eventos WHERE intidcodigo = ".$codigo."";

	if (mysqli_query($conn, $sql)) {
	    echo "Registro Eliminado";
	    header('location: ../eventos.php');
	} else {
	    echo "Sucedio un error eliminando el registro " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>