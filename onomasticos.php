<?php 
  $metadescripcion = 'Sección Onomasticos del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

<!-- div con backgrond incluido -->
<section class="content" style=" min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-onomasticos.jpg'); ">
            <h1 class="text-center header-page-h1">
                Onomásticos del día de hoy
            </h1>
            <p class="text-center text-description-header ">
                Bienvenidos a la seccion Onomásticos del Colegio de Contadores Públicos de Junín. <br> Desde ya ofrecemos un cordial saludo nuestros agremiados que cumplan años hoy. <br> <b>MUCHOS EXITOS Y BENDICIONES</b>
                <br>
                <br>
                <a href="#" class="btn btn-transparente">Informarme Más</a>
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
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
          <!-- seccion lado derecho -->
          <section class="col-lg-8 col-md-5">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Mensaje por Onomástico</li>
              </ul>
              <div class="box-body">
                <div class="box-group" id="accordion">
                  <div class="panel box box-default">
                    <div class="panel-collapse collapse in" aria-expanded="false">
                      <div class="box-body">
                        <!-- mensaje alusivo al santo -->
                        <p>
                          Reciban un cordial saludo por parte de la junta directiva del CCPJ por esta fecha tan especial a todos nuestros agremiados que cumplen años.
                        </p>
                        <!-- imagen alusiva al santo, personalizada -->
                        <img src="dist/img/parallax/pexels-photo-137485.jpeg" alt="" class="img-responsive" width="100%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="col-lg-4 col-md-7">
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                    Saludos Para:
                  </h3>
                </div>
                <div class="box-body">
                  <div class="box-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <!-- div individual -->
                          <div class="col-lg-12">
                            <ul>
                              <li> <h4> EGOAVIL SARAPURA NICANOR ESTEBAN</h4> </li>
                              <li> <h4> LAURA EULOGIO ELVIRA</h4> </li>
                              <li> <h4> CERAS ROJAS CARLOS JAVIER</h4> </li>
                              <li> <h4> CHUMBIMUNI TELLO EVELIN CARITO</h4> </li>
                              <li> <h4> ROMO CARHUALLANQUI LUIS CRISTHIAM</h4> </li>
                              <li> <h4> CERAS EGOAVIL CINTHYA BIVIANA</h4> </li>
                            </ul>
                          </div>
                          <!-- div individual -->
                        </div>
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