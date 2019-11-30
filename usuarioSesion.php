<?php
class UsuarioSesion 
{
   // CONTENEDOR INSTACIA DE LA CLASE
   private static $instance=null;
   private $nombre="";

   private function __construct()
   {      
      $this->nombre="";
   }

   public static function getInstance()
   {
      if (!self::$instance instanceof self)
      {
         self::$instance=new self;
      }
      return self::$instance;
   }

    // PREVIENE QUE LA INSTANCIA SEA CLONADA
    private function __clone()
    {
    }

    // EVITAR SERIALIZACIÓN (crearía una segunda instancia)
    private function __wakeup()
    {
    }

    // GUARDA NOMBRE USUARIO
    public function setUsuarioSesion($nombre)   
    {
         $this->nombre=$nombre;         
    }

    // DEVUELVE NOMBRE USUARIO
    public function getUsuarioSesion()   
    {
        return $this->nombre;
    }

 }

 ?>
