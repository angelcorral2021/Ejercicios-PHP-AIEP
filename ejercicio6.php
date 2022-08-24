<html>

<head>

</head>

<body bgcolor="#98b1c8">

    <form action="" method="POST">

        <?php



        if ($_POST['comparar'] == 'Comparar') {

            $n1 = $_POST['txt1'];
            $n2 = $_POST['txt2'];
            $n3 = $_POST['txt3'];

            if ($n1 == $n2 and $n1 == $n3 and $n2 == $n3 and $n1 != '') {
                echo "<script> alert ('Has anotado tres números iguales!!')</script>";
            } elseif (($n1 == $n2 or $n1 == $n3 or $n2 == $n3) and ($n1 != '' and $n2 != '' and $n3 != '')) {
                echo "<script> alert ('Has anotado dos números iguales!!')</script>";
            } elseif (($n1 != $n2 and $n1 != $n3 and $n2 != $n3) and ($n1 != '' and $n2 != '' and $n3 != '')) {
                echo "<script> alert ('Has anotado tres números distintos!!')</script>";
            }
        }



        ?>

        <center>
            <br>
            <h2>Compara tres números</h2>
            <br><br>
            <h4>Escribe tres números y compare si hay números iguales</h4><br>
            Pimer Número <input type="number" name="txt1" value=""><br><br>
            Segundo Número <input type="number" name="txt2" value=""><br><br>
            Tercer Número <input type="number" name="txt3" value=""><br><br>
            <br><br>
            <input type="submit" name="comparar" value="Comparar">






        </center>







    </form>








</body>

</html>