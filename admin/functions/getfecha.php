<?php 
    // obteniendo fecha
    date_default_timezone_set('America/Lima');
    $dia = date("N"); //dia en numeros
    $mesdelanio = date("m"); //mes del anio en numero
    $diadelmes = date("j"); //dia del mes
    $anio = date("Y"); //anio en 4 digitos

    $time = date("H:i:s"); //time formato Hor/minuto/segundo

    $timehora = date("g");
    $timeminuto = date("i");
    $timeminuto2 = date("a");

    /*
        switch fecha para obtener mese del año
    */
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
            echo "no se definio correctamente";
            break;
    } 
    
    /*
        imprime: 16 septiembre a las 13:56:46
    */
    $fechadoc = $diadelmes.' '.$mesdelanio1.' a las '.$time;
 ?>