<?php

class Pessoa{
    function Falar(){
        echo "ola";
    } 
}
$arthur = new Pessoa();
$arthur->nome = "arthur";
echo $arthur->nome;
echo "<br/>";
$arthur->Falar();

?>