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
                $pregunta = "return confirm('Deseas Eliminar este registro?');"; //alert confirmar eliminar registro
                echo '
                  <tr>
                    <td>'.$row["intidcodigo"].'</td>
                    <td>
                        <a href="'.$row["nvcharchivo"].'" target="_blank">'.$row["nvcharchivo"].'</a>
                    </td>
                    <td>'.$row["nvchdescripcion"].'</td>
                    <td><a href="'.$row["nvchenlace"].'" target="_blank">'.$row["nvchenlace"].'</a></td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="'.$row["nvcharchivo"].'" target="_blank" >
                            <i class="glyphicon glyphicon-eye-open"></i>
                            Vizualizar
                        </a>
                        <a class="btn btn-danger btn-xs" onclick="'.$pregunta.'" href="functions/banners-eliminar.php?id=7d7218764483c814ce24f&codid='.$row["intidcodigo"].'&file='.$row["nvcharchivo"].'&flag=7d72187644f348522423f83c814ce24f" >
                            <i class="glyphicon glyphicon-trash"></i>
                            Eliminar
                        </a>
                    </td>
                  </tr>
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

    <style>
        
        /*  For grid pinterest  
        *,
        div.container .row:before,
        div.container .row::after {
          box-sizing: border-box;
        }

        div.container .row {
          -moz-column-width: 25em;
          -webkit-column-width: 25em;
          
          -moz-column-gap: 1em;
          -webkit-column-gap: 1em;
        }

        div.container .row .item {
          display: inline-block;
          width: 100%;
        }
        .well{
          padding: 0px
        }*/

    </style>
  <div>
  </div>