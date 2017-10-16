<?php 
  $metadescripcion = 'Gestor de Cobranza del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">
    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-cobranza.jpg'); ">
                <h1 class="text-center header-page-h1">
                    GESTOR DE COBRANZA Y CURRIER
                </h1>
                <p class="text-center text-description-header ">
                    Breve información correspondiente a nuestro Gestor de Cobranza (cuotas ordinarias, extraordinarias y otros)
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
          <section class="col-lg-4 col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-list"></i> GESTOR DE COBRANZA Y CURRIER</li>
              </ul>
              <div class="box-body">
                  <p>Se informa a todos nuestros agremiados que nuestro nuevo GESTOR DE COBRANZAS Y CURRIER es:</p>
                  <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>Nombre:</td>
                          <td><b>CPC Hugo Peña Durán</b></td>
                        </tr>
                        <tr>
                          <td>Celular</td>
                          <td><b><a href="callto:964848130">#964848130</a></b></td>
                        </tr>
                        <tr>
                          <td>E-Mail:</td>
                          <td><b><a href="mailto:hugopenaduran@hotmail.com">hugopenaduran@hotmail.com</a></b></td>
                        </tr>
                      </tbody>
                  </table>
                  <br>
                  <p>
                    <b>
                      **Puede comunicarse con él para fijar la hora y fecha de la cobranza (cuotas ordinarias, extraordinarias y otros).
                    </b>
                  </p>
                  <br>
              </div>
            </div>
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-commenting"></i> Déjanos tu Opinión</li>
              </ul>
              <div class="box-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="fb-comments" data-href="http://ccpjunin.pe/gestor-de-cobranza/" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <section class="col-lg-8 col-md-12">
              <div class="nav-tabs-custom">
                <div class="box-body">  
                    <img src="dist\img\parallax/Imagen1.jpeg" alt="imagen gestion de cobranza" class="img-responsive">
                </div>
              </div>
          </section>
        </div>
        <br>
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

  /*
  Full screen Modal 
  */
  .fullscreen-modal .modal-dialog {
    margin: 0;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
    padding-top: 40px
  }
  @media (min-width: 768px) {
    .fullscreen-modal .modal-dialog {
      width: 750px;
    }
  }
  @media (min-width: 992px) {
    .fullscreen-modal .modal-dialog {
      width: 970px;
    }
  }
  @media (min-width: 1200px) {
    .fullscreen-modal .modal-dialog {
       width: 1170px;
    }
  }
</style>

<script type="javascript">
  $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>

<?php 
	include('_include/footer.php');
?>