<?php 
    $Nombre = $_POST["name"];
    $Pganados = $_POST["Pganados"];
    $Pperdidos = $_POST["Pperdidos"];
    $Pempatados = $_POST["Pempatados"];
    $PuntosPganados = $Pganados * 3;
    $PuntosPperdidos = $Pperdidos * 0;
    $PuntosPempatados = $Pempatados * 1;
    $Puntos = $PuntosPganados + $PuntosPperdidos + $PuntosPempatados;

    echo " Los puntos del equipo ". $Nombre. " es ". $Puntos;




?>