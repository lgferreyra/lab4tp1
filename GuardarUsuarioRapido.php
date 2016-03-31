<?php
session_start();
require_once"clases/usuario.php";
require_once"clases/AccesoDatos.php";

$DatosRegistro= json_decode(json_encode($_POST));

var_dump($DatosRegistro);
    
?>