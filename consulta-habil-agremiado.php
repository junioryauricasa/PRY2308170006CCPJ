<?php 
  //consulta-habil-sociedad-auditora.php
  $metadescripcion = 'consulta Hábil de Agremiados del Colegio de Contadores Públicos de Junín';
  include('_include/header.php');
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700');
  #randomfield { 
    -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none; 
      width: 200px;
      color: black;
      border-color: transparent;
      text-align: center;
      font-size: 40px;
      background-image: url('http://teleglobos.com.mx/imagenes/mayor/background.png');
      font-family: 'Cabin Sketch', cursive;
  }
</style>
<script>
  // Do not remove this (it's just a comment and won't effect the functions)
  // SimpleCaptcha v1.0 © Anudeep Tubati
  function ChangeCaptcha() {
      var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
      var string_length = 6;
      var ChangeCaptcha = '';

      for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        ChangeCaptcha += chars.substring(rnum,rnum+1);
      }
      document.getElementById('randomfield').value = ChangeCaptcha;
  }

  function realizaConsulta(txtCodigo){
        if(document.getElementById('txtCodigo').value == '' || document.getElementById('CodigoCaptcha').value == ''){
          alert('Rellena los campos');
          return false;
        } else if(document.getElementById('CodigoCaptcha').value != document.getElementById('randomfield').value ) {
          alert('Ingrese el Captcha Nuevamente');
          return false;
        } else {
          $.ajax({
                  data:  {txtCodigo:txtCodigo}, //datos que se envian a traves de ajax
                  url:   'consulta-habil-agremiado_process.php', //archivo que recibe la peticion
                  type:  'post', //método de envio
                  beforeSend: function () {
                          $("#resultado").html("<img src='https://c.s-microsoft.com/en-us/CMSImages/big-loading-gif.gif?version=eac3284f-fcba-ea1d-70e3-010e22fefd05' alt='' width='20px' style='margin-right: 10px; margin-left:20px'>Enviando, espere por favor...");
                  },
                  success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                          $("#resultado").html(response);
                  }
          });
          ChangeCaptcha();
          $("#txtCodigo").val("");
          $("#CodigoCaptcha").val("");
        }
    }
 </script>

<div class="content-wrapper" style="padding-top: 30px">

    <!-- div con backgrond incluido -->
    <section class="content" style="min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-ofertas-laborales.jpg'); ">
                <h1 class="text-center header-page-h1">
                    Consulta Hábil Sociedad Auditora
                </h1>
                <p class="text-center text-description-header ">
                    Bienvenidos a la seccion de Consulta Hábil de Sociedad Auditora del Colegiatura del Colegio de Contadores Públicos de Junín. <br> 
                    Busque la habilidad por medio del código de Colegiatura
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
        <body onLoad="ChangeCaptcha()">
        <div class="row">
          <section class="col-lg-8 col-md-7">
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-list-alt"></i>
                  <h3 class="box-title">
                    Formulário de Consulta Hábil
                  </h3>
                </div>
                <div class="box-body">
                  <form>
                      <div class="box-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="dist/img/logo_horizontal_ccpj.png" alt="" class="img-responsive" width="100%">
                                <br>
                                <div class="form-group">
                                  <input type="text" id="randomfield" disabled>
                                  <button class="btn btn-warning" onclick="ChangeCaptcha()">Cambiar CAPTCHA</button>
                                </div>
                                <div class="form-group">
                                  <label>Ingresar Captcha:</label>
                                  <input type="text" class="form-control" id="CodigoCaptcha" size="20" maxlength="6" placeholder="Ingrese CAPTCHA">
                                </div>
                                <div class="form-group">
                                  <label for="nombrecontacto">Número de Matricula:</label>
                                  <input type="text" class="form-control" id="txtCodigo" placeholder="Código de Agremiado" onkeypress="return justNumbers(event);" maxlength="5">
                                </div>
                                <!--span id="resultado"></span-->
                            </div>
                            <div class="col-lg-5" id="resultado">
                            </div>
                        </div>
                      </div>
                      <div class="box-footer">
                        <input type="button" onclick="realizaConsulta($('#txtCodigo').val()); return false;" class="btn btn-success" style="font-weight: bolder" value="Realizar Consulta">
                        <input type="reset" class="btn btn-primary" value="Nueva Consulta">
                        

                        <!--button type="button" href="javascript:;" onclick="realizaProceso($('#txtCodigo').val());return false;" class="btn btn-success" style="font-weight: bolder">Consultar</button>
                        <button type="button" class="btn btn-default" style="font-weight: bolder" onclick="ChangeCaptcha()">Cambiar CAPTCHA</button-->
                      </div>
                    </form>
                </div>
              </div>
          </section>

          <section class="col-lg-4 col-md-5">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-clock-o"></i> Horario de Atención</li>
              </ul>
              <div class="box-body">
                    <i class="fa fa-fw fa-clock-o"></i>
                    <span class="text">
                      Lunes a Viernes
                      <ul>
                        <li>Mañanas: 09:00 - 13:00 </li>
                        <li>Tardes: 16:00 - 20:00</li>
                      </ul>
                    </span>

                    <i class="fa fa-fw  fa-clock-o"></i>
                    <span class="text">
                      Sábados
                      <ul>
                        <li> Mañanas: 09:00 - 13:00 </li>
                      </ul>
                    </span>
              </div>
            </div>
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-phone"></i> Teléfonos</li>
              </ul>
              <div class="box-body">
                  <a href="tel:964556754"><i class="fa fa-fw fa-phone"></i>964556754</a>
                  <br>
                  <a href="tel:#964556754"><i class="fa fa-fw fa-phone"></i>#964556754</a>
                  <br>
                  <a href="tel:(064)231063"><i class="fa fa-fw fa-phone"></i>(064)231063</a>
              </div>
            </div>
          </section>
          
        </div>


    </section>
</div>

<?php 
  include('_include/footer.php');
?>

<style>
   @import url('https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700');
</style>