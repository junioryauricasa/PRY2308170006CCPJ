<?php 
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

    <!-- div con backgrond incluido -->
    <section class="content" style=" min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-ofertas-laborales.jpg'); ">
                <h1 class="text-center header-page-h1">
                    Lista de Precios de Servicios
                </h1>
                <p class="text-center text-description-header ">
                    En esta sección UD. podrá descargar los documentos disponibles del Colegio de Contadores Públicos de Junín
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
                <li class="pull-left header"><i class="fa fa-info-circle"></i> Alquiler de auditorio</li>
              </ul>
              <div class="box-body">
                  Público en General - Incluye: 
                  <ul>
                    <li>65 Carpetas </li>
                    <li>Podio </li>
                    <li>Mesa de Honor</li>
                    <li>Ecram</li>
                    <li>Proyector</li>
                  </ul>
                  <div class="alert alert-danger" id="success-alert">
                    <strong>Importante!</strong> 
                    <br>
                    Puede realizar la consulta de cada uno de los precios de servicios y alquiler de los equipos en la tabla.<br>
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
                      <div class="fb-comments" data-href="http://ccpjunin.pe/preciosporservicios/" data-width="100%" data-numposts="20"></div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <section class="col-lg-8 col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-list"></i> Lista de Precios por Servicios</li>
                </ul>
                <div class="box-body">
                    <!-- json datatable -->
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                  <thead>
                    <tr>
                      <th>Denominación de Servicio</th>
                      <th>Costo del Servicio</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <td>Alquiler de Auditorio De 1 a 4 horas (65 Carpetas / Podio / Mesa de Honor / Ecram / Proyector)</td>
                        <td>
                          <span class="btn btn-success btn-xs">S/. 200.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Alquiler de Auditorio De 4 a 8 horas (65 Carpetas / Podio / Mesa de Honor / Ecram / Proyector)</td>
                        <td>
                          <span class="btn btn-success btn-xs">S/. 350.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Alquiler de Auditorio Más de 8 horas (incluido IGV) (65 Carpetas / Podio / Mesa de Honor / Ecram / Proyector)</td>
                        <td>
                          <span class="btn btn-danger btn-xs">S/. 40.00 por hora</span>
                        </td>
                      </tr>

                      <tr class="">
                        <td>Equipo de Sonido - 1 a 4 Horas</td>
                        <td>
                          <span class="btn btn-success btn-xs">S/. 100.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Equipo de Sonido - 4 a 8 Horas</td>
                        <td>
                          <span class="btn btn-success btn-xs">S/. 180.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>
                          Equipo de sonido - Más de 8 horas (incluido IGV)
                        </td>
                        <td>
                          <span class="btn btn-danger btn-xs">S/.18.00 por hora</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>
                          Equipo de Equipos - 1 Hora Proyector y LAPTOP
                        </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.40.00</span>
                        </td>
                      </tr>

                      <tr class="">
                        <td>Cuota Ordinaria Miembro de la Orden</td>
                        <td>
                          <span class="btn btn-success btn-xs">S./ 15.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria sociedad de auditoria</td>
                        <td>
                          <span class="btn btn-success btn-xs">S./ 20.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comites funcionales </td>
                        <td>
                          <span class="btn btn-success btn-xs">S./ 2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de peritos REPEJ</td>
                        <td>
                          <span class="btn btn-success btn-xs">S./ 5.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de peritos normales</td>
                        <td>
                          <span class="btn btn-success btn-xs">S./ 2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de auditoria</td>
                        <td>
                          <span class="btn btn-success btn-xs">S./ 5.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>CCuota ordinaria comité de gestión gubernamental </td>
                        <td>
                          <span class="btn btn-success btn-xs">S./ 2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de gestión de la micro y pequeña empresa </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de investigación contable </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de finanzas y gestión administrativa </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00 </span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de tributación y fiscalidad </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de cultura,arte y actividades sociales</td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00 </span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de ecología y medio ambiente </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de sistemas e informática contable </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00 </span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de Educacion y Desarrollo Profesional </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho de colegiatura parte corriente-miembro de la orden </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/.128.25</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho de colegiatura parte inversion-miembro de la orden </td>
                        <td>
                          <span class="btn btn-success btn-xs">S/. 726.75</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho de incorporación comité de auditoria</td>
                        <td>
                          <span class="btn btn-success btn-xs">S/. 200.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de Ética</td>
                        <td>
                           <span class="btn btn-success btn-xs">S/. 2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Cuota ordinaria comité de deportes</td>
                        <td>
                           <span class="btn btn-success btn-xs">S/. 2.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>FAM miembro de la orden</td>
                        <td>
                           <span class="btn btn-success btn-xs">S/. 3.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho de incorporación comité de peritos</td>
                        <td>
                           <span class="btn btn-success btn-xs">S/. 200.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Aspirante comité de auditoria - peritos</td>
                        <td>
                           <span class="btn btn-success btn-xs">S/. 50.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho de incorporación a los demas comités</td>
                        <td>
                           <span class="btn btn-success btn-xs">SS/. 50.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho de colegiatura pro libro</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 50.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho construcción de local institucional</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 100.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho junta de decanos</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 54.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancia de habilidad sociedad auditora</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 10.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Venta de carnet duplicado</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 15.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Derecho de ceremonia de colegiatura extraordinaria</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 312.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancia de habilidad miembros de la orden</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 10.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancias de eventos gratuitos-estudiantes acreditados</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 5.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancia de habilidad comité de auditoria</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 10.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancia de antiguedad</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 20.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Tramite documentario</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 20.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancias de eventos gratuitos-habiles comité organizador </td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 5.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancias de eventos gratuitos-habil agremiado </td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 10.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Constancias de eventos gratuitos-publico en general e inhabiles</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 20.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Buzos</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 130.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Venta de solapera</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 10.00</span>
                        </td>
                      </tr>
                      <tr class="">
                        <td>Venta de medallón</td>
                        <td>
                            <span class="btn btn-success btn-xs">S/. 45.00</span>
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