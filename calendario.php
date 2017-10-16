<?php 
	  $metadescripcion = 'Calendario del Colegio de Contadores Públicos de Junín';
    include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    Calendario
                </h1>
                <br>
                <br>
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
        <div class="row">
            <section class="col-lg-9">
                <div class="box box-solid">
                  <div class="box-header">
                    <i class="fa fa-map-marker"></i>
                    <h3 class="box-title">
                      Calendário
                    </h3>
                  </div>
                  <div class="box-body">
                    <!-- pegar el iframe -->
                    <iframe src="https://calendar.google.com/calendar/embed?src=eventosccpj%40gmail.com&ctz=America/Lima" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                  </div>
                </div>
            </section>

            <section class="col-lg-3">
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