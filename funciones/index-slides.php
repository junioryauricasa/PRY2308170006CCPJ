<?php 

    include('db/conexion.php'); //include connection file 
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "
            SELECT
                intidcodigo,
                nvcharchivo,
                nvchenlace,
                nvchdescripcion
            FROM 
                tb_upload_files
            WHERE 
                nvcharchivo like '%SlidersBanner%'
            ";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '
                      <!-- '.$row["nvcharchivo"].'  -->
                      <div class="item">
                        <a href="'.$row["nvchenlace"].'">
                          <img src="admin/'.$row["nvcharchivo"].'" width="100%" height="430px" />
                        </a>
                        <div class="carousel-caption">
                        </div>
                      </div>
                    ';
            }
        }

        $conn->close();

    //echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
    //echo 'enviado exitosamente';

 ?>