<?php

$a = 10;
$c = 20.4;

if(is_int($a) || is_float($c)){
  $b = $a * 2;
  echo "novo valor: $b <br/>";

  if($b > 100){
    echo "o numero $b é maior que 100 <br/>";
    }else{
        echo "o numero $b não é maior que 100 <br/>";
    }


}else{
    echo "valores não são inteiros <br/>";
}



?>