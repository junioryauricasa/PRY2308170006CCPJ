<?php 
  $metadescripcion = 'Sección de Documentos del Colegio de Contadores Públicos de Junín';
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">


<!-- div con backgrond incluido -->
<section class="content" style="min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
            <h1 class="text-center header-page-h1">
                Documentos
            </h1>
            <p class="text-center text-description-header ">
                En esta sección UD. podrá descargar los documentos disponibles del Colegio de Contadores Públicos de Junín
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
          <section class="col-lg-4 col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-info-circle"></i> Mensaje Importante</li>
              </ul>
              <div class="box-body">
                  <p>
                    Podrá descargar los documentos disponibles del Colegio de Contadores Públicos de Junín
                  </p>
                  <br>
                  <div class="alert alert-success" id="success-alert">
                    <strong>Bienvenido!</strong> 
                    <br>
                    Te mostramos nuestra nueva experiencia de busqueda de archivos.
                    <br>
                    Solo ingresa el nombre del archivo y encuentralo de manera casi instantanea.
                  </div>
              </div>
            </div>
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-commenting"></i> Déjanos tu Opinión</li>
              </ul>
              <div class="box-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="fb-comments" data-href="http://ccpjunin.pe/documentos/" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <section class="col-lg-8 col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-list"></i> Documentos CCPJ</li>
                </ul>
                <div class="box-body">
                    <!-- json datatable -->
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                  <thead>
                    <tr>
                      <th>Nombre del Documento</th>
                      <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <td>CCP Junin - Compendio de Normas Generales</td>
                        <td>
                            <a data-toggle="tooltip" class="btn btn-danger btn-xs" data-original-title="Ver Documento" target="_blank" href="dist/docs/compendio_normas_generales.pdf">
                              <i class="fa fa-fw fa-file-pdf-o"></i>
                            </a>
                            <a data-toggle="tooltip" class="btn btn-default btn-xs" data-original-title="Descargar Documento" href="dist/docs/compendio_normas_generales.pdf" download="compendio_normas_generales">
                              <span class="glyphicon glyphicon-cloud-download"></span>
                            </a>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Requisitos Colegiatura 2016</td>
                        <td>
                          <a data-toggle="tooltip" class="btn btn-danger btn-xs" data-original-title="Ver Documento" target="_blank" href="dist/docs/requisitos_colegiatura.pdf">
                            <i class="fa fa-fw fa-file-pdf-o"></i>
                          </a>
                          <a data-toggle="tooltip" class="btn btn-default btn-xs" data-original-title="Descargar Documento" href="dist/docs/requisitos_colegiatura.pdf" download="requisitos_colegiatura">
                            <span class="glyphicon glyphicon-cloud-download"></span>
                          </a>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Requisitos para Certificación Profesional</td>
                        <td>
                          <a data-toggle="tooltip" class="btn btn-danger btn-xs" data-original-title="Ver Documento" target="_blank" href="dist/docs/requisitos_certificacion.pdf">
                            <i class="fa fa-fw fa-file-pdf-o"></i>
                          </a>
                          <a data-toggle="tooltip" class="btn btn-default btn-xs" data-original-title="Descargar Documento" href="dist/docs/requisitos_certificacion.pdf" download="requisitos_certificacion">
                            <span class="glyphicon glyphicon-cloud-download"></span>
                          </a>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Revista "El Contador XI"</td>
                        <td>
                            <a data-toggle="tooltip" class="btn btn-warning btn-xs" data-original-title="Ver Revista" href="revista-contador-XI">
                              <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a data-toggle="tooltip" class="btn btn-danger btn-xs" data-original-title="Ver Documento" target="_blank" href="dist/docs/Revista_Del_Contador_XI_2016.pdf">
                              <i class="fa fa-fw fa-file-pdf-o"></i>
                            </a>
                            <a data-toggle="tooltip" class="btn btn-default btn-xs" data-original-title="Descargar Documento" href="dist/docs/Revista_Del_Contador_XI_2016.pdf" download="Revista_Del_Contador_XI_2016">
                              <span class="glyphicon glyphicon-cloud-download"></span>
                            </a>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Compendio - Código de Ética de IFAC</td>
                        <td>
                            <a data-toggle="tooltip" class="btn btn-danger btn-xs" data-original-title="Ver Documento" target="_blank" href="dist/docs/compendio_codigo_ifac.pdf">
                              <i class="fa fa-fw fa-file-pdf-o"></i>
                            </a>
                            <a data-toggle="tooltip" class="btn btn-default btn-xs" data-original-title="Descargar Documento" href="dist/docs/compendio_codigo_ifac.pdf" download="compendio_codigo_ifac">
                              <span class="glyphicon glyphicon-cloud-download"></span>
                            </a>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Requisitos para la Incorporación a los Comités Funcionales</td>
                        <td>
                            <a data-toggle="tooltip" class="btn btn-danger btn-xs" data-original-title="Ver Documento" target="_blank" href="dist/docs/requisitos_comites_funcionales.pdf">
                              <i class="fa fa-fw fa-file-pdf-o"></i>
                            </a>
                            <a data-toggle="tooltip" class="btn btn-default btn-xs" data-original-title="Descargar Documento" href="dist/docs/requisitos_comites_funcionales.pdf" download="requisitos_comites_funcionales">
                              <span class="glyphicon glyphicon-cloud-download"></span>
                            </a>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Requisitos para Recertificación Profesional</td>
                        <td>
                            <a data-toggle="tooltip" class="btn btn-danger btn-xs" data-original-title="Ver Documento" target="_blank" href="dist/docs/requisitos_recertificacion.pdf">
                              <i class="fa fa-fw fa-file-pdf-o"></i>
                            </a>
                            <a data-toggle="tooltip" class="btn btn-default btn-xs" data-original-title="Descargar Documento" href="dist/docs/requisitos_recertificacion.pdf" download="requisitos_recertificacion.pd">
                              <span class="glyphicon glyphicon-cloud-download"></span>
                            </a>
                        </td>
                      </tr>
                    </tbody>                
                  </table>
                    <!-- END json datatable -->
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