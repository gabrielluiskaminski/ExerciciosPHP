<?php 
    $diagonalMaior = readline("Digite o valor da diagonal maior do losângulo: ");
    $diagonalMenor = readline("Digite o valor da diagonal menor do losângulo: ");

    $area = ($diagonalMaior * $diagonalMenor) / 2;
    
    echo "A área do losângulo mede: " . $area . "cm";
?>