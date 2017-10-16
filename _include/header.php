<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Colegio de Contadores Públicos de Junín | Portal Web</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--meta name="description" content="El Colegio de Contadores Públicos de Junin es una Institución Profesional, autónoma, con personería de Derecho Público Interno"-->
    <meta name="description" content="<?php echo $metadescripcion; ?>">

    
    <!--link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!--link rel="stylesheet" href="dist/css/AdminLTE.min.css"-->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="icon" href="dist/img/logoccnpj-old.png">

    <!-- font for msg slide -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet">

    <!-- fonts text slide -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800,800i" rel="stylesheet">

    <!-- link stylish for datatables -->
    <link rel="stylesheet" href="dist/css/bootstrap-table.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        function ocultar(){
          $('#buttondisplayhidden').click();
        }
    </script>
  </head>
  
  <body class="scrollbar fixed sidebar-mini skin-blue-light sidebar-collapse " id="style-3"> 
  <!--body class="fixed sidebar-mini skin-blue-light "  ondragstart="return false" oncontextmenu="return false" onselectstart="return false"--> <!-- evitar descargar imgs DESCOMENTAR AL FINAL -->

    <div class="wrapper">
      <header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <!--a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" id="buttondisplayhidden">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a-->

          <div class="container">
            <div class="navbar-header" id="navbarcel">
              <!--a class="navbar-brand" href="#">
                <img src="dist/img/logoccnpj-old.png" alt="" height="100%">
              </a-->

              <div id="" class="navbar-collapse collapse navbar-cel">
                <ul class="nav navbar-nav"  style="padding-left: 2px;margin: 0 auto;display: -webkit-box; font-size: 13px;">
                  <li>
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" id="buttondisplayhidden">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  </li>
                  <li class=""><a href="eventos">Eventos</a></li> 
                  <li class="dropdown" style="left:0;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Institucional 
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu pull-right" style="background: #0f2634;    position: absolute;">
                      <li><a href="informacioninstitucional">Historia, Misión y Visión</a></li>
                      <li><a href="consejodirectivo">Consejo Directivo Actual</a></li>
                      <li><a href="requisitos-incorporacion-comite">Requisitos para la Incorporación</a></li>
                      <li><a href="convenios">Convenios</a></li>
                      <li><a href="requisitos-para-colegiatura">Requisitos para Colegiatura</a></li>
                      <li><a href="revista-institucional">Revista Institucional</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Servicios 
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu pull-right" style="background: #0f2634;    position: absolute;    font-size: 13px;">
                      <li><a href="ficha-actualizacion-datos">Requisitos de Colegiatura</a></li>
                      <li><a href="requisitos-incorporacion-comite">Requisitos de Incorporación a Comités</a></li>
                      <li><a href="#">Biblioteca</a></li>
                      <li><a href="documento">Documentos</a></li>
                      <li><a href="convenios">Convenios</a></li>
                      <li><a href="bolsadetrabajo">Bolsa de Trabajo</a></li>
                      <li><a href="precios">Lista de Precios por Servicios</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

              <style>
                  @media screen and (max-width: 766px) {
                    .navbar-cel{
                      display: block;
                      height: 20px
                    }
                  }
                  @media screen and (min-width: 767px) {
                    .navbar-cel{
                      display: none;
                    }
                    #navbarcel{
                      display: none
                    }
                  }
              </style>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class=""><a href="index">Inicio</a></li> <!-- class active para sombrear -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Institucional 
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="informacioninstitucional">Historia, Misión y Visión</a></li>
                    <li><a href="past-decanos">Past-Decanos</a></li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Órganos de Gobierno
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="consejodirectivo#">Consejo Directivo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Órganos de Apoyo y Asesoría
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">Tribunal de Honor</a></li>
                            <li><a href="">Comité de Ética</a></li>
                            <li><a href="">Consejo Consultivo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="filial-selva-central">Junta Directiva Filial Selva Central</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Comités Funcionales 
                          <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="gestion-gubernamental">Gestión Gubernamental</a></li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  Peritaje Contable
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="peritaje-miembro-ordinario">Miembro Ordinario</a></li>
                                    <li><a href="peritaje-especialista" >Miembro Especialista</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  Auditoría
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="auditoria-ordinaria">Ordinario</a></li>
                                    <li><a href="auditoria-independiente">Independiente</a></li>
                                    <li><a href="sociedad-auditora">Sociedades Auditoras</a></li>
                                </ul>
                            </li>
                            <li><a href="mypes">Gestión de las MYPE</a></li>
                            <li><a href="finanzas-gestion-administrativa">Finanzas y Gestión Administrativa</a></li>
                            <li><a href="comite-funcional-de-tributacion">Tributación y Fiscalidad</a></li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  Apoyo
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="apoyo-investigacion-contable">Investigación Contable</a></li>
                                    <li><a href="apoyo-permanente-defensa-profesional">Defensa Profesional</a></li>
                                    <li><a href="apoyo-ecologia-ambiente">Ecología y Ambiente</a></li>
                                    <li><a href="apoyo-etica-ejercicio-profesional">Ética Profesional</a></li>
                                    <li><a href="sistemas-informatica">Desarrollo Profesional e Informática Contable</a></li>
                                    <li><a href="apoyo-cultura-arte-actividades-sociales">Actividades Sociales</a></li>
                                    <li><a href="apoyo-deporte">Deportes</a></li>
                                </ul>
                            </li>
                            <li><a href="requisitos-incorporacion-comite">Requisitos de Incorporación a Comités</a></li>
                        </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">        
                      Servicios 
                      <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Consulta de Habilidad
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="consulta-habil-agremiado">Habilidad Profesional</a></li>
                            <li><a href="consulta-habil-sociedad-auditora">Habilidad de Sociedades Auditoras</a></li>
                            <li><a href="#">Hablidad de Auditores Idependientes</a></li>
                        </ul>
                    </li>
                    <li><a href="ficha-actualizacion-datos">Requisitos de Colegiatura</a></li>
                    <li><a href="documento">Requisitos de Incorporación a Comités</a></li>
                    <li><a href="#">Biblioteca</a></li>
                    <li><a href="#">Documentos</a></li>
                    <li><a href="#">Convenios</a></li>
                    <li><a href="#">Bolsa de Trabajo</a></li>
                    <li><a href="precios">Lista de Precios por Servicios</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Eventos
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="revista-institucional">Diplomados</a></li>
                    <li><a href="">Seminarios</a></li>
                    <li><a href="conferencias">Conferencias</a></li>
                    <li><a href="">Charlas</a></li>
                    <li><a href="">Archivos de Actividades Academicas</a></li>
                    <li><a href="calendario">Calendario</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Contador al Día
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="revista-institucional">Revista Institucíonal</a></li>
                    <li><a href="">Normativa Vigente</a></li>
                    <li><a href="counicados">Comunicados</a></li>
                    <li><a href="onomasticos">Onomasticos</a></li>
                    <li><a href="consulta-habil">Galeria de Fotos</a></li>
                  </ul>
                </li>
                <!--li><a href="estados-financieros">Estados Financieros</a></li-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Estados Financieros
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Trimestral
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">1er Trimestre</a></li>
                            <li><a href="">2do Trimestre</a></li>
                            <li><a href="">3er Trimestre</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Anual
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">2016</a></li>
                            <li><a href="">2017</a></li>
                            <li><a href="">2018</a></li>
                        </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>


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
          <ul class="sidebar-menu">
            <li class="header">MENÚ DE NAVEGACIÓN</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Menú Principal</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active">
                  <a href="index">
                    <i class="fa fa-circle-o"></i> 
                    Inicio
                  </a>
                </li>
                <li class="active">
                  <a href="informacioninstitucional">
                    <i class="fa fa-circle-o"></i> 
                    Institucional
                  </a>
                </li>
                <li class="active">
                  <a href="convenios">
                    <i class="fa fa-circle-o"></i> 
                    Convenios
                  </a>
                </li>
                <li class="">
                  <a href="conferencias">
                    <i class="fa fa-circle-o"></i> 
                    Conferencias
                  </a>
                </li>
                <!--li class="active">
                  <a href="">
                    <i class="fa fa-circle-o"></i> 
                    Felicitaciones
                  </a>
                </li-->
                <li class="active">
                  <a href="contactanos">
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
                    Noticias
                  </a>
                </li>
                <li class="active">
                  <a href="comunicados">
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
                      <a href="academicos-diplomados">
                        <i class="fa fa-circle-o"></i> 
                          Diplomados
                        </a>
                    </li>
                    <li>  
                      <a href="academicos-cursos">
                        <i class="fa fa-circle-o"></i> 
                          Cursos
                        </a>
                    </li>
                    <li>  
                      <a href="academicos-convenciones">
                        <i class="fa fa-circle-o"></i> 
                          Convenciones
                        </a>
                    </li>
                  </ul>
                </li>
                <li class="active">
                  <a href="onomasticos">
                    <i class="fa fa-circle-o"></i> 
                    Onomásticos
                  </a>
                </li>
                <li class="">
                  <a href="galeria-fotos-y-videos">
                    <i class="fa fa-circle-o"></i> 
                      Galería Fotos y Videos
                    </i>
                  </a>
                </li>
                <li class="active">
                  <a href="bolsadetrabajo">
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
                <li><a href="consejodirectivo"><i class="fa fa-circle-o"></i> Consejo Directivo</a></li>
                <li><a href="past-decanos"><i class="fa fa-circle-o"></i> Past-Decanos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Comités Funcionales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Comité Funcional
                    </i>
                  </a>
                </li>
                <li>
                  <a href="#" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Comité Funcional de Apoyo
                    </i>
                  </a>
                </li-->
                <li>
                  <a href="gestion-gubernamental" alt="Smiley face">
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
                      <a href="peritaje-miembro-ordinario">
                        <i class="fa fa-circle-o"></i> 
                          Miembro Ordinario
                        </a>
                    </li>
                    <li>  
                      <a href="peritaje-especialista">
                        <i class="fa fa-circle-o"></i> 
                          Miembro Especialista
                        </a>
                    </li>
                  </ul>
                </li>
                <li class="">
                  <a href="auditoria-ordinaria.php">
                    <i class="fa fa-circle-o"></i> 
                      Auditoria
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="auditoria-ordinaria">
                        <i class="fa fa-circle-o"></i> 
                          Ordinaria
                        </a>
                    </li>
                    <li>  
                      <a href="auditoria-independiente">
                        <i class="fa fa-circle-o"></i> 
                          Independiente
                        </a>
                    </li>
                    <li>  
                      <a href="sociedad-auditora">
                        <i class="fa fa-circle-o"></i> 
                          Sociedades Auditoras
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="mypes" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Gestión de las MYPE
                    </i>
                  </a>
                </li>
                <li>
                  <a href="finanzas-gestion-administrativa" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Finanzas y Gestión Administrativa
                    </i>
                  </a>
                </li>
                <li>
                  <a href="comite-funcional-de-tributacion" alt="Smiley face">
                    <i class="fa fa-circle-o"></i> 
                      Tributación y Fiscalidad
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
                      <a href="apoyo-investigacion-contable">
                        <i class="fa fa-circle-o"></i> 
                          Investigación Contable
                        </a>
                    </li>
                    <li>  
                      <a href="apoyo-permanente-defensa-profesional">
                        <i class="fa fa-circle-o"></i> 
                          Defensa Profesional
                        </a>
                    </li>
                    <li>  
                      <a href="apoyo-ecologia-ambiente">
                        <i class="fa fa-circle-o"></i> 
                          Ecología y Ambiente
                        </a>
                    </li>
                    <li>  
                      <a href="apoyo-etica-ejercicio-profesional">
                        <i class="fa fa-circle-o"></i> 
                          Ética Profesional
                        </a>
                    </li>
                    <li>
                      <a href="sistemas-informatica" alt="Smiley face">
                        <i class="fa fa-circle-o"></i> 
                          Desarrollo Profesional e Informática Contable
                        </i>
                      </a>
                    </li>
                    <li>  
                      <a href="apoyo-cultura-arte-actividades-sociales">
                        <i class="fa fa-circle-o"></i> 
                          Actividades Sociales
                        </a>
                    </li>
                    <li>  
                      <a href="apoyo-deporte">
                        <i class="fa fa-circle-o"></i> 
                          Deportes
                        </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="filial-selva-central" alt="Smiley face">
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
                <li><a href="ficha-actualizacion-datos"><i class="fa fa-circle-o"></i> Actualización de Datos</a></li>
                <li><a href="documento"><i class="fa fa-circle-o"></i> Documentos</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Biblioteca</a></li>
                <li class="">
                  <a href="consulta-habil">
                    <i class="fa fa-circle-o"></i> 
                      Consulta Hábil
                    <i class="fa fa-angle-left pull-right">
                    </i>
                  </a>
                  <ul class="treeview-menu">
                    <li>  
                      <a href="consulta-habil">
                        <i class="fa fa-circle-o"></i> 
                          Consulta por Código
                        </a>
                    </li>
                    <li>  
                      <a href="consulta-habil">
                        <i class="fa fa-circle-o"></i> 
                          Sociedad Auditóra
                        </a>
                    </li>
                  </ul>
                </li>
                <li><a href="precios"><i class="fa fa-circle-o"></i> Costos por Servicio</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Login Subir Archivos</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Archivos Académicos</a></li>
                <li><a href="gestor-de-cobranza"><i class="fa fa-circle-o"></i> Gestor de Cobranza</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i> <span>Requisitos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="requisitos-para-colegiatura"><i class="fa fa-circle-o"></i> Colegiatura</a></li>
                <li><a href="requisitos-certificacion"><i class="fa fa-circle-o"></i> Certificación</a></li>
                <li><a href="requisitos-recertificacion"><i class="fa fa-circle-o"></i> Recertificación</a></li>
                <li><a href="requisitos-incorporacion-comite"><i class="fa fa-circle-o"></i> Incorporación al Comite</a></li>
              </ul>
            </li>
            <li><a href="calendario"><i class="fa fa-calendar-times-o"></i> <span>Calendario</span></a></li>
          </ul>
        </section>
      </aside>

<style>

  .main-sidebar{
        display: block
  }
  @media screen and (min-width: 767px) {
      .main-sidebar{
        display: none
      }
      .main-sidebar{
        max-width: 0px
      }    
  }



   /* ---------- FOR BANNER IN HEADER ----------  */
  .img-backg-banner-header{
    background-image: url("dist/img/banner-superior.png");
    background-color: #cccccc;
    background-size: cover;
    height: 80px ;
    margin-left: 15px;
    width: cover;
  }

  @media screen and (max-width:500px){
      .img-backg-banner-header{
          background-image: url("dist/img/banner-superior-min.png");
          /*height: 100px */
          width: 100%;
        }
      img{
         padding: 0px;
      }
      /* texto div con background img */
      .text-description-header{
        padding-right: 7px;
        padding-left: 7px;
        font-size: 12px
      }
  }
  @media screen and (max-width:1036px){
    .social-media-buttons{
      display: none;
    }
  }

  /* ---------- ************* ----------  */


  /*
    style for dropdown
  */
  .dropdown-submenu {
      position: relative;
  }

  .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
      -webkit-border-radius: 0 6px 6px 6px;
      -moz-border-radius: 0 6px 6px;
      border-radius: 0 6px 6px 6px;
  }

  .dropdown-submenu:hover>.dropdown-menu {
      display: block;
  }

  .dropdown-submenu>a:after {
      display: block;
      content: " ";
      float: right;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #ccc;
      margin-top: 5px;
      margin-right: -10px;
  }

  .dropdown-submenu:hover>a:after {
      border-left-color: #fff;
  }

  .dropdown-submenu.pull-left {
      float: none;
  }

  .dropdown-submenu.pull-left>.dropdown-menu {
      left: -100%;
      margin-left: 10px;
      -webkit-border-radius: 6px 0 6px 6px;
      -moz-border-radius: 6px 0 6px 6px;
      border-radius: 6px 0 6px 6px;
  }
  /* ---------- ************* ----------  */


  /*
    END style for dropdown
  */


  .carousel-fade .carousel-inner .item {
    transition-property: opacity;
  }
  .carousel-fade .carousel-inner .item,
  .carousel-fade .carousel-inner .active.left,
  .carousel-fade .carousel-inner .active.right {
    opacity: 0;
  }
  .carousel-fade .carousel-inner .active,
  .carousel-fade .carousel-inner .next.left,
  .carousel-fade .carousel-inner .prev.right {
    opacity: 1;
  }
  .carousel-fade .carousel-inner .next,
  .carousel-fade .carousel-inner .prev,
  .carousel-fade .carousel-inner .active.left,
  .carousel-fade .carousel-inner .active.right {
    left: 0;
    transform: translate3d(0, 0, 0);
  }
  /* ---------- ************* ----------  */

</style>