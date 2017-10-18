<?php 
	$anio = date('Y');//obteniendo el año actual YYYY
    include('db/conexion.php'); //include connection file 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "
        SELECT
            *
        FROM 
            tb_upload_estados_financieros
        WHERE 
            nvchyear = '$anio'
        ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            /*
                Autor:  Junior Yauricasa
                descripcion: termino a mostrar en interfaz conforme a lo registrado en db
                    - Primer
                    - Segundo
                    - Tercer
                    - Cuarto
            */

        	if($row["nvchtrimestre"] == 1){
        		$TrimestreUl = 'Primer Trimestre';
        	}else
        	if($row["nvchtrimestre"] == 2){
        		$TrimestreUl = 'Segundo Trimestre';
        	}else
        	if($row["nvchtrimestre"] == 3){
        		$TrimestreUl = 'Tercer Trimestre';
        	}else
        	if($row["nvchtrimestre"] == 4){
        		$TrimestreUl = 'Cuarto Trimestre';
            }else
            if($row["nvchtrimestre"] == 5){
                $TrimestreUl = 'Anual';
            }

            echo '
                    <li>
                    	<a href="estados-financieros?codver=&year='.$row["nvchyear"].'&trim='.$row["nvchtrimestre"].'">'.$TrimestreUl.'</a>
                    </li> 
                ';
        }
    }

    $conn->close();

    //echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
    //echo 'enviado exitosamente';

 ?>