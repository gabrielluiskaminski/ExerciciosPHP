<?php 
    $preco = readline ("Digite o preço do produto: ");
    $codigo = readline ("Digite o código do produto: ");

    if ( $codigo == 1) {
        echo "O produto à vista em dinheiro fica no valor de R$ " . number_format($preco * 0.9, 2, ',') . " um desconto de 10 %"; 
    } else if ($codigo == 2) {
        echo "O produto à vista no cartão fica no valor de R$ " . number_format($preco * 0.95, 2, ',') . " um desconto de 5 %"; 
    } else if ($codigo == 3) {
        echo "O produto não possui desconto mas pode ser parcelado em duas vezes de R$ " . number_format($preco / 2, 2, ',');
    } else if ($codigo == 4) {
        echo "O produto possui acréscimo de 10 % e pode ser parcelado em 3 vezes de R$ " . number_format(($preco * 1.1) / 3, 2, ',');
    } else {
        echo "Código inválido.";
    }
?>