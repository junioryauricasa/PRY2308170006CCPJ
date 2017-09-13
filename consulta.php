﻿<?php
$conexion_db = mysql_connect("localhost", "wwwccpju_pagweb","#*{}+")or die("Error conectando a la BBDD");

mysql_select_db("wwwccpju_nbdccpj",$conexion_db)or die ( " Base de datos no encontrada");

mysql_set_charset('utf8');

$compa = null;

?>
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
                    Bienvenidos a la seccion de Consulta Hábil del Colegiatura del Colegio de Contadores Públicos de Junín. <br> 
                    Busque la habilidad por medio del código de Colegiatura
                    <br>
                    <br>
                    <input type="button" class="btn btn-transparente" value="Informarme Más">
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
              <div class="row">
                <div class="col-lg-12">
                  <div class="box box-solid">
                    <div class="box-header">
                      <i class="fa fa-list-alt"></i>
                      <h2 class="box-title">
                        Resultado de consulta
                      </h2>
                    </div>
                    <div class="box-body">
                       <div class="col-lg-4">
                        <?php 
                          $codigo = $_POST['txtCodigo'];
                          $query = "SELECT * FROM agre WHERE  id = '".$codigo."' ";
                            
                          $consulta = mysql_query($query,$conexion_db);


                          while($row = mysql_fetch_assoc($consulta))
                          {
                              $compa=$row['id'];
                          ?>
                          <p class="text-center">
                            <h4>Datos</h4>
                            <b >Matricula:</b><?php echo $row['id'];?> 
                            <br>
                            <b >Nombres:</b> <?php echo $row['nombres'];?>
                            <br>
                            <b >Telefono:</b> <?php echo  $row['telf'];?> 
                            <br>
                            <b >Celular:</b><?php echo  $row['cel'];?>
                            <br>
                            <b >Habil:</b><?php echo  $row['habilidad'];?>
                          </p>
                           <?php   
                    }mysql_free_result($consulta);

                    if (is_null($compa)) {
                        echo "Contador no activo";
                    }

                    ?>

                 <?php ?>
                      </div>
                      <div class="col-lg-8">
                        <img src="dist/img/logo_horizontal_ccpj.png" alt="" class="img-responsive" width="100%">
                      </div>
                    </div>
                    <div class="box-footer">
                        <!--input type="button" class="btn btn-primary" name="" value="Buscar Nuevamente"-->
                                    <a href="consulta-habil" class="btn btn-primary">Buscar Nuevamente</a>
                    </div>
                  </div>
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