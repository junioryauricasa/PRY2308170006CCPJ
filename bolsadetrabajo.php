<?php 
	$metadescripcion = 'Bolsa de Trabajo del Colegio de Contadores Públicos de Junín';
  include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

<!-- div con backgrond incluido -->
<section class="content" style="    min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-ofertas-laborales.jpg'); ">
            <h1 class="text-center header-page-h1">
                Bolsa de Trabajo
            </h1>
            <p class="text-center text-description-header ">
                Bienvenidos a la seccion de Oportunidades Laborales del Colegio de Contadores Públicos de Junín. <br> Aqui podrás mantenerte informado y al día de todos las ofertas laborales de nuestra institución, que esperas para comunicate con nosotros.
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
          <section class="col-lg-8">
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-list"></i>
                  <h3 class="box-title">
                    Ofertas laborales publicadas
                  </h3>
                </div>
                <div class="box-body">
                  <div class="box-group" id="accordion">

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

                    <?php include('funciones/OfertaLaboral-getdata-all.php'); ?>
  
                  </div>
                </div>
              </div>

          </section>
          <section class="col-lg-4">
            <!-- Noticias Recientes -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Noticias</li>
              </ul>
              <div class="box-body">

                    <!-- estructura convencional de una noticia -->
                    <!--div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a href="#" class="">
                             SUNAT solicita infomación de los agremiados <br> 
                             <span class="label label-default pull-left">05/04/2017</span> 
                          </a>
                        </h4>
                      </div>
                      <div id="" style="">
                        <div class="box-body">
                          <p class="text-justify">
                              <b>Descripcion:</b> Comunicado del 21 de Marzo del 2017 por parte de la SUNAT hacia el CCPJ, tener documentación en orden para evitar contingencias.
                          </p>
                          <br>
                          <img src="dist\img\noticias-eventos/sunat.jpg" alt="" class="img-responsive" width="100%">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/img/sunat.jpg" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div-->
                    <!-- END estructura convencional de una noticia -->
                    
                    <?php include('funciones/noticias-getdata-resumen.php'); ?>

              </div>
              <div class="box-footer text-center">
                <a href="noticias" class="uppercase">
                    Ver Más Noticias
                </a>
              </div>
            </div>
            <!-- Noticias Recientes -->

            <!-- 
                div comentarios fb 
                descripcion> si quieres cambiar >> data-href="cambiar-esto"
            -->
            <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs pull-right">
                    <li class="pull-left header"><i class="fa fa-list"></i> Dejanos un comentario </li>
                  </ul>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="fb-comments" data-href="http://ccpjunin.pe/bolsadetrabajoinstitucionalccpj" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
              </div>
            <!-- END div fb comentarios -->
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