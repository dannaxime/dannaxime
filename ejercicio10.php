<html> 
 
<head> 
  <title>Problema</title> 
</head> 
<body> 
  <?php 
  $cadena1 = "puntuación obtenida por un 
estudiante en tres exámenes";
  $cadena2 = "El estudiante obtuvo las siguientes puntuaciones:";
  
  $todo = $cadena1 . "<br>";
  echo $todo; 
  $numero1 = 85;
  $numero2 = 90;
  $numero3 = 78; 
  echo $cadena2 . " $numero1 , $numero2, $numero3";
