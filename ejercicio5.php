<html>

<head>

</head>

<body bgcolor="#98b1c8">

    <form action="" method="POST">

        <?php

        error_reporting(0);

        if ($_POST['calcular'] == 'Calcular') {
            $n1 = $_POST['txt1'];

            switch ($n1) {
                case 1:
                    echo "<script>alert ('Es el dia Lunes, recien empezamos')</script>";
                    break;
                case 2:
                    echo "<script>alert ('Es el dia Martes, falta poco')</script>";
                    break;
                case 3:
                    echo "<script>alert ('Es el dia Miercoles, mitad de semana')</script>";
                    break;
                case 4:
                    echo "<script>alert ('Es el dia Jueves, levantate papito')</script>";
                    break;
                case 5:
                    echo "<script>alert ('Es el dia Viernes, se me calento el hocico')</script>";
                    break;
                case 6:
                    echo "<script>alert ('Es el dia Sabado, que paso ayer!')</script>";
                    break;
                case 7:
                    echo "<script>alert ('Es el dia Domingo, dia del Señor')</script>";
                    break;
                default : 
                echo "<script>alert ('Ingresaste un valor distinto a los permitidos, lee bien!')</script>";
                break;  
            }
        }







        ?>

        <center>
            <br><br><h2>Calculador del dia de la semana</h2><br>
            <p>Ingrese un numero del 1 al 7</p><br>
            <input type="text" name="txt1" value="">Numero
            <input type="submit" name="calcular" value="Calcular">


        </center>









    </form>








</body>

</html>