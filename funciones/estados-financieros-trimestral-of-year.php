<?php 
	$anio = date('Y');
    
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
        	if($row["nvchtrimestre"] == 1){
        		$TrimestreUl = 'Primer';
        	}else
        	if($row["nvchtrimestre"] == 2){
        		$TrimestreUl = 'Segundo';
        	}else
        	if($row["nvchtrimestre"] == 3){
        		$TrimestreUl = 'Tercer';
        	}else
        	if($row["nvchtrimestre"] == 4){
        		$TrimestreUl = 'Cuarto';
        	}

            echo '
                    <li>
                    	<a href="estados-financieros?codver='.md5($TrimestreUl).'&anio='.$anio.'&trimestre='.$row["nvchtrimestre"].'">'.$TrimestreUl.' Trimestre</a>
                    </li> 
                ';
        }
    }

    $conn->close();

    //echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
    //echo 'enviado exitosamente';

 ?>