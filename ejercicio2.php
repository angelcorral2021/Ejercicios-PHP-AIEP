<html>
    <head>

    </head>

    <body bgcolor="#98b1c8">

<form action="" method="POST">

<?php

error_reporting (0);

/**1 pulgada =
2,54 centímetros” */

if($_POST['calculadora'] == 'calcular'){

    $n1 = $_POST['txt1'];
    $result = round(($n1 / 2.54),2);
    echo "<script> alert ('Las pulgadas son $result')</script>";
}

?>

<center>
<br><br><br>
Ingrese su medida a convertir
<br><br>
<input type="text" name="txt1" value="" size="10">
<br><br>

<input type="submit" name="calculadora" value="calcular" size="10">








</center>





</form>





    </body>
</html>