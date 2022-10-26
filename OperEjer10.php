<?php

    $precio = $_POST["precio"];
    $desc = $precio * 0.2;

        if($precio >= 20000){
            $total = $precio - $desc;
            echo "El total a pagar es de: ".$total;
        }else{
            echo "El total a pagar es de: ".$precio;
        }

?>