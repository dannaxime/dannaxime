<html>
<head></head>
<body>
 <?php
 $dia = date("d");
 if ($dia <= 20) {
 echo "puede pagar la factura";
 } else {
 echo "factura vencida";
 }
 ?>
</body>
</html>