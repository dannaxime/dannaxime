<html>
<head></head>
<body>
<?php

$numero = rand(1, 100);


echo "El número generado es: " . $numero . "<br>";


if ($numero % 2 == 0) {
    echo "El número es par.";
} else {
    echo "El número es impar.";
}
?>
</body>
</html>