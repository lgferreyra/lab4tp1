<?php 
session_start();
require_once("clases/usuario.php");
require_once("clases/AccesoDatos.php");

$DatosRegistro= json_decode(json_encode($_POST));

$usuarioEncontrado=usuario::validarMailUsuario($DatosRegistro->correo);


var_dump($usuarioEncontrado)
/*
var_dump($DatosRegistro->correo);
var_dump($usuarioEncontrado->correo);

if(isset($usuarioEncontrado->correo))
{
	
	echo "correcto";

}else
{
	echo "Ya Existe";
}
*/





?>