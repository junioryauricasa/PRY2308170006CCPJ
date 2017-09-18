<?php
    if (isset($_FILES["file"]))
    {
        $ubicacion = $_POST["ubication"]; //ubicacion 
        $file = $_FILES["file"];
        $nombre = $file["name"];
        $tipo = $file["type"];
        
        $titulo = $_POST['titulo_post'];
        $descripcion = $_POST['description'];

        $ruta_provisional = $file["tmp_name"];
        $size = $file["size"];
        $dimensiones = getimagesize($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];

        /*  Validacion de ubicacion  */
        if($ubicacion == 1){
            $carpeta = "documentos/BancoDePreguntas/";
        }else
        if($ubicacion == 2){
            $carpeta = "documentos/Calendario/";
        }else
        if($ubicacion == 3){
            $carpeta = "documentos/ContadorAlDia/";
        }else
        if($ubicacion == 4){
            $carpeta = "documentos/Convenios/";
        }else
        if($ubicacion == 5){
            $carpeta = "documentos/Eventos/";
        }else
        if($ubicacion == 6){
            $carpeta = "documentos/Fotos/";
        }else
        if($ubicacion == 7){
            $carpeta = "documentos/Noticias/";
        }else
        if($ubicacion == 8){
            $carpeta = "documentos/OfertaLaboral/";
        }else
        if($ubicacion == 9){
            $carpeta = "documentos/RequisitosParaCertificacion/";
        }else
        if($ubicacion == 10){
            $carpeta = "documentos/RequisitosParaColegiatura/";
        }

        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);

        // validando img o pdf mostrar previzualizacion 
            if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif'){
                //echo "<img src='$src'></br>";
                $tipo = 0;
            }else
            if($tipo == "application/pdf"){
                //echo "<embed src='$src' width='800' height='505' type='application/pdf'>";
                $tipo = 1;
            }else{
                echo 'Archivo no permitido';
            }
        // END validando img o pdf mostrar


        echo "Mensaje: se ha subido a ".$src." exitosamente...";
        echo '</br>';
        //echo "description: ".$descripcion;
        //registrar($titulo, $descripcion, $fechadoc, $src, $tipo);

    

        include('functions/getfecha.php');

        // funcion registrar 
        //function registrar($titulo, $descripcion, $fechadoc, $src, $tipo){
            
            include ('db/conextion.php'); //incluytendo cadena de coneccion

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $sql = "
                INSERT INTO tb_upload_files
                    (
                        intidcodigo, 
                        nvchtitulo, 
                        nvchdescripcion,
                        dtfecha,
                        nvcharchivo,
                        bttipefile
                    )
                VALUES 
                    (
                        null,   
                        '$titulo',
                        '$descripcion',
                        '$fechadoc',
                        '$src',
                        '$tipo'
                    )
            ";
            $conn->exec($sql);

            $conn = null;
    //}
    }else

    echo "No se ha seleccionado ningun archivo"; //mensaje de error
?>