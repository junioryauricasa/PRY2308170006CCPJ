<?php 
  include('db/conexion.php'); //include connection file 

  //consulta-habil-sociedad-auditora_process.php
  $codigo = $_POST['txtCodigo'];
  $imprimir = 1;
  if(empty($_POST['txtCodigo'])){
       echo '
          <div class="alert alert-warning alert-dismissable">
              <strong>Lo sentimos!</strong> Debe ingresar un valor primero.
          </div>
       ';
       $imprimir = 0; 
  }else 

  if($_POST['txtCodigo']){
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM agre WHERE id = '".$_POST['txtCodigo']."' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if(empty($row["cel"])){
              $row["cel"] = 'No posee';
          } 
          if(empty($row["telf"])){
              $row["telf"] = 'No posee';
          }
            echo '
                  <div class="col-lg-12" style="font-size:19px">
                      <p class="">
                        <h2>Datos de Agremiado</h2>
                        <b>Matricula:</b> '.$row["id"].'
                        <br>
                        <b>Nombre:</b> '.$row["nombres"].'
                        <br>
                        <b><b>Habil:</b> '.$row["habilidad"].'
                        <br>
                      </p>
                  </div>
                ';

                if($imprimir == 1){
                    echo '
                      <div class="col-lg-12" style="font-size:19px">
                        <a href="reporte-agremiado?codagrem='.$row["id"].'" class="btn btn-danger">
                            Imprimir
                        </a>
                      </div>
                    ';
                }else
                if($imprimir == 0){
                  echo '';
                }
            }

    }else {
        echo '
                <div class="alert alert-danger alert-dismissable">
                  <strong>Alerta!</strong> Lo sentimos, no existe registro alguno.
                </div>
        ';
        $imprimir = 0; 
    }

    $conn->close();
  }else{
    echo '
          <div class="alert alert-danger alert-dismissable">
            <strong>Alerta!</strong> Lo sentimos, no existe registro alguno.
          </div>
         '
         ;
    $imprimir = 0; 
  }
 ?>