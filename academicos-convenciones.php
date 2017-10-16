<?php 
  $metadescripcion = 'Convenciones Académicas del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

<!-- div con backgrond incluido -->
<section class="content" style="    min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
            <h1 class="text-center header-page-h1">
                Convenciones
            </h1>
            <p class="text-center text-description-header ">
                Bienvenidos a la sección de convenios del Portal Web del Colegio de Contadores Públicos de Junín. 
                <br> 
                Ante dudas y/o consultas, comunícate con nosotros.
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
        <!-- Small boxes (Stat box) -->

        <!-- Main row -->
        <div class="row">
          <!-- section principal -->
          <section class="col-lg-8">
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                    Nuestras Convenciones
                  </h3>
                </div>
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- estructura convencional de una noticia -->
                    <!--div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a href="#" class=""> 
                          III Convención Nacional de Investigación Contable - Investiga 2015 - Tacna - 10, 11 y 12 de Diciembre.<br> 
                             <span class="label label-default pull-left">19/11/2017</span> 
                          </a>
                        </h4>
                      </div>
                      <div id="" style="">
                        <div class="box-body">
                          <p>
                              <b>Descripción: </b>Puede ver el video promocional en el siguiente link: 
                              <b><a href="https://www.youtube.com/watch?v=vmzN_e1SJBQ">Video Promocional "INVESTIGA 2015 - Tacna" </a></b>Puede visualizar y descargar los dipticos del evento en el siguiente elnace: Dipticos INVESTIGA 2015 - Tacna Encontrá más información en el siguiente enlace: 
                              <b><a href="http://www.ccptacna.org.pe/portal/rpt_bannerdetalle.php?id=19">INVESTIGA 2015 - Tacna</a></b>
                          </p>
                          <br>
                          <img src="dist/img/convenciones/convencion_investiga_banner.jpg" alt="" class="img-responsive" width="100%">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/dist/img/convenciones/convencion_investiga_banner.jpg" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div-->
                    <!-- END estructura convencional de una noticia -->

                    <?php include('funciones/AcademicoConvenciones-getdata-all.php'); ?>

                </div>
              </div>

          </section>
          <!-- END section principal -->
          
          <!-- section secundario -->
          <section class="col-lg-4">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Ofertas Laborales</li>
              </ul>
              <div class="box-body">
                  <!-- div bolsa trabajo -->
                  <!--div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a href="#collapseOne1">
                          Convocatoria 21 de Agosto del 2017 <span class="label label-default pull-right">21/08/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div class="">
                      <div class="box-body">
                        <p>
                          Descripción: (Vista previa) para poder descargar el archivo completo, dar click en el siguiente enlace <b><a href="dist/docs/ofertalaboral/21-agosto-1Bolsa-de-trabajo.pdf" download="dist/docs/ofertalaboral/21-agosto-1Bolsa-de-trabajo.pdf">Descargar archivo completo</a></b>
                        </p>
                        <br> 
                        <div class="embed-responsive" style="padding-bottom:150%">
                             <object data="dist/docs/ofertalaboral/21-agosto-1Bolsa-de-trabajo.pdf" type="application/pdf" width="100%" height="800px" internalinstanceid="508" title=""> 
                              <p>
                                Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                               <a href="dist/docs/ofertalaboral/21-agosto-1Bolsa-de-trabajo.pdf">
                                 click para descargar el archivo PDF
                               </a>
                              </p>  
                             </object>
                        </div>
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/bolsatrabajo1" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div-->
                  <!-- div bolsa trabajo -->
                  
                  <?php include('funciones/OfertaLaboral-getdata-resumen.php'); ?>

              </div>
              <div class="box-footer text-center">
                <a href="bolsadetrabajo" class="uppercase">
                    Ver Ofertas Laborales
                </a>
              </div>
            </div>

            <!-- fb comments -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-commenting"></i> Déjanos tu Opinión</li>
              </ul>
              <div class="box-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="fb-comments" data-href="http://ccpjunin.pe/noticias/" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
              </div>
            </div>
            <!-- END fb comments -->

          </section>
          <!-- END section secundario -->
        </div>
    </section>
</div>

<?php 
	include('_include/footer.php');
?>