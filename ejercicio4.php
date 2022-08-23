<html>

<head>

</head>

<body bgcolor="#98b1c8">

    <form action="" method="POST">

        <?php

        error_reporting(0);

        if ($_POST['calcular'] == 'Convertir') {
            $n1 = $_POST['txt1'];

            $result = floor($n1 / 60);
            $result2 = $n1 % 60;
            echo "<script>alert ('Son : $result minutos con $result2 segundos.')</script>";
        }







        ?>

        <center>
            <br><br>
            <h2>Convierte segundos a minutos</h2><br>
            <p>Escribe una cantidad de segundos y la convertire en minutos y segundos</p><br>
            Segundos:
            <input type="text" name="txt1" value="">
            <input type="submit" name="calcular" value="Convertir">


        </center>









    </form>








</body>

</html>