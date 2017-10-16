<!DOCTYPE html>
<html>
<head>
	<title>Admin CCPJ | Registro de Eventos</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

	<!-- glypficons -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="css/bootstrap-table.css">
	<link rel="stylesheet" href="css/style-jsondatatable.css">


	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<style>
		body{
			padding-top: 80px;
		}
		/* 
		.row{
			padding-bottom: 20px;
		}
		.navbar-default {
			border-bottom: solid 2px #d5d5d5;
		}

		Grid pinterest 
		.grid-item { width: 200px; }
		.grid-item--width2 { width: 400px; }
		*/
	</style>

	<!--script src="js/bootstrap-wysihtml5.js"></script>
	<script src="js/wysihtml5-0.3.0.js"></script-->


	<!-- script para ajax -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<!--script>
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
	                    //$container.load('getResults.php');
	                    $container.load('functions/files-getResults-all-table.php');
	                });
	            })(jQuery);
	     }
	</script-->
	<!-- END script AJAX -->

</head>

<body onload="">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
	      	<img src="http://www.ccpjunin.pe/dist/img/logo_horizontal_ccpj.png" alt="" class="img-responsive" width="100px">
	      </a>
	    </div>
	    <div id="navbar" class="navbar-collapse collapse">
	      <ul class="nav navbar-nav">
	        <li class=""><a href="index.php">Posts</a></li>

	        <?php 
		        if (isset($_SESSION['usr_id'])) 
		        	{ 
		        		echo '
		        			<li class=""><a href="estados-financieros.php">EE FF</a></li>
					        <li class=""><a href="eventos">Eventos</a></li>
					        <li class=""><a href="banners">Banners</a></li>
					        <!--li class=""><a href="busqueda">Busqueda</a></li-->

					        <!--li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li role="separator" class="divider"></li>
					            <li class="dropdown-header">Nav header</li>
					            <li><a href="#">Separated link</a></li>
					            <li><a href="#">One more separated link</a></li>
					          </ul>
					        </li-->
		        		';
		        	}else
		        	{
		        		echo '';
		        	}
	        ?>
	        
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <!--li><a href="../navbar/">Default</a></li>
	        <li><a href="../navbar-static-top/">Salir</a></li-->
	        <?php 
	        	if (isset($_SESSION['usr_id'])) 
	        	{
	        ?>
				<li>
					<p class="navbar-text">Hola <i class="btn btn-danger btn-xs" ><b>
						<?php echo $_SESSION['usr_name']; ?></b></i></p>
				</li>
				<li>
					<a href="logout.php">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</a>
				</li>
			<?php 
				} 
				else{
			?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Registro</a></li>
			<?php 
				}
			?>
	      </ul>
	    </div><!--/.nav-collapse -->
	  </div>
	</nav>