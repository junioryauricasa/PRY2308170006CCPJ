<?php 
    $metadescripcion = 'Sección de Conferencias del Colegio de Contadores Públicos de Junín';
    include('db/conexion.php'); //include connection file 
    include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    Conferencias
                </h1>
                <br>
                <br>
          </div>
        </div>
      </div>
    </section>
    <!-- div con backgrond incluido -->

    <section class="content">
        <div class="row">
          <div class="col-md-12">
              <?php include('_include/principaloptions.php'); ?>
          </div>
        </div>
        <div class="row">
            <section class="col-lg-9">
                <div class="box box-solid">
                  <div class="box-header">
                    <i class="fa fa-list"></i>
                    <h3 class="box-title">
                      Conferencias del Colegio de Contadores Públicos de Junín
                    </h3>
                  </div>
                  <div class="box-body">
                    <div class="row">
                    	<div class="col-lg-12">
							<?php 
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
							                        
								                        <div class="col-lg-4 col-md-6 col-sx-12" style="padding-bottom:15px">
								                            <div class="fb-video" data-href="'.$row["nvchlink"].'" data-width="500" data-show-text="true" style="margin-bottom:10px">
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
            </section>

            <section class="col-lg-3">
            	<div class="box box-solid">
                  <div class="box-header">
                    <i class="fa fa-list"></i>
                    <h3 class="box-title">
                      Indicaciones
                    </h3>
                  </div>
                  <div class="box-body">
                    <div class="row">
                    	<div class="col-lg-12">
							<p class="text-justify">
								Bienvenido a la sección de conferencias del Colegio de Contadores Públicos de Junín, en esta sección encontrarás las conferencias sin necesidad de salir de nuestra página, podrás compartir y comentar cada una de estas.
							</p>
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
	                      <div class="fb-comments" data-href="http://ccpjunin.pe/Conferenciasccpj/" data-width="100%" data-numposts="20"></div>
	                    </div>
	                  </div>
	              </div>
	              <div class="box-footer">
	              	
	              </div>
	            </div>
            </section>
        </div>
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
</style>

<?php 
	include('_include/footer.php');
?>