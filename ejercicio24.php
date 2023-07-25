<?php

class persona {

  public $nombre; // propiedades
  private $edad;
  protected $altura;

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

$objAlumno= new persona(); // instancia o creación de un objeto
$objAlumno->asignarNombre("Oscar"); // llamando un metodo
echo $objAlumno->nombre; // imprimir una propiedad
$objAlumno->imprimirNombre();
echo $objAlumno->mostrarEdad();


$objAlumno2= new persona(); // instancia o creación de un objeto
$objAlumno2->asignarNombre("Pedro"); // llamando un metodo
echo $objAlumno2->nombre; // imprimir una propiedad
$objAlumno2->imprimirNombre();

?>