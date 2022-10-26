<?php
    $name = $_POST["name"];
    $asig = $_POST["asig"];
    $calif = $_POST["cali"];


    if($calif < 7){
        echo "$name  su estado en la asignatura  $asig  es REPROBADO";
    }else{
        echo "$name  su estado en la asignatura  $asig  es APROBADO";
    }


?>