<?php 
    $salarioMinimo = readline("Digite o valor do salário minimo: ");
    $quilowattsGasto = readline("Digite a quantidade usada de quilowatts: ");
    
    $quilowatt = ($salarioMinimo/7) / 100;
    $valorPago = $quilowatt * $quilowattsGasto;
    $valorDesconto = $valorPago * 0.9;
    
    echo "O valor a ser pago por cada quilowatt é: " . number_format($quilowatt, 2) . "\n";
    echo "O valor a ser pago no total é: " . number_format($valorPago, 2) . "\n";
    echo "O valor a ser pago com desconto de 10% é: " . number_format($valorDesconto, 2) . "\n";
?>