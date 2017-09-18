<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



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
                        dameposts();
                        
                    }
                });
            });
     });

     function dameposts(){
        (function($)
            {
                $(document).ready(function()
                {
                    $.ajaxSetup(
                    {
                        cache: false,
                        beforeSend: function() {
                            $('#content').hide();
                            $('#loading').show();
                        },
                        complete: function() {
                            $('#loading').hide();
                            $('#content').show();
                        },
                        success: function() {
                            $('#loading').hide();
                            $('#content').show();
                        }
                    });
                    var $container = $('#content');
                    $container.load('getResults.php');
                });
            })(jQuery);
     }
 </script>
 </head>

 <body onload="dameposts()">

 <form method="post" id="formulario" enctype="multipart/form-data">
    <label for="">Título para post</label>
    <input type="text" name="titulo_post" required="">
    <br>
    <label for="">Seleccionar ubicación</label>
    <select name="ubication" id="">
        <option value="1">Banco de Preguntas</option>
        <option value="2">Calendario</option>
        <option value="4">Contador al Dia</option>
        <option value="4">Convenios</option>
        <option value="5">Eventos</option>
        <option value="6">Fotos</option>
        <option value="7">Noticias</option>
        <option value="8">Oferta Laboral</option>
        <option value="9">Requisitos Para Certificacion</option>
        <option value="10">Requisitos Para Colegiatura</option>
    </select>
    <br>
    <label for="">Descripción</label><br>
    <textarea name="description" id="" cols="30" rows="5" required=""></textarea>
    <br>
    <label for="">Subir imagen: </label>
    <input type="file" name="file" accept="image/jpg, image/jpeg, image/png, image/gif, application/pdf" required="">
    <!--
    <input type="submit" name="btnsubmit" value="Enviar">
    <input type="reset" name="btnreset" value="Nuevo">
    -->
 </form>

 <div id="respuesta"></div>

 </body>

<div id="content">
</div>

</html>
<?php include('functions/show_warning_error.php'); ?>
<script>  
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
