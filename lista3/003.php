<?php 
    $numero = readline ("Digite um número: ");
    while ($numero != 0) {
        $juncao[] = $numero;
        $numero = readline ("Digite um número: ");
    }
    $soma = array_sum($juncao);
    $media = $soma / count($juncao);
    $contador = count($juncao);
    echo "A somatória dos números é $soma, a média é de $media e a quantidade de valores lidos é $contador";
?>