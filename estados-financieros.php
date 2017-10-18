<?php 
  $metadescripcion = 'Sección de Estados Financieros del Colegio de Contadores Públicos de Junín';
  include('_include/header.php');


  /*
    Autor: Junior yauricasa
  */
  $anio = date('Y');//obteniedo el valor del año presente este caso 2007 para udso en la logica del sql y el archivo a mostrar

  $valoranio = $_GET['anio'];
  $valortrimestre = $_GET['trimestre'];

?>

<div class="content-wrapper" style="padding-top: 20px">

<!-- div con backgrond incluido -->
<section class="content" style="    min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <!--
        Autor: Junior Yauricasa
        Descripcion: Cambiar la ruta de la imagen que diseñen posteriormente, considerar la estructura de imagen y dimensiones ya establecidas.
      -->
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
            <h1 class="text-center header-page-h1">
                Estados Financieros
            </h1>
            <p class="text-center text-description-header ">
                Bienvenidos a la sección de Estados Financieros del Portal Web del Colegio de Contadores Públicos de Junín.
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

        <!-- section -->
        <div class="row">
          <!-- section principal -->
          <section class="col-lg-9">
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-inbox"></i>
                  <h3 class="box-title">
                    Estados Financieros
                  </h3>
                </div>
                
                  <!--
                    - Autor: Junior Yauricasa
                    - Descripción:
                        Estructura documentos pdf/ responsivos 
                        Basarse en el embed(PDF) contador al dia.
                        el embed se basa en las dimensiones de su pantalla para poder realizar su calculo.
                        Colocar enfasis en los enlaces y sus respectivas direcciones de descarga.
                        No romper estructura
                   -->




              <!--div class="box-body">
                <div class="embed-responsive" style="padding-bottom:150%">
                     <object data="admin/'.$row["nvchdocumento"].'" type="application/pdf" width="100%" height="800px" internalinstanceid="508" title=""> 
                      <p>
                        Parece que no tiene un complemento PDF para este navegador, pero no hay problema, puedes dar 
                       
                       <a href="admin/'.$row["nvchdocumento"].'" download="admin/'.$row["nvchdocumento"].'">
                         click para descargar el archivo PDF
                       </a>

                      </p>  
                     </object>
                </div>

                   <!--
                    Estructura documentos pdf/ responsivos 
                   -->
              </div>
              <div class="box-footer">
                <a href="admin/'.$row["nvchdocumento"].'" class="btn btn-danger">
                    Descargar Documento PDF
                </a>
              </div-->
                  
               
              </div>
          </section>
          <!-- section secundaria -->

          <section class="col-lg-3">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-commenting"></i> Déjanos tu Opinión</li>
              </ul>
              <div class="box-body">
                  <p>
                    Bienvenidos a la sección de estados Financieros del CCPJ, puedes descargar el documento en formato PDF pulsando sobre el botón en la parte inferior.
                  </p>
                  <a href="http://www.ccpjunin.pe/dist/docs/estados-financieros/ESTADOS%20FINANCIEROS.pdf" download="http://www.ccpjunin.pe/dist/docs/estados-financieros/ESTADOS%20FINANCIEROS.pdf" class="btn btn-danger">
                      Descargar Documento PDF
                  </a>
                  <br>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="fb-comments" data-href="http://ccpjunin.pe/estados-financieros-ccpj/" data-width="100%" data-numposts="20"></div>
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