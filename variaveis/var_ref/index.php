<?php

$x = 2;
$y =& $x;


echo $x;
echo "<br/>";
echo $y;
echo "<br/>";


$y = 15;

echo "Atribuições apos Ref";
echo "<br/>";
echo $x;
echo "<br/>";
echo $y;
echo "<br/>";

$x = 20;
echo "Atribuições apos Ref 2";
echo "<br/>";
echo $x;
echo "<br/>";
echo $y;
echo "<br/>";

$nome = "Arthur";

$nome2 =& $nome;

echo $nome2;
echo "<br/>";
echo $nome;
echo "<br/>";

$nome2= "Arthusss";
echo $nome2;
echo "<br/>";
echo $nome;
echo "<br/>";
?>