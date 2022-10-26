<?php

    $capital = $_POST["capital"];



    if($capital < 500){
            $total = ($capital * 0.2) + $capital;
            echo "Capital: ". $capital. " Total: ". $total;
    }elseif($capital >=500 && $capital < 1500){
        $total1 = ($capital * 0.045) + $capital;
        echo "Capital: ". $capital." Total: ". $total1;
    }else{
        $total2 = ($capital * 0.07) + $capital;
        echo "Capital: ". $capital. " Total: ". $total2;
    }

?>