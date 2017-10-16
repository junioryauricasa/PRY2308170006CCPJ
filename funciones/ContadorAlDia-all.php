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
            *
        FROM 
            tb_upload_files
        WHERE 
            nvcharchivo like '%contadoraldia%'
        ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '
                    <div class="panel box box-default ">
                        <div class="box-header with-border">
                          <h4 class="">
                            <a data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" class="collapsed">
                                '.$row["nvchtitulo"].'
                                <br><span class="label label-default pull-left">'.$row["dtfecha"].'</span>
                            </a>
                          </h4>
                        </div>
                        <div id="" class="panel-collapse collapse in" aria-expanded="false" style="">
                          <div class="box-body">
                            <div class="embed-responsive" style="padding-bottom:150%">
                                 <p></p>
                                 <object data="admin/'.$row["nvcharchivo"].'" type="application/pdf" width="100%" height="800px"> 
                                  <p>
                                    Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                   <a href="admin/'.$row["nvcharchivo"].'">
                                     click para descargar el archivo PDF
                                   </a>
                                  </p>  
                                 </object>
                            </div>
                            <br>
                            <!--div class="fb-comments" data-href="http://ccpjunin.pe/'.$row["nvcharchivo"].'" data-width="100%" data-numposts="20"></div-->
                          </div>
                        </div>
                    </div>
                ';
        }
    }

    $conn->close();

    //echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
    //echo 'enviado exitosamente';

 ?>