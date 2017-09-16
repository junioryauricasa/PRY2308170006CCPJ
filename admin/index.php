<!DOCTYPE HTML>
<html>
 <head>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script>
     $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "ajax-imagen.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });
     });
    </script>
 </head>
 <body>
 <form method="post" id="formulario" enctype="multipart/form-data">
    <label for="">seleccionar ubicación</label>
    <select name="ubication" id="">
        <option value="1">evento</option>
        <option value="2">calendario</option>
        <option value="3">fotos</option>
    </select>
    <br>
    <label for="">Subir imagen: </label>
    <input type="file" name="file">
 </form>
 <div id="respuesta"></div>
 </body>
</html>