<?php
class usuario
{

  public $id;
  public $nombre;
  public $apellido;
  public $legajo;
  public $calle;
  public $correo;
  public $fecha;
  public $foto;
  public $clave;
  public $provincia;
  public $localidad;
  public $colegio;
    

 
  
   public static function TraerTodosLosUsuarios()
   {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
           // $consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario");
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL traerTodosLosUsuarios");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 

   }
  public function InsertarUsuario()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuario (nombre,apellido,legajo,calle,fechaNac,correo,foto,clave)values(:paramNombre,:paramApellido,:paramLegajo,:paramcalle,:paramFecha,:paramcorreo,:paramFoto,:paramClave)");
                $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_INT);
                $consulta->bindValue(':paramApellido', $this->apellido, PDO::PARAM_STR);
                $consulta->bindValue(':paramLegajo', $this->legajo, PDO::PARAM_STR);
                $consulta->bindValue(':paramcalle', $this->calle, PDO::PARAM_STR);
                $consulta->bindValue(':paramFecha', $this->fecha, PDO::PARAM_STR);
                $consulta->bindValue(':paramcorreo', $this->correo, PDO::PARAM_STR);
                $consulta->bindValue(':paramFoto', $this->foto, PDO::PARAM_STR);
                $consulta->bindValue(':paramClave', $this->clave, PDO::PARAM_STR);
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }
     public function validarusuario($usuario,$clave)
     {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
           // $consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario where correo='$usuario' and clave='$clave'");
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL validarUsuario(:usuario,:clave)");
            $consulta->bindValue(':usuario',$usuario, PDO::PARAM_INT);
            $consulta->bindValue(':clave', $clave, PDO::PARAM_STR);
             $consulta->execute(); 
            $UsuarioBuscado= $consulta->fetchObject('usuario');
            return $UsuarioBuscado;

     }
      public function validarMailUsuario($correo)
     {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $sql="select * from usuario where correo='$correo' ";
            $consulta =$objetoAccesoDato->RetornarConsulta($sql);
           // $consulta =$objetoAccesoDato->RetornarConsulta("CALL validarUsuario(:usuario,:clave)");
            $consulta->bindValue(':correo',$correo, PDO::PARAM_STR);
            $consulta->execute(); 
            $UsuarioBuscado= $consulta->fetchObject('usuario');
            return  $UsuarioBuscado;

     }
   
}
?>