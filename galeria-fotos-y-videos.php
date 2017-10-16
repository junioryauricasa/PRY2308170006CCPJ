<?php 
  $metadescripcion = 'Galeria de Fotos y Videos del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>
<div class="content-wrapper" style="padding-top: 30px">

    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    Galeria de Imagenes
                </h1>
                <p class="text-center text-description-header ">
                   Bienvenido a la sección de fotos y videos del portal web del colegio de contadores publicos de Junín
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
          <section class="col-lg-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-photo"></i> Galería de Fotos y Videos</li>
              </ul>
              <div class="box-body">
                  <!--div class="container" style="width: 100%;">
                    <div class="row">
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/1.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/2.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/3.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/4.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/6.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/8.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/9.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/10.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/5.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/11.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="item well">
                        <img src="http://ccpjunin.pe/img/galeria/2017/12.jpg" alt="" class="img-responsive">
                      </div>
                    </div>
                  </div-->
                  <?php include ('funciones/fotos-getdata-all.php'); ?>
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