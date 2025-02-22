<?php 
    $valorProduto = readline ("Digite o valor do produto: ");
    if ($valorProduto < 20) {
        $valorProduto *= 1.45;
    } else {
        $valorProduto *= 1.30;
    }

    echo "O valor é: R$" . number_format($valorProduto, 2, ',');
?>