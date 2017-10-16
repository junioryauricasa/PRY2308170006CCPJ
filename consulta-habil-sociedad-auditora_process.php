<?php 
	//consulta-habil-sociedad-auditora_process.php
	
	include('db/conexion.php'); //include connection file 

	$valorconsulta = $_POST['txtCodigo']; 
	if($valorconsulta == null){
		echo '
			<div class="alert alert-danger alert-dismissable">
              <strong>Lo sentimos!</strong> Debe ingresar un valor primero.
            </div>
		';
	}else
	{
		  //echo "se realizara una consulta";

	      //$codigo = $_POST['txtCodigo'];
	      $imprimir = 1;
	      if(empty($valorconsulta)){
	           echo '
	              <div class="alert alert-warning alert-dismissable">
	                <strong>Alerta!</strong> Lo sentimos, para realizar una consulta debes de realizarla desde <a href="consulta-habil">formulario de consulta hábil</a>.
	              </div>
	           ';
	           $imprimir = 0; 
	      }else 

	      if($valorconsulta){
		        // Create connection
		        $conn = new mysqli($servername, $username, $password, $dbname);
		        // Check connection
		        if ($conn->connect_error) {
		            die("Connection failed: " . $conn->connect_error);
		        } 
		        
		        $sql = "SELECT * FROM socidades WHERE ruc = '".$valorconsulta."' ";
		        $result = $conn->query($sql);

		        if ($result->num_rows > 0) {
		            // output data of each row
		            while($row = $result->fetch_assoc()) {

		                echo '
		                      <div class="col-lg-12" style="font-size:19px">
		                          <p class="">
		                            <h2>Resultado de Consulta</h2>
		                            <b>RUC:</b> '.$row["ruc"].'
		                            <br>
		                            <b>Denominación:</b> '.$row["nombre"].'
		                            <br>
		                            <b><b>Habil:</b> '.$row["habil"].'
		                            <br>
		                          </p>
		                      </div>
		                    ';

		                    if($imprimir == 1){
                                echo '
									<div class="col-lg-12" style="font-size:19px">
	                                  <a href="reporte-sociedades-auditoras?codagrem='.$row["ruc"].'" class="btn btn-danger">
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
		                      <strong>Alerta!</strong> Lo sentimos, vuelva a realizar su consulta.
		                    </div>
		            ';
		            $imprimir = 0; 
		        }

		        $conn->close();
		    }else{
		        echo '
		              <div class="alert alert-danger alert-dismissable">
		                <strong>Alerta!</strong> Lo sentimos, vuelva a realizar su consulta.
		              </div>
		             '
		             ;
		        $imprimir = 0; 
		    }
                       
	}

	//echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
	//echo 'enviado exitosamente';

 ?>