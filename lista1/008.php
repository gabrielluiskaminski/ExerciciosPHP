<?php 
    $carrosVendidos = readline("Insira o número de carros vendidos: ");
    $totalVendas = readline("Insira o valor total das vendas: ");
    $salarioFixo =readline("Insira o seu salário fixo: ");
    $valorComissao =readline("Insira o valor da comissão por carro vendido: ");

    $salarioFinal = ($carrosVendidos * $valorComissao) + ($totalVendas * 0.05) + $salarioFixo;

    echo "O salário final é de: R$ $salarioFinal";
?>