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
                nvchlink 
            FROM 
                tb_upload_videos_eventos
        ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $cont = 1;

            while($row = $result->fetch_assoc()) {
                echo '
                        <div class="col-lg-4">
                            <div class="fb-video" data-href="'.$row["nvchlink"].'" data-width="500" data-show-text="true">
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