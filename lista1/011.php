<?php
    $numero = readline("Digite um número: ");

    $centena = (intdiv($numero , 100));
    $restoCentena = $numero % 100; 
    
    $dezena = (intdiv($restoCentena, 10)); 
    $restoDezena = $restoCentena % 10; 

    $digitoVerificador = (($centena + $restoDezena) * 1) + (($dezena + $dezena) * 2) + (($restoDezena + $centena) * 3);
    $digitoVerificador = $digitoVerificador % 10;  
    
    echo "O digito verificador é: $digitoVerificador";
?>