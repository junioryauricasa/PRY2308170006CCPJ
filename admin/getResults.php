    <?php 
        include('db/conextion.php'); //include connection file

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
            WHERE 
                nvchtitulo like '%Calendario%' OR 
                nvchdescripcion like '%Calendario%' OR 
                nvcharchivo like '%Calendario%'
        ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '
                    <div class="panel box box-default ">
                        <div class="box-header with-border">
                          <h4 class="">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5" aria-expanded="false" class="collapsed">
                              '.$row["nvchtitulo"].'
                              <br><span class="label label-default pull-left">'.$row["dtfecha"].'</span>
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne5" class="panel-collapse collapse in" aria-expanded="false" style="">
                          <div class="box-body">
                            <p> Descripción: '.$row['nvchdescripcion'].'</p>
                    ';

                $tipoarchivo = $row["bttipefile"];

                if($tipoarchivo == 0){
                        echo '<img src="'.$row['nvcharchivo'].'" alt="'.$row['nvchdescripcion'].'" width="100%" class="img-responsive">';
                }else 
                if($tipoarchivo == 1){
                    echo '
                        <div class="embed-responsive" style="padding-bottom:150%">
                             <object data="'.$row['nvcharchivo'].'" type="application/pdf" width="100%" height="800px"> 
                              <p>
                                Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                               <a href="'.$row['nvcharchivo'].'">
                                 click para descargar el archivo PDF
                               </a>
                              </p>  
                             </object>
                        </div>
                    ';
                }
                
                echo '
                    <div class="fb-comments" data-href="http://ccpjunin.pe/'.$row['nvcharchivo'].'" data-width="100%" data-numposts="20"></div>
                          </div>
                        </div>
                    </div>
                    ';
            }

        }else {
            echo "no existe registro alguno";
        }

        $conn->close();
    ?>