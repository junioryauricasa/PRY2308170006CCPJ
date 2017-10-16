<?php 
    /*
        Autor: Junior Yauricasa
        Iteración: 2
        Descripción: select de tabla upload_files 
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
            nvchtitulo,
            nvchdescripcion,
            dtfecha,
            nvcharchivo,
            bttipefile 
        FROM 
            tb_upload_files
        WHERE nvcharchivo like '%AcademicoDiplomados%' 
        ORDER BY intidcodigo DESC
        LIMIT 5
    ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '

            <div class="item well">
                <div class="panel box box-default ">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a data-toggle="" data-parent="" href="#" aria-expanded="false" class="collapsed" style="text-transform: uppercase;">
                          '.$row["nvchtitulo"].'
                          <br><span class="label label-default pull-left">'.$row["dtfecha"].'</span>
                        </a>
                      </h4>
                    </div>
                    <div id="#" class="" aria-expanded="false" style="">
                      <div class="box-body">   
                ';

            /*
                validación del campo descripción
            */
            if($row['nvchdescripcion'] == null){
                $row['nvchdescripcion'] = 'Sin descripcion previa';
            }

            echo '<p> Descripción: '.$row['nvchdescripcion'].'</p>';

            $tipoarchivo = $row["bttipefile"];

            if($tipoarchivo == 0){
                    echo '<img src="admin/'.$row['nvcharchivo'].'" alt="'.$row['nvchdescripcion'].'" width="100%" class="img-responsive">';
            }else 
            if($tipoarchivo == 1){
                echo '
                    <div class="embed-responsive" style="padding-bottom:150%">
                         <object data="'.utf8_encode($row['nvcharchivo']).'" type="application/pdf" width="100%" height="800px"> 
                          <p>
                            Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                           <a href="admin/'.$row['nvcharchivo'].'">
                             click para descargar el archivo PDF
                           </a>
                          </p>  
                         </object>
                    </div>
                ';
            }
            
            echo '
                      </div>
                    </div>
                </div>
            </div>
                ';
        }

    }else {
        echo '
                <div class="alert alert-danger alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  <strong>Alerta!</strong> No existe registro alguno aun.
                </div>
        ';
    }

    $conn->close();
?>