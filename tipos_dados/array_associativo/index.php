<?php
//Printar Array - print_r é comose printa um arrray
// echo não funciona pq echo tranfora tudo em string

$a = ['nome' => 'shark', 'patas' => 4, 'cor' => 'marrom'];

print_r($a['nome']);
echo "<br/>";

print_r($a);
echo "<br/>";

$arr = ['chave' => 'valor', 'bool' => true];

echo "<br/>";
print_r($arr)
?>


