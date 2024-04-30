<?php
$carro = ['nome' => 'hindua', 
'cor' =>  'prata', 
'rodas' => 'redondas',
'velociade_max' => 100,
];

print_r($carro['nome']);
echo "<br/>";

print_r($carro['cor']);
echo "<br/>";

$marca = $carro['nome'];
$velocicade_maxima = $carro['velociade_max'];

echo "o carro é da marca $marca e atinge no maximo $velocicade_maxima km/h"
?>


