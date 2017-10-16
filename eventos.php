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
                        <?php include ('funciones/eventos-getdata-all.php'); ?>
                      </div>
                    </div>
                </div>
              </div>
          </section>
          <!-- section secundaria -->

          <section class="col-lg-3">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Noticias Recientes</li>
              </ul>
              <div class="box-body">
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



<?php 
	include('_include/footer.php');
?>