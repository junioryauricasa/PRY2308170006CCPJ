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
            Contáctanos
        </h1>
        <p style="">
          Lorem ipsum dolor sit amet, consectetur omnis officia ex corporis deleniti odit, dolorum in maiores facere nisi! Lorem ipsum dolor sit amet, consectetur omnis officia ex corporis deleniti odit, dolorum in maiores facere nisi!
        </p>
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
          <section class="col-lg-4 col-md-5">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-map-marker"></i> Dirección</li>
              </ul>
              <div class="box-body text-center">
                  Edificio Breña, Paseo la Breña N°125, Of 404 - 405 
                  <br>
                  Huancayo, PERU
              </div>
            </div>
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
          <section class="col-lg-8 col-md-7">
              <div class="box box-solid">
                <div class="box-header">
                  <i class="fa fa-list-alt"></i>
                  <h3 class="box-title">
                    Formulário de Contacto CCPJ
                  </h3>
                </div>
                <div class="box-body">
                    <form role="form">
                      <div class="box-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="nombrecontacto">Nombre de Contacto</label>
                              <input type="text" class="form-control" id="nombrecontacto" placeholder="Ingrese sus Nombres" required="">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="correoelectronico">Correo Electrónico</label>
                              <input type="mail" class="form-control" id="correoelectronico" placeholder="Ingrese Correo Electrónico" required="">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="codigoagremiado">Código de Agremiado</label>
                          <input type="text" class="form-control" id="codigoagremiado" placeholder="Código de Agremiado" required="">
                        </div>
                        <div class="form-group">
                          <label for="contenidodelmensaje">Contenido del Mensaje</label>
                          <textarea class="form-control" id="Mensaje" name="Mensaje" placeholder="Escriba su mensaje aquí" required=""></textarea>
                        </div>
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-success">Enviar Mensaje</button>
                        <button type="reset" class="btn btn-danger">Limpiar Campos</button>
                      </div>
                    </form>
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