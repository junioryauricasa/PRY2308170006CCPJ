<?php 
	$anio = date('Y'); //año actual definido
    
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
            nvchtrimestre = 5
        GROUP BY 
            nvchyear        
        ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            echo '
                <li>
                	<a href="estados-financieros?codver=&year='.$row["nvchyear"].'"> '.$row["nvchyear"].'</a>
                </li> 
                ';
        }
    }else
    echo '<li> <a href="#">Sin resultados</a> </li>';

    $conn->close();

    //echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
    //echo 'enviado exitosamente';

 ?>