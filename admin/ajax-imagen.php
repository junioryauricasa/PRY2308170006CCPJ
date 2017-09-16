<?php
    if (isset($_FILES["file"]))
    {
        $ubicacion = $_POST["ubication"]; //ubicacion 

        $file = $_FILES["file"];
        $nombre = $file["name"];
        $tipo = $file["type"];
        $ruta_provisional = $file["tmp_name"];
        $size = $file["size"];
        $dimensiones = getimagesize($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];
        

        /*
            Validacion de ubicacion
        */
        if($ubicacion == 1){
            $carpeta = "documentos/eventos/";
        }else
        if($ubicacion == 2){
            $carpeta = "documentos/calendario/";
        }else
        if($ubicacion == 3){
            $carpeta = "documentos/fotos/";
        }

        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);
        //echo "<img src='$src'></br>";
        echo "archivo subido exitosamente";
    }else
    echo "No se ha seleccionado ningun archivo";

?>