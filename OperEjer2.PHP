<?php

    $Nombre = $_POST["name"];
    $Asig = $_POST["asig"];
    $Nota1 = $_POST["nota1"];
    $Nota2 = $_POST["nota2"];
    $Nota3 = $_POST["nota3"];
    $Promedio = ($Nota1 + $Nota2 + $Nota3) / 3 ;

    echo  $Nombre. " su promedio de notas en  ". $Asig. " son ".  $Promedio;
?>