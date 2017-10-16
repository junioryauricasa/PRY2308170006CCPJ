<?php
  $metadescripcion = 'Sección de Comunicados del Colegio de Contadores Públicos de Junín'; 
	include('_include/header.php');
?>


<div class="content-wrapper" style="padding-top: 30px">

    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    Comunicados
                </h1>
                <p class="text-center text-description-header ">
                    Bienvenidos a la sección de comunicados del Colegio de Contadore Públicos de Junín
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
                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                    Nuestros Comunicados
                  </h3>
                </div>
                <div class="box-body">
                    <?php include('funciones/comunicados-getdata-all.php'); ?>
                </div>
              </div>

          </section>

          <section class="col-lg-4">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Noticias</li>
              </ul>
              <div class="box-body">
                  <?php include('funciones/noticias-getdata-all.php'); ?>
              </div>
              <div class="box-footer text-center">
                <a href="noticias" class="uppercase">
                    Ver Más Noticias
                </a>
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