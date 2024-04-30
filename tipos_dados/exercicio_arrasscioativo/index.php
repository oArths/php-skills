<?php
$pessoa = ['nome' => 'ana', 
'cor' =>  'branca', 
'idade' => '18',
'pais' => 'brasil',
];
 
$nome = $pessoa['nome'];
$pais = $pessoa['pais'];
$idade = $pessoa['idade']; 

if( $idade >= 18){
    echo "$nome é maior de idade no $pais";
}
?>


