<?php
    $numero = readline("Digite um número: ");

    $centena = (intdiv($numero , 100));
    $restoCentena = $numero % 100; 
    
    $dezena = (intdiv($restoCentena, 10)); 
    $restoDezena = $restoCentena % 10; 
    
    echo "O número inverso é $restoDezena" . "$dezena" . "$centena";
?>