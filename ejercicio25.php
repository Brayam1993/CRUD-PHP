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

class trabajador extends persona{
  public $puesto; // propiedad nueva
  public function presentarseComoTrabajador(){
    echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
  }
}

$objTrabajador= new trabajador(); // instancia o creación de un objeto
$objTrabajador->asignarNombre("Oscar Uh"); // llamando un metodo
$objTrabajador->puesto="Profesor";
$objTrabajador->presentarseComoTrabajador();

?>