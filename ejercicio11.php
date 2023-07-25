<?php

if($_POST){

  $valorA=$_POST['valorA'];
  $valorB=$_POST['valorB'];

  // Operaciones aritmeticas
  $suma=$valorA+$valorB;
  $resta=$valorA-$valorB;
  $division=$valorA/$valorB;
  $multiplicacion=$valorA*$valorB;

  echo "<br/>".$suma;
  echo "<br/>".$resta;
  echo "<br/>".$division;
  echo "<br/>".$multiplicacion;

  if($valorA==$valorB){
    
    echo "<br/>El valor de A es igual a el valor de B";

    if($valorA==4){
      echo "<br/>El valor es 4";
    }
    if($valorA==5){
      echo "<br/>El valor es 5";
    }

  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores aritmeticos</title>
</head>
<body>

  <form action="ejercicio11.php" method="post">
  valor A:
  <input type="text" name="valorA" id="">
  <br/>
  valor B:
  <input type="text" name="valorB" id="">
  <br/>

  <input type="submit" value="Calcular">

  </form>

  
</body>
</html>