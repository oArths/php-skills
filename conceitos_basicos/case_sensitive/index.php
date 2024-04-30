<?php
//Case Sensite - é a ideia que difentes sintaxes na hora de escrever 
//como maiusculas e minusculas podem ou não gerar erro 

// não é case sensitive
     echo "teste <br/>";
     Echo "test2 <br/>";

// é case sensitive

    $nome= "Arthur";

    echo $nome;
    //da erro pelo fato de ter diferença de sintaxe
    echo $Nome;

?>