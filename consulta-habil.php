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
                    Consulta Hábil
                </h1>
                <p class="text-center text-description-header "> 
                    Consulta Hábil por medio del código de Colegiatura
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
                    <form method="post" action="consulta.php" role="form">
                      <div class="box-body">
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="nombrecontacto">Número de Matricula:</label>
                                <input type="text" class="form-control" id="txtCodigo" name="txtCodigo" placeholder="Código de Agremiado" onkeypress="return justNumbers(event);" maxlength="5" autocomplete="false">
                              </div>
                              <div class="row">
                                  <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                      <label for="nombrecontacto" ></label>
                                      <input type="text"  class=""  style="cursor: pointer" id="randomfield" label="Presione para cambiar de Código Captcha"  onclick="ChangeCaptcha()" disabled>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                      <label for="nombrecontacto">Código Captcha:</label>
                                      <input type="text" class="form-control" id="CaptchaEnter" size="20" maxlength="6" placeholder="Ingrese CAPTCHA" autocomplete="false">
                                    </div>
                                  </div>
                              </div>
                            </div>
  <!--

                            <div class="col-lg-6">
                                <p class="text-center">
                                  <h4>Resultado de la Consulta</h4>
                                  <b>Matricula:</b> 01232 
                                  <br>
                                  <b>Nombre:</b> ESTHER R. 
                                  <br>
                                  <b>Apellidos:</b> GUTIERREZ CARRASCAL 
                                  <br>
                                  <b>Estado Actual:</b> ACTIVO 
                                  <br>
                                  <b>Habil:</b> NO
                                </p>
                            </div>
   -->
                        </div>
                      </div>
                      <div class="box-footer">
                        <button type="submit" onclick="check()" class="btn btn-success" style="font-weight: bolder">Consultar</button>
                        <button type="button" class="btn btn-primary" style="font-weight: bolder" onclick="ChangeCaptcha()">Cambiar CAPTCHA</button>
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

        <div class="row">
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5059.773489627902!2d-75.21317235630036!3d-12.069722345035359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c7ed02d929c4a17!2sColegio+de+Contadores+P%C3%BAblicos+de+Jun%C3%ADn!5e0!3m2!1ses!2spe!4v1504307147190" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
    </section>
</div>

<?php 
	include('_include/footer.php');
?>

<style>
   @import url('https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700');
</style>