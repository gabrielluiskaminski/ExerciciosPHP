<?php 
    $base = readline ("Digite o valor da base do retângulo: ");
    $altura = readline("Digite o valor da altura do retângulo: ");

    $perimetro = 2 * ($base + $altura);
    $area = $base * $altura;
    $diagonal = sqrt(($base * $base) + ($altura * $altura));
    
    echo "O valor do perímetro é: " . $perimetro . "\n";
    echo "O valor da área é: " . $area . "\n";
    echo "O valor da diagonal é: " . $diagonal . "\n";
?>