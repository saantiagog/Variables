
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

  if($num1>$num2){
    if($num1>$num3){
        echo $num1. " el mayor que ". $num2. " y ". $num3;
    }
  }elseif($num2>$num3){
        echo $num2. " el mayor que ". $num1. " y ". $num3;
}else{
    echo $num3. " el mayor que ". $num1. " y ". $num2;
}

?>