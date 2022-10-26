<?php
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];

    if($sexo == "Hombre" or $sexo =="M"){
        if($edad >= 63){
            echo "usted es hombre, tiene ".$edad." años y se puede jubilar";
        }else{
            echo "usted es hombre, tiene ".$edad." años y no se puede jubilar";
        }
    }else{
        if($edad >= 54){
            echo "usted es mujer, tiene ".$edad." años y se puede jubilar";
        }else{
            echo "usted es mujer, tiene ".$edad." años y  no se puede jubilar";
        }
    }


?>