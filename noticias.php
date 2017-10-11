<?php 
  $metadescripcion = 'Sección Noticias del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

<!-- div con backgrond incluido -->
<section class="content" style="    min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
            <h1 class="text-center header-page-h1">
                Noticias
            </h1>
            <p class="text-center text-description-header ">
                Bienvenidos a la seccion de Noticias del Portal Web del Colegio de Contadores Públicos de Junín. <br> Mantente informado con las ultimas noticias que tenemos para ti.
                <br>
                <br>
                <a href="#" class="btn btn-transparente">Deseo Inscribirme</a>
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
                    Nuestros Últimas Noticias
                  </h3>
                </div>
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- estructura convencional de una noticia -->
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a href="#" class="">
                             SUNAT solicita infomación de los agremiados <br> 
                             <span class="label label-default pull-left">05/04/2017</span> <!-- FEcha noticia -->
                          </a>
                        </h4>
                      </div>
                      <div id="" style="">
                        <div class="box-body">
                          <img src="dist\img\noticias-eventos/sunat.jpg" alt="" class="img-responsive" width="100%">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/img/sunat.jpg" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div>
                    <!-- END estructura convencional de una noticia -->
      
                    <!-- estructura convencional de una noticia -->
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a>
                            Problemas con el internet perjudican Declaraciones Anuales <br> 
                            <span class="label label-default pull-left">23/03/2017</span> <!-- FEcha noticia -->
                          </a>
                        </h4>
                      </div>
                      <div>
                        <div class="box-body">
                          <img src="dist\img\noticias-eventos/sunat2.jpg" alt="" class="img-responsive">
                          <img src="dist\img\noticias-eventos/sunat (1).jpg" alt="" class="img-responsive">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/sunatsunat2/1.jpg" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div>
                    <!-- END estructura convencional de una noticia -->

                    <!-- estructura convencional de una noticia -->
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a href="#">
                            Especializacion en Contratación <br> 
                            <span class="label label-default pull-left">22/02/2017</span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne3" style="">
                        <div class="box-body">
                          <img src="dist\img\noticias-eventos/osce.png" alt="" class="img-responsive" width="100%">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/osce.png" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div>
                    <!-- END estructura convencional de una noticia -->

                    <!-- estructura convencional de una noticia -->
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a href="#">
                             XVII Campeonato, Verano Contable 2017 <br> 
                             <span class="label label-default pull-left">20/02/2017</span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne4" style="">
                        <div class="box-body">
                          <img src="dist\img\noticias-eventos/verano.jpg" alt="" class="img-responsive">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/verano.jpg" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div>
                    <!-- END estructura convencional de una noticia -->

                    <!-- estructura convencional de una noticia -->
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a href="#">
                            CIC 2017 - Una Experiencia Memorable Enterate más AQUI <br> 
                            <span class="label label-default pull-left">28/02/2017</span>
                          </a>
                        </h4>
                      </div>
                      <div id="" style="">
                        <div class="box-body">
                          <img src="dist\img\noticias-eventos/cic.jpg" alt="" class="img-responsive">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/cic.jpg" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div>
                    <!-- END estructura convencional de una noticia -->
                  </div>
                </div>
              </div>
              <!-- paginador -->
              <!--ul class="pagination">
                <li><a href="#">Anterior</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Siguiente</a></li>
              </ul-->
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
                  <div class="panel box box-default">
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
                  </div>
                  <!-- div bolsa trabajo -->

                  <!-- div bolsa trabajo -->
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a href="#collapseOne1">
                          Convocatoria 20 de Julio del 2017 <span class="label label-default pull-right">20/07/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div class="">
                      <div class="box-body">
                        <p>
                          Descripción: (Vista previa) para poder descargar el archivo completo, dar click en el siguiente enlace <b><a href="dist/docs/ofertalaboral/20-agost-Bolsa-de-trabajo.pdf" download="dist/docs/ofertalaboral/20-agost-Bolsa-de-trabajo.pdf">Descargar archivo completo</a></b>
                        </p>
                        <br> 
                        <div class="embed-responsive" style="padding-bottom:150%">
                             <object data="dist/docs/ofertalaboral/20-agost-Bolsa-de-trabajo.pdf" type="application/pdf" width="100%" height="800px" internalinstanceid="508" title=""> 
                              <p>
                                Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                               <a href="dist/docs/ofertalaboral/20-agost-Bolsa-de-trabajo.pdf">
                                 click para descargar el archivo PDF
                               </a>
                              </p>  
                             </object>
                        </div>
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/bolsatrabajo0002" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div>
                  <!-- div bolsa trabajo -->

                  <!-- div bolsa trabajo -->
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a href="#collapseOne1">
                          Convocatoria 20 de Julio del 2017 <span class="label label-default pull-right">20/07/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div class="">
                      <div class="box-body">
                        <p>
                          Descripción: (Vista previa) para poder descargar el archivo completo, dar click en el siguiente enlace <b><a href="dist/docs/ofertalaboral/20-julio-2Bolsa-de-trabajo.pdf" download="dist/docs/ofertalaboral/20-julio-2Bolsa-de-trabajo.pdf">Descargar archivo completo</a></b>
                        </p>
                        <br> 
                        <div class="embed-responsive" style="padding-bottom:150%">
                             <object data="dist/docs/ofertalaboral/20-julio-2Bolsa-de-trabajo.pdf" type="application/pdf" width="100%" height="800px" internalinstanceid="508" title=""> 
                              <p>
                                Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                               <a href="dist/docs/ofertalaboral/20-julio-2Bolsa-de-trabajo.pdf">
                                 click para descargar el archivo PDF
                               </a>
                              </p>  
                             </object>
                        </div>
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/bolsatrabajo0003" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div>
                  <!-- div bolsa trabajo -->

                  <!-- div bolsa trabajo -->
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a href="#collapseOne1">
                          Convocatoria 10 de Julio del 2017 <span class="label label-default pull-right">10/07/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div class="">
                      <div class="box-body">
                        <p>
                          Descripción: (Vista previa) para poder descargar el archivo completo, dar click en el siguiente enlace <b><a href="dist/docs/ofertalaboral/10-julio-bolsa-de-trabajo.pdf" download="dist/docs/ofertalaboral/10-julio-bolsa-de-trabajo.pdf">Descargar archivo completo</a></b>
                        </p>
                        <br> 
                        <div class="embed-responsive" style="padding-bottom:150%">
                             <object data="dist/docs/ofertalaboral/10-julio-bolsa-de-trabajo.pdf" type="application/pdf" width="100%" height="800px" internalinstanceid="508" title=""> 
                              <p>
                                Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                               <a href="dist/docs/ofertalaboral/10-julio-bolsa-de-trabajo.pdf">
                                 click para descargar el archivo PDF
                               </a>
                              </p>  
                             </object>
                        </div>
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/bolsatrabajo0004" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div>
                  <!-- div bolsa trabajo -->

                  <!-- div bolsa trabajo -->
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="">
                        <a href="#collapseOne1">
                          Convocatoria 06 de Julio del 2017 <span class="label label-default pull-right">06/07/2017</span>
                        </a>
                      </h4>
                    </div>
                    <div class="">
                      <div class="box-body">
                        <p>
                          Descripción: (Vista previa) para poder descargar el archivo completo, dar click en el siguiente enlace <b><a href="dist/docs/ofertalaboral/06-julio-Bolsa-de-trabajo.pdf" download="dist/docs/ofertalaboral/06-julio-Bolsa-de-trabajo.pdf">Descargar archivo completo</a></b>
                        </p>
                        <br> 
                        <div class="embed-responsive" style="padding-bottom:150%">
                             <object data="dist/docs/ofertalaboral/06-julio-Bolsa-de-trabajo.pdf" type="application/pdf" width="100%" height="800px" internalinstanceid="508" title=""> 
                              <p>
                                Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                               <a href="dist/docs/ofertalaboral/06-julio-Bolsa-de-trabajo.pdf">
                                 click para descargar el archivo PDF
                               </a>
                              </p>  
                             </object>
                        </div>
                        <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/bolsatrabajo0005" data-width="100%" data-numposts="20"></div>
                      </div>
                    </div>
                  </div>
                  <!-- div bolsa trabajo -->
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