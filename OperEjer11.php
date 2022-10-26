<?php

    $precio = $_POST["precio"];
    $preciofinal = ($precio * 0.15) + $precio;


    echo "El valor al que se debe vender el producto es de: ".$preciofinal;

?>