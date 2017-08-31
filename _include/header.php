<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Colégio de Contadores Públicos de Junín | Portal Web</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="icon" href="dist/img/logoccnpj-old.png">

    <!-- font for msg slide -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="fixed sidebar-mini skin-blue-light " > 
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">CCPJ</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>CCP</b>Junín</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" id="buttondisplayhidden">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="container">
            <div class="navbar-header">
              <!--a class="navbar-brand" href="#">
                <img src="dist/img/logoccnpj-old.png" alt="" height="100%">
              </a-->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class=""><a href="index">Inicio</a></li> <!-- class active para sombrear -->
                <li class=""><a href="noticias">Noticias</a></li> <!-- class active para sombrear -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="informacioninstitucional">Historia, Misión y Visión</a></li>
                    <li><a href="consejodirectivo">Consejo Directivo Actual</a></li>
                    <li><a href="comitesfuncionales">Comités Funcionales</a></li>
                    <li><a href="">Órganos Institucionales</a></li>
                    <li><a href="#">Normatividad</a></li>
                    <li><a href="#">Requisitos para la Incorporación</a></li>
                    <li><a href="#">Revista Institucional</a></li>
                  </ul>
                </li>
                <li><a href="">Convenios</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Ficha de Actualización de Datos</a></li>
                    <li><a href="#">Documentos</a></li>
                    <li><a href="#">Biblioteca</a></li>
                    <li><a href="">Consulta Hábil</a></li>
                    <li><a href="#">Lista de Precio por servicios</a></li>
                    <li><a href="#">Archivos de Actividades Académicask</a></li>
                  </ul>
                </li>
                <!--li><a href="#contact">Consulta de Habilidad</a></li-->
                <li><a href="#contact">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <img src="dist/img/logoccnpj.png" class="" alt="User Image" width="100%" style="padding: 7px">
          </div>
          <!-- search form -->
          <form action="" method="" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Estoy Buscando...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ DE NAVEGACIÓN</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Menú Principal</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Inicio
                  </a>
                </li>
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Institucional
                  </a>
                </li>
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Convenios
                  </a>
                </li>
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Felicitaciones
                  </a>
                </li>
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Contáctanos
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Actualidad</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active">
                  <a href="contadoraldia">
                    <i class="fa fa-circle-o"></i> 
                    Contador al Día
                  </a>
                </li>
                <li class="active">
                  <a href="noticias">
                    <i class="fa fa-circle-o"></i> 
                    Notícias
                  </a>
                </li>
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Comunicados
                  </a>
                </li>
                <li class="">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> 
                      Académico
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Diplomados
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Cursos
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Convenciones
                        </a>
                    </li>
                  </ul>
                </li>
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Onomasticos
                  </a>
                </li>
                <li class="">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> 
                      Galería
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Fotos
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Videos
                        </a>
                    </li>
                  </ul>
                </li>
                <li class="active">
                  <a href="index.html">
                    <i class="fa fa-circle-o"></i> 
                    Bolsa de Trabajo
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Órganos de Gobierno</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Consejo Directivo</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Past-Decanos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Comites</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Comite Funcional
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Comite Funcional de Apoyo
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Gestión Gubernamental
                    </i>
                  </a>
                </li>
                <li class="">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> 
                      Peritaje Contable
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Miembro Ordinario
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Especialistas
                        </a>
                    </li>
                  </ul>
                </li>
                <li class="">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> 
                      Auditoria
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Ordinaria
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Independiente
                        </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Sociedad Auditora
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Gestión de las MYPE
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Finanzas y Gestión
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Desarrollo Profesional
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Tributación y Fiscalia
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Informática Contable
                    </i>
                  </a>
                </li>
                <li class="">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> 
                      Apoyo
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Investigación Contable
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Defensa Profesional
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Ecología y Ambiente
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Ética Profesional
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Actividades Sociales
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Deportes
                        </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      J. D. Selva Central
                    </i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-briefcase"></i>
                <span>Servicios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Actualización de Datos</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Documentos</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Biblioteca</a></li>
                <li class="">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> 
                      Consulta Hábil
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Consulta por Código
                        </a>
                    </li>
                    <li>  
                      <a href="#">
                        <i class="fa fa-circle-o"></i> 
                          Sociedad Auditóra
                        </a>
                    </li>
                  </ul>
                </li>
                <li><a href=""><i class="fa fa-circle-o"></i> Costos por Servicio</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Login Subir Archivos</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Archivos Académicas</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i> <span>Requisitos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Colegiatura</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Certificación</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> ReCertificación</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Incorporación al Comite</a></li>
              </ul>
            </li>
            <li><a href="calendario"><i class="fa fa-calendar-times-o"></i> <span>Calendario</span></a></li>
          </ul>
        </section>
      </aside>
