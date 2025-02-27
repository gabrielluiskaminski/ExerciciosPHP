<?php 
    $salarioFixo = readline("Digite seu salário fixo: ");
    $vendasEfetuadas = readline("Digite o valor das vendas efetuadas: ");

    if ($vendasEfetuadas <= 1500){
        $comissao = $vendasEfetuadas * 0.03;
        $salarioTotal = $salarioFixo + $comissao;
    } else {
        $comissao = 1500 * 0.03;
        $comissaoExtra = ($vendasEfetuadas - 1500) * 0.05;
        $salarioTotal = $salarioFixo + $comissao + $comissaoExtra;
    }

    echo "Seu salário total é de: $salarioTotal";
?>