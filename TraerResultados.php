<?php
		include_once("clases/resultado.php");
		include_once("clases/AccesoDatos.php");
		$resultado=Resultado::TraerTodosLosResultados();
		var_dump($resultado);

?>