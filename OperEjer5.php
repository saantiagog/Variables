<?php

    $h1 = $_POST["h1"];
    $h2 = $_POST["h2"];
    $name1 = $_POST["name1"];
    $name2 = $_POST["name2"];
    $resta = $h1 - $h2;

    if($resta==0){
        echo "Tienen la misma edad";
    }
    elseif($h1>$h2){
        $difer = $h1 - $h2;
        echo $name1. " con ". $h1.  " años es el hermano mayor por ".$difer. " años"; 
    }else{
        $difer2 = $h2 - $h1;
        echo $name2. " con ". $h2.  " años es el hermano mayor por ".$difer2. " años";
    }

?>