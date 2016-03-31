<?php
class Resultado
{
   public $usuario;
   public $juego;
   public $resultado;
 
  
   public static function TraerTodosLosResultados()
   {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("select * from resultado");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "Resultado"); 

   }
    public function InsertarResultadoConParametros()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into resultado (usuario,juego,resultado)values(:paramUsuario,:paramJuego,:paramResultado)");
                $consulta->bindValue(':paramUsuario',$this->usuario, PDO::PARAM_INT);
                $consulta->bindValue(':paramJuego', $this->juego, PDO::PARAM_STR);
                $consulta->bindValue(':paramResultado', $this->resultado, PDO::PARAM_STR);
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }
     public function InsertarResultado()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into resultado (usuario,juego,resultado)values('$this->usuario','$this->juego','$this->resultado')");
                
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }
}
?>