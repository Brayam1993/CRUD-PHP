<?php

class persona {

  public $nombre; // propiedades
  private $edad;
  protected $altura;

  function __construct($nuevoNombre){

    $this->nombre=$nuevoNombre;

  }

  public function asignarNombre($nuevoNombre){ // acciones o métodos...
    $this->nombre=$nuevoNombre."<br/>";
  }

  public function imprimirNombre(){
    echo "Hola soy ".$this->nombre."<br/>";
  }

  public function mostrarEdad(){
    $this->edad=20;
    return $this->edad;
  }

}

$objAlumno= new persona("Oscar Uh"); // instancia o creación de un objeto
//$objAlumno->asignarNombre("Oscar"); // llamando un metodo
$objAlumno->imprimirNombre();


?>