<!DOCTYPE html>

<html lang="es-MX" class="no-js">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



	



	<title>Bife 140 - Pr&oacute;ximamente</title>

	<meta name="description" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />



	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">



	<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>

	<style  type="text/css">
	    #success{
        	width: 70%;
        	color: green;
        	border: 2px solid green;
        	border-radius: 4px;
        	padding: 4px 10px;
        	background-color: #F3EEBC;
        }
	</style>



</head>

<body style="background:transparent;">

	<div class="overlay" style="opacity: 0.7;"></div>

	<!--<div class="fondo"></div>-->

	<div class="wrap">

		<main id="main" class="site-main">

			<div id="front" class="site-front" style="height: 90%;">

				<div class="inner">



					<section class="content fade-in" style="margin-top: -60px;">



						<div class="flexible">

								<img src="images/logo.png" alt="Catania Logo" class="fade-in" width="30%" />	

						</div>



						<div class="flexible" style="margin-top:50px;">

							<h4 class="section-title" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif; font-size: 24px; line-height:34px; color: #FFF; letter-spacing: 0.3em;">PR&Oacute;XIMAMENTE<br>UNA NUEVA EXPERIENCIA PARA TI</h4>
						</div>					


					</section>					
				</div>							

			</div>

			<footer class="fade-in" id="pie">

				<div class="titulo_boton fade-in" style="margin-top:-25px; margin-bottom: 25px; font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif; text-align: center; color: #FFF;">
					<a class="button-reservar" id="boton-reservar">Reservar</a>
				</div>	

				<center><div id="res"></div></center>
							
				<div class="formulario-reservacion" id="formulario-reservar" style="display: none;">
					<form class="form" id="fc" action="bin/contacto.php" method="POST">
						<div class="row" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif; text-align: center; color: #FFF;">
							
								<div class="col-sm-1"></div>
								<div class="col-xs-10 col-sm-2"><label>Nombre</label><input type="text" name="nombre" style="width: 100%; height: 48px; border: 1px solid rgb(34,34,32);" placeholder="Ingresa tu nombre" required></div>
								<div class="col-xs-10 col-sm-2"><label>Email</label><input type="email" name="email" style="width: 100%; height: 48px; border: 1px solid rgb(34,34,32);"  placeholder="Ingresa tu email" required></div>
								<div class="col-xs-10 col-sm-2"><label>Fecha</label><input type="date" min="<?php echo date("Y-m-d");?>" name="fecha" value="<?php echo date("Y-m-d");?>" style="width: 100%; border: 1px solid rgb(34,34,32);" placeholder="Ingresa la fecha" required></div>
								<div class="col-xs-10 col-sm-2"><label>Hora</label><input type="time" name="hora" style="width: 100%; border: 1px solid rgb(34,34,32);" placeholder="Ingresa la hora" required></div>
								<div class="col-xs-10 col-sm-2"><label>&nbsp; </label><input style="background-color: #671C1F; width: 100%; height: 48px" id="send" type="submit" value="Reservar" required><div id="load" class="loading">ENVIANDO...</div></div>
								<div class="col-sm-1"></div>
							
						</div>
					</form>
				
				</div>


				<br><br>

				<p style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif; color: #FFF; font-size: 14px; line-height:20px;">

				Av. Camelinas 2938<br>Col. Cinco de Diciembre<br>Morelia, Michoac&aacute;n

				</p>

			</footer>



		</main>

	</div>





	<div id="preload">

		<div id="preload-content">

			<div class="preload-spinner">

				<span class="bounce1"></span>

				<span class="bounce2"></span>

				<span class="bounce3"></span>

			</div>

			<div class="preload-text"></div>

		</div>

	</div>





	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

	<script type="text/javascript" src="js/plugins.js"></script>

	<script type="text/javascript" src="js/scripts.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){ 
		   $('#boton-reservar').on('click',function(){

			   	$('#formulario-reservar').slideDown(1600);
			    $('#boton-reservar').fadeOut(600);

		   });
		});
	</script>

	<script type="text/javascript">
		function ShowError(tx){
			$('#res').addClass('fail');
			$('#res').html(tx);
			$('#send').show();
			$('#load').hide();
		}

		//Validar email
		function ValEmail(mail) {
			var reglas = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			return reglas.test(mail);
		}
			
		$('#fc').submit(function(e){
			
			$('#send').hide();
	        $('#load').show();
				
			
			e.preventDefault();
			
			$.ajax({
				type: 'POST',
				url: $(this).attr('action'),
				data: $(this).serialize(),
				timeout: 30000,
				
				success: function(data){	
					console.info(data);
					var r = JSON.parse(data);
					
					if(r.status=="1")
						$('#fc').html('<center><div id="success">El mensaje ha sido enviado</center></div>');
					else 
						ShowError(r.msj);
				},
				
				error: function (xhr, ajaxOptions, thrownError){
					console.info(xhr.status);
					if(thrownError=='timeout') 
						ShowError('Tiempo de espera superado'); 
					else 
						ShowError('Se ha producido un error');
				}
			})
		});
	</script>




</body>

</html>