<?php
$test = "oi";    
echo"$test global 1 <br/>";


if(true){
    $test = 12;

    echo"$test if <br/>";
}

echo "$test global 2 <br/>";

function funcao(){
    echo "$test funcao test <br/>";

}

funcao();
function funcao_global(){
    global $test;
    echo "$test funcao global <br/>";

}

funcao_global();


?>