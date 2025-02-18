<?php
    $hora = readline("Digite a hora atual utilizando ponto ao invés de dois pontos: ");
    $minutosQuebrados = fmod ($hora, 1);
    $minutos = (int) $hora;
    $minutos = $minutos * 60;
    $minutos = $minutos + $minutosQuebrados;

    echo "A quantidade de minutos que passou desde que o dia começou foi de: $minutos";
?>