<html>

<head>

</head>

<body bgcolor="#98b1c8">

    <form action="" method="POST">
        <?php

        error_reporting(0);

        /**F – 32 = 1,8 * C” */
        /**Celsius o en Fahrenheit */


        if ($_POST['convertidor'] == 'Convertir' and $_POST['opcionesa'] == 'celcius' and $_POST['opcgrados'] == 'farenheit2') {
            $n1 = $_POST['txt1'];
            $result = round((($n1 - 32) / 1.8), 1);
            echo "<script> alert ('En Celsius son : $result Grados')</script>";
        }
        if ($_POST['convertidor'] == 'Convertir' and $_POST['opcionesa'] == 'farenheit' and $_POST['opcgrados'] == 'celcius1') {
            $n1 = $_POST['txt1'];
            $result = round((($n1 * 1.8) + 32), 1);
            echo "<script> alert ('En Fahrenheit son : $result Grados')</script>";
        }
        if ($_POST['convertidor'] == 'Convertir' and $_POST['opcionesa'] == 'celcius' and $_POST['opcgrados'] == 'celcius1'){
            echo "<script>alert ('Estan en la misma unidad , vuelva a intentarlo')</script>";
        }
        if ($_POST['convertidor'] == 'Convertir' and $_POST['opcionesa'] == 'farenheit' and $_POST['opcgrados'] == 'farenheit2'){
            echo "<script>alert ('Estan en la misma unidad , vuelva a intentarlo')</script>";
        }
        ?>


        <center>
            <br><br>
            <h3>Convertidor de temperaturas</h3>

            <input type="text" name="txt1" value="" size="10">° Grados
            <select name="opcgrados" size="1" multiple>
                <option value="celcius1">Celsius</option>
                <option value="farenheit2" selected>Fahrenheit</option>
            </select>

            <br><br>

            <input type="submit" name="convertidor" value="Convertir" size="10">
            A
            <select name="opcionesa" size="1" multiple>
                <option value="celcius" selected>Celsius</option>
                <option value="farenheit">Fahrenheit</option>
            </select>





        </center>

    </form>





</body>

</html>