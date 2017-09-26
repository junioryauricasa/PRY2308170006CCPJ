<?php 
	include('_include/header.php');
?>

<div class="content-wrapper" style="padding-top: 30px">

<!-- div con backgrond incluido -->
<section class="content" style="    min-height: 0px;">
  <div class="row">
    <div class="col-md-12">
      <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-ofertas-laborales.jpg'); padding-top: 20px; padding-bottom: 30px">
          <h1 class="text-center header-page-h1">
              Revista Institucional 2017
          </h1>
      </div>
    </div>
  </div>
</section>
<!-- div con backgrond incluido -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
          <section class="col-lg-9 col-md-12">
              <div class="nav-tabs-custom">
                <div class="box-body">
                  <div data-configid="31214758/53614911" style="width:100%; height:700px;" class="issuuembed"></div>
                  <script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
                </div>

                <div class="box-footer">
                    <!-- descargar revista institucional (egar enlace) -->
                    <a href="dist/docs/REVISTA INSTITUCIONAL CCPJ 2017.pdf" class="btn btn-danger btn-sm" download="REVISTA INSTITUCIONAL CCPJ 2017.pdf"><b><i class="fa fa-fw fa-file-pdf-o"></i> Descargar Revista Intitucional</b></a>
                </div>
              </div>
          </section>

          <section class="col-lg-3 col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-commenting"></i> Déjanos tu Opinión</li>
              </ul>
              <div class="box-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <p>
                        Te presentamos nuestra revista institucional 2017, puedes vizualizarla o descargarla pulsando sobre el botón ubicado en la parte inferior de la revista inferior.
                      </p>
                      <div class="fb-comments" data-href="http://ccpjunin.pe/revista-institucional/" data-width="100%" data-numposts="20"></div>
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