<?php 
    $numero = readline("Digite um número: ");

    if ($numero >= 30 && $numero <= 90) {
        echo "Este número esta entre 30 e 90.";
    } else if ($numero > 120) { 
        echo "Este número é maior que 120";
    } else {
        echo "O número não está entre 30 e 90 nem acima de 120.";
    }
?>