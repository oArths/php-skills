<?php

$x = 10;
echo "$x é ma variavel global <br/>";

function teste(){
    $x = 5;


    echo "$x é ma variavel local<br/>";
}
teste();
echo "$x é ma variavel global<br/>";
teste();

function testenado(){
    $x =12;
    echo "$x é uma variavel local 2<br/>";


}

teste();
// echo "<br/>";
testenado();

?>