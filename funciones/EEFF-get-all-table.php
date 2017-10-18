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
        ORDER BY intidcodigo
        	DESC
    ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

    	echo '
					<div class="box-body" id="preload">
                      <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                          <tr>
                            <th>Trimestre</th>
                            <th>Año</th>
                            <th>Documento</th>
                            <th>Tipo de Documento</th>
                            <th>Opciones de Documento</th>
                          </tr>
                        </thead>
                        <tbody>
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
                            <tr>
                              <td>'.$TrimestreUl.'</td>
                              <td>'.$row["nvchyear"].'</td>
                              <td><a href="admin/'.$row["nvchdocumento"].'" class="">'.str_replace('documentos/EstadosFinancieros/', '', $row["nvchdocumento"]).'</a></td>
                              <td>Formato PDF</td>
                              <td>
                                  <a href="admin/'.$row["nvchdocumento"].'" target="_blank" class="btn btn-primary btn-xs">Vizualizar Documento</a>
                                  <!--a href="" class="btn btn-danger btn-xs" download="'.str_replace('documentos/EstadosFinancieros/', '', $row["nvchdocumento"]).'">Descargar</a-->
                              </td>
                            </tr>
            
                ';
        }

        echo '
                        </tbody>
                      </table>
                    </div>
        ';

    }else {
        echo '
                <div class="alert alert-danger alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  <strong>Alerta!</strong> Aun no se cuenta con registros.
                </div>
        ';
    }

    $conn->close();
?>