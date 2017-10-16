<?php
    if (isset($_FILES["file"]))
    {

        $ubicacion = 'documentos/EstadosFinancieros/'; //ubicacion 
        $file = $_FILES["file"];
        $nombre = $file["name"];
        $tipo = $file["type"];
        
        $vanio = $_POST['anio'];
        $vperiodo = $_POST['periodo'];
        
        //$titulo = $_POST['titulo_post'];
        //$descripcion = $_POST['description'];

        $ruta_provisional = $file["tmp_name"];
        //$size = $file["size"];
        $dimensiones = getimagesize($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];

        $src = $ubicacion.$nombre;
        move_uploaded_file($ruta_provisional, $src);


        echo "Mensaje: se ha subido a ".$src." exitosamente...";
            
        include ('db/conextion.php'); //incluytendo cadena de coneccion

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $sql = "
            INSERT INTO tb_upload_estados_financieros
                (
                    intidcodigo, 
                    nvchyear, 
                    nvchtrimestre,
                    nvchdocumento
                )
            VALUES 
                (
                    '',   
                    '$vanio',
                    '$vperiodo',
                    '$src'
                )
        ";
        //echo $sql;
        $conn->exec($sql);

        $conn = null;
    //}
    }else

    echo "No se ha seleccionado ningun archivo"; //mensaje de error
    header('location: Estados-Financieros.php');
?>