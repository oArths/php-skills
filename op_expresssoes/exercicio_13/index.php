
<?php
$a = 12;
$b = 2;
$c = 5;

$result = $a % $b;
$erro = $a % $c;

if($result > 0){
    echo "valor $result impar";
}else{
    echo "valor $result par";
}
echo "<br/>";
if($erro > 0){
    echo "valor $erro impar";
}else{
    echo "valor $erro par";
}

?> 