<?php 
  include('_include/header.php');
?>



      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
              <div class="col-md-12 col-sm-12" style="padding: 0px">
                  <!--img src="dist/img/banner-superior.png" width="100%" style="background-size:cover;"-->
                  <div class="img-backg-banner-header">
                  </div>
              </div>
          </div>
          <div class="col-md-12" style="margin-top:10px">
              <center>
                <marquee direction="left" id="ejemplo">
                    <span class="Apple-style-span" style="color: black; ">
                        <!-- font slide dezlizable -->
                        <p id="text_slide_header" >
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsam nam maxime architecto modi eligendi vitae minim
                        </p>
                    </span>
                </marquee> 
                <a href="javascript:void(0);"></a> 
                <a href="javascript:void(0);"></a>
              </center>
          </div>

          <!-- slides -->
          <div class="col-md-12">
            <div class="box box-solid">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="4" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-inner">
                        <div class="item">
                          <a href="">
                            <img src="dist/img/slides/sld-evento-academico-0001.jpg" alt="First slide" width="100%">
                          </a>
                        </div>
                        <div class="item active left">
                          <a href="">
                            <img src="dist/img/slides/sld-evento-0001.jpg" alt="Second slide" width="100%">
                          </a>
                        </div>
                        <div class="item next left">
                          <a href="">
                            <img src="dist/img/slides/sld-noticias-0001.jpg" alt="Third slide" width="100%">
                          </a>
                        </div>
                        <div class="item next left">
                          <a href="">
                            <img src="dist/img/slides/sld-audita-0001.jpg" alt="Fourth slide" width="100%">
                          </a>
                        </div>

                        <!-- primer slide (principal) -->
                        <div class="item next left">
                          <a href="">
                            <img src="http://placehold.it/1200x275/39CCCC/ffffff&text=1200x275" alt="Default slide" width="100%">
                          </a>
                        </div>
                        <!-- end primer slide (principal) -->
                      </div>

                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
              </div>
            </div>
          </div>
          <!-- END slides -->
        </div>


        <section class="content">
          <!-- principal options  -->
          <div class="row">
            <div class="col-md-12">
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
                        <div class="box-group" id="accordion">
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a class="collapsed">
                                  Requisitos para Colegiatura <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div class="panel-collapse collapse in" aria-expanded="false">
                              <div class="box-body">
                                <p>
                                    Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!
                                </p>
                                <br> 
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a data-toggle="collapse" class="collapsed">
                                  Requisitos para Colegiatura <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div class="panel-collapse collapse in" aria-expanded="false">
                              <div class="box-body">
                                <p>
                                    Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!
                                </p>
                                <br> 
                                <!--iframe id="fred" style="" title="Requisito para colegiatura" src="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" frameborder="1" scrolling="auto" height="600" width="100%"></iframe-->
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3" aria-expanded="false" class="collapsed">
                                  Requisitos para Colegiatura <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div class="panel-collapse collapse in">
                              <div class="box-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!</p>
                                <br> 
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a href="#collapseOne4" aria-expanded="false" class="collapsed">
                                  Requisitos para Colegiatura <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div class="panel-collapse collapse in" >
                              <div class="box-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!</p>
                                <br> 
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a href="#" class="collapsed">
                                  Requisitos para Colegiatura <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div class="panel-collapse collapse in">
                              <div class="box-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!</p>
                                <br> 
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a  href="#" class="collapsed">
                                  Requisitos para Colegiatura <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div id="" class="panel-collapse collapse in" >
                              <div class="box-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!</p>
                                <br> 
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne7" aria-expanded="false" class="collapsed">
                                  Requisitos para Colegiatura <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div id="" class="panel-collapse collapse in" >
                              <div class="box-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!</p>
                                <br> 
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel box box-default">
                            <div class="box-header with-border">
                              <h4 class="">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne8" aria-expanded="false" class="collapsed">
                                  Publicación de la obra: "Aspectos Generales de los Procedimientos Administrativos Tributarios" <span class="label label-default pull-right">12/12/2017</span>
                                </a>
                              </h4>
                            </div>
                            <div id="" class="panel-collapse collapse in" >
                              <div class="box-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non totam ipsam earum repellat, voluptates facilis quidem qui neque quam quia. Animi fugiat eaque ducimus quam illum saepe alias! Modi, illum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestias, vel expedita dolores aspernatur placeat corrupti voluptas, animi facere eum, amet! Quaerat eveniet, explicabo ratione sit rerum, at accusantium sed.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae vel laudantium delectus possimus, odit sit tempora, modi incidunt ad, sequi, aperiam maxime. Sit tempore hic consequatur aut neque? Pariatur!</p>
                                <br> 
                                <div class='embed-responsive' style='padding-bottom:150%'>
                                     <object data="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf" type="application/pdf" width="100%" height="800px"> 
                                      <p>
                                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                                       <a href="http://ccpjunin.pe/documentos/requisitos_colegiatura.pdf">
                                         click para descargar el archivo PDF
                                       </a>
                                      </p>  
                                     </object>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="http://mobile--shop2.ecudemo4320.cafe24.com/web/product/medium/14_shop2_120454.jpg" alt="img noticia">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title-gray">
                          <h4>Titulo Noticia</h4>
                          <span class="label label-default pull-left">12/12/2017</span>
                        </a>
                        <br>
                            <span class="product-description">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eaque quidem nam totam, officia minima iure incidunt repellat molestiae magnam quod consequuntur, unde nemo fugit et vero placeat ut dolore!
                            </span>
                        <br>
                        <button type="button" class="btn bg-olive btn-sm  pull-right">Ver Noticia Completa</button>
                      </div>
                    </li>
                    <li class="item">
                      <div class="product-img">
                        <img src="http://mobile--shop2.ecudemo4320.cafe24.com/web/product/medium/14_shop2_120454.jpg" alt="img noticia">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title-gray">
                          <h4>Titulo Noticia</h4>
                          <span class="label label-default pull-left">12/12/2017</span>
                        </a>
                        <br>
                            <span class="product-description">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eaque quidem nam totam, officia minima iure incidunt repellat molestiae magnam quod consequuntur, unde nemo fugit et vero placeat ut dolore!
                            </span>
                        <br>
                        <button type="button" class="btn bg-olive btn-sm  pull-right">Ver Noticia Completa</button>
                      </div>
                    </li>
                    <li class="item">
                      <div class="product-img">
                        <img src="http://mobile--shop2.ecudemo4320.cafe24.com/web/product/medium/14_shop2_120454.jpg" alt="img noticia">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title-gray">
                          <h4>Titulo Noticia</h4>
                          <span class="label label-default pull-left">12/12/2017</span>
                        </a>
                        <br>
                            <span class="product-description">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eaque quidem nam totam, officia minima iure incidunt repellat molestiae magnam quod consequuntur, unde nemo fugit et vero placeat ut dolore!
                            </span>
                        <br>
                        <button type="button" class="btn bg-olive btn-sm  pull-right">Ver Noticia Completa</button>
                      </div>
                    </li>
                    <li class="item">
                      <div class="product-img">
                        <img src="http://mobile--shop2.ecudemo4320.cafe24.com/web/product/medium/14_shop2_120454.jpg" alt="img noticia" width="10px">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title-gray">
                          <h4>Titulo Noticia</h4>
                          <span class="label label-default pull-left">12/12/2017</span>
                        </a>
                        <br>
                            <span class="product-description">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eaque quidem nam totam, officia minima iure incidunt repellat molestiae magnam quod consequuntur, unde nemo fugit et vero placeat ut dolore!
                            </span>
                        <br>
                        <button type="button" class="btn bg-olive btn-sm  pull-right">Ver Noticia Completa</button>
                      </div>
                    </li>
                  </ul>
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
                      <img class="img-responsive" src="http://placehold.it/500x500/39CCCC/ffffff&text=500x500" alt="Photo" width="100%">
                    </div>
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="http://placehold.it/500x500/39CCCC/ffffff&text=500x500" alt="Photo" width="100%">
                          <br>
                          <img class="img-responsive" src="http://placehold.it/500x500/39CCCC/ffffff&text=500x500" alt="Photo" width="100%">
                        </div>
                        <div class="col-sm-6">
                          <img class="img-responsive" src="http://placehold.it/500x500/39CCCC/ffffff&text=500x500" alt="Photo" width="100%">
                          <br>
                          <img class="img-responsive" src="http://placehold.it/500x500/39CCCC/ffffff&text=500x500" alt="Photo" width="100%">
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