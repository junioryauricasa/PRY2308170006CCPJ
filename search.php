<?php 
  $metadescripcion = 'Sección busqueda del Colegio de Contadores Públicos de Junín';
  include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">
    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    Resultados de Busqueda
                </h1>
                <p class="text-center text-description-header ">
                </p>
                <br>
                <br>
          </div>
        </div>
      </div>
    </section>
    <!-- div con backgrond incluido -->

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
          <section class="col-lg-3 col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-list"></i> Importante</li>
                </ul>
                <div class="box-body">
                    <?php
                        //$_GET['q']; //q contienen el valor de busqueda dentro d ela interfaz
                        if(empty($_GET['q'])){
                            echo '
                              <p>Al parecer no posees aun un valor de busqueda, puedes realizarlo en la celda de abajo</p>

                              <form action="search" method="GET">
                                <input type="text" class="form-control" value="" name="q" id="q" placeholder="Ingrese Valor de Busqueda">
                                <br>
                                <input type="submit" value="Buscar en esta Página" class="btn btn-primary" required="true">
                              </form>
                            ';
                        }else{
                            echo 'Resultados de busqueda para <a style="margin-bottom:10px; font-weight:bolder;font-size:16px" href="#"><i><b>'.$_GET['q'].'</b></i></a>';
                            echo "<br><br>";
                            echo '<a href="search?q=" class="btn btn-danger ">Volver a realizar busqueda</a>';
                        }
                    ?>
                </div>
                <div class="box-footer">
                  
                </div>
              </div>

              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-bell"></i> Quizas te pueda interesar</li>
                </ul>
                <div class="box-body">
                    <div class="row">
                      <div class="col-lg-12">
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
                nvchtitulo,
                nvchdescripcion,
                dtfecha,
                nvcharchivo,
                bttipefile 
            FROM 
                tb_upload_files
            ORDER BY RAND() LIMIT 4
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

                      </div>
                    </div>
                </div>
              </div>

              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-commenting"></i> Déjanos tu Opinión</li>
                </ul>
                <div class="box-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="fb-comments" data-href="http://ccpjunin.pe/busqueda/" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                </div>
              </div>
          </section>
          <section class="col-lg-9 col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-list"></i> Resultados</li>
                </ul>
                <div class="box-body">  
                  
    <?php 
        include('db/conexion.php'); //include connection file

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $valorconsulta = $_GET['q'];

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
                nvchtitulo like '%$valorconsulta%' 
                OR 
                dtfecha like '%$valorconsulta%' 
                OR 
                dtfecha like '%$valorconsulta%'  
              ORDER BY intidcodigo DESC
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
                             <object data="admin/'.utf8_encode($row['nvcharchivo']).'" type="application/pdf" width="100%" height="800px"> 
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
                          </div>
                        </div>
                    </div>
                </div>
                    ';
            }

        }else {
            echo '
                    <div class="alert alert-warning alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      <strong>Alerta!</strong> No hemos encontrado coincidencias para tu Busqueda.
                    </div>
            ';
        }

        $conn->close();
    ?>


                </div>
              </div>
          </section>
        </div>
        <br>
    </section>
</div>


<style>
  #textonparallax{
      margin-top: -280px; 
      padding-bottom: 80px;
  }
  @media screen and (min-width:350px){
    #textonparallax{
       margin-bottom: 100px;
    }
  }

  /*
  Full screen Modal 
  */
  .fullscreen-modal .modal-dialog {
    margin: 0;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
    padding-top: 40px
  }
  @media (min-width: 768px) {
    .fullscreen-modal .modal-dialog {
      width: 750px;
    }
  }
  @media (min-width: 992px) {
    .fullscreen-modal .modal-dialog {
      width: 970px;
    }
  }
  @media (min-width: 1200px) {
    .fullscreen-modal .modal-dialog {
       width: 1170px;
    }
  }
</style>

<script type="javascript">
  $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>

<?php 
  include('_include/footer.php');
?>