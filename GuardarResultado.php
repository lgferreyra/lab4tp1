<?php
	

		include_once("clases/resultado.php");
		include_once("clases/AccesoDatos.php");




		$resultado=new Resultado();
		$resultado->usuario="usuarioNuevo";
		$resultado->juego="JuegoNuevo";
		$resultado->resultado="resultadooNuevo";
		/*
		los siguientes métodos son iguales en funcionamiento ,
		el primero antes de insertar configura los parametros.
		*/
		$resultado->InsertarResultadoConParametros();
		$resultado->InsertarResultado();

?>