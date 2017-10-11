<?php 
  $metadescripcion = 'Sección de Evnetos del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 20px">

<!-- div con backgrond incluido -->
<section class="content" style="    min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
            <h1 class="text-center header-page-h1">
                Eventos
            </h1>
            <p class="text-center text-description-header ">
                Bienvenidos a la seccion de eventos del Portal Web del Colegio de Contadores Públicos de Junín. <br> Aquí podras mantenerte informado y al día de todos los eventos que estamos desarrollando, no te pierdas de ninguno de estos, comunicate con nosotros.
                <br>
                <br>
            </p>
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

        <!-- section -->
        <div class="row">
          <!-- section principal -->
          <section class="col-lg-9">
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-inbox"></i>
                  <h3 class="box-title">
                    Nuestros Eventos
                  </h3>
                </div>
                <div class="box-body">
                    <div class="container" style="width: 100%;">
                      <div class="row">
                        <!--
                            Autor: Junior Yauricasa
                            Iteración: 2
                            Descripción: select de tabla upload_files 
                         -->

                        <!-- Estructura item evento -->
                        <!--div class="item well">
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="true" class="" href="#">
                                  XXIII CONVENCION NACIONAL DE TRIBUTACIÓN <br><span class="label label-default pull-left">13/06/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div >
                              <div class="box-body">
                                <img src="http://ccpjunin.pe/imagenes/BCCPA2.jpg" alt="" class="img-responsive">
                                
                              </div>
                              <br>
                            </div>
                          </div>
                        </div-->
                        <!-- END Estructura item evento -->

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
            WHERE nvcharchivo like '%Eventos%' 
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
                             <object data="'.utf8_encode($row['nvcharchivo']).'" type="application/pdf" width="100%" height="800px"> 
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
          <!-- section secundaria -->

          <section class="col-lg-3">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Eventos Recientes</li>
              </ul>
			        <!-- ordenar por fecha descendente -->
              <div class="box-body">
                <div class="box-group" id="accordion">
                  <div class="panel box box-default">
	                    <div class="box-header with-border">
	                      <h4 class="">
	                        <a class="collapsed product-title-gray" href="`#">
	                           XXIII CONVENCION NACIONAL DE TRIBUTACION <br><span class="label label-default pull-left">13/06/2017</span>
	                        </a>
	                      </h4>
	                    </div>
	                    <div>
	                      <div class="box-body">
	                        <img src="http://ccpjunin.pe/imagenes/BCCPA2.jpg" alt="" class="img-responsive">
	                      </div>
	                    </div>
                  </div>
                  <div class="panel box box-default">
	                    <div class="box-header with-border">
	                      <h4 class="">
	                        <a class="collapsed product-title-gray" href="#">
	                          DIPLOMATURA <br><span class="label label-default pull-left">11/04/2017</span>
	                        </a>
	                      </h4>
	                    </div>
	                    <div>
	                      <div class="box-body">
	                          <img src="http://ccpjunin.pe/imagenes/4.jpg" alt="" class="img-responsive">
	                      </div>
	                    </div>
                  </div>
                  <div class="panel box box-default">
	                    <div class="box-header with-border">
	                      <h4 class="">
	                        <a class="collapsed product-title-gray" href="#">
	                          I CONVERSA DE FINANZAS <br><span class="label label-default pull-left">11/04/2017</span>
	                        </a>
	                      </h4>
	                    </div>
	                    <div>
	                      <div class="box-body">
	                          <img src="http://ccpjunin.pe/imagenes/2.jpg" alt="" class="img-responsive">
	                      </div>
	                    </div>
                  </div>
                  <div class="panel box box-default">
	                    <div class="box-header with-border">
	                      <h4 class="">
	                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2-top" aria-expanded="false" class="collapsed product-title-gray" href="#">
	                          INVESTIGACIÓN CONTABLE <br><span class="label label-default pull-left">11/04/2017</span>
	                        </a>
	                      </h4>
	                    </div>
                      <div class="box-body">
                         <p>Descripción: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, commodi dicta accusantium dolore, repellat doloribus! Tempora quos hic rerum sed veniam quaerat, facilis optio quidem, nostrum saepe eius quae repudiandae.</p>
                         <img src="http://ccpjunin.pe/imagenes/1.jpg" alt="" class="img-responsive">
                      </div>
                  </div>
                  <div class="panel box box-default">
	                    <div class="box-header with-border">
	                      <h4 class="">
	                        <a data-toggle="" data-parent="#accordion" href="#collapseOne7-top" aria-expanded="false" class="collapsed product-title-gray" href="#">
	                          FRACCIONAMIENTO ESPECIAL <br><span class="label label-default pull-left">22/03/2017</span>
	                        </a>
	                      </h4>
	                    </div>
                      <div class="box-body">
                        <p>Descripción: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, commodi dicta accusantium dolore, repellat doloribus! Tempora quos hic rerum sed veniam quaerat, facilis optio quidem, nostrum saepe eius quae repudiandae.</p>
                        <img src="http://ccpjunin.pe/imagenes/fraes.jpg" alt="" class="img-responsive">
                      </div>
	              </div>
                </div>
              </div>
            </div>
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Noticias Recientes</li>
              </ul>
              <div class="box-body">
                <div class="box-group" id="accordion">
                  <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a data-toggle="" data-parent="#accordion" href="#collapseOne1-top" aria-expanded="true" class="product-title-gray" href="#">
                             XXIII CONVENCION NACIONAL DE TRIBUTACION <br><span class="label label-default pull-left">13/06/2017</span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne1-top" class="panel-collapse collapse in" aria-expanded="true" style="">
                        <div class="box-body">
                          <img src="http://ccpjunin.pe/imagenes/BCCPA2.jpg" alt="" class="img-responsive">
                        </div>
                      </div>
                  </div>
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a data-toggle="" data-parent="#accordion" href="#noticia-00002" aria-expanded="true" class="product-title-gray">
                          Problemas con el internet perjudican Declaraciones Anuales <br> <span class="label label-danger pull-left">23/03/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div id="noticia-00002" class="panel-collapse collapse in" aria-expanded="true" style="">
                      <div class="box-body">
                        <img src="http://ccpjunin.pe/imagenes/sunat2.jpg" alt="" class="img-responsive">
                        <img src="http://ccpjunin.pe/imagenes/sunat.jpg" alt="" class="img-responsive">
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/ProblemasconlinternetperjudicanDeclaracionesAnuales.jpg" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div>
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a data-toggle="collapse" data-parent="#accordion" href="#noticia-00003" aria-expanded="true" class="product-title-gray">
                          Especializacion en Contratación <br> <span class="label label-danger pull-left">22/02/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div id="noticia-00003" class="panel-collapse collapse in" aria-expanded="true" style="">
                      <div class="box-body">
                        <img src="http://ccpjunin.pe/imagenes/osce.png" alt="" class="img-responsive">
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/Especializacion/en/contratacion/22/02/2017.jpg" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div>
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a data-toggle="collapse" data-parent="#accordion" href="#noticia-00004" aria-expanded="true" class="product-title-gray">
                          XVII Campeonato, Verano Contable 2017 <br> <span class="label label-danger pull-left">20/02/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div id="noticia-00004" class="panel-collapse collapse in" aria-expanded="true" style="">
                      <div class="box-body">
                        <img src="http://ccpjunin.pe/imagenes/verano.jpg" alt="" class="img-responsive">
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/XVII-Campeonato.jpg" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div>
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a data-toggle="collapse" data-parent="#accordion" href="#noticia-00005" aria-expanded="true" class="product-title-gray">
                          CIC 2017 - Una Experiencia Memorable Enterate más AQUI <br> <span class="label label-danger pull-left">28/02/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div id="noticia-00005" class="panel-collapse collapse in" aria-expanded="true" style="">
                      <div class="box-body">
                        <img src="http://ccpjunin.pe/imagenes/cic.jpg" alt="" class="img-responsive">
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/cic/2017.jpg" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
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
                      <div class="fb-comments" data-href="http://ccpjunin.pe/eventos/" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
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