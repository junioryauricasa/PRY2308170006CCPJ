<?php 
  include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">
    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    COMITE FUNCIONAL DE LA GESTIÓN DE LA MICRO Y PEQUEÑA EMPRESA
                </h1>
                <p class="text-center text-description-header ">
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
                <li class="pull-left header"><i class="fa fa-list"></i> Junta Directiva del Comité</li>
              </ul>
              <div class="box-body">
                  <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th>Cargo</th>
                          <th>Apellidos y Nombres</th>
                        </tr>
                        <tr>
                          <td>Presidenta</td>
                          <td>CPCC. MARITZA MARIBEL LLACTA SURICHAQUI</td>
                        </tr>
                        <tr>
                          <td>Vicepresidente</td>
                          <td>CPCC. VICENTE FERNANDEZ TICLLACURI</td>
                        </tr>
                        <tr>
                          <td>Secretaria</td>
                          <td>CPC. PATRICIA BARRIOS ESTEBAN</td>
                        </tr>
                        <tr>
                          <td>Tesorera</td>
                          <td>CPC. LUZ PEREZ RUIZ</td>
                        </tr>
                        <tr>
                          <td>Vocal</td>
                          <td>CPC. CARMEN CECILIA ORIHUELA ROMERO</td>
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
                      <div class="fb-comments" data-href="http://ccpjunin.pe/gestion-comite-mypes/" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <section class="col-lg-8 col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-list"></i> Agremiados que forman parte del Comité</li>
                </ul>
                <div class="box-body">  
                    <div class='embed-responsive' style='padding-bottom:150%'>
                         <object data="http://www.ccpjunin.pe/htmls/imagenes/comites/mype.pdf" type="application/pdf" width="100%" height="800px"> 
                          <p>
                            Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                           <a href="http://www.ccpjunin.pe/htmls/imagenes/comites/mype.pdf">
                             click para descargar el archivo PDF
                           </a>
                          </p>  
                         </object>
                    </div>
                </div>
              </div>
          </section>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5059.773489627902!2d-75.21317235630036!3d-12.069722345035359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c7ed02d929c4a17!2sColegio+de+Contadores+P%C3%BAblicos+de+Jun%C3%ADn!5e0!3m2!1ses!2spe!4v1504307147190" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
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