<?php 
	// apoyo-permanente-defensa-profesional
	// los datos del comite no existen en el excel que nos dieron
  $metadescripcion = 'Comité de Apoyo Permanente Defensa Profesional del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">
    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    COMITÉ FUNCIONAL DE APOYO PERMANENTE Y DEFENSA PROFESIONAL
                </h1>
                <p class="text-center text-description-header ">
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
          <section class="col-lg-4 col-md-12">
	            <div class="nav-tabs-custom">
	              <ul class="nav nav-tabs pull-right">
	                <li class="pull-left header"><i class="fa fa-list"></i> Junta Directiva</li>
	              </ul>
	              <div class="box-body">
	                  <table class="table table-bordered">
	                      <tbody>
	                        <tr>
	                          <th>Cargo</th>
	                          <th>Nombres y Apellidos</th>
	                        </tr>
	                        <tr>
	                          <td>Presidenta</td>
	                          <td></td>
	                        </tr>
	                        <tr>
	                          <td>Vicepresidenta</td>
	                          <td></td>
	                        </tr>
	                        <tr>
	                          <td>Secretario</td>
	                          <td></td>
	                        </tr>
	                        <tr>
	                          <td>Tesorero</td>
	                          <td></td>
	                        </tr>
	                        <tr>
	                          <td>Vocal</td>
	                          <td></td>
	                        </tr>
	                      </tbody>
	                  </table>
	              </div>
	            </div>
	            <div class="nav-tabs-custom">
	              <ul class="nav nav-tabs pull-right">
	                <li class="pull-left header"><i class="fa fa-commenting"></i> Déjanos tu Opinión</li>
	              </ul>
	              <div class="box-body">
	                  <div class="row">
	                    <div class="col-lg-12">
	                      <div class="fb-comments" data-href="http://ccpjunin.pe/apoyo-permanente-defensa-profesional" data-width="100%" data-numposts="20"></div>
	                    </div>
	                  </div>
	              </div>
	            </div>
          </section>
          <section class="col-lg-8 col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-list"></i></li>
                </ul>
                <div class="box-body">  
                    <div class="embed-responsive" style="padding-bottom:150%">
                         <!--object data="http://ccpjunin.pe/htmls/imagenes/comites/investigacion.pdf" type="application/pdf" width="100%" height="800px"> 
                          <p>
                            Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                           <a href="http://ccpjunin.pe/htmls/imagenes/comites/investigacion.pdf">
                             click para descargar el archivo PDF
                           </a>
                          </p>  
                         </object-->
                    </div>
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