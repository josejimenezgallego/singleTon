<?php

use PHPUnit\Framework\TestCase;
require_once ("usuarioSesion.php");

class usuarioSesionTest extends TestCase
{
     public function testCorrecto()
     {				
		$usuario = UsuarioSesion::getInstance();		
		$usuario->setUsuarioSesion("Paco");		
		$this->assertEquals($usuario->getUsuarioSesion(), "Paco");
		$usuario = UsuarioSesion::getInstance();		
		$this->assertEquals($usuario->getUsuarioSesion(), "Pepe");
     }
}


?>
