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

<div class="content-wrapper" style="">
    <div class="row text-center" style="" id="textonparallax">
      <div class="col-lg-6 col-md-offset-3" style="color:white;">
        <h1>
            404 Página no Encontrada
        </h1>
        <p style="">
          Lo sentimos no hemos encontrado coincidencias con tu busqueda, pero tienes muchas más opciones a tu disposición.
        </p>
        <p>
        	<input type="button" class="btn btn-default" value="Sacame de Aqui" onclick="volver()">
        </p>
      </div>
    </div>
    <section class="content" style="margin-top: -50px;">          
      <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
              <img style="padding:50px;" src="dist/img/logo_horizontal_ccpj.png" alt="" width="100%">
            </div>
        </div>
      </div>
    </section>
</div>

<?php 
	include('_include/footer.php');
?>

<script>
	/*
		function return back
	*/
	function volver(){
		history.back();
	}
</script>