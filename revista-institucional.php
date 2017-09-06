<?php 
	include('_include/header.php');
?>
<div class="row">
  <div class="row" id="">
      <div class="paralax-laboral" style="height: 400px">
          <div class="row">
            <div class="col-lg-12 vcenter">
                
            </div>
          </div>
      </div>
  </div>
</div>

<div class="content-wrapper" style="padding-top: 30px">
    <div class="row text-center" style="" id="textonparallax">
      <div class="col-lg-6 col-md-offset-3" style="color:white;">
        <h1>
            Revista Institucional
        </h1>
      </div>
    </div>

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
                  <iframe style="width:100%; height:1100px;" src="//e.issuu.com/embed.html#28756625/52836599" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="box-footer">
                    <!-- descargar revista institucional (egar enlace) -->
                    <a href="enlace-revistainstitucional" class="btn btn-danger btn-sm" download="Revista Institucional"><b><i class="fa fa-fw fa-file-pdf-o"></i>Descargar Revista Intitucional</b></a>
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