<?php 
    for ($i = 1; $i <= 10; $i++){
        $num = readline("digite um número: ");
        $numeros[] = $num;     
    }

    $media = array_sum($numeros) / 10;
    echo "A soma dos dez números é " . array_sum($numeros) . ", a média dos exercicíos é $media";
?>