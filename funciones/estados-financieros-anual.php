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
        GROUP BY 
            nvchyear
        ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            echo '
                <li>
                	<a href="estados-financieros?codver='.md5($TrimestreUl).'&anio='.$row["nvchyear"].'&trimestre='.$anio.'&coddoc='.md5($TrimestreUl).'"> '.$row["nvchyear"].'</a>
                </li> 
                ';
        }
    }

    $conn->close();

    //echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
    //echo 'enviado exitosamente';

 ?>