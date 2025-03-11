<html>
<head>
 <title>¿Eres mayor de edad?</title>
</head>
<body>
 <?php
 $num = rand(1, 30);
 echo $num;
 echo "<br>";
 if ($num <18) {
 echo "eres menor de edad";
 } else {
 echo "Eres mayor de edad";
 }
 ?>
</body>
</html>