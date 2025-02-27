<?php 
    $horasTrabalhadas = readline("Digite as horas trabalhadas: ");
    $salarioPorHora = readline("Digite o salário por hora: ");

    if ($horasTrabalhadas < 160){
        $salario160Horas = $salarioPorHora * $horasTrabalhadas;
        $salario160Horas = $salario160Horas * 0.95;
    } else {
        $salario160Horas = $salarioPorHora * 160;
        $horasExtra = $horasTrabalhadas - 160;
        $salarioExtra = $salarioPorHora * 1.5;
        $horasExtra = $horasExtra * $salarioExtra;
        $salario160Horas = $salario160Horas + $horasExtra;
    }

    echo "O seu salário é de $salario160Horas";
?>