<?php 
	
	$codigo = $_GET['codid'];
	$file = $_GET['file'];

	if($codigo == null || $file == null){
		header('location: ../estados-financieros.php');
	}

	unlink('../'.$file); //entra a la carpeta y elimina el archivo

    include('../db/conextion.php'); //include connection file
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// sql to delete a record
	$sql = "DELETE FROM tb_upload_estados_financieros WHERE intidcodigo = ".$codigo."";

	if (mysqli_query($conn, $sql)) {
	    echo "Registro Eliminado";
	    header('location: ../estados-financieros.php');
	} else {
	    echo "Sucedio un error eliminando el registro " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>