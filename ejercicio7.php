<html>
    <head>

    </head>
    <body bgcolor="#98b1c8">

    <form action="" method="POST">

<?php

if($_POST['calcular'] == 'Calcular'){
    $peso = $_POST['txt1'];
    /*$peso1 = (int) $peso;*/
    $altura = $_POST['txt2'];
    $alturafinal = $altura /100;
    /*$altura1 = (int) $altura;*/


    $imc = round($peso / ($alturafinal**2),1);

    if($imc >= 20 and $imc <=25){
        echo "<script> alert ('Tu índice de masa corporal es $imc (Tienes un peso normal)')</script>";
    }
        if($imc >= 26 and $imc <=30){
            echo "<script> alert ('Tu índice de masa corporal es $imc (Tienes un peso sobrepeso)')</script>";
        }
            if($imc > 30){
                echo "<script> alert ('Tu índice de masa corporal es $imc (Tienes obesidad)')</script>";
            }
    }
    


?>

<center>
<br>
<h2>Índice de masa corporal- Formulario</h2><br>Escribe tu peso y altura y calcularé tu índice de masa corporal.<br><br><br><br>

Peso  : <input type="number" name="txt1" value=""> Kg<br><br>
Altura:<input type="number" name="txt2" value=""> Cm<br><br>
<input type="submit" name="calcular" value="Calcular">







</center>






    </form>
    </body>
</html>