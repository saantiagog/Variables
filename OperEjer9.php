<?php
    $name = $_POST["name"];
    $asig = $_POST["asig"];
    $ex1 = $_POST["ex1"];
    $ex2 = $_POST["ex2"];
    $ex3 = $_POST["ex3"];

    $percen = ($ex1 * 0.3) + ($ex2 * 0.3) + ($ex3 * 0.4);

    if($percen > 4.0){
        echo $name. " su Calificación final es de: ". $percen.  " APROBADO";
    }else{
        echo $name. "Calificación final: ". $percen.  " REPROBADO";
    }

    




?>