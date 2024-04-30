<?php
echo 5/2;

if(is_float(5/2)){
    echo"é float";
    echo "<br/>";

}
echo 2 . 4;
echo "<br/>";
if(is_string(5 . 2)){
    echo"é string";
    echo "<br/>";

}

$nome = "Arthur";
$sobrenome = "Ferreira";

$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;

?>