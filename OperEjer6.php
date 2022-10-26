<?php

    $vol = $_POST["vol"];
    $post = $_POST["post"];
    $tarje = $_POST["tarje"];

    $Tvol = $vol * 2000;
    $Tpost = $post * 5000;
    $Ttarje = $tarje * 500;

    $total = $Tvol + $Tpost + $Ttarje;

    echo " El total de volantes pedidos son ". $vol. " para un total de ". $Tvol. " $. <br/>".
    " El total de posters pedidos son ". $post. " para un total de ". $Tpost. " $. <br/>".
    " El total de tarjetas pedidas son ". $tarje. " para un total de ". $Ttarje. " $. <br/>".
    " Total: ". $total. " $ ";
    


?>