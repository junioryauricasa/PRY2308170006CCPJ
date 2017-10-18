<?php 
	
	//EEFF-get-all-table.php

    /*
        Autor: Junior Yauricasa
        Iteración: 2
        Descripción: EEFF mostrando en tabla
    */


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
            AND
            nvchyear = $valoranual 
        ORDER BY intidcodigo
        	DESC
        LIMIT 1
    ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

    	echo '
					<div class="box-body" id="preload">
                      
    	';

        while($row = $result->fetch_assoc()) {

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
                       <object data="admin/'.$row["nvchdocumento"].'" type="application/pdf" width="100%" height="800px" internalinstanceid="508" title=""> 
                        <p>
                          Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                         
                         <a href="admin/'.$row["nvchdocumento"].'" download="admin/'.$row["nvchdocumento"].'">
                           click para descargar el archivo PDF
                         </a>

                        </p>  
                       </object>
            
                ';
        }

        echo '
                    </div>
        ';

    }else {
        echo '
            <div class="box-body" id="preload">
                <div class="alert alert-danger alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  <strong>Alerta!</strong> Aun no se cuenta con registros.
                </div>
            </div>
        ';
    }

    $conn->close();
?>