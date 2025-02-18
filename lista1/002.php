<?php 
    $primeiroNumero = readline("Digite o primeiro número: ");
    $segundoNumero = readline("Digite o segundo número: ");
    $terceiroNumero = readline("Digite o terceiro número: ");
    $quartoNumero = readline("Digite o quarto número: ");
    $mediaPonderada = ($primeiroNumero * 1 + $segundoNumero * 2 + $terceiroNumero * 3 + $quartoNumero * 4)/10;
    echo "A média ponderada dos quatro números inseridos é: $mediaPonderada";
?>