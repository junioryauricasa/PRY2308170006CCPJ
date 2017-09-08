<?php 
	include('_include/header.php');
?>


<div class="content-wrapper" style="padding-top: 30px">

<!-- div con backgrond incluido -->
<section class="content" style="    min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-ofertas-laborales.jpg'); ">
            <h1 class="text-center header-page-h1">
                Revista Institucional
            </h1>
            <p class="text-center text-description-header ">
                Bienvenidos a la seccion de Oportunidades Laborales del Colegio de Contadores Públicos de Junín. <br> Aqui podrás mantenerte informado y al día de todos las ofertas laborales de nuestra institución, que esperas para comunicate con nosotros.
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
          <section class="col-lg-12 col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header"><i class="fa fa-list"></i> Sirvase a leer nuestra Revista Institucional</li>
                </ul>
                <div class="box-body">
                  <iframe style="width:100%; height:1100px;" src="//e.issuu.com/embed.html#28756625/52984464" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="box-footer">
                    <!-- descargar revista institucional (egar enlace) -->
                    <a href="dist/docs/REVISTA-INSTITUCIONAL-CCPJ-2017.pdf" class="btn btn-danger btn-sm" download="Revista-Institucional"><b><i class="fa fa-fw fa-file-pdf-o"></i>Descargar Revista Intitucional</b></a>
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