<?php 

require_once("dompdf/dompdf_config.inc.php");
//$conexion = mysql_connect("localhost","root","");
//mysql_select_db("db_ccpj",$conexion);
$con = mysqli_connect("localhost","root","","db_ccpj");

//codigo agremiado
$codigo = $_GET['codagrem']; //obteniendo codigo consult ahabil

/*
  Autor: Junior Yauricasa
  Descripción: Validacion de existencia de script
*/
if(empty($codigo)){
  header('location: consulta-habil-sociedad-auditora.php'); //redireciona a interfazconsulta habil
}
//obteniendo fecha
date_default_timezone_set('America/Lima');
$dia = date("N"); //dia en numeros
$mesdelanio = date("m"); //mes del anio en numero
$diadelmes = date("j"); //dia del mes
$anio = date("Y"); //anio en 4 digitos

$time = date("H:i:s"); //time formato Hor/minuto/segundo

$timehora = date("g");
$timeminuto = date("i");
$timeminuto2 = date("a");

switch ($mesdelanio) {
  case '1':
    $mesdelanio1 = "Enero";
    break;
  case '2':
    $mesdelanio1 = "Febrero";
    break;
  case '3':
    $mesdelanio1 = "Marzo";
    break;
  case '4':
    $mesdelanio1 = "Abril";
    break;
  case '5':
    $mesdelanio1 = "Mayo";
    break;
  case '6':
    $mesdelanio1 = "Junio";
    break;
  case '7':
    $mesdelanio1 = "Julio";
    break;
  case '8':
    $mesdelanio1 = "Agosto";
    break;
  case '9':
    $mesdelanio1 = "septiembre";
    break;
  case '10':
    $mesdelanio1 = "Octubre";
    break;
  case '11':
    $mesdelanio1 = "Noviembre";
    break;
  case '12':
    $mesdelanio1 = "Diciembre";
    break;
  default:
    echo "no se dfinio correctamente";
    break;
}


$fechadoc = 'Documento Generado el: '.$diadelmes.' '.$mesdelanio1.' del '.$anio;
$horadoc = 'Horas: '.$time; 


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <title>Reporte</title>
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
   
  <!-- 
      Titulo: CabeceraReporte - Entregable 3
      Autor: Junior Yauricasa
      Desripción: Cabecera de documento comprende logo y fecha genera por script 
  -->
  <div style="width: 100%;">
    <div style="width: 50%; display: inline-block">
      <img src="dist/img/logo_horizontal_ccpj.png" alt="" width="300px"/>
    </div>
    <div style="width: 50%; display: inline-block">
      <div style="text-align:right; font-size:11px">
        <p>'.$fechadoc.'</p>
        '.$horadoc.'
      </div>
    </div>
  </div>
  <!-- 
      END CabeceraReporte
  -->

    <h3 style="text-align:center">Consulta de habilidad de Sociedades Auditoras</h3>
    
        <table style="text-align: center; width:100%">
          <thead>
            <tr>
              <td><strong>RUC</strong></td>
              <td><strong>DENOMINACION/strong></td> 
              <td><strong>HABILIDAD</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr style="text-transform:uppercase">';
                $result=mysqli_query($con,"
                SELECT * FROM socidades WHERE ruc = '".$codigo."' limit 1
                ");
                /*$consulta=mysql_query("
                    SELECT * FROM socidades WHERE ruc = '".$codigo."' limit 1
                    ");*/
                while($dato=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $codigoHTML.='
                        <td>'.$dato['ruc'].'</td>
                        <td>'.$dato['nombre'].'</td>
                        <td>'.$dato['habil'].'</td>
                      ';
                      } 
                $codigoHTML.='
            </tr>
          </tbody>
      </table>
</body>
<style>
  *,h3{
    font-family: "Slabo 27px", serif;
  }
  table, table tr, table th, table td {
      border-style: solid;
      border-color: black;
      border-width: 2px;
      border-collapse: collapse;
      padding: 5px
  }
</style>
</html>';


$nmrndm = 'ReporteCodSocAudit_'.$codigo.'_'.$fechadoc.'_'.$horadoc;
$namedoc = $nmrndm.$fechadoc.'.pdf';

$codigoHTML=utf8_encode($codigoHTML); //codifica los unicode
$dompdf=new DOMPDF();
$dompdf->load_html(utf8_decode($codigoHTML)); //decodifica los unicode
ini_set("memory_limit","128M");
$dompdf->render();

$dompdf->stream($namedoc);
//$dompdf->stream($namedoc, array("Attachment" => false)); //previzualizar


?>