<html>

<head>

</head>

<body bgcolor="#98b1c8">

    <form action=" " method="POST">

        <?php
        error_reporting(0);

        if ($_POST['calcular'] === 'calcular') {

            $n1 = $_POST['txt1'];
            if ($n1 % 2 == 0) {
                echo "<script> alert('El resultado es Par')</script>";
            } else {
                echo "<script> alert('El resultado es Impar')</script>";
            }
        }
        ?>

        <center>
        <br><br><br>
            <h3>Calculadora de Numero Par o Impar</h3>
            <input type="text" name="txt1" size="10" value=""><br><br>
            Ingrese un Numero <br><br><br>
            <input type="submit" name="calcular"  value="calcular"><br><br><br><br>
        </center>

    </form>

</body>

</html>