<?php 
    $metadescripcion = 'El Colegio de Contadores Públicos de Junin es una Institución Profesional, autónoma, con personería de Derecho Público Interno';
    include('_include/header.php');
?>
      <div class="content-wrapper" style="padding-top: 0px">
        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <div class="img-backg-banner-header" style="">
              </div>
            </div>
          </div>
          <div class="col-md-12" style="padding: 5px">
              <marquee width="100%" height="20" align="bottom" direction="left">
                  <p>Bienvenido a la nueva página web del Colegio de Contadores Públicos de Junín // <a href="consulta-habil">Realiza tus consultas de habilidad muy fácilmente</a> // <a href="eventos">Entérate de nuestros Eventos Académicos</a></p>
              </marquee>
          </div>
        </div>


        <section class="content" style="width: 90%; margin: 0 auto">
          <div class="row">
            <!-- slides -->
            <div class="">
              <div class="box box-solid">
                <div id="carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
                      <!-- order liist for carrousel -->
                      <!--ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                        <li data-target="#carousel-example" data-slide-to="3"></li>
                        <li data-target="#carousel-example" data-slide-to="4"></li>
                        <li data-target="#carousel-example" data-slide-to="5"></li>
                        <li data-target="#carousel-example" data-slide-to="6"></li>
                        <li data-target="#carousel-example" data-slide-to="7"></li>
                        <li data-target="#carousel-example" data-slide-to="8"></li>
                        <li data-target="#carousel-example" data-slide-to="9"></li>
                        <li data-target="#carousel-example" data-slide-to="10"></li>
                        <li data-target="#carousel-example" data-slide-to="11"></li>
                        <li data-target="#carousel-example" data-slide-to="12"></li>
                        <li data-target="#carousel-example" data-slide-to="13"></li>
                      </ol-->
                      <!-- END order liist for carrousel -->

                       <!-- IMG slides for carrousel -->
                      <div class="carousel-inner" role="listbox">
                        
                        <!--  img principal 0 -->
                        <!--div class="item active">
                          <a href="#">
                            <img src="http://placehold.it/900x340/39CCCC/ffffff&text=900x340" class="img-responsive banner-principal" width="100%" height="430px" />
                          </a>
                          <div class="carousel-caption">
                          </div>
                        </div-->
                        <!--  END img principal -->

                        <!-- 1 slide  -->
                        <div class="item active">
                          <a href="requisitos-recertificacion">
                            <img src="dist/img/slides/sld-principal-0001.jpg" width="100%" height="430px" />
                          </a>
                          <div class="carousel-caption">
                          </div>
                        </div>
  
                        <?php include('funciones/index-slides.php'); ?>

                      </div>
                      <!-- END IMG slides for carrousel -->

                      <!-- link for rigth or letf -->
                          <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                      <!-- END link for rigth or letf -->

                    </div>
              </div>
            </div>
            <!-- END slides -->
          </div>


          <!-- principal options  -->
          <div class="row">
            <div class="col-lg-12" style="">
                <?php include('_include/principaloptions.php'); ?>
            </div>
          </div>
          <!-- END principal options -->
          <div class="row">
            <!-- Noticias -->
            <section class="col-lg-8">
                <div class="">
                    <div class="box box-solid">
                      <div class="box-header">
                        <i class="fa fa-file-pdf-o"></i>
                        <h3 class="box-title">
                          Contador al Día
                        </h3>
                      </div>
                      <div class="box-body">
                          <!-- contador al dia actualiza -->
                          <!--div class="panel box box-default ">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5" aria-expanded="false" class="collapsed">
                                  Terminos de referencia para la contratación de servicios cuyo valor estimado sea menor o igual a 8 UIT  <br><span class="label label-default pull-left">15/06/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne5" class="panel-collapse collapse in" aria-expanded="false" style="">
                              <div class="box-body">
                                <div class="embed-responsive" style="padding-bottom:150%">
                                     <object data="dist\docs\contador al dia/contraloria.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="dist\docs\contador al dia/contraloria.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                                <br>
                                <div class="fb-comments" data-href="http://ccpjunin.pe/imagenes/contraloria.pdf" data-width="100%" data-numposts="20"></div>
                              </div>
                            </div>
                          </div-->
                          <!-- END contador al dia actualiza -->

                          <?php include('funciones/ContadorAlDia-resumen.php'); ?>
                      
                      </div>
                      <div class="box-footer text-center">
                        <a href="contadoraldia" class="uppercase">
                            Ver Todos
                        </a>
                      </div>
                    </div>
                </div>
            </section>
            <!-- END Noticias -->

            <!-- Comentarios  -->
            <section class="col-lg-4">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-newspaper-o"></i> Noticias</li>
                </ul>
                <div class="box-body">

                    <!-- estructura convencional de una noticia -->
                    <!--div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="">
                          <a href="#" class="">
                             Comunicado <br> 
                             <span class="label label-default pull-left">13/09/2017</span> 
                          </a>
                        </h4>
                      </div>
                      <div id="" style="">
                        <div class="box-body">
                          <img src="admin/" alt="" class="img-responsive" width="100%">
                          <div class="fb-comments" data-href="http://ccpjunin.pe/img/21754834_1840754809272454_675416764_o (1).jpg" data-width="100%" data-numposts="20"></div>
                        </div>
                      </div>
                    </div-->
                    <!-- END estructura convencional de una noticia -->
                    <?php include('funciones/noticias-getdata-resumen.php'); ?>

                </div>
                <div class="box-footer text-center">
                  <a href="noticias" class="uppercase">
                      Ver todas las Noticias
                  </a>
                </div>
              </div>
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-newspaper-o"></i>Dejanos tu Opinión</li>
                </ul>
                <div class="box-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <!-- Comentario fb -->
                      <div class="fb-comments" data-href="http://ccpjunin.pe/index/" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- END noticas resumen  -->
          </div>
        </section> 

        <!-- section parallax -->   
        <section id="parallax-div">
            <div class="paralax" style="height: 300px">
            </div>
        </section>
        <!-- END section parallax -->  

        <!-- Section Galeria -->
        <section class="content">
            <div class="box box-solid">
              <div class="box-header">
                <i class="fa fa-camera"></i>
                <h3 class="box-title">
                  Galeria de Fotos y Videos
                </h3>
              </div>
              <div class="box-body">
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="dist\img\foto-y-video/21.jpg" alt="Photo" width="100%">
                    </div>
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="dist\img\foto-y-video/1.jpg" alt="Photo" width="100%">
                          <br>
                          <img class="img-responsive" src="dist\img\foto-y-video/7.jpg" alt="Photo" width="100%">
                        </div>
                        <div class="col-sm-6">
                          <img class="img-responsive" src="dist\img\foto-y-video/3.jpg" alt="Photo" width="100%">
                          <br>
                          <img class="img-responsive" src="dist\img\foto-y-video/4.jpg" alt="Photo" width="100%">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="box-footer text-center">
                <a href="galeria-fotos-y-videos" class="uppercase">
                    Ver Toda la Galería
                </a>
              </div>
            </div>
        </section>
        <!-- END Section Galeria -->

      </div>

<?php 
  include('_include/footer.php');
?>

<script>
  $(document).ready(function(){
   // Añadimos la funcionalidad al evento scroll de window
   $(window).scroll(function(){
   // Comprobamos si estamos en la parte inferior de la página.
   if ($(window).scrollTop() == $(document).height() - $(window).height()){
   // Mostramos la imagen de cargando
   $('div#last_msg_loader').html('<img src="bigLoader.gif">');
   // Cargamos el contenido.
   var ID=$(".message_box:last").attr("id");
   $.post("load_data.php?action=get&last_msg_id="+ID,
   }
   });
   });
  });
</script>


<style>
  .banner-principal{
    /*min-height: 430px;*/
  }

  div.carousel-inner>div.item>a>img{
    /*
    height: 430px
    */
  }


.carousel-fade .carousel-inner .item {
  transition-property: opacity;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  opacity: 0;
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  transform: translate3d(0, 0, 0);
}


</style>