<?php
    
    $nvchlink_var = $_POST['link'];

	// funcion registrar 
	//function registrar($titulo, $descripcion, $fechadoc, $src, $tipo){
	    
    include ('db/conextion.php'); //incluytendo cadena de coneccion

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "
        INSERT INTO tb_upload_videos_eventos
            (
                intidcodigo, 
                nvchlink
            )
        VALUES 
            (
                null,   
                '$nvchlink_var'
            )
    ";
    $conn->exec($sql);
    $conn = null;

    header('Location: eventos.php');

?>