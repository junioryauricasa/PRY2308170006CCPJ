<?php 
    require_once("dompdf/dompdf_config.inc.php");
    //$conexion = mysql_connect("localhost","root","");
    //mysql_select_db("db_ccpj",$conexion);

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_ccpj";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    //obteniendo parametro
    $codigo = $_GET['cod_consulta_habil'];


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

    //calendari mostrando fecha y hora actual
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


$fechadoc = $diadelmes.' '.$mesdelanio1.' a las '.$time; 



$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Reporte Memorandums</title>
</head>
<body>
  <div style="text-align:right; font-size:11px">
  '.
  $fechadoc.'
  </div>
  <div>
    <h1>REGISTRO NACIONAL DE GRADOS ACADÉMICOS Y TÍTULOS PROFESIONALES</h1>
  </div>
  <div align="center">
      <table style="text-align: center; width:100%">
        <thead>
          <tr>
            <td ><strong>Codigo Memorandum</strong></td>
            <td ><strong>Oficina que Emite</strong></td>
            <td ><strong>Fecha Emitida</strong></td>
          </tr>
        </thead>
      <tbody>';
    
    $sql = 'SELECT * FROM agre  WHERE id = $codigo;';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    echo "
      <table class='table table-bordered table-condensed'>
          <thead>
              <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Job Title</th>
              </tr>
          </thead>
          <tbody>
              <?php while ($r = $q->fetch()): ?>
                  <tr>
                      <td><?php echo htmlspecialchars($r['id']) ?></td>
                      <td><?php echo htmlspecialchars($r['nombres']); ?></td>
                      <td><?php echo htmlspecialchars($r['habildad']); ?></td>
                  </tr>
              <?php endwhile; ?>
          </tbody>
      </table>
    ";

          $codigoHTML.='
    </tbody>
    </table>
  </div>
</body>
</html>';


$nmrndm = 'Reporte_Consulta_habil'.$fechadoc;
$namedoc = $nmrndm.$fechadoc.'.pdf';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream($namedoc, array("Attachment" => false));
?>