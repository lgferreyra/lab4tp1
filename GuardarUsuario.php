<?php
session_start();
require_once"clases/usuario.php";
require_once"clases/AccesoDatos.php";

 

if(isset($_POST['usuario']) && isset($_POST['clave']) && $_POST['nombre'] && isset($_POST['apellido']) && isset($_POST['legajo']) && isset($_POST['dire']) && isset($_POST['fecha']))
    {
       
       



        $_SESSION['usuarioActual']=$_POST['usuario'];
        $email = $_POST['usuario'];
        //
        $ruta=getcwd();  //ruta directorio actual
        $rutaDestino=$ruta."/Fotos/";
    	$NOMEXT=explode(".", $_FILES['fichero0']['name']);
        $EXT=end($NOMEXT);
        $nomarch=$NOMEXT[0].".".$EXT;  // no olvidar el "." separador de nombre/ext
        $rutaActual = $ruta."/FotosTemp/".$nomarch;
        $nuevoNombreDeFoto = $email.".".$EXT;
        //Renombro con el email/usuario
        rename ($ruta."/FotosTemp/".$nomarch,$ruta."/FotosTemp/".$nuevoNombreDeFoto);
        $rutaActual = $ruta."/FotosTemp/".$nuevoNombreDeFoto;
        echo $nomarch;
        echo "	</br>";
        echo $rutaActual;
         echo "	</br>";
        echo $rutaDestino.$nuevoNombreDeFoto;
         echo "	</br>";
        //Muevo a carpeta Fotos
		rename($rutaActual,$rutaDestino.$nuevoNombreDeFoto);
        //

           $usuario= new usuario();
        $usuario->mail=$_POST['usuario'];
        $usuario->nombre=$_POST['nombre'];
        $usuario->apellido=$_POST['apellido'];
        $usuario->legajo=$_POST['legajo'];
        $usuario->direccion=$_POST['dire'];
        $usuario->fecha=$_POST['fecha'];
         $usuario->clave=$_POST['clave'];
        $usuario->foto=$nuevoNombreDeFoto;
        $usuario->InsertarUsuario();

        echo "Foto Guardada con éxito en carpeta Fotos del servidor";
        //Guardar usuario en BD
    }
    
    else
    {
    	echo "Error: Debe ingresar todos los campos";
    }
    
?>