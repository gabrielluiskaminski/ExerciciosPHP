<?php 
    $horaInicial = readline("Digite a hora de início de jogo: ");
    $horaFinal = readline("Digite a hora de final de jogo: ");

    if ($horaInicial < $horaFinal){
        $tempoJogo = $horaFinal - $horaInicial;
    } elseif ($horaInicial >= $horaFinal) {
        $tempoJogo = (24 - $horaInicial) + $horaFinal;
    }

    echo "O tempo de jogo foi de $tempoJogo";
?>