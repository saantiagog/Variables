<?php


    $Horas = $_POST["hora"];
    $Valor = $_POST["valor"];
    $Salario = $Horas * $Valor;

    echo "Su salario es de ". $Salario;

?>