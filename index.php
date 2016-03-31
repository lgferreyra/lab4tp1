<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sala De Juegos</title>

		<!--Estilos-->
		 <link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/animacion.css">
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link href="css/ingreso.css" rel="stylesheet">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
          <script src="bower_components/jquery-form/jquery.form.js"></script>
        <script SRC="js/jsControladorLogin.js" TYPE="text/javascript"></script>

        <script type="text/javascript">
        function registrar()
        {
        	window.location.href="formUsuarioJquery.php";
        }
      
        </script>
        <!--Final de Lógica-Programación -->

<style type="text/css">





</style>
	</head>
	<body style="zoom: 0.8;">

		<div id="header">


Ingreso a la sala

        </div>
		<div class="CajaInicio">
			<br><br>
			
	 <div id="formLogin" class="container">

      <form  style=" float: left;" class="form-ingreso " onsubmit="login();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
        <label for="correo" class="sr-only">Correo electrónico</label>
                <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required="" autofocus="" value="<?php  if(isset($_COOKIE["registro"])){echo $_COOKIE["registro"];}?>">
        <label for="clave" class="sr-only">Clave</label>
        <input type="password" id="clave" minlength="4" class="form-control" placeholder="clave" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="recordarme" checked> Recordame
          </label>
          
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p>octavio@admin.com.ar</p>
      <p>1234</p>
            <h5 class="form-ingreso-heading">mensaje:</h5>
        <input type="text"  class="form-control" readonly id="MensajeError" >

      </form>
      
		<form  class="form-ingreso "  style=" float: right;  margin-right: 30px;" onsubmit="GuardarUsuarioRapido();return false" >

       <h2 class="form-ingreso-heading">Registro rapido</h2>
        <label for="cantante" class="sr-only">Nombre</label>
        <input type="text"  minlength="2"  id="nombre" name="nombre" title="Se necesita un nombre " class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="titulo" class="sr-only">apellido</label>
        <input type="text"  minlength="2"  id="apellido"  name="apellido" title="Se necesita un apellido "  class="form-control" placeholder="Apellido" required="" autofocus="">
        <label for="titulo" class="sr-only">mail</label>
        <input type="email"  id="correoRegistro"  class="form-control" name="correo"   title="Se necesita un correo electronico " placeholder="alguien@sucorreo.com.ar" maxlength="50" autofocus=""  required="" >
        <label for="titulo" class="sr-only">clave</label>
        <input type="password" id="claveRegistro" class="form-control" name="clave"  placeholder="Su clave, minimo 6 letras" title="minimo 6 caracteres"  minlength="6"   required="" >   
        <h3 class="form-ingreso-heading">Registrar</h3>

            	<button class="btn btn-lg btn-warning " type="submit">Registrar</button>
      	

      </form>


    </div> <!-- /container -->



			
				


			


		</div>

		<center>

		</center>

	</body>
</html>
